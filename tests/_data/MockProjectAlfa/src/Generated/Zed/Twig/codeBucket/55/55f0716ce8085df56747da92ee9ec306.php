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

/* @Gui/layout/layout.twig */
class __TwigTemplate_9c2ba2a6274d44d674cb6aadf864091b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
            'head_css' => [$this, 'block_head_css'],
            'body_menu' => [$this, 'block_body_menu'],
            'section_title' => [$this, 'block_section_title'],
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
            'footer_js' => [$this, 'block_footer_js'],
            'common_js' => [$this, 'block_common_js'],
            'init_js' => [$this, 'block_init_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gui/layout/layout.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Gui/layout/layout.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html data-application-locale=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "locale", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>";
        // line 8
        $this->displayBlock('head_title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('head_css', $context, $blocks);
        // line 14
        echo "
</head>
<body>

<div id=\"wrapper\">

    ";
        // line 20
        $this->displayBlock('body_menu', $context, $blocks);
        // line 27
        echo "
    <div id=\"page-wrapper\" class=\"gray-bg\">
        <div class=\"row border-bottom\">
            <nav class=\"navbar navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                <div class=\"navbar-header\">
                    <a href=\"#\" class=\"navbar-minimalize minimalize-styl-2 btn btn-primary \"><i class=\"fa fa-bars\"></i></a>
                    ";
        // line 40
        echo "                </div>
                <ul class=\"nav navbar-top-links navbar-right\">
                    <li>
                        <span class=\"m-r-sm text-muted welcome-message\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Welcome"), "html", null, true);
        if (array_key_exists("username", $context)) {
            echo " <strong>";
            echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "</strong>";
        }
        if (array_key_exists("environment", $context)) {
            echo " <em>[";
            echo twig_escape_filter($this->env, (isset($context["environment"]) || array_key_exists("environment", $context) ? $context["environment"] : (function () { throw new RuntimeError('Variable "environment" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "]</em>";
        }
        echo "</span>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings"), "html", null, true);
        echo " <span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"/user/edit/password-reset\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset password"), "html", null, true);
        echo "</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"/auth/logout\">
                            <i class=\"fa fa-sign-out\"></i> ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Log out"), "html", null, true);
        echo "
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class=\"row wrapper border-bottom white-bg page-heading\">
            <div class=\"col-xs-12 col-md-6\">
                <h2>";
        // line 64
        $this->displayBlock('section_title', $context, $blocks);
        echo "</h2>
            </div>
            <div class=\"col-xs-12 col-md-6\">
                <div class=\"title-action\">
                    ";
        // line 68
        $this->displayBlock('action', $context, $blocks);
        // line 72
        echo "                </div>
            </div>
            <div class=\"col-xs-12\">
                ";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "twig", [], "any", false, false, false, 75), "getFunction", [0 => "breadcrumb"], "method", false, false, false, 75) != false)) {
            // line 76
            echo "                    ";
            $this->loadTemplate("@Gui/Partials/breadcrumb.twig", "@Gui/layout/layout.twig", 76)->display($context);
            // line 77
            echo "                ";
        } else {
            // line 78
            echo "                    ";
            $this->loadTemplate("@Gui/Partials/backward-compatible-breadcrumb.twig", "@Gui/layout/layout.twig", 78)->display($context);
            // line 79
            echo "                ";
        }
        // line 80
        echo "            </div>
        </div>

        <div class=\"wrapper wrapper-content\">

            ";
        // line 85
        $this->loadTemplate("@Messenger/Partials/flash-messages.twig", "@Gui/layout/layout.twig", 85)->display($context);
        // line 86
        echo "
            ";
        // line 87
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "
        </div>
        <div class=\"footer\">
            <div>
                <strong>Copyright</strong> Spryker Systems GmbH &copy; ";
        // line 92
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
            </div>
        </div>

    </div>
</div>

<div id=\"modal-alert\" class=\"modal fade\" role=\"dialog\" aria-labelledby=\"gridSystemModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content alert\" id=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\" id=\"modal-body\"></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>


