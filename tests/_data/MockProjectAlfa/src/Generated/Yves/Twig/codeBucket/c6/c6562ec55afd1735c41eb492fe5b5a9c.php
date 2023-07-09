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

/* @@SprykerShop:StoreWidget/views/switcher/switcher.twig */
class __TwigTemplate_88bfb64e5ed945d41cff8a20cbcf6050 extends Template
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
        return $this->loadTemplate($this->env->getFunction('template')->getCallable()("widget"), "@@SprykerShop:StoreWidget/views/switcher/switcher.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["storeNames" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "storeNames", [], "any", false, false, false, 4), "currentStoreName" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "currentStoreName", [], "any", false, false, false, 5), "isVisible" => ( !twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "storeNames", [], "any", false, false, false, 6)) && (((twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "isDynamicStoreEnabled", [], "any", true, true, false, 6) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "isDynamicStoreEnabled", [], "any", false, false, false, 6)))) ? (twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "isDynamicStoreEnabled", [], "any", false, false, false, 6)) : (true)))], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <form method=\"GET\" action=\"/\">
        ";
        // line 11
        $context["options"] = [];
        // line 12
        echo "
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "storeNames", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["storeName"]) {
            // line 14
            echo "            ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 14, $this->source); })()), [0 => ["label" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("store_widget.switcher.store") . " ") .             // line 15
$context["storeName"]), "value" =>             // line 16
$context["storeName"], "selected" => (            // line 17
$context["storeName"] == twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "currentStoreName", [], "any", false, false, false, 17))]]);
            // line 19
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['storeName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
        ";
        // line 21
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("select"), "@@SprykerShop:StoreWidget/views/switcher/switcher.twig", 21)->display(twig_to_array(["modifiers" => [0 => "naked"], "data" => ["options" =>         // line 24
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 24, $this->source); })())], "attributes" => ["name" => "_store", "data-form-submitter" => true]]));
        // line 31
        echo "    </form>
";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:StoreWidget/views/switcher/switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  82 => 24,  81 => 21,  78 => 20,  72 => 19,  70 => 17,  69 => 16,  68 => 15,  66 => 14,  62 => 13,  59 => 12,  57 => 11,  54 => 10,  50 => 9,  46 => 1,  45 => 6,  44 => 5,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    storeNames: _widget.storeNames,
    currentStoreName: _widget.currentStoreName,
    isVisible: _widget.storeNames is not empty and (_widget.isDynamicStoreEnabled ?? true),
} %}

{% block body %}
    <form method=\"GET\" action=\"/\">
        {% set options = [] %}

        {% for storeName in data.storeNames %}
            {% set options = options | merge([{
                label: 'store_widget.switcher.store' | trans ~ ' ' ~ storeName,
                value: storeName,
                selected: storeName == data.currentStoreName,
            }]) %}
        {% endfor %}

        {% include atom('select') with {
            modifiers: ['naked'],
            data: {
                options: options,
            },
            attributes: {
                name: '_store',
                'data-form-submitter': true,
            },
        } only %}
    </form>
{% endblock %}
", "@@SprykerShop:StoreWidget/views/switcher/switcher.twig", "/data/vendor/spryker-shop/store-widget/src/SprykerShop/Yves/StoreWidget/Theme/default/views/switcher/switcher.twig");
    }
}
