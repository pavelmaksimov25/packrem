<?php


declare(strict_types=1);

namespace PyzTest\Zed\NavigationGui\PageObject;

class NavigationNodeCreatePage
{
    /**
     * @var string
     */
    public const URL = '/navigation-gui/node/create';

    /**
     * @var string
     */
    public const MESSAGE_SUCCESS = '/Navigation node "([^"]*)" was created successfully\\./';
}
