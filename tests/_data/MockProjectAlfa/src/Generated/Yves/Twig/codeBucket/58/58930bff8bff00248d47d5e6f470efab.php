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

/* @ShopUi/components/molecules/banner/banner.twig */
class __TwigTemplate_771ceced8481bf989a1bcbde680870a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("banner", "@SprykerShop:ShopUi"), "@ShopUi/components/molecules/banner/banner.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/banner/banner.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/banner/banner.twig"));

        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "banner", "tag" => "article"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["clickUrl" => "", "content" => "", "buttonTitle" => ""], $context['data']);        // line 14
        $context["containerClass"] = (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14) . "__container grid grid--left grid--middle");
        // line 15
        $context["contentClass"] = "col col--sm-12";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "content", [], "any", false, false, false, 18);
        echo "

    ";
        // line 20
        $context["clickUrl"] = twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "clickUrl", [], "any", false, false, false, 20);
        // line 21
        echo "    ";
        if ((isset($context["clickUrl"]) || array_key_exists("clickUrl", $context) ? $context["clickUrl"] : (function () { throw new RuntimeError('Variable "clickUrl" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["clickUrl"]) || array_key_exists("clickUrl", $context) ? $context["clickUrl"] : (function () { throw new RuntimeError('Variable "clickUrl" does not exist.', 22, $this->source); })())), "html", null, true);
            echo "\" class=\"button button--medium button--tight button--hollow button--hollow-second\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "buttonTitle", [], "any", false, false, false, 23)) ? (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "buttonTitle", [], "any", false, false, false, 23)) : ("show_more.btn.title"))), "html", null, true);
            echo "
        </a>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "    ";
        $this->loadTemplate("@ShopUi/components/molecules/banner/banner.twig", "@ShopUi/components/molecules/banner/banner.twig", 29, "809677632")->display(twig_to_array(["class" =>         // line 30
(isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 30, $this->source); })()), "modifiers" =>         // line 31
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 31, $this->source); })()), "data" => ["imageSrc" => twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "imageUrl", [], "any", false, false, false, 33), "isBackground" => true], "embed" => ["contentClass" =>         // line 37
(isset($context["contentClass"]) || array_key_exists("contentClass", $context) ? $context["contentClass"] : (function () { throw new RuntimeError('Variable "contentClass" does not exist.', 37, $this->source); })()), "contentBlock" =>         $this->renderBlock("content", $context, $blocks)]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/banner/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 37,  119 => 33,  118 => 31,  117 => 30,  115 => 29,  105 => 28,  91 => 23,  86 => 22,  83 => 21,  81 => 20,  75 => 18,  65 => 17,  55 => 1,  53 => 15,  51 => 14,  50 => 8,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('banner', '@SprykerShop:ShopUi') %}

{% define config = {
    name: 'banner',
    tag: 'article',
} %}

{% define data = {
    clickUrl: '',
    content: '',
    buttonTitle: '',
} %}

{% set containerClass = config.name ~ '__container grid grid--left grid--middle' %}
{% set contentClass = 'col col--sm-12' %}

{% block content %}
    {{ data.content | raw }}

    {% set clickUrl = data.clickUrl %}
    {% if clickUrl %}
        <a href=\"{{ clickUrl | trans }}\" class=\"button button--medium button--tight button--hollow button--hollow-second\">
            {{ (data.buttonTitle ?: 'show_more.btn.title') | trans }}
        </a>
    {% endif %}
{% endblock %}

{% block body %}
    {% embed molecule('lazy-image') with {
        class: containerClass,
        modifiers: modifiers,
        data: {
            imageSrc: data.imageUrl,
            isBackground: true,
        },
        embed: {
            contentClass: contentClass,
            contentBlock: block('content'),
        },
    } only %}
        {% block content %}
            {{ parent() }}

            <div class=\"{{ config.name }}__content {{ embed.contentClass }}\">
                {{ embed.contentBlock | raw }}
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ShopUi/components/molecules/banner/banner.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/banner/banner.twig");
    }
}


/* @ShopUi/components/molecules/banner/banner.twig */
class __TwigTemplate_771ceced8481bf989a1bcbde680870a3___809677632 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 29
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("lazy-image"), "@ShopUi/components/molecules/banner/banner.twig", 29);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/banner/banner.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/banner/banner.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "            ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

            <div class=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), "html", null, true);
        echo "__content ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 44, $this->source); })()), "contentClass", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                ";
        // line 45
        echo twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 45, $this->source); })()), "contentBlock", [], "any", false, false, false, 45);
        echo "
            </div>
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/banner/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 45,  258 => 44,  252 => 42,  242 => 41,  220 => 29,  120 => 37,  119 => 33,  118 => 31,  117 => 30,  115 => 29,  105 => 28,  91 => 23,  86 => 22,  83 => 21,  81 => 20,  75 => 18,  65 => 17,  55 => 1,  53 => 15,  51 => 14,  50 => 8,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('banner', '@SprykerShop:ShopUi') %}

{% define config = {
    name: 'banner',
    tag: 'article',
} %}

{% define data = {
    clickUrl: '',
    content: '',
    buttonTitle: '',
} %}

{% set containerClass = config.name ~ '__container grid grid--left grid--middle' %}
{% set contentClass = 'col col--sm-12' %}

{% block content %}
    {{ data.content | raw }}

    {% set clickUrl = data.clickUrl %}
    {% if clickUrl %}
        <a href=\"{{ clickUrl | trans }}\" class=\"button button--medium button--tight button--hollow button--hollow-second\">
            {{ (data.buttonTitle ?: 'show_more.btn.title') | trans }}
        </a>
    {% endif %}
{% endblock %}

{% block body %}
    {% embed molecule('lazy-image') with {
        class: containerClass,
        modifiers: modifiers,
        data: {
            imageSrc: data.imageUrl,
            isBackground: true,
        },
        embed: {
            contentClass: contentClass,
            contentBlock: block('content'),
        },
    } only %}
        {% block content %}
            {{ parent() }}

            <div class=\"{{ config.name }}__content {{ embed.contentClass }}\">
                {{ embed.contentBlock | raw }}
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ShopUi/components/molecules/banner/banner.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/banner/banner.twig");
    }
}
