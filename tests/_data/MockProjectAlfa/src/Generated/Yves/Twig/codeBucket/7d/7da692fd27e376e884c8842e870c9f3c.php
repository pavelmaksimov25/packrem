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

/* @ShopUi/components/molecules/lazy-image/lazy-image.twig */
class __TwigTemplate_9c7a78d9b87e6e0d16eabb2a55f29197 extends Template
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
            'content' => [$this, 'block_content'],
            'imageContainer' => [$this, 'block_imageContainer'],
            'background' => [$this, 'block_background'],
            'image' => [$this, 'block_image'],
            'noScript' => [$this, 'block_noScript'],
            'backgroundNoScript' => [$this, 'block_backgroundNoScript'],
            'imageNoScript' => [$this, 'block_imageNoScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/lazy-image/lazy-image.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/lazy-image/lazy-image.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ShopUi/components/molecules/lazy-image/lazy-image.twig"));

        // line 2
        $macros["component"] = $this->macros["component"] = $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@ShopUi/components/molecules/lazy-image/lazy-image.twig", 2)->unwrap();
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "lazy-image", "tag" => "lazy-image"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["imageSrc" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "imagePlaceholder" => "", "isBackground" => false, "imageTitle" => "", "extraAttributes" => []], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_extraClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraClass"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraClass"));

        // line 18
        echo "    js-viewport-intersection-observer__target
    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "isBackground", [], "any", false, false, false, 19)) {
            // line 20
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
            echo "--background
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "    ";
        $context["imageClasses"] = twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25) . "__image"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 25, $this->source); })())], 25, $context, $this->getSourceContext());
        // line 26
        echo "    ";
        $context["imageExtraClasses"] = "";
        // line 27
        echo "    ";
        $context["backgroundClasses"] = twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27) . "__background"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 27, $this->source); })())], 27, $context, $this->getSourceContext());
        // line 28
        echo "    ";
        $context["backgroundExtraClasses"] = "";
        // line 29
        echo "    ";
        $context["imageSrc"] = twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "imageSrc", [], "any", false, false, false, 29);
        // line 30
        echo "    ";
        $context["imagePlaceholder"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "imagePlaceholder", [], "any", false, false, false, 30)) ? (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "imagePlaceholder", [], "any", false, false, false, 30)) : ("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="));
        // line 31
        echo "    ";
        $context["imageTitle"] = twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "imageTitle", [], "any", false, false, false, 31);
        // line 32
        echo "    ";
        $context["extraAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "extraAttributes", [], "any", false, false, false, 32);
        // line 33
        echo "    ";
        $context["backgroundStyleAttribute"] = ((("background-image:" . (isset($context["imagePlaceholder"]) || array_key_exists("imagePlaceholder", $context) ? $context["imagePlaceholder"] : (function () { throw new RuntimeError('Variable "imagePlaceholder" does not exist.', 33, $this->source); })())) . "; ") . (((twig_get_attribute($this->env, $this->source, ($context["extraAttributes"] ?? null), "style", [], "any", true, true, false, 33) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["extraAttributes"] ?? null), "style", [], "any", false, false, false, 33)))) ? (twig_get_attribute($this->env, $this->source, ($context["extraAttributes"] ?? null), "style", [], "any", false, false, false, 33)) : ("")));
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 36
        echo "        ";
        $context["fallbackImageClasses"] = (isset($context["imageExtraClasses"]) || array_key_exists("imageExtraClasses", $context) ? $context["imageExtraClasses"] : (function () { throw new RuntimeError('Variable "imageExtraClasses" does not exist.', 36, $this->source); })());
        // line 37
        echo "        ";
        $context["fallbackBackgroundClasses"] = (isset($context["backgroundExtraClasses"]) || array_key_exists("backgroundExtraClasses", $context) ? $context["backgroundExtraClasses"] : (function () { throw new RuntimeError('Variable "backgroundExtraClasses" does not exist.', 37, $this->source); })());
        // line 38
        echo "        ";
        $context["fallbackBackgroundStyleAttribute"] = ((("background-image:" . (isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 38, $this->source); })())) . "; ") . (((twig_get_attribute($this->env, $this->source, ($context["extraAttributes"] ?? null), "style", [], "any", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["extraAttributes"] ?? null), "style", [], "any", false, false, false, 38)))) ? (twig_get_attribute($this->env, $this->source, ($context["extraAttributes"] ?? null), "style", [], "any", false, false, false, 38)) : ("")));
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('imageContainer', $context, $blocks);
        // line 58
        echo "
        ";
        // line 59
        $this->displayBlock('noScript', $context, $blocks);
        // line 77
        echo "    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 40
    public function block_imageContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "imageContainer"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "imageContainer"));

        // line 41
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "isBackground", [], "any", false, false, false, 41)) {
            // line 42
            echo "                ";
            $this->displayBlock('background', $context, $blocks);
            // line 48
            echo "            ";
        } else {
            // line 49
            echo "                ";
            $this->displayBlock('image', $context, $blocks);
            // line 56
            echo "            ";
        }
        // line 57
        echo "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 42
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "background"));

        // line 43
        echo "                    <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["backgroundClasses"]) || array_key_exists("backgroundClasses", $context) ? $context["backgroundClasses"] : (function () { throw new RuntimeError('Variable "backgroundClasses" does not exist.', 43, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 43, $this->source); })()), "jsName", [], "any", false, false, false, 43), "html", null, true);
        echo "__background ";
        echo twig_escape_filter($this->env, (isset($context["backgroundExtraClasses"]) || array_key_exists("backgroundExtraClasses", $context) ? $context["backgroundExtraClasses"] : (function () { throw new RuntimeError('Variable "backgroundExtraClasses" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\"
                         data-background-image=\"url('";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "')\"
                         title=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["imageTitle"]) || array_key_exists("imageTitle", $context) ? $context["imageTitle"] : (function () { throw new RuntimeError('Variable "imageTitle" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "\"
                        ";
        // line 46
        echo twig_call_macro($macros["component"], "macro_renderAttributes", [twig_array_merge((isset($context["extraAttributes"]) || array_key_exists("extraAttributes", $context) ? $context["extraAttributes"] : (function () { throw new RuntimeError('Variable "extraAttributes" does not exist.', 46, $this->source); })()), ["style" => (isset($context["backgroundStyleAttribute"]) || array_key_exists("backgroundStyleAttribute", $context) ? $context["backgroundStyleAttribute"] : (function () { throw new RuntimeError('Variable "backgroundStyleAttribute" does not exist.', 46, $this->source); })())])], 46, $context, $this->getSourceContext());
        echo "></div>
                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 49
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        // line 50
        echo "                    <img itemprop=\"image\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["imageClasses"]) || array_key_exists("imageClasses", $context) ? $context["imageClasses"] : (function () { throw new RuntimeError('Variable "imageClasses" does not exist.', 50, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "jsName", [], "any", false, false, false, 50), "html", null, true);
        echo "__image ";
        echo twig_escape_filter($this->env, (isset($context["imageExtraClasses"]) || array_key_exists("imageExtraClasses", $context) ? $context["imageExtraClasses"] : (function () { throw new RuntimeError('Variable "imageExtraClasses" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "\"
                         src=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["imagePlaceholder"]) || array_key_exists("imagePlaceholder", $context) ? $context["imagePlaceholder"] : (function () { throw new RuntimeError('Variable "imagePlaceholder" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\"
                         data-src=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "\"
                         alt=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["imageTitle"]) || array_key_exists("imageTitle", $context) ? $context["imageTitle"] : (function () { throw new RuntimeError('Variable "imageTitle" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "\"
                        ";
        // line 54
        echo twig_call_macro($macros["component"], "macro_renderAttributes", [(isset($context["extraAttributes"]) || array_key_exists("extraAttributes", $context) ? $context["extraAttributes"] : (function () { throw new RuntimeError('Variable "extraAttributes" does not exist.', 54, $this->source); })())], 54, $context, $this->getSourceContext());
        echo ">
                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 59
    public function block_noScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "noScript"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "noScript"));

        // line 60
        echo "            <noscript>
                ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), "isBackground", [], "any", false, false, false, 61)) {
            // line 62
            echo "                    ";
            $this->displayBlock('backgroundNoScript', $context, $blocks);
            // line 67
            echo "                ";
        } else {
            // line 68
            echo "                    ";
            $this->displayBlock('imageNoScript', $context, $blocks);
            // line 74
            echo "                ";
        }
        // line 75
        echo "            </noscript>
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 62
    public function block_backgroundNoScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "backgroundNoScript"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "backgroundNoScript"));

        // line 63
        echo "                        <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["backgroundClasses"]) || array_key_exists("backgroundClasses", $context) ? $context["backgroundClasses"] : (function () { throw new RuntimeError('Variable "backgroundClasses" does not exist.', 63, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["fallbackBackgroundClasses"]) || array_key_exists("fallbackBackgroundClasses", $context) ? $context["fallbackBackgroundClasses"] : (function () { throw new RuntimeError('Variable "fallbackBackgroundClasses" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "\"
                             title=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["imageTitle"]) || array_key_exists("imageTitle", $context) ? $context["imageTitle"] : (function () { throw new RuntimeError('Variable "imageTitle" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "\"
                            ";
        // line 65
        echo twig_call_macro($macros["component"], "macro_renderAttributes", [twig_array_merge((isset($context["extraAttributes"]) || array_key_exists("extraAttributes", $context) ? $context["extraAttributes"] : (function () { throw new RuntimeError('Variable "extraAttributes" does not exist.', 65, $this->source); })()), ["style" => (isset($context["fallbackBackgroundStyleAttribute"]) || array_key_exists("fallbackBackgroundStyleAttribute", $context) ? $context["fallbackBackgroundStyleAttribute"] : (function () { throw new RuntimeError('Variable "fallbackBackgroundStyleAttribute" does not exist.', 65, $this->source); })())])], 65, $context, $this->getSourceContext());
        echo "></div>
                    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 68
    public function block_imageNoScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "imageNoScript"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "imageNoScript"));

        // line 69
        echo "                        <img class=\"";
        echo twig_escape_filter($this->env, (isset($context["imageClasses"]) || array_key_exists("imageClasses", $context) ? $context["imageClasses"] : (function () { throw new RuntimeError('Variable "imageClasses" does not exist.', 69, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["fallbackImageClasses"]) || array_key_exists("fallbackImageClasses", $context) ? $context["fallbackImageClasses"] : (function () { throw new RuntimeError('Variable "fallbackImageClasses" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "\"
                             src=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["imageSrc"]) || array_key_exists("imageSrc", $context) ? $context["imageSrc"] : (function () { throw new RuntimeError('Variable "imageSrc" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "\"
                             alt=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["imageTitle"]) || array_key_exists("imageTitle", $context) ? $context["imageTitle"] : (function () { throw new RuntimeError('Variable "imageTitle" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "\"
                            ";
        // line 72
        echo twig_call_macro($macros["component"], "macro_renderAttributes", [(isset($context["extraAttributes"]) || array_key_exists("extraAttributes", $context) ? $context["extraAttributes"] : (function () { throw new RuntimeError('Variable "extraAttributes" does not exist.', 72, $this->source); })())], 72, $context, $this->getSourceContext());
        echo ">
                    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/lazy-image/lazy-image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 72,  397 => 71,  393 => 70,  386 => 69,  376 => 68,  364 => 65,  360 => 64,  353 => 63,  343 => 62,  332 => 75,  329 => 74,  326 => 68,  323 => 67,  320 => 62,  318 => 61,  315 => 60,  305 => 59,  293 => 54,  289 => 53,  285 => 52,  281 => 51,  272 => 50,  262 => 49,  250 => 46,  246 => 45,  242 => 44,  233 => 43,  223 => 42,  213 => 57,  210 => 56,  207 => 49,  204 => 48,  201 => 42,  198 => 41,  188 => 40,  178 => 77,  176 => 59,  173 => 58,  171 => 40,  168 => 39,  165 => 38,  162 => 37,  159 => 36,  140 => 35,  137 => 34,  134 => 33,  131 => 32,  128 => 31,  125 => 30,  122 => 29,  119 => 28,  116 => 27,  113 => 26,  110 => 25,  100 => 24,  86 => 20,  84 => 19,  81 => 18,  71 => 17,  61 => 1,  60 => 10,  59 => 9,  58 => 4,  56 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import model('component') as component %}

{% define config = {
    name: 'lazy-image',
    tag: 'lazy-image',
} %}

{% define data = {
    imageSrc: required,
    imagePlaceholder: '',
    isBackground: false,
    imageTitle: '',
    extraAttributes: {},
} %}

{% block extraClass %}
    js-viewport-intersection-observer__target
    {% if data.isBackground %}
        {{ config.name }}--background
    {% endif %}
{% endblock %}

{% block body %}
    {% set imageClasses = component.renderClass(config.name ~ '__image', modifiers) %}
    {% set imageExtraClasses = '' %}
    {% set backgroundClasses = component.renderClass(config.name ~ '__background', modifiers) %}
    {% set backgroundExtraClasses = '' %}
    {% set imageSrc = data.imageSrc %}
    {% set imagePlaceholder = data.imagePlaceholder ?: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=' %}
    {% set imageTitle = data.imageTitle %}
    {% set extraAttributes = data.extraAttributes %}
    {% set backgroundStyleAttribute = 'background-image:' ~ imagePlaceholder ~ '; ' ~ (extraAttributes.style ?? '') %}

    {% block content %}
        {% set fallbackImageClasses = imageExtraClasses %}
        {% set fallbackBackgroundClasses = backgroundExtraClasses %}
        {% set fallbackBackgroundStyleAttribute = 'background-image:' ~ imageSrc ~ '; ' ~ (extraAttributes.style ?? '') %}

        {% block imageContainer %}
            {% if data.isBackground %}
                {% block background %}
                    <div class=\"{{ backgroundClasses }} {{ config.jsName }}__background {{ backgroundExtraClasses }}\"
                         data-background-image=\"url('{{ imageSrc }}')\"
                         title=\"{{ imageTitle }}\"
                        {{ component.renderAttributes(extraAttributes | merge({style: backgroundStyleAttribute})) }}></div>
                {% endblock %}
            {% else %}
                {% block image %}
                    <img itemprop=\"image\" class=\"{{ imageClasses }} {{ config.jsName }}__image {{ imageExtraClasses }}\"
                         src=\"{{ imagePlaceholder }}\"
                         data-src=\"{{ imageSrc }}\"
                         alt=\"{{ imageTitle }}\"
                        {{ component.renderAttributes(extraAttributes) }}>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block noScript %}
            <noscript>
                {% if data.isBackground %}
                    {% block backgroundNoScript %}
                        <div class=\"{{ backgroundClasses }} {{ fallbackBackgroundClasses }}\"
                             title=\"{{ imageTitle }}\"
                            {{ component.renderAttributes(extraAttributes | merge({style: fallbackBackgroundStyleAttribute})) }}></div>
                    {% endblock %}
                {% else %}
                    {% block imageNoScript %}
                        <img class=\"{{ imageClasses }} {{ fallbackImageClasses }}\"
                             src=\"{{ imageSrc }}\"
                             alt=\"{{ imageTitle }}\"
                            {{ component.renderAttributes(extraAttributes) }}>
                    {% endblock %}
                {% endif %}
            </noscript>
        {% endblock %}
    {% endblock %}
{% endblock %}
", "@ShopUi/components/molecules/lazy-image/lazy-image.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/lazy-image/lazy-image.twig");
    }
}
