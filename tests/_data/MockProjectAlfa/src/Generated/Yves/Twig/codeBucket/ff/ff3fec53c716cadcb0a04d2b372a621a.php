<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;
use Twig\Template;

/* @ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig */
class __TwigTemplate_09f7e85fb6f0402d67135a3a5dd169a6 extends Template
{
    private $source;

    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'class' => [$this, 'block_class'],
            'body' => [$this, 'block_body'],
            'mobileTrigger' => [$this, 'block_mobileTrigger'],
            'url' => [$this, 'block_url'],
            'link' => [$this, 'block_link'],
            'externalUrl' => [$this, 'block_externalUrl'],
            'other' => [$this, 'block_other'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('atom')->getCallable()('node'), '@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig', 1);
    }

    /**
     * @return void
     */
    protected function doDisplay(array $context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig'));

        // line 3
        if (!array_key_exists('config', $context)) {
            $context['config'] = [];
        }$context['config'] = array_replace_recursive(['name' => 'navigation-multilevel-node', 'tag' => 'li'], $context['config']); // line 8
        if (!array_key_exists('data', $context)) {
            $context['data'] = [];
        }$context['data'] = array_replace_recursive(['levelMenu' => 1, 'parentJsName' => ''], $context['data']); // line 13
        $context['cssClass'] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 13, $this->source);
        })()), 'node', [], 'any', false, false, false, 13), 'cssClass', [], 'any', false, false, false, 13))) ? ('') : ((' ' . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 13, $this->source);
        })()), 'node', [], 'any', false, false, false, 13), 'cssClass', [], 'any', false, false, false, 13))));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);
    }

    // line 15

    /**
     * @return void
     */
    public function block_class($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'class'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'class'));

        // line 16
        echo '    ';
        $this->displayParentBlock('class', $context, $blocks);
        echo twig_escape_filter($this->env, (isset($context['cssClass']) || array_key_exists('cssClass', $context) ? $context['cssClass'] : (function (): void {
            throw new RuntimeError('Variable "cssClass" does not exist.', 16, $this->source);
        })()), 'html', null, true);
        echo ' ';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 16, $this->source);
        })()), 'parentJsName', [], 'any', false, false, false, 16), 'html', null, true);
        echo '__trigger ';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 16, $this->source);
        })()), 'parentJsName', [], 'any', false, false, false, 16), 'html', null, true);
        echo "__item
