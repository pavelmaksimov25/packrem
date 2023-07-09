<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\SessionRedis\Handler;

use SessionHandlerInterface;
use Spryker\Shared\SessionRedis\Dependency\Service\SessionRedisToMonitoringServiceInterface;
use Spryker\Shared\SessionRedis\Handler\KeyBuilder\SessionKeyBuilderInterface;
use Spryker\Shared\SessionRedis\Handler\LifeTime\SessionRedisLifeTimeCalculatorInterface;
use Spryker\Shared\SessionRedis\Redis\SessionRedisWrapperInterface;

class SessionHandlerRedis implements SessionHandlerInterface
{
    /**
     * @var string
     */
    public const METRIC_SESSION_DELETE_TIME = 'Redis/Session_delete_time';

    /**
     * @var string
     */
    public const METRIC_SESSION_WRITE_TIME = 'Redis/Session_write_time';

    /**
     * @var string
     */
    public const METRIC_SESSION_READ_TIME = 'Redis/Session_read_time';

    /**
     * @var \Spryker\Shared\SessionRedis\Redis\SessionRedisWrapperInterface
     */
    protected $redisClient;

    /**
     * @var \Spryker\Shared\SessionRedis\Handler\KeyBuilder\SessionKeyBuilderInterface
     */
    protected $keyBuilder;

    /**
     * @var string
     */
    protected $savePath;

    /**
     * @var \Spryker\Shared\SessionRedis\Dependency\Service\SessionRedisToMonitoringServiceInterface
     */
    protected $monitoringService;

    /**
     * @var \Spryker\Shared\SessionRedis\Handler\LifeTime\SessionRedisLifeTimeCalculatorInterface
     */
    protected $sessionRedisLifeTimeCalculator;

    /**
     * @param \Spryker\Shared\SessionRedis\Redis\SessionRedisWrapperInterface $redisClient
     * @param \Spryker\Shared\SessionRedis\Handler\KeyBuilder\SessionKeyBuilderInterface $keyBuilder
     * @param \Spryker\Shared\SessionRedis\Dependency\Service\SessionRedisToMonitoringServiceInterface $monitoringService
     * @param \Spryker\Shared\SessionRedis\Handler\LifeTime\SessionRedisLifeTimeCalculatorInterface $sessionRedisLifeTimeCalculator
     */
    public function __construct(
        SessionRedisWrapperInterface $redisClient,
        SessionKeyBuilderInterface $keyBuilder,
        SessionRedisToMonitoringServiceInterface $monitoringService,
        SessionRedisLifeTimeCalculatorInterface $sessionRedisLifeTimeCalculator
    ) {
        $this->redisClient = $redisClient;
        $this->keyBuilder = $keyBuilder;
        $this->monitoringService = $monitoringService;
        $this->sessionRedisLifeTimeCalculator = $sessionRedisLifeTimeCalculator;
    }

    /**
     * @param string $savePath
     * @param string $sessionName
     *
     * @return bool
     */
    public function open($savePath, $sessionName): bool
    {
        $this->redisClient->connect();

        return $this->redisClient->isConnected();
    }

    /**
     * @return bool
     */
    public function close(): bool
    {
        $this->redisClient->disconnect();

        return !$this->redisClient->isConnected();
    }

    /**
     * @param string $sessionId
     *
     * @return string
     */
    public function read($sessionId): string
    {
        $key = $this->buildSessionKey($sessionId);
        $startTime = microtime(true);
        $result = $this->redisClient->get($key);
        $decodedResult = null;
        $this->monitoringService->addCustomParameter(static::METRIC_SESSION_READ_TIME, microtime(true) - $startTime);

        if ($result) {
            $decodedResult = json_decode($result, true);
        }

        return $decodedResult ?? '';
    }

    /**
     * @param string $sessionId
     * @param string $sessionData
     *
     * @return bool
     */
    public function write($sessionId, $sessionData): bool
    {
        $key = $this->buildSessionKey($sessionId);

        if (strlen($sessionData) < 1) {
            return true;
        }

        $startTime = microtime(true);
        $result = $this->redisClient->setex(
            $key,
            $this->sessionRedisLifeTimeCalculator->getSessionLifeTime(),
            (string)json_encode($sessionData),
        );
        $this->monitoringService->addCustomParameter(static::METRIC_SESSION_WRITE_TIME, microtime(true) - $startTime);

        return $result;
    }

    /**
     * @param string $sessionId
     *
     * @return bool
     */
    public function destroy($sessionId): bool
    {
        $key = $this->buildSessionKey($sessionId);

        $startTime = microtime(true);
        $this->redisClient->del([$key]);
        $this->monitoringService->addCustomParameter(static::METRIC_SESSION_DELETE_TIME, microtime(true) - $startTime);

        return true;
    }

    /**
     * @param int $maxLifetime
     *
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function gc($maxLifetime): bool
    {
        return true;
    }

    /**
     * @param string $sessionId
     *
     * @return string
     */
    protected function buildSessionKey(string $sessionId): string
    {
        return $this->keyBuilder->buildSessionKey($sessionId);
    }
}
