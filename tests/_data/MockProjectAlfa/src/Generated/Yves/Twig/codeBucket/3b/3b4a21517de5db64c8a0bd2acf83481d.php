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

/* @ContentNavigationWidget/components/molecules/navigation-item/navigation-item.twig */
class __TwigTemplate_780fb6d1f723c5dbec19d32a5a75a2c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'navigationTemplate' => [$this, 'block_navigationTemplate'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ContentNavigationWidget/components/molecules/navigation-item/navigation-item.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContentNavigationWidget/components/molecules/navigation-item/navigation-item.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContentNavigationWidget/components/molecules/navigation-item/navigation-item.twig"));

        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-item"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["nodes" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "title" => "", "toggleClass" => "", "template" => "navigation-list", "templateModifiers" => [0 => "secondary", 1 => "footer"]], $context['data']);        // line 1
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
        echo "    ";
        $context["toggleClass"] = twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "toggleClass", [], "any", false, false, false, 17);
        // line 18
        echo "    ";
        $context["triggerClass"] = (((isset($context["toggleClass"]) || array_key_exists("toggleClass", $context) ? $context["toggleClass"] : (function () { throw new RuntimeError('Variable "toggleClass" does not exist.', 18, $this->source); })())) ? (((isset($context["toggleClass"]) || array_key_exists("toggleClass", $context) ? $context["toggleClass"] : (function () { throw new RuntimeError('Variable "toggleClass" does not exist.', 18, $this->source); })()) . "__trigger")) : (""));
        // line 19
        echo "    ";
        $context["targetClass"] = (((isset($context["toggleClass"]) || array_key_exists("toggleClass", $context) ? $context["toggleClass"] : (function () { throw new RuntimeError('Variable "toggleClass" does not exist.', 19, $this->source); })())) ? (((isset($context["toggleClass"]) || array_key_exists("toggleClass", $context) ? $context["toggleClass"] : (function () { throw new RuntimeError('Variable "toggleClass" does not exist.', 19, $this->source); })()) . "__target is-hidden-sm-only")) : (""));
        // line 20
        echo "    ";
        $context["targetAttribute"] = (((isset($context["toggleClass"]) || array_key_exists("toggleClass", $context) ? $context["toggleClass"] : (function () { throw new RuntimeError('Variable "toggleClass" does not exist.', 20, $this->source); })())) ? (("data-toggle-target=." . (isset($context["targetClass"]) || array_key_exists("targetClass", $context) ? $context["targetClass"] : (function () { throw new RuntimeError('Variable "targetClass" does not exist.', 20, $this->source); })()))) : (""));
        // line 21
        echo "
    ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22)) {
            // line 23
            echo "        <h5 class=\"";
            echo twig_call_macro($macros["component"], "macro_renderClass", ["title", (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 23, $this->source); })())], 23, $context, $this->getSourceContext());
            echo " title--footer ";
            echo twig_escape_filter($this->env, (isset($context["triggerClass"]) || array_key_exists("triggerClass", $context) ? $context["triggerClass"] : (function () { throw new RuntimeError('Variable "triggerClass" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["targetAttribute"]) || array_key_exists("targetAttribute", $context) ? $context["targetAttribute"] : (function () { throw new RuntimeError('Variable "targetAttribute" does not exist.', 23, $this->source); })()), "html", null, true);
            echo ">
            ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
            echo "
            <span class=\"icon icon--toggler-cross icon--toggler-cross-thin toggler-accordion__icon is-hidden-md-xxl\"></span>
        </h5>
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if ((isset($context["toggleClass"]) || array_key_exists("toggleClass", $context) ? $context["toggleClass"] : (function () { throw new RuntimeError('Variable "toggleClass" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["targetClass"]) || array_key_exists("targetClass", $context) ? $context["targetClass"] : (function () { throw new RuntimeError('Variable "targetClass" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\">
            ";
            // line 31
            $this->displayBlock('navigationTemplate', $context, $blocks);
            // line 39
            echo "        </div>
    ";
        } else {
            // line 41
            echo "        ";
            $this->displayBlock("navigationTemplate", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 31
    public function block_navigationTemplate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigationTemplate"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigationTemplate"));

        // line 32
        echo "                ";
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "template", [], "any", false, false, false, 32)), "@ContentNavigationWidget/components/molecules/navigation-item/navigation-item.twig", 32)->display(twig_to_array(["modifiers" => twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "templateModifiers", [], "any", false, false, false, 33), "data" => ["nodes" => twig_get_attribute($this->env, $this->source,         // line 35
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "nodes", [], "any", false, false, false, 35)]]));
        // line 38
        echo "            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ContentNavigationWidget/components/molecules/navigation-item/navigation-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 38,  150 => 35,  149 => 33,  147 => 32,  137 => 31,  123 => 41,  119 => 39,  117 => 31,  112 => 30,  110 => 29,  107 => 28,  100 => 24,  91 => 23,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  64 => 16,  54 => 1,  53 => 9,  52 => 8,  51 => 4,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'navigation-item',
} %}

{% define data = {
    nodes: required,
    title: '',
    toggleClass: '',
    template: 'navigation-list',
    templateModifiers: ['secondary', 'footer'],
} %}

{% block body %}
    {% set toggleClass = data.toggleClass %}
    {% set triggerClass = toggleClass ? toggleClass ~ '__trigger' %}
    {% set targetClass = toggleClass ? toggleClass ~ '__target is-hidden-sm-only' %}
    {% set targetAttribute = toggleClass ? 'data-toggle-target=.' ~ targetClass %}

    {% if data.title %}
        <h5 class=\"{{ component.renderClass('title', modifiers) }} title--footer {{ triggerClass }}\" {{ targetAttribute }}>
            {{ data.title }}
            <span class=\"icon icon--toggler-cross icon--toggler-cross-thin toggler-accordion__icon is-hidden-md-xxl\"></span>
        </h5>
    {% endif %}

    {% if toggleClass %}
        <div class=\"{{ targetClass }}\">
            {% block navigationTemplate %}
                {% include molecule(data.template) with {
                    modifiers: data.templateModifiers,
                    data: {
                        nodes: data.nodes,
                    },
                } only %}
            {% endblock %}
        </div>
    {% else %}
        {{ block('navigationTemplate') }}
    {% endif %}
{% endblock %}
", "@ContentNavigationWidget/components/molecules/navigation-item/navigation-item.twig", "/data/src/Pyz/Yves/ContentNavigationWidget/Theme/default/components/molecules/navigation-item/navigation-item.twig");
    }
}
