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

/* @Config/Collector/spryker_config_profiler.html.twig */
class __TwigTemplate_d9a70dad54f9a7c008730db5518371bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Config/Collector/spryker_config_profiler.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Config/Collector/spryker_config_profiler.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Config/Collector/spryker_config_profiler.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <i class=\"fa fa-cog fa-lg\" aria-hidden=\"true\"></i>
        <span class=\"sf-toolbar-value\">";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "configs", [], "any", false, false, false, 6)), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo "    ";
        ob_start();
        // line 9
        echo "        ";
        ob_start();
        // line 10
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Spryker Config</b>
                <span class=\"sf-toolbar-status\">";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 12, $this->source); })()), "configs", [], "any", false, false, false, 12)), "html", null, true);
        echo "</span>
            </div>
        ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo twig_spaceless($___internal_parse_0_);
        // line 15
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@Config/Collector/spryker_config_profiler.html.twig", 16)->display(twig_array_merge($context, ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 16, $this->source); })())]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 20
        echo "    <span class=\"label\">
    <span class=\"icon\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\"><path d=\"M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z\"/></svg>
    </span>
    <strong>Spryker Config</strong>
    <span class=\"count\">
        <span>";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 26, $this->source); })()), "configs", [], "any", false, false, false, 26)), "html", null, true);
        echo "</span>
    </span>
