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

/* @ProductReviewWidget/views/product-review-display/product-review-display.twig */
class __TwigTemplate_7948777a3102db5325d28d8433a75311 extends Template
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
        return $this->loadTemplate($this->env->getFunction('view')->getCallable()("product-review-display", "@SprykerShop:ProductReviewWidget"), "@ProductReviewWidget/views/product-review-display/product-review-display.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["parentJsName" => "", "reviewCount" => 0], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div itemscope itemprop=\"aggregateRating\" itemtype=\"https://schema.org/AggregateRating\">
        <meta itemprop=\"ratingValue\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "value", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
        <meta itemprop=\"bestRating\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "maxValue", [], "any", false, false, false, 11), "html", null, true);
        echo "\">

        ";
        // line 13
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("rating-selector", "ProductReviewWidget"), "@ProductReviewWidget/views/product-review-display/product-review-display.twig", 13)->display(twig_to_array(["data" => ["value" => twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "value", [], "any", false, false, false, 15), "maxValue" => twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "maxValue", [], "any", false, false, false, 16), "useHalfSteps" => true, "parentJsName" => twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "parentJsName", [], "any", false, false, false, 18), "reviewCount" => twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "reviewCount", [], "any", false, false, false, 19)], "attributes" => ["readonly" => true]]));
        // line 25
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@ProductReviewWidget/views/product-review-display/product-review-display.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  67 => 19,  66 => 18,  65 => 16,  64 => 15,  63 => 13,  58 => 11,  54 => 10,  51 => 9,  47 => 8,  43 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('product-review-display', '@SprykerShop:ProductReviewWidget') %}

{% define data = {
    parentJsName: '',
    reviewCount: 0,
} %}

{% block body %}
    <div itemscope itemprop=\"aggregateRating\" itemtype=\"https://schema.org/AggregateRating\">
        <meta itemprop=\"ratingValue\" content=\"{{ data.value }}\">
        <meta itemprop=\"bestRating\" content=\"{{ data.maxValue }}\">

        {% include molecule('rating-selector', 'ProductReviewWidget') with {
            data: {
                value: data.value,
                maxValue: data.maxValue,
                useHalfSteps: true,
                parentJsName: data.parentJsName,
                reviewCount: data.reviewCount,
            },
            attributes: {
                readonly: true,
            },
        } only %}
    </div>
{% endblock %}
", "@ProductReviewWidget/views/product-review-display/product-review-display.twig", "/data/src/Pyz/Yves/ProductReviewWidget/Theme/default/views/product-review-display/product-review-display.twig");
    }
}
