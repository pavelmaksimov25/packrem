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

/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_86210ffb6ec50c5dd42d2b926ae9a204 extends Template
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
            'thumbnailWrapper' => [$this, 'block_thumbnailWrapper'],
            'imageContainer' => [$this, 'block_imageContainer'],
            'image' => [$this, 'block_image'],
            'imageLink' => [$this, 'block_imageLink'],
            'productThumbnail' => [$this, 'block_productThumbnail'],
            'labels' => [$this, 'block_labels'],
            'productAbstractLabels' => [$this, 'block_productAbstractLabels'],
            'groups' => [$this, 'block_groups'],
            'productAbstractGroups' => [$this, 'block_productAbstractGroups'],
            'content' => [$this, 'block_content'],
            'colors' => [$this, 'block_colors'],
            'name' => [$this, 'block_name'],
            'link' => [$this, 'block_link'],
            'title' => [$this, 'block_title'],
            'sku' => [$this, 'block_sku'],
            'rating' => [$this, 'block_rating'],
            'productAbstractRating' => [$this, 'block_productAbstractRating'],
            'priceContainer' => [$this, 'block_priceContainer'],
            'price' => [$this, 'block_price'],
            'actionsContainer' => [$this, 'block_actionsContainer'],
            'actions' => [$this, 'block_actions'],
            'actionsContent' => [$this, 'block_actionsContent'],
            'action' => [$this, 'block_action'],
            'actionInner' => [$this, 'block_actionInner'],
            'icon' => [$this, 'block_icon'],
            'ajaxAddToCart' => [$this, 'block_ajaxAddToCart'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()("component"), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "product-item", "tag" => "product-item"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["product" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "name" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
($context["data"] ?? null), "product", [], "any", false, true, false, 10), "name", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 10), "name", [], "any", false, false, false, 10))) : ("")), "sku" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["data"] ?? null), "product", [], "any", false, true, false, 11), "sku", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 11), "sku", [], "any", false, false, false, 11))) : ("")), "url" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["data"] ?? null), "product", [], "any", false, true, false, 12), "url", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 12), "url", [], "any", false, false, false, 12))) : ("")), "image" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["data"] ?? null), "product", [], "any", false, true, false, 13), "images", [], "any", true, true, false, 13)) ? (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 13), "images", [], "any", false, true, false, 13), 0, [], "any", false, true, false, 13), "externalUrlSmall", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 13), "images", [], "any", false, true, false, 13), 0, [], "any", false, true, false, 13), "externalUrlSmall", [], "any", false, false, false, 13))) : (""))) : ("")), "idProductAbstract" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["data"] ?? null), "product", [], "any", false, true, false, 14), "idProductAbstract", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 14), "idProductAbstract", [], "any", false, false, false, 14))) : ("")), "currencyIsoCode" => null, "metaSku" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["data"] ?? null), "product", [], "any", false, true, false, 16), "sku", [], "any", true, true, false, 16)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "product", [], "any", false, false, false, 16), "sku", [], "any", false, false, false, 16)) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 16), "abstract_sku", [], "any", true, true, false, 16)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "product", [], "any", false, false, false, 16), "abstract_sku", [], "any", false, false, false, 16)) : (""))))], $context['data']);        // line 19
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["itemscope" => "", "itemtype" => "https://schema.org/Product"], $context['attributes']);        // line 24
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_extraClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraClass"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extraClass"));

        echo " box ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "jsName", [], "any", false, false, false, 26), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "    ";
        $this->displayBlock('thumbnailWrapper', $context, $blocks);
        // line 70
        echo "
    ";
        // line 71
        $this->displayBlock('labels', $context, $blocks);
        // line 82
        echo "
    ";
        // line 83
        $this->displayBlock('groups', $context, $blocks);
        // line 90
        echo "
    ";
        // line 91
        $this->displayBlock('content', $context, $blocks);
        // line 161
        echo "
    ";
        // line 162
        $this->displayBlock('actionsContainer', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_thumbnailWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "thumbnailWrapper"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "thumbnailWrapper"));

        // line 30
        echo "        ";
        $context["extraClass"] = "";
        // line 31
        echo "        ";
        $context["modifiers"] = [];
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('imageContainer', $context, $blocks);
        // line 69
        echo "    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 33
    public function block_imageContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "imageContainer"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "imageContainer"));

        // line 34
        echo "            ";
        // line 53
        echo "
            ";
        // line 54
        $this->displayBlock('image', $context, $blocks);
        // line 68
        echo "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 54
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        // line 55
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "url", [], "any", false, false, false, 55)) {
            // line 56
            echo "                    ";
            $this->displayBlock('imageLink', $context, $blocks);
            // line 61
            echo "                ";
        }
        // line 62
        echo "                ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 62, $this->source); })()), "url", [], "any", false, false, false, 62)) {
            // line 63
            echo "                    ";
            $this->displayBlock('productThumbnail', $context, $blocks);
            // line 66
            echo "                ";
        }
        // line 67
        echo "            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 56
    public function block_imageLink($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "imageLink"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "imageLink"));

        // line 57
        echo "                        <a class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 57, $this->source); })()), "jsName", [], "any", false, false, false, 57), "html", null, true);
        echo "__link-detail-page\" itemprop=\"url\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()), "url", [], "any", false, false, false, 57));
        echo "\">
                            ";
        // line 58
        echo twig_call_macro($macros["macros"], "macro_thumbnail", [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "image", [], "any", false, false, false, 58), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), (isset($context["extraClass"]) || array_key_exists("extraClass", $context) ? $context["extraClass"] : (function () { throw new RuntimeError('Variable "extraClass" does not exist.', 58, $this->source); })()), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 58, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 58, $this->source); })()), "jsName", [], "any", false, false, false, 58)], 58, $context, $this->getSourceContext());
        echo "
                        </a>
                    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 63
    public function block_productThumbnail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productThumbnail"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productThumbnail"));

        // line 64
        echo "                        ";
        echo twig_call_macro($macros["macros"], "macro_thumbnail", [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "image", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), (isset($context["extraClass"]) || array_key_exists("extraClass", $context) ? $context["extraClass"] : (function () { throw new RuntimeError('Variable "extraClass" does not exist.', 64, $this->source); })()), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 64, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 64, $this->source); })()), "jsName", [], "any", false, false, false, 64)], 64, $context, $this->getSourceContext());
        echo "
                    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 71
    public function block_labels($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "labels"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "labels"));

        // line 72
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 72, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 72)) {
            // line 73
            echo "            ";
            $this->displayBlock('productAbstractLabels', $context, $blocks);
            // line 80
            echo "        ";
        }
        // line 81
        echo "    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 73
    public function block_productAbstractLabels($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productAbstractLabels"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productAbstractLabels"));

        // line 74
        echo "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductAbstractLabelWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 74, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 74)])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 74, 2041904760)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["parentJsName" => twig_get_attribute($this->env, $this->source,             // line 76
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 76, $this->source); })()), "jsName", [], "any", false, false, false, 76)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 79
        echo "            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 83
    public function block_groups($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "groups"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "groups"));

        // line 84
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 84, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 84)) {
            // line 85
            echo "            ";
            $this->displayBlock('productAbstractGroups', $context, $blocks);
            // line 88
            echo "        ";
        }
        // line 89
        echo "    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 85
    public function block_productAbstractGroups($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productAbstractGroups"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productAbstractGroups"));

        // line 86
        echo "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductGroupWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 86, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 86)])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 86, 1403792339)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 87
        echo "            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 91
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 92
        echo "        ";
        $this->displayBlock('colors', $context, $blocks);
        // line 99
        echo "
        ";
        // line 100
        $this->displayBlock('name', $context, $blocks);
        // line 115
        echo "
        ";
        // line 116
        $this->displayBlock('sku', $context, $blocks);
        // line 123
        echo "
        ";
        // line 124
        $this->displayBlock('rating', $context, $blocks);
        // line 135
        echo "
        ";
        // line 136
        $this->displayBlock('priceContainer', $context, $blocks);
        // line 160
        echo "    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 92
    public function block_colors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "colors"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "colors"));

        // line 93
        echo "            ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductGroupColorWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 93, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 93), 1 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 93), "selectedAttributes", [], "any", true, true, false, 93) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 93), "selectedAttributes", [], "any", false, false, false, 93)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 93), "selectedAttributes", [], "any", false, false, false, 93)) : ([]))])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 93, 55065974)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget, $this->env->getFunction('view')->getCallable()("product-item-color-selector", "ProductGroupWidget"))), ["data" => ["parentJsName" => twig_get_attribute($this->env, $this->source,             // line 95
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 95, $this->source); })()), "jsName", [], "any", false, false, false, 95)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 98
        echo "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 100
    public function block_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        // line 101
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 101, $this->source); })()), "name", [], "any", false, false, false, 101) && twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 101, $this->source); })()), "url", [], "any", false, false, false, 101))) {
            // line 102
            echo "                ";
            $this->displayBlock('link', $context, $blocks);
            // line 107
            echo "            ";
        }
        // line 108
        echo "
            ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "name", [], "any", false, false, false, 109) &&  !twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "url", [], "any", false, false, false, 109))) {
            // line 110
            echo "                ";
            $this->displayBlock('title', $context, $blocks);
            // line 113
            echo "            ";
        }
        // line 114
        echo "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 102
    public function block_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link"));

        // line 103
        echo "                    <a class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 103, $this->source); })()), "name", [], "any", false, false, false, 103), "html", null, true);
        echo "__name ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 103, $this->source); })()), "jsName", [], "any", false, false, false, 103), "html", null, true);
        echo "__name ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 103, $this->source); })()), "jsName", [], "any", false, false, false, 103), "html", null, true);
        echo "__link-detail-page\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 103, $this->source); })()), "url", [], "any", false, false, false, 103));
        echo "\">
                        <span itemprop=\"name\">";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "name", [], "any", false, false, false, 104), "html", null, true);
        echo "</span>
                    </a>
                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 110
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 111
        echo "                    <span itemprop=\"name\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 111, $this->source); })()), "name", [], "any", false, false, false, 111), "html", null, true);
        echo "__name ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 111, $this->source); })()), "jsName", [], "any", false, false, false, 111), "html", null, true);
        echo "__name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 111, $this->source); })()), "name", [], "any", false, false, false, 111), "html", null, true);
        echo "</span>
                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 116
    public function block_sku($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sku"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sku"));

        // line 117
        echo "            <meta class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 117, $this->source); })()), "jsName", [], "any", false, false, false, 117), "html", null, true);
        echo "__sku\" itemprop=\"sku\" content=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 117, $this->source); })()), "metaSku", [], "any", false, false, false, 117), "html", null, true);
        echo "\">

            ";
        // line 119
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 119, $this->source); })()), "sku", [], "any", false, false, false, 119)) {
            // line 120
            echo "                <div itemprop=\"sku\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 120, $this->source); })()), "sku", [], "any", false, false, false, 120), "html", null, true);
            echo "</div>
            ";
        }
        // line 122
        echo "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 124
    public function block_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rating"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rating"));

        // line 125
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 125, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 125)) {
            // line 126
            echo "                ";
            $this->displayBlock('productAbstractRating', $context, $blocks);
            // line 133
            echo "            ";
        }
        // line 134
        echo "        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 126
    public function block_productAbstractRating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productAbstractRating"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productAbstractRating"));

        // line 127
        echo "                    ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("DisplayProductAbstractReviewWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 127, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 127)])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 127, 1577105171)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["parentJsName" => twig_get_attribute($this->env, $this->source,             // line 129
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 129, $this->source); })()), "jsName", [], "any", false, false, false, 129)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 132
        echo "                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 136
    public function block_priceContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "priceContainer"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "priceContainer"));

        // line 137
        echo "            <div class=\"spacing-y\">
                ";
        // line 138
        $this->displayBlock('price', $context, $blocks);
        // line 158
        echo "            </div>
        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 138
    public function block_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price"));

        // line 139
        echo "                    ";
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeePricePermissionPlugin")) {
            // line 140
            echo "                        ";
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 140, "1379452966")->display(twig_to_array(["data" => ["amount" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 142
($context["data"] ?? null), "product", [], "any", false, true, false, 142), "prices", [], "any", false, true, false, 142), "DEFAULT", [], "any", true, true, false, 142)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 142), "prices", [], "any", false, true, false, 142), "DEFAULT", [], "any", false, false, false, 142), null)) : (null)), "originalAmount" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 143
($context["data"] ?? null), "product", [], "any", false, true, false, 143), "prices", [], "any", false, true, false, 143), "ORIGINAL", [], "any", true, true, false, 143)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 143), "prices", [], "any", false, true, false, 143), "ORIGINAL", [], "any", false, false, false, 143), null)) : (null)), "currencyIsoCode" => twig_get_attribute($this->env, $this->source,             // line 144
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 144, $this->source); })()), "currencyIsoCode", [], "any", false, false, false, 144), "parentJsName" => twig_get_attribute($this->env, $this->source,             // line 145
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 145, $this->source); })()), "jsName", [], "any", false, false, false, 145)]]));
            // line 154
            echo "                    ";
        } else {
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.access.cannot_see_price"), "html", null, true);
        }
        // line 157
        echo "                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 162
    public function block_actionsContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionsContainer"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionsContainer"));

        // line 163
        echo "        <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 163, $this->source); })()), "name", [], "any", false, false, false, 163), "html", null, true);
        echo "__actions\">
            ";
        // line 164
        $this->displayBlock('actions', $context, $blocks);
        // line 202
        echo "        </div>
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 164
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 165
        echo "                <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 165, $this->source); })()), "name", [], "any", false, false, false, 165), "html", null, true);
        echo "__actions-row\">
                    ";
        // line 166
        $this->displayBlock('actionsContent', $context, $blocks);
        // line 200
        echo "                </div>
            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 166
    public function block_actionsContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionsContent"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionsContent"));

        // line 167
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 167, $this->source); })()), "url", [], "any", false, false, false, 167)) {
            // line 168
            echo "                            ";
            $this->displayBlock('action', $context, $blocks);
            // line 187
            echo "                        ";
        }
        // line 188
        echo "
                        ";
        // line 189
        $this->displayBlock('ajaxAddToCart', $context, $blocks);
        // line 199
        echo "                    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 168
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        // line 169
        echo "                                <a class=\"button button--expand ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 169, $this->source); })()), "jsName", [], "any", false, false, false, 169), "html", null, true);
        echo "__link-detail-page\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 169, $this->source); })()), "url", [], "any", false, false, false, 169));
        echo "\">
                                    ";
        // line 170
        $this->displayBlock('actionInner', $context, $blocks);
        // line 185
        echo "                                </a>
                            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 170
    public function block_actionInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionInner"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionInner"));

        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.view"), "html", null, true);
        // line 173
        $context["iconModifiers"] = [0 => "small"];
        // line 174
        echo "                                        ";
        $context["iconName"] = "angle-double-right";
        // line 175
        echo "
                                        ";
        // line 176
        $this->displayBlock('icon', $context, $blocks);
        // line 184
        echo "                                    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 176
    public function block_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon"));

        // line 177
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()("icon"), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 177)->display(twig_to_array(["modifiers" =>         // line 178
(isset($context["iconModifiers"]) || array_key_exists("iconModifiers", $context) ? $context["iconModifiers"] : (function () { throw new RuntimeError('Variable "iconModifiers" does not exist.', 178, $this->source); })()), "data" => ["name" =>         // line 180
(isset($context["iconName"]) || array_key_exists("iconName", $context) ? $context["iconName"] : (function () { throw new RuntimeError('Variable "iconName" does not exist.', 180, $this->source); })())]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 189
    public function block_ajaxAddToCart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ajaxAddToCart"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ajaxAddToCart"));

        // line 190
        echo "                            ";
        if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 190, $this->source); })()), "product", [], "any", false, false, false, 190)) && $this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeeAddToCartPermissionPlugin"))) {
            // line 191
            echo "                                ";
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductAbstractAddToCartButtonWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 191, $this->source); })()), "product", [], "any", false, false, false, 191)])) {
                $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 191, 1336740317)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["buttonExtraClasses" => (twig_get_attribute($this->env, $this->source,                 // line 193
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 193, $this->source); })()), "jsName", [], "any", false, false, false, 193) . "__ajax-button-add-to-cart")]]));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 197
            echo "                            ";
        }
        // line 198
        echo "                        ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 34
    public function macro_thumbnail($__src__ = null, $__alt__ = "", $__extraClass__ = "", $__modifiers__ = [], $__jsName__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "src" => $__src__,
            "alt" => $__alt__,
            "extraClass" => $__extraClass__,
            "modifiers" => $__modifiers__,
            "jsName" => $__jsName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "thumbnail"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "thumbnail"));

            // line 35
            echo "                ";
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 35, "558584485")->display(twig_to_array(["class" =>             // line 36
(isset($context["extraClass"]) || array_key_exists("extraClass", $context) ? $context["extraClass"] : (function () { throw new RuntimeError('Variable "extraClass" does not exist.', 36, $this->source); })()), "modifiers" => twig_array_merge(            // line 37
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 37, $this->source); })()), [0 => "thumbnail"]), "data" => ["imageSrc" =>             // line 39
(isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 39, $this->source); })()), "imageTitle" =>             // line 40
(isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 40, $this->source); })())], "embed" => ["jsName" =>             // line 43
(isset($context["jsName"]) || array_key_exists("jsName", $context) ? $context["jsName"] : (function () { throw new RuntimeError('Variable "jsName" does not exist.', 43, $this->source); })())]]));
            // line 52
            echo "            ";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  976 => 52,  974 => 43,  973 => 40,  972 => 39,  971 => 37,  970 => 36,  968 => 35,  945 => 34,  935 => 198,  932 => 197,  929 => 193,  926 => 191,  923 => 190,  913 => 189,  903 => 180,  902 => 178,  901 => 177,  891 => 176,  881 => 184,  879 => 176,  876 => 175,  873 => 174,  871 => 173,  869 => 171,  859 => 170,  848 => 185,  846 => 170,  839 => 169,  829 => 168,  819 => 199,  817 => 189,  814 => 188,  811 => 187,  808 => 168,  805 => 167,  795 => 166,  784 => 200,  782 => 166,  777 => 165,  767 => 164,  756 => 202,  754 => 164,  749 => 163,  739 => 162,  729 => 157,  726 => 155,  723 => 154,  721 => 145,  720 => 144,  719 => 143,  718 => 142,  716 => 140,  713 => 139,  703 => 138,  692 => 158,  690 => 138,  687 => 137,  677 => 136,  667 => 132,  664 => 129,  661 => 127,  651 => 126,  641 => 134,  638 => 133,  635 => 126,  632 => 125,  622 => 124,  612 => 122,  606 => 120,  604 => 119,  596 => 117,  586 => 116,  569 => 111,  559 => 110,  546 => 104,  535 => 103,  525 => 102,  515 => 114,  512 => 113,  509 => 110,  507 => 109,  504 => 108,  501 => 107,  498 => 102,  495 => 101,  485 => 100,  475 => 98,  472 => 95,  469 => 93,  459 => 92,  449 => 160,  447 => 136,  444 => 135,  442 => 124,  439 => 123,  437 => 116,  434 => 115,  432 => 100,  429 => 99,  426 => 92,  416 => 91,  406 => 87,  401 => 86,  391 => 85,  381 => 89,  378 => 88,  375 => 85,  372 => 84,  362 => 83,  352 => 79,  349 => 76,  346 => 74,  336 => 73,  326 => 81,  323 => 80,  320 => 73,  317 => 72,  307 => 71,  294 => 64,  284 => 63,  271 => 58,  264 => 57,  254 => 56,  244 => 67,  241 => 66,  238 => 63,  235 => 62,  232 => 61,  229 => 56,  226 => 55,  216 => 54,  206 => 68,  204 => 54,  201 => 53,  199 => 34,  189 => 33,  179 => 69,  177 => 33,  174 => 32,  171 => 31,  168 => 30,  158 => 29,  148 => 162,  145 => 161,  143 => 91,  140 => 90,  138 => 83,  135 => 82,  133 => 71,  130 => 70,  127 => 29,  117 => 28,  97 => 26,  87 => 1,  85 => 24,  84 => 19,  83 => 16,  82 => 14,  81 => 13,  80 => 12,  79 => 11,  78 => 10,  77 => 9,  76 => 8,  75 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_86210ffb6ec50c5dd42d2b926ae9a204___558584485 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 35
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("lazy-image"), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 35);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 47
        echo "                        ";
        $context["imageExtraClasses"] = ((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 47, $this->source); })()), "jsName", [], "any", false, false, false, 47)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 47, $this->source); })()), "jsName", [], "any", false, false, false, 47) . "__image")) : (""));
        // line 48
        echo "
                        ";
        // line 49
        $this->displayParentBlock("content", $context, $blocks);
        echo "
                    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1274 => 49,  1271 => 48,  1268 => 47,  1258 => 46,  1236 => 35,  976 => 52,  974 => 43,  973 => 40,  972 => 39,  971 => 37,  970 => 36,  968 => 35,  945 => 34,  935 => 198,  932 => 197,  929 => 193,  926 => 191,  923 => 190,  913 => 189,  903 => 180,  902 => 178,  901 => 177,  891 => 176,  881 => 184,  879 => 176,  876 => 175,  873 => 174,  871 => 173,  869 => 171,  859 => 170,  848 => 185,  846 => 170,  839 => 169,  829 => 168,  819 => 199,  817 => 189,  814 => 188,  811 => 187,  808 => 168,  805 => 167,  795 => 166,  784 => 200,  782 => 166,  777 => 165,  767 => 164,  756 => 202,  754 => 164,  749 => 163,  739 => 162,  729 => 157,  726 => 155,  723 => 154,  721 => 145,  720 => 144,  719 => 143,  718 => 142,  716 => 140,  713 => 139,  703 => 138,  692 => 158,  690 => 138,  687 => 137,  677 => 136,  667 => 132,  664 => 129,  661 => 127,  651 => 126,  641 => 134,  638 => 133,  635 => 126,  632 => 125,  622 => 124,  612 => 122,  606 => 120,  604 => 119,  596 => 117,  586 => 116,  569 => 111,  559 => 110,  546 => 104,  535 => 103,  525 => 102,  515 => 114,  512 => 113,  509 => 110,  507 => 109,  504 => 108,  501 => 107,  498 => 102,  495 => 101,  485 => 100,  475 => 98,  472 => 95,  469 => 93,  459 => 92,  449 => 160,  447 => 136,  444 => 135,  442 => 124,  439 => 123,  437 => 116,  434 => 115,  432 => 100,  429 => 99,  426 => 92,  416 => 91,  406 => 87,  401 => 86,  391 => 85,  381 => 89,  378 => 88,  375 => 85,  372 => 84,  362 => 83,  352 => 79,  349 => 76,  346 => 74,  336 => 73,  326 => 81,  323 => 80,  320 => 73,  317 => 72,  307 => 71,  294 => 64,  284 => 63,  271 => 58,  264 => 57,  254 => 56,  244 => 67,  241 => 66,  238 => 63,  235 => 62,  232 => 61,  229 => 56,  226 => 55,  216 => 54,  206 => 68,  204 => 54,  201 => 53,  199 => 34,  189 => 33,  179 => 69,  177 => 33,  174 => 32,  171 => 31,  168 => 30,  158 => 29,  148 => 162,  145 => 161,  143 => 91,  140 => 90,  138 => 83,  135 => 82,  133 => 71,  130 => 70,  127 => 29,  117 => 28,  97 => 26,  87 => 1,  85 => 24,  84 => 19,  83 => 16,  82 => 14,  81 => 13,  80 => 12,  79 => 11,  78 => 10,  77 => 9,  76 => 8,  75 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_86210ffb6ec50c5dd42d2b926ae9a204___2041904760 extends Template
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
        // line 74
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 74, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 74);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1530 => 74,  1274 => 49,  1271 => 48,  1268 => 47,  1258 => 46,  1236 => 35,  976 => 52,  974 => 43,  973 => 40,  972 => 39,  971 => 37,  970 => 36,  968 => 35,  945 => 34,  935 => 198,  932 => 197,  929 => 193,  926 => 191,  923 => 190,  913 => 189,  903 => 180,  902 => 178,  901 => 177,  891 => 176,  881 => 184,  879 => 176,  876 => 175,  873 => 174,  871 => 173,  869 => 171,  859 => 170,  848 => 185,  846 => 170,  839 => 169,  829 => 168,  819 => 199,  817 => 189,  814 => 188,  811 => 187,  808 => 168,  805 => 167,  795 => 166,  784 => 200,  782 => 166,  777 => 165,  767 => 164,  756 => 202,  754 => 164,  749 => 163,  739 => 162,  729 => 157,  726 => 155,  723 => 154,  721 => 145,  720 => 144,  719 => 143,  718 => 142,  716 => 140,  713 => 139,  703 => 138,  692 => 158,  690 => 138,  687 => 137,  677 => 136,  667 => 132,  664 => 129,  661 => 127,  651 => 126,  641 => 134,  638 => 133,  635 => 126,  632 => 125,  622 => 124,  612 => 122,  606 => 120,  604 => 119,  596 => 117,  586 => 116,  569 => 111,  559 => 110,  546 => 104,  535 => 103,  525 => 102,  515 => 114,  512 => 113,  509 => 110,  507 => 109,  504 => 108,  501 => 107,  498 => 102,  495 => 101,  485 => 100,  475 => 98,  472 => 95,  469 => 93,  459 => 92,  449 => 160,  447 => 136,  444 => 135,  442 => 124,  439 => 123,  437 => 116,  434 => 115,  432 => 100,  429 => 99,  426 => 92,  416 => 91,  406 => 87,  401 => 86,  391 => 85,  381 => 89,  378 => 88,  375 => 85,  372 => 84,  362 => 83,  352 => 79,  349 => 76,  346 => 74,  336 => 73,  326 => 81,  323 => 80,  320 => 73,  317 => 72,  307 => 71,  294 => 64,  284 => 63,  271 => 58,  264 => 57,  254 => 56,  244 => 67,  241 => 66,  238 => 63,  235 => 62,  232 => 61,  229 => 56,  226 => 55,  216 => 54,  206 => 68,  204 => 54,  201 => 53,  199 => 34,  189 => 33,  179 => 69,  177 => 33,  174 => 32,  171 => 31,  168 => 30,  158 => 29,  148 => 162,  145 => 161,  143 => 91,  140 => 90,  138 => 83,  135 => 82,  133 => 71,  130 => 70,  127 => 29,  117 => 28,  97 => 26,  87 => 1,  85 => 24,  84 => 19,  83 => 16,  82 => 14,  81 => 13,  80 => 12,  79 => 11,  78 => 10,  77 => 9,  76 => 8,  75 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_86210ffb6ec50c5dd42d2b926ae9a204___1403792339 extends Template
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
        // line 86
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 86, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 86);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1796 => 86,  1530 => 74,  1274 => 49,  1271 => 48,  1268 => 47,  1258 => 46,  1236 => 35,  976 => 52,  974 => 43,  973 => 40,  972 => 39,  971 => 37,  970 => 36,  968 => 35,  945 => 34,  935 => 198,  932 => 197,  929 => 193,  926 => 191,  923 => 190,  913 => 189,  903 => 180,  902 => 178,  901 => 177,  891 => 176,  881 => 184,  879 => 176,  876 => 175,  873 => 174,  871 => 173,  869 => 171,  859 => 170,  848 => 185,  846 => 170,  839 => 169,  829 => 168,  819 => 199,  817 => 189,  814 => 188,  811 => 187,  808 => 168,  805 => 167,  795 => 166,  784 => 200,  782 => 166,  777 => 165,  767 => 164,  756 => 202,  754 => 164,  749 => 163,  739 => 162,  729 => 157,  726 => 155,  723 => 154,  721 => 145,  720 => 144,  719 => 143,  718 => 142,  716 => 140,  713 => 139,  703 => 138,  692 => 158,  690 => 138,  687 => 137,  677 => 136,  667 => 132,  664 => 129,  661 => 127,  651 => 126,  641 => 134,  638 => 133,  635 => 126,  632 => 125,  622 => 124,  612 => 122,  606 => 120,  604 => 119,  596 => 117,  586 => 116,  569 => 111,  559 => 110,  546 => 104,  535 => 103,  525 => 102,  515 => 114,  512 => 113,  509 => 110,  507 => 109,  504 => 108,  501 => 107,  498 => 102,  495 => 101,  485 => 100,  475 => 98,  472 => 95,  469 => 93,  459 => 92,  449 => 160,  447 => 136,  444 => 135,  442 => 124,  439 => 123,  437 => 116,  434 => 115,  432 => 100,  429 => 99,  426 => 92,  416 => 91,  406 => 87,  401 => 86,  391 => 85,  381 => 89,  378 => 88,  375 => 85,  372 => 84,  362 => 83,  352 => 79,  349 => 76,  346 => 74,  336 => 73,  326 => 81,  323 => 80,  320 => 73,  317 => 72,  307 => 71,  294 => 64,  284 => 63,  271 => 58,  264 => 57,  254 => 56,  244 => 67,  241 => 66,  238 => 63,  235 => 62,  232 => 61,  229 => 56,  226 => 55,  216 => 54,  206 => 68,  204 => 54,  201 => 53,  199 => 34,  189 => 33,  179 => 69,  177 => 33,  174 => 32,  171 => 31,  168 => 30,  158 => 29,  148 => 162,  145 => 161,  143 => 91,  140 => 90,  138 => 83,  135 => 82,  133 => 71,  130 => 70,  127 => 29,  117 => 28,  97 => 26,  87 => 1,  85 => 24,  84 => 19,  83 => 16,  82 => 14,  81 => 13,  80 => 12,  79 => 11,  78 => 10,  77 => 9,  76 => 8,  75 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_86210ffb6ec50c5dd42d2b926ae9a204___55065974 extends Template
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
        // line 93
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 93, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 93);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2062 => 93,  1796 => 86,  1530 => 74,  1274 => 49,  1271 => 48,  1268 => 47,  1258 => 46,  1236 => 35,  976 => 52,  974 => 43,  973 => 40,  972 => 39,  971 => 37,  970 => 36,  968 => 35,  945 => 34,  935 => 198,  932 => 197,  929 => 193,  926 => 191,  923 => 190,  913 => 189,  903 => 180,  902 => 178,  901 => 177,  891 => 176,  881 => 184,  879 => 176,  876 => 175,  873 => 174,  871 => 173,  869 => 171,  859 => 170,  848 => 185,  846 => 170,  839 => 169,  829 => 168,  819 => 199,  817 => 189,  814 => 188,  811 => 187,  808 => 168,  805 => 167,  795 => 166,  784 => 200,  782 => 166,  777 => 165,  767 => 164,  756 => 202,  754 => 164,  749 => 163,  739 => 162,  729 => 157,  726 => 155,  723 => 154,  721 => 145,  720 => 144,  719 => 143,  718 => 142,  716 => 140,  713 => 139,  703 => 138,  692 => 158,  690 => 138,  687 => 137,  677 => 136,  667 => 132,  664 => 129,  661 => 127,  651 => 126,  641 => 134,  638 => 133,  635 => 126,  632 => 125,  622 => 124,  612 => 122,  606 => 120,  604 => 119,  596 => 117,  586 => 116,  569 => 111,  559 => 110,  546 => 104,  535 => 103,  525 => 102,  515 => 114,  512 => 113,  509 => 110,  507 => 109,  504 => 108,  501 => 107,  498 => 102,  495 => 101,  485 => 100,  475 => 98,  472 => 95,  469 => 93,  459 => 92,  449 => 160,  447 => 136,  444 => 135,  442 => 124,  439 => 123,  437 => 116,  434 => 115,  432 => 100,  429 => 99,  426 => 92,  416 => 91,  406 => 87,  401 => 86,  391 => 85,  381 => 89,  378 => 88,  375 => 85,  372 => 84,  362 => 83,  352 => 79,  349 => 76,  346 => 74,  336 => 73,  326 => 81,  323 => 80,  320 => 73,  317 => 72,  307 => 71,  294 => 64,  284 => 63,  271 => 58,  264 => 57,  254 => 56,  244 => 67,  241 => 66,  238 => 63,  235 => 62,  232 => 61,  229 => 56,  226 => 55,  216 => 54,  206 => 68,  204 => 54,  201 => 53,  199 => 34,  189 => 33,  179 => 69,  177 => 33,  174 => 32,  171 => 31,  168 => 30,  158 => 29,  148 => 162,  145 => 161,  143 => 91,  140 => 90,  138 => 83,  135 => 82,  133 => 71,  130 => 70,  127 => 29,  117 => 28,  97 => 26,  87 => 1,  85 => 24,  84 => 19,  83 => 16,  82 => 14,  81 => 13,  80 => 12,  79 => 11,  78 => 10,  77 => 9,  76 => 8,  75 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_86210ffb6ec50c5dd42d2b926ae9a204___1577105171 extends Template
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
        // line 127
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 127, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 127);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2328 => 127,  2062 => 93,  1796 => 86,  1530 => 74,  1274 => 49,  1271 => 48,  1268 => 47,  1258 => 46,  1236 => 35,  976 => 52,  974 => 43,  973 => 40,  972 => 39,  971 => 37,  970 => 36,  968 => 35,  945 => 34,  935 => 198,  932 => 197,  929 => 193,  926 => 191,  923 => 190,  913 => 189,  903 => 180,  902 => 178,  901 => 177,  891 => 176,  881 => 184,  879 => 176,  876 => 175,  873 => 174,  871 => 173,  869 => 171,  859 => 170,  848 => 185,  846 => 170,  839 => 169,  829 => 168,  819 => 199,  817 => 189,  814 => 188,  811 => 187,  808 => 168,  805 => 167,  795 => 166,  784 => 200,  782 => 166,  777 => 165,  767 => 164,  756 => 202,  754 => 164,  749 => 163,  739 => 162,  729 => 157,  726 => 155,  723 => 154,  721 => 145,  720 => 144,  719 => 143,  718 => 142,  716 => 140,  713 => 139,  703 => 138,  692 => 158,  690 => 138,  687 => 137,  677 => 136,  667 => 132,  664 => 129,  661 => 127,  651 => 126,  641 => 134,  638 => 133,  635 => 126,  632 => 125,  622 => 124,  612 => 122,  606 => 120,  604 => 119,  596 => 117,  586 => 116,  569 => 111,  559 => 110,  546 => 104,  535 => 103,  525 => 102,  515 => 114,  512 => 113,  509 => 110,  507 => 109,  504 => 108,  501 => 107,  498 => 102,  495 => 101,  485 => 100,  475 => 98,  472 => 95,  469 => 93,  459 => 92,  449 => 160,  447 => 136,  444 => 135,  442 => 124,  439 => 123,  437 => 116,  434 => 115,  432 => 100,  429 => 99,  426 => 92,  416 => 91,  406 => 87,  401 => 86,  391 => 85,  381 => 89,  378 => 88,  375 => 85,  372 => 84,  362 => 83,  352 => 79,  349 => 76,  346 => 74,  336 => 73,  326 => 81,  323 => 80,  320 => 73,  317 => 72,  307 => 71,  294 => 64,  284 => 63,  271 => 58,  264 => 57,  254 => 56,  244 => 67,  241 => 66,  238 => 63,  235 => 62,  232 => 61,  229 => 56,  226 => 55,  216 => 54,  206 => 68,  204 => 54,  201 => 53,  199 => 34,  189 => 33,  179 => 69,  177 => 33,  174 => 32,  171 => 31,  168 => 30,  158 => 29,  148 => 162,  145 => 161,  143 => 91,  140 => 90,  138 => 83,  135 => 82,  133 => 71,  130 => 70,  127 => 29,  117 => 28,  97 => 26,  87 => 1,  85 => 24,  84 => 19,  83 => 16,  82 => 14,  81 => 13,  80 => 12,  79 => 11,  78 => 10,  77 => 9,  76 => 8,  75 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_86210ffb6ec50c5dd42d2b926ae9a204___1379452966 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'originalPrice' => [$this, 'block_originalPrice'],
            'originalPriceInner' => [$this, 'block_originalPriceInner'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 140
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()("money-price"), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 140);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 148
    public function block_originalPrice($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "originalPrice"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "originalPrice"));

        // line 149
        echo "                                ";
        $this->displayBlock('originalPriceInner', $context, $blocks);
        // line 152
        echo "                            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 149
    public function block_originalPriceInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "originalPriceInner"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "originalPriceInner"));

        // line 150
        echo "                                    ";
        $this->displayParentBlock("originalPriceInner", $context, $blocks);
        echo "
                                ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2651 => 150,  2641 => 149,  2631 => 152,  2628 => 149,  2618 => 148,  2596 => 140,  2328 => 127,  2062 => 93,  1796 => 86,  1530 => 74,  1274 => 49,  1271 => 48,  1268 => 47,  1258 => 46,  1236 => 35,  976 => 52,  974 => 43,  973 => 40,  972 => 39,  971 => 37,  970 => 36,  968 => 35,  945 => 34,  935 => 198,  932 => 197,  929 => 193,  926 => 191,  923 => 190,  913 => 189,  903 => 180,  902 => 178,  901 => 177,  891 => 176,  881 => 184,  879 => 176,  876 => 175,  873 => 174,  871 => 173,  869 => 171,  859 => 170,  848 => 185,  846 => 170,  839 => 169,  829 => 168,  819 => 199,  817 => 189,  814 => 188,  811 => 187,  808 => 168,  805 => 167,  795 => 166,  784 => 200,  782 => 166,  777 => 165,  767 => 164,  756 => 202,  754 => 164,  749 => 163,  739 => 162,  729 => 157,  726 => 155,  723 => 154,  721 => 145,  720 => 144,  719 => 143,  718 => 142,  716 => 140,  713 => 139,  703 => 138,  692 => 158,  690 => 138,  687 => 137,  677 => 136,  667 => 132,  664 => 129,  661 => 127,  651 => 126,  641 => 134,  638 => 133,  635 => 126,  632 => 125,  622 => 124,  612 => 122,  606 => 120,  604 => 119,  596 => 117,  586 => 116,  569 => 111,  559 => 110,  546 => 104,  535 => 103,  525 => 102,  515 => 114,  512 => 113,  509 => 110,  507 => 109,  504 => 108,  501 => 107,  498 => 102,  495 => 101,  485 => 100,  475 => 98,  472 => 95,  469 => 93,  459 => 92,  449 => 160,  447 => 136,  444 => 135,  442 => 124,  439 => 123,  437 => 116,  434 => 115,  432 => 100,  429 => 99,  426 => 92,  416 => 91,  406 => 87,  401 => 86,  391 => 85,  381 => 89,  378 => 88,  375 => 85,  372 => 84,  362 => 83,  352 => 79,  349 => 76,  346 => 74,  336 => 73,  326 => 81,  323 => 80,  320 => 73,  317 => 72,  307 => 71,  294 => 64,  284 => 63,  271 => 58,  264 => 57,  254 => 56,  244 => 67,  241 => 66,  238 => 63,  235 => 62,  232 => 61,  229 => 56,  226 => 55,  216 => 54,  206 => 68,  204 => 54,  201 => 53,  199 => 34,  189 => 33,  179 => 69,  177 => 33,  174 => 32,  171 => 31,  168 => 30,  158 => 29,  148 => 162,  145 => 161,  143 => 91,  140 => 90,  138 => 83,  135 => 82,  133 => 71,  130 => 70,  127 => 29,  117 => 28,  97 => 26,  87 => 1,  85 => 24,  84 => 19,  83 => 16,  82 => 14,  81 => 13,  80 => 12,  79 => 11,  78 => 10,  77 => 9,  76 => 8,  75 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_86210ffb6ec50c5dd42d2b926ae9a204___1336740317 extends Template
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
        // line 191
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 191, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 191);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2908 => 191,  2651 => 150,  2641 => 149,  2631 => 152,  2628 => 149,  2618 => 148,  2596 => 140,  2328 => 127,  2062 => 93,  1796 => 86,  1530 => 74,  1274 => 49,  1271 => 48,  1268 => 47,  1258 => 46,  1236 => 35,  976 => 52,  974 => 43,  973 => 40,  972 => 39,  971 => 37,  970 => 36,  968 => 35,  945 => 34,  935 => 198,  932 => 197,  929 => 193,  926 => 191,  923 => 190,  913 => 189,  903 => 180,  902 => 178,  901 => 177,  891 => 176,  881 => 184,  879 => 176,  876 => 175,  873 => 174,  871 => 173,  869 => 171,  859 => 170,  848 => 185,  846 => 170,  839 => 169,  829 => 168,  819 => 199,  817 => 189,  814 => 188,  811 => 187,  808 => 168,  805 => 167,  795 => 166,  784 => 200,  782 => 166,  777 => 165,  767 => 164,  756 => 202,  754 => 164,  749 => 163,  739 => 162,  729 => 157,  726 => 155,  723 => 154,  721 => 145,  720 => 144,  719 => 143,  718 => 142,  716 => 140,  713 => 139,  703 => 138,  692 => 158,  690 => 138,  687 => 137,  677 => 136,  667 => 132,  664 => 129,  661 => 127,  651 => 126,  641 => 134,  638 => 133,  635 => 126,  632 => 125,  622 => 124,  612 => 122,  606 => 120,  604 => 119,  596 => 117,  586 => 116,  569 => 111,  559 => 110,  546 => 104,  535 => 103,  525 => 102,  515 => 114,  512 => 113,  509 => 110,  507 => 109,  504 => 108,  501 => 107,  498 => 102,  495 => 101,  485 => 100,  475 => 98,  472 => 95,  469 => 93,  459 => 92,  449 => 160,  447 => 136,  444 => 135,  442 => 124,  439 => 123,  437 => 116,  434 => 115,  432 => 100,  429 => 99,  426 => 92,  416 => 91,  406 => 87,  401 => 86,  391 => 85,  381 => 89,  378 => 88,  375 => 85,  372 => 84,  362 => 83,  352 => 79,  349 => 76,  346 => 74,  336 => 73,  326 => 81,  323 => 80,  320 => 73,  317 => 72,  307 => 71,  294 => 64,  284 => 63,  271 => 58,  264 => 57,  254 => 56,  244 => 67,  241 => 66,  238 => 63,  235 => 62,  232 => 61,  229 => 56,  226 => 55,  216 => 54,  206 => 68,  204 => 54,  201 => 53,  199 => 34,  189 => 33,  179 => 69,  177 => 33,  174 => 32,  171 => 31,  168 => 30,  158 => 29,  148 => 162,  145 => 161,  143 => 91,  140 => 90,  138 => 83,  135 => 82,  133 => 71,  130 => 70,  127 => 29,  117 => 28,  97 => 26,  87 => 1,  85 => 24,  84 => 19,  83 => 16,  82 => 14,  81 => 13,  80 => 12,  79 => 11,  78 => 10,  77 => 9,  76 => 8,  75 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}
