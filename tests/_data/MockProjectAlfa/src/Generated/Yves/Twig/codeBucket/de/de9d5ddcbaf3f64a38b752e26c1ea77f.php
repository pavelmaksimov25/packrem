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

/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_2d1fce2f16f735a5bc1cbf568e32520d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'close' => [$this, 'block_close'],
            'topBlock' => [$this, 'block_topBlock'],
            'navigation' => [$this, 'block_navigation'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "side-drawer", "tag" => "side-drawer"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["trigger-class-name" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "container-class-name" => "", "locked-body-class-name" => "is-locked-tablet"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "__overlay ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 15, $this->source); })()), "trigger-class-name", [], "array", false, false, false, 15), "html", null, true);
        echo "\"></div>

    <aside class=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "__drawer ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "__drawer--logged";
        }
        echo "\">
        ";
        // line 18
        $this->displayBlock('close', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('topBlock', $context, $blocks);
        // line 71
        echo "
        <div class=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), "html", null, true);
        echo "__holder\">
            <div class=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73), "html", null, true);
        echo "__navigation\">
                ";
        // line 74
        $this->displayBlock('navigation', $context, $blocks);
        // line 77
        echo "            </div>

            <div class=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 79, $this->source); })()), "name", [], "any", false, false, false, 79), "html", null, true);
        echo "__info\">
                <a href=\"tel:";
        // line 80
        echo twig_escape_filter($this->env, twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.phone.number"), [" " => ""]), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 80, $this->source); })()), "name", [], "any", false, false, false, 80), "html", null, true);
        echo "__contact\">
                    <span class=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 81, $this->source); })()), "name", [], "any", false, false, false, 81), "html", null, true);
        echo "__contact-icon\">
                        ";
        // line 82
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 82)->display(twig_to_array(["modifiers" => [0 => "bigger"], "data" => ["name" => "cell-phone"]]));
        // line 88
        echo "                    </span>
                    <span class=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), "html", null, true);
        echo "__contact-text ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), "html", null, true);
        echo "__contact-text--weight\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.contact_us"), "html", null, true);
        echo ":</span>
                    <span class=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 90, $this->source); })()), "name", [], "any", false, false, false, 90), "html", null, true);
        echo "__contact-text\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.phone.number"), "html", null, true);
        echo "</span>
                </a>
                ";
        // line 92
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 93
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
            echo "\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.logout"), "html", null, true);
            echo "</a>
                ";
        }
        // line 95
        echo "            </div>
        </div>
    </aside>
";
    }

    // line 18
    public function block_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "            <button class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "__close ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 19, $this->source); })()), "trigger-class-name", [], "array", false, false, false, 19), "html", null, true);
        echo "\">
                ";
        // line 20
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 20)->display(twig_to_array(["data" => ["name" => "cross"]]));
        // line 25
        echo "            </button>
        ";
    }

    // line 28
    public function block_topBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            <div class=\"grid grid--gap-smaller ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "__navigation-top\">
                ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 31
            echo "                    <div class=\"col ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "__navigation-top-actions\">
                        ";
            // line 32
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("PriceModeSwitcherWidget")) {
                $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 32, 555975781)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 33
            echo "                    </div>
                    <div class=\"col ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "__navigation-top-actions\">
                        ";
            // line 35
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CurrencyWidget")) {
                $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 35, 1960431719)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 36
            echo "                    </div>
                    <div class=\"col ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
            echo "__navigation-top-actions\">
                        ";
            // line 38
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("LanguageSwitcherWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "pathInfo", [], "any", false, false, false, 38), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "queryString", [], "any", false, false, false, 38), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "requestUri", [], "any", false, false, false, 38)])) {
                $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 38, 1137596479)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 39
            echo "                    </div>

                    ";
            // line 41
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("StoreSwitcher")) {
                $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 41, 1855308114)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["embed" => ["configName" => twig_get_attribute($this->env, $this->source,                 // line 43
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43)]]));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 52
            echo "                ";
        } else {
            // line 53
            echo "                    <div class=\"col col--sm-4 ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), "html", null, true);
            echo "__navigation-top-actions\">
                        ";
            // line 54
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("LanguageSwitcherWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "pathInfo", [], "any", false, false, false, 54), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "queryString", [], "any", false, false, false, 54), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "requestUri", [], "any", false, false, false, 54)])) {
                $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 54, 968494241)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 55
            echo "                    </div>

                    ";
            // line 57
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("StoreSwitcher")) {
                $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 57, 303938824)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["embed" => ["configName" => twig_get_attribute($this->env, $this->source,                 // line 59
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59)]]));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 68
            echo "                ";
        }
        // line 69
        echo "            </div>
        ";
    }

    // line 74
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                    ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("NavigationWidget", [0 => "MAIN_NAVIGATION", 1 => "navigation-main"])) {
            $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 75, 999249005)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 76
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 76,  251 => 75,  247 => 74,  242 => 69,  239 => 68,  236 => 59,  234 => 57,  230 => 55,  226 => 54,  221 => 53,  218 => 52,  215 => 43,  213 => 41,  209 => 39,  205 => 38,  201 => 37,  198 => 36,  194 => 35,  190 => 34,  187 => 33,  183 => 32,  178 => 31,  176 => 30,  171 => 29,  167 => 28,  162 => 25,  160 => 20,  153 => 19,  149 => 18,  142 => 95,  134 => 93,  132 => 92,  125 => 90,  117 => 89,  114 => 88,  112 => 82,  108 => 81,  102 => 80,  98 => 79,  94 => 77,  92 => 74,  88 => 73,  84 => 72,  81 => 71,  79 => 28,  76 => 27,  74 => 18,  64 => 17,  56 => 15,  52 => 14,  48 => 1,  47 => 9,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'container-class-name': '',
    'locked-body-class-name': 'is-locked-tablet',
} %}

