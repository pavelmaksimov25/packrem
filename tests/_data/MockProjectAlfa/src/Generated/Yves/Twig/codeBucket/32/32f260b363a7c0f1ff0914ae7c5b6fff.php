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

/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_e89a6adec401a3360e6add45231c4c0a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'headScripts' => [$this, 'block_headScripts'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
            'form' => [$this, 'block_form'],
            'filterBar' => [$this, 'block_filterBar'],
            'noResults' => [$this, 'block_noResults'],
            'footerScripts' => [$this, 'block_footerScripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("page-critical-path"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig"));

        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["products" =>         // line 4
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 4, $this->source); })()), "facets" =>         // line 5
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 5, $this->source); })()), "filteredFacets" => [], "category" => null, "categories" => [], "categoryId" => null, "filterPath" => null, "viewMode" => null, "isEmptyCategoryFilterValueVisible" => null, "sort" => twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 13, $this->source); })()), "sort", [], "any", false, false, false, 13), "pagination" => ["currentPage" =>         // line 15
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 15, $this->source); })()), "maxPage" =>         // line 16
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 16, $this->source); })()), "parameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "all", [], "method", false, false, false, 17), "paginationPath" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "getPathInfo", [], "method", false, false, false, 18), "showAlwaysFirstAndLast" => true, "numFound" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 20, $this->source); })()), "pagination", [], "any", false, false, false, 20), "numFound", [], "any", false, false, false, 20), "config" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 21, $this->source); })()), "pagination", [], "any", false, false, false, 21), "config", [], "any", false, false, false, 21), "currentItemsPerPage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 22, $this->source); })()), "pagination", [], "any", false, false, false, 22), "currentItemsPerPage", [], "any", false, false, false, 22)], "numberFormatConfig" => ((twig_get_attribute($this->env, $this->source,         // line 24
($context["_view"] ?? null), "numberFormatConfig", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "numberFormatConfig", [], "any", false, false, false, 24), [])) : ([]))], $context['data']);        // line 27
        $context["numberFormatConfig"] = [];
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "numberFormatConfig", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 29
            $context["numberFormatConfig"] = twig_array_merge((isset($context["numberFormatConfig"]) || array_key_exists("numberFormatConfig", $context) ? $context["numberFormatConfig"] : (function () { throw new RuntimeError('Variable "numberFormatConfig" does not exist.', 29, $this->source); })()), [twig_replace_filter($context["key"], ["_symbol" => "", "_" => "-"]) => $context["value"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_headScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headScripts"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headScripts"));

        // line 53
        echo "    ";
        $this->displayParentBlock("headScripts", $context, $blocks);
        echo "

    ";
        // line 55
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", [0 => "catalog-header"])) {
            $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 55, 1525729493)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 59
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 60
        echo "    ";
        $macros["self"] = $this;
        // line 61
        echo "
    ";
        // line 62
        $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 62, "1191176302")->display(twig_to_array(["embed" => ["breadcrumbs" => twig_call_macro($macros["self"], "macro_renderBreadcrumbSteps", [twig_get_attribute($this->env, $this->source,         // line 64
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "category", [], "any", false, false, false, 64), true, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "filterPath", [], "any", false, false, false, 64)], 64, $context, $this->getSourceContext())]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 73
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 74
        echo "    ";
        $context["catalogJsName"] = "js-catalog";
        // line 75
        echo "
    ";
        // line 76
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("window-location-applicator", "CatalogPage"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 76)->display(twig_to_array(["attributes" => ["form-class-name" => (        // line 78
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 78, $this->source); })()) . "__form"), "trigger-class-name" => (        // line 79
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 79, $this->source); })()) . "__trigger")]]));
        // line 82
        echo "
    <form method=\"GET\" class=\"grid ";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "__form\" data-init-default-value-form>
        ";
        // line 84
        $this->displayBlock('form', $context, $blocks);
        // line 163
        echo "    </form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 84
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 85
        echo "            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                ";
        // line 86
        $this->displayBlock('filterBar', $context, $blocks);
        // line 118
        echo "            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                ";
        // line 121
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("sort", "CatalogPage"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 121)->display(twig_to_array(["class" => "box", "data" => ["pagination" => twig_get_attribute($this->env, $this->source,         // line 124
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 124, $this->source); })()), "pagination", [], "any", false, false, false, 124), "sort" => twig_get_attribute($this->env, $this->source,         // line 125
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 125, $this->source); })()), "sort", [], "any", false, false, false, 125), "parentJsName" =>         // line 126
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 126, $this->source); })())]]));
        // line 129
        echo "
                ";
        // line 130
        $this->loadTemplate($this->env->getFunction('organism')->getCallable()("active-filter-section", "CatalogPage"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 130)->display(twig_to_array(["class" => "spacing-top spacing-top--big", "data" => ["facets" => twig_get_attribute($this->env, $this->source,         // line 133
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 133, $this->source); })()), "facets", [], "any", false, false, false, 133), "filteredFacets" => twig_get_attribute($this->env, $this->source,         // line 134
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 134, $this->source); })()), "filteredFacets", [], "any", false, false, false, 134)]]));
        // line 137
        echo "
                ";
        // line 138
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("pagination"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 138)->display(twig_to_array(["class" => "box spacing-top spacing-top--big", "data" => twig_get_attribute($this->env, $this->source,         // line 140
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 140, $this->source); })()), "pagination", [], "any", false, false, false, 140)]));
        // line 142
        echo "
                <div class=\"grid grid--stretch\">
                    ";
        // line 144
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 144, $this->source); })()), "products", [], "any", false, false, false, 144)) {
            // line 145
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 145, $this->source); })()), "products", [], "any", false, false, false, 145));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 146
                echo "                            ";
                if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CatalogPageProductWidget", [0 => $context["product"], 1 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 146, $this->source); })()), "viewMode", [], "any", false, false, false, 146)])) {
                    $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 146, 1777659535)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                    $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
                } elseif ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductWidgetPlugin", [0 =>                 // line 147
