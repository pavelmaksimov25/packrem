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

/* @ShopUi/components/organisms/navigation-top/navigation-top.twig */
class __TwigTemplate_e643533276a154b907271bce3b8aaa95 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'benefit' => [$this, 'block_benefit'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/organisms/navigation-top/navigation-top.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/organisms/navigation-top/navigation-top.twig"));

        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-top", "tag" => "div"], $context['config']);        // line 8
        $context["benefits"] = [0 => "global.benefit.free_returns", 1 => "global.benefit.warranty", 2 => "global.benefit.competitive_prices"];
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_benefit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "benefit"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "benefit"));

        // line 15
        echo "    ";
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("panel-info-item"), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 15)->display(twig_to_array(["class" => "col", "data" => ["info" =>         // line 18
(isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 18, $this->source); })())]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["benefits"]) || array_key_exists("benefits", $context) ? $context["benefits"] : (function () { throw new RuntimeError('Variable "benefits" does not exist.', 25, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 26
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 26)) {
                // line 27
                echo "            ";
                $this->displayBlock("benefit", $context, $blocks);
                echo "
        ";
            } elseif ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 29
                echo "            ";
                $this->displayBlock("benefit", $context, $blocks);
                echo "
        ";
            }
            // line 31
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
    <ul class=\"col grid grid--nowrap grid--stretch navigation-top__actions\">
        <li class=\"col ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "__action-item ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "__action-item--tel\">
            ";
        // line 35
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 35)->display(twig_to_array(["modifiers" => [0 => "phone"], "data" => ["name" => "phone"]]));
        // line 41
        echo "            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.phone.number"), "html", null, true);
        echo "
        </li>

        ";
        // line 44
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeePricePermissionPlugin")) {
            // line 45
            echo "            <li class=\"col ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "__action-item\">
                ";
            // line 46
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("PriceModeSwitcherWidget")) {
                $this->loadTemplate("@ShopUi/components/organisms/navigation-top/navigation-top.twig", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 46, 2124753236)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 47
            echo "            </li>
            <li class=\"col ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true);
            echo "__action-item\">
                ";
            // line 49
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CurrencyWidget")) {
                $this->loadTemplate("@ShopUi/components/organisms/navigation-top/navigation-top.twig", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 49, 2099302549)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 50
            echo "            </li>
        ";
        }
        // line 52
        echo "
        <li class=\"col ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "__action-item\">
            ";
        // line 54
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("LanguageSwitcherWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "pathInfo", [], "any", false, false, false, 54), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "queryString", [], "any", false, false, false, 54), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "requestUri", [], "any", false, false, false, 54)])) {
            $this->loadTemplate("@ShopUi/components/organisms/navigation-top/navigation-top.twig", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 54, 1695700890)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 55
        echo "        </li>

        ";
        // line 57
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("StoreSwitcher")) {
            $this->loadTemplate("@ShopUi/components/organisms/navigation-top/navigation-top.twig", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 57, 753669256)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["embed" => ["configName" => twig_get_attribute($this->env, $this->source,             // line 59
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 68
        echo "
        ";
        // line 69
        $context["menuItemCompanyWidget"] = $this->env->getFunction('findWidget')->getCallable()("MenuItemCompanyWidget");
        // line 70
        echo "        ";
        $context["hasCompanyAccess"] = twig_get_attribute($this->env, $this->source, (isset($context["menuItemCompanyWidget"]) || array_key_exists("menuItemCompanyWidget", $context) ? $context["menuItemCompanyWidget"] : (function () { throw new RuntimeError('Variable "menuItemCompanyWidget" does not exist.', 70, $this->source); })()), "hasCompanyAccess", [], "any", false, false, false, 70);
        // line 71
        echo "
        ";
        // line 72
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (isset($context["hasCompanyAccess"]) || array_key_exists("hasCompanyAccess", $context) ? $context["hasCompanyAccess"] : (function () { throw new RuntimeError('Variable "hasCompanyAccess" does not exist.', 72, $this->source); })()))) {
            // line 73
            echo "            ";
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext((isset($context["menuItemCompanyWidget"]) || array_key_exists("menuItemCompanyWidget", $context) ? $context["menuItemCompanyWidget"] : (function () { throw new RuntimeError('Variable "menuItemCompanyWidget" does not exist.', 73, $this->source); })()))) {
                $this->loadTemplate("@ShopUi/components/organisms/navigation-top/navigation-top.twig", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 73, 1266698599)->display(array_merge($context, array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget))));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 80
            echo "        ";
        }
        // line 81
        echo "    </ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/navigation-top/navigation-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 81,  226 => 80,  221 => 73,  219 => 72,  216 => 71,  213 => 70,  211 => 69,  208 => 68,  205 => 59,  203 => 57,  199 => 55,  195 => 54,  191 => 53,  188 => 52,  184 => 50,  180 => 49,  176 => 48,  173 => 47,  169 => 46,  164 => 45,  162 => 44,  155 => 41,  153 => 35,  147 => 34,  143 => 32,  129 => 31,  123 => 29,  117 => 27,  114 => 26,  97 => 25,  94 => 24,  84 => 23,  74 => 18,  72 => 15,  62 => 14,  52 => 1,  50 => 8,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top',
    tag: 'div'
} %}

