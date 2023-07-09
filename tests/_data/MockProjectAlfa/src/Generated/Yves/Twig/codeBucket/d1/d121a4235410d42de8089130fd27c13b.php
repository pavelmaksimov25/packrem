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

/* @ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig */
class __TwigTemplate_b70b4bf7cff9ec8224ae181453d58264 extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig"));

        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["productAbstractViewCollection" => ((        // line 4
array_key_exists("productAbstractViewCollection", $context)) ? (_twig_default_filter((isset($context["productAbstractViewCollection"]) || array_key_exists("productAbstractViewCollection", $context) ? $context["productAbstractViewCollection"] : (function () { throw new RuntimeError('Variable "productAbstractViewCollection" does not exist.', 4, $this->source); })()), [])) : ([]))], $context['data']);        // line 1
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
        $this->loadTemplate("@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig", "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig", 8, "541231483")->display(twig_to_array(["modifiers" => [0 => "full-width", 1 => "equal-height"], "data" => ["slides" => twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "productAbstractViewCollection", [], "any", false, false, false, 11)], "attributes" => ["slider-config" => "{
                \"slidesToShow\": 3,
                \"dots\": false,
                \"arrows\": true,
                \"adaptiveHeight\": true,
                \"responsive\": [{
                    \"breakpoint\": 768,
                    \"settings\": {
                        \"slidesToShow\": 2
                    }
                },
                {
                    \"breakpoint\": 375,
                    \"settings\": {
                        \"slidesToShow\": 1
                    }
                }]
            }"]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  70 => 8,  60 => 7,  50 => 1,  49 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    productAbstractViewCollection: productAbstractViewCollection | default([]),
} %}

{% block body %}
    {% embed molecule('slick-carousel') with {
        modifiers: ['full-width', 'equal-height'],
        data: {
            slides: data.productAbstractViewCollection,
        },
        attributes: {
            'slider-config': '{
                \"slidesToShow\": 3,
                \"dots\": false,
                \"arrows\": true,
                \"adaptiveHeight\": true,
                \"responsive\": [{
                    \"breakpoint\": 768,
                    \"settings\": {
                        \"slidesToShow\": 2
                    }
                },
                {
                    \"breakpoint\": 375,
                    \"settings\": {
                        \"slidesToShow\": 1
                    }
                }]
            }',
        },
    } only %}
        {% block slides %}
            {% for availableProduct in data.slides %}
                {% if availableProduct.available %}
                    {% widget 'CmsProductWidget' args [availableProduct] use '@ProductWidget/views/cms-product-slider/cms-product-slider.twig' only %}{% endwidget %}
                {% endif %}
            {% endfor %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig", "/data/src/Pyz/Yves/ContentProductWidget/Theme/default/views/cms-product-abstract-slider/cms-product-abstract-slider.twig");
    }
}


/* @ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig */
class __TwigTemplate_b70b4bf7cff9ec8224ae181453d58264___541231483 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'slides' => [$this, 'block_slides'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("slick-carousel"), "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slides"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slides"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "slides", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["availableProduct"]) {
            // line 36
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["availableProduct"], "available", [], "any", false, false, false, 36)) {
                // line 37
                echo "                    ";
                if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CmsProductWidget", [0 => $context["availableProduct"]])) {
                    $this->loadTemplate("@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig", "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig", 37, 1630823640)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget, "@ProductWidget/views/cms-product-slider/cms-product-slider.twig")));
                    $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
                }                // line 38
                echo "                ";
            }
            // line 39
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['availableProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 40,  230 => 39,  227 => 38,  222 => 37,  219 => 36,  214 => 35,  204 => 34,  182 => 8,  72 => 11,  70 => 8,  60 => 7,  50 => 1,  49 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    productAbstractViewCollection: productAbstractViewCollection | default([]),
} %}

{% block body %}
    {% embed molecule('slick-carousel') with {
        modifiers: ['full-width', 'equal-height'],
        data: {
            slides: data.productAbstractViewCollection,
        },
        attributes: {
            'slider-config': '{
                \"slidesToShow\": 3,
                \"dots\": false,
                \"arrows\": true,
                \"adaptiveHeight\": true,
                \"responsive\": [{
                    \"breakpoint\": 768,
                    \"settings\": {
                        \"slidesToShow\": 2
                    }
                },
                {
                    \"breakpoint\": 375,
                    \"settings\": {
                        \"slidesToShow\": 1
                    }
                }]
            }',
        },
    } only %}
        {% block slides %}
            {% for availableProduct in data.slides %}
                {% if availableProduct.available %}
                    {% widget 'CmsProductWidget' args [availableProduct] use '@ProductWidget/views/cms-product-slider/cms-product-slider.twig' only %}{% endwidget %}
                {% endif %}
            {% endfor %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig", "/data/src/Pyz/Yves/ContentProductWidget/Theme/default/views/cms-product-abstract-slider/cms-product-abstract-slider.twig");
    }
}


/* @ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig */
class __TwigTemplate_b70b4bf7cff9ec8224ae181453d58264___1630823640 extends Template
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
        // line 37
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 37, $this->source); })()), "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig", 37);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 37,  236 => 40,  230 => 39,  227 => 38,  222 => 37,  219 => 36,  214 => 35,  204 => 34,  182 => 8,  72 => 11,  70 => 8,  60 => 7,  50 => 1,  49 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    productAbstractViewCollection: productAbstractViewCollection | default([]),
} %}

{% block body %}
    {% embed molecule('slick-carousel') with {
        modifiers: ['full-width', 'equal-height'],
        data: {
            slides: data.productAbstractViewCollection,
        },
        attributes: {
            'slider-config': '{
                \"slidesToShow\": 3,
                \"dots\": false,
                \"arrows\": true,
                \"adaptiveHeight\": true,
                \"responsive\": [{
                    \"breakpoint\": 768,
                    \"settings\": {
                        \"slidesToShow\": 2
                    }
                },
                {
                    \"breakpoint\": 375,
                    \"settings\": {
                        \"slidesToShow\": 1
                    }
                }]
            }',
        },
    } only %}
        {% block slides %}
            {% for availableProduct in data.slides %}
                {% if availableProduct.available %}
                    {% widget 'CmsProductWidget' args [availableProduct] use '@ProductWidget/views/cms-product-slider/cms-product-slider.twig' only %}{% endwidget %}
                {% endif %}
            {% endfor %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ContentProductWidget/views/cms-product-abstract-slider/cms-product-abstract-slider.twig", "/data/src/Pyz/Yves/ContentProductWidget/Theme/default/views/cms-product-abstract-slider/cms-product-abstract-slider.twig");
    }
}
