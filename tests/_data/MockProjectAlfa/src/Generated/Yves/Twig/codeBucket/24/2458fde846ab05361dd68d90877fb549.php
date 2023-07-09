<?php

use Twig\Environment;
use Twig\Source;
use Twig\Template;

/* @@SprykerShop:ShopUi/components/molecules/toggler-click/toggler-click.twig */
class __TwigTemplate_e164117945a45204921eae8c8c69f0f4 extends Template
{
    private $source;

    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()('component'), '@@SprykerShop:ShopUi/components/molecules/toggler-click/toggler-click.twig', 1);
    }

    /**
     * @return void
     */
    protected function doDisplay(array $context, array $blocks = []): void
    {
        $macros = $this->macros;
        // line 3
        if (!array_key_exists('config', $context)) {
            $context['config'] = [];
        }$context['config'] = array_replace_recursive(['name' => 'toggler-click', 'tag' => 'toggler-click'], $context['config']); // line 10
        if (!array_key_exists('attributes', $context)) {
            $context['attributes'] = [];
        }$context['attributes'] = array_replace_recursive(['trigger-selector' => '', 'trigger-class-name' => '', 'target-selector' => '', 'target-class-name' => '', 'class-to-toggle' => 'is-hidden'], $context['attributes']); // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return '@@SprykerShop:ShopUi/components/molecules/toggler-click/toggler-click.twig';
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [43 => 1, 42 => 10, 41 => 3, 34 => 1];
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'toggler-click',
    tag: 'toggler-click',
} %}

{# @deprecated property \"trigger-selector\" is deprecated: use \"trigger-class-name\" instead. #}
{# @deprecated property \"target-selector\" is deprecated: use \"target-class-name\" instead. #}
{% define attributes = {
    'trigger-selector': '',
    'trigger-class-name': '',
    'target-selector': '',
    'target-class-name': '',
    'class-to-toggle': 'is-hidden',
} %}
", '@@SprykerShop:ShopUi/components/molecules/toggler-click/toggler-click.twig', '/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/toggler-click/toggler-click.twig');
    }
}
