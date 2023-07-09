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

/* @Redis/redis.html.twig */
class __TwigTemplate_fa24841a9d8cae8dfb33fee6006c719a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Redis/redis.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Redis/redis.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Redis/redis.html.twig", 1);
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
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/cache.svg");
        echo "
        <span class=\"sf-toolbar-value\">Redis ";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "calls", [], "any", false, false, false, 6)), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        ob_start();
        // line 10
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Calls</b>
            <span>";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 12, $this->source); })()), "calls", [], "any", false, false, false, 12)), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo "
    ";
        // line 16
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 16, $this->source); })()), "name" => "redis"]);
        echo "
";
        
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
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M2.3 6l9-4.6a1.5 1.5 0 0 1 1.4 0l9 4.7a1.5 1.5 0 0 1 0 2.6l-9 4.7a1.5 1.5 0 0 1-1.4 0l-9-4.7a1.5 1.5 0 0 1 0-2.6zm18.3 5L12 15.4 3.4 11a1.4 1.4 0 0 0-1.2 2.4l9.2 4.8a1.4 1.4 0 0 0 1.2 0l9.2-4.8a1.4 1.4 0 0 0-1.3-2.4zm0 4.5L12 19.9l-8.6-4.4a1.4 1.4 0 0 0-1.2 2.4l9.2 4.7a1.4 1.4 0 0 0 1.2 0l9.2-4.7a1.4 1.4 0 0 0-1.3-2.5z\"/></svg>
        </span>
        <strong>Redis</strong>
        <span class=\"count\">
            <span>";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 26, $this->source); })()), "calls", [], "any", false, false, false, 26)), "html", null, true);
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
        echo "    <style>
        table {
            table-layout:fixed;
        }
        td {
            overflow-x: auto;
        }
    </style>

    <h2>Redis Calls</h2>
    <table>
        <colgroup>
            <col style=\"width: 20%\">
            <col style=\"width: 10%\">
            <col style=\"width: 35%\">
            <col style=\"width: 35%\">
        </colgroup>
        <tr>
            <th>Destination</th>
            <th>Command</th>
            <th>Payload</th>
            <th>Result</th>
        </tr>

        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "calls", [], "any", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["callData"]) {
            // line 57
            echo "            <tr>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["callData"], "destination", [], "array", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["callData"], "command", [], "array", false, false, false, 59), "html", null, true);
            echo "</td>
                <td><pre>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["callData"], "payload", [], "array", false, false, false, 60), "html", null, true);
            echo "</pre></td>
                <td><pre>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["callData"], "result", [], "array", false, false, false, 61), "html", null, true);
            echo "</pre></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['callData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Redis/redis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 64,  200 => 61,  196 => 60,  192 => 59,  188 => 58,  185 => 57,  181 => 56,  155 => 32,  145 => 31,  131 => 26,  123 => 20,  113 => 19,  101 => 16,  98 => 15,  92 => 12,  88 => 10,  86 => 9,  83 => 8,  78 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/cache.svg') }}
        <span class=\"sf-toolbar-value\">Redis {{ collector.calls|length }}</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Calls</b>
            <span>{{ collector.calls|length }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'redis'}) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M2.3 6l9-4.6a1.5 1.5 0 0 1 1.4 0l9 4.7a1.5 1.5 0 0 1 0 2.6l-9 4.7a1.5 1.5 0 0 1-1.4 0l-9-4.7a1.5 1.5 0 0 1 0-2.6zm18.3 5L12 15.4 3.4 11a1.4 1.4 0 0 0-1.2 2.4l9.2 4.8a1.4 1.4 0 0 0 1.2 0l9.2-4.8a1.4 1.4 0 0 0-1.3-2.4zm0 4.5L12 19.9l-8.6-4.4a1.4 1.4 0 0 0-1.2 2.4l9.2 4.7a1.4 1.4 0 0 0 1.2 0l9.2-4.7a1.4 1.4 0 0 0-1.3-2.5z\"/></svg>
        </span>
        <strong>Redis</strong>
        <span class=\"count\">
            <span>{{ collector.calls|length }}</span>
        </span>
    </span>
{% endblock %}

{% block panel %}
    <style>
        table {
            table-layout:fixed;
        }
        td {
            overflow-x: auto;
        }
    </style>

    <h2>Redis Calls</h2>
    <table>
        <colgroup>
            <col style=\"width: 20%\">
            <col style=\"width: 10%\">
            <col style=\"width: 35%\">
            <col style=\"width: 35%\">
        </colgroup>
        <tr>
            <th>Destination</th>
            <th>Command</th>
            <th>Payload</th>
            <th>Result</th>
        </tr>

        {% for callData in collector.calls %}
            <tr>
                <td>{{ callData['destination'] }}</td>
                <td>{{ callData['command'] }}</td>
                <td><pre>{{ callData['payload'] }}</pre></td>
                <td><pre>{{ callData['result'] }}</pre></td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}
", "@Redis/redis.html.twig", "/data/vendor/spryker/redis/src/Spryker/Yves/Redis/Theme/default/redis.html.twig");
    }
}