{% block body %}
    <div class=\"{{ config.name }}__overlay {{ attributes['trigger-class-name'] }}\"></div>

    <aside class=\"{{ config.name }}__drawer {% if is_granted('ROLE_USER') %} {{ config.name }}__drawer--logged{% endif %}\">
        {% block close %}
            <button class=\"{{ config.name }}__close {{ attributes['trigger-class-name'] }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'cross',
                    },
                } only %}
            </button>
        {% endblock %}

        {% block topBlock %}
            <div class=\"grid grid--gap-smaller {{ config.name }}__navigation-top\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'CurrencyWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% else %}
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col col--sm-4 {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% endif %}
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__holder\">
            <div class=\"{{ config.name }}__navigation\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>

            <div class=\"{{ config.name }}__info\">
                <a href=\"tel:{{ 'global.phone.number' | trans | replace({' ': ''}) }}\" class=\"{{ config.name }}__contact\">
                    <span class=\"{{ config.name }}__contact-icon\">
                        {% include atom('icon') with {
                            modifiers: ['bigger'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                    </span>
                    <span class=\"{{ config.name }}__contact-text {{ config.name }}__contact-text--weight\">{{ 'global.contact_us' | trans }}:</span>
                    <span class=\"{{ config.name }}__contact-text\">{{ 'global.phone.number' | trans}}</span>
                </a>
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% endif %}
            </div>
        </div>
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_2d1fce2f16f735a5bc1cbf568e32520d___555975781 extends Template
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
        // line 32
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 32, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 32);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 32,  256 => 76,  251 => 75,  247 => 74,  242 => 69,  239 => 68,  236 => 59,  234 => 57,  230 => 55,  226 => 54,  221 => 53,  218 => 52,  215 => 43,  213 => 41,  209 => 39,  205 => 38,  201 => 37,  198 => 36,  194 => 35,  190 => 34,  187 => 33,  183 => 32,  178 => 31,  176 => 30,  171 => 29,  167 => 28,  162 => 25,  160 => 20,  153 => 19,  149 => 18,  142 => 95,  134 => 93,  132 => 92,  125 => 90,  117 => 89,  114 => 88,  112 => 82,  108 => 81,  102 => 80,  98 => 79,  94 => 77,  92 => 74,  88 => 73,  84 => 72,  81 => 71,  79 => 28,  76 => 27,  74 => 18,  64 => 17,  56 => 15,  52 => 14,  48 => 1,  47 => 9,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'container-class-name': '',
    'locked-body-class-name': 'is-locked-tablet',
} %}

