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

/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_c8a827cebe99c78149d40ac302bbd92d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'template' => [$this, 'block_template'],
            'meta' => [$this, 'block_meta'],
            'metaTitle' => [$this, 'block_metaTitle'],
            'metaDescription' => [$this, 'block_metaDescription'],
            'metaKeywords' => [$this, 'block_metaKeywords'],
            'headStyles' => [$this, 'block_headStyles'],
            'nonCriticalStyles' => [$this, 'block_nonCriticalStyles'],
            'headScripts' => [$this, 'block_headScripts'],
            'esmHeadScripts' => [$this, 'block_esmHeadScripts'],
            'legacyHeadScripts' => [$this, 'block_legacyHeadScripts'],
            'headTitle' => [$this, 'block_headTitle'],
            'class' => [$this, 'block_class'],
            'attributes' => [$this, 'block_attributes'],
            'footerScripts' => [$this, 'block_footerScripts'],
            'esmFooterScripts' => [$this, 'block_esmFooterScripts'],
            'legacyFooterScripts' => [$this, 'block_legacyFooterScripts'],
            'styleLazyLoader' => [$this, 'block_styleLazyLoader'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("template"), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["locale" => twig_slice($this->env, twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "locale", [], "any", false, false, false, 4), 0, 2), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.spryker.shop"), "metaTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.spryker.shop"), "metaDescription" => "", "metaKeywords" => "", "hasCookies" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "cookies", [], "any", false, false, false, 9), "get", [0 => "last-visit"], "method", false, false, false, 9), "appLocale" => twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "locale", [], "any", false, false, false, 10)], $context['data']);        // line 14
        $context["isNewFrontendBuildSupported"] = false;
        // line 15
        $context["isCssLazyLoadSupported"] = false;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_template($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <!doctype html>
    <html lang=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "locale", [], "any", false, false, false, 19), "html", null, true);
        echo "\" data-locale=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "appLocale", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
        <head>
            ";
        // line 21
        $this->displayBlock('meta', $context, $blocks);
        // line 29
        echo "
            ";
        // line 30
        $this->displayBlock('headStyles', $context, $blocks);
        // line 41
        echo "
            ";
        // line 42
        $this->displayBlock('headScripts', $context, $blocks);
        // line 54
        echo "
            <title>";
        // line 55
        $this->displayBlock('headTitle', $context, $blocks);
        echo "</title>
        </head>
        <body";
        // line 57
        if ( !twig_test_empty(        $this->renderBlock("class", $context, $blocks))) {
            echo " class=\"";
            $this->displayBlock('class', $context, $blocks);
            echo "\"";
        }
        // line 58
        $this->displayBlock('attributes', $context, $blocks);
        echo ">

            ";
        // line 60
        $this->displayParentBlock("template", $context, $blocks);
        echo "

            ";
        // line 62
        $this->displayBlock('footerScripts', $context, $blocks);
        // line 77
        echo "        </body>
    </html>
