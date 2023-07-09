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

/* @@SprykerShop:ProductGroupWidget/components/molecules/color-selector/color-selector.twig */
class __TwigTemplate_062f5eecfe36bd6821d2306ef8d35fd6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'item' => [$this, 'block_item'],
            'selection' => [$this, 'block_selection'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ProductGroupWidget/components/molecules/color-selector/color-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ProductGroupWidget/components/molecules/color-selector/color-selector.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ProductGroupWidget/components/molecules/color-selector/color-selector.twig"));

        // line 2
        $macros["component"] = $this->macros["component"] = $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ProductGroupWidget/components/molecules/color-selector/color-selector.twig", 2)->unwrap();
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "color-selector", "tag" => "color-selector"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["items" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "colorAttributeName" => "colorCode", "selectionTag" => "button"], $context['data']);        // line 15
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["active-item-class-name" => (twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16) . "__item--active")], $context['attributes']);        // line 1
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "items", [], "any", false, false, false, 20));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "        ";
            $this->displayBlock('item', $context, $blocks);
            // line 34
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        // line 22
        echo "            ";
        $context["activeClassName"] = ((twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 22, $this->source); })()), "first", [], "any", false, false, false, 22)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 22, $this->source); })()), "active-item-class-name", [], "array", false, false, false, 22)) : (""));
        // line 23
        echo "            ";
        $context["backgroundColor"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "colorAttributeName", [], "any", false, false, false, 23), [], "array", true, true, false, 23)) ? ((("background-color: " . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "colorAttributeName", [], "any", false, false, false, 23), [], "array", false, false, false, 23)) . ";")) : (""));
        // line 24
        echo "            ";
        $context["dataAttributesList"] = [];
        // line 25
        echo "
            ";
        // line 26
        $this->displayBlock('selection', $context, $blocks);
        // line 33
        echo "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_selection($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selection"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selection"));

        // line 27
        echo "                <";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "selectionTag", [], "any", false, false, false, 27), "html", null, true);
        echo "
                    class=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "__item ";
        echo twig_escape_filter($this->env, (isset($context["activeClassName"]) || array_key_exists("activeClassName", $context) ? $context["activeClassName"] : (function () { throw new RuntimeError('Variable "activeClassName" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 28, $this->source); })()), "jsName", [], "any", false, false, false, 28), "html", null, true);
        echo "__item\"
                    style=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["backgroundColor"]) || array_key_exists("backgroundColor", $context) ? $context["backgroundColor"] : (function () { throw new RuntimeError('Variable "backgroundColor" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\"
                    ";
        // line 30
        echo twig_call_macro($macros["component"], "macro_renderAttributes", [(isset($context["dataAttributesList"]) || array_key_exists("dataAttributesList", $context) ? $context["dataAttributesList"] : (function () { throw new RuntimeError('Variable "dataAttributesList" does not exist.', 30, $this->source); })())], 30, $context, $this->getSourceContext());
        echo ">
                </";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "selectionTag", [], "any", false, false, false, 31), "html", null, true);
        echo ">
            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductGroupWidget/components/molecules/color-selector/color-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 31,  181 => 30,  177 => 29,  169 => 28,  164 => 27,  154 => 26,  144 => 33,  142 => 26,  139 => 25,  136 => 24,  133 => 23,  130 => 22,  120 => 21,  98 => 34,  95 => 21,  77 => 20,  67 => 19,  57 => 1,  56 => 16,  55 => 15,  54 => 10,  53 => 9,  52 => 4,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import model('component') as component %}

{% define config = {
    name: 'color-selector',
    tag: 'color-selector',
} %}

{% define data = {
    items: required,
    colorAttributeName: 'colorCode',
    selectionTag: 'button',
} %}

{% define attributes = {
    'active-item-class-name': config.name ~ '__item--active',
} %}

{% block body %}
    {% for item in data.items %}
        {% block item %}
            {% set activeClassName = loop.first ? attributes['active-item-class-name'] %}
            {% set backgroundColor = item[data.colorAttributeName] is defined ? 'background-color: ' ~ item[data.colorAttributeName] ~ ';' %}
            {% set dataAttributesList = {} %}

            {% block selection %}
                <{{ data.selectionTag }}
                    class=\"{{ config.name }}__item {{ activeClassName }} {{ config.jsName }}__item\"
                    style=\"{{ backgroundColor }}\"
                    {{ component.renderAttributes(dataAttributesList) }}>
                </{{ data.selectionTag }}>
            {% endblock %}
        {% endblock %}
    {% endfor %}
{% endblock %}
", "@@SprykerShop:ProductGroupWidget/components/molecules/color-selector/color-selector.twig", "/data/vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/color-selector/color-selector.twig");
    }
}