{% set benefits = [
    'global.benefit.free_returns',
    'global.benefit.warranty',
    'global.benefit.competitive_prices'
] %}

{% block benefit %}
    {% include molecule('panel-info-item') with {
        class: 'col',
        data: {
            info: text
        }
    } only %}
{% endblock %}

{% block body %}

    {% for text in benefits %}
        {% if not loop.last %}
            {{ block('benefit') }}
        {% elseif not is_granted('ROLE_USER') %}
            {{ block('benefit') }}
        {% endif %}
    {% endfor %}

    <ul class=\"col grid grid--nowrap grid--stretch navigation-top__actions\">
        <li class=\"col {{ config.name }}__action-item {{ config.name }}__action-item--tel\">
            {% include atom('icon') with {
                modifiers: ['phone'],
                data: {
                    name: 'phone'
                }
            } only %}
            {{ 'global.phone.number' | trans }}
        </li>

        {% if can('SeePricePermissionPlugin') %}
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
            </li>
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'CurrencyWidget' only %}{% endwidget %}
            </li>
        {% endif %}

        <li class=\"col {{ config.name }}__action-item\">
            {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
        </li>

        {% widget 'StoreSwitcher' with {
            embed: {
                configName: config.name,
            },
        } only %}
            {% block body %}
                <li class=\"col {{ embed.configName }}__action-item\">
                    {{ parent() }}
                </li>
            {% endblock %}
        {% endwidget %}

        {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
        {% set hasCompanyAccess = menuItemCompanyWidget.hasCompanyAccess %}

        {% if is_granted('ROLE_USER') and hasCompanyAccess %}
            {% widget menuItemCompanyWidget %}
                {% block template %}
                    <li class=\"col {{ config.name }}__action-item\">
                        {% apply spaceless %}{{ parent() }}{% endapply %}
                    </li>
                {% endblock %}
            {% endwidget %}
        {% endif %}
    </ul>
{% endblock %}
", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/navigation-top/navigation-top.twig");
    }
}


/* @ShopUi/components/organisms/navigation-top/navigation-top.twig */
class __TwigTemplate_e643533276a154b907271bce3b8aaa95___2124753236 extends Template
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
        // line 46
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 46, $this->source); })()), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 46);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/organisms/navigation-top/navigation-top.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/organisms/navigation-top/navigation-top.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/navigation-top/navigation-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 46,  229 => 81,  226 => 80,  221 => 73,  219 => 72,  216 => 71,  213 => 70,  211 => 69,  208 => 68,  205 => 59,  203 => 57,  199 => 55,  195 => 54,  191 => 53,  188 => 52,  184 => 50,  180 => 49,  176 => 48,  173 => 47,  169 => 46,  164 => 45,  162 => 44,  155 => 41,  153 => 35,  147 => 34,  143 => 32,  129 => 31,  123 => 29,  117 => 27,  114 => 26,  97 => 25,  94 => 24,  84 => 23,  74 => 18,  72 => 15,  62 => 14,  52 => 1,  50 => 8,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top',
    tag: 'div'
} %}

