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

/* @@SprykerShop:CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_27eff53367078b928e3a90b7318e72ed extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig"));

        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "sort"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["parentJsName" => "", "pagination" => [], "sort" => []], $context['data']);        // line 1
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
        echo "    ";
        $context["triggerButtonJsName"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "parentJsName", [], "any", false, false, false, 14)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "parentJsName", [], "any", false, false, false, 14) . "__trigger")) : (""));
        // line 15
        echo "
    <div class=\"grid grid--middle\">
        <div class=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "__col col col--lg-3 is-hidden-sm-md\">
            <strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getFilter('executeFilterIfExists')->getCallable()(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pagination", [], "any", false, true, false, 18), "numFound", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pagination", [], "any", false, true, false, 18), "numFound", [], "any", false, false, false, 18), 0)) : (0)), "formatInt", twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "locale", [], "any", false, false, false, 18)), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.itemsFound"), "html", null, true);
        echo "
        </div>

        <div class=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "__col col col--sm-3 col--md-2\">
            ";
        // line 22
        $this->loadTemplate("@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", 22, "579719287")->display(twig_to_array(["modifiers" => [0 => "expand"], "attributes" => ["name" => "ipp"], "embed" => ["pagination" => twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "pagination", [], "any", false, false, false, 28)]]));
        // line 39
        echo "        </div>

        <div class=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "__col col col--sm-7 col--md-8 col--lg-6\">
            ";
        // line 42
        $this->loadTemplate("@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", 42, "576470697")->display(twig_to_array(["modifiers" => [0 => "expand"], "attributes" => ["name" => "sort"], "embed" => ["sort" => twig_get_attribute($this->env, $this->source,         // line 48
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "sort", [], "any", false, false, false, 48)]]));
        // line 63
        echo "        </div>

        <div class=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
        echo "__col col col--sm-2 col--lg-1\">
            <button type=\"button\" class=\"button button--expand ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["triggerButtonJsName"]) || array_key_exists("triggerButtonJsName", $context) ? $context["triggerButtonJsName"] : (function () { throw new RuntimeError('Variable "triggerButtonJsName" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "\">
                ";
        // line 67
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", 67)->display(twig_to_array(["data" => ["name" => "sort"]]));
        // line 72
        echo "            </button>
        </div>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 72,  119 => 67,  115 => 66,  111 => 65,  107 => 63,  105 => 48,  104 => 42,  100 => 41,  96 => 39,  94 => 28,  93 => 22,  89 => 21,  81 => 18,  77 => 17,  73 => 15,  70 => 14,  60 => 13,  50 => 1,  49 => 7,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'sort',
} %}

{% define data = {
    parentJsName: '',
    pagination: {},
    sort: {},
} %}

{% block body %}
    {% set triggerButtonJsName = data.parentJsName ? data.parentJsName ~ '__trigger' %}

    <div class=\"grid grid--middle\">
        <div class=\"{{ config.name }}__col col col--lg-3 is-hidden-sm-md\">
            <strong>{{ data.pagination.numFound | default(0) | executeFilterIfExists('formatInt', app.locale) }}</strong> {{ 'catalog.itemsFound' | trans }}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-3 col--md-2\">
            {% embed atom('select') with {
                modifiers: ['expand'],
                attributes: {
                    name: 'ipp',
                },
                embed: {
                    pagination: data.pagination,
                },
            } only %}
                {% block options %}
                    {% for limit in embed.pagination.config.validItemsPerPageOptions | default([]) %}
                        {% set selectedOption = limit == embed.pagination.currentItemsPerPage | default ? 'selected' %}

                        <option value=\"{{ limit }}\" {{ selectedOption }}>{{ limit }}</option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-7 col--md-8 col--lg-6\">
            {% embed atom('select') with {
                modifiers: ['expand'],
                attributes: {
                    name: 'sort',
                },
                embed: {
                    sort: data.sort,
                },
            } only %}
                {% block options %}
                    <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>

                    {% for sortParamName in embed.sort.sortParamNames | default([]) %}
                        {% set selectedOption = sortParamName == embed.sort.currentSortParam | default ? 'selected' %}

                        <option value=\"{{ sortParamName }}\" {{ selectedOption }}>
                            {{ ('catalog.sort.' ~ sortParamName) | trans }}
                        </option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-2 col--lg-1\">
            <button type=\"button\" class=\"button button--expand {{ triggerButtonJsName }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'sort',
                    },
                } only %}
            </button>
        </div>
    </div>
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}


/* @@SprykerShop:CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_27eff53367078b928e3a90b7318e72ed___579719287 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'options' => [$this, 'block_options'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 22
        return $this->loadTemplate($this->env->getFunction('atom')->getCallable()("select"), "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", 22);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["embed"] ?? null), "pagination", [], "any", false, true, false, 32), "config", [], "any", false, true, false, 32), "validItemsPerPageOptions", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["embed"] ?? null), "pagination", [], "any", false, true, false, 32), "config", [], "any", false, true, false, 32), "validItemsPerPageOptions", [], "any", false, false, false, 32), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            // line 33
            echo "                        ";
            $context["selectedOption"] = ((($context["limit"] == ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["embed"] ?? null), "pagination", [], "any", false, true, false, 33), "currentItemsPerPage", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["embed"] ?? null), "pagination", [], "any", false, true, false, 33), "currentItemsPerPage", [], "any", false, false, false, 33))) : ("")))) ? ("selected") : (""));
            // line 34
            echo "
                        <option value=\"";
            // line 35
            echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["selectedOption"]) || array_key_exists("selectedOption", $context) ? $context["selectedOption"] : (function () { throw new RuntimeError('Variable "selectedOption" does not exist.', 35, $this->source); })()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 37,  293 => 35,  290 => 34,  287 => 33,  282 => 32,  272 => 31,  250 => 22,  121 => 72,  119 => 67,  115 => 66,  111 => 65,  107 => 63,  105 => 48,  104 => 42,  100 => 41,  96 => 39,  94 => 28,  93 => 22,  89 => 21,  81 => 18,  77 => 17,  73 => 15,  70 => 14,  60 => 13,  50 => 1,  49 => 7,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'sort',
} %}

{% define data = {
    parentJsName: '',
    pagination: {},
    sort: {},
} %}

{% block body %}
    {% set triggerButtonJsName = data.parentJsName ? data.parentJsName ~ '__trigger' %}

    <div class=\"grid grid--middle\">
        <div class=\"{{ config.name }}__col col col--lg-3 is-hidden-sm-md\">
            <strong>{{ data.pagination.numFound | default(0) | executeFilterIfExists('formatInt', app.locale) }}</strong> {{ 'catalog.itemsFound' | trans }}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-3 col--md-2\">
            {% embed atom('select') with {
                modifiers: ['expand'],
                attributes: {
                    name: 'ipp',
                },
                embed: {
                    pagination: data.pagination,
                },
            } only %}
                {% block options %}
                    {% for limit in embed.pagination.config.validItemsPerPageOptions | default([]) %}
                        {% set selectedOption = limit == embed.pagination.currentItemsPerPage | default ? 'selected' %}

                        <option value=\"{{ limit }}\" {{ selectedOption }}>{{ limit }}</option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-7 col--md-8 col--lg-6\">
            {% embed atom('select') with {
                modifiers: ['expand'],
                attributes: {
                    name: 'sort',
                },
                embed: {
                    sort: data.sort,
                },
            } only %}
                {% block options %}
                    <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>

                    {% for sortParamName in embed.sort.sortParamNames | default([]) %}
                        {% set selectedOption = sortParamName == embed.sort.currentSortParam | default ? 'selected' %}

                        <option value=\"{{ sortParamName }}\" {{ selectedOption }}>
                            {{ ('catalog.sort.' ~ sortParamName) | trans }}
                        </option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-2 col--lg-1\">
            <button type=\"button\" class=\"button button--expand {{ triggerButtonJsName }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'sort',
                    },
                } only %}
            </button>
        </div>
    </div>
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}


/* @@SprykerShop:CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_27eff53367078b928e3a90b7318e72ed___576470697 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'options' => [$this, 'block_options'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 42
        return $this->loadTemplate($this->env->getFunction('atom')->getCallable()("select"), "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", 42);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "options"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "options"));

        // line 52
        echo "                    <option value=\"\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.sort.relevance"), "html", null, true);
        echo "</option>

                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["embed"] ?? null), "sort", [], "any", false, true, false, 54), "sortParamNames", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["embed"] ?? null), "sort", [], "any", false, true, false, 54), "sortParamNames", [], "any", false, false, false, 54), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["sortParamName"]) {
            // line 55
            echo "                        ";
            $context["selectedOption"] = ((($context["sortParamName"] == ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["embed"] ?? null), "sort", [], "any", false, true, false, 55), "currentSortParam", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["embed"] ?? null), "sort", [], "any", false, true, false, 55), "currentSortParam", [], "any", false, false, false, 55))) : ("")))) ? ("selected") : (""));
            // line 56
            echo "
                        <option value=\"";
            // line 57
            echo twig_escape_filter($this->env, $context["sortParamName"], "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["selectedOption"]) || array_key_exists("selectedOption", $context) ? $context["selectedOption"] : (function () { throw new RuntimeError('Variable "selectedOption" does not exist.', 57, $this->source); })()), "html", null, true);
            echo ">
                            ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("catalog.sort." . $context["sortParamName"])), "html", null, true);
            echo "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortParamName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 61,  485 => 58,  479 => 57,  476 => 56,  473 => 55,  469 => 54,  463 => 52,  453 => 51,  431 => 42,  305 => 37,  293 => 35,  290 => 34,  287 => 33,  282 => 32,  272 => 31,  250 => 22,  121 => 72,  119 => 67,  115 => 66,  111 => 65,  107 => 63,  105 => 48,  104 => 42,  100 => 41,  96 => 39,  94 => 28,  93 => 22,  89 => 21,  81 => 18,  77 => 17,  73 => 15,  70 => 14,  60 => 13,  50 => 1,  49 => 7,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'sort',
} %}

{% define data = {
    parentJsName: '',
    pagination: {},
    sort: {},
} %}

{% block body %}
    {% set triggerButtonJsName = data.parentJsName ? data.parentJsName ~ '__trigger' %}

    <div class=\"grid grid--middle\">
        <div class=\"{{ config.name }}__col col col--lg-3 is-hidden-sm-md\">
            <strong>{{ data.pagination.numFound | default(0) | executeFilterIfExists('formatInt', app.locale) }}</strong> {{ 'catalog.itemsFound' | trans }}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-3 col--md-2\">
            {% embed atom('select') with {
                modifiers: ['expand'],
                attributes: {
                    name: 'ipp',
                },
                embed: {
                    pagination: data.pagination,
                },
            } only %}
                {% block options %}
                    {% for limit in embed.pagination.config.validItemsPerPageOptions | default([]) %}
                        {% set selectedOption = limit == embed.pagination.currentItemsPerPage | default ? 'selected' %}

                        <option value=\"{{ limit }}\" {{ selectedOption }}>{{ limit }}</option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-7 col--md-8 col--lg-6\">
            {% embed atom('select') with {
                modifiers: ['expand'],
                attributes: {
                    name: 'sort',
                },
                embed: {
                    sort: data.sort,
                },
            } only %}
                {% block options %}
                    <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>

                    {% for sortParamName in embed.sort.sortParamNames | default([]) %}
                        {% set selectedOption = sortParamName == embed.sort.currentSortParam | default ? 'selected' %}

                        <option value=\"{{ sortParamName }}\" {{ selectedOption }}>
                            {{ ('catalog.sort.' ~ sortParamName) | trans }}
                        </option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>

        <div class=\"{{ config.name }}__col col col--sm-2 col--lg-1\">
            <button type=\"button\" class=\"button button--expand {{ triggerButtonJsName }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'sort',
                    },
                } only %}
            </button>
        </div>
    </div>
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/sort/sort.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}
