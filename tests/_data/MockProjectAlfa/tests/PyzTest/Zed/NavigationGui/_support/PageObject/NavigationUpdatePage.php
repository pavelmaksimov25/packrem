<?php


declare(strict_types=1);

namespace PyzTest\Zed\NavigationGui\PageObject;

class NavigationUpdatePage
{
    /**
     * @var string
     */
    public const URL = '/navigation-gui/update?id-navigation=%d';

    /**
     * @var string
     */
    public const MESSAGE_SUCCESS = '/Navigation element (\d+) was updated successfully\\./';
}
