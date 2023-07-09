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

/* table-data-columns.twig */
class __TwigTemplate_a318144c26f3156adf0d052f1153bff1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "table-data-columns.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "table-data-columns.twig"));

        // line 1
        echo "data-columns='[
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 2, $this->source); })()), "header", [], "any", false, false, false, 2));
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
        foreach ($context['_seq'] as $context["id"] => $context["value"]) {
            // line 3
            echo "    {
        \"className\": \"column-";
            // line 4
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"
        ";
            // line 5
            if (twig_in_filter($context["id"], twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 5, $this->source); })()), "sortable", [], "any", false, false, false, 5))) {
                echo ", \"orderable\": true";
            }
            // line 6
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "searchableColumns", [], "any", true, true, false, 6)) {
                // line 7
                echo "            ";
                if (twig_in_filter($context["id"], twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 7, $this->source); })()), "searchableColumns", [], "any", false, false, false, 7)))) {
                    echo ", \"searchable\": true";
                } else {
                    echo ", \"searchable\": false";
                }
                // line 8
                echo "        ";
            }
            // line 9
            echo "
    }
    ";
            // line 11
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 11)) {
                echo ",";
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
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "]'
data-column-defs='[{\"targets\": \"_all\", \"orderable\": false }]'
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "table-data-columns.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 12,  91 => 11,  87 => 9,  84 => 8,  77 => 7,  74 => 6,  70 => 5,  66 => 4,  63 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("data-columns='[
{% for id, value in config.header %}
    {
        \"className\": \"column-{{ id }}\"
        {% if id in config.sortable %}, \"orderable\": true{%  endif %}
        {% if config.searchableColumns is defined %}
            {% if id in config.searchableColumns|keys %}, \"searchable\": true{% else %}, \"searchable\": false{% endif %}
        {% endif %}

    }
    {% if not loop.last %},{% endif %}
{% endfor %}]'
data-column-defs='[{\"targets\": \"_all\", \"orderable\": false }]'
", "table-data-columns.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Table/table-data-columns.twig");
    }
}