{% block body %}
    <div class=\"{{ config.name }}__overlay {{ attributes['trigger-class-name'] }}\"></div>

    <aside class=\"{{ config.name }}__drawer {% if is_granted('ROLE_USER') %} {{ config.name }}__drawer--logged{% endif %}\">
        {% block close %}
            <button class=\"{{ config.name }}__close {{ attributes['trigger-class-name'] }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'cross',
                    },
                } only %}
            </button>
        {% endblock %}

        {% block topBlock %}
            <div class=\"grid grid--gap-smaller {{ config.name }}__navigation-top\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'CurrencyWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% else %}
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col col--sm-4 {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% endif %}
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__holder\">
            <div class=\"{{ config.name }}__navigation\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>

            <div class=\"{{ config.name }}__info\">
                <a href=\"tel:{{ 'global.phone.number' | trans | replace({' ': ''}) }}\" class=\"{{ config.name }}__contact\">
                    <span class=\"{{ config.name }}__contact-icon\">
                        {% include atom('icon') with {
                            modifiers: ['bigger'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                    </span>
                    <span class=\"{{ config.name }}__contact-text {{ config.name }}__contact-text--weight\">{{ 'global.contact_us' | trans }}:</span>
                    <span class=\"{{ config.name }}__contact-text\">{{ 'global.phone.number' | trans}}</span>
                </a>
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% endif %}
            </div>
        </div>
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_2d1fce2f16f735a5bc1cbf568e32520d___1960431719 extends Template
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
        // line 35
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 35, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 35);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 35,  398 => 32,  256 => 76,  251 => 75,  247 => 74,  242 => 69,  239 => 68,  236 => 59,  234 => 57,  230 => 55,  226 => 54,  221 => 53,  218 => 52,  215 => 43,  213 => 41,  209 => 39,  205 => 38,  201 => 37,  198 => 36,  194 => 35,  190 => 34,  187 => 33,  183 => 32,  178 => 31,  176 => 30,  171 => 29,  167 => 28,  162 => 25,  160 => 20,  153 => 19,  149 => 18,  142 => 95,  134 => 93,  132 => 92,  125 => 90,  117 => 89,  114 => 88,  112 => 82,  108 => 81,  102 => 80,  98 => 79,  94 => 77,  92 => 74,  88 => 73,  84 => 72,  81 => 71,  79 => 28,  76 => 27,  74 => 18,  64 => 17,  56 => 15,  52 => 14,  48 => 1,  47 => 9,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'container-class-name': '',
    'locked-body-class-name': 'is-locked-tablet',
} %}

{% block body %}
    <div class=\"{{ config.name }}__overlay {{ attributes['trigger-class-name'] }}\"></div>

    <aside class=\"{{ config.name }}__drawer {% if is_granted('ROLE_USER') %} {{ config.name }}__drawer--logged{% endif %}\">
        {% block close %}
            <button class=\"{{ config.name }}__close {{ attributes['trigger-class-name'] }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'cross',
                    },
                } only %}
            </button>
        {% endblock %}

        {% block topBlock %}
            <div class=\"grid grid--gap-smaller {{ config.name }}__navigation-top\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'CurrencyWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% else %}
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col col--sm-4 {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% endif %}
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__holder\">
            <div class=\"{{ config.name }}__navigation\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>

            <div class=\"{{ config.name }}__info\">
                <a href=\"tel:{{ 'global.phone.number' | trans | replace({' ': ''}) }}\" class=\"{{ config.name }}__contact\">
                    <span class=\"{{ config.name }}__contact-icon\">
                        {% include atom('icon') with {
                            modifiers: ['bigger'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                    </span>
                    <span class=\"{{ config.name }}__contact-text {{ config.name }}__contact-text--weight\">{{ 'global.contact_us' | trans }}:</span>
                    <span class=\"{{ config.name }}__contact-text\">{{ 'global.phone.number' | trans}}</span>
                </a>
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% endif %}
            </div>
        </div>
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_2d1fce2f16f735a5bc1cbf568e32520d___1137596479 extends Template
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
        // line 38
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 38, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 38);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  694 => 38,  546 => 35,  398 => 32,  256 => 76,  251 => 75,  247 => 74,  242 => 69,  239 => 68,  236 => 59,  234 => 57,  230 => 55,  226 => 54,  221 => 53,  218 => 52,  215 => 43,  213 => 41,  209 => 39,  205 => 38,  201 => 37,  198 => 36,  194 => 35,  190 => 34,  187 => 33,  183 => 32,  178 => 31,  176 => 30,  171 => 29,  167 => 28,  162 => 25,  160 => 20,  153 => 19,  149 => 18,  142 => 95,  134 => 93,  132 => 92,  125 => 90,  117 => 89,  114 => 88,  112 => 82,  108 => 81,  102 => 80,  98 => 79,  94 => 77,  92 => 74,  88 => 73,  84 => 72,  81 => 71,  79 => 28,  76 => 27,  74 => 18,  64 => 17,  56 => 15,  52 => 14,  48 => 1,  47 => 9,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'container-class-name': '',
    'locked-body-class-name': 'is-locked-tablet',
} %}

