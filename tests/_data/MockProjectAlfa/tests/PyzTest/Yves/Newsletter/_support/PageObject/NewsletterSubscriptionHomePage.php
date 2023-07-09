<?php


declare(strict_types=1);

namespace PyzTest\Yves\Newsletter\PageObject;

class NewsletterSubscriptionHomePage
{
    /**
     * @var string
     */
    public const NEW_EMAIL = 'foo@bar.com';

    /**
     * @var string
     */
    public const EXISTING_EMAIL = 'bar@foo.com';

    /**
     * @var string
     */
    public const FORM_FIELD_EMAIL = '//form[@name=\'newsletterSubscriptionWidgetForm\']//input[@type=\'email\']';

    /**
     * @var string
     */
    public const FORM_BUTTON_SUBMIT = '//button[@type=\'submit\' and @data-qa=\'submit-button\']';

    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'You are already subscribed to the newsletter';

    /**
     * @var string
     */
    public const SUCCESS_MESSAGE = 'You successfully subscribed to the newsletter';
}
