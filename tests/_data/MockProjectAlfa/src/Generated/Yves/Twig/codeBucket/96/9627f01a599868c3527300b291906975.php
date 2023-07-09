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

/* @CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig */
class __TwigTemplate_c95e3b318a270c23aba22740ee46a59d extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig"));

        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "filter-enumeration"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["filter" => null, "isMultiSelect" => null], $context['data']);        // line 12
        $context["isMultiSelect"] = (((null === twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "isMultiSelect", [], "any", false, false, false, 12))) ? (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "filter", [], "any", false, true, false, 12), "config", [], "any", false, true, false, 12), "isMultiValued", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "filter", [], "any", false, true, false, 12), "config", [], "any", false, true, false, 12), "isMultiValued", [], "any", false, false, false, 12), false)) : (false))) : (false));
        // line 13
        $context["activeValues"] = (((isset($context["isMultiSelect"]) || array_key_exists("isMultiSelect", $context) ? $context["isMultiSelect"] : (function () { throw new RuntimeError('Variable "isMultiSelect" does not exist.', 13, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "filter", [], "any", false, false, false, 13), "activeValue", [], "any", false, false, false, 13)) : ([0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "filter", [], "any", false, false, false, 13), "activeValue", [], "any", false, false, false, 13)]));
        // line 14
        $context["inputComponent"] = (((isset($context["isMultiSelect"]) || array_key_exists("isMultiSelect", $context) ? $context["isMultiSelect"] : (function () { throw new RuntimeError('Variable "isMultiSelect" does not exist.', 14, $this->source); })())) ? ("checkbox") : ("radio"));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <ul class=\"menu\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "filter", [], "any", false, false, false, 18), "values", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["filterValue"]) {
            // line 19
            echo "            <li class=\"menu__item menu__item--filter-enumeration\">
                ";
            // line 20
            $this->loadTemplate($this->env->getFunction('atom')->getCallable()((isset($context["inputComponent"]) || array_key_exists("inputComponent", $context) ? $context["inputComponent"] : (function () { throw new RuntimeError('Variable "inputComponent" does not exist.', 20, $this->source); })())), "@CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig", 20)->display(twig_to_array(["modifiers" => [0 => "filter"], "attributes" => ["name" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 23
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "filter", [], "any", false, false, false, 23), "config", [], "any", false, false, false, 23), "parameterName", [], "any", false, false, false, 23) . (((isset($context["isMultiSelect"]) || array_key_exists("isMultiSelect", $context) ? $context["isMultiSelect"] : (function () { throw new RuntimeError('Variable "isMultiSelect" does not exist.', 23, $this->source); })())) ? ("[]") : (""))), "value" => twig_get_attribute($this->env, $this->source,             // line 24
$context["filterValue"], "value", [], "any", false, false, false, 24), "checked" => twig_in_filter(twig_get_attribute($this->env, $this->source,             // line 25
$context["filterValue"], "value", [], "any", false, false, false, 25), (isset($context["activeValues"]) || array_key_exists("activeValues", $context) ? $context["activeValues"] : (function () { throw new RuntimeError('Variable "activeValues" does not exist.', 25, $this->source); })()))], "data" => ["label" => (((((twig_get_attribute($this->env, $this->source,             // line 28
$context["filterValue"], "value", [], "any", false, false, false, 28) . " <span class=\"") . (isset($context["inputComponent"]) || array_key_exists("inputComponent", $context) ? $context["inputComponent"] : (function () { throw new RuntimeError('Variable "inputComponent" does not exist.', 28, $this->source); })())) . "__counter\">") . $this->env->getFilter('executeFilterIfExists')->getCallable()(twig_get_attribute($this->env, $this->source, $context["filterValue"], "docCount", [], "any", false, false, false, 28), "formatInt", twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "locale", [], "any", false, false, false, 28))) . "</span>")]]));
            // line 31
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filterValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 33,  92 => 31,  90 => 28,  89 => 25,  88 => 24,  87 => 23,  86 => 20,  83 => 19,  79 => 18,  76 => 17,  66 => 16,  56 => 1,  54 => 14,  52 => 13,  50 => 12,  49 => 7,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'filter-enumeration'
} %}

{% define data = {
    filter: null,
    isMultiSelect: null
} %}

{% set isMultiSelect = data.isMultiSelect is null ? (data.filter.config.isMultiValued | default(false)) : false %}
{% set activeValues = isMultiSelect ? data.filter.activeValue : [data.filter.activeValue] %}
{% set inputComponent = isMultiSelect ? 'checkbox' : 'radio' %}

{% block body %}
    <ul class=\"menu\">
        {% for filterValue in data.filter.values %}
            <li class=\"menu__item menu__item--filter-enumeration\">
                {% include atom(inputComponent) with {
                    modifiers: ['filter'],
                    attributes: {
                        name: data.filter.config.parameterName ~ (isMultiSelect ? '[]' : ''),
                        value: filterValue.value,
                        checked: (filterValue.value in activeValues)
                    },
                    data: {
                        label: filterValue.value ~ ' <span class=\"' ~ inputComponent ~ '__counter\">' ~ filterValue.docCount | executeFilterIfExists('formatInt', app.locale) ~ '</span>'
                    }
                } only %}
            </li>
        {% endfor %}
    </ul>
{% endblock %}
", "@CatalogPage/components/molecules/filter-enumeration/filter-enumeration.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/filter-enumeration/filter-enumeration.twig");
    }
}
