<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Url\Business\Redirect\Observer;

use Generated\Shared\Transfer\UrlRedirectTransfer;
use Generated\Shared\Transfer\UrlTransfer;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;
use Spryker\Zed\Url\Business\Redirect\UrlRedirectActivatorInterface;
use Spryker\Zed\Url\Business\Url\UrlUpdaterAfterSaveObserverInterface;
use Spryker\Zed\Url\Persistence\UrlQueryContainerInterface;

class UrlRedirectUpdateObserver implements UrlUpdaterAfterSaveObserverInterface
{
    use TransactionTrait;

    /**
     * @var \Spryker\Zed\Url\Persistence\UrlQueryContainerInterface
     */
    protected $urlQueryContainer;

    /**
     * @var \Spryker\Zed\Url\Business\Redirect\UrlRedirectActivatorInterface
     */
    protected $urlRedirectActivator;

    /**
     * @param \Spryker\Zed\Url\Persistence\UrlQueryContainerInterface $urlQueryContainer
     * @param \Spryker\Zed\Url\Business\Redirect\UrlRedirectActivatorInterface $urlRedirectActivator
     */
    public function __construct(UrlQueryContainerInterface $urlQueryContainer, UrlRedirectActivatorInterface $urlRedirectActivator)
    {
        $this->urlQueryContainer = $urlQueryContainer;
        $this->urlRedirectActivator = $urlRedirectActivator;
    }

    /**
     * @param \Generated\Shared\Transfer\UrlTransfer $urlTransfer
     * @param \Generated\Shared\Transfer\UrlTransfer $originalUrlTransfer
     *
     * @return void
     */
    public function handleUrlUpdate(UrlTransfer $urlTransfer, UrlTransfer $originalUrlTransfer)
    {
        if ($originalUrlTransfer->getUrl() === $urlTransfer->getUrl()) {
            return;
        }

        $this->getTransactionHandler()->handleTransaction(function () use ($urlTransfer, $originalUrlTransfer): void {
            $this->maintainOutdatedRedirectTargetUrls($urlTransfer, $originalUrlTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\UrlTransfer $urlTransfer
     * @param \Generated\Shared\Transfer\UrlTransfer $originalUrlTransfer
     *
     * @return void
     */
    protected function maintainOutdatedRedirectTargetUrls(UrlTransfer $urlTransfer, UrlTransfer $originalUrlTransfer)
    {
        $chainRedirectEntities = $this->findUrlRedirectEntitiesByTargetUrl($originalUrlTransfer->getUrl());

        foreach ($chainRedirectEntities as $chainRedirectEntity) {
            $chainRedirectEntity->setToUrl($urlTransfer->getUrl());
            $chainRedirectEntity->save();

            $this->activateUrlRedirect($chainRedirectEntity->getIdUrlRedirect());
        }
    }

    /**
     * @param string $targetUrl
     *
     * @return \Propel\Runtime\Collection\ObjectCollection<\Orm\Zed\Url\Persistence\SpyUrlRedirect>
     */
    protected function findUrlRedirectEntitiesByTargetUrl($targetUrl)
    {
        /** @var \Propel\Runtime\Collection\ObjectCollection $redirectsCollection */
        $redirectsCollection = $this->urlQueryContainer
            ->queryRedirects()
            ->findByToUrl($targetUrl);

        return $redirectsCollection;
    }

    /**
     * @param int $idUrlRedirect
     *
     * @return void
     */
    protected function activateUrlRedirect($idUrlRedirect)
    {
        $urlRedirectTransfer = new UrlRedirectTransfer();
        $urlRedirectTransfer->setIdUrlRedirect($idUrlRedirect);

        $this->urlRedirectActivator->activateUrlRedirect($urlRedirectTransfer);
    }
}
