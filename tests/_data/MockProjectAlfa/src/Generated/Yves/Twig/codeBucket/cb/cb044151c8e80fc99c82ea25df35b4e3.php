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

/* @ShopUi/resources/form/form.twig */
class __TwigTemplate_44fb03f2c189b9e53028e05d1d5909a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'formatted_integer_widget' => [$this, 'block_formatted_integer_widget'],
            'form_row' => [$this, 'block_form_row'],
            'form_rows' => [$this, 'block_form_rows'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'radio_row' => [$this, 'block_radio_row'],
            'form_label' => [$this, 'block_form_label'],
            'form_errors' => [$this, 'block_form_errors'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/resources/form/form.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/resources/form/form.twig"));

        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@ShopUi/resources/form/form.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 6
        if ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 6, $this->source); })())) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 7
        echo "name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\"";
        // line 8
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 8, $this->source); })())) {
            echo " disabled";
        }
        // line 9
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })())) {
            echo " required";
        }
        // line 10
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 14
        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 14, $this->source); })()), "")) : ("")));
        // line 16
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 16, $this->source); })()), ["class" => twig_trim_filter((("input input--expand" . (( !twig_test_empty(        // line 17
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 17, $this->source); })()))) ? (" input--error") : (" "))) . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 17), "")) : ("")))), "type" => ((        // line 18
array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 18, $this->source); })()), "text")) : ("text")), "placeholder" => ((twig_get_attribute($this->env, $this->source,         // line 19
($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 19), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 19, $this->source); })()))) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 19, $this->source); })())))]);
        // line 22
        echo "<input ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 22, $this->source); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        echo " />";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 25
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 26
        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 26, $this->source); })()), "")) : ("")));
        // line 28
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 28, $this->source); })()), ["class" => twig_trim_filter((("textarea textarea--expand" . (( !twig_test_empty(        // line 29
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 29, $this->source); })()))) ? (" textarea--error") : (" "))) . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 29), "")) : ("")))), "placeholder" => ((twig_get_attribute($this->env, $this->source,         // line 30
($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 30), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 30, $this->source); })()))) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 30, $this->source); })())))]);
        // line 33
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 33, $this->source); })()))) {
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 33, $this->source); })()), "html", null, true);
        }
        echo "</textarea>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 36
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 37
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 37, $this->source); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 37, $this->source); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new RuntimeError('Variable "placeholder_in_choices" does not exist.', 37, $this->source); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 37, $this->source); })())) && ( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", true, true, false, 37) || (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 37, $this->source); })()), "size", [], "any", false, false, false, 37) <= 1)))) {
            // line 38
            $context["required"] = false;
        }
        // line 41
        $context["modifiers"] = ((twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 41, $this->source); })()))) ? ([0 => "full-width"]) : ([0 => "full-width", 1 => "error"]));
        // line 43
        $this->loadTemplate("@ShopUi/resources/form/form.twig", "@ShopUi/resources/form/form.twig", 43, "335920109")->display(twig_to_array(["modifiers" =>         // line 44
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 44, $this->source); })()), "attributes" => ["multiple" =>         // line 46
(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 46, $this->source); })()), "placeholder" =>         // line 47
(isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 47, $this->source); })()), "required" =>         // line 48
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 48, $this->source); })()), "config-width" => "100%"], "embed" => ["attributes" =>         $this->renderBlock("widget_attributes", $context, $blocks), "value" =>         // line 53
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 53, $this->source); })()), "translation_domain" =>         // line 54
(isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 54, $this->source); })()), "preferred_choices" =>         // line 55
(isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new RuntimeError('Variable "preferred_choices" does not exist.', 55, $this->source); })()), "choices" =>         // line 56
(isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 56, $this->source); })()), "separator" =>         // line 57
(isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 57, $this->source); })()), "choice_translation_domain" =>         // line 58
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 58, $this->source); })()), "class" => (((twig_get_attribute($this->env, $this->source,         // line 59
($context["attr"] ?? null), "class", [], "any", true, true, false, 59) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 59)))) ? (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 59)) : (""))]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 108
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 109
        echo "<ul class=\"list ";
        echo ((twig_in_filter("--inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 109)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 109), "")) : ("")))) ? ("list--inline") : ("list--checkbox"));
        echo "\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 111
            echo "            <li class=\"list__item list__item--checkbox\">";
            // line 112
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,             // line 113
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 113)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 113), "")) : (""))]);
            // line 115
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,             // line 116
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 116)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 116), "")) : (""))]);
            // line 118
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "    </ul>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 123
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 124
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 124, $this->source); })()), "checkbox")) : ("checkbox"));
        // line 125
        $context["component"] = ((array_key_exists("component", $context)) ? (_twig_default_filter((isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 125, $this->source); })()), $this->env->getFunction('atom')->getCallable()((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 125, $this->source); })())))) : ($this->env->getFunction('atom')->getCallable()((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 125, $this->source); })()))));
        // line 126
        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 126, $this->source); })()), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 126, $this->source); })())))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 126, $this->source); })())))));
        // line 127
        $context["modifiers"] = ((twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 127, $this->source); })()))) ? ([0 => "expand"]) : ([0 => "expand", 1 => "error"]));
        // line 128
        $context["inputClass"] = ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 128)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 128))) : (""));
        // line 130
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["id" =>         // line 131
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 131, $this->source); })()), "name" =>         // line 132
(isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 132, $this->source); })()), "checked" => ((        // line 133
array_key_exists("checked", $context)) ? (_twig_default_filter((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 133, $this->source); })()), false)) : (false)), "required" => ((        // line 134
array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 134, $this->source); })()), false)) : (false)), "disabled" => ((        // line 135
array_key_exists("disabled", $context)) ? (_twig_default_filter((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 135, $this->source); })()), false)) : (false)), "value" => ((        // line 136
array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 136, $this->source); })()))) : (""))], $context['attributes']);        // line 138
        echo "
    ";
        // line 139
        $this->loadTemplate((isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 139, $this->source); })()), "@ShopUi/resources/form/form.twig", 139)->display(twig_to_array(["modifiers" =>         // line 140
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 140, $this->source); })()), "data" => ["label" =>         // line 142
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 142, $this->source); })()), "inputClass" =>         // line 143
(isset($context["inputClass"]) || array_key_exists("inputClass", $context) ? $context["inputClass"] : (function () { throw new RuntimeError('Variable "inputClass" does not exist.', 143, $this->source); })())], "attributes" =>         // line 145
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 145, $this->source); })())]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 149
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 150
        $context["type"] = "radio";
        // line 151
        echo "    ";
        $this->displayBlock("checkbox_widget", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 154
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "password_widget"));

        // line 155
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 155, $this->source); })()), ["id" => ((        // line 156
array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 156, $this->source); })()), false)) : (false)), "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,         // line 157
($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 157)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 157), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 157, $this->source); })()))) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 157, $this->source); })()))), (isset($context["attr_translation_parameters"]) || array_key_exists("attr_translation_parameters", $context) ? $context["attr_translation_parameters"] : (function () { throw new RuntimeError('Variable "attr_translation_parameters" does not exist.', 157, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 157, $this->source); })())), "name" =>         // line 158
(isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 158, $this->source); })()), "disabled" => ((        // line 159
array_key_exists("disabled", $context)) ? (_twig_default_filter((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 159, $this->source); })()), false)) : (false)), "required" => ((        // line 160
array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 160, $this->source); })()), false)) : (false))]);
        // line 163
        if (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "title", [], "any", true, true, false, 163)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "title", [], "any", false, false, false, 163))) : (""))) {
            // line 164
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 164, $this->source); })()), ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,             // line 165
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 165, $this->source); })()), "title", [], "any", false, false, false, 165), (isset($context["attr_translation_parameters"]) || array_key_exists("attr_translation_parameters", $context) ? $context["attr_translation_parameters"] : (function () { throw new RuntimeError('Variable "attr_translation_parameters" does not exist.', 165, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 165, $this->source); })()))]);
        }
        // line 168
        echo "
    ";
        // line 169
        $context["inputComplexityJsCLass"] = ("js-password-complexity-indicator__" . twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 169, $this->source); })()), "name", [], "any", false, false, false, 169));
        // line 170
        echo "
    ";
        // line 171
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("password-field"), "@ShopUi/resources/form/form.twig", 171)->display(twig_to_array(["data" => ["inputAttributes" =>         // line 173
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 173, $this->source); })()), "inputExtraClasses" => twig_trim_filter(((("input input--expand " . (( !twig_test_empty(        // line 174
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 174, $this->source); })()))) ? (" input--error ") : (""))) . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 174)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 174))) : (""))) . (isset($context["inputComplexityJsCLass"]) || array_key_exists("inputComplexityJsCLass", $context) ? $context["inputComplexityJsCLass"] : (function () { throw new RuntimeError('Variable "inputComplexityJsCLass" does not exist.', 174, $this->source); })())))]]));
        // line 177
        echo "
    ";
        // line 178
        if (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "password_complexity_indicator", [], "any", true, true, false, 178)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "password_complexity_indicator", [], "any", false, false, false, 178))) : (""))) {
            // line 179
            echo "        ";
            $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("password-complexity-indicator"), "@ShopUi/resources/form/form.twig", 179)->display(twig_to_array(["attributes" => ["input-class-name" =>             // line 181
(isset($context["inputComplexityJsCLass"]) || array_key_exists("inputComplexityJsCLass", $context) ? $context["inputComplexityJsCLass"] : (function () { throw new RuntimeError('Variable "inputComplexityJsCLass" does not exist.', 181, $this->source); })())]]));
            // line 184
            echo "    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 187
    public function block_formatted_integer_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formatted_integer_widget"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formatted_integer_widget"));

        // line 188
        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 188, $this->source); })()))) : ("")));
        // line 189
        $context["filteredAttr"] = twig_array_filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 189, $this->source); })()), function ($__value__, $__key__) use ($context, $macros) { $context["value"] = $__value__; $context["key"] = $__key__; return (((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 189, $this->source); })()) != "min") && ((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 189, $this->source); })()) != "max")); });
        // line 191
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 191, $this->source); })()), ["placeholder" => ((twig_get_attribute($this->env, $this->source,         // line 192
($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 192)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 192), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 192, $this->source); })()))) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 192, $this->source); })())))]);
        // line 195
        $context["inputAttributes"] = ["decimal-rounding" => 1];
        // line 199
        if ((($context["grouping_separator_symbol"]) ?? (false))) {
            // line 200
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 200, $this->source); })()), ["grouping-separator" => (isset($context["grouping_separator_symbol"]) || array_key_exists("grouping_separator_symbol", $context) ? $context["grouping_separator_symbol"] : (function () { throw new RuntimeError('Variable "grouping_separator_symbol" does not exist.', 200, $this->source); })())]);
        }
        // line 202
        echo "
    ";
        // line 203
        if ((($context["decimal_separator_symbol"]) ?? (false))) {
            // line 204
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 204, $this->source); })()), ["decimal-separator" => (isset($context["decimal_separator_symbol"]) || array_key_exists("decimal_separator_symbol", $context) ? $context["decimal_separator_symbol"] : (function () { throw new RuntimeError('Variable "decimal_separator_symbol" does not exist.', 204, $this->source); })())]);
        }
        // line 206
        echo "
    ";
        // line 207
        if ((($context["watchExternalChanges"]) ?? (false))) {
            // line 208
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 208, $this->source); })()), ["watch-external-changes" => true]);
        }
        // line 210
        echo "
    ";
        // line 211
        if ((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "min", [], "any", true, true, false, 211) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "min", [], "any", false, false, false, 211)))) ? (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "min", [], "any", false, false, false, 211)) : (false))) {
            // line 212
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 212, $this->source); })()), ["min" => twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 212, $this->source); })()), "min", [], "any", false, false, false, 212)]);
        }
        // line 214
        echo "
    ";
        // line 215
        if ((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "max", [], "any", true, true, false, 215) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "max", [], "any", false, false, false, 215)))) ? (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "max", [], "any", false, false, false, 215)) : (false))) {
            // line 216
            $context["inputAttributes"] = twig_array_merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 216, $this->source); })()), ["max" => twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 216, $this->source); })()), "max", [], "any", false, false, false, 216)]);
        }
        // line 218
        echo "
    ";
        // line 219
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("formatted-number-input"), "@ShopUi/resources/form/form.twig", 219)->display(twig_to_array(["modifiers" => [0 => "expand", 1 => (( !twig_test_empty(        // line 220
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 220, $this->source); })()))) ? ("error") : (""))], "class" => ((        // line 221
array_key_exists("componentClass", $context)) ? (_twig_default_filter((isset($context["componentClass"]) || array_key_exists("componentClass", $context) ? $context["componentClass"] : (function () { throw new RuntimeError('Variable "componentClass" does not exist.', 221, $this->source); })()))) : ("")), "data" => ["inputName" =>         // line 223
(isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 223, $this->source); })()), "inputValue" =>         // line 224
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 224, $this->source); })()), "inputAttributes" =>         // line 225
(isset($context["filteredAttr"]) || array_key_exists("filteredAttr", $context) ? $context["filteredAttr"] : (function () { throw new RuntimeError('Variable "filteredAttr" does not exist.', 225, $this->source); })()), "inputExtraClasses" => ((twig_get_attribute($this->env, $this->source,         // line 226
($context["attr"] ?? null), "class", [], "any", true, true, false, 226)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 226))) : ("")), "hiddenInputExtraClasses" => ((        // line 227
array_key_exists("hiddenInputClass", $context)) ? (_twig_default_filter((isset($context["hiddenInputClass"]) || array_key_exists("hiddenInputClass", $context) ? $context["hiddenInputClass"] : (function () { throw new RuntimeError('Variable "hiddenInputClass" does not exist.', 227, $this->source); })()))) : (""))], "attributes" =>         // line 229
(isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 229, $this->source); })())]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 235
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 236
        $context["rowClass"] = ((twig_get_attribute($this->env, $this->source, ($context["rowAttr"] ?? null), "class", [], "any", true, true, false, 236)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["rowAttr"] ?? null), "class", [], "any", false, false, false, 236), "")) : (""));
        // line 238
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 238, $this->source); })()), "html", null, true);
        echo "\">";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), 'label');
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), 'errors');
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), 'widget');
        // line 242
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 245
    public function block_form_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_rows"));

        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 247
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["child"], "isRendered", [], "any", false, false, false, 247)) {
                // line 248
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row', ["rowAttr" => ((                // line 249
array_key_exists("rowAttr", $context)) ? (_twig_default_filter((isset($context["rowAttr"]) || array_key_exists("rowAttr", $context) ? $context["rowAttr"] : (function () { throw new RuntimeError('Variable "rowAttr" does not exist.', 249, $this->source); })()), [])) : ([]))]);
            }
            // line 252
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 255
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 256
        $context["rowClass"] = ((twig_get_attribute($this->env, $this->source, ($context["rowAttr"] ?? null), "class", [], "any", true, true, false, 256)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["rowAttr"] ?? null), "class", [], "any", false, false, false, 256), "")) : (""));
        // line 258
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 258, $this->source); })()), "html", null, true);
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        $this->displayBlock("checkbox_row", $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 270
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 271
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 271, $this->source); })()) === false)) {
            // line 272
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 272, $this->source); })())) {
                // line 273
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 273, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 273, $this->source); })()), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 273)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 273), "")) : ("")) . " label"))]);
                // line 274
                echo "        ";
            } else {
                // line 275
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 275, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 275, $this->source); })()), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 275)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 275), "")) : ("")) . " label label--title"))]);
            }
            // line 277
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 277, $this->source); })())) {
                // line 278
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 278, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 278)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 278), "")) : ("")) . " label--required"))]);
            }
            // line 280
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 280, $this->source); })()))) {
                // line 281
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 281, $this->source); })()))) {
                    // line 282
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 282, $this->source); })()), ["%name%" =>                     // line 283
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 283, $this->source); })()), "%id%" =>                     // line 284
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 284, $this->source); })())]);
                } else {
                    // line 287
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 287, $this->source); })()));
                }
            }
            // line 290
            echo "<label";
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 290, $this->source); })())) {
                $__internal_compile_0 = $context;
                $__internal_compile_1 = ["attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 290, $this->source); })())];
                if (!twig_test_iterable($__internal_compile_1)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 290, $this->getSourceContext());
                }
                $__internal_compile_1 = twig_to_array($__internal_compile_1);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_0;
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 290, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 290, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 290, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 290, $this->source); })())))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 296
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 297
        echo "    ";
        ob_start();
        // line 298
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 298, $this->source); })())) > 0)) {
            // line 299
            echo "            <ul class=\"list list--bullet list--alert\">
                ";
            // line 300
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 300, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 301
                echo "                    <li class=\"list__item\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 301)), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "            </ul>
        ";
        }
        // line 305
        echo "    ";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 297
        echo twig_spaceless($___internal_parse_2_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 308
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 309
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 309, $this->source); })()) == "single_text")) {
            // line 310
            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 310, $this->source); })()), "")) : ("")));
            // line 311
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 311, $this->source); })()), ["class" => twig_trim_filter((("input input--expand " . (( !twig_test_empty(            // line 312
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 312, $this->source); })()))) ? ("input--error ") : (""))) . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 312)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 312), "")) : ("")))), "type" => "text", "autocomplete" => "off", "placeholder" => ((twig_get_attribute($this->env, $this->source,             // line 315
($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 315)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 315), "yyyy-mm-dd HH:mm")) : ("yyyy-mm-dd HH:mm"))]);
            // line 317
            echo "<input ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 317, $this->source); })())) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 317, $this->source); })()), "html", null, true);
                echo "\" ";
            }
            echo ">";
        } else {
            // line 319
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 320
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "date", [], "any", false, false, false, 320), 'errors');
            // line 321
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), "time", [], "any", false, false, false, 321), 'errors');
            // line 322
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "date", [], "any", false, false, false, 322), 'widget');
            // line 323
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "time", [], "any", false, false, false, 323), 'widget');
            // line 324
            echo "</div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 328
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 329
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 329, $this->source); })()) == "single_text")) {
            // line 330
            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 330, $this->source); })()), "")) : ("")));
            // line 331
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 331, $this->source); })()), ["class" => twig_trim_filter((("input input--expand " . (( !twig_test_empty(            // line 332
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 332, $this->source); })()))) ? ("input--error ") : (""))) . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 332)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 332), "")) : ("")))), "type" => "text", "autocomplete" => "off", "placeholder" => ((twig_get_attribute($this->env, $this->source,             // line 335
($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 335)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 335), "yyyy-mm-dd")) : ("yyyy-mm-dd"))]);
            // line 337
            echo "<input ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 337, $this->source); })())) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 337, $this->source); })()), "html", null, true);
                echo "\" ";
            }
            echo ">";
        } else {
            // line 339
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 340
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 340, $this->source); })()), ["{{ year }}" =>             // line 341
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 341, $this->source); })()), "year", [], "any", false, false, false, 341), 'widget'), "{{ month }}" =>             // line 342
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "month", [], "any", false, false, false, 342), 'widget'), "{{ day }}" =>             // line 343
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "day", [], "any", false, false, false, 343), 'widget')]);
            // line 345
            echo "</div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/resources/form/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  784 => 345,  782 => 343,  781 => 342,  780 => 341,  779 => 340,  775 => 339,  764 => 337,  762 => 335,  761 => 332,  760 => 331,  758 => 330,  756 => 329,  746 => 328,  735 => 324,  733 => 323,  731 => 322,  729 => 321,  727 => 320,  723 => 319,  712 => 317,  710 => 315,  709 => 312,  708 => 311,  706 => 310,  704 => 309,  694 => 308,  684 => 297,  681 => 305,  677 => 303,  668 => 301,  664 => 300,  661 => 299,  658 => 298,  655 => 297,  645 => 296,  620 => 290,  616 => 287,  613 => 284,  612 => 283,  611 => 282,  609 => 281,  607 => 280,  604 => 278,  602 => 277,  598 => 275,  595 => 274,  593 => 273,  591 => 272,  589 => 271,  579 => 270,  569 => 265,  559 => 264,  549 => 261,  547 => 260,  545 => 259,  541 => 258,  539 => 256,  529 => 255,  515 => 252,  512 => 249,  511 => 248,  508 => 247,  504 => 246,  494 => 245,  484 => 242,  482 => 241,  480 => 240,  478 => 239,  474 => 238,  472 => 236,  462 => 235,  452 => 229,  451 => 227,  450 => 226,  449 => 225,  448 => 224,  447 => 223,  446 => 221,  445 => 220,  444 => 219,  441 => 218,  438 => 216,  436 => 215,  433 => 214,  430 => 212,  428 => 211,  425 => 210,  422 => 208,  420 => 207,  417 => 206,  414 => 204,  412 => 203,  409 => 202,  406 => 200,  404 => 199,  402 => 195,  400 => 192,  399 => 191,  397 => 189,  395 => 188,  385 => 187,  374 => 184,  372 => 181,  370 => 179,  368 => 178,  365 => 177,  363 => 174,  362 => 173,  361 => 171,  358 => 170,  356 => 169,  353 => 168,  350 => 165,  349 => 164,  347 => 163,  345 => 160,  344 => 159,  343 => 158,  342 => 157,  341 => 156,  340 => 155,  330 => 154,  319 => 151,  317 => 150,  307 => 149,  297 => 145,  296 => 143,  295 => 142,  294 => 140,  293 => 139,  290 => 138,  289 => 136,  288 => 135,  287 => 134,  286 => 133,  285 => 132,  284 => 131,  283 => 130,  281 => 128,  279 => 127,  277 => 126,  275 => 125,  273 => 124,  263 => 123,  253 => 120,  246 => 118,  244 => 116,  243 => 115,  241 => 113,  240 => 112,  238 => 111,  234 => 110,  227 => 109,  217 => 108,  207 => 59,  206 => 58,  205 => 57,  204 => 56,  203 => 55,  202 => 54,  201 => 53,  200 => 48,  199 => 47,  198 => 46,  197 => 44,  196 => 43,  194 => 41,  191 => 38,  189 => 37,  179 => 36,  163 => 33,  161 => 30,  160 => 29,  159 => 28,  157 => 26,  147 => 25,  129 => 22,  127 => 19,  126 => 18,  125 => 17,  124 => 16,  122 => 14,  112 => 13,  102 => 10,  98 => 9,  94 => 8,  90 => 7,  84 => 6,  74 => 5,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'form_div_layout.html.twig' %}

