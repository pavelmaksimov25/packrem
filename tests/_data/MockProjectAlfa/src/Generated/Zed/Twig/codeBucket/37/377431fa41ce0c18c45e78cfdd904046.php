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

/* @ProductManagement/Index/index.twig */
class __TwigTemplate_76f572b32bc0a8c86806a7de21cd2f24 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section_title' => [$this, 'block_section_title'],
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
            'head_css' => [$this, 'block_head_css'],
            'footer_js' => [$this, 'block_footer_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductManagement/Index/index.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductManagement/Index/index.twig"));

        // line 3
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product");
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductManagement/Index/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_title"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_title"));

        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 4, $this->source); })()), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        // line 7
        echo "    ";
        echo $this->env->getFunction('createActionButton')->getCallable()("/product-management/add", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Product"));
        echo "
    ";
        // line 8
        echo $this->env->getFunction('createActionButton')->getCallable()("/product-management/add?type=bundle", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Bundle Product"));
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
    ";
        // line 13
        $this->loadTemplate("@ProductManagement/_partials/filters.twig", "@ProductManagement/Index/index.twig", 13)->display($context);
        // line 14
        echo "
    ";
        // line 15
        $this->loadTemplate("@ProductManagement/Index/index.twig", "@ProductManagement/Index/index.twig", 15, "535405130")->display(twig_array_merge($context, ["widget_title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products")]));
        // line 22
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 25
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_css"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_css"));

        // line 26
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->env->getFunction('assetsPath')->getCallable()("css/spryker-zed-productmanagement-main.css");
        echo "\" />
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_js"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_js"));

        // line 31
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 32
        echo $this->env->getFunction('assetsPath')->getCallable()("js/spryker-zed-productmanagement-main.js");
        echo "\"></script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ProductManagement/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 32,  179 => 31,  169 => 30,  157 => 27,  152 => 26,  142 => 25,  131 => 22,  129 => 15,  126 => 14,  124 => 13,  121 => 12,  111 => 11,  99 => 8,  94 => 7,  84 => 6,  65 => 4,  54 => 1,  52 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Product' | trans %}
{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ createActionButton('/product-management/add', 'Create Product' | trans) }}
    {{ createActionButton('/product-management/add?type=bundle', 'Create Bundle Product' | trans) }}
{% endblock %}

{% block content %}

    {% include '@ProductManagement/_partials/filters.twig' %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Products' | trans } %}

        {% block widget_content %}
            {{ productTable | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-productmanagement-main.css') }}\" />
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-productmanagement-main.js') }}\"></script>
{% endblock %}

", "@ProductManagement/Index/index.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation/Index/index.twig");
    }
}


/* @ProductManagement/Index/index.twig */
class __TwigTemplate_76f572b32bc0a8c86806a7de21cd2f24___535405130 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 15
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductManagement/Index/index.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductManagement/Index/index.twig"));

        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductManagement/Index/index.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_content"));

        // line 18
        echo "            ";
        echo (isset($context["productTable"]) || array_key_exists("productTable", $context) ? $context["productTable"] : (function () { throw new RuntimeError('Variable "productTable" does not exist.', 18, $this->source); })());
        echo "
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ProductManagement/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 18,  294 => 17,  271 => 15,  184 => 32,  179 => 31,  169 => 30,  157 => 27,  152 => 26,  142 => 25,  131 => 22,  129 => 15,  126 => 14,  124 => 13,  121 => 12,  111 => 11,  99 => 8,  94 => 7,  84 => 6,  65 => 4,  54 => 1,  52 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Product' | trans %}
{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ createActionButton('/product-management/add', 'Create Product' | trans) }}
    {{ createActionButton('/product-management/add?type=bundle', 'Create Bundle Product' | trans) }}
{% endblock %}

{% block content %}

    {% include '@ProductManagement/_partials/filters.twig' %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Products' | trans } %}

        {% block widget_content %}
            {{ productTable | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-productmanagement-main.css') }}\" />
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-productmanagement-main.js') }}\"></script>
{% endblock %}

", "@ProductManagement/Index/index.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation/Index/index.twig");
    }
}
