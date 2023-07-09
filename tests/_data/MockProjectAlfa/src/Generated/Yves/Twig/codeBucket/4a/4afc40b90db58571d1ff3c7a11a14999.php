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

/* @ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig */
class __TwigTemplate_2b1f3beca01ef344dd550ecfde3e4410 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig"));

        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-icon-list", "tag" => "nav"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["nodes" => []], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <ul class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", ["menu", (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 14, $this->source); })())], 14, $context, $this->getSourceContext());
        echo "\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "nodes", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 16
            echo "            ";
            $this->loadTemplate("@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig", "@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig", 16, "2068602776")->display(twig_to_array(["class" => twig_call_macro($macros["component"], "macro_renderClass", ["menu__item",             // line 17
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 17, $this->source); })())], 17, $context, $this->getSourceContext()), "config" => ["tag" => "li"], "data" => ["node" =>             // line 22
$context["node"]], "embed" => ["name" => twig_get_attribute($this->env, $this->source,             // line 25
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "modifiers" => twig_array_merge(            // line 26
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 26, $this->source); })()), [0 => "big"])]]));
            // line 61
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    </ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 62,  88 => 61,  86 => 26,  85 => 25,  84 => 22,  83 => 17,  81 => 16,  77 => 15,  72 => 14,  62 => 13,  52 => 1,  51 => 9,  50 => 4,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'navigation-icon-list',
    tag: 'nav'
} %}

{% define data = {
    nodes: []
} %}

{% block body %}
    <ul class=\"{{ component.renderClass('menu', modifiers) }}\">
        {% for node in data.nodes %}
            {% embed atom('node') with {
                class: component.renderClass('menu__item', modifiers),
                config: {
                    tag: 'li'
                },
                data: {
                    node: node
                },
                embed: {
                    name: config.name,
                    modifiers: modifiers | merge(['big']),
                }
            } only %}
                {% block url %}
                    <a class=\"link link--secondary\" href=\"{{ data.node.url }}\" title=\"{{ data.node.title }}\">
                        {% include atom('icon') with {
                            modifiers: ['big'],
                            data: {
                                name: data.node.cssClass
                            }
                        } only %}
                    </a>
                {% endblock %}

                {% block externalUrl %}
                    <a class=\"link link--secondary\" href=\"{{ data.node.url }}\" target=\"_blank\" title=\"{{ data.node.title }}\">
                        {% include atom('icon') with {
                            modifiers: ['big'],
                            data: {
                                name: data.node.cssClass
                            }
                        } only %}
                    </a>
                {% endblock %}

                {% block other %}
                    {% include atom('icon') with {
                        modifiers: embed.modifiers,
                        class: embed.name ~ '__icon icon--' ~ data.node.cssClass ~ '-footer',
                        data: {
                            name: data.node.cssClass
                        }
                    } only %}
                {% endblock %}
            {% endembed %}
        {% endfor %}
    </ul>
{% endblock %}
", "@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-icon-list/navigation-icon-list.twig");
    }
}


/* @ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig */
class __TwigTemplate_2b1f3beca01ef344dd550ecfde3e4410___2068602776 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'url' => [$this, 'block_url'],
            'externalUrl' => [$this, 'block_externalUrl'],
            'other' => [$this, 'block_other'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 16
        return $this->loadTemplate($this->env->getFunction('atom')->getCallable()("node"), "@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig", 16);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_url($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url"));

        // line 30
        echo "                    <a class=\"link link--secondary\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "node", [], "any", false, false, false, 30), "url", [], "any", false, false, false, 30), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "node", [], "any", false, false, false, 30), "title", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
                        ";
        // line 31
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig", 31)->display(twig_to_array(["modifiers" => [0 => "big"], "data" => ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "node", [], "any", false, false, false, 34), "cssClass", [], "any", false, false, false, 34)]]));
        // line 37
        echo "                    </a>
                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 40
    public function block_externalUrl($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "externalUrl"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "externalUrl"));

        // line 41
        echo "                    <a class=\"link link--secondary\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "node", [], "any", false, false, false, 41), "url", [], "any", false, false, false, 41), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "node", [], "any", false, false, false, 41), "title", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                        ";
        // line 42
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig", 42)->display(twig_to_array(["modifiers" => [0 => "big"], "data" => ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 45
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), "node", [], "any", false, false, false, 45), "cssClass", [], "any", false, false, false, 45)]]));
        // line 48
        echo "                    </a>
                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 51
    public function block_other($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        // line 52
        echo "                    ";
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig", 52)->display(twig_to_array(["modifiers" => twig_get_attribute($this->env, $this->source,         // line 53
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 53, $this->source); })()), "modifiers", [], "any", false, false, false, 53), "class" => (((twig_get_attribute($this->env, $this->source,         // line 54
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54) . "__icon icon--") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()), "node", [], "any", false, false, false, 54), "cssClass", [], "any", false, false, false, 54)) . "-footer"), "data" => ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "node", [], "any", false, false, false, 56), "cssClass", [], "any", false, false, false, 56)]]));
        // line 59
        echo "                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 59,  309 => 56,  308 => 54,  307 => 53,  305 => 52,  295 => 51,  284 => 48,  282 => 45,  281 => 42,  274 => 41,  264 => 40,  253 => 37,  251 => 34,  250 => 31,  243 => 30,  233 => 29,  211 => 16,  94 => 62,  88 => 61,  86 => 26,  85 => 25,  84 => 22,  83 => 17,  81 => 16,  77 => 15,  72 => 14,  62 => 13,  52 => 1,  51 => 9,  50 => 4,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'navigation-icon-list',
    tag: 'nav'
} %}

{% define data = {
    nodes: []
} %}

{% block body %}
    <ul class=\"{{ component.renderClass('menu', modifiers) }}\">
        {% for node in data.nodes %}
            {% embed atom('node') with {
                class: component.renderClass('menu__item', modifiers),
                config: {
                    tag: 'li'
                },
                data: {
                    node: node
                },
                embed: {
                    name: config.name,
                    modifiers: modifiers | merge(['big']),
                }
            } only %}
                {% block url %}
                    <a class=\"link link--secondary\" href=\"{{ data.node.url }}\" title=\"{{ data.node.title }}\">
                        {% include atom('icon') with {
                            modifiers: ['big'],
                            data: {
                                name: data.node.cssClass
                            }
                        } only %}
                    </a>
                {% endblock %}

                {% block externalUrl %}
                    <a class=\"link link--secondary\" href=\"{{ data.node.url }}\" target=\"_blank\" title=\"{{ data.node.title }}\">
                        {% include atom('icon') with {
                            modifiers: ['big'],
                            data: {
                                name: data.node.cssClass
                            }
                        } only %}
                    </a>
                {% endblock %}

                {% block other %}
                    {% include atom('icon') with {
                        modifiers: embed.modifiers,
                        class: embed.name ~ '__icon icon--' ~ data.node.cssClass ~ '-footer',
                        data: {
                            name: data.node.cssClass
                        }
                    } only %}
                {% endblock %}
            {% endembed %}
        {% endfor %}
    </ul>
{% endblock %}
", "@ShopUi/components/molecules/navigation-icon-list/navigation-icon-list.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-icon-list/navigation-icon-list.twig");
    }
}