{# widgets #}

{%- block widget_attributes -%}
    {%- if id %}id=\"{{ id }}\"{% endif -%}
    name=\"{{ full_name }}\"
    {%- if disabled %} disabled{% endif -%}
    {%- if required %} required{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block form_widget_simple -%}
    {%- set label = (label | default('')) | trans -%}

    {%- set attr = attr | merge({
        class: ('input input--expand' ~ (errors is not empty ? ' input--error' : ' ') ~ (attr.class | default(''))) | trim,
        type: type | default('text'),
        placeholder: attr.placeholder | default(label)
    }) -%}

    <input {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} />
{%- endblock -%}

{%- block textarea_widget -%}
    {%- set label = (label | default('')) | trans -%}

    {%- set attr = attr | merge({
        class: ('textarea textarea--expand' ~ (errors is not empty ? ' textarea--error' : ' ') ~ (attr.class | default(''))) | trim,
        placeholder: attr.placeholder | default(label)
    }) -%}

    <textarea {{ block('widget_attributes') }}>{% if value is not empty %}{{ value }}{% endif %}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}

    {%- set modifiers = errors is empty ? ['full-width'] : ['full-width', 'error'] -%}

    {% embed molecule('custom-select') with {
        modifiers: modifiers,
        attributes: {
            multiple: multiple,
            placeholder: placeholder,
            required: required,
            'config-width': '100%'
        },
        embed: {
            attributes: block('widget_attributes'),
            value: value,
            translation_domain: translation_domain,
            preferred_choices: preferred_choices,
            choices: choices,
            separator: separator,
            choice_translation_domain: choice_translation_domain,
            class: attr.class ?? '',
        }
    } only %}
        {% block selectAttributes %}
            {{ parent() }}
            {{ embed.attributes | raw }}
        {% endblock %}

        {% block selectClass %}
            {{ parent() }} {{ embed.class }}
        {% endblock %}

        {% block options %}
            {%- if attributes.placeholder is not none -%}
                <option value=\"\"{% if attributes.required and embed.value is empty %} selected=\"selected\"{% endif %}>
                    {{ attributes.placeholder != '' ? (embed.translation_domain is same as(false) ? attributes.placeholder : attributes.placeholder|trans({}, embed.translation_domain)) }}
                </option>
            {%- endif -%}

            {%- if embed.preferred_choices|length > 0 -%}
                {% set options = embed.preferred_choices %}

                {{- block('renderOptions') -}}

                {%- if attributes.choices|length > 0 and embed.separator is not none -%}
                    <option disabled=\"disabled\">{{ embed.separator }}</option>
                {%- endif -%}
            {%- endif -%}

            {%- set options = embed.choices -%}

            {%- block renderOptions -%}
                {% for group_label, choice in options %}
                    {%- if choice is iterable -%}
                        <optgroup label=\"{{ embed.choice_translation_domain is same as(false) ? group_label : group_label|trans({}, embed.choice_translation_domain) }}\">
                            {% set options = choice %}
                            {{- block('renderOptions') -}}
                        </optgroup>
                    {%- else -%}
                        <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(embed.value) %} selected=\"selected\"{% endif %}>
                            {{ embed.choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, embed.choice_translation_domain) }}
                        </option>
                    {%- endif -%}
                {% endfor %}
            {%- endblock -%}
        {% endblock %}
    {% endembed %}
{%- endblock -%}