$context["product"], 1 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 147, $this->source); })()), "viewMode", [], "any", false, false, false, 147)])) {
                    $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 146, 2090156978)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                    $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
                }                // line 149
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                    ";
        } else {
            // line 151
            echo "                        ";
            $this->displayBlock('noResults', $context, $blocks);
            // line 154
            echo "                    ";
        }
        // line 155
        echo "                </div>

                ";
        // line 157
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("pagination"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 157)->display(twig_to_array(["class" => "box", "data" => twig_get_attribute($this->env, $this->source,         // line 159
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 159, $this->source); })()), "pagination", [], "any", false, false, false, 159)]));
        // line 161
        echo "            </div>
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 86
    public function block_filterBar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filterBar"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filterBar"));

        // line 87
        echo "                    ";
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("view-mode-switch", "CatalogPage"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 87)->display(twig_to_array(["class" => "box"]));
        // line 90
        echo "
                    ";
        // line 91
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("toggler-checkbox"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 91)->display(twig_to_array(["modifiers" => [0 => "expand"], "class" => "box spacing-top spacing-top--big is-hidden-lg-xl", "data" => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.show_hide_button")], "attributes" => ["target-class-name" => "js-catalog__filters-toggle", "class-to-toggle" => "is-hidden-sm-md", "checked" => true]]));
        // line 103
        echo "
                    ";
        // line 104
        $this->loadTemplate($this->env->getFunction('organism')->getCallable()("filter-section", "CatalogPage"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 104)->display(twig_to_array(["class" => "box spacing-top spacing-top--big js-catalog__filters-toggle", "data" => ["facets" => twig_get_attribute($this->env, $this->source,         // line 107
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 107, $this->source); })()), "facets", [], "any", false, false, false, 107), "filteredFacets" => twig_get_attribute($this->env, $this->source,         // line 108
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 108, $this->source); })()), "filteredFacets", [], "any", false, false, false, 108), "filterPath" => twig_get_attribute($this->env, $this->source,         // line 109
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "filterPath", [], "any", false, false, false, 109), "categories" => twig_get_attribute($this->env, $this->source,         // line 110
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 110, $this->source); })()), "categories", [], "any", false, false, false, 110), "category" => twig_get_attribute($this->env, $this->source,         // line 111
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 111, $this->source); })()), "category", [], "any", false, false, false, 111), "isEmptyCategoryFilterValueVisible" => twig_get_attribute($this->env, $this->source,         // line 112
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()), "isEmptyCategoryFilterValueVisible", [], "any", false, false, false, 112), "parentJsName" =>         // line 113
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 113, $this->source); })()), "numberFormatConfig" =>         // line 114
(isset($context["numberFormatConfig"]) || array_key_exists("numberFormatConfig", $context) ? $context["numberFormatConfig"] : (function () { throw new RuntimeError('Variable "numberFormatConfig" does not exist.', 114, $this->source); })())]]));
        // line 117
        echo "                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 151
    public function block_noResults($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "noResults"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "noResults"));

        // line 152
        echo "                            <div class=\"col col--sm-12 text-center\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.no-results"), "html", null, true);
        echo "</div>
                        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 166
    public function block_footerScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerScripts"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footerScripts"));

        // line 167
        echo "    ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", [0 => "catalog-footer"])) {
            $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 167, 44674602)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 169
        echo "
    ";
        // line 170
        $this->displayParentBlock("footerScripts", $context, $blocks);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 32
    public function macro_renderBreadcrumbSteps($__categoryNode__ = null, $__isLastLeaf__ = null, $__filterPath__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "categoryNode" => $__categoryNode__,
            "isLastLeaf" => $__isLastLeaf__,
            "filterPath" => $__filterPath__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderBreadcrumbSteps"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderBreadcrumbSteps"));

            // line 33
            echo "    ";
            $macros["self"] = $this;
            // line 34
            echo "    ";
            $context["categoryUrl"] = ((twig_get_attribute($this->env, $this->source, ($context["categoryNode"] ?? null), "url", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["categoryNode"] ?? null), "url", [], "any", false, false, false, 34))) : (""));
            // line 35
            echo "    ";
            $context["categoryUrl"] = (( !twig_test_empty((isset($context["filterPath"]) || array_key_exists("filterPath", $context) ? $context["filterPath"] : (function () { throw new RuntimeError('Variable "filterPath" does not exist.', 35, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl((isset($context["filterPath"]) || array_key_exists("filterPath", $context) ? $context["filterPath"] : (function () { throw new RuntimeError('Variable "filterPath" does not exist.', 35, $this->source); })()), ["categoryPath" => $this->env->getFilter('trimLocale')->getCallable()((isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 35, $this->source); })()))])) : ((isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 35, $this->source); })())));
            // line 36
            echo "    ";
            $context["categoryLabel"] = ((twig_get_attribute($this->env, $this->source, ($context["categoryNode"] ?? null), "name", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["categoryNode"] ?? null), "name", [], "any", false, false, false, 36))) : (""));
            // line 37
            echo "    ";
            $context["categoryPatrentNodes"] = ((twig_get_attribute($this->env, $this->source, ($context["categoryNode"] ?? null), "parents", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["categoryNode"] ?? null), "parents", [], "any", false, false, false, 37))) : (""));
            // line 38
            echo "
    ";
            // line 39
            if ( !twig_test_empty((isset($context["categoryPatrentNodes"]) || array_key_exists("categoryPatrentNodes", $context) ? $context["categoryPatrentNodes"] : (function () { throw new RuntimeError('Variable "categoryPatrentNodes" does not exist.', 39, $this->source); })()))) {
                // line 40
                echo "        ";
                echo twig_call_macro($macros["self"], "macro_renderBreadcrumbSteps", [twig_first($this->env, (isset($context["categoryPatrentNodes"]) || array_key_exists("categoryPatrentNodes", $context) ? $context["categoryPatrentNodes"] : (function () { throw new RuntimeError('Variable "categoryPatrentNodes" does not exist.', 40, $this->source); })())), false, (isset($context["filterPath"]) || array_key_exists("filterPath", $context) ? $context["filterPath"] : (function () { throw new RuntimeError('Variable "filterPath" does not exist.', 40, $this->source); })())], 40, $context, $this->getSourceContext());
                echo "

        ";
                // line 42
                $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("breadcrumb-step"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 42)->display(twig_to_array(["data" => ["url" =>                 // line 44
(isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 44, $this->source); })()), "label" =>                 // line 45
(isset($context["categoryLabel"]) || array_key_exists("categoryLabel", $context) ? $context["categoryLabel"] : (function () { throw new RuntimeError('Variable "categoryLabel" does not exist.', 45, $this->source); })()), "withChevron" =>  !                // line 46
(isset($context["isLastLeaf"]) || array_key_exists("isLastLeaf", $context) ? $context["isLastLeaf"] : (function () { throw new RuntimeError('Variable "isLastLeaf" does not exist.', 46, $this->source); })())]]));
                // line 49
                echo "    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 49,  418 => 46,  417 => 45,  416 => 44,  415 => 42,  409 => 40,  407 => 39,  404 => 38,  401 => 37,  398 => 36,  395 => 35,  392 => 34,  389 => 33,  368 => 32,  356 => 170,  353 => 169,  348 => 167,  338 => 166,  325 => 152,  315 => 151,  305 => 117,  303 => 114,  302 => 113,  301 => 112,  300 => 111,  299 => 110,  298 => 109,  297 => 108,  296 => 107,  295 => 104,  292 => 103,  290 => 91,  287 => 90,  284 => 87,  274 => 86,  263 => 161,  261 => 159,  260 => 157,  256 => 155,  253 => 154,  250 => 151,  247 => 150,  241 => 149,  237 => 147,  232 => 146,  227 => 145,  225 => 144,  221 => 142,  219 => 140,  218 => 138,  215 => 137,  213 => 134,  212 => 133,  211 => 130,  208 => 129,  206 => 126,  205 => 125,  204 => 124,  203 => 121,  198 => 118,  196 => 86,  193 => 85,  183 => 84,  172 => 163,  170 => 84,  166 => 83,  163 => 82,  161 => 79,  160 => 78,  159 => 76,  156 => 75,  153 => 74,  143 => 73,  133 => 64,  132 => 62,  129 => 61,  126 => 60,  116 => 59,  104 => 55,  98 => 53,  88 => 52,  78 => 1,  72 => 29,  68 => 28,  66 => 27,  65 => 24,  64 => 22,  63 => 21,  62 => 20,  61 => 18,  60 => 17,  59 => 16,  58 => 15,  57 => 13,  56 => 5,  55 => 4,  54 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound,
        config: _view.pagination.config,
        currentItemsPerPage: _view.pagination.currentItemsPerPage,
    },
    numberFormatConfig: _view.numberFormatConfig | default({}),
} %}

