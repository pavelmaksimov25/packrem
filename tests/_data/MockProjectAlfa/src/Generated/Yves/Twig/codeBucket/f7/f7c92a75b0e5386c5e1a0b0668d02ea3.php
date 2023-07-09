<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Source;
use Twig\Template;

/* @ZedRequest/zed-request.html.twig */
class __TwigTemplate_30334331b8f990fa80c1b5108becf976 extends Template
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
        return '@WebProfiler/Profiler/layout.html.twig';
    }

    /**
     * @return void
     */
    protected function doDisplay(array $context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@ZedRequest/zed-request.html.twig'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@ZedRequest/zed-request.html.twig'));

        $this->parent = $this->loadTemplate('@WebProfiler/Profiler/layout.html.twig', '@ZedRequest/zed-request.html.twig', 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);
    }

    // line 3

    /**
     * @return void
     */
    public function block_toolbar($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'toolbar'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'toolbar'));

        // line 4
        echo '    ';
        ob_start();
        // line 5
        echo '        ';
        echo twig_include($this->env, $context, '@WebProfiler/Icon/http-client.svg');
        echo "
        <span class=\"sf-toolbar-value\">Zed Requests ";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['collector']) || array_key_exists('collector', $context) ? $context['collector'] : (function (): void {
            throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source);
        })()), 'logs', [], 'any', false, false, false, 6)), 'html', null, true);
        echo "</span>
    ";
        $context['icon'] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['collector']) || array_key_exists('collector', $context) ? $context['collector'] : (function (): void {
            throw new RuntimeError('Variable "collector" does not exist.', 12, $this->source);
        })()), 'logs', [], 'any', false, false, false, 12)), 'html', null, true);
        echo "</span>
        </div>
    ";
        $context['text'] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo "
    ";
        // line 16
        echo twig_include($this->env, $context, '@WebProfiler/Profiler/toolbar_item.html.twig', [
        'link' => (isset($context['profiler_url']) || array_key_exists('profiler_url', $context) ? $context['profiler_url'] : (function (): void {
            throw new RuntimeError('Variable "profiler_url" does not exist.', 16, $this->source);
        })()), 'name' => 'zed_request']);
        echo "
";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 19

    /**
     * @return void
     */
    public function block_menu($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'menu'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'menu'));

        // line 20
        echo "    <span class=\"label\">
        <span class=\"icon\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M20.4 12c-1 0-1.8.6-2.2 1.4l-2.6-.9c.1-.3.1-.5.1-.8 0-1.2-.6-2.2-1.5-2.9l1.5-2.6c.3.1.6.2 1 .2 1.4 0 2.5-1.1 2.5-2.5s-1.1-2.5-2.5-2.5-2.5 1.1-2.5 2.5c0 .8.4 1.5.9 1.9l-1.5 2.6c-.5-.3-1-.4-1.6-.4-.9 0-1.7.3-2.3.9L7.4 6.6c.3-.4.5-.9.5-1.5 0-1.4-1.1-2.5-2.5-2.5S2.7 3.7 2.7 5.1s1.1 2.5 2.5 2.5c.6 0 1.1-.2 1.5-.5L9 9.4c-.5.6-.8 1.4-.8 2.3 0 .7.2 1.4.6 2l-3.9 3.8c-.4-.3-.9-.5-1.5-.5C2 17 .9 18.1.9 19.5S2.2 22 3.6 22s2.5-1.1 2.5-2.5c0-.5-.2-1-.5-1.5l3.8-3.7c.7.7 1.6 1.1 2.6 1.1h.2l.4 2.4c-1 .3-1.7 1.3-1.7 2.4 0 1.4 1.1 2.5 2.5 2.5s2.5-1.1 2.5-2.5-1.1-2.5-2.5-2.5l-.4-2.5c1-.3 1.9-1 2.3-2l2.6.9v.4c0 1.4 1.1 2.5 2.5 2.5s2.5-1.1 2.5-2.5c.1-1.4-1.1-2.5-2.5-2.5z\"/></svg>
        </span>
        <strong>Zed Requests</strong>
        <span class=\"count\">
            <span>";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['collector']) || array_key_exists('collector', $context) ? $context['collector'] : (function (): void {
            throw new RuntimeError('Variable "collector" does not exist.', 26, $this->source);
        })()), 'logs', [], 'any', false, false, false, 26)), 'html', null, true);
        echo "</span>
        </span>
    </span>