{% block choice_widget_expanded -%}
    <ul class=\"list {{ '--inline' in label_attr.class|default('') ? 'list--inline' : 'list--checkbox' }}\" {{ block('widget_container_attributes') }}>
        {% for child in form %}
            <li class=\"list__item list__item--checkbox\">
                {{- form_errors(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            </li>
        {% endfor %}
    </ul>
{%- endblock choice_widget_expanded %}

{%- block checkbox_widget -%}
    {%- set type = type | default('checkbox') -%}
    {%- set component = component | default(atom(type)) -%}
    {%- set label = label | default(name | humanize) | trans -%}
    {%- set modifiers = errors is empty ? ['expand'] : ['expand', 'error'] -%}
    {%- set inputClass = attr.class | default -%}

    {% define attributes = {
        id: id,
        name: full_name,
        checked: checked | default(false),
        required: required | default(false),
        disabled: disabled | default(false),
        value: value | default()
    } %}

    {% include component with {
        modifiers: modifiers,
        data: {
            label: label,
            inputClass: inputClass,
        },
        attributes: attributes
    } only %}
{%- endblock -%}

{%- block radio_widget -%}
    {% set type = 'radio' %}
    {{block('checkbox_widget')}}
{%- endblock -%}

{%- block password_widget -%}
    {%- set attr = attr | merge({
        id: id | default(false),
        placeholder: attr.placeholder | default(label) | trans(attr_translation_parameters, translation_domain),
        name: full_name,
        disabled: disabled | default(false),
        required: required | default(false),
    }) -%}

    {% if attr.title | default %}
        {%- set attr = attr | merge({
            title: attr.title | trans(attr_translation_parameters, translation_domain),
        }) -%}
    {% endif %}

    {% set inputComplexityJsCLass = 'js-password-complexity-indicator__' ~ attr.name %}

    {% include molecule('password-field') with {
        data: {
            inputAttributes: attr,
            inputExtraClasses: ('input input--expand ' ~ (errors is not empty ? ' input--error ') ~ (attr.class | default) ~ inputComplexityJsCLass) | trim,
        },
    } only %}

    {% if attr.password_complexity_indicator | default %}
        {% include molecule('password-complexity-indicator') with {
            attributes: {
                'input-class-name': inputComplexityJsCLass,
            },
        } only %}
    {% endif %}
{%- endblock password_widget -%}

{%- block formatted_integer_widget -%}
    {%- set label = (label | default) | trans -%}
    {%- set filteredAttr = attr | filter((value, key) => key != 'min' and key != 'max') -%}

    {%- set attr = attr | merge({
        placeholder: attr.placeholder | default(label)
    }) -%}

    {%- set inputAttributes = {
        'decimal-rounding': 1,
    } -%}

    {% if grouping_separator_symbol ?? false %}
        {%- set inputAttributes = inputAttributes | merge({'grouping-separator': grouping_separator_symbol}) -%}
    {% endif %}

    {% if decimal_separator_symbol ?? false %}
        {%- set inputAttributes = inputAttributes | merge({'decimal-separator': decimal_separator_symbol}) -%}
    {% endif %}

    {% if watchExternalChanges ?? false %}
        {%- set inputAttributes = inputAttributes | merge({'watch-external-changes': true}) -%}
    {% endif %}

    {% if attr.min ?? false %}
        {%- set inputAttributes = inputAttributes | merge({min: attr.min}) -%}
    {% endif %}

    {% if attr.max ?? false %}
        {%- set inputAttributes = inputAttributes | merge({max: attr.max}) -%}
    {% endif %}

    {% include molecule('formatted-number-input') with {
        modifiers: ['expand', errors is not empty ? 'error'],
        class: componentClass | default,
        data: {
            inputName: full_name,
            inputValue: value,
            inputAttributes: filteredAttr,
            inputExtraClasses: attr.class | default,
            hiddenInputExtraClasses: hiddenInputClass | default,
        },
        attributes: inputAttributes,
    } only %}
{%- endblock formatted_integer_widget -%}

{# rows #}

{%- block form_row -%}
    {%- set rowClass = rowAttr.class | default('') -%}

    <div class=\"{{rowClass}}\">
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock -%}

{%- block form_rows -%}
    {% for child in form %}
        {% if not child.isRendered %}
            {{- form_row(child, {
                rowAttr: rowAttr | default({})
            }) -}}
        {% endif %}
    {% endfor %}
{%- endblock -%}

{%- block checkbox_row -%}
    {%- set rowClass = rowAttr.class | default('') -%}

    <div class=\"{{rowClass}}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock -%}

{%- block radio_row -%}
    {{- block('checkbox_row') -}}
{%- endblock -%}

{# labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id, 'class': (label_attr.class|default('') ~ ' label')|trim}) %}
        {% else %}
            {% set label_attr = label_attr|merge({'for': id, 'class': (label_attr.class|default('') ~ ' label label--title')|trim}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' label--required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock -%}

{# errors #}

{% block form_errors %}
    {% apply spaceless %}
        {% if errors | length > 0 %}
            <ul class=\"list list--bullet list--alert\">
                {% for error in errors %}
                    <li class=\"list__item\">{{ error.message | trans }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endapply %}
{% endblock %}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {%- set label = (label | default('')) | trans -%}
        {%- set attr = attr | merge({
            class: ('input input--expand ' ~ (errors is not empty ? 'input--error ') ~ (attr.class | default(''))) | trim,
            type: 'text',
            autocomplete: 'off',
            placeholder: attr.placeholder | default('yyyy-mm-dd HH:mm'),
        }) -%}
        <input {{ block('widget_attributes') }} {% if value %}value=\"{{ value }}\" {% endif %}>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {%- set label = (label | default('')) | trans -%}
        {%- set attr = attr | merge({
            class: ('input input--expand ' ~ (errors is not empty ? 'input--error ') ~ (attr.class | default(''))) | trim,
            type: 'text',
            autocomplete: 'off',
            placeholder: attr.placeholder | default('yyyy-mm-dd'),
        }) -%}
        <input {{ block('widget_attributes') }} {% if value %}value=\"{{ value }}\" {% endif %}>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}
", "@ShopUi/resources/form/form.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/resources/form/form.twig");
    }
}


/* @ShopUi/resources/form/form.twig */
class __TwigTemplate_44fb03f2c189b9e53028e05d1d5909a5___335920109 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'selectAttributes' => [$this, 'block_selectAttributes'],
            'selectClass' => [$this, 'block_selectClass'],
            'options' => [$this, 'block_options'],
            'renderOptions' => [$this, 'block_renderOptions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 43
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("custom-select"), "@ShopUi/resources/form/form.twig", 43);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/resources/form/form.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/resources/form/form.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_selectAttributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selectAttributes"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selectAttributes"));

        // line 63
        echo "            ";
        $this->displayParentBlock("selectAttributes", $context, $blocks);
        echo "
            ";
        // line 64
        echo twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 64, $this->source); })()), "attributes", [], "any", false, false, false, 64);
        echo "
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 67
    public function block_selectClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selectClass"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selectClass"));

        // line 68
        echo "            ";
        $this->displayParentBlock("selectClass", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 68, $this->source); })()), "class", [], "any", false, false, false, 68), "html", null, true);
        echo "
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 71
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "options"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "options"));

        // line 72
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 72, $this->source); })()), "placeholder", [], "any", false, false, false, 72))) {
            // line 73
            echo "<option value=\"\"";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 73, $this->source); })()), "required", [], "any", false, false, false, 73) && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 73, $this->source); })()), "value", [], "any", false, false, false, 73)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 74
            (((twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 74, $this->source); })()), "placeholder", [], "any", false, false, false, 74) != "")) ? (print (twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 74, $this->source); })()), "translation_domain", [], "any", false, false, false, 74) === false)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 74, $this->source); })()), "placeholder", [], "any", false, false, false, 74)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 74, $this->source); })()), "placeholder", [], "any", false, false, false, 74), [], twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 74, $this->source); })()), "translation_domain", [], "any", false, false, false, 74)))), "html", null, true))) : (print ("")));
            echo "
                </option>";
        }
        // line 78
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 78, $this->source); })()), "preferred_choices", [], "any", false, false, false, 78)) > 0)) {
            // line 79
            $context["options"] = twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 79, $this->source); })()), "preferred_choices", [], "any", false, false, false, 79);
            // line 81
            $this->displayBlock("renderOptions", $context, $blocks);
            // line 83
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 83, $this->source); })()), "choices", [], "any", false, false, false, 83)) > 0) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 83, $this->source); })()), "separator", [], "any", false, false, false, 83)))) {
                // line 84
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 84, $this->source); })()), "separator", [], "any", false, false, false, 84), "html", null, true);
                echo "</option>";
            }
        }
        // line 88
        $context["options"] = twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 88, $this->source); })()), "choices", [], "any", false, false, false, 88);
        // line 90
        $this->displayBlock('renderOptions', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_renderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "renderOptions"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "renderOptions"));

        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 91, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 92
            if (twig_test_iterable($context["choice"])) {
                // line 93
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 93, $this->source); })()), "choice_translation_domain", [], "any", false, false, false, 93) === false)) ? ($context["group_label"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 93, $this->source); })()), "choice_translation_domain", [], "any", false, false, false, 93)))), "html", null, true);
                echo "\">
                            ";
                // line 94
                $context["options"] = $context["choice"];
                // line 95
                $this->displayBlock("renderOptions", $context, $blocks);
                // line 96
                echo "</optgroup>";
            } else {
                // line 98
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 98), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 98)) {
                    $__internal_compile_2 = $context;
                    $__internal_compile_3 = ["attr" => twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 98)];
                    if (!twig_test_iterable($__internal_compile_3)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 98, $this->getSourceContext());
                    }
                    $__internal_compile_3 = twig_to_array($__internal_compile_3);
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $__internal_compile_2;
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 98, $this->source); })()), "value", [], "any", false, false, false, 98))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                            ";
                // line 99
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 99, $this->source); })()), "choice_translation_domain", [], "any", false, false, false, 99) === false)) ? (twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 99)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 99), [], twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 99, $this->source); })()), "choice_translation_domain", [], "any", false, false, false, 99)))), "html", null, true);
                echo "
                        </option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/resources/form/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1370 => 99,  1350 => 98,  1347 => 96,  1345 => 95,  1343 => 94,  1338 => 93,  1336 => 92,  1319 => 91,  1300 => 90,  1298 => 88,  1292 => 84,  1290 => 83,  1288 => 81,  1286 => 79,  1284 => 78,  1279 => 74,  1272 => 73,  1270 => 72,  1260 => 71,  1245 => 68,  1235 => 67,  1223 => 64,  1218 => 63,  1208 => 62,  1186 => 43,  784 => 345,  782 => 343,  781 => 342,  780 => 341,  779 => 340,  775 => 339,  764 => 337,  762 => 335,  761 => 332,  760 => 331,  758 => 330,  756 => 329,  746 => 328,  735 => 324,  733 => 323,  731 => 322,  729 => 321,  727 => 320,  723 => 319,  712 => 317,  710 => 315,  709 => 312,  708 => 311,  706 => 310,  704 => 309,  694 => 308,  684 => 297,  681 => 305,  677 => 303,  668 => 301,  664 => 300,  661 => 299,  658 => 298,  655 => 297,  645 => 296,  620 => 290,  616 => 287,  613 => 284,  612 => 283,  611 => 282,  609 => 281,  607 => 280,  604 => 278,  602 => 277,  598 => 275,  595 => 274,  593 => 273,  591 => 272,  589 => 271,  579 => 270,  569 => 265,  559 => 264,  549 => 261,  547 => 260,  545 => 259,  541 => 258,  539 => 256,  529 => 255,  515 => 252,  512 => 249,  511 => 248,  508 => 247,  504 => 246,  494 => 245,  484 => 242,  482 => 241,  480 => 240,  478 => 239,  474 => 238,  472 => 236,  462 => 235,  452 => 229,  451 => 227,  450 => 226,  449 => 225,  448 => 224,  447 => 223,  446 => 221,  445 => 220,  444 => 219,  441 => 218,  438 => 216,  436 => 215,  433 => 214,  430 => 212,  428 => 211,  425 => 210,  422 => 208,  420 => 207,  417 => 206,  414 => 204,  412 => 203,  409 => 202,  406 => 200,  404 => 199,  402 => 195,  400 => 192,  399 => 191,  397 => 189,  395 => 188,  385 => 187,  374 => 184,  372 => 181,  370 => 179,  368 => 178,  365 => 177,  363 => 174,  362 => 173,  361 => 171,  358 => 170,  356 => 169,  353 => 168,  350 => 165,  349 => 164,  347 => 163,  345 => 160,  344 => 159,  343 => 158,  342 => 157,  341 => 156,  340 => 155,  330 => 154,  319 => 151,  317 => 150,  307 => 149,  297 => 145,  296 => 143,  295 => 142,  294 => 140,  293 => 139,  290 => 138,  289 => 136,  288 => 135,  287 => 134,  286 => 133,  285 => 132,  284 => 131,  283 => 130,  281 => 128,  279 => 127,  277 => 126,  275 => 125,  273 => 124,  263 => 123,  253 => 120,  246 => 118,  244 => 116,  243 => 115,  241 => 113,  240 => 112,  238 => 111,  234 => 110,  227 => 109,  217 => 108,  207 => 59,  206 => 58,  205 => 57,  204 => 56,  203 => 55,  202 => 54,  201 => 53,  200 => 48,  199 => 47,  198 => 46,  197 => 44,  196 => 43,  194 => 41,  191 => 38,  189 => 37,  179 => 36,  163 => 33,  161 => 30,  160 => 29,  159 => 28,  157 => 26,  147 => 25,  129 => 22,  127 => 19,  126 => 18,  125 => 17,  124 => 16,  122 => 14,  112 => 13,  102 => 10,  98 => 9,  94 => 8,  90 => 7,  84 => 6,  74 => 5,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'form_div_layout.html.twig' %}

