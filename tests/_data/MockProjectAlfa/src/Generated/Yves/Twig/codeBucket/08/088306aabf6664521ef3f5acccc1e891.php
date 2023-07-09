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

/* @ProductGroupWidget/components/molecules/color-selector/color-selector.twig */
class __TwigTemplate_c6aa96bb072a9f93e5ed145e3ed8d052 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'selection' => [$this, 'block_selection'],
            'selectionInner' => [$this, 'block_selectionInner'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("color-selector", "@SprykerShop:ProductGroupWidget"), "@ProductGroupWidget/components/molecules/color-selector/color-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductGroupWidget/components/molecules/color-selector/color-selector.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductGroupWidget/components/molecules/color-selector/color-selector.twig"));

        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["items" =>         // line 5
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 5, $this->source); })()), "colorAttributeName" => "pyzColorCode", "selectionTag" => "button"], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <span class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "__items-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.color-selector"), "html", null, true);
        echo ":</span>

    ";
        // line 13
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_selection($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selection"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selection"));

        // line 17
        echo "    ";
        $context["borderColor"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "colorAttributeName", [], "any", false, false, false, 17), [], "array", true, true, false, 17)) ? ((("border-color: " . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "colorAttributeName", [], "any", false, false, false, 17), [], "array", false, false, false, 17)) . ";")) : (""));
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('selectionInner', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_selectionInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selectionInner"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selectionInner"));

        // line 20
        echo "        <";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "selectionTag", [], "any", false, false, false, 20), "html", null, true);
        echo "
            class=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "__item ";
        echo twig_escape_filter($this->env, (isset($context["activeClassName"]) || array_key_exists("activeClassName", $context) ? $context["activeClassName"] : (function () { throw new RuntimeError('Variable "activeClassName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "jsName", [], "any", false, false, false, 21), "html", null, true);
        echo "__item\"
            style=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["borderColor"]) || array_key_exists("borderColor", $context) ? $context["borderColor"] : (function () { throw new RuntimeError('Variable "borderColor" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\"
            ";
        // line 23
        echo twig_call_macro($macros["component"], "macro_renderAttributes", [(isset($context["dataAttributesList"]) || array_key_exists("dataAttributesList", $context) ? $context["dataAttributesList"] : (function () { throw new RuntimeError('Variable "dataAttributesList" does not exist.', 23, $this->source); })())], 23, $context, $this->getSourceContext());
        echo ">
            <span class=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "__item-inner\" style=\"";
        echo twig_escape_filter($this->env, (isset($context["backgroundColor"]) || array_key_exists("backgroundColor", $context) ? $context["backgroundColor"] : (function () { throw new RuntimeError('Variable "backgroundColor" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\"></span>
            <span class=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "__tooltip\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "attributes", [], "any", false, false, false, 25), "farbe", [], "any", false, false, false, 25)), "html", null, true);
        echo "</span>
        </";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "selectionTag", [], "any", false, false, false, 26), "html", null, true);
        echo ">
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ProductGroupWidget/components/molecules/color-selector/color-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 26,  156 => 25,  150 => 24,  146 => 23,  142 => 22,  134 => 21,  129 => 20,  110 => 19,  107 => 18,  104 => 17,  94 => 16,  82 => 13,  74 => 11,  64 => 10,  54 => 1,  53 => 5,  52 => 4,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('color-selector', '@SprykerShop:ProductGroupWidget') %}
{% import _self as component %}

{% define data = {
    items: required,
    colorAttributeName: 'pyzColorCode',
    selectionTag: 'button',
} %}

{% block body %}
    <span class=\"{{ config.name }}__items-title\">{{ 'product.color-selector' | trans }}:</span>

    {{ parent() }}
{% endblock %}

{% block selection %}
    {% set borderColor = item[data.colorAttributeName] is defined ? 'border-color: ' ~ item[data.colorAttributeName] ~ ';' %}

    {% block selectionInner %}
        <{{ data.selectionTag }}
            class=\"{{ config.name }}__item {{ activeClassName }} {{ config.jsName }}__item\"
            style=\"{{ borderColor }}\"
            {{ component.renderAttributes(dataAttributesList) }}>
            <span class=\"{{ config.name }}__item-inner\" style=\"{{ backgroundColor }}\"></span>
            <span class=\"{{ config.name }}__tooltip\">{{ item.attributes.farbe | capitalize }}</span>
        </{{ data.selectionTag }}>
    {% endblock %}
{% endblock %}
", "@ProductGroupWidget/components/molecules/color-selector/color-selector.twig", "/data/src/Pyz/Yves/ProductGroupWidget/Theme/default/components/molecules/color-selector/color-selector.twig");
    }
}