";
    }

    // line 21
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"";
        // line 24
        $this->displayBlock('metaTitle', $context, $blocks);
        echo "\">
                <meta name=\"description\" content=\"";
        // line 25
        $this->displayBlock('metaDescription', $context, $blocks);
        echo "\">
                <meta name=\"keywords\" content=\"";
        // line 26
        $this->displayBlock('metaKeywords', $context, $blocks);
        echo "\">
                <meta name=\"generator\" content=\"spryker\">
            ";
    }

    // line 24
    public function block_metaTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "metaTitle", [], "any", false, false, false, 24), "html", null, true);
    }

    // line 25
    public function block_metaDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "metaDescription", [], "any", false, false, false, 25), "html", null, true);
    }

    // line 26
    public function block_metaKeywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "metaKeywords", [], "any", false, false, false, 26), "html", null, true);
    }

    // line 30
    public function block_headStyles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                ";
        if ((isset($context["isCssLazyLoadSupported"]) || array_key_exists("isCssLazyLoadSupported", $context) ? $context["isCssLazyLoadSupported"] : (function () { throw new RuntimeError('Variable "isCssLazyLoadSupported" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('publicPath')->getCallable()("css/yves_default.critical.css"), "html", null, true);
            echo "\">

                    ";
            // line 34
            $this->displayBlock('nonCriticalStyles', $context, $blocks);
            // line 37
            echo "                ";
        } else {
            // line 38
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('publicPath')->getCallable()("css/yves_default.app.css"), "html", null, true);
            echo "\">
                ";
        }
        // line 40
        echo "            ";
    }

    // line 34
    public function block_nonCriticalStyles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('publicPath')->getCallable()("css/yves_default.non-critical.css"), "html", null, true);
        echo "\">
                    ";
    }

    // line 42
    public function block_headScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", [0 => "header-top"])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 43, 1607387357)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 44
        echo "
                <script type=\"module\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getFunction('publicPath')->getCallable()("js/yves_default.runtime.js"), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>

                ";
        // line 48
        echo "                ";
        $this->displayBlock('esmHeadScripts', $context, $blocks);
        // line 49
        echo "                ";
        // line 50
        echo "                ";
        $this->displayBlock('legacyHeadScripts', $context, $blocks);
        // line 51
        echo "
                ";
        // line 52
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", [0 => "header"])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 52, 906089946)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 53
        echo "            ";
    }

    // line 48
    public function block_esmHeadScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 50
    public function block_legacyHeadScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 55
    public function block_headTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55), "html", null, true);
    }

    // line 57
    public function block_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 58
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo $this->env->getFunction('qa')->getCallable()([0 => "page"]);
        echo " ";
    }

    // line 62
    public function block_footerScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", [0 => "footer"])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 63, 2092192802)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 64
        echo "
                <script type=\"module\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getFunction('publicPath')->getCallable()("js/yves_default.vendor.js"), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
                <script type=\"module\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getFunction('publicPath')->getCallable()("js/yves_default.app.js"), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>

                ";
        // line 69
        echo "                ";
        $this->displayBlock('esmFooterScripts', $context, $blocks);
        // line 70
        echo "                ";
        // line 71
        echo "                ";
        $this->displayBlock('legacyFooterScripts', $context, $blocks);
        // line 73
        $this->displayBlock('styleLazyLoader', $context, $blocks);
        // line 75
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", [0 => "footer-bottom"])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 75, 196000864)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 76
        echo "            ";
    }

    // line 69
    public function block_esmFooterScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 71
    public function block_legacyFooterScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 73
    public function block_styleLazyLoader($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 73,  326 => 71,  320 => 69,  316 => 76,  312 => 75,  310 => 73,  307 => 71,  305 => 70,  302 => 69,  297 => 66,  293 => 65,  290 => 64,  285 => 63,  281 => 62,  272 => 58,  266 => 57,  259 => 55,  253 => 50,  247 => 48,  243 => 53,  239 => 52,  236 => 51,  233 => 50,  231 => 49,  228 => 48,  223 => 45,  220 => 44,  215 => 43,  211 => 42,  204 => 35,  200 => 34,  196 => 40,  190 => 38,  187 => 37,  185 => 34,  179 => 32,  176 => 31,  172 => 30,  165 => 26,  158 => 25,  151 => 24,  144 => 26,  140 => 25,  136 => 24,  132 => 22,  128 => 21,  122 => 77,  120 => 62,  115 => 60,  110 => 58,  104 => 57,  99 => 55,  96 => 54,  94 => 42,  91 => 41,  89 => 30,  86 => 29,  84 => 21,  77 => 19,  74 => 18,  70 => 17,  66 => 1,  64 => 15,  62 => 14,  61 => 10,  60 => 9,  59 => 4,  58 => 3,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
    appLocale: app.locale,
} %}