{% set numberFormatConfig = {} %}
{% for key, value in data.numberFormatConfig %}
    {% set numberFormatConfig = numberFormatConfig | merge ({ (key | replace({'_symbol': '', '_': '-'})): value }) %}
{% endfor %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                            numberFormatConfig: numberFormatConfig,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_e89a6adec401a3360e6add45231c4c0a___1525729493 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 55
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 55, $this->source); })()), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 55);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  647 => 55,  420 => 49,  418 => 46,  417 => 45,  416 => 44,  415 => 42,  409 => 40,  407 => 39,  404 => 38,  401 => 37,  398 => 36,  395 => 35,  392 => 34,  389 => 33,  368 => 32,  356 => 170,  353 => 169,  348 => 167,  338 => 166,  325 => 152,  315 => 151,  305 => 117,  303 => 114,  302 => 113,  301 => 112,  300 => 111,  299 => 110,  298 => 109,  297 => 108,  296 => 107,  295 => 104,  292 => 103,  290 => 91,  287 => 90,  284 => 87,  274 => 86,  263 => 161,  261 => 159,  260 => 157,  256 => 155,  253 => 154,  250 => 151,  247 => 150,  241 => 149,  237 => 147,  232 => 146,  227 => 145,  225 => 144,  221 => 142,  219 => 140,  218 => 138,  215 => 137,  213 => 134,  212 => 133,  211 => 130,  208 => 129,  206 => 126,  205 => 125,  204 => 124,  203 => 121,  198 => 118,  196 => 86,  193 => 85,  183 => 84,  172 => 163,  170 => 84,  166 => 83,  163 => 82,  161 => 79,  160 => 78,  159 => 76,  156 => 75,  153 => 74,  143 => 73,  133 => 64,  132 => 62,  129 => 61,  126 => 60,  116 => 59,  104 => 55,  98 => 53,  88 => 52,  78 => 1,  72 => 29,  68 => 28,  66 => 27,  65 => 24,  64 => 22,  63 => 21,  62 => 20,  61 => 18,  60 => 17,  59 => 16,  58 => 15,  57 => 13,  56 => 5,  55 => 4,  54 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound,
        config: _view.pagination.config,
        currentItemsPerPage: _view.pagination.currentItemsPerPage,
    },
    numberFormatConfig: _view.numberFormatConfig | default({}),
} %}

