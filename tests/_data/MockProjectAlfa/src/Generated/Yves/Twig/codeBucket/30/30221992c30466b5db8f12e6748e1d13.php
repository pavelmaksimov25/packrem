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

/* @ShopUi/components/molecules/form-submitter/form-submitter.twig */
class __TwigTemplate_fbb2f6c17fcbbbb5ea38cb429a454e68 extends Template
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
        // line 1
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("form-submitter", "@SprykerShop:ShopUi"), "@ShopUi/components/molecules/form-submitter/form-submitter.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/form-submitter/form-submitter.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/form-submitter/form-submitter.twig"));

        // line 3
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["form-class-name" => ""], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/form-submitter/form-submitter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 1,  47 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('form-submitter', '@SprykerShop:ShopUi') %}

{% define attributes = {
    'form-class-name': '',
} %}
", "@ShopUi/components/molecules/form-submitter/form-submitter.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/form-submitter/form-submitter.twig");
    }
}