{# @deprecated variable \"isNewFrontendBuildSupported\" is deprecated #}
{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\" data-locale=\"{{ data.appLocale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmHeadScripts\" is deprecated #}
                {% block esmHeadScripts %}{% endblock %}
                {# @deprecated block \"legacyHeadScripts\" is deprecated #}
                {% block legacyHeadScripts %}{% endblock %}

                {% widget 'AssetWidget' args ['header'] only %}{% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmFooterScripts\" is deprecated #}
                {% block esmFooterScripts %}{% endblock %}
                {# @deprecated block \"legacyFooterScripts\" is deprecated #}
                {% block legacyFooterScripts %}{% endblock %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}{% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}


/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_c8a827cebe99c78149d40ac302bbd92d___1607387357 extends Template
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
        // line 43
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 43, $this->source); })()), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 43);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 43,  332 => 73,  326 => 71,  320 => 69,  316 => 76,  312 => 75,  310 => 73,  307 => 71,  305 => 70,  302 => 69,  297 => 66,  293 => 65,  290 => 64,  285 => 63,  281 => 62,  272 => 58,  266 => 57,  259 => 55,  253 => 50,  247 => 48,  243 => 53,  239 => 52,  236 => 51,  233 => 50,  231 => 49,  228 => 48,  223 => 45,  220 => 44,  215 => 43,  211 => 42,  204 => 35,  200 => 34,  196 => 40,  190 => 38,  187 => 37,  185 => 34,  179 => 32,  176 => 31,  172 => 30,  165 => 26,  158 => 25,  151 => 24,  144 => 26,  140 => 25,  136 => 24,  132 => 22,  128 => 21,  122 => 77,  120 => 62,  115 => 60,  110 => 58,  104 => 57,  99 => 55,  96 => 54,  94 => 42,  91 => 41,  89 => 30,  86 => 29,  84 => 21,  77 => 19,  74 => 18,  70 => 17,  66 => 1,  64 => 15,  62 => 14,  61 => 10,  60 => 9,  59 => 4,  58 => 3,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
    appLocale: app.locale,
} %}

{# @deprecated variable \"isNewFrontendBuildSupported\" is deprecated #}
{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\" data-locale=\"{{ data.appLocale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmHeadScripts\" is deprecated #}
                {% block esmHeadScripts %}{% endblock %}
                {# @deprecated block \"legacyHeadScripts\" is deprecated #}
                {% block legacyHeadScripts %}{% endblock %}

                {% widget 'AssetWidget' args ['header'] only %}{% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmFooterScripts\" is deprecated #}
                {% block esmFooterScripts %}{% endblock %}
                {# @deprecated block \"legacyFooterScripts\" is deprecated #}
                {% block legacyFooterScripts %}{% endblock %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}{% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}


/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_c8a827cebe99c78149d40ac302bbd92d___906089946 extends Template
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
        // line 52
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 52, $this->source); })()), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 52);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 52,  457 => 43,  332 => 73,  326 => 71,  320 => 69,  316 => 76,  312 => 75,  310 => 73,  307 => 71,  305 => 70,  302 => 69,  297 => 66,  293 => 65,  290 => 64,  285 => 63,  281 => 62,  272 => 58,  266 => 57,  259 => 55,  253 => 50,  247 => 48,  243 => 53,  239 => 52,  236 => 51,  233 => 50,  231 => 49,  228 => 48,  223 => 45,  220 => 44,  215 => 43,  211 => 42,  204 => 35,  200 => 34,  196 => 40,  190 => 38,  187 => 37,  185 => 34,  179 => 32,  176 => 31,  172 => 30,  165 => 26,  158 => 25,  151 => 24,  144 => 26,  140 => 25,  136 => 24,  132 => 22,  128 => 21,  122 => 77,  120 => 62,  115 => 60,  110 => 58,  104 => 57,  99 => 55,  96 => 54,  94 => 42,  91 => 41,  89 => 30,  86 => 29,  84 => 21,  77 => 19,  74 => 18,  70 => 17,  66 => 1,  64 => 15,  62 => 14,  61 => 10,  60 => 9,  59 => 4,  58 => 3,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
    appLocale: app.locale,
} %}

