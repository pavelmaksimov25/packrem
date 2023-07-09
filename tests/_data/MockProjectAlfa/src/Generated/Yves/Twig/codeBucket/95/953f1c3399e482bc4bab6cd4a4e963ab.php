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

/* @ShopUi/components/molecules/suggest-search/suggest-search.twig */
class __TwigTemplate_e36633c2148ec4dc4a1b6ed9a0c8ae11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/suggest-search/suggest-search.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/suggest-search/suggest-search.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/suggest-search/suggest-search.twig"));

        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "suggest-search", "tag" => "suggest-search"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["suggestion-url" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "base-suggest-url" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "input-class-name" =>         // line 11
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 11, $this->source); })()), "debounce-delay" => 500, "throttle-delay" => 200, "letters-trashold" => 2, "overlay-class-name" => "js-overlay-block", "overlay-breakpoint" => "0"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <div class=\"is-hidden ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "__container ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "jsName", [], "any", false, false, false, 20), "html", null, true);
        echo "__container\"></div>

    ";
        // line 22
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("ajax-provider"), "@ShopUi/components/molecules/suggest-search/suggest-search.twig", 22)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "jsName", [], "any", false, false, false, 23) . "__ajax-provider"), "attributes" => ["method" => "post", "url" => twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 26, $this->source); })()), "suggestion-url", [], "array", false, false, false, 26)]]));
        // line 29
        echo "
    ";
        // line 30
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("ajax-loader"), "@ShopUi/components/molecules/suggest-search/suggest-search.twig", 30)->display(twig_to_array(["modifiers" => [0 => "big"], "attributes" => ["provider-class-name" => (twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "jsName", [], "any", false, false, false, 33) . "__ajax-provider")]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/suggest-search/suggest-search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  88 => 30,  85 => 29,  83 => 26,  82 => 23,  81 => 22,  73 => 20,  63 => 19,  53 => 1,  52 => 11,  51 => 10,  50 => 9,  49 => 8,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'suggest-search',
    tag: 'suggest-search',
} %}

{% define attributes = {
    'suggestion-url': required,
    'base-suggest-url': required,
    'input-class-name': required,
    'debounce-delay': 500,
    'throttle-delay': 200,
    'letters-trashold': 2,
    'overlay-class-name': 'js-overlay-block',
    'overlay-breakpoint': '0',
} %}

{% block body %}
    <div class=\"is-hidden {{ config.name }}__container {{ config.jsName }}__container\"></div>

    {% include molecule('ajax-provider') with {
        class: config.jsName ~ '__ajax-provider',
        attributes: {
            method: 'post',
            url: attributes['suggestion-url'],
        },
    } only %}

    {% include molecule('ajax-loader') with {
        modifiers: ['big'],
        attributes: {
            'provider-class-name': config.jsName ~ '__ajax-provider',
        },
    } only %}
{% endblock %}
", "@ShopUi/components/molecules/suggest-search/suggest-search.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/suggest-search/suggest-search.twig");
    }
}