{% set benefits = [
    'global.benefit.free_returns',
    'global.benefit.warranty',
    'global.benefit.competitive_prices'
] %}

{% block benefit %}
    {% include molecule('panel-info-item') with {
        class: 'col',
        data: {
            info: text
        }
    } only %}
{% endblock %}

{% block body %}

    {% for text in benefits %}
        {% if not loop.last %}
            {{ block('benefit') }}
        {% elseif not is_granted('ROLE_USER') %}
            {{ block('benefit') }}
        {% endif %}
    {% endfor %}

    <ul class=\"col grid grid--nowrap grid--stretch navigation-top__actions\">
        <li class=\"col {{ config.name }}__action-item {{ config.name }}__action-item--tel\">
            {% include atom('icon') with {
                modifiers: ['phone'],
                data: {
                    name: 'phone'
                }
            } only %}
            {{ 'global.phone.number' | trans }}
        </li>

        {% if can('SeePricePermissionPlugin') %}
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
            </li>
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'CurrencyWidget' only %}{% endwidget %}
            </li>
        {% endif %}

        <li class=\"col {{ config.name }}__action-item\">
            {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
        </li>

        {% widget 'StoreSwitcher' with {
            embed: {
                configName: config.name,
            },
        } only %}
            {% block body %}
                <li class=\"col {{ embed.configName }}__action-item\">
                    {{ parent() }}
                </li>
            {% endblock %}
        {% endwidget %}

        {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
        {% set hasCompanyAccess = menuItemCompanyWidget.hasCompanyAccess %}

        {% if is_granted('ROLE_USER') and hasCompanyAccess %}
            {% widget menuItemCompanyWidget %}
                {% block template %}
                    <li class=\"col {{ config.name }}__action-item\">
                        {% apply spaceless %}{{ parent() }}{% endapply %}
                    </li>
                {% endblock %}
            {% endwidget %}
        {% endif %}
    </ul>
{% endblock %}
", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/navigation-top/navigation-top.twig");
    }
}


/* @ShopUi/components/organisms/navigation-top/navigation-top.twig */
class __TwigTemplate_e643533276a154b907271bce3b8aaa95___2099302549 extends Template
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
        // line 49
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 49, $this->source); })()), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 49);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/organisms/navigation-top/navigation-top.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/organisms/navigation-top/navigation-top.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/navigation-top/navigation-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 49,  362 => 46,  229 => 81,  226 => 80,  221 => 73,  219 => 72,  216 => 71,  213 => 70,  211 => 69,  208 => 68,  205 => 59,  203 => 57,  199 => 55,  195 => 54,  191 => 53,  188 => 52,  184 => 50,  180 => 49,  176 => 48,  173 => 47,  169 => 46,  164 => 45,  162 => 44,  155 => 41,  153 => 35,  147 => 34,  143 => 32,  129 => 31,  123 => 29,  117 => 27,  114 => 26,  97 => 25,  94 => 24,  84 => 23,  74 => 18,  72 => 15,  62 => 14,  52 => 1,  50 => 8,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top',
    tag: 'div'
} %}

{% set benefits = [
    'global.benefit.free_returns',
    'global.benefit.warranty',
    'global.benefit.competitive_prices'
] %}

{% block benefit %}
    {% include molecule('panel-info-item') with {
        class: 'col',
        data: {
            info: text
        }
    } only %}
{% endblock %}

