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

/* @ShopUi/components/molecules/pagination/pagination.twig */
class __TwigTemplate_db6621f0528a70e0cd18487041445a32 extends Template
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
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/pagination/pagination.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/pagination/pagination.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/pagination/pagination.twig"));

        // line 15
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "pagination", "tag" => "nav"], $context['config']);        // line 20
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["parameters" => [], "currentPage" => 1, "paginationPath" => "", "showAlwaysFirstAndLast" => false, "maxPage" => 10, "extremePagesLimit" => 1, "nearbyPagesLimit" => 2, "anchor" => "#"], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "maxPage", [], "any", false, false, false, 32) > 1)) {
            // line 33
            echo "    <ul class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "__list\">
        ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "currentPage", [], "any", false, false, false, 34) > 1)) {
                // line 35
                echo "            <li class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), "html", null, true);
                echo "__item\">
                <a class=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
                echo "__step ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
                echo "__step--previous\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "paginationPath", [], "any", false, false, false, 36), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "parameters", [], "any", false, false, false, 36), ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "currentPage", [], "any", false, false, false, 36) - 1)])), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "anchor", [], "any", false, false, false, 36), "html", null, true);
                echo "\">
                    ";
                // line 37
                $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/pagination/pagination.twig", 37)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,                 // line 38
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38) . "__reset-icon"), "modifiers" => [0 => "smaller", 1 => "reverse"], "data" => ["name" => "chevron-right"]]));
                // line 44
                echo "                </a>
            </li>

            ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "extremePagesLimit", [], "any", false, false, false, 47)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 48
                    echo "                ";
                    if (($context["i"] < (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "currentPage", [], "any", false, false, false, 48) - twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "nearbyPagesLimit", [], "any", false, false, false, 48)))) {
                        // line 49
                        echo "                    <li class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "html", null, true);
                        echo "__item\">
                        <a class=\"";
                        // line 50
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), "html", null, true);
                        echo "__step ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), "html", null, true);
                        echo "__step--button\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 50, $this->source); })()), "paginationPath", [], "any", false, false, false, 50), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 50, $this->source); })()), "parameters", [], "any", false, false, false, 50), ["page" => $context["i"]])), "html", null, true);
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 50, $this->source); })()), "anchor", [], "any", false, false, false, 50), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getFilter('executeFilterIfExists')->getCallable()($context["i"], "formatInt", twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "locale", [], "any", false, false, false, 50)), "html", null, true);
                        echo "</a>
                    </li>
                ";
                    }
                    // line 53
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "
            ";
                // line 55
                if (((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "extremePagesLimit", [], "any", false, false, false, 55) + 1) < (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "currentPage", [], "any", false, false, false, 55) - twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "nearbyPagesLimit", [], "any", false, false, false, 55)))) {
                    // line 56
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), "html", null, true);
                    echo "__item\">
                    <span class=\"";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "html", null, true);
                    echo "__step ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "html", null, true);
                    echo "__step--ellipsis\">&hellip;</span>
                </li>
            ";
                }
                // line 60
                echo "
            ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), "currentPage", [], "any", false, false, false, 61) - twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), "nearbyPagesLimit", [], "any", false, false, false, 61)), (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), "currentPage", [], "any", false, false, false, 61) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 62
                    echo "                ";
                    if (($context["i"] > 0)) {
                        // line 63
                        echo "                    ";
                        if (((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 63, $this->source); })()), "extremePagesLimit", [], "any", false, false, false, 63) + 1) < (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 63, $this->source); })()), "currentPage", [], "any", false, false, false, 63) - twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 63, $this->source); })()), "nearbyPagesLimit", [], "any", false, false, false, 63)))) {
                            // line 64
                            echo "                        ";
                            $context["pageAfterEllipsisIndex"] = (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "currentPage", [], "any", false, false, false, 64) - $context["i"]);
                            // line 65
                            echo "                    ";
                        }
                        // line 66
                        echo "
                    <li class=\"";
                        // line 67
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 67, $this->source); })()), "name", [], "any", false, false, false, 67), "html", null, true);
                        echo "__item ";
                        ((array_key_exists("pageAfterEllipsisIndex", $context)) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 67, $this->source); })()), "name", [], "any", false, false, false, 67) . "__item--pages-after-ellipsis-index-") . (isset($context["pageAfterEllipsisIndex"]) || array_key_exists("pageAfterEllipsisIndex", $context) ? $context["pageAfterEllipsisIndex"] : (function () { throw new RuntimeError('Variable "pageAfterEllipsisIndex" does not exist.', 67, $this->source); })())), "html", null, true))) : (print ("")));
                        echo "\">
                        <a class=\"";
                        // line 68
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 68, $this->source); })()), "name", [], "any", false, false, false, 68), "html", null, true);
                        echo "__step ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 68, $this->source); })()), "name", [], "any", false, false, false, 68), "html", null, true);
                        echo "__step--button\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 68, $this->source); })()), "paginationPath", [], "any", false, false, false, 68), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 68, $this->source); })()), "parameters", [], "any", false, false, false, 68), ["page" => $context["i"]])), "html", null, true);
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 68, $this->source); })()), "anchor", [], "any", false, false, false, 68), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getFilter('executeFilterIfExists')->getCallable()($context["i"], "formatInt", twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "locale", [], "any", false, false, false, 68)), "html", null, true);
                        echo "</a>
                    </li>
                ";
                    }
                    // line 71
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "        ";
            } elseif (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 72, $this->source); })()), "showAlwaysFirstAndLast", [], "any", false, false, false, 72)) {
                // line 73
                echo "            <li class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73), "html", null, true);
                echo "__item\">
                <span class=\"";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74), "html", null, true);
                echo "__step ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74), "html", null, true);
                echo "__step--previous ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74), "html", null, true);
                echo "__step--disabled\">
                    ";
                // line 75
                $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/pagination/pagination.twig", 75)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,                 // line 76
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 76, $this->source); })()), "name", [], "any", false, false, false, 76) . "__reset-icon"), "modifiers" => [0 => "smaller", 1 => "reverse"], "data" => ["name" => "chevron-right"]]));
                // line 82
                echo "                </span>
            </li>
        ";
            }
            // line 85
            echo "
        <li class=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 86, $this->source); })()), "name", [], "any", false, false, false, 86), "html", null, true);
            echo "__item\">
            <a class=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87), "html", null, true);
            echo "__step ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87), "html", null, true);
            echo "__step--button ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87), "html", null, true);
            echo "__step--current\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 87, $this->source); })()), "paginationPath", [], "any", false, false, false, 87), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 87, $this->source); })()), "parameters", [], "any", false, false, false, 87), ["page" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 87, $this->source); })()), "currentPage", [], "any", false, false, false, 87)])), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 87, $this->source); })()), "anchor", [], "any", false, false, false, 87), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getFilter('executeFilterIfExists')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 87, $this->source); })()), "currentPage", [], "any", false, false, false, 87), "formatInt", twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "locale", [], "any", false, false, false, 87)), "html", null, true);
            echo "</a>
        </li>

        ";
            // line 90
            if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 90, $this->source); })()), "currentPage", [], "any", false, false, false, 90) < twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 90, $this->source); })()), "maxPage", [], "any", false, false, false, 90))) {
                // line 91
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 91, $this->source); })()), "currentPage", [], "any", false, false, false, 91) + 1), (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 91, $this->source); })()), "currentPage", [], "any", false, false, false, 91) + twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 91, $this->source); })()), "nearbyPagesLimit", [], "any", false, false, false, 91))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 92
                    echo "                ";
                    if (($context["i"] <= twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 92, $this->source); })()), "maxPage", [], "any", false, false, false, 92))) {
                        // line 93
                        echo "                    ";
                        if (((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 93, $this->source); })()), "maxPage", [], "any", false, false, false, 93) - twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 93, $this->source); })()), "extremePagesLimit", [], "any", false, false, false, 93)) > (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 93, $this->source); })()), "currentPage", [], "any", false, false, false, 93) + twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 93, $this->source); })()), "nearbyPagesLimit", [], "any", false, false, false, 93)))) {
                            // line 94
                            echo "                        ";
                            $context["pagesBeforeEllipsisIndex"] = ($context["i"] - twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 94, $this->source); })()), "currentPage", [], "any", false, false, false, 94));
                            // line 95
                            echo "                    ";
                        }
                        // line 96
                        echo "
                    <li class=\"";
                        // line 97
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), "html", null, true);
                        echo "__item ";
                        ((array_key_exists("pagesBeforeEllipsisIndex", $context)) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97) . "__item--pages-before-ellipsis-index-") . (isset($context["pagesBeforeEllipsisIndex"]) || array_key_exists("pagesBeforeEllipsisIndex", $context) ? $context["pagesBeforeEllipsisIndex"] : (function () { throw new RuntimeError('Variable "pagesBeforeEllipsisIndex" does not exist.', 97, $this->source); })())), "html", null, true))) : (print ("")));
                        echo "\">
                        <a class=\"";
                        // line 98
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 98, $this->source); })()), "name", [], "any", false, false, false, 98), "html", null, true);
                        echo "__step ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 98, $this->source); })()), "name", [], "any", false, false, false, 98), "html", null, true);
                        echo "__step--button\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 98, $this->source); })()), "paginationPath", [], "any", false, false, false, 98), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 98, $this->source); })()), "parameters", [], "any", false, false, false, 98), ["page" => $context["i"]])), "html", null, true);
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 98, $this->source); })()), "anchor", [], "any", false, false, false, 98), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getFilter('executeFilterIfExists')->getCallable()($context["i"], "formatInt", twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "locale", [], "any", false, false, false, 98)), "html", null, true);
                        echo "</a>
                    </li>
                ";
                    }
                    // line 101
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "
            ";
                // line 103
                if (((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 103, $this->source); })()), "maxPage", [], "any", false, false, false, 103) - twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 103, $this->source); })()), "extremePagesLimit", [], "any", false, false, false, 103)) > (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 103, $this->source); })()), "currentPage", [], "any", false, false, false, 103) + twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 103, $this->source); })()), "nearbyPagesLimit", [], "any", false, false, false, 103)))) {
                    // line 104
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 104, $this->source); })()), "name", [], "any", false, false, false, 104), "html", null, true);
                    echo "__item\">
                    <span class=\"";
                    // line 105
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 105, $this->source); })()), "name", [], "any", false, false, false, 105), "html", null, true);
                    echo "__step ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 105, $this->source); })()), "name", [], "any", false, false, false, 105), "html", null, true);
                    echo "__step--ellipsis\">&hellip;</span>
                </li>
            ";
                }
                // line 108
                echo "
            ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "maxPage", [], "any", false, false, false, 109) - twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "extremePagesLimit", [], "any", false, false, false, 109)) + 1), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "maxPage", [], "any", false, false, false, 109)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 110
                    echo "                ";
                    if (($context["i"] > (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 110, $this->source); })()), "currentPage", [], "any", false, false, false, 110) + twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 110, $this->source); })()), "nearbyPagesLimit", [], "any", false, false, false, 110)))) {
                        // line 111
                        echo "                    <li class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 111, $this->source); })()), "name", [], "any", false, false, false, 111), "html", null, true);
                        echo "__item\">
                        <a class=\"";
                        // line 112
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 112, $this->source); })()), "name", [], "any", false, false, false, 112), "html", null, true);
                        echo "__step ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 112, $this->source); })()), "name", [], "any", false, false, false, 112), "html", null, true);
                        echo "__step--button\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()), "paginationPath", [], "any", false, false, false, 112), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()), "parameters", [], "any", false, false, false, 112), ["page" => $context["i"]])), "html", null, true);
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()), "anchor", [], "any", false, false, false, 112), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getFilter('executeFilterIfExists')->getCallable()($context["i"], "formatInt", twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "locale", [], "any", false, false, false, 112)), "html", null, true);
                        echo "</a>
                    </li>
                ";
                    }
                    // line 115
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "
            <li class=\"";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 117, $this->source); })()), "name", [], "any", false, false, false, 117), "html", null, true);
                echo "__item\">
                <a class=\"";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 118, $this->source); })()), "name", [], "any", false, false, false, 118), "html", null, true);
                echo "__step ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 118, $this->source); })()), "name", [], "any", false, false, false, 118), "html", null, true);
                echo "__step--next\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 118, $this->source); })()), "paginationPath", [], "any", false, false, false, 118), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 118, $this->source); })()), "parameters", [], "any", false, false, false, 118), ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 118, $this->source); })()), "currentPage", [], "any", false, false, false, 118) + 1)])), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 118, $this->source); })()), "anchor", [], "any", false, false, false, 118), "html", null, true);
                echo "\">
                    ";
                // line 119
                $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/pagination/pagination.twig", 119)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,                 // line 120
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 120, $this->source); })()), "name", [], "any", false, false, false, 120) . "__reset-icon"), "modifiers" => [0 => "smaller"], "data" => ["name" => "chevron-right"]]));
                // line 126
                echo "                </a>
            </li>
        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 128
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 128, $this->source); })()), "showAlwaysFirstAndLast", [], "any", false, false, false, 128)) {
                // line 129
                echo "            <li class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 129, $this->source); })()), "name", [], "any", false, false, false, 129), "html", null, true);
                echo "__item\">
                <span class=\"";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 130, $this->source); })()), "name", [], "any", false, false, false, 130), "html", null, true);
                echo "__step ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 130, $this->source); })()), "name", [], "any", false, false, false, 130), "html", null, true);
                echo "__step--next ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 130, $this->source); })()), "name", [], "any", false, false, false, 130), "html", null, true);
                echo "__step--disabled\">
                    ";
                // line 131
                $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@ShopUi/components/molecules/pagination/pagination.twig", 131)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,                 // line 132
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 132, $this->source); })()), "name", [], "any", false, false, false, 132) . "__reset-icon"), "modifiers" => [0 => "smaller"], "data" => ["name" => "chevron-right"]]));
                // line 138
                echo "                </span>
            </li>
        ";
            }
            // line 141
            echo "    </ul>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/pagination/pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 141,  384 => 138,  382 => 132,  381 => 131,  373 => 130,  368 => 129,  366 => 128,  362 => 126,  360 => 120,  359 => 119,  350 => 118,  346 => 117,  343 => 116,  337 => 115,  324 => 112,  319 => 111,  316 => 110,  312 => 109,  309 => 108,  301 => 105,  296 => 104,  294 => 103,  291 => 102,  285 => 101,  272 => 98,  266 => 97,  263 => 96,  260 => 95,  257 => 94,  254 => 93,  251 => 92,  246 => 91,  244 => 90,  229 => 87,  225 => 86,  222 => 85,  217 => 82,  215 => 76,  214 => 75,  206 => 74,  201 => 73,  198 => 72,  192 => 71,  179 => 68,  173 => 67,  170 => 66,  167 => 65,  164 => 64,  161 => 63,  158 => 62,  154 => 61,  151 => 60,  143 => 57,  138 => 56,  136 => 55,  133 => 54,  127 => 53,  114 => 50,  109 => 49,  106 => 48,  102 => 47,  97 => 44,  95 => 38,  94 => 37,  85 => 36,  80 => 35,  78 => 34,  73 => 33,  70 => 32,  60 => 31,  50 => 1,  49 => 20,  48 => 15,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{#
  Parameters:
    * parameters (array) : associative array that contains the current route-arguments
    * currentPage (int) : the current page you are in
    * paginationPath (string) : the route name to use for links
    * showAlwaysFirstAndLast (bool) : Always show first and last link (just disabled)
    * maxPage (int) : represents the total number of existing pages
    * extremePagesLimit (int): the number of first and last pages to be displayed (default 1)
    * nearbyPagesLimit (int): the number of pages that are displayed around the active page (default 2)
    * anchor (string): the anchor to be used after each pagination (default empty)
