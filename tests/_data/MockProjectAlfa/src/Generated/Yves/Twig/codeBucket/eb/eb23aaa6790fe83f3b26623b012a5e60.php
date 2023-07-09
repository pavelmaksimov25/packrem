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

/* @ShopUi/models/component.twig */
class __TwigTemplate_02025af2ca2d71b351e118bda70c31e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component' => [$this, 'block_component'],
            'class' => [$this, 'block_class'],
            'extraClass' => [$this, 'block_extraClass'],
            'attributes' => [$this, 'block_attributes'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/models/component.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/models/component.twig"));

        // line 7
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })()), "jsName" => ("js-" . twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9)), "tag" => "div"], $context['config']);        // line 13
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive([], $context['data']);        // line 14
if (!array_key_exists('embed', $context)) {$context['embed'] = [];}$context['embed'] = array_replace_recursive([], $context['embed']);        // line 15
        $context["qa"] = ((array_key_exists("qa", $context)) ? (_twig_default_filter((isset($context["qa"]) || array_key_exists("qa", $context) ? $context["qa"] : (function () { throw new RuntimeError('Variable "qa" does not exist.', 15, $this->source); })()), "")) : (""));
        // line 17
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 17, $this->source); })()), "")) : (""));
        // line 18
if (!array_key_exists('modifiers', $context)) {$context['modifiers'] = [];}$context['modifiers'] = array_replace_recursive([], $context['modifiers']);        // line 19
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive([], $context['attributes']);        // line 37
        $macros["component"] = $this->macros["component"] = $this;
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('component', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component"));

        // line 40
        echo "    <";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 40, $this->source); })()), "tag", [], "any", false, false, false, 40), "html", null, true);
        echo " class=\"";
        // line 41
        if (((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41) == twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "tag", [], "any", false, false, false, 41)) && twig_in_filter("-", twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "tag", [], "any", false, false, false, 41)))) {
            echo "custom-element ";
        }
        // line 43
        $this->displayBlock('class', $context, $blocks);
        // line 46
        echo "\"

        ";
        // line 48
        echo $this->env->getFunction('qa')->getCallable()([0 => "component", 1 => twig_get_attribute($this->env, $this->source,         // line 50
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), 2 => ((twig_get_attribute($this->env, $this->source,         // line 51
($context["attributes"] ?? null), "name", [], "any", true, true, false, 51)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "name", [], "any", false, false, false, 51))) : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 52
($context["attributes"] ?? null), "id", [], "any", true, true, false, 52)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, false, 52))) : ("")), 4 =>         // line 53
(isset($context["qa"]) || array_key_exists("qa", $context) ? $context["qa"] : (function () { throw new RuntimeError('Variable "qa" does not exist.', 53, $this->source); })())]);
        // line 56
        $this->displayBlock('attributes', $context, $blocks);
        // line 58
        echo ">";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "</";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 60, $this->source); })()), "tag", [], "any", false, false, false, 60), "html", null, true);
        echo ">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 43
    public function block_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class"));

        // line 44
        echo twig_call_macro($macros["component"], "macro_renderClass", [twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 44, $this->source); })()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 44, $this->source); })())], 44, $context, $this->getSourceContext());
        // line 45
        $this->displayBlock('extraClass', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_extraClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraClass"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraClass"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 56
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attributes"));

        // line 57
        echo twig_call_macro($macros["component"], "macro_renderAttributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 57, $this->source); })())], 57, $context, $this->getSourceContext());
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function macro_renderClass($__name__ = null, $__modifiers__ = null, $__extra__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "modifiers" => $__modifiers__,
            "extra" => $__extra__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderClass"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderClass"));

            // line 22
            echo twig_escape_filter($this->env, twig_trim_filter((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 22, $this->source); })())), "html", null, true);
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["modifier"]) {
                if ( !twig_test_empty(twig_trim_filter($context["modifier"]))) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 23, $this->source); })()), "html", null, true);
                    echo "--";
                    echo twig_escape_filter($this->env, twig_trim_filter($context["modifier"]), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modifier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            if ((isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 24, $this->source); })())) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 24, $this->source); })()), "html", null, true);
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 27
    public function macro_renderAttributes($__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderAttributes"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderAttributes"));

            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 29
                if (($context["value"] === true)) {
                    // line 30
                    echo twig_escape_filter($this->env, (" " . $context["name"]), "html", null, true);
                } elseif ( !(                // line 31
$context["value"] === false)) {
                    // line 32
                    echo twig_escape_filter($this->env, (" " . $context["name"]), "html", null, true);
                    echo "='";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "'";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@ShopUi/models/component.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 32,  281 => 31,  279 => 30,  277 => 29,  273 => 28,  254 => 27,  236 => 24,  222 => 23,  220 => 22,  199 => 21,  181 => 59,  171 => 57,  161 => 56,  134 => 45,  132 => 44,  122 => 43,  109 => 60,  107 => 59,  105 => 58,  103 => 56,  101 => 53,  100 => 52,  99 => 51,  98 => 50,  97 => 48,  93 => 46,  91 => 43,  87 => 41,  83 => 40,  64 => 39,  61 => 38,  59 => 37,  58 => 19,  57 => 18,  55 => 17,  53 => 15,  52 => 14,  51 => 13,  50 => 9,  49 => 8,  48 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 #
 #
 # Component API
 #}

{%- define config = {
    name: required,
    jsName: 'js-' ~ config.name,
    tag: 'div'
} -%}

{%- define data = {} -%}
{%- define embed = {} -%}
{%- set qa = qa | default('') -%}

{%- set class = class | default('') -%}
{%- define modifiers = [] -%}
{%- define attributes = {} -%}

{% macro renderClass(name, modifiers, extra) %}
    {{-name | trim-}}
    {%- for modifier in modifiers -%}{%- if modifier | trim is not empty %} {{name}}--{{modifier | trim}}{% endif -%}{% endfor -%}
    {%- if extra %} {{extra-}}{% endif -%}
{%- endmacro -%}

{% macro renderAttributes(attributes) %}
    {%- for name, value in attributes -%}
        {%- if value is same as(true) -%}
            {{-' ' ~ name-}}
        {%- elseif value is not same as(false) -%}
            {{-' ' ~ name-}}='{{-value-}}'
        {%- endif -%}
    {%- endfor -%}
{%- endmacro -%}

{% import _self as component %}

{% block component %}
    <{{-config.tag}} class=\"
        {%- if config.name == config.tag and '-' in config.tag -%}custom-element {% endif -%}

        {%- block class -%}
            {{- component.renderClass(config.name, modifiers, class) -}}
            {% block extraClass %}{% endblock %}
        {%- endblock -%}\"

        {{qa(
            'component',
            config.name,
            attributes.name | default,
            attributes.id | default,
            qa
        )}}

        {%- block attributes -%}
            {{- component.renderAttributes(attributes) -}}
        {%- endblock -%}>
            {%- block body -%}{%- endblock -%}
    </{{-config.tag-}}>
{% endblock -%}
", "@ShopUi/models/component.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.twig");
    }
}
