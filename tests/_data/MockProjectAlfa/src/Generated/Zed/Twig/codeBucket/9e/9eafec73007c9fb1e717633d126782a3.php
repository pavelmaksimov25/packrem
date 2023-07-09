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

/* @SecurityGui/Partial/authentication-links.twig */
class __TwigTemplate_0aa72768c63e19cf97d06de4bb8e8794 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SecurityGui/Partial/authentication-links.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SecurityGui/Partial/authentication-links.twig"));

        // line 3
        echo "
 ";
        // line 4
        if (array_key_exists("authenticationLinkCollection", $context)) {
            // line 5
            echo "
     ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["authenticationLinkCollection"]) || array_key_exists("authenticationLinkCollection", $context) ? $context["authenticationLinkCollection"] : (function () { throw new RuntimeError('Variable "authenticationLinkCollection" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["authenticationLink"]) {
                // line 7
                echo "
         ";
                // line 8
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["authenticationLink"], "template", [], "any", false, false, false, 8))) {
                    // line 9
                    echo "             ";
                    $__internal_compile_0 = null;
                    try {
                        $__internal_compile_0 =                         $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["authenticationLink"], "template", [], "any", false, false, false, 9), "@SecurityGui/Partial/authentication-links.twig", 9);
                    } catch (LoaderError $e) {
                        // ignore missing template
                    }
                    if ($__internal_compile_0) {
                        $__internal_compile_0->display(twig_to_array(["authenticationLink" => $context["authenticationLink"]]));
                    }
                    // line 10
                    echo "         ";
                } else {
                    // line 11
                    echo "             <div class=\"form-group\">
                 <a href=\"";
                    // line 12
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["authenticationLink"], "href", [], "any", false, false, false, 12), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["authenticationLink"], "target", [], "any", false, false, false, 12), "html_attr");
                    echo "\">
                     <button class=\"btn btn-block\" type=\"button\">
                         ";
                    // line 14
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["authenticationLink"], "text", [], "any", false, false, false, 14))), "html", null, true);
                    echo "
                     </button>
                 </a>
             </div>
         ";
                }
                // line 19
                echo "     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authenticationLink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo " ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SecurityGui/Partial/authentication-links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 20,  92 => 19,  84 => 14,  77 => 12,  74 => 11,  71 => 10,  60 => 9,  58 => 8,  55 => 7,  51 => 6,  48 => 5,  46 => 4,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var authenticationLinkCollection \\Generated\\Shared\\Transfer\\OauthAuthenticationLinkTransfer[] #}
{# @var authenticationLink \\Generated\\Shared\\Transfer\\OauthAuthenticationLinkTransfer #}

 {% if authenticationLinkCollection is defined %}

     {% for authenticationLink in authenticationLinkCollection %}

         {% if authenticationLink.template is not empty %}
             {% include authenticationLink.template ignore missing with {'authenticationLink': authenticationLink} only %}
         {% else %}
             <div class=\"form-group\">
                 <a href=\"{{ authenticationLink.href }}\" target=\"{{ authenticationLink.target | escape('html_attr') }}\">
                     <button class=\"btn btn-block\" type=\"button\">
                         {{ authenticationLink.text | escape | trans }}
                     </button>
                 </a>
             </div>
         {% endif %}
     {% endfor %}
 {% endif %}
", "@SecurityGui/Partial/authentication-links.twig", "/data/vendor/spryker/security-gui/src/Spryker/Zed/SecurityGui/Presentation/Partial/authentication-links.twig");
    }
}