{% set numberFormatConfig = {} %}
{% for key, value in data.numberFormatConfig %}
    {% set numberFormatConfig = numberFormatConfig | merge ({ (key | replace({'_symbol': '', '_': '-'})): value }) %}
{% endfor %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                            numberFormatConfig: numberFormatConfig,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_e89a6adec401a3360e6add45231c4c0a___1191176302 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 62
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("breadcrumb"), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 62);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 68
        echo "            ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 68, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 68), "html", null, true);
        echo "
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  913 => 68,  903 => 67,  881 => 62,  647 => 55,  420 => 49,  418 => 46,  417 => 45,  416 => 44,  415 => 42,  409 => 40,  407 => 39,  404 => 38,  401 => 37,  398 => 36,  395 => 35,  392 => 34,  389 => 33,  368 => 32,  356 => 170,  353 => 169,  348 => 167,  338 => 166,  325 => 152,  315 => 151,  305 => 117,  303 => 114,  302 => 113,  301 => 112,  300 => 111,  299 => 110,  298 => 109,  297 => 108,  296 => 107,  295 => 104,  292 => 103,  290 => 91,  287 => 90,  284 => 87,  274 => 86,  263 => 161,  261 => 159,  260 => 157,  256 => 155,  253 => 154,  250 => 151,  247 => 150,  241 => 149,  237 => 147,  232 => 146,  227 => 145,  225 => 144,  221 => 142,  219 => 140,  218 => 138,  215 => 137,  213 => 134,  212 => 133,  211 => 130,  208 => 129,  206 => 126,  205 => 125,  204 => 124,  203 => 121,  198 => 118,  196 => 86,  193 => 85,  183 => 84,  172 => 163,  170 => 84,  166 => 83,  163 => 82,  161 => 79,  160 => 78,  159 => 76,  156 => 75,  153 => 74,  143 => 73,  133 => 64,  132 => 62,  129 => 61,  126 => 60,  116 => 59,  104 => 55,  98 => 53,  88 => 52,  78 => 1,  72 => 29,  68 => 28,  66 => 27,  65 => 24,  64 => 22,  63 => 21,  62 => 20,  61 => 18,  60 => 17,  59 => 16,  58 => 15,  57 => 13,  56 => 5,  55 => 4,  54 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound,
        config: _view.pagination.config,
        currentItemsPerPage: _view.pagination.currentItemsPerPage,
    },
    numberFormatConfig: _view.numberFormatConfig | default({}),
} %}