</span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 31
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 32
        echo "
    <style>
        table tbody ul li, table tbody ul ul li {
            padding: 0;
            margin: 0;
        }
        table tbody ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        table tbody ul ul {
            list-style: none;
            margin: 0 0 0 15px;
        }
    </style>

    ";
        // line 62
        echo "
    <h2>Spryker Configuration Metrics</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 66
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "configs", [], "any", false, false, false, 66)), "html", null, true);
        echo "</span>
            <span class=\"label\">Used keys</span>
        </div>
        <div class=\"metric\">
            ";
        // line 70
        $context["totalCount"] = 0;
        // line 71
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 71, $this->source); })()), "configs", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["configKey"] => $context["configData"]) {
            // line 72
            echo "                ";
            $context["totalCount"] = ((isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 72, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["configData"], "count", [], "any", false, false, false, 72));
            // line 73
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['configKey'], $context['configData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            <span class=\"value\">";
        echo twig_escape_filter($this->env, (isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "</span>
            <span class=\"label\">Config::get()</span>
        </div>
    </div>

    <h2>Spryker Configuration usage</h2>

    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
            <th>Default</th>
            <th>Count</th>
        </tr>
        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 88, $this->source); })()), "configs", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["configKey"] => $context["configData"]) {
            // line 89
            echo "            <tr>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, $context["configKey"], "html", null, true);
            echo "</td>
                ";
            // line 91
            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["configData"], "value", [], "any", false, false, false, 91))) {
                // line 92
                echo "                    <td>
                        ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["configData"], "value", [], "any", false, false, false, 93));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 94
                    echo "                            ";
                    echo twig_call_macro($macros["_self"], "macro_recursiveOutput", [$context["key"], $context["value"]], 94, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "                    </td>
                ";
            } else {
                // line 98
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["configData"], "value", [], "any", false, false, false, 98), "html", null, true);
                echo "</td>
                ";
            }
            // line 100
            echo "                ";
            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["configData"], "default", [], "any", false, false, false, 100))) {
                // line 101
                echo "                    <td>
                        ";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["configData"], "value", [], "any", false, false, false, 102));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 103
                    echo "                            ";
                    echo twig_call_macro($macros["_self"], "macro_recursiveOutput", [$context["key"], $context["value"]], 103, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "                    </td>
                ";
            } else {
                // line 107
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["configData"], "default", [], "any", false, false, false, 107), "html", null, true);
                echo "</td>
                ";
            }
            // line 109
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["configData"], "count", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['configKey'], $context['configData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "    </table>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 49
    public function macro_recursiveOutput($__key__ = null, $__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "key" => $__key__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "recursiveOutput"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "recursiveOutput"));

            // line 50
            echo "        <ul>
            <li>";
            // line 51
            if (twig_matches("/^\\d+\$/", (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 51, $this->source); })()))) {
                echo "-";
            } else {
                echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 51, $this->source); })()), "html", null, true);
                echo ":";
            }
            // line 52
            echo "                ";
            if (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 52, $this->source); })()))) {
                // line 53
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 53, $this->source); })()));
                foreach ($context['_seq'] as $context["innerKey"] => $context["innerValue"]) {
                    // line 54
                    echo "                        ";
                    echo twig_call_macro($macros["_self"], "macro_recursiveOutput", [$context["innerKey"], $context["innerValue"]], 54, $context, $this->getSourceContext());
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['innerKey'], $context['innerValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                ";
            } else {
                // line 57
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "
                ";
            }
            // line 59
            echo "            </li>
        </ul>
    ";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@Config/Collector/spryker_config_profiler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 59,  362 => 57,  359 => 56,  350 => 54,  345 => 53,  342 => 52,  335 => 51,  332 => 50,  312 => 49,  300 => 112,  290 => 109,  284 => 107,  280 => 105,  271 => 103,  267 => 102,  264 => 101,  261 => 100,  255 => 98,  251 => 96,  242 => 94,  238 => 93,  235 => 92,  233 => 91,  229 => 90,  226 => 89,  222 => 88,  204 => 74,  198 => 73,  195 => 72,  190 => 71,  188 => 70,  181 => 66,  175 => 62,  156 => 32,  146 => 31,  132 => 26,  124 => 20,  114 => 19,  103 => 16,  100 => 15,  98 => 9,  92 => 12,  88 => 10,  85 => 9,  82 => 8,  77 => 6,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <i class=\"fa fa-cog fa-lg\" aria-hidden=\"true\"></i>
        <span class=\"sf-toolbar-value\">{{ collector.configs | length }}</span>
    {% endset %}
    {% set text %}
        {% apply spaceless %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Spryker Config</b>
                <span class=\"sf-toolbar-status\">{{ collector.configs | length }}</span>
            </div>
        {% endapply %}
    {% endset %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
    <span class=\"label\">
    <span class=\"icon\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\"><path d=\"M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z\"/></svg>
    </span>
    <strong>Spryker Config</strong>
    <span class=\"count\">
        <span>{{ collector.configs | length }}</span>
    </span>
</span>
{% endblock %}

{% block panel %}

    <style>
        table tbody ul li, table tbody ul ul li {
            padding: 0;
            margin: 0;
        }
        table tbody ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        table tbody ul ul {
            list-style: none;
            margin: 0 0 0 15px;
        }
    </style>

    {% macro recursiveOutput(key, value) %}
        <ul>
            <li>{% if key matches '/^\\\\d+\$/' %}-{% else %}{{ key }}:{% endif %}
                {% if value is iterable %}
                    {% for innerKey, innerValue in value %}
                        {{ _self.recursiveOutput(innerKey, innerValue) }}
                    {% endfor %}
                {% else %}
                    {{ value }}
                {% endif %}
            </li>
        </ul>
    {% endmacro %}

    <h2>Spryker Configuration Metrics</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.configs | length }}</span>
            <span class=\"label\">Used keys</span>
        </div>
        <div class=\"metric\">
            {% set totalCount = 0 %}
            {% for configKey, configData in collector.configs %}
                {% set totalCount = totalCount + configData.count %}
            {% endfor %}
            <span class=\"value\">{{ totalCount }}</span>
            <span class=\"label\">Config::get()</span>
        </div>
    </div>

    <h2>Spryker Configuration usage</h2>

    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
            <th>Default</th>
            <th>Count</th>
        </tr>
        {% for configKey, configData in collector.configs %}
            <tr>
                <td>{{ configKey }}</td>
                {% if configData.value is iterable %}
                    <td>
                        {% for key, value in configData.value %}
                            {{ _self.recursiveOutput(key, value) }}
                        {% endfor %}
                    </td>
                {% else %}
                    <td>{{ configData.value }}</td>
                {% endif %}
                {% if configData.default is iterable %}
                    <td>
                        {% for key, value in configData.value %}
                            {{ _self.recursiveOutput(key, value) }}
                        {% endfor %}
                    </td>
                {% else %}
                    <td>{{ configData.default }}</td>
                {% endif %}
                <td>{{ configData.count }}</td>
            </tr>
        {% endfor %}
    </table>

{% endblock %}
", "@Config/Collector/spryker_config_profiler.html.twig", "/data/vendor/spryker/config/src/Spryker/Zed/Config/Presentation/Collector/spryker_config_profiler.html.twig");
    }
}
