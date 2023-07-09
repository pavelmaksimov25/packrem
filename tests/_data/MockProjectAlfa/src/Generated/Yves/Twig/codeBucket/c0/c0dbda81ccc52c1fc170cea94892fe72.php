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

/* __string_template__e716fbb440533170a0a6c35b08191b17 */
class __TwigTemplate_2ba1023107831c33db6cea9c7108f666 extends Template
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
        echo $this->env->getFunction('content_navigation')->getCallable()("navigation-footer-categories", "navigation-footer");
        echo $this->env->getFunction('content_navigation')->getCallable()("navigation-footer-brands", "navigation-footer");
        echo $this->env->getFunction('content_navigation')->getCallable()("navigation-footer", "navigation-footer");
    }

    public function getTemplateName()
    {
        return "__string_template__e716fbb440533170a0a6c35b08191b17";
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
        return new Source("{{ content_navigation('navigation-footer-categories', 'navigation-footer') }}{{ content_navigation('navigation-footer-brands', 'navigation-footer') }}{{ content_navigation('navigation-footer', 'navigation-footer') }}", "__string_template__e716fbb440533170a0a6c35b08191b17", "");
    }
}
