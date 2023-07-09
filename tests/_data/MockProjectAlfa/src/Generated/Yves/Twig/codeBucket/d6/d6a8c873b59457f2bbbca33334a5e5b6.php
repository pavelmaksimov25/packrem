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

/* @ContentNavigationWidget/views/footer-social-links/footer-social-links.twig */
class __TwigTemplate_dd26213772fcef911d63742fbb9d511c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@ContentNavigationWidget/views/footer-social-links/footer-social-links.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContentNavigationWidget/views/footer-social-links/footer-social-links.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContentNavigationWidget/views/footer-social-links/footer-social-links.twig"));

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
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("navigation-item", "ContentNavigationWidget"), "@ContentNavigationWidget/views/footer-social-links/footer-social-links.twig", 8)->display(twig_to_array(["class" => "col col--sm-12 col--md-5 col--lg-3", "modifiers" => [0 => "reset-border-top"], "data" => ["nodes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "navigation", [], "any", false, false, false, 12), "nodes", [], "any", false, false, false, 12), "template" => "navigation-icon-list", "templateModifiers" => [0 => "social", 1 => ""]]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ContentNavigationWidget/views/footer-social-links/footer-social-links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  70 => 8,  60 => 7,  50 => 1,  49 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    navigation: navigation,
} %}

{% block body %}
    {% include molecule('navigation-item', 'ContentNavigationWidget') with {
        class: 'col col--sm-12 col--md-5 col--lg-3',
        modifiers: ['reset-border-top'],
        data: {
            nodes: data.navigation.nodes,
            template: 'navigation-icon-list',
            templateModifiers: ['social', ''],
        },
    } only %}
{% endblock %}
", "@ContentNavigationWidget/views/footer-social-links/footer-social-links.twig", "/data/src/Pyz/Yves/ContentNavigationWidget/Theme/default/views/footer-social-links/footer-social-links.twig");
    }
}
