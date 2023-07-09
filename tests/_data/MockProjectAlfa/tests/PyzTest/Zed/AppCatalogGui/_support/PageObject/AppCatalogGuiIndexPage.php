<?php


declare(strict_types=1);

namespace PyzTest\Zed\AppCatalogGui\PageObject;

class AppCatalogGuiIndexPage
{
    /**
     * @var string
     */
    public const APP_CATALOG_GUI_INDEX_PAGE_URL = '/app-catalog-gui';

    /**
     * @var string
     */
    public const APP_CATALOG_SCRIPT = '<script src="%s?storeReference=%s&amp;language=%s"></script>';
}
