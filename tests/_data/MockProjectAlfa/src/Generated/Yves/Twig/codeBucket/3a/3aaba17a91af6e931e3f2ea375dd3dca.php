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

/* @HomePage/views/home/home.twig */
class __TwigTemplate_6c81524c4a28657ff936a6f39fe8af8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contentTop' => [$this, 'block_contentTop'],
            'content' => [$this, 'block_content'],
            'contentBottom' => [$this, 'block_contentBottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('view')->getCallable()("home", "@SprykerShop:HomePage"), "@HomePage/views/home/home.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@HomePage/views/home/home.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@HomePage/views/home/home.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_contentTop($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentTop"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentTop"));

        // line 4
        echo "    ";
        $this->loadTemplate("@HomePage/views/home/home.twig", "@HomePage/views/home/home.twig", 4, "1834357673")->display(twig_to_array(["class" => "spacing-bottom spacing-bottom--big", "modifiers" => [0 => "jumbotron"], "attributes" => ["slider-config" => "{
                \"slidesToShow\": 1,
                \"dots\": true,
                \"autoplay\": true,
                \"nextArrow\": false,
                \"prevArrow\": false,
                \"autoplaySpeed\": 4000,
                \"centerMode\": true,
                \"centerPadding\": \"240px\",
                \"responsive\": [{
                     \"breakpoint\": 1400,
                     \"settings\": {
                         \"centerPadding\": \"130px\"
                     }
                },
                {
                    \"breakpoint\": 1200,
                    \"settings\": {
                        \"centerPadding\": \"40px\"
                    }
                },
                {
                    \"breakpoint\": 768,
                    \"settings\": {
                        \"centerPadding\": \"12px\",
                        \"autoplay\": false
                    }
                },
                {
                    \"breakpoint\": 375,
                    \"settings\": {
                        \"centerMode\": false,
                        \"autoplay\": false
                    }
                }]
            }"]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 53
        echo "    ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-3')->setCmsSlotTemplatePath('@HomePage/views/home/home.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 54
        echo "
    ";
        // line 55
        $this->loadTemplate("@HomePage/views/home/home.twig", "@HomePage/views/home/home.twig", 55, "1027394117")->display(twig_to_array(["modifiers" => [0 => "secondary", 1 => "full-width"], "class" => "spacing-top spacing-top--inner spacing-top--big"]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 67
    public function block_contentBottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentBottom"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentBottom"));

        // line 68
        echo "    ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-5')->setCmsSlotTemplatePath('@HomePage/views/home/home.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@HomePage/views/home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 68,  140 => 67,  130 => 55,  127 => 54,  125 => 53,  115 => 52,  69 => 4,  59 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('home', '@SprykerShop:HomePage') %}

{% block contentTop %}
    {% embed molecule('slick-carousel') with {
        class: 'spacing-bottom spacing-bottom--big',
        modifiers: ['jumbotron'],
        attributes: {
            'slider-config': '{
                \"slidesToShow\": 1,
                \"dots\": true,
                \"autoplay\": true,
                \"nextArrow\": false,
                \"prevArrow\": false,
                \"autoplaySpeed\": 4000,
                \"centerMode\": true,
                \"centerPadding\": \"240px\",
                \"responsive\": [{
                     \"breakpoint\": 1400,
                     \"settings\": {
                         \"centerPadding\": \"130px\"
                     }
                },
                {
                    \"breakpoint\": 1200,
                    \"settings\": {
                        \"centerPadding\": \"40px\"
                    }
                },
                {
                    \"breakpoint\": 768,
                    \"settings\": {
                        \"centerPadding\": \"12px\",
                        \"autoplay\": false
                    }
                },
                {
                    \"breakpoint\": 375,
                    \"settings\": {
                        \"centerMode\": false,
                        \"autoplay\": false
                    }
                }]
            }',
        },
    } only %}
        {% block slides %}
            {% cms_slot 'slt-2' %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% cms_slot 'slt-3' %}

    {% embed organism('section') with {
        modifiers: ['secondary', 'full-width'],
        class: 'spacing-top spacing-top--inner spacing-top--big',
    } only %}
        {% block inner %}
            <div class=\"grid grid--left grid--middle\">
                {% cms_slot 'slt-4' %}
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block contentBottom %}
    {% cms_slot 'slt-5' %}
{% endblock %}
", "@HomePage/views/home/home.twig", "/data/src/Pyz/Yves/HomePage/Theme/default/views/home/home.twig");
    }
}


/* @HomePage/views/home/home.twig */
class __TwigTemplate_6c81524c4a28657ff936a6f39fe8af8b___1834357673 extends Template
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
        // line 4
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("slick-carousel"), "@HomePage/views/home/home.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@HomePage/views/home/home.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@HomePage/views/home/home.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slides"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slides"));

        // line 47
        echo "            ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-2')->setCmsSlotTemplatePath('@HomePage/views/home/home.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 48
        echo "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@HomePage/views/home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 48,  302 => 47,  292 => 46,  270 => 4,  150 => 68,  140 => 67,  130 => 55,  127 => 54,  125 => 53,  115 => 52,  69 => 4,  59 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('home', '@SprykerShop:HomePage') %}

