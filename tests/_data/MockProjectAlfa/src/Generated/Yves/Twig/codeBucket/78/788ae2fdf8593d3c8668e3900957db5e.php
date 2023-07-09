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

/* @LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig */
class __TwigTemplate_06b815354e781fb12ce554cf47460c78 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig"));

        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "language-switcher", "tag" => "language-switcher"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["languages" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "currentLanguage" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "getSchemeAndHttpHost" =>         // line 11
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 11, $this->source); })())], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    ";
        $this->loadTemplate("@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig", "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig", 15, "919865866")->display(twig_to_array(["modifiers" => [0 => "alternative"], "attributes" => ["onchange" => "", "config-theme" => "alternative"], "embed" => ["jsName" => twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "jsName", [], "any", false, false, false, 22), "languages" => twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "languages", [], "any", false, false, false, 23), "currentLanguage" => twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "currentLanguage", [], "any", false, false, false, 24), "getSchemeAndHttpHost" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "getSchemeAndHttpHost", [], "any", false, false, false, 25)]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  77 => 24,  76 => 23,  75 => 22,  73 => 15,  63 => 14,  53 => 1,  52 => 11,  51 => 10,  50 => 9,  49 => 8,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'language-switcher',
    tag: 'language-switcher'
} %}

{% define data = {
    languages: required,
    currentLanguage: required,
    getSchemeAndHttpHost: required
} %}

{% block body %}
    {% embed molecule('custom-select') with {
        modifiers: ['alternative'],
        attributes: {
            'onchange': '',
            'config-theme': 'alternative'
        },
        embed: {
            jsName: config.jsName,
            languages: data.languages,
            currentLanguage: data.currentLanguage,
            getSchemeAndHttpHost: data.getSchemeAndHttpHost
        }
    } only %}
        {% block selectClass %}
            {{ parent() }} {{ embed.jsName }}
        {% endblock %}
        {% block options %}
            {% for language, url in embed.languages %}
                <option
                        value=\"{{ embed.getSchemeAndHttpHost }}{{ url }}\"
                        {{ (language == embed.currentLanguage) ? 'selected' : ''}}>
                    {{ language | upper }}
                </option>
            {% endfor %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig", "/data/src/Pyz/Yves/LanguageSwitcherWidget/Theme/default/components/molecules/language-switcher/language-switcher.twig");
    }
}


/* @LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig */
class __TwigTemplate_06b815354e781fb12ce554cf47460c78___919865866 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'selectClass' => [$this, 'block_selectClass'],
            'options' => [$this, 'block_options'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 15
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("custom-select"), "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig", 15);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_selectClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selectClass"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selectClass"));

        // line 29
        echo "            ";
        $this->displayParentBlock("selectClass", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 29, $this->source); })()), "jsName", [], "any", false, false, false, 29), "html", null, true);
        echo "
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 31
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "options"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "options"));

        // line 32
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 32, $this->source); })()), "languages", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["language"] => $context["url"]) {
            // line 33
            echo "                <option
                        value=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 34, $this->source); })()), "getSchemeAndHttpHost", [], "any", false, false, false, 34), "html", null, true);
            echo twig_escape_filter($this->env, $context["url"], "html", null, true);
            echo "\"
                        ";
            // line 35
            echo ((($context["language"] == twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 35, $this->source); })()), "currentLanguage", [], "any", false, false, false, 35))) ? ("selected") : (""));
            echo ">
                    ";
            // line 36
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["language"]), "html", null, true);
            echo "
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['language'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 39,  245 => 36,  241 => 35,  236 => 34,  233 => 33,  228 => 32,  218 => 31,  203 => 29,  193 => 28,  171 => 15,  78 => 25,  77 => 24,  76 => 23,  75 => 22,  73 => 15,  63 => 14,  53 => 1,  52 => 11,  51 => 10,  50 => 9,  49 => 8,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'language-switcher',
    tag: 'language-switcher'
} %}

{% define data = {
    languages: required,
    currentLanguage: required,
    getSchemeAndHttpHost: required
} %}

{% block body %}
    {% embed molecule('custom-select') with {
        modifiers: ['alternative'],
        attributes: {
            'onchange': '',
            'config-theme': 'alternative'
        },
        embed: {
            jsName: config.jsName,
            languages: data.languages,
            currentLanguage: data.currentLanguage,
            getSchemeAndHttpHost: data.getSchemeAndHttpHost
        }
    } only %}
        {% block selectClass %}
            {{ parent() }} {{ embed.jsName }}
        {% endblock %}
        {% block options %}
            {% for language, url in embed.languages %}
                <option
                        value=\"{{ embed.getSchemeAndHttpHost }}{{ url }}\"
                        {{ (language == embed.currentLanguage) ? 'selected' : ''}}>
                    {{ language | upper }}
                </option>
            {% endfor %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@LanguageSwitcherWidget/components/molecules/language-switcher/language-switcher.twig", "/data/src/Pyz/Yves/LanguageSwitcherWidget/Theme/default/components/molecules/language-switcher/language-switcher.twig");
    }
}
