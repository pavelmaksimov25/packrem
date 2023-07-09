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

/* @Profiler/profiler-script.html.twig */
class __TwigTemplate_89c0f9bd3c58cd186901b0428e9a6aea extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Profiler/profiler-script.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Profiler/profiler-script.html.twig"));

        // line 1
        echo "<script>
    class Profiler {
        downloadLink = document.querySelector('.js-profiler-svg-graph-button');
        svgContainer = document.querySelector('.js-profiler-svg-graph');

        init() {
            this.setDownloadUrl();
            this.setScrollPosition();
        }

        setDownloadUrl() {
            const svg = this.svgContainer.innerHTML;
            const blob = new Blob([svg.toString()]);

            this.downloadLink.download = 'profiler-call-graph.svg';
            this.downloadLink.href = window.URL.createObjectURL(blob);
        }

        setScrollPosition() {
            const wrapperWidth = this.svgContainer.offsetWidth;
            const svgRootNodeOffset = this.svgContainer.querySelector('svg #node1 text').getBBox().x;
            const ptToPxRatio = 1.33;

            this.svgContainer.scroll(svgRootNodeOffset * ptToPxRatio - wrapperWidth/2, 0);
        }
    }

    const profiler = new Profiler();
    profiler.init();
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Profiler/profiler-script.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    class Profiler {
        downloadLink = document.querySelector('.js-profiler-svg-graph-button');
        svgContainer = document.querySelector('.js-profiler-svg-graph');

        init() {
            this.setDownloadUrl();
            this.setScrollPosition();
        }

        setDownloadUrl() {
            const svg = this.svgContainer.innerHTML;
            const blob = new Blob([svg.toString()]);

            this.downloadLink.download = 'profiler-call-graph.svg';
            this.downloadLink.href = window.URL.createObjectURL(blob);
        }

        setScrollPosition() {
            const wrapperWidth = this.svgContainer.offsetWidth;
            const svgRootNodeOffset = this.svgContainer.querySelector('svg #node1 text').getBBox().x;
            const ptToPxRatio = 1.33;

            this.svgContainer.scroll(svgRootNodeOffset * ptToPxRatio - wrapperWidth/2, 0);
        }
    }

    const profiler = new Profiler();
    profiler.init();
</script>
", "@Profiler/profiler-script.html.twig", "/data/vendor/spryker/profiler/src/Spryker/Zed/Profiler/Presentation/profiler-script.html.twig");
    }
}