{% block body %}

    {% for text in benefits %}
        {% if not loop.last %}
            {{ block('benefit') }}
        {% elseif not is_granted('ROLE_USER') %}
            {{ block('benefit') }}
        {% endif %}
    {% endfor %}

    <ul class=\"col grid grid--nowrap grid--stretch navigation-top__actions\">
        <li class=\"col {{ config.name }}__action-item {{ config.name }}__action-item--tel\">
            {% include atom('icon') with {
                modifiers: ['phone'],
                data: {
                    name: 'phone'
                }
            } only %}
            {{ 'global.phone.number' | trans }}
        </li>

        {% if can('SeePricePermissionPlugin') %}
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
            </li>
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'CurrencyWidget' only %}{% endwidget %}
            </li>
        {% endif %}

        <li class=\"col {{ config.name }}__action-item\">
            {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
        </li>

        {% widget 'StoreSwitcher' with {
            embed: {
                configName: config.name,
            },
        } only %}
            {% block body %}
                <li class=\"col {{ embed.configName }}__action-item\">
                    {{ parent() }}
                </li>
            {% endblock %}
        {% endwidget %}

        {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
        {% set hasCompanyAccess = menuItemCompanyWidget.hasCompanyAccess %}

        {% if is_granted('ROLE_USER') and hasCompanyAccess %}
            {% widget menuItemCompanyWidget %}
                {% block template %}
                    <li class=\"col {{ config.name }}__action-item\">
                        {% apply spaceless %}{{ parent() }}{% endapply %}
                    </li>
                {% endblock %}
            {% endwidget %}
        {% endif %}
    </ul>
{% endblock %}
", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/navigation-top/navigation-top.twig");
    }
}


/* @ShopUi/components/organisms/navigation-top/navigation-top.twig */
class __TwigTemplate_e643533276a154b907271bce3b8aaa95___1695700890 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 54, $this->source); })()), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 54);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/organisms/navigation-top/navigation-top.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/organisms/navigation-top/navigation-top.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/navigation-top/navigation-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 54,  506 => 49,  362 => 46,  229 => 81,  226 => 80,  221 => 73,  219 => 72,  216 => 71,  213 => 70,  211 => 69,  208 => 68,  205 => 59,  203 => 57,  199 => 55,  195 => 54,  191 => 53,  188 => 52,  184 => 50,  180 => 49,  176 => 48,  173 => 47,  169 => 46,  164 => 45,  162 => 44,  155 => 41,  153 => 35,  147 => 34,  143 => 32,  129 => 31,  123 => 29,  117 => 27,  114 => 26,  97 => 25,  94 => 24,  84 => 23,  74 => 18,  72 => 15,  62 => 14,  52 => 1,  50 => 8,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top',
    tag: 'div'
} %}

{% set benefits = [
    'global.benefit.free_returns',
    'global.benefit.warranty',
    'global.benefit.competitive_prices'
] %}

{% block benefit %}
    {% include molecule('panel-info-item') with {
        class: 'col',
        data: {
            info: text
        }
    } only %}
{% endblock %}

{% block body %}

    {% for text in benefits %}
        {% if not loop.last %}
            {{ block('benefit') }}
        {% elseif not is_granted('ROLE_USER') %}
            {{ block('benefit') }}
        {% endif %}
    {% endfor %}

    <ul class=\"col grid grid--nowrap grid--stretch navigation-top__actions\">
        <li class=\"col {{ config.name }}__action-item {{ config.name }}__action-item--tel\">
            {% include atom('icon') with {
                modifiers: ['phone'],
                data: {
                    name: 'phone'
                }
            } only %}
            {{ 'global.phone.number' | trans }}
        </li>

        {% if can('SeePricePermissionPlugin') %}
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
            </li>
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'CurrencyWidget' only %}{% endwidget %}
            </li>
        {% endif %}

        <li class=\"col {{ config.name }}__action-item\">
            {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
        </li>

        {% widget 'StoreSwitcher' with {
            embed: {
                configName: config.name,
            },
        } only %}
            {% block body %}
                <li class=\"col {{ embed.configName }}__action-item\">
                    {{ parent() }}
                </li>
            {% endblock %}
        {% endwidget %}

        {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
        {% set hasCompanyAccess = menuItemCompanyWidget.hasCompanyAccess %}

        {% if is_granted('ROLE_USER') and hasCompanyAccess %}
            {% widget menuItemCompanyWidget %}
                {% block template %}
                    <li class=\"col {{ config.name }}__action-item\">
                        {% apply spaceless %}{{ parent() }}{% endapply %}
                    </li>
                {% endblock %}
            {% endwidget %}
        {% endif %}
    </ul>
{% endblock %}
", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/navigation-top/navigation-top.twig");
    }
}


