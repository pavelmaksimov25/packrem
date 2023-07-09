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

/* @CmsBlock/template/banner_block.twig */
class __TwigTemplate_d45269b347d119d95b1081f610cec315 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CmsBlock/template/banner_block.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CmsBlock/template/banner_block.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"link\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"imageUrl\" -->

    ";
        // line 7
        $this->loadTemplate("@CmsBlock/template/banner_block.twig", "@CmsBlock/template/banner_block.twig", 7, "1892167967")->display(twig_to_array(["modifiers" => [0 => "secondary", 1 => "full-width"], "class" => "spacing-top spacing-top--inner spacing-top--big", "data" => ["blockTitle" => $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "title"), "blockContent" => $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "content"), "imageUrl" => $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "imageUrl"), "link" => $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "link")]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/banner_block.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 7,  67 => 2,  57 => 1,  46 => 35,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"link\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"imageUrl\" -->

    {% embed organism('section') with {
        modifiers: ['secondary', 'full-width'],
        class: 'spacing-top spacing-top--inner spacing-top--big',
        data: {
            blockTitle: spyCmsBlockPlaceholder('title'),
            blockContent: spyCmsBlockPlaceholder('content'),
            imageUrl: spyCmsBlockPlaceholder('imageUrl'),
            link: spyCmsBlockPlaceholder('link'),
        },
    } only %}
        {% block inner %}
            {{ data.blockTitle | raw }}

            <div class=\"grid grid--left grid--middle\">
                <div class=\"col col--sm-12\">
                    {% include molecule('banner') with {
                        modifiers: ['spacing-bottom-reset'],
                        data: {
                            imageUrl: data.imageUrl,
                            clickUrl: data.link,
                            content: data.blockContent,
                        },
                    } only %}
                </div>
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}

", "@CmsBlock/template/banner_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/banner_block.twig");
    }
}


/* @CmsBlock/template/banner_block.twig */
class __TwigTemplate_d45269b347d119d95b1081f610cec315___1892167967 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'inner' => [$this, 'block_inner'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return $this->loadTemplate($this->env->getFunction('organism')->getCallable()("section"), "@CmsBlock/template/banner_block.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CmsBlock/template/banner_block.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CmsBlock/template/banner_block.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inner"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inner"));

        // line 18
        echo "            ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "blockTitle", [], "any", false, false, false, 18);
        echo "

            <div class=\"grid grid--left grid--middle\">
                <div class=\"col col--sm-12\">
                    ";
        // line 22
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("banner"), "@CmsBlock/template/banner_block.twig", 22)->display(twig_to_array(["modifiers" => [0 => "spacing-bottom-reset"], "data" => ["imageUrl" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "imageUrl", [], "any", false, false, false, 25), "clickUrl" => twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "link", [], "any", false, false, false, 26), "content" => twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "blockContent", [], "any", false, false, false, 27)]]));
        // line 30
        echo "                </div>
            </div>
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/banner_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 30,  197 => 27,  196 => 26,  195 => 25,  194 => 22,  186 => 18,  176 => 17,  74 => 7,  67 => 2,  57 => 1,  46 => 35,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"link\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"imageUrl\" -->

    {% embed organism('section') with {
        modifiers: ['secondary', 'full-width'],
        class: 'spacing-top spacing-top--inner spacing-top--big',
        data: {
            blockTitle: spyCmsBlockPlaceholder('title'),
            blockContent: spyCmsBlockPlaceholder('content'),
            imageUrl: spyCmsBlockPlaceholder('imageUrl'),
            link: spyCmsBlockPlaceholder('link'),
        },
    } only %}
        {% block inner %}
            {{ data.blockTitle | raw }}

            <div class=\"grid grid--left grid--middle\">
                <div class=\"col col--sm-12\">
                    {% include molecule('banner') with {
                        modifiers: ['spacing-bottom-reset'],
                        data: {
                            imageUrl: data.imageUrl,
                            clickUrl: data.link,
                            content: data.blockContent,
                        },
                    } only %}
                </div>
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}

", "@CmsBlock/template/banner_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/banner_block.twig");
    }
}