{% set numberFormatConfig = {} %}
{% for key, value in data.numberFormatConfig %}
    {% set numberFormatConfig = numberFormatConfig | merge ({ (key | replace({'_symbol': '', '_': '-'})): value }) %}
{% endfor %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                            numberFormatConfig: numberFormatConfig,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_e89a6adec401a3360e6add45231c4c0a___1777659535 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 146
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 146, $this->source); })()), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 146);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1137 => 146,  913 => 68,  903 => 67,  881 => 62,  647 => 55,  420 => 49,  418 => 46,  417 => 45,  416 => 44,  415 => 42,  409 => 40,  407 => 39,  404 => 38,  401 => 37,  398 => 36,  395 => 35,  392 => 34,  389 => 33,  368 => 32,  356 => 170,  353 => 169,  348 => 167,  338 => 166,  325 => 152,  315 => 151,  305 => 117,  303 => 114,  302 => 113,  301 => 112,  300 => 111,  299 => 110,  298 => 109,  297 => 108,  296 => 107,  295 => 104,  292 => 103,  290 => 91,  287 => 90,  284 => 87,  274 => 86,  263 => 161,  261 => 159,  260 => 157,  256 => 155,  253 => 154,  250 => 151,  247 => 150,  241 => 149,  237 => 147,  232 => 146,  227 => 145,  225 => 144,  221 => 142,  219 => 140,  218 => 138,  215 => 137,  213 => 134,  212 => 133,  211 => 130,  208 => 129,  206 => 126,  205 => 125,  204 => 124,  203 => 121,  198 => 118,  196 => 86,  193 => 85,  183 => 84,  172 => 163,  170 => 84,  166 => 83,  163 => 82,  161 => 79,  160 => 78,  159 => 76,  156 => 75,  153 => 74,  143 => 73,  133 => 64,  132 => 62,  129 => 61,  126 => 60,  116 => 59,  104 => 55,  98 => 53,  88 => 52,  78 => 1,  72 => 29,  68 => 28,  66 => 27,  65 => 24,  64 => 22,  63 => 21,  62 => 20,  61 => 18,  60 => 17,  59 => 16,  58 => 15,  57 => 13,  56 => 5,  55 => 4,  54 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound,
        config: _view.pagination.config,
        currentItemsPerPage: _view.pagination.currentItemsPerPage,
    },
    numberFormatConfig: _view.numberFormatConfig | default({}),
} %}

