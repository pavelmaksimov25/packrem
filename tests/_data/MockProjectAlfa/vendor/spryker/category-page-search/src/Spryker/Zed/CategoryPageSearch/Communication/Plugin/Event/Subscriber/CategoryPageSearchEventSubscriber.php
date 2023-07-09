<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CategoryPageSearch\Communication\Plugin\Event\Subscriber;

use Spryker\Zed\Category\Dependency\CategoryEvents;
use Spryker\Zed\CategoryPageSearch\Communication\Plugin\Event\Listener\CategoryNodeCategoryAttributeSearchPublishListener;
use Spryker\Zed\CategoryPageSearch\Communication\Plugin\Event\Listener\CategoryNodeCategoryAttributeSearchUnpublishListener;
use Spryker\Zed\CategoryPageSearch\Communication\Plugin\Event\Listener\CategoryNodeCategoryPageSearchPublishListener;
use Spryker\Zed\CategoryPageSearch\Communication\Plugin\Event\Listener\CategoryNodeCategoryPageSearchUnpublishListener;
use Spryker\Zed\CategoryPageSearch\Communication\Plugin\Event\Listener\CategoryNodeCategoryTemplateSearchPublishListener;
use Spryker\Zed\CategoryPageSearch\Communication\Plugin\Event\Listener\CategoryNodeCategoryTemplateSearchUnpublishListener;
use Spryker\Zed\CategoryPageSearch\Communication\Plugin\Event\Listener\CategoryNodeSearchPublishListener;
use Spryker\Zed\CategoryPageSearch\Communication\Plugin\Event\Listener\CategoryNodeSearchUnpublishListener;
use Spryker\Zed\Event\Dependency\EventCollectionInterface;
use Spryker\Zed\Event\Dependency\Plugin\EventSubscriberInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @deprecated Will be removed in the next major without replacement, registration of plugins now takes place in {@link \Pyz\Zed\Publisher\PublisherDependencyProvider::getPublisherPlugins()}.
 *
 * @method \Spryker\Zed\CategoryPageSearch\Communication\CategoryPageSearchCommunicationFactory getFactory()
 * @method \Spryker\Zed\CategoryPageSearch\Business\CategoryPageSearchFacadeInterface getFacade()
 * @method \Spryker\Zed\CategoryPageSearch\CategoryPageSearchConfig getConfig()
 * @method \Spryker\Zed\CategoryPageSearch\Persistence\CategoryPageSearchQueryContainerInterface getQueryContainer()
 */
class CategoryPageSearchEventSubscriber extends AbstractPlugin implements EventSubscriberInterface
{
    /**
     * @api
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return \Spryker\Zed\Event\Dependency\EventCollectionInterface
     */
    public function getSubscribedEvents(EventCollectionInterface $eventCollection)
    {
        $this->addCategoryPageSearchPublishListener($eventCollection);
        $this->addCategoryPageSearchUnPublishListener($eventCollection);
        $this->addCategoryNodeSearchCreateListener($eventCollection);
        $this->addCategoryNodeSearchUpdateListener($eventCollection);
        $this->addCategoryNodeSearchDeleteListener($eventCollection);
        $this->addCategoryNodeCategoryPageSearchCreateListener($eventCollection);
        $this->addCategoryNodeCategoryPageSearchUpdateListener($eventCollection);
        $this->addCategoryNodeCategoryPageSearchDeleteListener($eventCollection);
        $this->addCategoryNodeCategoryAttributeSearchCreateListener($eventCollection);
        $this->addCategoryNodeCategoryAttributeSearchUpdateListener($eventCollection);
        $this->addCategoryNodeCategoryAttributeSearchDeleteListener($eventCollection);
        $this->addCategoryNodeCategoryTemplateSearchCreateListener($eventCollection);
        $this->addCategoryNodeCategoryTemplateSearchUpdateListener($eventCollection);
        $this->addCategoryNodeCategoryTemplateSearchDeleteListener($eventCollection);

        return $eventCollection;
    }