/* @ShopUi/components/organisms/navigation-top/navigation-top.twig */
class __TwigTemplate_e643533276a154b907271bce3b8aaa95___753669256 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 57, $this->source); })()), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 57);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/organisms/navigation-top/navigation-top.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/organisms/navigation-top/navigation-top.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 63
        echo "                <li class=\"col ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 63, $this->source); })()), "configName", [], "any", false, false, false, 63), "html", null, true);
        echo "__action-item\">
                    ";
        // line 64
        $this->displayParentBlock("body", $context, $blocks);
        echo "
                </li>
            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/navigation-top/navigation-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  832 => 64,  827 => 63,  817 => 62,  795 => 57,  650 => 54,  506 => 49,  362 => 46,  229 => 81,  226 => 80,  221 => 73,  219 => 72,  216 => 71,  213 => 70,  211 => 69,  208 => 68,  205 => 59,  203 => 57,  199 => 55,  195 => 54,  191 => 53,  188 => 52,  184 => 50,  180 => 49,  176 => 48,  173 => 47,  169 => 46,  164 => 45,  162 => 44,  155 => 41,  153 => 35,  147 => 34,  143 => 32,  129 => 31,  123 => 29,  117 => 27,  114 => 26,  97 => 25,  94 => 24,  84 => 23,  74 => 18,  72 => 15,  62 => 14,  52 => 1,  50 => 8,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top',
    tag: 'div'
} %}

{% set benefits = [
    'global.benefit.free_returns',
    'global.benefit.warranty',
    'global.benefit.competitive_prices'
] %}

{% block benefit %}
    {% include molecule('panel-info-item') with {
        class: 'col',
        data: {
            info: text
        }
    } only %}
{% endblock %}

{% block body %}

    {% for text in benefits %}
        {% if not loop.last %}
            {{ block('benefit') }}
        {% elseif not is_granted('ROLE_USER') %}
            {{ block('benefit') }}
        {% endif %}
    {% endfor %}

    <ul class=\"col grid grid--nowrap grid--stretch navigation-top__actions\">
        <li class=\"col {{ config.name }}__action-item {{ config.name }}__action-item--tel\">
            {% include atom('icon') with {
                modifiers: ['phone'],
                data: {
                    name: 'phone'
                }
            } only %}
            {{ 'global.phone.number' | trans }}
        </li>

        {% if can('SeePricePermissionPlugin') %}
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
            </li>
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'CurrencyWidget' only %}{% endwidget %}
            </li>
        {% endif %}

        <li class=\"col {{ config.name }}__action-item\">
            {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
        </li>

        {% widget 'StoreSwitcher' with {
            embed: {
                configName: config.name,
            },
        } only %}
            {% block body %}
                <li class=\"col {{ embed.configName }}__action-item\">
                    {{ parent() }}
                </li>
            {% endblock %}
        {% endwidget %}

        {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
        {% set hasCompanyAccess = menuItemCompanyWidget.hasCompanyAccess %}

        {% if is_granted('ROLE_USER') and hasCompanyAccess %}
            {% widget menuItemCompanyWidget %}
                {% block template %}
                    <li class=\"col {{ config.name }}__action-item\">
                        {% apply spaceless %}{{ parent() }}{% endapply %}
                    </li>
                {% endblock %}
            {% endwidget %}
        {% endif %}
    </ul>
{% endblock %}
", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/navigation-top/navigation-top.twig");
    }
}


