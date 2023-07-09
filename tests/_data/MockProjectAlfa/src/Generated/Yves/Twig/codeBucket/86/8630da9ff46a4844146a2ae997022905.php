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

/* @CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig */
class __TwigTemplate_c31457d6da7507ada1934cef2ffe158b extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig"));

        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "view-mode-switch", "tag" => "div"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["viewMode" => null], $context['data']);        // line 12
        $context["gridHref"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change-view-mode", ["mode" => "grid", "referer-url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "requestUri", [], "any", false, false, false, 12)]);
        // line 13
        $context["listHref"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change-view-mode", ["mode" => "list", "referer-url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "requestUri", [], "any", false, false, false, 13)]);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <a class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "__link ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "viewMode", [], "any", false, false, false, 16) == "grid")) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "__link--active ";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["gridHref"]) || array_key_exists("gridHref", $context) ? $context["gridHref"] : (function () { throw new RuntimeError('Variable "gridHref" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 17
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig", 17)->display(twig_to_array(["modifiers" => [0 => "view-mode-switch"], "data" => ["name" => "th-large"]]));
        // line 23
        echo "        ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.view.mode.grid"), "html", null, true);
        echo "
    </a>
    <a class=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "__link ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "viewMode", [], "any", false, false, false, 25) != "grid")) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
            echo "__link--active ";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["listHref"]) || array_key_exists("listHref", $context) ? $context["listHref"] : (function () { throw new RuntimeError('Variable "listHref" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 26
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig", 26)->display(twig_to_array(["modifiers" => [0 => "view-mode-switch"], "data" => ["name" => "th-list"]]));
        // line 32
        echo "        ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.view.mode.list"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  107 => 26,  95 => 25,  89 => 23,  87 => 17,  74 => 16,  64 => 15,  54 => 1,  52 => 13,  50 => 12,  49 => 8,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'view-mode-switch',
    tag: 'div'
} %}

{% define data = {
    viewMode: null
} %}

{% set gridHref = path('change-view-mode', { mode: 'grid', 'referer-url': app.request.requestUri }) %}
{% set listHref = path('change-view-mode', { mode: 'list', 'referer-url': app.request.requestUri }) %}

{% block body %}
    <a class=\"{{ config.name }}__link {% if data.viewMode == 'grid' %} {{ config.name }}__link--active {% endif %}\" href=\"{{gridHref}}\">
        {% include atom('icon') with {
            modifiers: ['view-mode-switch'],
            data: {
                name: 'th-large'
            }
        } only %}
        {{ 'catalog.view.mode.grid' | trans }}
    </a>
    <a class=\"{{ config.name }}__link {% if data.viewMode != 'grid' %} {{ config.name }}__link--active {% endif %}\" href=\"{{listHref}}\">
        {% include atom('icon') with {
            modifiers: ['view-mode-switch'],
            data: {
                name: 'th-list'
            }
        } only %}
        {{ 'catalog.view.mode.list' | trans }}
    </a>
{% endblock %}
", "@CatalogPage/components/molecules/view-mode-switch/view-mode-switch.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/view-mode-switch/view-mode-switch.twig");
    }
}
