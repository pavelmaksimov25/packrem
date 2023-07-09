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

/* @Gui/Partials/menu.twig */
class __TwigTemplate_fb6178058a663f9617998b67b00de541 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gui/Partials/menu.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gui/Partials/menu.twig"));

        // line 61
        $macros["menu"] = $this->macros["menu"] = $this;
        // line 62
        echo "<nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
    <div class=\"sidebar-collapse\">
        <ul tabindex=\"0\" class=\"nav metismenu\" id=\"side-menu\">
            <li class=\"nav-header\">
                <div class=\"dropdown profile-element\">

                    <a href=\"/\" class=\"zed-logo\"></a>

                    <ul class=\"dropdown-menu animated fadeInRight m-t-xs\">
                        <li><a href=\"/auth/logout\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logout"), "html", null, true);
        echo "</a></li>
                    </ul>
                </div>
                <div class=\"logo-element\">
                    SP
                </div>
            </li>
            ";
        // line 78
        echo twig_call_macro($macros["menu"], "macro_tree", [twig_get_attribute($this->env, $this->source, (isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 78, $this->source); })()), "menu", [], "any", false, false, false, 78)], 78, $context, $this->getSourceContext());
        echo "
        </ul>
    </div>
</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1
    public function macro_leaf($__node__ = null, $__depth__ = 0, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "node" => $__node__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "leaf"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "leaf"));

            // line 2
            $macros["menu"] = $this;
            // line 4
            if (array_key_exists("node", $context)) {
                // line 5
                if (array_key_exists("menu_highlight", $context)) {
                    // line 6
                    if (((isset($context["menu_highlight"]) || array_key_exists("menu_highlight", $context) ? $context["menu_highlight"] : (function () { throw new RuntimeError('Variable "menu_highlight" does not exist.', 6, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 6, $this->source); })()), "uri", [], "any", false, false, false, 6))) {
                        // line 7
                        echo "<li class=\"item active\">";
                    } else {
                        // line 9
                        echo "<li class=\"item\">";
                    }
                } else {
                    // line 12
                    echo "<li class=\"item";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "is_active", [], "any", true, true, false, 12) && twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 12, $this->source); })()), "is_active", [], "any", false, false, false, 12))) ? (" active") : (""));
                    echo "\">";
                }
                // line 14
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 14, $this->source); })()), "uri", [], "any", false, false, false, 14), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "shortcut", [], "any", true, true, false, 14)) {
                    echo " data-hotkey=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 14, $this->source); })()), "shortcut", [], "any", false, false, false, 14), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 15
                echo twig_call_macro($macros["menu"], "macro_getNodeIcon", [(isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 15, $this->source); })())], 15, $context, $this->getSourceContext());
                echo "
            <span class=\"nav-label\">";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 16, $this->source); })()), "label", [], "any", false, false, false, 16)), "html", null, true);
                echo "</span>
        </a>
        </li>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_branch($__node__ = null, $__depth__ = 0, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "node" => $__node__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "branch"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "branch"));

            // line 23
            $macros["menu"] = $this;
            // line 25
            if (array_key_exists("node", $context)) {
                // line 26
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "is_active", [], "any", true, true, false, 26) && twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 26, $this->source); })()), "is_active", [], "any", false, false, false, 26))) ? (" active") : (""));
                echo "\">
            <a href=\"javascript:void(0)\">
                ";
                // line 28
                echo twig_call_macro($macros["menu"], "macro_getNodeIcon", [(isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 28, $this->source); })())], 28, $context, $this->getSourceContext());
                echo "
                <span class=\"nav-label\">";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 29, $this->source); })()), "label", [], "any", false, false, false, 29)), "html", null, true);
                echo "</span>
                <span class=\"fa arrow\"></span>
            </a>

            <ul class=\"nav nav-second-level collapse\">
                ";
                // line 34
                echo twig_call_macro($macros["menu"], "macro_tree", [twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 34, $this->source); })()), "children", [], "any", false, false, false, 34), ((isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new RuntimeError('Variable "depth" does not exist.', 34, $this->source); })()) + 1)], 34, $context, $this->getSourceContext());
                echo "
            </ul>
        </li>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 40
    public function macro_tree($__root__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "root" => $__root__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            // line 41
            $macros["menu"] = $this;
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["root"]) || array_key_exists("root", $context) ? $context["root"] : (function () { throw new RuntimeError('Variable "root" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 44
                if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", true, true, false, 44) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 44)))) {
                    // line 45
                    echo twig_call_macro($macros["menu"], "macro_branch", [$context["child"], 0], 45, $context, $this->getSourceContext());
                } else {
                    // line 47
                    echo twig_call_macro($macros["menu"], "macro_leaf", [$context["child"], 0], 47, $context, $this->getSourceContext());
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 52
    public function macro_getNodeIcon($__node__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "node" => $__node__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "getNodeIcon"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "getNodeIcon"));

            // line 53
            $context["defaultIcon"] = "fa-angle-double-right";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "icon", [], "any", true, true, false, 54) && (twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 54, $this->source); })()), "icon", [], "any", false, false, false, 54) != ""))) {
                // line 55
                echo "<i class=\"fa ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 55, $this->source); })()), "icon", [], "any", false, false, false, 55), "html", null, true);
                echo "\"></i>";
            } else {
                // line 57
                echo "<i class=\"fa ";
                echo twig_escape_filter($this->env, (isset($context["defaultIcon"]) || array_key_exists("defaultIcon", $context) ? $context["defaultIcon"] : (function () { throw new RuntimeError('Variable "defaultIcon" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "\"></i>";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@Gui/Partials/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 57,  291 => 55,  289 => 54,  287 => 53,  268 => 52,  248 => 47,  245 => 45,  243 => 44,  239 => 43,  237 => 41,  218 => 40,  198 => 34,  190 => 29,  186 => 28,  180 => 26,  178 => 25,  176 => 23,  156 => 22,  136 => 16,  132 => 15,  121 => 14,  116 => 12,  112 => 9,  109 => 7,  107 => 6,  105 => 5,  103 => 4,  101 => 2,  81 => 1,  66 => 78,  56 => 71,  45 => 62,  43 => 61,);
    }

    public function getSourceContext()
    {
        return new Source("{%- macro leaf(node, depth=0) -%}
    {%- import _self as menu -%}

    {%- if node is defined %}
        {%- if menu_highlight is defined -%}
            {%- if menu_highlight == node.uri -%}
                <li class=\"item active\">
            {%- else -%}
                <li class=\"item\">
            {%- endif -%}
        {%- else-%}
            <li class=\"item{{ node.is_active is defined and node.is_active ? \" active\" : \"\" }}\">
        {%- endif -%}
        <a href=\"{{ node.uri }}\"{% if node.shortcut is defined %} data-hotkey=\"{{ node.shortcut }}\"{% endif %}>
            {{ menu.getNodeIcon(node) }}
            <span class=\"nav-label\">{{ node.label | trans }}</span>
        </a>
        </li>
    {% endif -%}
{%- endmacro -%}

{%- macro branch(node, depth=0) -%}
    {%- import _self as menu -%}

    {%- if node is defined %}
        <li class=\"{{ node.is_active is defined and node.is_active ? \" active\" : \"\" }}\">
            <a href=\"javascript:void(0)\">
                {{ menu.getNodeIcon(node) }}
                <span class=\"nav-label\">{{ node.label | trans }}</span>
                <span class=\"fa arrow\"></span>
            </a>

            <ul class=\"nav nav-second-level collapse\">
                {{ menu.tree(node.children, (depth + 1)) }}
            </ul>
        </li>
    {% endif -%}
{%- endmacro -%}

{%- macro tree(root) -%}
    {%- import _self as menu -%}

    {%- for child in root -%}
        {%- if child.children is defined and child.children is not empty -%}
            {{ menu.branch(child, 0) }}
        {%- else -%}
            {{ menu.leaf(child, 0) }}
        {%- endif -%}
    {%- endfor -%}
{%- endmacro -%}

{%- macro getNodeIcon(node) -%}
    {%- set defaultIcon = 'fa-angle-double-right' -%}
    {%- if node.icon is defined and node.icon != '' -%}
        <i class=\"fa {{ node.icon }}\"></i>
    {%- else -%}
        <i class=\"fa {{ defaultIcon }}\"></i>
    {%- endif -%}
{%- endmacro -%}

{%- import _self as menu -%}
<nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
    <div class=\"sidebar-collapse\">
        <ul tabindex=\"0\" class=\"nav metismenu\" id=\"side-menu\">
            <li class=\"nav-header\">
                <div class=\"dropdown profile-element\">

                    <a href=\"/\" class=\"zed-logo\"></a>

                    <ul class=\"dropdown-menu animated fadeInRight m-t-xs\">
                        <li><a href=\"/auth/logout\">{{ 'Logout' | trans }}</a></li>
                    </ul>
                </div>
                <div class=\"logo-element\">
                    SP
                </div>
            </li>
            {{ menu.tree(navigation.menu) }}
        </ul>
    </div>
</nav>
", "@Gui/Partials/menu.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Partials/menu.twig");
    }
}