{% set numberFormatConfig = {} %}
{% for key, value in data.numberFormatConfig %}
    {% set numberFormatConfig = numberFormatConfig | merge ({ (key | replace({'_symbol': '', '_': '-'})): value }) %}
{% endfor %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                            numberFormatConfig: numberFormatConfig,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_e89a6adec401a3360e6add45231c4c0a___2090156978 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 146, $this->source); })()), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 146);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1137 => 146,  913 => 68,  903 => 67,  881 => 62,  647 => 55,  420 => 49,  418 => 46,  417 => 45,  416 => 44,  415 => 42,  409 => 40,  407 => 39,  404 => 38,  401 => 37,  398 => 36,  395 => 35,  392 => 34,  389 => 33,  368 => 32,  356 => 170,  353 => 169,  348 => 167,  338 => 166,  325 => 152,  315 => 151,  305 => 117,  303 => 114,  302 => 113,  301 => 112,  300 => 111,  299 => 110,  298 => 109,  297 => 108,  296 => 107,  295 => 104,  292 => 103,  290 => 91,  287 => 90,  284 => 87,  274 => 86,  263 => 161,  261 => 159,  260 => 157,  256 => 155,  253 => 154,  250 => 151,  247 => 150,  241 => 149,  237 => 147,  232 => 146,  227 => 145,  225 => 144,  221 => 142,  219 => 140,  218 => 138,  215 => 137,  213 => 134,  212 => 133,  211 => 130,  208 => 129,  206 => 126,  205 => 125,  204 => 124,  203 => 121,  198 => 118,  196 => 86,  193 => 85,  183 => 84,  172 => 163,  170 => 84,  166 => 83,  163 => 82,  161 => 79,  160 => 78,  159 => 76,  156 => 75,  153 => 74,  143 => 73,  133 => 64,  132 => 62,  129 => 61,  126 => 60,  116 => 59,  104 => 55,  98 => 53,  88 => 52,  78 => 1,  72 => 29,  68 => 28,  66 => 27,  65 => 24,  64 => 22,  63 => 21,  62 => 20,  61 => 18,  60 => 17,  59 => 16,  58 => 15,  57 => 13,  56 => 5,  55 => 4,  54 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound,
        config: _view.pagination.config,
        currentItemsPerPage: _view.pagination.currentItemsPerPage,
    },
    numberFormatConfig: _view.numberFormatConfig | default({}),
} %}

