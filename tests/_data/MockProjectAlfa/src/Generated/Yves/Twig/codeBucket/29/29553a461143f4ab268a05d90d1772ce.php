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

/* __string_template__8d99232969a1241a14d3988df142b8df */
class __TwigTemplate_036b15a2518456d7d017bf1c6afd8302 extends Template
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
        echo $this->env->getFunction('content_navigation')->getCallable()("navigation-social-links", "footer-social-links");
    }

    public function getTemplateName()
    {
        return "__string_template__8d99232969a1241a14d3988df142b8df";
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
        return new Source("{{ content_navigation('navigation-social-links', 'footer-social-links') }}", "__string_template__8d99232969a1241a14d3988df142b8df", "");
    }
}
