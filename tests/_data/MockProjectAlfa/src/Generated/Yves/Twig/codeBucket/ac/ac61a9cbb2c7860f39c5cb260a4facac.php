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

/* @ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig */
class __TwigTemplate_a61e4a64c5aac5addf566a13a3c7ff6a extends Template
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
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("rating-selector", "@SprykerShop:ProductReviewWidget"), "@ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["reviewCount" => ""], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 11
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "reviewCount", [], "any", false, false, false, 11))) {
            // line 12
            echo "        ";
            $context["reviewCountJsName"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "parentJsName", [], "any", false, false, false, 12)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "parentJsName", [], "any", false, false, false, 12) . "__review-count")) : (""));
            // line 13
            echo "
        <span class=\"";
            // line 14
            echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14) . "__count"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 14, $this->source); })())], 14, $context, $this->getSourceContext());
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "jsName", [], "any", false, false, false, 14), "html", null, true);
            echo "__review-count ";
            echo twig_escape_filter($this->env, (isset($context["reviewCountJsName"]) || array_key_exists("reviewCountJsName", $context) ? $context["reviewCountJsName"] : (function () { throw new RuntimeError('Variable "reviewCountJsName" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "\">(";
            echo twig_escape_filter($this->env, $this->env->getFilter('executeFilterIfExists')->getCallable()(((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "reviewCount", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "reviewCount", [], "any", false, false, false, 14), 0)) : (0)), "formatInt", twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "locale", [], "any", false, false, false, 14)), "html", null, true);
            echo ")</span>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  64 => 13,  61 => 12,  59 => 11,  53 => 9,  49 => 8,  45 => 1,  44 => 4,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('rating-selector', '@SprykerShop:ProductReviewWidget') %}
{% import _self as component %}

{% define data = {
    reviewCount: '',
} %}

{% block body %}
    {{ parent() }}

    {% if data.reviewCount is not empty %}
        {% set reviewCountJsName = data.parentJsName ? data.parentJsName ~ '__review-count' %}

        <span class=\"{{ component.renderClass(config.name ~ '__count', modifiers) }} {{ config.jsName }}__review-count {{ reviewCountJsName }}\">({{ data.reviewCount | default(0) | executeFilterIfExists('formatInt', app.locale) }})</span>
    {% endif %}
{% endblock %}
", "@ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", "/data/src/Pyz/Yves/ProductReviewWidget/Theme/default/components/molecules/rating-selector/rating-selector.twig");
    }
}
