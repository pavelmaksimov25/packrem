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

/* @ShopUi/components/molecules/content-collapser/content-collapser.twig */
class __TwigTemplate_e1b39af7c020826dce4390ea722f6158 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'class' => [$this, 'block_class'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/content-collapser/content-collapser.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/content-collapser/content-collapser.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/content-collapser/content-collapser.twig"));

        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "content-collapser"], $context['config']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class"));

        // line 9
        $this->displayParentBlock("class", $context, $blocks);
        echo "
    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "jsName", [], "any", false, false, false, 10), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <div class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14) . "__container"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 14, $this->source); })())], 14, $context, $this->getSourceContext());
        echo "\">
        ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "    </div>

    ";
        // line 18
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-click"), "@ShopUi/components/molecules/content-collapser/content-collapser.twig", 18)->display(twig_to_array(["attributes" => ["target-class-name" => twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "jsName", [], "any", false, false, false, 20), "trigger-class-name" => (twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "jsName", [], "any", false, false, false, 21) . "__trigger"), "class-to-toggle" => (twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22) . "--full-visible")]]));
        // line 25
        echo "
    <div class=\"";
        // line 26
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26) . "__trigger-holder"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 26, $this->source); })())], 26, $context, $this->getSourceContext());
        echo "\">
        <button class=\"button button--hollow button--tight ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "jsName", [], "any", false, false, false, 27), "html", null, true);
        echo "__trigger\">
            ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.show_more"), "html", null, true);
        echo "
        </button>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/content-collapser/content-collapser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 15,  124 => 28,  120 => 27,  116 => 26,  113 => 25,  111 => 22,  110 => 21,  109 => 20,  108 => 18,  104 => 16,  102 => 15,  97 => 14,  87 => 13,  77 => 10,  73 => 9,  63 => 8,  53 => 1,  52 => 4,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'content-collapser',
} %}

{%- block class -%}
    {{parent()}}
    {{config.jsName}}
{%- endblock -%}

{% block body %}
    <div class=\"{{ component.renderClass(config.name ~ '__container', modifiers) }}\">
        {% block content %}{% endblock %}
    </div>

    {% include molecule('toggler-click') with {
        attributes: {
            'target-class-name': config.jsName,
            'trigger-class-name': config.jsName ~ '__trigger',
            'class-to-toggle': config.name ~ '--full-visible',
        },
    } only %}

    <div class=\"{{ component.renderClass(config.name ~ '__trigger-holder', modifiers) }}\">
        <button class=\"button button--hollow button--tight {{config.jsName}}__trigger\">
            {{ 'global.show_more' | trans }}
        </button>
    </div>
{% endblock %}
", "@ShopUi/components/molecules/content-collapser/content-collapser.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/content-collapser/content-collapser.twig");
    }
}
