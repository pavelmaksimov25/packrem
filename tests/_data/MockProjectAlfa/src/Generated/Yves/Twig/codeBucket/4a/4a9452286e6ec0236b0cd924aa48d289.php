<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @ShopUi/components/molecules/toggler-accordion/toggler-accordion.twig */
class __TwigTemplate_8cfcddd22d2d6de018b1e515d98d5a60 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/toggler-accordion/toggler-accordion.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "toggler-accordion", "tag" => "toggler-accordion"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["wrap-class-name" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "trigger-class-name" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "class-to-toggle" => "is-hidden", "active-class" => (twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12) . "__item--active"), "active-on-touch" => "false"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/toggler-accordion/toggler-accordion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,  45 => 12,  44 => 10,  43 => 9,  42 => 8,  41 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'toggler-accordion',
    tag: 'toggler-accordion',
} %}

{% define attributes = {
    'wrap-class-name': required,
    'trigger-class-name': required,
    'class-to-toggle': 'is-hidden',
    'active-class': config.name ~ '__item--active',
    'active-on-touch': 'false',
} %}
", "@ShopUi/components/molecules/toggler-accordion/toggler-accordion.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-accordion/toggler-accordion.twig");
    }
}