";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 19

    /**
     * @return void
     */
    public function block_body($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'body'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'body'));

        // line 20
        echo '    ';
        $this->displayParentBlock('body', $context, $blocks);
        echo "

    ";
        // line 22
        if (
            (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 22, $this->source);
            })()), 'node', [], 'any', false, false, false, 22), 'children', [], 'any', false, false, false, 22)) > 0)
        ) {
            // line 23
            echo '        <div class="menu-wrapper menu-wrapper--lvl-';
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 23, $this->source);
            })()), 'levelMenu', [], 'any', false, false, false, 23), 'html', null, true);
            echo ' ';
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 23, $this->source);
            })()), 'parentJsName', [], 'any', false, false, false, 23), 'html', null, true);
            echo "__wrapper is-hidden-sm-lg\">
            <ul class=\"menu menu--lvl-";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 24, $this->source);
            })()), 'levelMenu', [], 'any', false, false, false, 24), 'html', null, true);
            echo "\">
                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 25, $this->source);
            })()), 'node', [], 'any', false, false, false, 25), 'children', [], 'any', false, false, false, 25));
            foreach ($context['_seq'] as $context['_key'] => $context['childNode']) {
                // line 26
                echo '                    ';
                $context['hasChildren'] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context['childNode'], 'children', [], 'any', false, false, false, 26)) > 0);
                // line 27
                echo "
                    ";
                // line 28
                $this->loadTemplate($this->env->getFunction('molecule')->getCallable()('navigation-multilevel-node'), '@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig', 28)->display(twig_to_array([
                'class' => (('menu__item menu__item--lvl-' . twig_get_attribute(
                    $this->env,
                    $this->source, // line 29
                    (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                        throw new RuntimeError('Variable "data" does not exist.', 29, $this->source);
                    })()),
                    'levelMenu',
                    [],
                    'any',
                    false,
                    false,
                    false,
                    29,
                )) . (((isset($context['hasChildren']) || array_key_exists('hasChildren', $context) ? $context['hasChildren'] : (function (): void {
                        throw new RuntimeError('Variable "hasChildren" does not exist.', 29, $this->source);
                })())) ? (' menu__item--has-children-list') : (''))), 'data' => [
                'node' => // line 31
                $context['childNode'], 'levelMenu' => (twig_get_attribute(
                    $this->env,
                    $this->source, // line 32
                    (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                        throw new RuntimeError('Variable "data" does not exist.', 32, $this->source);
                    })()),
                    'levelMenu',
                    [],
                    'any',
                    false,
                    false,
                    false,
                    32,
                ) + 1), 'parentJsName' => twig_get_attribute(
                    $this->env,
                    $this->source, // line 33
                    (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                        throw new RuntimeError('Variable "data" does not exist.', 33, $this->source);
                    })()),
                    'parentJsName',
                    [],
                    'any',
                    false,
                    false,
                    false,
                    33,
                )]]));
                // line 36
                echo '                ';
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childNode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </ul>
        </div>
    ";
        }

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 42

    /**
     * @return void
     */
    public function block_mobileTrigger($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'mobileTrigger'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'mobileTrigger'));

        // line 43
        echo '   ';
        if (
            (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 43, $this->source);
            })()), 'node', [], 'any', false, false, false, 43), 'children', [], 'any', false, false, false, 43)) > 0)
        ) {
            // line 44
            echo '       <button class="menu__trigger-button menu__trigger-button--lvl-';
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 44, $this->source);
            })()), 'levelMenu', [], 'any', false, false, false, 44) - 1), 'html', null, true);
            echo ' ';
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 44, $this->source);
            })()), 'parentJsName', [], 'any', false, false, false, 44), 'html', null, true);
            echo '__touch-trigger" data-toggle-target=".';
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 44, $this->source);
            })()), 'parentJsName', [], 'any', false, false, false, 44), 'html', null, true);
            echo "__wrapper\" data-class-to-toggle=\"is-hidden-sm-lg\">
           ";
            // line 45
            $this->loadTemplate($this->env->getFunction('atom')->getCallable()('icon'), '@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig', 45)->display(twig_to_array(['modifiers' => [0 => 'small'], 'class' => 'menu__trigger-button-icon', 'data' => ['name' => 'caret-down']]));
            // line 52
            echo "       </button>
   ";
        }

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 56

    /**
     * @return void
     */
    public function block_url($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'url'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'url'));

        // line 57
        echo '    <span class="menu__trigger menu__trigger--lvl-';
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 57, $this->source);
        })()), 'levelMenu', [], 'any', false, false, false, 57) - 1), 'html', null, true);
        echo "\">
        <a class=\"menu__link menu__link--lvl-";
        // line 58
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 58, $this->source);
        })()), 'levelMenu', [], 'any', false, false, false, 58) - 1), 'html', null, true);
        echo '" href="';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 58, $this->source);
        })()), 'node', [], 'any', false, false, false, 58), 'url', [], 'any', false, false, false, 58), 'html', null, true);
        echo '">';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 58, $this->source);
        })()), 'node', [], 'any', false, false, false, 58), 'title', [], 'any', false, false, false, 58), 'html', null, true);
        echo "</a>

        ";
        // line 60
        $this->displayBlock('mobileTrigger', $context, $blocks);
        echo "
    </span>
";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 64

    /**
     * @return void
     */
    public function block_link($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'link'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'link'));

        // line 65
        echo '    <span class="menu__trigger menu__trigger--lvl-';
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 65, $this->source);
        })()), 'levelMenu', [], 'any', false, false, false, 65) - 1), 'html', null, true);
        echo "\">
        <a class=\"menu__link menu__link--lvl-";
        // line 66
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 66, $this->source);
        })()), 'levelMenu', [], 'any', false, false, false, 66) - 1), 'html', null, true);
        echo '" href="';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 66, $this->source);
        })()), 'node', [], 'any', false, false, false, 66), 'url', [], 'any', false, false, false, 66), 'html', null, true);
        echo '">';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 66, $this->source);
        })()), 'node', [], 'any', false, false, false, 66), 'title', [], 'any', false, false, false, 66), 'html', null, true);
        echo "</a>

        ";
        // line 68
        $this->displayBlock('mobileTrigger', $context, $blocks);
        echo "
    </span>
";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 72

    /**
     * @return void
     */
    public function block_externalUrl($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'externalUrl'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'externalUrl'));

        // line 73
        echo '    <span class="menu__trigger menu__trigger--lvl-';
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 73, $this->source);
        })()), 'levelMenu', [], 'any', false, false, false, 73) - 1), 'html', null, true);
        echo "\">
        <a class=\"menu__link menu__link--lvl-";
        // line 74
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 74, $this->source);
        })()), 'levelMenu', [], 'any', false, false, false, 74) - 1), 'html', null, true);
        echo '" href="';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 74, $this->source);
        })()), 'node', [], 'any', false, false, false, 74), 'url', [], 'any', false, false, false, 74), 'html', null, true);
        echo '" target="_blank">';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 74, $this->source);
        })()), 'node', [], 'any', false, false, false, 74), 'title', [], 'any', false, false, false, 74), 'html', null, true);
        echo "</a>

        ";
        // line 76
        $this->displayBlock('mobileTrigger', $context, $blocks);
        echo "
    </span>
