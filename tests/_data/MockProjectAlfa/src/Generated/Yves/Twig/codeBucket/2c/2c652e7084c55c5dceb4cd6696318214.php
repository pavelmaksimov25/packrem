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

/* @NewsletterWidget/views/subscription-form/subscription-form.twig */
class __TwigTemplate_ae5f00861c9fd84c81bd2600ec281dd6 extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@NewsletterWidget/views/subscription-form/subscription-form.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@NewsletterWidget/views/subscription-form/subscription-form.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@NewsletterWidget/views/subscription-form/subscription-form.twig"));

        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["form" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 4, $this->source); })()), "newsletterSubscriptionForm", [], "any", false, false, false, 4), "events" => ["success" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 6, $this->source); })()), "success", [], "any", false, false, false, 6), "error" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 7, $this->source); })()), "error", [], "any", false, false, false, 7)]], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    ";
        // line 13
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("subscription", "NewsletterWidget"), "@NewsletterWidget/views/subscription-form/subscription-form.twig", 13)->display(twig_to_array(["data" => ["form" => twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "form", [], "any", false, false, false, 15), "events" => ["success" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "events", [], "any", false, false, false, 17), "success", [], "any", false, false, false, 17), "error" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "events", [], "any", false, false, false, 18), "error", [], "any", false, false, false, 18)]]]));
        // line 22
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@NewsletterWidget/views/subscription-form/subscription-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  78 => 18,  77 => 17,  76 => 15,  75 => 13,  72 => 12,  62 => 11,  52 => 1,  51 => 7,  50 => 6,  49 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    form: _view.newsletterSubscriptionForm,
    events: {
        success: _view.success,
        error: _view.error
    }
} %}

{% block body %}

    {% include molecule('subscription', 'NewsletterWidget') with {
        data: {
            form: data.form,
            events: {
                success: data.events.success,
                error: data.events.error
            }
        }
    } only %}

{% endblock %}
", "@NewsletterWidget/views/subscription-form/subscription-form.twig", "/data/src/Pyz/Yves/NewsletterWidget/Theme/default/views/subscription-form/subscription-form.twig");
    }
}
