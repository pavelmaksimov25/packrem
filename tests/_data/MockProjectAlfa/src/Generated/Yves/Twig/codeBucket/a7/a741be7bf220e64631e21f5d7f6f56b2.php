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

/* @@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig */
class __TwigTemplate_f43e6a69c3c9b2d398730360d8eebf30 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extraClass' => [$this, 'block_extraClass'],
            'body' => [$this, 'block_body'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig"));

        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "rating-selector", "tag" => "rating-selector"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["value" => 0, "minValue" => 1, "maxValue" => 5, "steps" => 5, "useHalfSteps" => false, "inputId" => "", "inputName" => "rating", "parentJsName" => ""], $context['data']);        // line 19
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["readonly" => false, "disable-if-empty-value" => false, "product-item-class-name" => twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "parentJsName", [], "any", false, false, false, 22)], $context['attributes']);        // line 25
        $context["singleStepValue"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "maxValue", [], "any", false, false, false, 25) - twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "minValue", [], "any", false, false, false, 25)) / (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "steps", [], "any", false, false, false, 25) - 1));
        // line 26
        $context["precision"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "useHalfSteps", [], "any", false, false, false, 26)) ? (1) : (0));
        // line 27
        $context["value"] = twig_round(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "value", [], "any", false, false, false, 27), (isset($context["precision"]) || array_key_exists("precision", $context) ? $context["precision"] : (function () { throw new RuntimeError('Variable "precision" does not exist.', 27, $this->source); })()), "floor");
        // line 28
        $context["isActive"] = false;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_extraClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraClass"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraClass"));

        // line 31
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 31, $this->source); })()), "readonly", [], "any", false, false, false, 31)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "--readonly";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "    <span class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), "html", null, true);
        echo "__steps\">
        ";
        // line 36
        ob_start();
        // line 37
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 37, $this->source); })()), "steps", [], "any", false, false, false, 37), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 38
            echo "                ";
            $context["currentStepValue"] = ($context["step"] * (isset($context["singleStepValue"]) || array_key_exists("singleStepValue", $context) ? $context["singleStepValue"] : (function () { throw new RuntimeError('Variable "singleStepValue" does not exist.', 38, $this->source); })()));
            // line 39
            echo "                ";
            if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 39, $this->source); })()) >= (isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 39, $this->source); })()))) {
                // line 40
                echo "                    ";
                $context["isActive"] = true;
                // line 41
                echo "                ";
            }
            // line 42
            echo "
                ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "useHalfSteps", [], "any", false, false, false, 43)) {
                // line 44
                echo "                    <span
                        data-step-value=\"";
                // line 45
                echo twig_escape_filter($this->env, (isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 45, $this->source); })()), "html", null, true);
                echo "\"
                        class=\"
                            ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
                echo "__step
                            ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true);
                echo "__step--half
                            ";
                // line 49
                (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 49, $this->source); })())) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49) . "__step--active"), "html", null, true))) : (print ("")));
                echo "
                            ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "jsName", [], "any", false, false, false, 50), "html", null, true);
                echo "__step\">

                        ";
                // line 52
                $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", 52)->display(twig_to_array(["class" => (((twig_get_attribute($this->env, $this->source,                 // line 53
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53) . "__star ") . twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53)) . "__star--half-right"), "data" => ["name" => "star-half"]]));
                // line 58
                echo "                    </span>

                    ";
                // line 60
                $context["currentStepValue"] = (($context["step"] - 0.5) * (isset($context["singleStepValue"]) || array_key_exists("singleStepValue", $context) ? $context["singleStepValue"] : (function () { throw new RuntimeError('Variable "singleStepValue" does not exist.', 60, $this->source); })()));
                // line 61
                echo "                    ";
                if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 61, $this->source); })()) >= (isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 61, $this->source); })()))) {
                    // line 62
                    echo "                        ";
                    $context["isActive"] = true;
                    // line 63
                    echo "                    ";
                }
                // line 64
                echo "
                    <span
                        data-step-value=\"";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 66, $this->source); })()), "html", null, true);
                echo "\"
                        class=\"
                            ";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 68, $this->source); })()), "name", [], "any", false, false, false, 68), "html", null, true);
                echo "__step
                            ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 69, $this->source); })()), "name", [], "any", false, false, false, 69), "html", null, true);
                echo "__step--half
                            ";
                // line 70
                (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 70, $this->source); })())) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70) . "__step--active"), "html", null, true))) : (print ("")));
                echo "
                            ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 71, $this->source); })()), "jsName", [], "any", false, false, false, 71), "html", null, true);
                echo "__step\">

                        ";
                // line 73
                $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", 73)->display(twig_to_array(["class" => (((twig_get_attribute($this->env, $this->source,                 // line 74
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74) . "__star ") . twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74)) . "__star--half-left"), "data" => ["name" => "star-half"]]));
                // line 79
                echo "                    </span>
                ";
            }
            // line 81
            echo "
                ";
            // line 82
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 82, $this->source); })()), "useHalfSteps", [], "any", false, false, false, 82)) {
                // line 83
                echo "                    <span
                        data-step-value=\"";
                // line 84
                echo twig_escape_filter($this->env, (isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 84, $this->source); })()), "html", null, true);
                echo "\"
                        class=\"
                            ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 86, $this->source); })()), "name", [], "any", false, false, false, 86), "html", null, true);
                echo "__step
                            ";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87), "html", null, true);
                echo "__step--full
                            ";
                // line 88
                (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 88, $this->source); })())) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 88, $this->source); })()), "name", [], "any", false, false, false, 88) . "__step--active"), "html", null, true))) : (print ("")));
                echo "
                            ";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 89, $this->source); })()), "jsName", [], "any", false, false, false, 89), "html", null, true);
                echo "__step\">

                        ";
                // line 91
                $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", 91)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,                 // line 92
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 92, $this->source); })()), "name", [], "any", false, false, false, 92) . "__star"), "data" => ["name" => "star"]]));
                // line 97
                echo "                    </span>
                ";
            }
            // line 99
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo twig_spaceless($___internal_parse_1_);
        // line 101
        echo "    </span>

    ";
        // line 103
        $this->displayBlock('input', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 104
        echo "        ";
        $context["hiddenInputJsName"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "parentJsName", [], "any", false, false, false, 104)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "parentJsName", [], "any", false, false, false, 104) . "__rating")) : (""));
        // line 105
        echo "
        <input
            type=\"hidden\"
            class=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 108, $this->source); })()), "jsName", [], "any", false, false, false, 108), "html", null, true);
        echo "__input ";
        echo twig_escape_filter($this->env, (isset($context["hiddenInputJsName"]) || array_key_exists("hiddenInputJsName", $context) ? $context["hiddenInputJsName"] : (function () { throw new RuntimeError('Variable "hiddenInputJsName" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "\"
            ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "inputId", [], "any", false, false, false, 109)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "inputId", [], "any", false, false, false, 109), "html", null, true);
            echo "\"";
        }
        // line 110
        echo "            name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 110, $this->source); })()), "inputName", [], "any", false, false, false, 110), "html", null, true);
        echo "\"
            value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 111, $this->source); })()), "value", [], "any", false, false, false, 111), "html", null, true);
        echo "\"
            ";
        // line 112
        if (((twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 112, $this->source); })()), "disable-if-empty-value", [], "array", false, false, false, 112) && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()), "value", [], "any", false, false, false, 112))) || twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 112, $this->source); })()), "readonly", [], "array", false, false, false, 112))) {
            echo "disabled";
        }
        echo ">
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 112,  307 => 111,  302 => 110,  296 => 109,  290 => 108,  285 => 105,  282 => 104,  263 => 103,  259 => 101,  257 => 36,  254 => 100,  248 => 99,  244 => 97,  242 => 92,  241 => 91,  236 => 89,  232 => 88,  228 => 87,  224 => 86,  219 => 84,  216 => 83,  214 => 82,  211 => 81,  207 => 79,  205 => 74,  204 => 73,  199 => 71,  195 => 70,  191 => 69,  187 => 68,  182 => 66,  178 => 64,  175 => 63,  172 => 62,  169 => 61,  167 => 60,  163 => 58,  161 => 53,  160 => 52,  155 => 50,  151 => 49,  147 => 48,  143 => 47,  138 => 45,  135 => 44,  133 => 43,  130 => 42,  127 => 41,  124 => 40,  121 => 39,  118 => 38,  113 => 37,  111 => 36,  106 => 35,  96 => 34,  82 => 31,  72 => 30,  62 => 1,  60 => 28,  58 => 27,  56 => 26,  54 => 25,  53 => 22,  52 => 19,  51 => 8,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'rating-selector',
    tag: 'rating-selector',
} %}