    /**
     * @deprecated Use {@link \Spryker\Zed\CategoryPageSearch\Communication\Plugin\Publisher\CategoryTemplate\CategoryTemplateWritePublisherPlugin} instead.
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return void
     */
    protected function addCategoryNodeCategoryTemplateSearchCreateListener(EventCollectionInterface $eventCollection)
    {
        $eventCollection->addListenerQueued(CategoryEvents::ENTITY_SPY_CATEGORY_TEMPLATE_CREATE, new CategoryNodeCategoryTemplateSearchPublishListener(), 0, null, $this->getConfig()->getEventQueueName());
    }

    /**
     * @deprecated Use {@link \Spryker\Zed\CategoryPageSearch\Communication\Plugin\Publisher\CategoryTemplate\CategoryTemplateWritePublisherPlugin} instead.
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return void
     */
    protected function addCategoryNodeCategoryTemplateSearchUpdateListener(EventCollectionInterface $eventCollection)
    {
        $eventCollection->addListenerQueued(CategoryEvents::ENTITY_SPY_CATEGORY_TEMPLATE_UPDATE, new CategoryNodeCategoryTemplateSearchPublishListener(), 0, null, $this->getConfig()->getEventQueueName());
    }

    /**
     * @deprecated Use {@link \Spryker\Zed\CategoryPageSearch\Communication\Plugin\Publisher\CategoryTemplate\CategoryTemplateDeletePublisherPlugin} instead.
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return void
     */
    protected function addCategoryNodeCategoryTemplateSearchDeleteListener(EventCollectionInterface $eventCollection)
    {
        $eventCollection->addListenerQueued(CategoryEvents::ENTITY_SPY_CATEGORY_TEMPLATE_DELETE, new CategoryNodeCategoryTemplateSearchUnpublishListener(), 0, null, $this->getConfig()->getEventQueueName());
    }

    /**
     * @deprecated Use {\Spryker\Zed\CategoryPageSearch\Communication\Plugin\Publisher\CategoryAttribute\CategoryAttributeWritePublisherPlugin} instead.
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return void
     */
    protected function addCategoryNodeCategoryAttributeSearchCreateListener(EventCollectionInterface $eventCollection)
    {
        $eventCollection->addListenerQueued(CategoryEvents::ENTITY_SPY_CATEGORY_ATTRIBUTE_CREATE, new CategoryNodeCategoryAttributeSearchPublishListener(), 0, null, $this->getConfig()->getEventQueueName());
    }

    /**
     * @deprecated Use {\Spryker\Zed\CategoryPageSearch\Communication\Plugin\Publisher\CategoryAttribute\CategoryAttributeWritePublisherPlugin} instead.
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return void
     */
    protected function addCategoryNodeCategoryAttributeSearchUpdateListener(EventCollectionInterface $eventCollection)
    {
        $eventCollection->addListenerQueued(CategoryEvents::ENTITY_SPY_CATEGORY_ATTRIBUTE_UPDATE, new CategoryNodeCategoryAttributeSearchPublishListener(), 0, null, $this->getConfig()->getEventQueueName());
    }

    /**
     * @deprecated Use {\Spryker\Zed\CategoryPageSearch\Communication\Plugin\Publisher\CategoryAttribute\CategoryAttributeDeletePublisherPlugin} instead.
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return void
     */
    protected function addCategoryNodeCategoryAttributeSearchDeleteListener(EventCollectionInterface $eventCollection)
    {
        $eventCollection->addListenerQueued(CategoryEvents::ENTITY_SPY_CATEGORY_ATTRIBUTE_DELETE, new CategoryNodeCategoryAttributeSearchUnpublishListener(), 0, null, $this->getConfig()->getEventQueueName());
    }

    /**
     * @deprecated Use {@link \Spryker\Zed\CategoryPageSearch\Communication\Plugin\Publisher\Category\CategoryWritePublisherPlugin} instead.
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return void
     */
    protected function addCategoryNodeCategoryPageSearchCreateListener(EventCollectionInterface $eventCollection)
    {
        $eventCollection->addListenerQueued(CategoryEvents::ENTITY_SPY_CATEGORY_CREATE, new CategoryNodeCategoryPageSearchPublishListener(), 0, null, $this->getConfig()->getEventQueueName());
    }

