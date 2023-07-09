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

/* @CatalogPage/components/molecules/window-location-applicator/window-location-applicator.twig */
class __TwigTemplate_eb68a83b0a4a00c3eefd377d807773cc extends Template
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
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("window-location-applicator", "@SprykerShop:CatalogPage"), "@CatalogPage/components/molecules/window-location-applicator/window-location-applicator.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CatalogPage/components/molecules/window-location-applicator/window-location-applicator.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CatalogPage/components/molecules/window-location-applicator/window-location-applicator.twig"));

        // line 3
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["sort-trigger-class-name" =>         // line 4
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 4, $this->source); })())], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/window-location-applicator/window-location-applicator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 1,  48 => 4,  47 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('window-location-applicator', '@SprykerShop:CatalogPage') %}

{% define attributes = {
    'sort-trigger-class-name': required,
} %}
", "@CatalogPage/components/molecules/window-location-applicator/window-location-applicator.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/window-location-applicator/window-location-applicator.twig");
    }
}
