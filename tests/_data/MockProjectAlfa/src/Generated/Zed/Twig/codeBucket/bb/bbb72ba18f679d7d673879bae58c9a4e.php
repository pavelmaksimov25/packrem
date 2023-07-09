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

/* @Gui/Partials/widget.twig */
class __TwigTemplate_306909d445b02318d30a75db2aa92aa2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'widget_title' => [$this, 'block_widget_title'],
            'widget_header_content' => [$this, 'block_widget_header_content'],
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gui/Partials/widget.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gui/Partials/widget.twig"));

        // line 1
        echo "<div class=\"row ";
        echo twig_escape_filter($this->env, ((array_key_exists("row_class", $context)) ? (_twig_default_filter((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 1, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\"";
        if ((array_key_exists("row_id", $context) &&  !twig_test_empty((isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 1, $this->source); })())))) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 1, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo ">
    <div class=\"col-lg-12\">
        <div class=\"ibox float-e-margins\">
            <div class=\"ibox-title\">
                ";
        // line 5
        $this->displayBlock('widget_title', $context, $blocks);
        // line 8
        echo "                <div class=\"pull-right\">
                    ";
        // line 9
        $this->displayBlock('widget_header_content', $context, $blocks);
        // line 10
        echo "                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"ibox-content\">

                ";
        // line 15
        $this->displayBlock('widget_content', $context, $blocks);
        // line 16
        echo "
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_widget_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_title"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_title"));

        // line 6
        echo "<h5>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("widget_title", $context)) ? (_twig_default_filter((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 6, $this->source); })()), "")) : (""))), "html", null, true);
        echo "</h5>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_widget_header_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_header_content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_header_content"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_content"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Gui/Partials/widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 15,  113 => 9,  101 => 6,  91 => 5,  76 => 16,  74 => 15,  67 => 10,  65 => 9,  62 => 8,  60 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row {{ row_class | default('') }}\"{% if row_id is defined and row_id is not empty %} id=\"{{ row_id }}\"{% endif %}>
    <div class=\"col-lg-12\">
        <div class=\"ibox float-e-margins\">
            <div class=\"ibox-title\">
                {% block widget_title -%}
                    <h5>{{ widget_title | default('') | trans }}</h5>
                {%- endblock %}
                <div class=\"pull-right\">
                    {% block widget_header_content -%}{%- endblock %}
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"ibox-content\">

                {% block widget_content -%}{%- endblock %}

            </div>
        </div>
    </div>
</div>
", "@Gui/Partials/widget.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Partials/widget.twig");
    }
}