";
        // line 115
        $this->displayBlock('footer_js', $context, $blocks);
        // line 123
        echo "
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_title"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_title"));

        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })())), "html", null, true);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_css"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_css"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo $this->env->getFunction('assetsPath')->getCallable()("css/spryker-zed-gui-commons.css");
        echo "\">
        <link href=\"https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Montserrat:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
    public function block_body_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_menu"));

        // line 21
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "twig", [], "any", false, false, false, 21), "getFunction", [0 => "navigation"], "method", false, false, false, 21) != false)) {
            // line 22
            echo "            ";
            $this->loadTemplate("@Gui/Partials/navigation.twig", "@Gui/layout/layout.twig", 22)->display($context);
            // line 23
            echo "        ";
        } else {
            // line 24
            echo "            ";
            $this->loadTemplate("@Gui/Partials/menu.twig", "@Gui/layout/layout.twig", 24)->display($context);
            // line 25
            echo "        ";
        }
        // line 26
        echo "    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 64
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_title"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_title"));

        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 64, $this->source); })())), "html", null, true);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 68
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        // line 69
        echo "                        ";
        // line 70
        echo "                        ";
        // line 71
        echo "                    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 87
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 115
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_js"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_js"));

        // line 116
        echo "    ";
        $this->displayBlock('common_js', $context, $blocks);
        // line 119
        echo "    ";
        $this->displayBlock('init_js', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 116
    public function block_common_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "common_js"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "common_js"));

        // line 117
        echo "        <script src=\"";
        echo $this->env->getFunction('assetsPath')->getCallable()("js/spryker-zed-gui-commons.js");
        echo "\"></script>
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 119
    public function block_init_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "init_js"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "init_js"));

        // line 120
        echo "        <script src=\"";
        echo $this->env->getFunction('assetsPath')->getCallable()("js/spryker-zed-gui-init.js");
        echo "\"></script>
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Gui/layout/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 120,  419 => 119,  406 => 117,  396 => 116,  385 => 119,  382 => 116,  372 => 115,  354 => 87,  344 => 71,  342 => 70,  340 => 69,  330 => 68,  309 => 64,  299 => 26,  296 => 25,  293 => 24,  290 => 23,  287 => 22,  284 => 21,  274 => 20,  260 => 11,  250 => 10,  229 => 8,  216 => 123,  214 => 115,  204 => 108,  185 => 92,  179 => 88,  177 => 87,  174 => 86,  172 => 85,  165 => 80,  162 => 79,  159 => 78,  156 => 77,  153 => 76,  151 => 75,  146 => 72,  144 => 68,  137 => 64,  125 => 55,  117 => 50,  111 => 47,  94 => 43,  89 => 40,  81 => 27,  79 => 20,  71 => 14,  69 => 10,  64 => 8,  55 => 2,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html data-application-locale=\"{{ app.locale }}\">
<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>{% block head_title %}{% if title is defined %}{{ title | trans }}{% endif %}{% endblock %}</title>

    {% block head_css %}
        <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-gui-commons.css') }}\">
        <link href=\"https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Montserrat:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    {% endblock %}

</head>
<body>

<div id=\"wrapper\">

    {% block body_menu %}
        {% if app.twig.getFunction('navigation') != false %}
            {% include '@Gui/Partials/navigation.twig' %}
        {% else %}
            {% include '@Gui/Partials/menu.twig' %}
        {% endif %}
    {% endblock %}

    <div id=\"page-wrapper\" class=\"gray-bg\">
        <div class=\"row border-bottom\">
            <nav class=\"navbar navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                <div class=\"navbar-header\">
                    <a href=\"#\" class=\"navbar-minimalize minimalize-styl-2 btn btn-primary \"><i class=\"fa fa-bars\"></i></a>
                    {#
                    <form role=\"search\" class=\"navbar-form-custom\" action=\"search_results.html\">
                        <div class=\"form-group\">
                            <input type=\"text\" placeholder=\"Search for something...\" class=\"form-control\" name=\"top-search\" id=\"top-search\">
                        </div>
                    </form>
                    #}
                </div>
                <ul class=\"nav navbar-top-links navbar-right\">
                    <li>
                        <span class=\"m-r-sm text-muted welcome-message\">{{ 'Welcome' | trans }}{% if username is defined %} <strong>{{ username }}</strong>{% endif %}{% if environment is defined %} <em>[{{ environment }}]</em>{% endif %}</span>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'Settings' | trans }} <span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"/user/edit/password-reset\">{{ 'Reset password' | trans }}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"/auth/logout\">
                            <i class=\"fa fa-sign-out\"></i> {{ 'Log out' | trans }}
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class=\"row wrapper border-bottom white-bg page-heading\">
            <div class=\"col-xs-12 col-md-6\">
                <h2>{% block section_title %}{% if title is defined %}{{ title|trans }}{% endif %}{% endblock %}</h2>
            </div>
            <div class=\"col-xs-12 col-md-6\">
                <div class=\"title-action\">
                    {% block action %}
                        {# add here only links with classes \"btn btn-sm btn-{color}\" #}
                        {# Example: <a href=\"\" class=\"btn btn-sm btn-primary\"><span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span> Back</a> #}
                    {% endblock %}
                </div>
            </div>
            <div class=\"col-xs-12\">
                {% if app.twig.getFunction('breadcrumb') != false %}
                    {% include '@Gui/Partials/breadcrumb.twig' %}
                {% else %}
                    {% include '@Gui/Partials/backward-compatible-breadcrumb.twig' %}
                {% endif %}
            </div>
        </div>

        <div class=\"wrapper wrapper-content\">

            {% include '@Messenger/Partials/flash-messages.twig' %}

            {% block content -%}{%- endblock %}

        </div>
        <div class=\"footer\">
            <div>
                <strong>Copyright</strong> Spryker Systems GmbH &copy; {{ 'now'|date('Y') }}
            </div>
        </div>

    </div>
</div>

<div id=\"modal-alert\" class=\"modal fade\" role=\"dialog\" aria-labelledby=\"gridSystemModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content alert\" id=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\" id=\"modal-body\"></div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">{{ 'Close' | trans }}</button>
            </div>
        </div>
    </div>
</div>


{% block footer_js %}
    {% block common_js %}
        <script src=\"{{ assetsPath('js/spryker-zed-gui-commons.js') }}\"></script>
    {% endblock %}
    {% block init_js %}
        <script src=\"{{ assetsPath('js/spryker-zed-gui-init.js') }}\"></script>
    {% endblock %}
{% endblock %}

</body>
</html>
", "@Gui/layout/layout.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation//Layout/layout.twig");
    }
}