{% define data = {
    value: 0,
    minValue: 1,
    maxValue: 5,
    steps: 5,
    useHalfSteps: false,
    inputId: '',
    inputName: 'rating',
    parentJsName: '',
} %}

{% define attributes = {
    'readonly': false,
    'disable-if-empty-value': false,
    'product-item-class-name': data.parentJsName,
} %}

{% set singleStepValue = (data.maxValue - data.minValue) / (data.steps - 1) %}
{% set precision = data.useHalfSteps ? 1 : 0 %}
{% set value = data.value | round(precision, 'floor') %}
{% set isActive = false %}

{% block extraClass %}
    {% if attributes.readonly %}{{ config.name }}--readonly{% endif %}
{% endblock %}

{% block body %}
    <span class=\"{{ config.name }}__steps\">
        {% apply spaceless %}
            {% for step in data.steps..1 %}
                {% set currentStepValue = step * singleStepValue %}
                {% if value >= currentStepValue %}
                    {% set isActive = true %}
                {% endif %}

                {% if data.useHalfSteps %}
                    <span
                        data-step-value=\"{{ currentStepValue }}\"
                        class=\"
                            {{ config.name }}__step
                            {{ config.name }}__step--half
                            {{ isActive ? config.name ~ '__step--active' }}
                            {{ config.jsName }}__step\">

                        {% include atom('icon') with {
                            class: config.name ~ '__star ' ~ config.name ~ '__star--half-right',
                            data: {
                                name: 'star-half',
                            },
                        } only %}
                    </span>

                    {% set currentStepValue = (step - 0.5) * singleStepValue %}
                    {% if value >= currentStepValue %}
                        {% set isActive = true %}
                    {% endif %}

                    <span
                        data-step-value=\"{{ currentStepValue }}\"
                        class=\"
                            {{ config.name }}__step
                            {{ config.name }}__step--half
                            {{ isActive ? config.name ~ '__step--active' }}
                            {{ config.jsName }}__step\">

                        {% include atom('icon') with {
                            class: config.name ~ '__star ' ~ config.name ~ '__star--half-left',
                            data: {
                                name: 'star-half',
                            },
                        } only %}
                    </span>
                {% endif %}

                {% if not data.useHalfSteps %}
                    <span
                        data-step-value=\"{{ currentStepValue }}\"
                        class=\"
                            {{ config.name }}__step
                            {{ config.name }}__step--full
                            {{ isActive ? config.name ~ '__step--active' }}
                            {{ config.jsName }}__step\">

                        {% include atom('icon') with {
                            class: config.name ~ '__star',
                            data: {
                                name: 'star',
                            },
                        } only %}
                    </span>
                {% endif %}
            {% endfor %}
        {% endapply %}
    </span>

    {% block input %}
        {% set hiddenInputJsName = data.parentJsName ? data.parentJsName ~ '__rating' %}

        <input
            type=\"hidden\"
            class=\"{{ config.jsName }}__input {{ hiddenInputJsName }}\"
            {% if data.inputId %}id=\"{{ data.inputId }}\"{% endif %}
            name=\"{{ data.inputName }}\"
            value=\"{{ data.value }}\"
            {% if attributes['disable-if-empty-value'] and data.value is empty or attributes['readonly'] %}disabled{% endif %}>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", "/data/vendor/spryker-shop/product-review-widget/src/SprykerShop/Yves/ProductReviewWidget/Theme/default/components/molecules/rating-selector/rating-selector.twig");
    }
}
