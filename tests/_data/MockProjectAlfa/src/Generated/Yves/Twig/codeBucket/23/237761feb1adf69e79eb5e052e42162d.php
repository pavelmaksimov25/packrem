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

/* @ShopUi/components/molecules/logo/logo.twig */
class __TwigTemplate_7b1bb71e49534cef69f832093a843385 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'attributes' => [$this, 'block_attributes'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/logo/logo.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/logo/logo.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/logo/logo.twig"));

        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "logo", "tag" => "div"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["url" => "/"], $context['data']);        // line 13
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["src" => null, "alt" => "Logo"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attributes"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "url", [], "any", false, false, false, 21), "html", null, true);
        echo "\" class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21) . "__link"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 21, $this->source); })())], 21, $context, $this->getSourceContext());
        echo "\">
        ";
        // line 22
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 22, $this->source); })()), "src", [], "any", false, false, false, 22))) {
            // line 23
            echo "            ";
            $context["modifiersForIcon"] = twig_array_merge((isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 23, $this->source); })()), [0 => "logo"]);
            // line 24
            echo "            <span class=\"";
            echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24) . "__image"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 24, $this->source); })())], 24, $context, $this->getSourceContext());
            echo "\">
                ";
            // line 25
            $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/logo/logo.twig", 25)->display(twig_to_array(["class" => "is-hidden-lg-xxl", "modifiers" =>             // line 27
(isset($context["modifiersForIcon"]) || array_key_exists("modifiersForIcon", $context) ? $context["modifiersForIcon"] : (function () { throw new RuntimeError('Variable "modifiersForIcon" does not exist.', 27, $this->source); })()), "data" => ["name" => "logo-mobile"]]));
            // line 32
            echo "                ";
            $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/logo/logo.twig", 32)->display(twig_to_array(["class" => "is-hidden-sm-md", "modifiers" =>             // line 34
(isset($context["modifiersForIcon"]) || array_key_exists("modifiersForIcon", $context) ? $context["modifiersForIcon"] : (function () { throw new RuntimeError('Variable "modifiersForIcon" does not exist.', 34, $this->source); })()), "data" => ["name" => "logo"]]));
            // line 39
            echo "            </span>
        ";
        } else {
            // line 41
            echo "            <img ";
            echo twig_call_macro($macros["component"], "macro_renderAttributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 41, $this->source); })())], 41, $context, $this->getSourceContext());
            echo " />
        ";
        }
        // line 43
        echo "    </a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/logo/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  120 => 41,  116 => 39,  114 => 34,  112 => 32,  110 => 27,  109 => 25,  104 => 24,  101 => 23,  99 => 22,  92 => 21,  82 => 20,  64 => 18,  54 => 1,  53 => 13,  52 => 9,  51 => 4,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'logo',
    tag: 'div'
} %}

{% define data = {
    url: '/'
} %}

{% define attributes = {
    src: null,
    alt: 'Logo'
} %}

{% block attributes %}{% endblock %}

{% block body %}
    <a href=\"{{data.url}}\" class=\"{{ component.renderClass(config.name ~ '__link', modifiers) }}\">
        {% if attributes.src is empty %}
            {% set modifiersForIcon = modifiers | merge(['logo']) %}
            <span class=\"{{ component.renderClass(config.name ~ '__image', modifiers) }}\">
                {% include atom('icon') with {
                    class: 'is-hidden-lg-xxl',
                    modifiers: modifiersForIcon,
                    data: {
                        name: 'logo-mobile'
                    }
                } only %}
                {% include atom('icon') with {
                    class: 'is-hidden-sm-md',
                    modifiers: modifiersForIcon,
                    data: {
                        name: 'logo'
                    }
                } only %}
            </span>
        {% else %}
            <img {{component.renderAttributes(attributes)}} />
        {% endif %}
    </a>
{% endblock %}
", "@ShopUi/components/molecules/logo/logo.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/logo/logo.twig");
    }
}