{# @deprecated variable \"isNewFrontendBuildSupported\" is deprecated #}
{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\" data-locale=\"{{ data.appLocale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmHeadScripts\" is deprecated #}
                {% block esmHeadScripts %}{% endblock %}
                {# @deprecated block \"legacyHeadScripts\" is deprecated #}
                {% block legacyHeadScripts %}{% endblock %}

                {% widget 'AssetWidget' args ['header'] only %}{% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmFooterScripts\" is deprecated #}
                {% block esmFooterScripts %}{% endblock %}
                {# @deprecated block \"legacyFooterScripts\" is deprecated #}
                {% block legacyFooterScripts %}{% endblock %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}{% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}


/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_c8a827cebe99c78149d40ac302bbd92d___2092192802 extends Template
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
        // line 63
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 63, $this->source); })()), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 63);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  715 => 63,  586 => 52,  457 => 43,  332 => 73,  326 => 71,  320 => 69,  316 => 76,  312 => 75,  310 => 73,  307 => 71,  305 => 70,  302 => 69,  297 => 66,  293 => 65,  290 => 64,  285 => 63,  281 => 62,  272 => 58,  266 => 57,  259 => 55,  253 => 50,  247 => 48,  243 => 53,  239 => 52,  236 => 51,  233 => 50,  231 => 49,  228 => 48,  223 => 45,  220 => 44,  215 => 43,  211 => 42,  204 => 35,  200 => 34,  196 => 40,  190 => 38,  187 => 37,  185 => 34,  179 => 32,  176 => 31,  172 => 30,  165 => 26,  158 => 25,  151 => 24,  144 => 26,  140 => 25,  136 => 24,  132 => 22,  128 => 21,  122 => 77,  120 => 62,  115 => 60,  110 => 58,  104 => 57,  99 => 55,  96 => 54,  94 => 42,  91 => 41,  89 => 30,  86 => 29,  84 => 21,  77 => 19,  74 => 18,  70 => 17,  66 => 1,  64 => 15,  62 => 14,  61 => 10,  60 => 9,  59 => 4,  58 => 3,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
    appLocale: app.locale,
} %}

{# @deprecated variable \"isNewFrontendBuildSupported\" is deprecated #}
{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\" data-locale=\"{{ data.appLocale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmHeadScripts\" is deprecated #}
                {% block esmHeadScripts %}{% endblock %}
                {# @deprecated block \"legacyHeadScripts\" is deprecated #}
                {% block legacyHeadScripts %}{% endblock %}

                {% widget 'AssetWidget' args ['header'] only %}{% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmFooterScripts\" is deprecated #}
                {% block esmFooterScripts %}{% endblock %}
                {# @deprecated block \"legacyFooterScripts\" is deprecated #}
                {% block legacyFooterScripts %}{% endblock %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}{% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}


/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_c8a827cebe99c78149d40ac302bbd92d___196000864 extends Template
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
        // line 75
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 75, $this->source); })()), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 75);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  844 => 75,  715 => 63,  586 => 52,  457 => 43,  332 => 73,  326 => 71,  320 => 69,  316 => 76,  312 => 75,  310 => 73,  307 => 71,  305 => 70,  302 => 69,  297 => 66,  293 => 65,  290 => 64,  285 => 63,  281 => 62,  272 => 58,  266 => 57,  259 => 55,  253 => 50,  247 => 48,  243 => 53,  239 => 52,  236 => 51,  233 => 50,  231 => 49,  228 => 48,  223 => 45,  220 => 44,  215 => 43,  211 => 42,  204 => 35,  200 => 34,  196 => 40,  190 => 38,  187 => 37,  185 => 34,  179 => 32,  176 => 31,  172 => 30,  165 => 26,  158 => 25,  151 => 24,  144 => 26,  140 => 25,  136 => 24,  132 => 22,  128 => 21,  122 => 77,  120 => 62,  115 => 60,  110 => 58,  104 => 57,  99 => 55,  96 => 54,  94 => 42,  91 => 41,  89 => 30,  86 => 29,  84 => 21,  77 => 19,  74 => 18,  70 => 17,  66 => 1,  64 => 15,  62 => 14,  61 => 10,  60 => 9,  59 => 4,  58 => 3,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
    appLocale: app.locale,
} %}

{# @deprecated variable \"isNewFrontendBuildSupported\" is deprecated #}
{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\" data-locale=\"{{ data.appLocale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmHeadScripts\" is deprecated #}
                {% block esmHeadScripts %}{% endblock %}
                {# @deprecated block \"legacyHeadScripts\" is deprecated #}
                {% block legacyHeadScripts %}{% endblock %}

                {% widget 'AssetWidget' args ['header'] only %}{% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}{% endwidget %}

                <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>

                {# @deprecated block \"esmFooterScripts\" is deprecated #}
                {% block esmFooterScripts %}{% endblock %}
                {# @deprecated block \"legacyFooterScripts\" is deprecated #}
                {% block legacyFooterScripts %}{% endblock %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}{% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}
