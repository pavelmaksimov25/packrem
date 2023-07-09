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

/* formattedmoneytype.twig */
class __TwigTemplate_2d8d0886a95af2e1e4078e6f8aaf7510 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'formatted_money_widget' => [$this, 'block_formatted_money_widget'],
            'formatted_money_inner' => [$this, 'block_formatted_money_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formattedmoneytype.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formattedmoneytype.twig"));

        // line 1
        $this->displayBlock('formatted_money_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_formatted_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formatted_money_widget"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formatted_money_widget"));

        // line 2
        echo "    ";
        $context["prepend"] =  !(is_string($__internal_compile_0 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 2, $this->source); })())) && is_string($__internal_compile_1 = "{{") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)));
        // line 3
        echo "    ";
        $context["append"] =  !(is_string($__internal_compile_2 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 3, $this->source); })())) && is_string($__internal_compile_3 = "}}") && ('' === $__internal_compile_3 || $__internal_compile_3 === substr($__internal_compile_2, -strlen($__internal_compile_3))));
        // line 4
        echo "    ";
        if (((isset($context["display_currency"]) || array_key_exists("display_currency", $context) ? $context["display_currency"] : (function () { throw new RuntimeError('Variable "display_currency" does not exist.', 4, $this->source); })()) && ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 4, $this->source); })()) || (isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new RuntimeError('Variable "append" does not exist.', 4, $this->source); })())))) {
            // line 5
            echo "        <div class=\"input-group\">
            ";
            // line 6
            if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 6, $this->source); })())) {
                // line 7
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 7, $this->source); })()));
                echo "</span>
            ";
            }
            // line 9
            echo "
            ";
            // line 10
            $this->displayBlock('formatted_money_inner', $context, $blocks);
            // line 32
            echo "
            ";
            // line 33
            if ((isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new RuntimeError('Variable "append" does not exist.', 33, $this->source); })())) {
                // line 34
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 34, $this->source); })()));
                echo "</span>
            ";
            }
            // line 36
            echo "        </div>
    ";
        } else {
            // line 38
            $this->displayBlock("formatted_money_inner", $context, $blocks);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_formatted_money_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formatted_money_inner"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formatted_money_inner"));

        // line 11
        $context["targetClassName"] = ((("js-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 11, $this->source); })())) . "-") . twig_random($this->env));
        // line 12
        $context["cssClasses"] = " js-formatted-money-input form-control formatted-money-input";
        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 13, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 13))) : ("")) . (isset($context["cssClasses"]) || array_key_exists("cssClasses", $context) ? $context["cssClasses"] : (function () { throw new RuntimeError('Variable "cssClasses" does not exist.', 13, $this->source); })())))]);
        // line 15
        echo "<input
                    id=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\"";
        // line 17
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 17, $this->source); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 18
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 18, $this->source); })())) {
            echo " required=\"required\"";
        }
        // line 19
        $this->displayBlock("attributes", $context, $blocks);
        echo "
                    data-target=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["targetClassName"]) || array_key_exists("targetClassName", $context) ? $context["targetClassName"] : (function () { throw new RuntimeError('Variable "targetClassName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\"
                    data-group-separator=\"";
        // line 21
        echo twig_escape_filter($this->env, ((array_key_exists("grouping_separator_symbol", $context)) ? (_twig_default_filter((isset($context["grouping_separator_symbol"]) || array_key_exists("grouping_separator_symbol", $context) ? $context["grouping_separator_symbol"] : (function () { throw new RuntimeError('Variable "grouping_separator_symbol" does not exist.', 21, $this->source); })()))) : ("")), "html", null, true);
        echo "\"
                    data-decimal-separator=\"";
        // line 22
        echo twig_escape_filter($this->env, ((array_key_exists("decimal_separator_symbol", $context)) ? (_twig_default_filter((isset($context["decimal_separator_symbol"]) || array_key_exists("decimal_separator_symbol", $context) ? $context["decimal_separator_symbol"] : (function () { throw new RuntimeError('Variable "decimal_separator_symbol" does not exist.', 22, $this->source); })()), ".")) : (".")), "html", null, true);
        echo "\"
                    data-decimal-rounding=\"2\"
                    data-decimal-filling>

                <input
                    type=\"hidden\"
                    class=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["targetClassName"]) || array_key_exists("targetClassName", $context) ? $context["targetClassName"] : (function () { throw new RuntimeError('Variable "targetClassName" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\"
                    value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\"
                    name=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\">
            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "formattedmoneytype.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 30,  170 => 29,  166 => 28,  157 => 22,  153 => 21,  149 => 20,  145 => 19,  141 => 18,  137 => 17,  134 => 16,  131 => 15,  129 => 13,  127 => 12,  125 => 11,  115 => 10,  104 => 38,  100 => 36,  94 => 34,  92 => 33,  89 => 32,  87 => 10,  84 => 9,  78 => 7,  76 => 6,  73 => 5,  70 => 4,  67 => 3,  64 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block formatted_money_widget %}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if display_currency and (prepend or append) %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern | form_encode_currency }}</span>
            {% endif %}

            {% block formatted_money_inner %}
                {%- set targetClassName = 'js-' ~ id ~ '-' ~ random() -%}
                {%- set cssClasses = ' js-formatted-money-input form-control formatted-money-input' -%}
                {%- set attr = attr | merge({class: (attr.class | default ~ cssClasses) | trim}) -%}

                <input
                    id=\"{{ id }}\"
                    {%- if disabled %} disabled=\"disabled\"{% endif -%}
                    {%- if required %} required=\"required\"{% endif -%}
                    {{ block('attributes') }}
                    data-target=\"{{ targetClassName }}\"
                    data-group-separator=\"{{ grouping_separator_symbol | default }}\"
                    data-decimal-separator=\"{{ decimal_separator_symbol | default('.') }}\"
                    data-decimal-rounding=\"2\"
                    data-decimal-filling>

                <input
                    type=\"hidden\"
                    class=\"{{ targetClassName }}\"
                    value=\"{{ value }}\"
                    name=\"{{ full_name }}\">
            {% endblock %}

            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern | form_encode_currency }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('formatted_money_inner') -}}
    {% endif %}
{% endblock %}
", "formattedmoneytype.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Form/Type/formattedmoneytype.twig");
    }
}
