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

/* __string_template__47eede7eb36ccb5f3fff5e86f4d2bf31 */
class __TwigTemplate_26025927e8cf503ee14887189b147325 extends Template
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
        echo $this->env->getFunction('content_navigation')->getCallable()("navigation-partners", "footer-partners");
    }

    public function getTemplateName()
    {
        return "__string_template__47eede7eb36ccb5f3fff5e86f4d2bf31";
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
        return new Source("{{ content_navigation('navigation-partners', 'footer-partners') }}", "__string_template__47eede7eb36ccb5f3fff5e86f4d2bf31", "");
    }
}
