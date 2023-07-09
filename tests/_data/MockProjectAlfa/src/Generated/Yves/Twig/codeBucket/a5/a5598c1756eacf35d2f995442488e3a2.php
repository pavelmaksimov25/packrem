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

/* @@SprykerShop:ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig */
class __TwigTemplate_2f0ceb361a031ba5a597bfa9d9cb1802 extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@@SprykerShop:ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig"));

        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["items" => ((twig_get_attribute($this->env, $this->source,         // line 4
($context["_widget"] ?? null), "productGroupItems", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "productGroupItems", [], "any", false, false, false, 4), [])) : ([])), "parentJsName" => ""], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "items", [], "any", false, false, false, 9)) > 1)) {
            // line 10
            echo "        <hr>
        ";
            // line 11
            $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("product-item-color-selector", "ProductGroupWidget"), "@@SprykerShop:ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", 11)->display(twig_to_array(["modifiers" => [0 => "center"], "data" => ["items" => twig_get_attribute($this->env, $this->source,             // line 14
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "items", [], "any", false, false, false, 14), "parentJsName" => twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "parentJsName", [], "any", false, false, false, 15)]]));
            // line 18
            echo "        <hr>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  78 => 15,  77 => 14,  76 => 11,  73 => 10,  70 => 9,  60 => 8,  50 => 1,  49 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    items: _widget.productGroupItems | default([]),
    parentJsName: '',
} %}

{% block body %}
    {% if data.items | length > 1 %}
        <hr>
        {% include molecule('product-item-color-selector', 'ProductGroupWidget') with {
            modifiers: ['center'],
            data: {
                items: data.items,
                parentJsName: data.parentJsName,
            },
        } only %}
        <hr>
    {% endif %}
{% endblock %}
", "@@SprykerShop:ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", "/data/vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/views/product-item-color-selector/product-item-color-selector.twig");
    }
}
