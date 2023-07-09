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

/* @Gui/Partials/backward-compatible-breadcrumb.twig */
class __TwigTemplate_86753ceebf5fe87738765aff18e6fb62 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gui/Partials/backward-compatible-breadcrumb.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gui/Partials/backward-compatible-breadcrumb.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            echo "    <div class=\"page-breadcrumbs\">
        <ol class=\"breadcrumb\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 4, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumbItem"]) {
                // line 5
                echo "                <li>
                    ";
                // line 6
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["breadcrumbItem"], "uri", [], "any", false, false, false, 6))) {
                    // line 7
                    echo "                        <a class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 7)) ? ("disabled") : (""));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumbItem"], "uri", [], "any", false, false, false, 7), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["breadcrumbItem"], "title", [], "any", false, false, false, 7)), "html", null, true);
                    echo "\">
                            ";
                    // line 8
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["breadcrumbItem"], "label", [], "any", false, false, false, 8)), "html", null, true);
                    echo "
                        </a>
                    ";
                } else {
                    // line 11
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["breadcrumbItem"], "label", [], "any", false, false, false, 11)), "html", null, true);
                    echo "
                    ";
                }
                // line 13
                echo "                </li>
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumbItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </ol>
    </div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Gui/Partials/backward-compatible-breadcrumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 15,  92 => 13,  86 => 11,  80 => 8,  71 => 7,  69 => 6,  66 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if breadcrumbs|length > 0 %}
    <div class=\"page-breadcrumbs\">
        <ol class=\"breadcrumb\">
            {% for breadcrumbItem in breadcrumbs %}
                <li>
                    {% if breadcrumbItem.uri is not empty %}
                        <a class=\"{{ loop.last ? 'disabled' }}\" href=\"{{ breadcrumbItem.uri }}\" title=\"{{ breadcrumbItem.title | trans }}\">
                            {{ breadcrumbItem.label | trans }}
                        </a>
                    {% else %}
                        {{ breadcrumbItem.label | trans }}
                    {% endif %}
                </li>
            {% endfor %}
        </ol>
    </div>
{% endif %}
", "@Gui/Partials/backward-compatible-breadcrumb.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Partials/backward-compatible-breadcrumb.twig");
    }
}
