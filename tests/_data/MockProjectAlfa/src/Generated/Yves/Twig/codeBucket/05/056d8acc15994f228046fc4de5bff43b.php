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

/* @CmsBlock/template/section_content-collapser_block.twig */
class __TwigTemplate_c9195721b99a0d5888e25201726b6216 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CmsBlock/template/section_content-collapser_block.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CmsBlock/template/section_content-collapser_block.twig"));

        // line 1
        echo "<!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
<!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $this->loadTemplate("@CmsBlock/template/section_content-collapser_block.twig", "@CmsBlock/template/section_content-collapser_block.twig", 5, "256344178")->display(twig_to_array(["modifiers" => [0 => "secondary"], "data" => ["blockTitle" => $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "title"), "blockContent" => $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "content"), "innerClass" => "container"]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/section_content-collapser_block.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
<!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

{% block content %}
    {% embed organism('section') with {
        modifiers: ['secondary'],
        data: {
            blockTitle: spyCmsBlockPlaceholder('title'),
            blockContent: spyCmsBlockPlaceholder('content'),
            innerClass: 'container',
        },
    } only %}
        {% block inner %}
            {% embed molecule('content-collapser') with {
                data: {
                    blockTitle: data.blockTitle,
                    blockContent: data.blockContent,
                },
            } only %}
                {% block content %}
                    {{ data.blockTitle | raw }}
                    {{ data.blockContent | raw }}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@CmsBlock/template/section_content-collapser_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/section_content-collapser_block.twig");
    }
}


/* @CmsBlock/template/section_content-collapser_block.twig */
class __TwigTemplate_c9195721b99a0d5888e25201726b6216___256344178 extends Template
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
        return $this->loadTemplate($this->env->getFunction('organism')->getCallable()("section"), "@CmsBlock/template/section_content-collapser_block.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CmsBlock/template/section_content-collapser_block.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CmsBlock/template/section_content-collapser_block.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inner"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inner"));

        // line 14
        echo "            ";
        $this->loadTemplate("@CmsBlock/template/section_content-collapser_block.twig", "@CmsBlock/template/section_content-collapser_block.twig", 14, "1555152593")->display(twig_to_array(["data" => ["blockTitle" => twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "blockTitle", [], "any", false, false, false, 16), "blockContent" => twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "blockContent", [], "any", false, false, false, 17)]]));
        // line 25
        echo "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/section_content-collapser_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 25,  176 => 17,  175 => 16,  173 => 14,  163 => 13,  68 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
<!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

{% block content %}
    {% embed organism('section') with {
        modifiers: ['secondary'],
        data: {
            blockTitle: spyCmsBlockPlaceholder('title'),
            blockContent: spyCmsBlockPlaceholder('content'),
            innerClass: 'container',
        },
    } only %}
        {% block inner %}
            {% embed molecule('content-collapser') with {
                data: {
                    blockTitle: data.blockTitle,
                    blockContent: data.blockContent,
                },
            } only %}
                {% block content %}
                    {{ data.blockTitle | raw }}
                    {{ data.blockContent | raw }}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@CmsBlock/template/section_content-collapser_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/section_content-collapser_block.twig");
    }
}


/* @CmsBlock/template/section_content-collapser_block.twig */
class __TwigTemplate_c9195721b99a0d5888e25201726b6216___1555152593 extends Template
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
        // line 14
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("content-collapser"), "@CmsBlock/template/section_content-collapser_block.twig", 14);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CmsBlock/template/section_content-collapser_block.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CmsBlock/template/section_content-collapser_block.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "blockTitle", [], "any", false, false, false, 21);
        echo "
                    ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "blockContent", [], "any", false, false, false, 22);
        echo "
                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/section_content-collapser_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 22,  288 => 21,  278 => 20,  256 => 14,  178 => 25,  176 => 17,  175 => 16,  173 => 14,  163 => 13,  68 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
<!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

{% block content %}
    {% embed organism('section') with {
        modifiers: ['secondary'],
        data: {
            blockTitle: spyCmsBlockPlaceholder('title'),
            blockContent: spyCmsBlockPlaceholder('content'),
            innerClass: 'container',
        },
    } only %}
        {% block inner %}
            {% embed molecule('content-collapser') with {
                data: {
                    blockTitle: data.blockTitle,
                    blockContent: data.blockContent,
                },
            } only %}
                {% block content %}
                    {{ data.blockTitle | raw }}
                    {{ data.blockContent | raw }}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@CmsBlock/template/section_content-collapser_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/section_content-collapser_block.twig");
    }
}
