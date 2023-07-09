<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Yves\Router\Router;

use Spryker\Yves\RouterExtension\Dependency\Plugin\RouterEnhancerAwareInterface;
use Symfony\Component\Config\ConfigCacheFactory;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\CacheWarmer\WarmableInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Matcher\RequestMatcherInterface;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\Routing\Router as SymfonyRouter;

class Router extends SymfonyRouter implements RouterInterface, WarmableInterface
{
    /**
     * @var array<\Spryker\Yves\RouterExtension\Dependency\Plugin\RouterEnhancerPluginInterface>
     */
    protected $routerEnhancerPlugins;

    /**
     * @var \Symfony\Component\Config\ConfigCacheFactoryInterface|null
     */
    protected $configCacheFactory;

    /**
     * @param \Symfony\Component\Config\Loader\LoaderInterface $loader
     * @param mixed $resource
     * @param array<\Spryker\Yves\RouterExtension\Dependency\Plugin\RouterEnhancerPluginInterface> $routerEnhancerPlugins
     * @param array<string, mixed> $options
     */
    public function __construct(LoaderInterface $loader, $resource, array $routerEnhancerPlugins, array $options = [])
    {
        parent::__construct($loader, $resource, $options);

        $this->routerEnhancerPlugins = $routerEnhancerPlugins;
    }

    /**
     * @return \Symfony\Component\Routing\Matcher\UrlMatcherInterface|\Symfony\Component\Routing\Matcher\RequestMatcherInterface
     */
    public function getMatcher(): UrlMatcherInterface|RequestMatcherInterface
    {
        if ($this->matcher !== null) {
            return $this->matcher;
        }

        /** @var \Symfony\Component\Routing\Matcher\UrlMatcherInterface $urlMatcher */
        $urlMatcher = parent::getMatcher();
        $this->matcher = $this->setRouterEnhancerPluginsToMatcher($urlMatcher);

        return $this->matcher;
    }

    /**
     * @param string $cacheDir
     *
     * @return array<string>
     */
    public function warmUp(string $cacheDir): array
    {
        $this->getGenerator();
        $this->getMatcher();

        return [];
    }

    /**
     * @param \Symfony\Component\Routing\Matcher\UrlMatcherInterface $matcher
     *
     * @return \Symfony\Component\Routing\Matcher\UrlMatcherInterface
     */
    protected function setRouterEnhancerPluginsToMatcher(UrlMatcherInterface $matcher): UrlMatcherInterface
    {
        if ($matcher instanceof RouterEnhancerAwareInterface) {
            $matcher->setRouterEnhancerPlugins($this->routerEnhancerPlugins);
        }

        return $matcher;
    }

    /**
     * @return \Symfony\Component\Routing\Generator\UrlGeneratorInterface
     */
    public function getGenerator(): UrlGeneratorInterface
    {
        if ($this->generator !== null) {
            return $this->generator;
        }

        $this->generator = $this->setRouterEnhancerPluginsToGenerator(parent::getGenerator());

        return $this->generator;
    }

    /**
     * @param \Symfony\Component\Routing\Generator\UrlGeneratorInterface $generator
     *
     * @return \Symfony\Component\Routing\Generator\UrlGeneratorInterface
     */
    protected function setRouterEnhancerPluginsToGenerator(UrlGeneratorInterface $generator): UrlGeneratorInterface
    {
        if ($generator instanceof RouterEnhancerAwareInterface) {
            $generator->setRouterEnhancerPlugins($this->routerEnhancerPlugins);
        }

        return $generator;
    }

    /**
     * Provides the ConfigCache factory implementation, falling back to a
     * default implementation if necessary.
     *
     * @return \Symfony\Component\Config\ConfigCacheFactoryInterface
     */
    protected function getConfigCacheFactory()
    {
        if ($this->configCacheFactory === null) {
            $this->configCacheFactory = new ConfigCacheFactory($this->options['debug']);
        }

        return $this->configCacheFactory;
    }
}
