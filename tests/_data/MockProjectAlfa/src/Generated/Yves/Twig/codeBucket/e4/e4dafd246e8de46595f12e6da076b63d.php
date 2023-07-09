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

/* @ContentNavigationWidget/views/footer-partners/footer-partners.twig */
class __TwigTemplate_be7bfa4bdf4f09346ee03cc24fb56776 extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@ContentNavigationWidget/views/footer-partners/footer-partners.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContentNavigationWidget/views/footer-partners/footer-partners.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContentNavigationWidget/views/footer-partners/footer-partners.twig"));

        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["navigation" =>         // line 4
(isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 4, $this->source); })())], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $context["triggerClass"] = "js-footer-partners__trigger";
        // line 9
        echo "    ";
        $context["targetClass"] = "js-footer-partners";
        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-item", "ContentNavigationWidget"), "@ContentNavigationWidget/views/footer-partners/footer-partners.twig", 11)->display(twig_to_array(["class" => ("container " .         // line 12
(isset($context["targetClass"]) || array_key_exists("targetClass", $context) ? $context["targetClass"] : (function () { throw new RuntimeError('Variable "targetClass" does not exist.', 12, $this->source); })())), "modifiers" => [0 => "footer-logo"], "data" => ["nodes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "navigation", [], "any", false, false, false, 15), "nodes", [], "any", false, false, false, 15), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.payment_shipping"), "toggleClass" =>         // line 17
(isset($context["targetClass"]) || array_key_exists("targetClass", $context) ? $context["targetClass"] : (function () { throw new RuntimeError('Variable "targetClass" does not exist.', 17, $this->source); })()), "template" => "navigation-icon-list"]]));
        // line 21
        echo "
    ";
        // line 22
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-accordion"), "@ContentNavigationWidget/views/footer-partners/footer-partners.twig", 22)->display(twig_to_array(["attributes" => ["wrap-class-name" =>         // line 24
(isset($context["targetClass"]) || array_key_exists("targetClass", $context) ? $context["targetClass"] : (function () { throw new RuntimeError('Variable "targetClass" does not exist.', 24, $this->source); })()), "trigger-class-name" =>         // line 25
(isset($context["triggerClass"]) || array_key_exists("triggerClass", $context) ? $context["triggerClass"] : (function () { throw new RuntimeError('Variable "triggerClass" does not exist.', 25, $this->source); })()), "class-to-toggle" => "is-hidden-sm-only"]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ContentNavigationWidget/views/footer-partners/footer-partners.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  88 => 24,  87 => 22,  84 => 21,  82 => 17,  81 => 15,  80 => 12,  79 => 11,  76 => 10,  73 => 9,  70 => 8,  60 => 7,  50 => 1,  49 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    navigation: navigation,
} %}

{% block body %}
    {% set triggerClass = 'js-footer-partners__trigger' %}
    {% set targetClass = 'js-footer-partners' %}

    {% include molecule('navigation-item', 'ContentNavigationWidget') with {
        class: 'container ' ~ targetClass,
        modifiers: ['footer-logo'],
        data: {
            nodes: data.navigation.nodes,
            title: 'global.payment_shipping' | trans,
            toggleClass: targetClass,
            template: 'navigation-icon-list',
        },
    } only %}

    {% include molecule('toggler-accordion') with {
        attributes: {
            'wrap-class-name': targetClass,
            'trigger-class-name': triggerClass,
            'class-to-toggle': 'is-hidden-sm-only',
        },
    } only %}
{% endblock %}
", "@ContentNavigationWidget/views/footer-partners/footer-partners.twig", "/data/src/Pyz/Yves/ContentNavigationWidget/Theme/default/views/footer-partners/footer-partners.twig");
    }
}