{# widgets #}

{%- block widget_attributes -%}
    {%- if id %}id=\"{{ id }}\"{% endif -%}
    name=\"{{ full_name }}\"
    {%- if disabled %} disabled{% endif -%}
    {%- if required %} required{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block form_widget_simple -%}
    {%- set label = (label | default('')) | trans -%}

    {%- set attr = attr | merge({
        class: ('input input--expand' ~ (errors is not empty ? ' input--error' : ' ') ~ (attr.class | default(''))) | trim,
        type: type | default('text'),
        placeholder: attr.placeholder | default(label)
    }) -%}

    <input {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} />
{%- endblock -%}

{%- block textarea_widget -%}
    {%- set label = (label | default('')) | trans -%}

    {%- set attr = attr | merge({
        class: ('textarea textarea--expand' ~ (errors is not empty ? ' textarea--error' : ' ') ~ (attr.class | default(''))) | trim,
        placeholder: attr.placeholder | default(label)
    }) -%}

    <textarea {{ block('widget_attributes') }}>{% if value is not empty %}{{ value }}{% endif %}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}

    {%- set modifiers = errors is empty ? ['full-width'] : ['full-width', 'error'] -%}

    {% embed molecule('custom-select') with {
        modifiers: modifiers,
        attributes: {
            multiple: multiple,
            placeholder: placeholder,
            required: required,
            'config-width': '100%'
        },
        embed: {
            attributes: block('widget_attributes'),
            value: value,
            translation_domain: translation_domain,
            preferred_choices: preferred_choices,
            choices: choices,
            separator: separator,
            choice_translation_domain: choice_translation_domain,
            class: attr.class ?? '',
        }
    } only %}
        {% block selectAttributes %}
            {{ parent() }}
            {{ embed.attributes | raw }}
        {% endblock %}

        {% block selectClass %}
            {{ parent() }} {{ embed.class }}
        {% endblock %}

        {% block options %}
            {%- if attributes.placeholder is not none -%}
                <option value=\"\"{% if attributes.required and embed.value is empty %} selected=\"selected\"{% endif %}>
                    {{ attributes.placeholder != '' ? (embed.translation_domain is same as(false) ? attributes.placeholder : attributes.placeholder|trans({}, embed.translation_domain)) }}
                </option>
            {%- endif -%}

            {%- if embed.preferred_choices|length > 0 -%}
                {% set options = embed.preferred_choices %}

                {{- block('renderOptions') -}}

                {%- if attributes.choices|length > 0 and embed.separator is not none -%}
                    <option disabled=\"disabled\">{{ embed.separator }}</option>
                {%- endif -%}
            {%- endif -%}

            {%- set options = embed.choices -%}

            {%- block renderOptions -%}
                {% for group_label, choice in options %}
                    {%- if choice is iterable -%}
                        <optgroup label=\"{{ embed.choice_translation_domain is same as(false) ? group_label : group_label|trans({}, embed.choice_translation_domain) }}\">
                            {% set options = choice %}
                            {{- block('renderOptions') -}}
                        </optgroup>
                    {%- else -%}
                        <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(embed.value) %} selected=\"selected\"{% endif %}>
                            {{ embed.choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, embed.choice_translation_domain) }}
                        </option>
                    {%- endif -%}
                {% endfor %}
            {%- endblock -%}
        {% endblock %}
    {% endembed %}
{%- endblock -%}