{% block body %}
    <div class=\"{{ config.name }}__overlay {{ attributes['trigger-class-name'] }}\"></div>

    <aside class=\"{{ config.name }}__drawer {% if is_granted('ROLE_USER') %} {{ config.name }}__drawer--logged{% endif %}\">
        {% block close %}
            <button class=\"{{ config.name }}__close {{ attributes['trigger-class-name'] }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'cross',
                    },
                } only %}
            </button>
        {% endblock %}

        {% block topBlock %}
            <div class=\"grid grid--gap-smaller {{ config.name }}__navigation-top\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'CurrencyWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% else %}
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col col--sm-4 {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% endif %}
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__holder\">
            <div class=\"{{ config.name }}__navigation\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>

            <div class=\"{{ config.name }}__info\">
                <a href=\"tel:{{ 'global.phone.number' | trans | replace({' ': ''}) }}\" class=\"{{ config.name }}__contact\">
                    <span class=\"{{ config.name }}__contact-icon\">
                        {% include atom('icon') with {
                            modifiers: ['bigger'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                    </span>
                    <span class=\"{{ config.name }}__contact-text {{ config.name }}__contact-text--weight\">{{ 'global.contact_us' | trans }}:</span>
                    <span class=\"{{ config.name }}__contact-text\">{{ 'global.phone.number' | trans}}</span>
                </a>
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% endif %}
            </div>
        </div>
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_2d1fce2f16f735a5bc1cbf568e32520d___1855308114 extends Template
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
        // line 41
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 41, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 41);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                            <div class=\"col ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 47, $this->source); })()), "configName", [], "any", false, false, false, 47), "html", null, true);
        echo "__navigation-top-actions\">
                                ";
        // line 48
        $this->displayParentBlock("body", $context, $blocks);
        echo "
                            </div>
                        ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  862 => 48,  857 => 47,  853 => 46,  843 => 41,  694 => 38,  546 => 35,  398 => 32,  256 => 76,  251 => 75,  247 => 74,  242 => 69,  239 => 68,  236 => 59,  234 => 57,  230 => 55,  226 => 54,  221 => 53,  218 => 52,  215 => 43,  213 => 41,  209 => 39,  205 => 38,  201 => 37,  198 => 36,  194 => 35,  190 => 34,  187 => 33,  183 => 32,  178 => 31,  176 => 30,  171 => 29,  167 => 28,  162 => 25,  160 => 20,  153 => 19,  149 => 18,  142 => 95,  134 => 93,  132 => 92,  125 => 90,  117 => 89,  114 => 88,  112 => 82,  108 => 81,  102 => 80,  98 => 79,  94 => 77,  92 => 74,  88 => 73,  84 => 72,  81 => 71,  79 => 28,  76 => 27,  74 => 18,  64 => 17,  56 => 15,  52 => 14,  48 => 1,  47 => 9,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'container-class-name': '',
    'locked-body-class-name': 'is-locked-tablet',
} %}

