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

/* @ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig */
class __TwigTemplate_632ccb085fa439ddcfa11102c5c80695 extends Template
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
        return $this->loadTemplate($this->env->getFunction('view')->getCallable()("product-item-color-selector", "@SprykerShop:ProductGroupWidget"), "@ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig"));

        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["modifiers" => []], $context['data']);        // line 1
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
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "items", [], "any", false, false, false, 8)) > 1)) {
            // line 9
            echo "        ";
            $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("product-item-color-selector", "ProductGroupWidget"), "@ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", 9)->display(twig_to_array(["modifiers" => twig_get_attribute($this->env, $this->source,             // line 10
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "modifiers", [], "any", false, false, false, 10), "data" => ["items" => twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "items", [], "any", false, false, false, 12), "parentJsName" => twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "parentJsName", [], "any", false, false, false, 13)]]));
            // line 16
            echo "    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  76 => 13,  75 => 12,  74 => 10,  72 => 9,  69 => 8,  59 => 7,  49 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('product-item-color-selector', '@SprykerShop:ProductGroupWidget') %}

{% define data = {
    modifiers: [],
} %}

{% block body %}
    {% if data.items | length > 1 %}
        {% include molecule('product-item-color-selector', 'ProductGroupWidget') with {
            modifiers: data.modifiers,
            data: {
                items: data.items,
                parentJsName: data.parentJsName,
            },
        } only %}
    {% endif %}
{% endblock %}
", "@ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", "/data/src/Pyz/Yves/ProductGroupWidget/Theme/default/views/product-item-color-selector/product-item-color-selector.twig");
    }
}