{% block choice_widget_expanded -%}
    <ul class=\"list {{ '--inline' in label_attr.class|default('') ? 'list--inline' : 'list--checkbox' }}\" {{ block('widget_container_attributes') }}>
        {% for child in form %}
            <li class=\"list__item list__item--checkbox\">
                {{- form_errors(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            </li>
        {% endfor %}
    </ul>
{%- endblock choice_widget_expanded %}

{%- block checkbox_widget -%}
    {%- set type = type | default('checkbox') -%}
    {%- set component = component | default(atom(type)) -%}
    {%- set label = label | default(name | humanize) | trans -%}
    {%- set modifiers = errors is empty ? ['expand'] : ['expand', 'error'] -%}
    {%- set inputClass = attr.class | default -%}

    {% define attributes = {
        id: id,
        name: full_name,
        checked: checked | default(false),
        required: required | default(false),
        disabled: disabled | default(false),
        value: value | default()
    } %}

    {% include component with {
        modifiers: modifiers,
        data: {
            label: label,
            inputClass: inputClass,
        },
        attributes: attributes
    } only %}
{%- endblock -%}

{%- block radio_widget -%}
    {% set type = 'radio' %}
    {{block('checkbox_widget')}}
{%- endblock -%}

{%- block password_widget -%}
    {%- set attr = attr | merge({
        id: id | default(false),
        placeholder: attr.placeholder | default(label) | trans(attr_translation_parameters, translation_domain),
        name: full_name,
        disabled: disabled | default(false),
        required: required | default(false),
    }) -%}

    {% if attr.title | default %}
        {%- set attr = attr | merge({
            title: attr.title | trans(attr_translation_parameters, translation_domain),
        }) -%}
    {% endif %}

    {% set inputComplexityJsCLass = 'js-password-complexity-indicator__' ~ attr.name %}

    {% include molecule('password-field') with {
        data: {
            inputAttributes: attr,
            inputExtraClasses: ('input input--expand ' ~ (errors is not empty ? ' input--error ') ~ (attr.class | default) ~ inputComplexityJsCLass) | trim,
        },
    } only %}

    {% if attr.password_complexity_indicator | default %}
        {% include molecule('password-complexity-indicator') with {
            attributes: {
                'input-class-name': inputComplexityJsCLass,
            },
        } only %}
    {% endif %}
{%- endblock password_widget -%}

{%- block formatted_integer_widget -%}
    {%- set label = (label | default) | trans -%}
    {%- set filteredAttr = attr | filter((value, key) => key != 'min' and key != 'max') -%}

    {%- set attr = attr | merge({
        placeholder: attr.placeholder | default(label)
    }) -%}

    {%- set inputAttributes = {
        'decimal-rounding': 1,
    } -%}

    {% if grouping_separator_symbol ?? false %}
        {%- set inputAttributes = inputAttributes | merge({'grouping-separator': grouping_separator_symbol}) -%}
    {% endif %}

    {% if decimal_separator_symbol ?? false %}
        {%- set inputAttributes = inputAttributes | merge({'decimal-separator': decimal_separator_symbol}) -%}
    {% endif %}

    {% if watchExternalChanges ?? false %}
        {%- set inputAttributes = inputAttributes | merge({'watch-external-changes': true}) -%}
    {% endif %}

    {% if attr.min ?? false %}
        {%- set inputAttributes = inputAttributes | merge({min: attr.min}) -%}
    {% endif %}

    {% if attr.max ?? false %}
        {%- set inputAttributes = inputAttributes | merge({max: attr.max}) -%}
    {% endif %}

    {% include molecule('formatted-number-input') with {
        modifiers: ['expand', errors is not empty ? 'error'],
        class: componentClass | default,
        data: {
            inputName: full_name,
            inputValue: value,
            inputAttributes: filteredAttr,
            inputExtraClasses: attr.class | default,
            hiddenInputExtraClasses: hiddenInputClass | default,
        },
        attributes: inputAttributes,
    } only %}
{%- endblock formatted_integer_widget -%}

{# rows #}

{%- block form_row -%}
    {%- set rowClass = rowAttr.class | default('') -%}

    <div class=\"{{rowClass}}\">
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock -%}

{%- block form_rows -%}
    {% for child in form %}
        {% if not child.isRendered %}
            {{- form_row(child, {
                rowAttr: rowAttr | default({})
            }) -}}
        {% endif %}
    {% endfor %}
{%- endblock -%}

{%- block checkbox_row -%}
    {%- set rowClass = rowAttr.class | default('') -%}

    <div class=\"{{rowClass}}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock -%}

{%- block radio_row -%}
    {{- block('checkbox_row') -}}
{%- endblock -%}

{# labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id, 'class': (label_attr.class|default('') ~ ' label')|trim}) %}
        {% else %}
            {% set label_attr = label_attr|merge({'for': id, 'class': (label_attr.class|default('') ~ ' label label--title')|trim}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' label--required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock -%}

{# errors #}

{% block form_errors %}
    {% apply spaceless %}
        {% if errors | length > 0 %}
            <ul class=\"list list--bullet list--alert\">
                {% for error in errors %}
                    <li class=\"list__item\">{{ error.message | trans }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endapply %}
{% endblock %}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {%- set label = (label | default('')) | trans -%}
        {%- set attr = attr | merge({
            class: ('input input--expand ' ~ (errors is not empty ? 'input--error ') ~ (attr.class | default(''))) | trim,
            type: 'text',
            autocomplete: 'off',
            placeholder: attr.placeholder | default('yyyy-mm-dd HH:mm'),
        }) -%}
        <input {{ block('widget_attributes') }} {% if value %}value=\"{{ value }}\" {% endif %}>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {%- set label = (label | default('')) | trans -%}
        {%- set attr = attr | merge({
            class: ('input input--expand ' ~ (errors is not empty ? 'input--error ') ~ (attr.class | default(''))) | trim,
            type: 'text',
            autocomplete: 'off',
            placeholder: attr.placeholder | default('yyyy-mm-dd'),
        }) -%}
        <input {{ block('widget_attributes') }} {% if value %}value=\"{{ value }}\" {% endif %}>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}
", "@ShopUi/resources/form/form.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/resources/form/form.twig");
    }
}