{% block body %}
    <div class=\"{{ config.name }}__overlay {{ attributes['trigger-class-name'] }}\"></div>

    <aside class=\"{{ config.name }}__drawer {% if is_granted('ROLE_USER') %} {{ config.name }}__drawer--logged{% endif %}\">
        {% block close %}
            <button class=\"{{ config.name }}__close {{ attributes['trigger-class-name'] }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'cross',
                    },
                } only %}
            </button>
        {% endblock %}

        {% block topBlock %}
            <div class=\"grid grid--gap-smaller {{ config.name }}__navigation-top\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'CurrencyWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% else %}
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col col--sm-4 {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% endif %}
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__holder\">
            <div class=\"{{ config.name }}__navigation\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>

            <div class=\"{{ config.name }}__info\">
                <a href=\"tel:{{ 'global.phone.number' | trans | replace({' ': ''}) }}\" class=\"{{ config.name }}__contact\">
                    <span class=\"{{ config.name }}__contact-icon\">
                        {% include atom('icon') with {
                            modifiers: ['bigger'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                    </span>
                    <span class=\"{{ config.name }}__contact-text {{ config.name }}__contact-text--weight\">{{ 'global.contact_us' | trans }}:</span>
                    <span class=\"{{ config.name }}__contact-text\">{{ 'global.phone.number' | trans}}</span>
                </a>
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% endif %}
            </div>
        </div>
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_2d1fce2f16f735a5bc1cbf568e32520d___968494241 extends Template
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
        // line 54
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 54, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 54);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1007 => 54,  862 => 48,  857 => 47,  853 => 46,  843 => 41,  694 => 38,  546 => 35,  398 => 32,  256 => 76,  251 => 75,  247 => 74,  242 => 69,  239 => 68,  236 => 59,  234 => 57,  230 => 55,  226 => 54,  221 => 53,  218 => 52,  215 => 43,  213 => 41,  209 => 39,  205 => 38,  201 => 37,  198 => 36,  194 => 35,  190 => 34,  187 => 33,  183 => 32,  178 => 31,  176 => 30,  171 => 29,  167 => 28,  162 => 25,  160 => 20,  153 => 19,  149 => 18,  142 => 95,  134 => 93,  132 => 92,  125 => 90,  117 => 89,  114 => 88,  112 => 82,  108 => 81,  102 => 80,  98 => 79,  94 => 77,  92 => 74,  88 => 73,  84 => 72,  81 => 71,  79 => 28,  76 => 27,  74 => 18,  64 => 17,  56 => 15,  52 => 14,  48 => 1,  47 => 9,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'container-class-name': '',
    'locked-body-class-name': 'is-locked-tablet',
} %}

{% block body %}
    <div class=\"{{ config.name }}__overlay {{ attributes['trigger-class-name'] }}\"></div>

    <aside class=\"{{ config.name }}__drawer {% if is_granted('ROLE_USER') %} {{ config.name }}__drawer--logged{% endif %}\">
        {% block close %}
            <button class=\"{{ config.name }}__close {{ attributes['trigger-class-name'] }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'cross',
                    },
                } only %}
            </button>
        {% endblock %}

        {% block topBlock %}
            <div class=\"grid grid--gap-smaller {{ config.name }}__navigation-top\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'CurrencyWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% else %}
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col col--sm-4 {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% endif %}
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__holder\">
            <div class=\"{{ config.name }}__navigation\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>

            <div class=\"{{ config.name }}__info\">
                <a href=\"tel:{{ 'global.phone.number' | trans | replace({' ': ''}) }}\" class=\"{{ config.name }}__contact\">
                    <span class=\"{{ config.name }}__contact-icon\">
                        {% include atom('icon') with {
                            modifiers: ['bigger'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                    </span>
                    <span class=\"{{ config.name }}__contact-text {{ config.name }}__contact-text--weight\">{{ 'global.contact_us' | trans }}:</span>
                    <span class=\"{{ config.name }}__contact-text\">{{ 'global.phone.number' | trans}}</span>
                </a>
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% endif %}
            </div>
        </div>
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_2d1fce2f16f735a5bc1cbf568e32520d___303938824 extends Template
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
        // line 57
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 57, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 57);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                            <div class=\"col col--sm-4 ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 63, $this->source); })()), "configName", [], "any", false, false, false, 63), "html", null, true);
        echo "__navigation-top-actions\">
                                ";
        // line 64
        $this->displayParentBlock("body", $context, $blocks);
        echo "
                            </div>
                        ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1175 => 64,  1170 => 63,  1166 => 62,  1156 => 57,  1007 => 54,  862 => 48,  857 => 47,  853 => 46,  843 => 41,  694 => 38,  546 => 35,  398 => 32,  256 => 76,  251 => 75,  247 => 74,  242 => 69,  239 => 68,  236 => 59,  234 => 57,  230 => 55,  226 => 54,  221 => 53,  218 => 52,  215 => 43,  213 => 41,  209 => 39,  205 => 38,  201 => 37,  198 => 36,  194 => 35,  190 => 34,  187 => 33,  183 => 32,  178 => 31,  176 => 30,  171 => 29,  167 => 28,  162 => 25,  160 => 20,  153 => 19,  149 => 18,  142 => 95,  134 => 93,  132 => 92,  125 => 90,  117 => 89,  114 => 88,  112 => 82,  108 => 81,  102 => 80,  98 => 79,  94 => 77,  92 => 74,  88 => 73,  84 => 72,  81 => 71,  79 => 28,  76 => 27,  74 => 18,  64 => 17,  56 => 15,  52 => 14,  48 => 1,  47 => 9,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'container-class-name': '',
    'locked-body-class-name': 'is-locked-tablet',
} %}

