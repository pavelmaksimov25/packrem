<?php


declare(strict_types=1);

namespace PyzTest\Zed\NavigationGui\PageObject;

class NavigationDeletePage
{
    /**
     * @var string
     */
    public const URL = '/navigation-gui/delete?id-navigation=%d';

    /**
     * @var string
     */
    public const MESSAGE_SUCCESS = '/Navigation element (\d+) was deleted successfully\\./';
}
