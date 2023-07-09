<?php


declare(strict_types=1);

namespace PyzTest\Zed\NavigationGui\PageObject;

class NavigationCreatePage
{
    /**
     * @var string
     */
    public const URL = '/navigation-gui/create';

    /**
     * @var string
     */
    public const MESSAGE_SUCCESS = '/Navigation element (\d+) was created successfully\\./';
}
