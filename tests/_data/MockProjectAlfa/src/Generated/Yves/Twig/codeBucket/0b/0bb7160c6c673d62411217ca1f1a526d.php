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

/* __string_template__31b06c4be28ec80183e245ca7585e48a */
class __TwigTemplate_37e474e90593b7f621bde0d6a1722c2d extends Template
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
        // line 1
        echo $this->env->getFunction('content_navigation')->getCallable()("navigation-main-desktop", "navigation-header");
    }

    public function getTemplateName()
    {
        return "__string_template__31b06c4be28ec80183e245ca7585e48a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ content_navigation('navigation-main-desktop', 'navigation-header') }}", "__string_template__31b06c4be28ec80183e245ca7585e48a", "");
    }
}
