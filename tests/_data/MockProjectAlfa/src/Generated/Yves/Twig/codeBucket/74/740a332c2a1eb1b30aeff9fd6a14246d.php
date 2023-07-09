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

/* @CmsBlock/template/banner_grid_column_block.twig */
class __TwigTemplate_623f99fa13fd7df2e7af510b6fe5551b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CmsBlock/template/banner_grid_column_block.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CmsBlock/template/banner_grid_column_block.twig"));

        // line 1
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

        // line 2
        echo "    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"link\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"imageUrl\" -->

    <div class=\"col col--sm-12 col--lg-4\">
        ";
        // line 8
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("banner"), "@CmsBlock/template/banner_grid_column_block.twig", 8)->display(twig_to_array(["modifiers" => [0 => "small"], "data" => ["imageUrl" => $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "imageUrl"), "clickUrl" => $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "link"), "content" => ($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "title") . $this->env->getFunction('spyCmsBlockPlaceholder')->getCallable()($context, "content"))]]));
        // line 16
        echo "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/banner_grid_column_block.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  71 => 8,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"link\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"imageUrl\" -->

    <div class=\"col col--sm-12 col--lg-4\">
        {% include molecule('banner') with {
            modifiers: ['small'],
            data: {
                imageUrl: spyCmsBlockPlaceholder('imageUrl'),
                clickUrl: spyCmsBlockPlaceholder('link'),
                content: spyCmsBlockPlaceholder('title') ~ spyCmsBlockPlaceholder('content'),
            },
        } only %}
    </div>
{% endblock %}
", "@CmsBlock/template/banner_grid_column_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/banner_grid_column_block.twig");
    }
}