{% block body %}
    <div class=\"{{ config.name }}__overlay {{ attributes['trigger-class-name'] }}\"></div>

    <aside class=\"{{ config.name }}__drawer {% if is_granted('ROLE_USER') %} {{ config.name }}__drawer--logged{% endif %}\">
        {% block close %}
            <button class=\"{{ config.name }}__close {{ attributes['trigger-class-name'] }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'cross',
                    },
                } only %}
            </button>
        {% endblock %}

        {% block topBlock %}
            <div class=\"grid grid--gap-smaller {{ config.name }}__navigation-top\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'CurrencyWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% else %}
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col col--sm-4 {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% endif %}
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__holder\">
            <div class=\"{{ config.name }}__navigation\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>

            <div class=\"{{ config.name }}__info\">
                <a href=\"tel:{{ 'global.phone.number' | trans | replace({' ': ''}) }}\" class=\"{{ config.name }}__contact\">
                    <span class=\"{{ config.name }}__contact-icon\">
                        {% include atom('icon') with {
                            modifiers: ['bigger'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                    </span>
                    <span class=\"{{ config.name }}__contact-text {{ config.name }}__contact-text--weight\">{{ 'global.contact_us' | trans }}:</span>
                    <span class=\"{{ config.name }}__contact-text\">{{ 'global.phone.number' | trans}}</span>
                </a>
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% endif %}
            </div>
        </div>
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_2d1fce2f16f735a5bc1cbf568e32520d___999249005 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 75, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 75);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1320 => 75,  1175 => 64,  1170 => 63,  1166 => 62,  1156 => 57,  1007 => 54,  862 => 48,  857 => 47,  853 => 46,  843 => 41,  694 => 38,  546 => 35,  398 => 32,  256 => 76,  251 => 75,  247 => 74,  242 => 69,  239 => 68,  236 => 59,  234 => 57,  230 => 55,  226 => 54,  221 => 53,  218 => 52,  215 => 43,  213 => 41,  209 => 39,  205 => 38,  201 => 37,  198 => 36,  194 => 35,  190 => 34,  187 => 33,  183 => 32,  178 => 31,  176 => 30,  171 => 29,  167 => 28,  162 => 25,  160 => 20,  153 => 19,  149 => 18,  142 => 95,  134 => 93,  132 => 92,  125 => 90,  117 => 89,  114 => 88,  112 => 82,  108 => 81,  102 => 80,  98 => 79,  94 => 77,  92 => 74,  88 => 73,  84 => 72,  81 => 71,  79 => 28,  76 => 27,  74 => 18,  64 => 17,  56 => 15,  52 => 14,  48 => 1,  47 => 9,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'container-class-name': '',
    'locked-body-class-name': 'is-locked-tablet',
} %}

{% block body %}
    <div class=\"{{ config.name }}__overlay {{ attributes['trigger-class-name'] }}\"></div>

    <aside class=\"{{ config.name }}__drawer {% if is_granted('ROLE_USER') %} {{ config.name }}__drawer--logged{% endif %}\">
        {% block close %}
            <button class=\"{{ config.name }}__close {{ attributes['trigger-class-name'] }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'cross',
                    },
                } only %}
            </button>
        {% endblock %}

        {% block topBlock %}
            <div class=\"grid grid--gap-smaller {{ config.name }}__navigation-top\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'CurrencyWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% else %}
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>

                    {% widget 'StoreSwitcher' with {
                        embed: {
                            configName: config.name,
                        },
                    } only %}
                        {% block body %}
                            <div class=\"col col--sm-4 {{ embed.configName }}__navigation-top-actions\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    {% endwidget %}
                {% endif %}
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__holder\">
            <div class=\"{{ config.name }}__navigation\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>

            <div class=\"{{ config.name }}__info\">
                <a href=\"tel:{{ 'global.phone.number' | trans | replace({' ': ''}) }}\" class=\"{{ config.name }}__contact\">
                    <span class=\"{{ config.name }}__contact-icon\">
                        {% include atom('icon') with {
                            modifiers: ['bigger'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                    </span>
                    <span class=\"{{ config.name }}__contact-text {{ config.name }}__contact-text--weight\">{{ 'global.contact_us' | trans }}:</span>
                    <span class=\"{{ config.name }}__contact-text\">{{ 'global.phone.number' | trans}}</span>
                </a>
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% endif %}
            </div>
        </div>
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}
