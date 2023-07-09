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

/* imagetype.twig */
class __TwigTemplate_68beaccd77c8f80568e560282a9115a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'image_widget' => [$this, 'block_image_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "imagetype.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "imagetype.twig"));

        // line 1
        $this->displayBlock('image_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_widget"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_widget"));

        // line 2
        echo "    ";
        $context["css"] = "spryker-form-image";
        // line 3
        echo "    ";
        $context["image_width"] = "";
        // line 4
        echo "    ";
        $context["image_height"] = "";
        // line 5
        echo "    ";
        $context["image_title"] = "";
        // line 6
        echo "    ";
        $context["image_url"] = "";
        // line 7
        echo "
    ";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 8), "image_width", [], "any", true, true, false, 8) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "vars", [], "any", false, false, false, 8), "image_width", [], "any", false, false, false, 8))) {
            // line 9
            echo "        ";
            $context["image_width"] = (("width=\"" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "image_width", [], "any", false, false, false, 9)) . "\"");
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 12), "image_height", [], "any", true, true, false, 12) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "image_height", [], "any", false, false, false, 12))) {
            // line 13
            echo "        ";
            $context["image_height"] = (("height=\"" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "image_height", [], "any", false, false, false, 13)) . "\"");
            // line 14
            echo "    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 16), "image_title", [], "any", true, true, false, 16) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "image_title", [], "any", false, false, false, 16))) {
            // line 17
            echo "        ";
            $context["image_title"] = (((("title=\"" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "image_title", [], "any", false, false, false, 17)) . "\" alt=\"") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "image_title", [], "any", false, false, false, 17)) . "\"");
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 20), "image_url", [], "any", true, true, false, 20) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "image_url", [], "any", false, false, false, 20))) {
            // line 21
            echo "        ";
            $context["image_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "image_url", [], "any", false, false, false, 21);
            // line 22
            echo "    ";
        }
        // line 23
        echo "
    ";
        // line 24
        $context["form_group_errors_css"] = "";
        // line 25
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 25), "attr", [], "any", false, true, false, 25), "class", [], "any", true, true, false, 25)) {
            // line 26
            echo "        ";
            $context["css"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "vars", [], "any", false, false, false, 26), "attr", [], "any", false, false, false, 26), "class", [], "any", false, false, false, 26) . " ") . (isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 26, $this->source); })()));
            // line 27
            echo "    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29))) {
            // line 30
            echo "        ";
            $context["form_group_errors_css"] = "has-error";
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    ";
        // line 33
        $context["value"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33);
        // line 34
        echo "    ";
        if (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 34, $this->source); })()))) {
            // line 35
            echo "        ";
            $context["value"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "vars", [], "any", false, false, false, 35), "value", [], "any", false, false, false, 35));
            // line 36
            echo "    ";
        }
        // line 37
        echo "
    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'label');
        echo "
    ";
        // line 39
        if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 39, $this->source); })()) != "")) {
            // line 40
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["image_url"]) || array_key_exists("image_url", $context) ? $context["image_url"] : (function () { throw new RuntimeError('Variable "image_url" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "\">
            <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\" ";
            echo (isset($context["image_width"]) || array_key_exists("image_width", $context) ? $context["image_width"] : (function () { throw new RuntimeError('Variable "image_width" does not exist.', 41, $this->source); })());
            echo " ";
            echo (isset($context["image_height"]) || array_key_exists("image_height", $context) ? $context["image_height"] : (function () { throw new RuntimeError('Variable "image_height" does not exist.', 41, $this->source); })());
            echo " class=\"";
            echo (isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 41, $this->source); })());
            echo "\" ";
            echo (isset($context["image_title"]) || array_key_exists("image_title", $context) ? $context["image_title"] : (function () { throw new RuntimeError('Variable "image_title" does not exist.', 41, $this->source); })());
            echo " />
        </a>
    ";
        } else {
            // line 44
            echo "        <i class=\"fa fa-file-image-o\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No preview available!"), "html", null, true);
            echo "
    ";
        }
        // line 46
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'errors');
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "imagetype.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 46,  189 => 44,  175 => 41,  170 => 40,  168 => 39,  164 => 38,  161 => 37,  158 => 36,  155 => 35,  152 => 34,  150 => 33,  147 => 32,  144 => 31,  141 => 30,  139 => 29,  136 => 28,  133 => 27,  130 => 26,  127 => 25,  125 => 24,  122 => 23,  119 => 22,  116 => 21,  114 => 20,  111 => 19,  108 => 18,  105 => 17,  103 => 16,  100 => 15,  97 => 14,  94 => 13,  92 => 12,  89 => 11,  86 => 10,  83 => 9,  81 => 8,  78 => 7,  75 => 6,  72 => 5,  69 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block image_widget %}
    {% set css = 'spryker-form-image' %}
    {% set image_width = '' %}
    {% set image_height = '' %}
    {% set image_title = '' %}
    {% set image_url = '' %}

    {% if form.vars.image_width is defined and form.vars.image_width %}
        {% set image_width = 'width=\"' ~ form.vars.image_width ~ '\"' %}
    {% endif %}

    {% if form.vars.image_height is defined and form.vars.image_height %}
        {% set image_height = 'height=\"' ~ form.vars.image_height  ~ '\"' %}
    {% endif %}

    {% if form.vars.image_title is defined and form.vars.image_title %}
        {% set image_title = 'title=\"' ~ form.vars.image_title  ~ '\" alt=\"' ~ form.vars.image_title  ~ '\"' %}
    {% endif %}

    {% if form.vars.image_url is defined and form.vars.image_url %}
        {% set image_url = form.vars.image_url %}
    {% endif %}

    {% set form_group_errors_css = '' %}
    {% if form.vars.attr.class is defined %}
        {% set css = form.vars.attr.class ~ ' ' ~ css %}
    {% endif %}

    {% if form.vars.errors|length %}
        {% set form_group_errors_css = 'has-error' %}
    {% endif %}

    {% set value = form.vars.value %}
    {% if value is iterable %}
        {% set value = form.vars.value|first %}
    {% endif %}

    {{ form_label(form) }}
    {% if value != \"\" %}
        <a href=\"{{ image_url }}\">
            <img src=\"{{ value }}\" {{ image_width|raw }} {{ image_height|raw }} class=\"{{ css|raw }}\" {{ image_title|raw }} />
        </a>
    {% else %}
        <i class=\"fa fa-file-image-o\"></i> {{ 'No preview available!' | trans }}
    {% endif %}
    {{ form_errors(form) }}

{% endblock image_widget %}
", "imagetype.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Form/Type/imagetype.twig");
    }
}