#}

{% define config = {
    name: 'pagination',
    tag: 'nav'
} %}

{% define data = {
    parameters: [],
    currentPage: 1,
    paginationPath: '',
    showAlwaysFirstAndLast: false,
    maxPage: 10,
    extremePagesLimit: 1,
    nearbyPagesLimit: 2,
    anchor: '#'
} %}

{% block body %}
    {% if data.maxPage > 1 %}
    <ul class=\"{{config.name}}__list\">
        {% if data.currentPage > 1 %}
            <li class=\"{{config.name}}__item\">
                <a class=\"{{config.name}}__step {{config.name}}__step--previous\" href=\"{{ path(data.paginationPath, data.parameters|merge({page: data.currentPage-1})) }}{{ data.anchor }}\">
                    {% include atom('icon') with {
                        class: config.name ~ '__reset-icon',
                        modifiers: ['smaller', 'reverse'],
                        data: {
                            name: 'chevron-right'
                        }
                    } only %}
                </a>
            </li>

            {% for i in range(1, data.extremePagesLimit) %}
                {% if i < data.currentPage - data.nearbyPagesLimit  %}
                    <li class=\"{{config.name}}__item\">
                        <a class=\"{{config.name}}__step {{config.name}}__step--button\" href=\"{{ path(data.paginationPath, data.parameters|merge({page: i})) }}{{ data.anchor }}\">{{ i | executeFilterIfExists('formatInt', app.locale) }}</a>
                    </li>
                {% endif %}
            {% endfor %}

            {% if data.extremePagesLimit + 1 < data.currentPage - data.nearbyPagesLimit %}
                <li class=\"{{config.name}}__item\">
                    <span class=\"{{config.name}}__step {{config.name}}__step--ellipsis\">&hellip;</span>
                </li>
            {% endif %}

            {% for i in range(data.currentPage - data.nearbyPagesLimit, data.currentPage - 1) %}
                {% if i > 0 %}
                    {% if data.extremePagesLimit + 1 < data.currentPage - data.nearbyPagesLimit %}
                        {% set pageAfterEllipsisIndex = data.currentPage - i %}
                    {% endif %}

                    <li class=\"{{config.name}}__item {{ pageAfterEllipsisIndex is defined ? config.name ~ '__item--pages-after-ellipsis-index-' ~ pageAfterEllipsisIndex : '' }}\">
                        <a class=\"{{config.name}}__step {{config.name}}__step--button\" href=\"{{ path(data.paginationPath, data.parameters|merge({page: i})) }}{{ data.anchor }}\">{{ i | executeFilterIfExists('formatInt', app.locale) }}</a>
                    </li>
                {% endif %}
            {% endfor %}
        {% elseif data.showAlwaysFirstAndLast %}
            <li class=\"{{config.name}}__item\">
                <span class=\"{{config.name}}__step {{config.name}}__step--previous {{config.name}}__step--disabled\">
                    {% include atom('icon') with {
                        class: config.name ~ '__reset-icon',
                        modifiers: ['smaller', 'reverse'],
                        data: {
                            name: 'chevron-right'
                        }
                    } only %}
                </span>
            </li>
        {% endif %}

        <li class=\"{{config.name}}__item\">
            <a class=\"{{config.name}}__step {{config.name}}__step--button {{config.name}}__step--current\" href=\"{{ path(data.paginationPath, data.parameters|merge({ page: data.currentPage })) }}{{ data.anchor }}\">{{ data.currentPage | executeFilterIfExists('formatInt', app.locale) }}</a>
        </li>

        {% if data.currentPage < data.maxPage %}
            {% for i in range(data.currentPage + 1, data.currentPage + data.nearbyPagesLimit) %}
                {% if i <= data.maxPage %}
                    {% if  (data.maxPage - data.extremePagesLimit) > (data.currentPage + data.nearbyPagesLimit) %}
                        {% set pagesBeforeEllipsisIndex = i - data.currentPage %}
                    {% endif %}

                    <li class=\"{{config.name}}__item {{ pagesBeforeEllipsisIndex is defined ? config.name ~ '__item--pages-before-ellipsis-index-' ~ pagesBeforeEllipsisIndex : '' }}\">
                        <a class=\"{{config.name}}__step {{config.name}}__step--button\" href=\"{{ path(data.paginationPath, data.parameters|merge({page: i})) }}{{ data.anchor }}\">{{ i | executeFilterIfExists('formatInt', app.locale) }}</a>
                    </li>
                {% endif %}
            {% endfor %}

            {% if  (data.maxPage - data.extremePagesLimit) > (data.currentPage + data.nearbyPagesLimit) %}
                <li class=\"{{config.name}}__item\">
                    <span class=\"{{config.name}}__step {{config.name}}__step--ellipsis\">&hellip;</span>
                </li>
            {% endif %}

            {% for i in range(data.maxPage - data.extremePagesLimit + 1, data.maxPage) %}
                {% if i > data.currentPage + data.nearbyPagesLimit %}
                    <li class=\"{{config.name}}__item\">
                        <a class=\"{{config.name}}__step {{config.name}}__step--button\" href=\"{{ path(data.paginationPath, data.parameters|merge({page: i})) }}{{ data.anchor }}\">{{ i | executeFilterIfExists('formatInt', app.locale) }}</a>
                    </li>
                {% endif %}
            {% endfor %}

            <li class=\"{{config.name}}__item\">
                <a class=\"{{config.name}}__step {{config.name}}__step--next\" href=\"{{ path(data.paginationPath, data.parameters|merge({page: data.currentPage + 1})) }}{{ data.anchor }}\">
                    {% include atom('icon') with {
                        class: config.name ~ '__reset-icon',
                        modifiers: ['smaller'],
                        data: {
                            name: 'chevron-right'
                        }
                    } only %}
                </a>
            </li>
        {% elseif data.showAlwaysFirstAndLast %}
            <li class=\"{{config.name}}__item\">
                <span class=\"{{config.name}}__step {{config.name}}__step--next {{config.name}}__step--disabled\">
                    {% include atom('icon') with {
                        class: config.name ~ '__reset-icon',
                        modifiers: ['smaller'],
                        data: {
                            name: 'chevron-right'
                        }
                    } only %}
                </span>
            </li>
        {% endif %}
    </ul>
    {% endif %}
{% endblock %}
", "@ShopUi/components/molecules/pagination/pagination.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/pagination/pagination.twig");
    }
}
