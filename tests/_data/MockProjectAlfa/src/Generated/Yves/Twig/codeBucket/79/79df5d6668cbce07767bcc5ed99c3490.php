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

/* @ProductWidget/views/cms-product-slider/cms-product-slider.twig */
class __TwigTemplate_226c3e917ec36d6b22eef5c397606c05 extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@ProductWidget/views/cms-product-slider/cms-product-slider.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductWidget/views/cms-product-slider/cms-product-slider.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductWidget/views/cms-product-slider/cms-product-slider.twig"));

        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["product" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "product", [], "any", false, false, false, 4)], $context['data']);        // line 1
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
        $this->loadTemplate("@ProductWidget/views/cms-product-slider/cms-product-slider.twig", "@ProductWidget/views/cms-product-slider/cms-product-slider.twig", 8, "1305626763")->display(twig_to_array(["class" => "col col--sm-12 col--md-6 col--lg-4", "modifiers" => [0 => "stretch"], "data" => ["product" => twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "product", [], "any", false, false, false, 12), "category" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category.office.furniture")]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ProductWidget/views/cms-product-slider/cms-product-slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  70 => 8,  60 => 7,  50 => 1,  49 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    product: _widget.product
} %}

{% block body %}
    {% embed molecule('product-item') with {
        class: 'col col--sm-12 col--md-6 col--lg-4',
        modifiers: ['stretch'],
        data: {
            product: data.product,
            category: 'category.office.furniture' | trans,
        },
    } only %}

        {% block rating %}
            <section itemscope itemprop=\"aggregateRating\" itemtype=\"https://schema.org/AggregateRating\">
                <meta itemprop=\"ratingValue\" content=\"{{ data.product.rating.averageRating | default(0) }}\">

                {% include molecule('rating-selector', 'ProductReviewWidget') ignore missing with {
                    data: {
                        value: data.product.rating.averageRating | default(0),
                        reviewCount:  data.product.rating.totalReview | default(0),
                        useHalfSteps: true,
                        parentJsName: config.jsName,
                    },
                    attributes: {
                        readonly: true,
                    },
                } only %}
            </section>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductWidget/views/cms-product-slider/cms-product-slider.twig", "/data/src/Pyz/Yves/ProductWidget/Theme/default/views/cms-product-slider/cms-product-slider.twig");
    }
}


/* @ProductWidget/views/cms-product-slider/cms-product-slider.twig */
class __TwigTemplate_226c3e917ec36d6b22eef5c397606c05___1305626763 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'rating' => [$this, 'block_rating'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("product-item"), "@ProductWidget/views/cms-product-slider/cms-product-slider.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductWidget/views/cms-product-slider/cms-product-slider.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductWidget/views/cms-product-slider/cms-product-slider.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rating"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rating"));

        // line 18
        echo "            <section itemscope itemprop=\"aggregateRating\" itemtype=\"https://schema.org/AggregateRating\">
                <meta itemprop=\"ratingValue\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 19), "rating", [], "any", false, true, false, 19), "averageRating", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 19), "rating", [], "any", false, true, false, 19), "averageRating", [], "any", false, false, false, 19), 0)) : (0)), "html", null, true);
        echo "\">

                ";
        // line 21
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("rating-selector", "ProductReviewWidget"), "@ProductWidget/views/cms-product-slider/cms-product-slider.twig", 21);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display(twig_to_array(["data" => ["value" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 23
($context["data"] ?? null), "product", [], "any", false, true, false, 23), "rating", [], "any", false, true, false, 23), "averageRating", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 23), "rating", [], "any", false, true, false, 23), "averageRating", [], "any", false, false, false, 23), 0)) : (0)), "reviewCount" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 24
($context["data"] ?? null), "product", [], "any", false, true, false, 24), "rating", [], "any", false, true, false, 24), "totalReview", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 24), "rating", [], "any", false, true, false, 24), "totalReview", [], "any", false, false, false, 24), 0)) : (0)), "useHalfSteps" => true, "parentJsName" => twig_get_attribute($this->env, $this->source,             // line 26
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "jsName", [], "any", false, false, false, 26)], "attributes" => ["readonly" => true]]));
        }
        // line 32
        echo "            </section>
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ProductWidget/views/cms-product-slider/cms-product-slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 32,  208 => 26,  207 => 24,  206 => 23,  198 => 21,  193 => 19,  190 => 18,  180 => 17,  158 => 8,  72 => 12,  70 => 8,  60 => 7,  50 => 1,  49 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    product: _widget.product
} %}

{% block body %}
    {% embed molecule('product-item') with {
        class: 'col col--sm-12 col--md-6 col--lg-4',
        modifiers: ['stretch'],
        data: {
            product: data.product,
            category: 'category.office.furniture' | trans,
        },
    } only %}

        {% block rating %}
            <section itemscope itemprop=\"aggregateRating\" itemtype=\"https://schema.org/AggregateRating\">
                <meta itemprop=\"ratingValue\" content=\"{{ data.product.rating.averageRating | default(0) }}\">

                {% include molecule('rating-selector', 'ProductReviewWidget') ignore missing with {
                    data: {
                        value: data.product.rating.averageRating | default(0),
                        reviewCount:  data.product.rating.totalReview | default(0),
                        useHalfSteps: true,
                        parentJsName: config.jsName,
                    },
                    attributes: {
                        readonly: true,
                    },
                } only %}
            </section>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductWidget/views/cms-product-slider/cms-product-slider.twig", "/data/src/Pyz/Yves/ProductWidget/Theme/default/views/cms-product-slider/cms-product-slider.twig");
    }
}
