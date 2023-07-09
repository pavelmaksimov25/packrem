<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SessionRedis;

use Generated\Shared\Transfer\RedisConfigurationTransfer;
use Generated\Shared\Transfer\RedisCredentialsTransfer;
use Spryker\Shared\SessionRedis\SessionRedisConstants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

/**
 * @method \Spryker\Shared\SessionRedis\SessionRedisConfig getSharedConfig()
 */
class SessionRedisConfig extends AbstractBundleConfig
{
    /**
     * @var string
     */
    public const ZED_SESSION_REDIS_CONNECTION_KEY = 'SESSION_ZED';

    /**
     * @var string
     */
    public const YVES_SESSION_REDIS_CONNECTION_KEY = 'SESSION_YVES';

    /**
     * @api
     *
     * @return int
     */
    public function getZedSessionLifeTime(): int
    {
        return $this->get(SessionRedisConstants::ZED_SESSION_TIME_TO_LIVE);
    }

    /**
     * @api
     *
     * @return int
     */
    public function getLockingTimeoutMilliseconds(): int
    {
        return $this->getSharedConfig()->getLockingTimeoutMilliseconds();
    }

    /**
     * @api
     *
     * @return int
     */
    public function getLockingRetryDelayMicroseconds(): int
    {
        return $this->getSharedConfig()->getLockingRetryDelayMicroseconds();
    }

    /**
     * @api
     *
     * @return int
     */
    public function getLockingLockTtlMilliseconds(): int
    {
        return $this->getSharedConfig()->getLockingLockTtlMilliseconds();
    }

    /**
     * @api
     *
     * @return \Generated\Shared\Transfer\RedisConfigurationTransfer
     */
    public function getZedRedisConnectionConfiguration(): RedisConfigurationTransfer
    {
        return (new RedisConfigurationTransfer())
            ->setDataSourceNames(
                $this->getZedDataSourceNames(),
            )
            ->setConnectionCredentials(
                $this->getZedConnectionCredentials(),
            )
            ->setClientOptions(
                $this->getZedConnectionOptions(),
            );
    }

    /**
     * @api
     *
     * @return \Generated\Shared\Transfer\RedisConfigurationTransfer
     */
    public function getYvesRedisConnectionConfiguration(): RedisConfigurationTransfer
    {
        return (new RedisConfigurationTransfer())
            ->setDataSourceNames(
                $this->getYvesDataSourceNames(),
            )
            ->setConnectionCredentials(
                $this->getYvesConnectionCredentials(),
            )
            ->setClientOptions(
                $this->getYvesConnectionOptions(),
            );
    }

    /**
     * @api
     *
     * @return string
     */
    public function getZedRedisConnectionKey(): string
    {
        return static::ZED_SESSION_REDIS_CONNECTION_KEY;
    }

    /**
     * @api
     *
     * @return string
     */
    public function getYvesRedisConnectionKey(): string
    {
        return static::YVES_SESSION_REDIS_CONNECTION_KEY;
    }

    /**
     * @api
     *
     * @return string
     */
    public function getSessionHandlerRedisName(): string
    {
        return $this->getSharedConfig()->getSessionHandlerRedisName();
    }

    /**
     * @api
     *
     * @return string
     */
    public function getSessionHandlerRedisLockingName(): string
    {
        return $this->getSharedConfig()->getSessionHandlerRedisLockingName();
    }

    /**
     * @return array<string>
     */
    protected function getZedDataSourceNames(): array
    {
        return $this->get(SessionRedisConstants::ZED_SESSION_REDIS_DATA_SOURCE_NAMES, []);
    }

    /**
     * @return \Generated\Shared\Transfer\RedisCredentialsTransfer
     */
    protected function getZedConnectionCredentials(): RedisCredentialsTransfer
    {
        return (new RedisCredentialsTransfer())
            ->setScheme($this->getZedScheme())
            ->setHost($this->get(SessionRedisConstants::ZED_SESSION_REDIS_HOST))
            ->setPort($this->get(SessionRedisConstants::ZED_SESSION_REDIS_PORT))
            ->setDatabase($this->get(SessionRedisConstants::ZED_SESSION_REDIS_DATABASE))
            ->setPassword($this->get(SessionRedisConstants::ZED_SESSION_REDIS_PASSWORD, false));
    }

    /**
     * @deprecated Use $this->get(SessionRedisConstants::ZED_SESSION_REDIS_SCHEME) instead. Added for BC reason only.
     *
     * @return string
     */
    protected function getZedScheme(): string
    {
        return $this->get(SessionRedisConstants::ZED_SESSION_REDIS_SCHEME, false) ?:
            $this->get(SessionRedisConstants::ZED_SESSION_REDIS_PROTOCOL);
    }

    /**
     * @return array<string, mixed>
     */
    protected function getZedConnectionOptions(): array
    {
        return $this->get(SessionRedisConstants::ZED_SESSION_REDIS_CLIENT_OPTIONS, []);
    }

    /**
     * @return array<string>
     */
    protected function getYvesDataSourceNames(): array
    {
        return $this->get(SessionRedisConstants::YVES_SESSION_REDIS_DATA_SOURCE_NAMES, []);
    }

    /**
     * @return \Generated\Shared\Transfer\RedisCredentialsTransfer
     */
    protected function getYvesConnectionCredentials(): RedisCredentialsTransfer
    {
        return (new RedisCredentialsTransfer())
            ->setScheme($this->getYvesScheme())
            ->setHost($this->get(SessionRedisConstants::YVES_SESSION_REDIS_HOST))
            ->setPort($this->get(SessionRedisConstants::YVES_SESSION_REDIS_PORT))
            ->setDatabase($this->get(SessionRedisConstants::YVES_SESSION_REDIS_DATABASE))
            ->setPassword($this->get(SessionRedisConstants::YVES_SESSION_REDIS_PASSWORD, false));
    }

    /**
     * @deprecated Use $this->get(SessionRedisConstants::YVES_SESSION_REDIS_SCHEME) instead. Added for BC reason only.
     *
     * @return string
     */
    protected function getYvesScheme(): string
    {
        return $this->get(SessionRedisConstants::YVES_SESSION_REDIS_SCHEME, false) ?:
            $this->get(SessionRedisConstants::YVES_SESSION_REDIS_PROTOCOL);
    }

    /**
     * @return array<string, mixed>
     */
    protected function getYvesConnectionOptions(): array
    {
        return $this->get(SessionRedisConstants::YVES_SESSION_REDIS_CLIENT_OPTIONS, []);
    }
}
