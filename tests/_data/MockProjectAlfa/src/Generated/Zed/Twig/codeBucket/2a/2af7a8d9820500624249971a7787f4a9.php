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

/* @MerchantGui/_partials/merchant_switcher.twig */
class __TwigTemplate_af01860abe870a953855f5db9e50f9b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MerchantGui/_partials/merchant_switcher.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MerchantGui/_partials/merchant_switcher.twig"));

        // line 1
        if ((array_key_exists("merchants", $context) &&  !twig_test_empty((isset($context["merchants"]) || array_key_exists("merchants", $context) ? $context["merchants"] : (function () { throw new RuntimeError('Variable "merchants" does not exist.', 1, $this->source); })())))) {
            // line 2
            echo "    <span class=\"m-r-sm\">
        <label>";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Merchants"), "html", null, true);
            echo "</label>
        <select name=\"id-merchant\" onchange=\"this.form.submit()\" onblur=\"this.form.submit()\">
            <option value=\"\">";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
            echo "</option>
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["merchants"]) || array_key_exists("merchants", $context) ? $context["merchants"] : (function () { throw new RuntimeError('Variable "merchants" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["merchant"]) {
                // line 7
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["merchant"], "idMerchant", [], "any", false, false, false, 7), "html", null, true);
                echo "\" ";
                echo (((twig_get_attribute($this->env, $this->source, $context["merchant"], "idMerchant", [], "any", false, false, false, 7) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "get", [0 => "id-merchant"], "method", false, false, false, 7))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["merchant"], "name", [], "any", false, false, false, 7), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['merchant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </select>
    </span>
";
        }
        // line 12
        echo "
";
        // line 13
        if ((array_key_exists("merchant", $context) &&  !twig_test_empty((isset($context["merchant"]) || array_key_exists("merchant", $context) ? $context["merchant"] : (function () { throw new RuntimeError('Variable "merchant" does not exist.', 13, $this->source); })())))) {
            // line 14
            echo "    <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Merchant"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["merchant"]) || array_key_exists("merchant", $context) ? $context["merchant"] : (function () { throw new RuntimeError('Variable "merchant" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
            echo "
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@MerchantGui/_partials/merchant_switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  82 => 13,  79 => 12,  74 => 9,  61 => 7,  57 => 6,  53 => 5,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if merchants is defined and merchants is not empty %}
    <span class=\"m-r-sm\">
        <label>{{ 'Merchants' | trans }}</label>
        <select name=\"id-merchant\" onchange=\"this.form.submit()\" onblur=\"this.form.submit()\">
            <option value=\"\">{{ 'All' | trans }}</option>
            {% for merchant in merchants %}
                <option value=\"{{ merchant.idMerchant }}\" {{ (merchant.idMerchant == app.request.get('id-merchant')) ? 'selected' : ''}}>{{ merchant.name }}</option>
            {% endfor %}
        </select>
    </span>
{% endif %}

{% if merchant is defined and merchant is not empty %}
    <strong>{{ 'Merchant' | trans }}</strong> {{ merchant.name }}
{%  endif %}
", "@MerchantGui/_partials/merchant_switcher.twig", "/data/vendor/spryker/merchant-gui/src/Spryker/Zed/MerchantGui/Presentation/_partials/merchant_switcher.twig");
    }
}