";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 80

    /**
     * @return void
     */
    public function block_other($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'other'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'other'));

        // line 81
        echo '    <span class="menu__trigger menu__trigger--lvl-';
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 81, $this->source);
        })()), 'levelMenu', [], 'any', false, false, false, 81) - 1), 'html', null, true);
        echo "\">
        <span class=\"menu__text menu__text--lvl-";
        // line 82
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 82, $this->source);
        })()), 'levelMenu', [], 'any', false, false, false, 82) - 1), 'html', null, true);
        echo '">';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 82, $this->source);
        })()), 'node', [], 'any', false, false, false, 82), 'title', [], 'any', false, false, false, 82), 'html', null, true);
        echo "</span>

        ";
        // line 84
        $this->displayBlock('mobileTrigger', $context, $blocks);
        echo "
    </span>
";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    public function getTemplateName()
    {
        return '@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig';
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [329 => 84, 322 => 82, 317 => 81, 307 => 80, 294 => 76, 285 => 74, 280 => 73, 270 => 72, 257 => 68, 248 => 66, 243 => 65, 233 => 64, 220 => 60, 211 => 58, 206 => 57, 196 => 56, 184 => 52, 182 => 45, 173 => 44, 170 => 43, 160 => 42, 147 => 37, 141 => 36, 139 => 33, 138 => 32, 137 => 31, 136 => 29, 135 => 28, 132 => 27, 129 => 26, 125 => 25, 121 => 24, 114 => 23, 112 => 22, 106 => 20, 96 => 19, 78 => 16, 68 => 15, 58 => 1, 56 => 13, 55 => 8, 54 => 3, 41 => 1];
    }

    public function getSourceContext()
    {
        return new Source("{% extends atom('node') %}

{% define config = {
    name: 'navigation-multilevel-node',
    tag: 'li'
} %}

{% define data = {
    levelMenu: 1,
    parentJsName: ''
} %}

{% set cssClass = data.node.cssClass is empty ? '' : ' ' ~ data.node.cssClass %}

{% block class %}
    {{ parent() }}{{ cssClass }} {{ data.parentJsName }}__trigger {{ data.parentJsName }}__item
{% endblock %}

{% block body %}
    {{ parent() }}

    {% if(data.node.children | length > 0) %}
        <div class=\"menu-wrapper menu-wrapper--lvl-{{ data.levelMenu }} {{ data.parentJsName }}__wrapper is-hidden-sm-lg\">
            <ul class=\"menu menu--lvl-{{ data.levelMenu }}\">
                {% for childNode in data.node.children %}
                    {% set hasChildren = childNode.children | length > 0 %}

                    {% include molecule('navigation-multilevel-node') with {
                        class: 'menu__item menu__item--lvl-' ~ data.levelMenu ~ (hasChildren ? ' menu__item--has-children-list' : ''),
                        data: {
                            node: childNode,
                            levelMenu: data.levelMenu + 1,
                            parentJsName: data.parentJsName
                        }
                    } only %}
                {% endfor %}
            </ul>
        </div>
    {% endif %}
{% endblock %}

{% block mobileTrigger %}
   {% if(data.node.children | length > 0) %}
       <button class=\"menu__trigger-button menu__trigger-button--lvl-{{ data.levelMenu - 1 }} {{ data.parentJsName }}__touch-trigger\" data-toggle-target=\".{{ data.parentJsName }}__wrapper\" data-class-to-toggle=\"is-hidden-sm-lg\">
           {% include atom('icon') with {
               modifiers: ['small'],
               class: 'menu__trigger-button-icon',
               data: {
                   name: 'caret-down'
               }
           } only %}
       </button>
   {% endif %}
{% endblock %}

{% block url %}
    <span class=\"menu__trigger menu__trigger--lvl-{{ data.levelMenu - 1 }}\">
        <a class=\"menu__link menu__link--lvl-{{ data.levelMenu - 1 }}\" href=\"{{ data.node.url }}\">{{ data.node.title }}</a>

        {{block('mobileTrigger')}}
    </span>
{% endblock %}

{% block link %}
    <span class=\"menu__trigger menu__trigger--lvl-{{ data.levelMenu - 1 }}\">
        <a class=\"menu__link menu__link--lvl-{{ data.levelMenu - 1 }}\" href=\"{{ data.node.url }}\">{{ data.node.title }}</a>

        {{block('mobileTrigger')}}
    </span>
{% endblock %}

{% block externalUrl %}
    <span class=\"menu__trigger menu__trigger--lvl-{{ data.levelMenu - 1 }}\">
        <a class=\"menu__link menu__link--lvl-{{ data.levelMenu - 1 }}\" href=\"{{ data.node.url }}\" target=\"_blank\">{{ data.node.title }}</a>

        {{block('mobileTrigger')}}
    </span>
{% endblock %}

{% block other %}
    <span class=\"menu__trigger menu__trigger--lvl-{{ data.levelMenu - 1 }}\">
        <span class=\"menu__text menu__text--lvl-{{ data.levelMenu - 1 }}\">{{ data.node.title }}</span>

        {{block('mobileTrigger')}}
    </span>
{% endblock %}

", '@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig', '/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig');
    }
}
