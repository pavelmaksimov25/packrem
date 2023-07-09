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

/* formattednumbertype.twig */
class __TwigTemplate_7b6a34ddbd1253a0bd4f5454de15a0ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'formatted_number_widget' => [$this, 'block_formatted_number_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formattednumbertype.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formattednumbertype.twig"));

        // line 1
        $this->displayBlock('formatted_number_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_formatted_number_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formatted_number_widget"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formatted_number_widget"));

        // line 2
        $context["targetClassName"] = ((("js-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })())) . "-") . twig_random($this->env));
        // line 3
        $context["cssClasses"] = " js-formatted-number-input form-control formatted-number-input";
        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 4, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 4))) : ("")) . (isset($context["cssClasses"]) || array_key_exists("cssClasses", $context) ? $context["cssClasses"] : (function () { throw new RuntimeError('Variable "cssClasses" does not exist.', 4, $this->source); })())))]);
        // line 6
        echo "<input
        id=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\"";
        // line 8
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 8, $this->source); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 9
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })())) {
            echo " required=\"required\"";
        }
        // line 10
        $this->displayBlock("attributes", $context, $blocks);
        echo "
        data-target=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["targetClassName"]) || array_key_exists("targetClassName", $context) ? $context["targetClassName"] : (function () { throw new RuntimeError('Variable "targetClassName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\"
        data-group-separator=\"";
        // line 12
        echo twig_escape_filter($this->env, ((array_key_exists("grouping_separator_symbol", $context)) ? (_twig_default_filter((isset($context["grouping_separator_symbol"]) || array_key_exists("grouping_separator_symbol", $context) ? $context["grouping_separator_symbol"] : (function () { throw new RuntimeError('Variable "grouping_separator_symbol" does not exist.', 12, $this->source); })()))) : ("")), "html", null, true);
        echo "\"
        data-decimal-separator=\"";
        // line 13
        echo twig_escape_filter($this->env, ((array_key_exists("decimal_separator_symbol", $context)) ? (_twig_default_filter((isset($context["decimal_separator_symbol"]) || array_key_exists("decimal_separator_symbol", $context) ? $context["decimal_separator_symbol"] : (function () { throw new RuntimeError('Variable "decimal_separator_symbol" does not exist.', 13, $this->source); })()), ".")) : (".")), "html", null, true);
        echo "\"
        data-decimal-rounding=\"3\">

    <input
        type=\"hidden\"
        class=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["targetClassName"]) || array_key_exists("targetClassName", $context) ? $context["targetClassName"] : (function () { throw new RuntimeError('Variable "targetClassName" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\"
        value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\"
        name=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "formattednumbertype.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 20,  107 => 19,  103 => 18,  95 => 13,  91 => 12,  87 => 11,  83 => 10,  79 => 9,  75 => 8,  72 => 7,  69 => 6,  67 => 4,  65 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block formatted_number_widget %}
    {%- set targetClassName = 'js-' ~ id ~ '-' ~ random() -%}
    {%- set cssClasses = ' js-formatted-number-input form-control formatted-number-input' -%}
    {%- set attr = attr | merge({class: (attr.class | default ~ cssClasses) | trim}) -%}

    <input
        id=\"{{ id }}\"
        {%- if disabled %} disabled=\"disabled\"{% endif -%}
        {%- if required %} required=\"required\"{% endif -%}
        {{ block('attributes') }}
        data-target=\"{{ targetClassName }}\"
        data-group-separator=\"{{ grouping_separator_symbol | default }}\"
        data-decimal-separator=\"{{ decimal_separator_symbol | default('.') }}\"
        data-decimal-rounding=\"3\">

    <input
        type=\"hidden\"
        class=\"{{ targetClassName }}\"
        value=\"{{ value }}\"
        name=\"{{ full_name }}\">
{% endblock %}
", "formattednumbertype.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Form/Type/formattednumbertype.twig");
    }
}