{% set numberFormatConfig = {} %}
{% for key, value in data.numberFormatConfig %}
    {% set numberFormatConfig = numberFormatConfig | merge ({ (key | replace({'_symbol': '', '_': '-'})): value }) %}
{% endfor %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                            numberFormatConfig: numberFormatConfig,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_e89a6adec401a3360e6add45231c4c0a___44674602 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 167
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 167, $this->source); })()), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 167);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1602 => 167,  1137 => 146,  913 => 68,  903 => 67,  881 => 62,  647 => 55,  420 => 49,  418 => 46,  417 => 45,  416 => 44,  415 => 42,  409 => 40,  407 => 39,  404 => 38,  401 => 37,  398 => 36,  395 => 35,  392 => 34,  389 => 33,  368 => 32,  356 => 170,  353 => 169,  348 => 167,  338 => 166,  325 => 152,  315 => 151,  305 => 117,  303 => 114,  302 => 113,  301 => 112,  300 => 111,  299 => 110,  298 => 109,  297 => 108,  296 => 107,  295 => 104,  292 => 103,  290 => 91,  287 => 90,  284 => 87,  274 => 86,  263 => 161,  261 => 159,  260 => 157,  256 => 155,  253 => 154,  250 => 151,  247 => 150,  241 => 149,  237 => 147,  232 => 146,  227 => 145,  225 => 144,  221 => 142,  219 => 140,  218 => 138,  215 => 137,  213 => 134,  212 => 133,  211 => 130,  208 => 129,  206 => 126,  205 => 125,  204 => 124,  203 => 121,  198 => 118,  196 => 86,  193 => 85,  183 => 84,  172 => 163,  170 => 84,  166 => 83,  163 => 82,  161 => 79,  160 => 78,  159 => 76,  156 => 75,  153 => 74,  143 => 73,  133 => 64,  132 => 62,  129 => 61,  126 => 60,  116 => 59,  104 => 55,  98 => 53,  88 => 52,  78 => 1,  72 => 29,  68 => 28,  66 => 27,  65 => 24,  64 => 22,  63 => 21,  62 => 20,  61 => 18,  60 => 17,  59 => 16,  58 => 15,  57 => 13,  56 => 5,  55 => 4,  54 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound,
        config: _view.pagination.config,
        currentItemsPerPage: _view.pagination.currentItemsPerPage,
    },
    numberFormatConfig: _view.numberFormatConfig | default({}),
} %}

{% set numberFormatConfig = {} %}
{% for key, value in data.numberFormatConfig %}
    {% set numberFormatConfig = numberFormatConfig | merge ({ (key | replace({'_symbol': '', '_': '-'})): value }) %}
{% endfor %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                            numberFormatConfig: numberFormatConfig,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}