/* @ShopUi/components/organisms/navigation-top/navigation-top.twig */
class __TwigTemplate_e643533276a154b907271bce3b8aaa95___1266698599 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'template' => [$this, 'block_template'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 73
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 73, $this->source); })()), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 73);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/organisms/navigation-top/navigation-top.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/organisms/navigation-top/navigation-top.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_template($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "template"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "template"));

        // line 75
        echo "                    <li class=\"col ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 75, $this->source); })()), "name", [], "any", false, false, false, 75), "html", null, true);
        echo "__action-item\">
                        ";
        // line 76
        ob_start();
        $this->displayParentBlock("template", $context, $blocks);
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_spaceless($___internal_parse_0_);
        // line 77
        echo "                    </li>
                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/navigation-top/navigation-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1010 => 77,  1005 => 76,  1000 => 75,  990 => 74,  968 => 73,  832 => 64,  827 => 63,  817 => 62,  795 => 57,  650 => 54,  506 => 49,  362 => 46,  229 => 81,  226 => 80,  221 => 73,  219 => 72,  216 => 71,  213 => 70,  211 => 69,  208 => 68,  205 => 59,  203 => 57,  199 => 55,  195 => 54,  191 => 53,  188 => 52,  184 => 50,  180 => 49,  176 => 48,  173 => 47,  169 => 46,  164 => 45,  162 => 44,  155 => 41,  153 => 35,  147 => 34,  143 => 32,  129 => 31,  123 => 29,  117 => 27,  114 => 26,  97 => 25,  94 => 24,  84 => 23,  74 => 18,  72 => 15,  62 => 14,  52 => 1,  50 => 8,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top',
    tag: 'div'
} %}

{% set benefits = [
    'global.benefit.free_returns',
    'global.benefit.warranty',
    'global.benefit.competitive_prices'
] %}

{% block benefit %}
    {% include molecule('panel-info-item') with {
        class: 'col',
        data: {
            info: text
        }
    } only %}
{% endblock %}

{% block body %}

    {% for text in benefits %}
        {% if not loop.last %}
            {{ block('benefit') }}
        {% elseif not is_granted('ROLE_USER') %}
            {{ block('benefit') }}
        {% endif %}
    {% endfor %}

    <ul class=\"col grid grid--nowrap grid--stretch navigation-top__actions\">
        <li class=\"col {{ config.name }}__action-item {{ config.name }}__action-item--tel\">
            {% include atom('icon') with {
                modifiers: ['phone'],
                data: {
                    name: 'phone'
                }
            } only %}
            {{ 'global.phone.number' | trans }}
        </li>

        {% if can('SeePricePermissionPlugin') %}
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
            </li>
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'CurrencyWidget' only %}{% endwidget %}
            </li>
        {% endif %}

        <li class=\"col {{ config.name }}__action-item\">
            {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
        </li>

        {% widget 'StoreSwitcher' with {
            embed: {
                configName: config.name,
            },
        } only %}
            {% block body %}
                <li class=\"col {{ embed.configName }}__action-item\">
                    {{ parent() }}
                </li>
            {% endblock %}
        {% endwidget %}

        {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
        {% set hasCompanyAccess = menuItemCompanyWidget.hasCompanyAccess %}

        {% if is_granted('ROLE_USER') and hasCompanyAccess %}
            {% widget menuItemCompanyWidget %}
                {% block template %}
                    <li class=\"col {{ config.name }}__action-item\">
                        {% apply spaceless %}{{ parent() }}{% endapply %}
                    </li>
                {% endblock %}
            {% endwidget %}
        {% endif %}
    </ul>
{% endblock %}
", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/navigation-top/navigation-top.twig");
    }
}
