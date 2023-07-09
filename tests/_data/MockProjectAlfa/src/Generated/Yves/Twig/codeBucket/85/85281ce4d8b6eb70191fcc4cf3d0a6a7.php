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

/* @StoreWidget/views/switcher/switcher.twig */
class __TwigTemplate_938afbdb9c3107ef115de1703a04766f extends Template
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
        return $this->loadTemplate($this->env->getFunction('view')->getCallable()("switcher", "@SprykerShop:StoreWidget"), "@StoreWidget/views/switcher/switcher.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <form method=\"GET\" action=\"/\">
        ";
        // line 5
        $context["options"] = [];
        // line 6
        echo "
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "storeNames", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["storeName"]) {
            // line 8
            echo "            ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 8, $this->source); })()), [0 => ["label" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("store_widget.switcher.store") . " ") .             // line 9
$context["storeName"]), "value" =>             // line 10
$context["storeName"], "selected" => (            // line 11
$context["storeName"] == twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "currentStoreName", [], "any", false, false, false, 11))]]);
            // line 13
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['storeName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
        ";
        // line 15
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("custom-select"), "@StoreWidget/views/switcher/switcher.twig", 15)->display(twig_to_array(["modifiers" => [0 => "alternative"], "data" => ["options" =>         // line 18
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 18, $this->source); })())], "attributes" => ["name" => "_store", "data-form-submitter" => true, "config-theme" => "alternative"]]));
        // line 26
        echo "    </form>
";
    }

    public function getTemplateName()
    {
        return "@StoreWidget/views/switcher/switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  77 => 18,  76 => 15,  73 => 14,  67 => 13,  65 => 11,  64 => 10,  63 => 9,  61 => 8,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('switcher', '@SprykerShop:StoreWidget') %}

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

        {% include molecule('custom-select') with {
            modifiers: ['alternative'],
            data: {
                options: options,
            },
            attributes: {
                name: '_store',
                'data-form-submitter': true,
                'config-theme': 'alternative',
            },
        } only %}
    </form>
{% endblock %}
", "@StoreWidget/views/switcher/switcher.twig", "/data/src/Pyz/Yves/StoreWidget/Theme/default/views/switcher/switcher.twig");
    }
}