{% block contentTop %}
    {% embed molecule('slick-carousel') with {
        class: 'spacing-bottom spacing-bottom--big',
        modifiers: ['jumbotron'],
        attributes: {
            'slider-config': '{
                \"slidesToShow\": 1,
                \"dots\": true,
                \"autoplay\": true,
                \"nextArrow\": false,
                \"prevArrow\": false,
                \"autoplaySpeed\": 4000,
                \"centerMode\": true,
                \"centerPadding\": \"240px\",
                \"responsive\": [{
                     \"breakpoint\": 1400,
                     \"settings\": {
                         \"centerPadding\": \"130px\"
                     }
                },
                {
                    \"breakpoint\": 1200,
                    \"settings\": {
                        \"centerPadding\": \"40px\"
                    }
                },
                {
                    \"breakpoint\": 768,
                    \"settings\": {
                        \"centerPadding\": \"12px\",
                        \"autoplay\": false
                    }
                },
                {
                    \"breakpoint\": 375,
                    \"settings\": {
                        \"centerMode\": false,
                        \"autoplay\": false
                    }
                }]
            }',
        },
    } only %}
        {% block slides %}
            {% cms_slot 'slt-2' %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% cms_slot 'slt-3' %}

    {% embed organism('section') with {
        modifiers: ['secondary', 'full-width'],
        class: 'spacing-top spacing-top--inner spacing-top--big',
    } only %}
        {% block inner %}
            <div class=\"grid grid--left grid--middle\">
                {% cms_slot 'slt-4' %}
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block contentBottom %}
    {% cms_slot 'slt-5' %}
{% endblock %}
", "@HomePage/views/home/home.twig", "/data/src/Pyz/Yves/HomePage/Theme/default/views/home/home.twig");
    }
}


/* @HomePage/views/home/home.twig */
class __TwigTemplate_6c81524c4a28657ff936a6f39fe8af8b___1027394117 extends Template
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
        // line 55
        return $this->loadTemplate($this->env->getFunction('organism')->getCallable()("section"), "@HomePage/views/home/home.twig", 55);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@HomePage/views/home/home.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@HomePage/views/home/home.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inner"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inner"));

        // line 60
        echo "            <div class=\"grid grid--left grid--middle\">
                ";
        // line 61
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-4')->setCmsSlotTemplatePath('@HomePage/views/home/home.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 62
        echo "            </div>
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@HomePage/views/home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 62,  459 => 61,  456 => 60,  446 => 59,  424 => 55,  304 => 48,  302 => 47,  292 => 46,  270 => 4,  150 => 68,  140 => 67,  130 => 55,  127 => 54,  125 => 53,  115 => 52,  69 => 4,  59 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('home', '@SprykerShop:HomePage') %}

{% block contentTop %}
    {% embed molecule('slick-carousel') with {
        class: 'spacing-bottom spacing-bottom--big',
        modifiers: ['jumbotron'],
        attributes: {
            'slider-config': '{
                \"slidesToShow\": 1,
                \"dots\": true,
                \"autoplay\": true,
                \"nextArrow\": false,
                \"prevArrow\": false,
                \"autoplaySpeed\": 4000,
                \"centerMode\": true,
                \"centerPadding\": \"240px\",
                \"responsive\": [{
                     \"breakpoint\": 1400,
                     \"settings\": {
                         \"centerPadding\": \"130px\"
                     }
                },
                {
                    \"breakpoint\": 1200,
                    \"settings\": {
                        \"centerPadding\": \"40px\"
                    }
                },
                {
                    \"breakpoint\": 768,
                    \"settings\": {
                        \"centerPadding\": \"12px\",
                        \"autoplay\": false
                    }
                },
                {
                    \"breakpoint\": 375,
                    \"settings\": {
                        \"centerMode\": false,
                        \"autoplay\": false
                    }
                }]
            }',
        },
    } only %}
        {% block slides %}
            {% cms_slot 'slt-2' %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% cms_slot 'slt-3' %}

    {% embed organism('section') with {
        modifiers: ['secondary', 'full-width'],
        class: 'spacing-top spacing-top--inner spacing-top--big',
    } only %}
        {% block inner %}
            <div class=\"grid grid--left grid--middle\">
                {% cms_slot 'slt-4' %}
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block contentBottom %}
    {% cms_slot 'slt-5' %}
{% endblock %}
", "@HomePage/views/home/home.twig", "/data/src/Pyz/Yves/HomePage/Theme/default/views/home/home.twig");
    }
}
