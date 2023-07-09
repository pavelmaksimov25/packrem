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
class __TwigTemplate_22f9deeff01ec60c126cf41bf8301e8f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@StoreWidget/views/switcher/switcher.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@StoreWidget/views/switcher/switcher.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  97 => 26,  95 => 18,  94 => 15,  91 => 14,  85 => 13,  83 => 11,  82 => 10,  81 => 9,  79 => 8,  75 => 7,  72 => 6,  70 => 5,  67 => 4,  57 => 3,  35 => 1,);
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
