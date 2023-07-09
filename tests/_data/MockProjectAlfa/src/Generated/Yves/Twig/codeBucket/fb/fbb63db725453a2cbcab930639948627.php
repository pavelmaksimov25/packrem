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

/* @ContentNavigationWidget/views/navigation-footer/navigation-footer.twig */
class __TwigTemplate_885ff66509abfd05e4ae82fba521c93d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'navigationItem' => [$this, 'block_navigationItem'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig"));

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
        $context["title"] = "";
        // line 9
        echo "
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "navigation", [], "any", false, false, false, 10), "nodes", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 11
            echo "        ";
            $context["nodeType"] = twig_get_attribute($this->env, $this->source, $context["node"], "nodeType", [], "any", false, false, false, 11);
            // line 12
            echo "
        ";
            // line 13
            if (((isset($context["nodeType"]) || array_key_exists("nodeType", $context) ? $context["nodeType"] : (function () { throw new RuntimeError('Variable "nodeType" does not exist.', 13, $this->source); })()) == "category")) {
                // line 14
                echo "            ";
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.top_categories");
                // line 15
                echo "        ";
            }
            // line 16
            echo "
        ";
            // line 17
            if (((isset($context["nodeType"]) || array_key_exists("nodeType", $context) ? $context["nodeType"] : (function () { throw new RuntimeError('Variable "nodeType" does not exist.', 17, $this->source); })()) == "link")) {
                // line 18
                echo "            ";
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.popular_brands");
                // line 19
                echo "        ";
            }
            // line 20
            echo "
        ";
            // line 21
            if (((isset($context["nodeType"]) || array_key_exists("nodeType", $context) ? $context["nodeType"] : (function () { throw new RuntimeError('Variable "nodeType" does not exist.', 21, $this->source); })()) == "cms_page")) {
                // line 22
                echo "            ";
                $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.about");
                // line 23
                echo "        ";
            }
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    ";
        // line 26
        $context["selectorPart"] = twig_replace_filter(twig_lower_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 26, $this->source); })())), [" " => "-"]);
        // line 27
        echo "    ";
        $context["triggerClass"] = (("js-navigation-footer-" . (isset($context["selectorPart"]) || array_key_exists("selectorPart", $context) ? $context["selectorPart"] : (function () { throw new RuntimeError('Variable "selectorPart" does not exist.', 27, $this->source); })())) . "__trigger");
        // line 28
        echo "    ";
        $context["targetClass"] = ("js-navigation-footer-" . (isset($context["selectorPart"]) || array_key_exists("selectorPart", $context) ? $context["selectorPart"] : (function () { throw new RuntimeError('Variable "selectorPart" does not exist.', 28, $this->source); })()));
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('navigationItem', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_navigationItem($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigationItem"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigationItem"));

        // line 31
        echo "        ";
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-item", "ContentNavigationWidget"), "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", 31)->display(twig_to_array(["class" => ("col col--sm-12 col--md-4 " .         // line 32
(isset($context["targetClass"]) || array_key_exists("targetClass", $context) ? $context["targetClass"] : (function () { throw new RuntimeError('Variable "targetClass" does not exist.', 32, $this->source); })())), "data" => ["nodes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "navigation", [], "any", false, false, false, 34), "nodes", [], "any", false, false, false, 34), "title" =>         // line 35
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 35, $this->source); })()), "toggleClass" =>         // line 36
(isset($context["targetClass"]) || array_key_exists("targetClass", $context) ? $context["targetClass"] : (function () { throw new RuntimeError('Variable "targetClass" does not exist.', 36, $this->source); })())]]));
        // line 39
        echo "
        ";
        // line 40
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-accordion"), "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", 40)->display(twig_to_array(["attributes" => ["wrap-class-name" =>         // line 42
(isset($context["targetClass"]) || array_key_exists("targetClass", $context) ? $context["targetClass"] : (function () { throw new RuntimeError('Variable "targetClass" does not exist.', 42, $this->source); })()), "trigger-class-name" =>         // line 43
(isset($context["triggerClass"]) || array_key_exists("triggerClass", $context) ? $context["triggerClass"] : (function () { throw new RuntimeError('Variable "triggerClass" does not exist.', 43, $this->source); })()), "class-to-toggle" => "is-hidden-sm-only"]]));
        // line 47
        echo "    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 47,  168 => 43,  167 => 42,  166 => 40,  163 => 39,  161 => 36,  160 => 35,  159 => 34,  158 => 32,  156 => 31,  137 => 30,  134 => 29,  131 => 28,  128 => 27,  126 => 26,  123 => 25,  117 => 24,  114 => 23,  111 => 22,  109 => 21,  106 => 20,  103 => 19,  100 => 18,  98 => 17,  95 => 16,  92 => 15,  89 => 14,  87 => 13,  84 => 12,  81 => 11,  77 => 10,  74 => 9,  71 => 8,  61 => 7,  51 => 1,  50 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    navigation: navigation,
} %}

{% block body %}
    {% set title = '' %}

    {% for node in data.navigation.nodes %}
        {% set nodeType = node.nodeType %}

        {% if nodeType == 'category' %}
            {% set title = 'global.top_categories' | trans %}
        {% endif %}

        {% if nodeType == 'link' %}
            {% set title = 'global.popular_brands' | trans %}
        {% endif %}

        {% if nodeType == 'cms_page' %}
            {% set title = 'global.about' | trans %}
        {% endif %}
    {% endfor %}

    {% set selectorPart = title | lower | replace({' ': '-'}) %}
    {% set triggerClass = 'js-navigation-footer-' ~ selectorPart ~ '__trigger' %}
    {% set targetClass = 'js-navigation-footer-' ~ selectorPart %}

    {% block navigationItem %}
        {% include molecule('navigation-item', 'ContentNavigationWidget') with {
            class: 'col col--sm-12 col--md-4 ' ~ targetClass,
            data: {
                nodes: data.navigation.nodes,
                title: title,
                toggleClass: targetClass,
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
{% endblock %}
", "@ContentNavigationWidget/views/navigation-footer/navigation-footer.twig", "/data/src/Pyz/Yves/ContentNavigationWidget/Theme/default/views/navigation-footer/navigation-footer.twig");
    }
}
