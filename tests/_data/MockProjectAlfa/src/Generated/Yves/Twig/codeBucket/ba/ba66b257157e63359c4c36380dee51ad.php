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

/* @@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_feb5e5d9339a0396f4895d4e16dcdac2 extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig"));

        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["product" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "product", [], "any", false, false, false, 4), "viewMode" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "viewMode", [], "any", false, false, false, 5)], $context['data']);        // line 1
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
        $context["productTemplate"] = $this->env->getFunction('molecule')->getCallable()("product-item");
        // line 10
        echo "    ";
        $context["classWrap"] = "col col--sm-12 col--md-6 col--xl-4";
        // line 11
        echo "    ";
        $context["class"] = "box--stretch";
        // line 12
        echo "
    ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "viewMode", [], "any", false, false, false, 13) == "list")) {
            // line 14
            echo "        ";
            $context["productTemplate"] = $this->env->getFunction('molecule')->getCallable()("product-item-list");
            // line 15
            echo "        ";
            $context["classWrap"] = "col col--sm-12";
            // line 16
            echo "        ";
            $context["class"] = "";
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    <div class=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["classWrap"]) || array_key_exists("classWrap", $context) ? $context["classWrap"] : (function () { throw new RuntimeError('Variable "classWrap" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 20
        $this->loadTemplate("@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", 20, "1558470941")->display(twig_to_array(["productTemplate" =>         // line 21
(isset($context["productTemplate"]) || array_key_exists("productTemplate", $context) ? $context["productTemplate"] : (function () { throw new RuntimeError('Variable "productTemplate" does not exist.', 21, $this->source); })()), "class" =>         // line 22
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 22, $this->source); })()), "data" => ["product" => twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "product", [], "any", false, false, false, 24), "name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "product", [], "any", false, false, false, 25), "abstract_name", [], "any", false, false, false, 25), "image" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "product", [], "any", false, false, false, 26), "images", [], "any", false, false, false, 26)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "product", [], "any", false, false, false, 26), "images", [], "any", false, false, false, 26), 0, [], "any", false, false, false, 26), "external_url_small", [], "any", false, false, false, 26)) : ("")), "idProductAbstract" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "product", [], "any", false, false, false, 27), "id_product_abstract", [], "any", false, false, false, 27)]]));
        // line 46
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 46,  110 => 27,  109 => 26,  108 => 25,  107 => 24,  106 => 22,  105 => 21,  104 => 20,  100 => 19,  97 => 18,  94 => 17,  91 => 16,  88 => 15,  85 => 14,  83 => 13,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  61 => 8,  51 => 1,  50 => 5,  49 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    product: _widget.product,
    viewMode: _widget.viewMode,
} %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set classWrap = 'col col--sm-12 col--md-6 col--xl-4' %}
    {% set class = 'box--stretch' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set classWrap = 'col col--sm-12' %}
        {% set class = '' %}
    {% endif %}

    <div class=\"{{ classWrap }}\">
        {% embed productTemplate with {
            productTemplate: productTemplate,
            class: class,
            data: {
                product: data.product,
                name: data.product.abstract_name,
                image: data.product.images ? data.product.images.0.external_url_small,
                idProductAbstract: data.product.id_product_abstract,
            },
        } only %}
            {% block labels %}
                {% widget 'ProductConcreteLabelWidget' args [data.product.id_product_labels] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}

            {% block rating %}
                {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endembed %}
    </div>
{% endblock %}
", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", "/data/vendor/spryker-shop/product-widget/src/SprykerShop/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}


/* @@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_feb5e5d9339a0396f4895d4e16dcdac2___1558470941 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'labels' => [$this, 'block_labels'],
            'rating' => [$this, 'block_rating'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return $this->loadTemplate((isset($context["productTemplate"]) || array_key_exists("productTemplate", $context) ? $context["productTemplate"] : (function () { throw new RuntimeError('Variable "productTemplate" does not exist.', 20, $this->source); })()), "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", 20);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_labels($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "labels"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "labels"));

        // line 31
        echo "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductConcreteLabelWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "product", [], "any", false, false, false, 31), "id_product_labels", [], "any", false, false, false, 31)])) {
            $this->loadTemplate("@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", 31, 2135982584)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["parentJsName" => twig_get_attribute($this->env, $this->source,             // line 33
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "jsName", [], "any", false, false, false, 33)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 36
        echo "            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 38
    public function block_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rating"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rating"));

        // line 39
        echo "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductReviewDisplayWidget", [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 39), "rating", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 39), "rating", [], "any", false, false, false, 39), 0)) : (0))])) {
            $this->loadTemplate("@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", 39, 1884745318)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["parentJsName" => twig_get_attribute($this->env, $this->source,             // line 41
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "jsName", [], "any", false, false, false, 41)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 44
        echo "            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 44,  273 => 41,  270 => 39,  260 => 38,  250 => 36,  247 => 33,  244 => 31,  234 => 30,  212 => 20,  112 => 46,  110 => 27,  109 => 26,  108 => 25,  107 => 24,  106 => 22,  105 => 21,  104 => 20,  100 => 19,  97 => 18,  94 => 17,  91 => 16,  88 => 15,  85 => 14,  83 => 13,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  61 => 8,  51 => 1,  50 => 5,  49 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    product: _widget.product,
    viewMode: _widget.viewMode,
} %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set classWrap = 'col col--sm-12 col--md-6 col--xl-4' %}
    {% set class = 'box--stretch' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set classWrap = 'col col--sm-12' %}
        {% set class = '' %}
    {% endif %}

    <div class=\"{{ classWrap }}\">
        {% embed productTemplate with {
            productTemplate: productTemplate,
            class: class,
            data: {
                product: data.product,
                name: data.product.abstract_name,
                image: data.product.images ? data.product.images.0.external_url_small,
                idProductAbstract: data.product.id_product_abstract,
            },
        } only %}
            {% block labels %}
                {% widget 'ProductConcreteLabelWidget' args [data.product.id_product_labels] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}

            {% block rating %}
                {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endembed %}
    </div>
{% endblock %}
", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", "/data/vendor/spryker-shop/product-widget/src/SprykerShop/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}


/* @@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_feb5e5d9339a0396f4895d4e16dcdac2___2135982584 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 31
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 31, $this->source); })()), "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", 31);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 31,  276 => 44,  273 => 41,  270 => 39,  260 => 38,  250 => 36,  247 => 33,  244 => 31,  234 => 30,  212 => 20,  112 => 46,  110 => 27,  109 => 26,  108 => 25,  107 => 24,  106 => 22,  105 => 21,  104 => 20,  100 => 19,  97 => 18,  94 => 17,  91 => 16,  88 => 15,  85 => 14,  83 => 13,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  61 => 8,  51 => 1,  50 => 5,  49 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    product: _widget.product,
    viewMode: _widget.viewMode,
} %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set classWrap = 'col col--sm-12 col--md-6 col--xl-4' %}
    {% set class = 'box--stretch' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set classWrap = 'col col--sm-12' %}
        {% set class = '' %}
    {% endif %}

    <div class=\"{{ classWrap }}\">
        {% embed productTemplate with {
            productTemplate: productTemplate,
            class: class,
            data: {
                product: data.product,
                name: data.product.abstract_name,
                image: data.product.images ? data.product.images.0.external_url_small,
                idProductAbstract: data.product.id_product_abstract,
            },
        } only %}
            {% block labels %}
                {% widget 'ProductConcreteLabelWidget' args [data.product.id_product_labels] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}

            {% block rating %}
                {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endembed %}
    </div>
{% endblock %}
", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", "/data/vendor/spryker-shop/product-widget/src/SprykerShop/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}


/* @@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_feb5e5d9339a0396f4895d4e16dcdac2___1884745318 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 39
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 39, $this->source); })()), "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", 39);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 39,  373 => 31,  276 => 44,  273 => 41,  270 => 39,  260 => 38,  250 => 36,  247 => 33,  244 => 31,  234 => 30,  212 => 20,  112 => 46,  110 => 27,  109 => 26,  108 => 25,  107 => 24,  106 => 22,  105 => 21,  104 => 20,  100 => 19,  97 => 18,  94 => 17,  91 => 16,  88 => 15,  85 => 14,  83 => 13,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  61 => 8,  51 => 1,  50 => 5,  49 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    product: _widget.product,
    viewMode: _widget.viewMode,
} %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set classWrap = 'col col--sm-12 col--md-6 col--xl-4' %}
    {% set class = 'box--stretch' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set classWrap = 'col col--sm-12' %}
        {% set class = '' %}
    {% endif %}

    <div class=\"{{ classWrap }}\">
        {% embed productTemplate with {
            productTemplate: productTemplate,
            class: class,
            data: {
                product: data.product,
                name: data.product.abstract_name,
                image: data.product.images ? data.product.images.0.external_url_small,
                idProductAbstract: data.product.id_product_abstract,
            },
        } only %}
            {% block labels %}
                {% widget 'ProductConcreteLabelWidget' args [data.product.id_product_labels] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}

            {% block rating %}
                {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endembed %}
    </div>
{% endblock %}
", "@@SprykerShop:ProductWidget/views/catalog-product/catalog-product.twig", "/data/vendor/spryker-shop/product-widget/src/SprykerShop/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}