";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 31

    /**
     * @return void
     */
    public function block_panel($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'panel'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'panel'));

        // line 32
        echo "    <style>
        table {
            table-layout:fixed;
        }
        td {
            overflow-x: auto;
        }
    </style>

    <h2>Zed Requests</h2>
    <table>
        <tr>
            <th>Destination</th>
            <th>Payload</th>
            <th>Result</th>
        </tr>

        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context['collector']) || array_key_exists('collector', $context) ? $context['collector'] : (function (): void {
            throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source);
        })()), 'logs', [], 'any', false, false, false, 49));
        foreach ($context['_seq'] as $context['_key'] => $context['logData']) {
            // line 50
            echo "            <tr>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context['logData'], 'destination', [], 'array', false, false, false, 51), 'html', null, true);
            echo "</td>
                <td>
                    <pre>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context['logData'], 'payload', [], 'array', false, false, false, 53), 'html', null, true);
            echo "</pre>
                </td>
                <td>
                    <pre>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context['logData'], 'result', [], 'array', false, false, false, 56), 'html', null, true);
            echo "</pre>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    </table>
";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    public function getTemplateName()
    {
        return '@ZedRequest/zed-request.html.twig';
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [202 => 60, 192 => 56, 186 => 53, 181 => 51, 178 => 50, 174 => 49, 155 => 32, 145 => 31, 131 => 26, 123 => 20, 113 => 19, 101 => 16, 98 => 15, 92 => 12, 88 => 10, 86 => 9, 83 => 8, 78 => 6, 73 => 5, 70 => 4, 60 => 3, 37 => 1];
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/http-client.svg') }}
        <span class=\"sf-toolbar-value\">Zed Requests {{ collector.logs|length }}</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Calls</b>
            <span>{{ collector.logs|length }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'zed_request'}) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M20.4 12c-1 0-1.8.6-2.2 1.4l-2.6-.9c.1-.3.1-.5.1-.8 0-1.2-.6-2.2-1.5-2.9l1.5-2.6c.3.1.6.2 1 .2 1.4 0 2.5-1.1 2.5-2.5s-1.1-2.5-2.5-2.5-2.5 1.1-2.5 2.5c0 .8.4 1.5.9 1.9l-1.5 2.6c-.5-.3-1-.4-1.6-.4-.9 0-1.7.3-2.3.9L7.4 6.6c.3-.4.5-.9.5-1.5 0-1.4-1.1-2.5-2.5-2.5S2.7 3.7 2.7 5.1s1.1 2.5 2.5 2.5c.6 0 1.1-.2 1.5-.5L9 9.4c-.5.6-.8 1.4-.8 2.3 0 .7.2 1.4.6 2l-3.9 3.8c-.4-.3-.9-.5-1.5-.5C2 17 .9 18.1.9 19.5S2.2 22 3.6 22s2.5-1.1 2.5-2.5c0-.5-.2-1-.5-1.5l3.8-3.7c.7.7 1.6 1.1 2.6 1.1h.2l.4 2.4c-1 .3-1.7 1.3-1.7 2.4 0 1.4 1.1 2.5 2.5 2.5s2.5-1.1 2.5-2.5-1.1-2.5-2.5-2.5l-.4-2.5c1-.3 1.9-1 2.3-2l2.6.9v.4c0 1.4 1.1 2.5 2.5 2.5s2.5-1.1 2.5-2.5c.1-1.4-1.1-2.5-2.5-2.5z\"/></svg>
        </span>
        <strong>Zed Requests</strong>
        <span class=\"count\">
            <span>{{ collector.logs|length }}</span>
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

    <h2>Zed Requests</h2>
    <table>
        <tr>
            <th>Destination</th>
            <th>Payload</th>
            <th>Result</th>
        </tr>

        {% for logData in collector.logs %}
            <tr>
                <td>{{ logData['destination'] }}</td>
                <td>
                    <pre>{{ logData['payload'] }}</pre>
                </td>
                <td>
                    <pre>{{ logData['result'] }}</pre>
                </td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}
", '@ZedRequest/zed-request.html.twig', '/data/vendor/spryker/zed-request/src/Spryker/Yves/ZedRequest/Theme/default/zed-request.html.twig');
    }
}
