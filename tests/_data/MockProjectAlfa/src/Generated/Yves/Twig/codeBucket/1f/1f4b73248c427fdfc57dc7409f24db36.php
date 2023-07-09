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

/* @CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_98c2ae8fa3ca0b5f739f8afed440b72b extends Template
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
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("sort", "@SprykerShop:CatalogPage"), "@CatalogPage/components/molecules/sort/sort.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CatalogPage/components/molecules/sort/sort.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CatalogPage/components/molecules/sort/sort.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"grid grid--middle grid--justify\">
        <div class=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "__col ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "__col--counter col\">
            ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getFilter('executeFilterIfExists')->getCallable()(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "pagination", [], "any", false, true, false, 6), "numFound", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "pagination", [], "any", false, true, false, 6), "numFound", [], "any", false, false, false, 6), 0)) : (0)), "formatInt", twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "locale", [], "any", false, false, false, 6)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.itemsFound"), "html", null, true);
        echo "
        </div>

        <div class=\"col ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "__col ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "__col--filters is-hidden-sm-md\">
            <div class=\"grid grid--middle ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "__filter-grid ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "jsName", [], "any", false, false, false, 10), "html", null, true);
        echo "__filter-grid\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"768\">
                <div class=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "__col ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "__col col is-hidden-sm-md\">
                            ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.per"), "html", null, true);
        echo ":
                        </div>

                        <div class=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "__col col col col--sm-12 col--lg-auto\">
                            ";
        // line 18
        $this->loadTemplate("@CatalogPage/components/molecules/sort/sort.twig", "@CatalogPage/components/molecules/sort/sort.twig", 18, "202804625")->display(twig_to_array(["modifiers" => [0 => "small", 1 => "light", 2 => "mobile-expand", 3 => "different-mob-caret"], "attributes" => ["name" => "ipp", "config-theme" => "small"], "embed" => ["pagination" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 25, $this->source); })()), "pagination", [], "any", false, false, false, 25), "parentJsName" => twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "parentJsName", [], "any", false, false, false, 26)]]));
        // line 53
        echo "                        </div>
                    </div>
                </div>
                <div class=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), "html", null, true);
        echo "__col ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), "html", null, true);
        echo "__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), "html", null, true);
        echo "__col col is-hidden-sm-md\">
                            ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.sort"), "html", null, true);
        echo ":
                        </div>

                        <div class=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 62, $this->source); })()), "name", [], "any", false, false, false, 62), "html", null, true);
        echo "__col col col col--sm-12 col--lg-auto\">
                            ";
        // line 63
        $this->loadTemplate("@CatalogPage/components/molecules/sort/sort.twig", "@CatalogPage/components/molecules/sort/sort.twig", 63, "212300652")->display(twig_to_array(["modifiers" => [0 => "small", 1 => "light", 2 => "mobile-expand", 3 => "different-mob-caret"], "attributes" => ["name" => "sort", "config-theme" => "small"], "embed" => ["sort" => twig_get_attribute($this->env, $this->source,         // line 70
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 70, $this->source); })()), "sort", [], "any", false, false, false, 70), "parentJsName" => twig_get_attribute($this->env, $this->source,         // line 71
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 71, $this->source); })()), "parentJsName", [], "any", false, false, false, 71)]]));
        // line 99
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 106
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("breakpoint-dependent-block-placer"), "@CatalogPage/components/molecules/sort/sort.twig", 106)->display(twig_to_array(["attributes" => ["block-class-name" => (twig_get_attribute($this->env, $this->source,         // line 108
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 108, $this->source); })()), "jsName", [], "any", false, false, false, 108) . "__filter-grid")]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/sort/sort.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 108,  160 => 106,  151 => 99,  149 => 71,  148 => 70,  147 => 63,  143 => 62,  137 => 59,  133 => 58,  126 => 56,  121 => 53,  119 => 26,  118 => 25,  117 => 18,  113 => 17,  107 => 14,  103 => 13,  96 => 11,  90 => 10,  84 => 9,  76 => 6,  70 => 5,  67 => 4,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('sort', '@SprykerShop:CatalogPage') %}

{% block body %}
    <div class=\"grid grid--middle grid--justify\">
        <div class=\"{{ config.name }}__col {{ config.name }}__col--counter col\">
            {{ _view.pagination.numFound | default(0) | executeFilterIfExists('formatInt', app.locale) }} {{ 'catalog.itemsFound' | trans }}
        </div>

        <div class=\"col {{ config.name }}__col {{ config.name }}__col--filters is-hidden-sm-md\">
            <div class=\"grid grid--middle {{ config.name }}__filter-grid {{ config.jsName }}__filter-grid\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"768\">
                <div class=\"{{ config.name }}__col {{ config.name }}__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"{{ config.name }}__col col is-hidden-sm-md\">
                            {{ 'catalog.filter.per' | trans }}:
                        </div>

                        <div class=\"{{ config.name }}__col col col col--sm-12 col--lg-auto\">
                            {% embed molecule('custom-select') with {
                                modifiers: ['small', 'light', 'mobile-expand', 'different-mob-caret'],
                                attributes: {
                                    name: 'ipp',
                                    'config-theme': 'small',
                                },
                                embed: {
                                    pagination: _view.pagination,
                                    parentJsName: data.parentJsName,
                                },
                            } only %}
                                {% block selectClass %}
                                    {{ parent() }} {{ embed.parentJsName }}__sort-trigger
                                {% endblock %}
                                {% block options %}
                                    {% for limit in embed.pagination.config.validItemsPerPageOptions %}
                                        <option value=\"{{ limit }}\" {% if limit == embed.pagination.currentItemsPerPage %}selected{% endif %}>{{ limit | executeFilterIfExists('formatInt', app.locale) }}</option>
                                    {% endfor %}
                                {% endblock %}
                                {% block caret %}
                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-sm-md',
                                        data: {
                                            name: 'caret-down',
                                        },
                                    } only %}

                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-lg-xxl',
                                        data: {
                                            name: 'double-chevrons',
                                        },
                                    } only %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    </div>
                </div>
                <div class=\"{{ config.name }}__col {{ config.name }}__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"{{ config.name }}__col col is-hidden-sm-md\">
                            {{ 'catalog.filter.sort' | trans }}:
                        </div>

                        <div class=\"{{ config.name }}__col col col col--sm-12 col--lg-auto\">
                            {% embed molecule('custom-select') with {
                                modifiers: ['small', 'light', 'mobile-expand', 'different-mob-caret'],
                                attributes: {
                                    name: 'sort',
                                    'config-theme': 'small',
                                },
                                embed: {
                                    sort: _view.sort,
                                    parentJsName: data.parentJsName,
                                },
                            } only %}
                                {% block selectClass %}
                                    {{ parent() }} {{ embed.parentJsName }}__sort-trigger
                                {% endblock %}
                                {% block options %}
                                    <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>
                                    {% for sortParamName in embed.sort.sortParamNames %}
                                        <option value=\"{{ sortParamName }}\" {% if sortParamName == embed.sort.currentSortParam %}selected{% endif %}>{{ ('catalog.sort.' ~ sortParamName) | trans }}</option>
                                    {% endfor %}
                                {% endblock %}
                                {% block caret %}
                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-sm-md',
                                        data: {
                                            name: 'caret-down',
                                        },
                                    } only %}

                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-lg-xxl',
                                        data: {
                                            name: 'double-chevrons',
                                        },
                                    } only %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% include molecule('breakpoint-dependent-block-placer') with {
        attributes: {
            'block-class-name': config.jsName ~ '__filter-grid',
        },
    } only %}
{% endblock %}
", "@CatalogPage/components/molecules/sort/sort.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}


/* @CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_98c2ae8fa3ca0b5f739f8afed440b72b___202804625 extends Template
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
            'caret' => [$this, 'block_caret'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 18
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("custom-select"), "@CatalogPage/components/molecules/sort/sort.twig", 18);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CatalogPage/components/molecules/sort/sort.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CatalogPage/components/molecules/sort/sort.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_selectClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selectClass"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selectClass"));

        // line 30
        echo "                                    ";
        $this->displayParentBlock("selectClass", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 30, $this->source); })()), "parentJsName", [], "any", false, false, false, 30), "html", null, true);
        echo "__sort-trigger
                                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 32
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "options"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "options"));

        // line 33
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 33, $this->source); })()), "pagination", [], "any", false, false, false, 33), "config", [], "any", false, false, false, 33), "validItemsPerPageOptions", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            // line 34
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
            echo "\" ";
            if (($context["limit"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 34, $this->source); })()), "pagination", [], "any", false, false, false, 34), "currentItemsPerPage", [], "any", false, false, false, 34))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getFilter('executeFilterIfExists')->getCallable()($context["limit"], "formatInt", twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "locale", [], "any", false, false, false, 34)), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 37
    public function block_caret($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "caret"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "caret"));

        // line 38
        echo "                                    ";
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@CatalogPage/components/molecules/sort/sort.twig", 38)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39) . "__caret is-hidden-sm-md"), "data" => ["name" => "caret-down"]]));
        // line 44
        echo "
                                    ";
        // line 45
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@CatalogPage/components/molecules/sort/sort.twig", 45)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 46
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46) . "__caret is-hidden-lg-xxl"), "data" => ["name" => "double-chevrons"]]));
        // line 51
        echo "                                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/sort/sort.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 51,  430 => 46,  429 => 45,  426 => 44,  424 => 39,  422 => 38,  412 => 37,  402 => 36,  387 => 34,  382 => 33,  372 => 32,  357 => 30,  347 => 29,  325 => 18,  161 => 108,  160 => 106,  151 => 99,  149 => 71,  148 => 70,  147 => 63,  143 => 62,  137 => 59,  133 => 58,  126 => 56,  121 => 53,  119 => 26,  118 => 25,  117 => 18,  113 => 17,  107 => 14,  103 => 13,  96 => 11,  90 => 10,  84 => 9,  76 => 6,  70 => 5,  67 => 4,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('sort', '@SprykerShop:CatalogPage') %}

{% block body %}
    <div class=\"grid grid--middle grid--justify\">
        <div class=\"{{ config.name }}__col {{ config.name }}__col--counter col\">
            {{ _view.pagination.numFound | default(0) | executeFilterIfExists('formatInt', app.locale) }} {{ 'catalog.itemsFound' | trans }}
        </div>

        <div class=\"col {{ config.name }}__col {{ config.name }}__col--filters is-hidden-sm-md\">
            <div class=\"grid grid--middle {{ config.name }}__filter-grid {{ config.jsName }}__filter-grid\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"768\">
                <div class=\"{{ config.name }}__col {{ config.name }}__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"{{ config.name }}__col col is-hidden-sm-md\">
                            {{ 'catalog.filter.per' | trans }}:
                        </div>

                        <div class=\"{{ config.name }}__col col col col--sm-12 col--lg-auto\">
                            {% embed molecule('custom-select') with {
                                modifiers: ['small', 'light', 'mobile-expand', 'different-mob-caret'],
                                attributes: {
                                    name: 'ipp',
                                    'config-theme': 'small',
                                },
                                embed: {
                                    pagination: _view.pagination,
                                    parentJsName: data.parentJsName,
                                },
                            } only %}
                                {% block selectClass %}
                                    {{ parent() }} {{ embed.parentJsName }}__sort-trigger
                                {% endblock %}
                                {% block options %}
                                    {% for limit in embed.pagination.config.validItemsPerPageOptions %}
                                        <option value=\"{{ limit }}\" {% if limit == embed.pagination.currentItemsPerPage %}selected{% endif %}>{{ limit | executeFilterIfExists('formatInt', app.locale) }}</option>
                                    {% endfor %}
                                {% endblock %}
                                {% block caret %}
                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-sm-md',
                                        data: {
                                            name: 'caret-down',
                                        },
                                    } only %}

                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-lg-xxl',
                                        data: {
                                            name: 'double-chevrons',
                                        },
                                    } only %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    </div>
                </div>
                <div class=\"{{ config.name }}__col {{ config.name }}__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"{{ config.name }}__col col is-hidden-sm-md\">
                            {{ 'catalog.filter.sort' | trans }}:
                        </div>

                        <div class=\"{{ config.name }}__col col col col--sm-12 col--lg-auto\">
                            {% embed molecule('custom-select') with {
                                modifiers: ['small', 'light', 'mobile-expand', 'different-mob-caret'],
                                attributes: {
                                    name: 'sort',
                                    'config-theme': 'small',
                                },
                                embed: {
                                    sort: _view.sort,
                                    parentJsName: data.parentJsName,
                                },
                            } only %}
                                {% block selectClass %}
                                    {{ parent() }} {{ embed.parentJsName }}__sort-trigger
                                {% endblock %}
                                {% block options %}
                                    <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>
                                    {% for sortParamName in embed.sort.sortParamNames %}
                                        <option value=\"{{ sortParamName }}\" {% if sortParamName == embed.sort.currentSortParam %}selected{% endif %}>{{ ('catalog.sort.' ~ sortParamName) | trans }}</option>
                                    {% endfor %}
                                {% endblock %}
                                {% block caret %}
                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-sm-md',
                                        data: {
                                            name: 'caret-down',
                                        },
                                    } only %}

                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-lg-xxl',
                                        data: {
                                            name: 'double-chevrons',
                                        },
                                    } only %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% include molecule('breakpoint-dependent-block-placer') with {
        attributes: {
            'block-class-name': config.jsName ~ '__filter-grid',
        },
    } only %}
{% endblock %}
", "@CatalogPage/components/molecules/sort/sort.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}


/* @CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_98c2ae8fa3ca0b5f739f8afed440b72b___212300652 extends Template
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
            'caret' => [$this, 'block_caret'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 63
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("custom-select"), "@CatalogPage/components/molecules/sort/sort.twig", 63);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CatalogPage/components/molecules/sort/sort.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CatalogPage/components/molecules/sort/sort.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_selectClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selectClass"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "selectClass"));

        // line 75
        echo "                                    ";
        $this->displayParentBlock("selectClass", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 75, $this->source); })()), "parentJsName", [], "any", false, false, false, 75), "html", null, true);
        echo "__sort-trigger
                                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 77
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "options"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "options"));

        // line 78
        echo "                                    <option value=\"\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.sort.relevance"), "html", null, true);
        echo "</option>
                                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 79, $this->source); })()), "sort", [], "any", false, false, false, 79), "sortParamNames", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["sortParamName"]) {
            // line 80
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["sortParamName"], "html", null, true);
            echo "\" ";
            if (($context["sortParamName"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 80, $this->source); })()), "sort", [], "any", false, false, false, 80), "currentSortParam", [], "any", false, false, false, 80))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("catalog.sort." . $context["sortParamName"])), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortParamName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 83
    public function block_caret($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "caret"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "caret"));

        // line 84
        echo "                                    ";
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@CatalogPage/components/molecules/sort/sort.twig", 84)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 85
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85) . "__caret is-hidden-sm-md"), "data" => ["name" => "caret-down"]]));
        // line 90
        echo "
                                    ";
        // line 91
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@CatalogPage/components/molecules/sort/sort.twig", 91)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 92
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 92, $this->source); })()), "name", [], "any", false, false, false, 92) . "__caret is-hidden-lg-xxl"), "data" => ["name" => "double-chevrons"]]));
        // line 97
        echo "                                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/sort/sort.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  707 => 97,  705 => 92,  704 => 91,  701 => 90,  699 => 85,  697 => 84,  687 => 83,  677 => 82,  662 => 80,  658 => 79,  653 => 78,  643 => 77,  628 => 75,  618 => 74,  596 => 63,  432 => 51,  430 => 46,  429 => 45,  426 => 44,  424 => 39,  422 => 38,  412 => 37,  402 => 36,  387 => 34,  382 => 33,  372 => 32,  357 => 30,  347 => 29,  325 => 18,  161 => 108,  160 => 106,  151 => 99,  149 => 71,  148 => 70,  147 => 63,  143 => 62,  137 => 59,  133 => 58,  126 => 56,  121 => 53,  119 => 26,  118 => 25,  117 => 18,  113 => 17,  107 => 14,  103 => 13,  96 => 11,  90 => 10,  84 => 9,  76 => 6,  70 => 5,  67 => 4,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('sort', '@SprykerShop:CatalogPage') %}

{% block body %}
    <div class=\"grid grid--middle grid--justify\">
        <div class=\"{{ config.name }}__col {{ config.name }}__col--counter col\">
            {{ _view.pagination.numFound | default(0) | executeFilterIfExists('formatInt', app.locale) }} {{ 'catalog.itemsFound' | trans }}
        </div>

        <div class=\"col {{ config.name }}__col {{ config.name }}__col--filters is-hidden-sm-md\">
            <div class=\"grid grid--middle {{ config.name }}__filter-grid {{ config.jsName }}__filter-grid\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"768\">
                <div class=\"{{ config.name }}__col {{ config.name }}__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"{{ config.name }}__col col is-hidden-sm-md\">
                            {{ 'catalog.filter.per' | trans }}:
                        </div>

                        <div class=\"{{ config.name }}__col col col col--sm-12 col--lg-auto\">
                            {% embed molecule('custom-select') with {
                                modifiers: ['small', 'light', 'mobile-expand', 'different-mob-caret'],
                                attributes: {
                                    name: 'ipp',
                                    'config-theme': 'small',
                                },
                                embed: {
                                    pagination: _view.pagination,
                                    parentJsName: data.parentJsName,
                                },
                            } only %}
                                {% block selectClass %}
                                    {{ parent() }} {{ embed.parentJsName }}__sort-trigger
                                {% endblock %}
                                {% block options %}
                                    {% for limit in embed.pagination.config.validItemsPerPageOptions %}
                                        <option value=\"{{ limit }}\" {% if limit == embed.pagination.currentItemsPerPage %}selected{% endif %}>{{ limit | executeFilterIfExists('formatInt', app.locale) }}</option>
                                    {% endfor %}
                                {% endblock %}
                                {% block caret %}
                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-sm-md',
                                        data: {
                                            name: 'caret-down',
                                        },
                                    } only %}

                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-lg-xxl',
                                        data: {
                                            name: 'double-chevrons',
                                        },
                                    } only %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    </div>
                </div>
                <div class=\"{{ config.name }}__col {{ config.name }}__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"{{ config.name }}__col col is-hidden-sm-md\">
                            {{ 'catalog.filter.sort' | trans }}:
                        </div>

                        <div class=\"{{ config.name }}__col col col col--sm-12 col--lg-auto\">
                            {% embed molecule('custom-select') with {
                                modifiers: ['small', 'light', 'mobile-expand', 'different-mob-caret'],
                                attributes: {
                                    name: 'sort',
                                    'config-theme': 'small',
                                },
                                embed: {
                                    sort: _view.sort,
                                    parentJsName: data.parentJsName,
                                },
                            } only %}
                                {% block selectClass %}
                                    {{ parent() }} {{ embed.parentJsName }}__sort-trigger
                                {% endblock %}
                                {% block options %}
                                    <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>
                                    {% for sortParamName in embed.sort.sortParamNames %}
                                        <option value=\"{{ sortParamName }}\" {% if sortParamName == embed.sort.currentSortParam %}selected{% endif %}>{{ ('catalog.sort.' ~ sortParamName) | trans }}</option>
                                    {% endfor %}
                                {% endblock %}
                                {% block caret %}
                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-sm-md',
                                        data: {
                                            name: 'caret-down',
                                        },
                                    } only %}

                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-lg-xxl',
                                        data: {
                                            name: 'double-chevrons',
                                        },
                                    } only %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% include molecule('breakpoint-dependent-block-placer') with {
        attributes: {
            'block-class-name': config.jsName ~ '__filter-grid',
        },
    } only %}
{% endblock %}
", "@CatalogPage/components/molecules/sort/sort.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}