    /**
     * @deprecated Use {@link \Spryker\Zed\CategoryPageSearch\Communication\Plugin\Publisher\Category\CategoryWritePublisherPlugin} instead.
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return void
     */
    protected function addCategoryNodeCategoryPageSearchUpdateListener(EventCollectionInterface $eventCollection)
    {
        $eventCollection->addListenerQueued(CategoryEvents::ENTITY_SPY_CATEGORY_UPDATE, new CategoryNodeCategoryPageSearchPublishListener(), 0, null, $this->getConfig()->getEventQueueName());
    }

    /**
     * @deprecated Use {@link \Spryker\Zed\CategoryPageSearch\Communication\Plugin\Publisher\Category\CategoryDeletePublisherPlugin} instead.
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return void
     */
    protected function addCategoryNodeCategoryPageSearchDeleteListener(EventCollectionInterface $eventCollection)
    {
        $eventCollection->addListenerQueued(CategoryEvents::ENTITY_SPY_CATEGORY_DELETE, new CategoryNodeCategoryPageSearchUnpublishListener(), 0, null, $this->getConfig()->getEventQueueName());
    }

    /**
     * @deprecated Use {@link \Spryker\Zed\CategoryPageSearch\Communication\Plugin\Publisher\CategoryNode\CategoryNodeWritePublisherPlugin} instead.
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return void
     */
    protected function addCategoryPageSearchPublishListener(EventCollectionInterface $eventCollection)
    {
        $eventCollection->addListenerQueued(CategoryEvents::CATEGORY_NODE_PUBLISH, new CategoryNodeSearchPublishListener(), 0, null, $this->getConfig()->getEventQueueName());
    }

    /**
     * @deprecated Use {@link \Spryker\Zed\CategoryPageSearch\Communication\Plugin\Publisher\CategoryNode\CategoryNodeDeletePublisherPlugin} instead.
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return void
     */
    protected function addCategoryPageSearchUnPublishListener(EventCollectionInterface $eventCollection)
    {
        $eventCollection->addListenerQueued(CategoryEvents::CATEGORY_NODE_UNPUBLISH, new CategoryNodeSearchUnpublishListener(), 0, null, $this->getConfig()->getEventQueueName());
    }

    /**
     * @deprecated Use {@link \Spryker\Zed\CategoryPageSearch\Communication\Plugin\Publisher\CategoryNode\CategoryNodeWritePublisherPlugin} instead.
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return void
     */
    protected function addCategoryNodeSearchCreateListener(EventCollectionInterface $eventCollection)
    {
        $eventCollection->addListenerQueued(CategoryEvents::ENTITY_SPY_CATEGORY_NODE_CREATE, new CategoryNodeSearchPublishListener(), 0, null, $this->getConfig()->getEventQueueName());
    }

    /**
     * @deprecated Use {@link \Spryker\Zed\CategoryPageSearch\Communication\Plugin\Publisher\CategoryNode\CategoryNodeWritePublisherPlugin} instead.
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return void
     */
    protected function addCategoryNodeSearchUpdateListener(EventCollectionInterface $eventCollection)
    {
        $eventCollection->addListenerQueued(CategoryEvents::ENTITY_SPY_CATEGORY_NODE_UPDATE, new CategoryNodeSearchPublishListener(), 0, null, $this->getConfig()->getEventQueueName());
    }

    /**
     * @deprecated Use {@link \Spryker\Zed\CategoryPageSearch\Communication\Plugin\Publisher\CategoryNode\CategoryNodeDeletePublisherPlugin} instead.
     *
     * @param \Spryker\Zed\Event\Dependency\EventCollectionInterface $eventCollection
     *
     * @return void
     */
    protected function addCategoryNodeSearchDeleteListener(EventCollectionInterface $eventCollection)
    {
        $eventCollection->addListenerQueued(CategoryEvents::ENTITY_SPY_CATEGORY_NODE_DELETE, new CategoryNodeSearchUnpublishListener(), 0, null, $this->getConfig()->getEventQueueName());
    }
}
