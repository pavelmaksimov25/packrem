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

/* @ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_59df23bbf6630a5d67140461f0be278f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'template' => [$this, 'block_template'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("page-blank", "@SprykerShop:ShopUi"), "@ShopUi/templates/page-blank/page-blank.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_template($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["isCssLazyLoadSupported"] = true;
        // line 5
        echo "
    ";
        // line 6
        $this->displayParentBlock("template", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ShopUi/templates/page-blank/page-blank.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-blank', '@SprykerShop:ShopUi') %}

{% block template %}
    {% set isCssLazyLoadSupported = true %}

    {{ parent() }}
{% endblock %}
", "@ShopUi/templates/page-blank/page-blank.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}
