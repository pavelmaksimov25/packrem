<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;
use Twig\Template;

/* @@SprykerShop:ShopUi/components/molecules/form/form.twig */
class __TwigTemplate_5adbee3edd2fa2393a97becb22636940 extends Template
{
    private $source;

    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
            'errors' => [$this, 'block_errors'],
            'fieldset' => [$this, 'block_fieldset'],
            'fields' => [$this, 'block_fields'],
            'field' => [$this, 'block_field'],
            'actions' => [$this, 'block_actions'],
            'cancel' => [$this, 'block_cancel'],
            'submit' => [$this, 'block_submit'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()('component'), '@@SprykerShop:ShopUi/components/molecules/form/form.twig', 1);
    }

    /**
     * @return void
     */
    protected function doDisplay(array $context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@@SprykerShop:ShopUi/components/molecules/form/form.twig'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@@SprykerShop:ShopUi/components/molecules/form/form.twig'));

        // line 3
        if (!array_key_exists('config', $context)) {
            $context['config'] = [];
        }$context['config'] = array_replace_recursive(['name' => 'form'], $context['config']); // line 7
        if (!array_key_exists('data', $context)) {
            $context['data'] = [];
        }$context['data'] = array_replace_recursive(['form' => // line 8
        (isset($context['required']) || array_key_exists('required', $context) ? $context['required'] : (function (): void {
            throw new RuntimeError('Variable "required" does not exist.', 8, $this->source);
        })()), 'enableStart' => true, 'enableEnd' => true, 'layout' => [], 'options' => ['attr' => ['novalidate' => 'novalidate']], 'resetFieldsId' => false, 'title' => null, 'submit' => ['text' => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans('forms.submit-btn'), 'class' => 'button button--success', 'icon' => null, 'enable' => false, 'isSingleClickEnforcerEnabled' => true, 'qa' => 'submit-button'], 'cancel' => ['text' => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans('general.back.button'), 'class' => 'button button--secondary button--hollow', 'icon' => 'chevron-left', 'url' => '#', 'enable' => false, 'qa' => 'cancel-button']], $context['data']); // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);
    }

    // line 40

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

        // line 41
        echo '    ';
        $this->displayBlock('title', $context, $blocks);
        // line 46
        echo "
    ";
        // line 47
        if (
            twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 47, $this->source);
            })()), 'enableStart', [], 'any', false, false, false, 47)
        ) {
            // line 48
            echo '        ';
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 48, $this->source);
            })()), 'form', [], 'any', false, false, false, 48), 'form_start', twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 48, $this->source);
            })()), 'options', [], 'any', false, false, false, 48));
            echo "
    ";
        }
        // line 50
        echo "
    <div class=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
            throw new RuntimeError('Variable "config" does not exist.', 51, $this->source);
        })()), 'name', [], 'any', false, false, false, 51), 'html', null, true);
        echo "__container\">
        ";
        // line 52
        $this->displayBlock('errors', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('fieldset', $context, $blocks);
        // line 82
        echo "
        <div class=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
            throw new RuntimeError('Variable "config" does not exist.', 83, $this->source);
        })()), 'name', [], 'any', false, false, false, 83), 'html', null, true);
        echo "__actions\">
            ";
        // line 84
        $this->displayBlock('actions', $context, $blocks);
        // line 120
        echo "        </div>
    </div>

    ";
        // line 123
        if (
            twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 123, $this->source);
            })()), 'enableEnd', [], 'any', false, false, false, 123)
        ) {
            // line 124
            echo '        ';
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 124, $this->source);
            })()), 'form', [], 'any', false, false, false, 124), 'form_end');
            echo "
    ";
        }

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 41

    /**
     * @return void
     */
    public function block_title($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'title'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'title'));

        // line 42
        echo '        ';
        if (
            !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 42, $this->source);
            })()), 'title', [], 'any', false, false, false, 42))
        ) {
            // line 43
            echo '            <h5>';
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 43, $this->source);
            })()), 'title', [], 'any', false, false, false, 43), 'html', null, true);
            echo "</h5>
        ";
        }
        // line 45
        echo '    ';

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 52

    /**
     * @return void
     */
    public function block_errors($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'errors'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'errors'));

        // line 53
        echo '            ';
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 53, $this->source);
        })()), 'form', [], 'any', false, false, false, 53), 'errors');
        echo "
        ";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 56

    /**
     * @return void
     */
    public function block_fieldset($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'fieldset'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'fieldset'));

        // line 57
        echo '            <div class="';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
            throw new RuntimeError('Variable "config" does not exist.', 57, $this->source);
        })()), 'name', [], 'any', false, false, false, 57), 'html', null, true);
        echo "__fields grid grid--bottom\">
                ";
        // line 58
        $this->displayBlock('fields', $context, $blocks);
        // line 80
        echo "            </div>
        ";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 58

    /**
     * @return void
     */
    public function block_fields($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'fields'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'fields'));

        // line 59
        echo '                    ';
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 59, $this->source);
        })()), 'form', [], 'any', false, false, false, 59), 'children', [], 'any', false, false, false, 59)));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index' => 1,
          'first' => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = $length === 1;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['fieldName']) {
            // line 60
            echo '                        ';
            $context['field'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 60, $this->source);
            })()), 'form', [], 'any', false, false, false, 60), 'children', [], 'any', false, false, false, 60), $context['fieldName'], [], 'any', false, false, false, 60);
            // line 61
            echo "
                        ";
            // line 62
            if (
                !twig_get_attribute($this->env, $this->source, (isset($context['field']) || array_key_exists('field', $context) ? $context['field'] : (function (): void {
                    throw new RuntimeError('Variable "field" does not exist.', 62, $this->source);
                })()), 'isRendered', [], 'any', false, false, false, 62)
            ) {
                // line 63
                echo '                            ';
                $context['fieldLayoutClass'] = 'col col--sm-12';
                // line 64
                echo "
                            ";
                // line 65
                if (
                    twig_in_filter($context['fieldName'], twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                        throw new RuntimeError('Variable "data" does not exist.', 65, $this->source);
                    })()), 'layout', [], 'any', false, false, false, 65)))
                ) {
                    // line 66
                    echo '                                ';
                    $context['fieldLayoutClass'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                        throw new RuntimeError('Variable "data" does not exist.', 66, $this->source);
                    })()), 'layout', [], 'any', false, false, false, 66), $context['fieldName'], [], 'any', false, false, false, 66);
                    // line 67
                    echo '                            ';
                }
                // line 68
                echo "
                            ";
                // line 69
                $this->displayBlock('field', $context, $blocks);
                // line 77
                echo '                        ';
            }
            // line 78
            echo '                    ';
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = $context['loop']['revindex0'] === 0;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo '                ';

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 69

    /**
     * @return void
     */
    public function block_field($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'field'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'field'));

        // line 70
        echo '                                ';
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context['field']) || array_key_exists('field', $context) ? $context['field'] : (function (): void {
            throw new RuntimeError('Variable "field" does not exist.', 70, $this->source);
        })()), 'row', [
        'id' => (( !twig_get_attribute(
            $this->env,
            $this->source, // line 71
            (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 71, $this->source);
            })()),
            'resetFieldsId',
            [],
            'any',
            false,
            false,
            false,
            71,
        )) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['field']) || array_key_exists('field', $context) ? $context['field'] : (function (): void {
                throw new RuntimeError('Variable "field" does not exist.', 71, $this->source);
        })()), 'vars', [], 'any', false, false, false, 71), 'id', [], 'any', false, false, false, 71)) : ('')), 'rowAttr' => [
        'class' => ((twig_get_attribute(
            $this->env,
            $this->source, // line 73
            (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
                throw new RuntimeError('Variable "config" does not exist.', 73, $this->source);
            })()),
            'name',
            [],
            'any',
            false,
            false,
            false,
            73,
        ) . '__field ') . (isset($context['fieldLayoutClass']) || array_key_exists('fieldLayoutClass', $context) ? $context['fieldLayoutClass'] : (function (): void {
            throw new RuntimeError('Variable "fieldLayoutClass" does not exist.', 73, $this->source);
        })()))]]);
        // line 75
        echo "
                            ";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 84

    /**
     * @return void
     */
    public function block_actions($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'actions'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'actions'));

        // line 85
        echo '                ';
        if (
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 85, $this->source);
            })()), 'cancel', [], 'any', false, false, false, 85), 'enable', [], 'any', false, false, false, 85)
        ) {
            // line 86
            echo '                    ';
            $this->displayBlock('cancel', $context, $blocks);
            // line 99
            echo '                ';
        }
        // line 100
        echo "
                ";
        // line 101
        if (
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 101, $this->source);
            })()), 'submit', [], 'any', false, false, false, 101), 'enable', [], 'any', false, false, false, 101)
        ) {
            // line 102
            echo '                    ';
            $this->displayBlock('submit', $context, $blocks);
            // line 118
            echo '                ';
        }
        // line 119
        echo '            ';

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 86

    /**
     * @return void
     */
    public function block_cancel($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'cancel'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'cancel'));

        // line 87
        echo '                        <a href="';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 87, $this->source);
        })()), 'cancel', [], 'any', false, false, false, 87), 'url', [], 'any', false, false, false, 87), 'html', null, true);
        echo '" class="';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
            throw new RuntimeError('Variable "config" does not exist.', 87, $this->source);
        })()), 'name', [], 'any', false, false, false, 87), 'html', null, true);
        echo '__action ';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 87, $this->source);
        })()), 'cancel', [], 'any', false, false, false, 87), 'class', [], 'any', false, false, false, 87), 'html', null, true);
        echo '" ';
        echo $this->env->getFunction('qa')->getCallable()([
        0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 87, $this->source);
        })()), 'cancel', [], 'any', false, false, false, 87), 'qa', [], 'any', false, false, false, 87)]);
        echo ">
                            ";
        // line 88
        if (
            !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 88, $this->source);
            })()), 'cancel', [], 'any', false, false, false, 88), 'icon', [], 'any', false, false, false, 88))
        ) {
            // line 89
            echo '                                ';
            $this->loadTemplate($this->env->getFunction('atom')->getCallable()('icon'), '@@SprykerShop:ShopUi/components/molecules/form/form.twig', 89)->display(twig_to_array([
            'modifiers' => [
            0 => 'small'],
            'data' => [
            'name' => twig_get_attribute($this->env, $this->source, twig_get_attribute(
                $this->env,
                $this->source, // line 92
                (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                    throw new RuntimeError('Variable "data" does not exist.', 92, $this->source);
                })()),
                'cancel',
                [],
                'any',
                false,
                false,
                false,
                92,
            ), 'icon', [], 'any', false, false, false, 92)]]));
            // line 95
            echo '                            ';
        }
        // line 96
        echo '                            ';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 96, $this->source);
        })()), 'cancel', [], 'any', false, false, false, 96), 'text', [], 'any', false, false, false, 96), 'html', null, true);
        echo "
                        </a>
                    ";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 102

    /**
     * @return void
     */
    public function block_submit($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'submit'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'submit'));

        // line 103
        echo "                        <button type=\"submit\"
                                class=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
            throw new RuntimeError('Variable "config" does not exist.', 104, $this->source);
        })()), 'name', [], 'any', false, false, false, 104), 'html', null, true);
        echo '__action ';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 104, $this->source);
        })()), 'submit', [], 'any', false, false, false, 104), 'class', [], 'any', false, false, false, 104), 'html', null, true);
        echo "\"
                                ";
        // line 105
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 105, $this->source);
        })()), 'submit', [], 'any', false, false, false, 105), 'isSingleClickEnforcerEnabled', [], 'any', false, false, false, 105)) ? ('data-init-single-click') : (''));
        echo "
                                ";
        // line 106
        echo $this->env->getFunction('qa')->getCallable()([
        0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 106, $this->source);
        })()), 'submit', [], 'any', false, false, false, 106), 'qa', [], 'any', false, false, false, 106)]);
        echo ">
                            ";
        // line 107
        if (
            !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 107, $this->source);
            })()), 'submit', [], 'any', false, false, false, 107), 'icon', [], 'any', false, false, false, 107))
        ) {
            // line 108
            echo '                                ';
            $this->loadTemplate($this->env->getFunction('atom')->getCallable()('icon'), '@@SprykerShop:ShopUi/components/molecules/form/form.twig', 108)->display(twig_to_array([
            'modifiers' => [
            0 => 'small'],
            'data' => [
            'name' => twig_get_attribute($this->env, $this->source, twig_get_attribute(
                $this->env,
                $this->source, // line 111
                (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                    throw new RuntimeError('Variable "data" does not exist.', 111, $this->source);
                })()),
                'submit',
                [],
                'any',
                false,
                false,
                false,
                111,
            ), 'icon', [], 'any', false, false, false, 111)]]));
            // line 114
            echo '                            ';
        }
        // line 115
        echo '                            ';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
            throw new RuntimeError('Variable "data" does not exist.', 115, $this->source);
        })()), 'submit', [], 'any', false, false, false, 115), 'text', [], 'any', false, false, false, 115), 'html', null, true);
        echo "
                        </button>
                    ";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    public function getTemplateName()
    {
        return '@@SprykerShop:ShopUi/components/molecules/form/form.twig';
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [445 => 115, 442 => 114, 440 => 111, 438 => 108, 436 => 107, 432 => 106, 428 => 105, 422 => 104, 419 => 103, 409 => 102, 395 => 96, 392 => 95, 390 => 92, 388 => 89, 386 => 88, 375 => 87, 365 => 86, 355 => 119, 352 => 118, 349 => 102, 347 => 101, 344 => 100, 341 => 99, 338 => 86, 335 => 85, 325 => 84, 314 => 75, 312 => 73, 311 => 71, 309 => 70, 299 => 69, 289 => 79, 275 => 78, 272 => 77, 270 => 69, 267 => 68, 264 => 67, 261 => 66, 259 => 65, 256 => 64, 253 => 63, 251 => 62, 248 => 61, 245 => 60, 227 => 59, 217 => 58, 206 => 80, 204 => 58, 199 => 57, 189 => 56, 176 => 53, 166 => 52, 156 => 45, 150 => 43, 147 => 42, 137 => 41, 123 => 124, 121 => 123, 116 => 120, 114 => 84, 110 => 83, 107 => 82, 105 => 56, 102 => 55, 100 => 52, 96 => 51, 93 => 50, 87 => 48, 85 => 47, 82 => 46, 79 => 41, 69 => 40, 59 => 1, 58 => 8, 57 => 7, 56 => 3, 43 => 1];
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'form',
} %}

{% define data = {
    form: required,
    enableStart: true,
    enableEnd: true,
    layout: {},
    options: {
        attr: {
            novalidate: 'novalidate',
        },
    },
    resetFieldsId: false,

    title: null,

    submit: {
        text: 'forms.submit-btn' | trans,
        class: 'button button--success',
        icon: null,
        enable: false,
        isSingleClickEnforcerEnabled: true,
        qa: 'submit-button',
    },

    cancel: {
        text: 'general.back.button' | trans,
        class: 'button button--secondary button--hollow',
        icon: 'chevron-left',
        url: '#',
        enable: false,
        qa: 'cancel-button',
    },
} %}

{% block body %}
    {% block title %}
        {% if data.title is not empty %}
            <h5>{{data.title}}</h5>
        {% endif %}
    {% endblock %}

    {% if data.enableStart %}
        {{ form_start(data.form, data.options) }}
    {% endif %}

    <div class=\"{{config.name}}__container\">
        {% block errors %}
            {{ form_errors(data.form) }}
        {% endblock %}

        {% block fieldset %}
            <div class=\"{{config.name}}__fields grid grid--bottom\">
                {% block fields %}
                    {% for fieldName in data.form.children | keys %}
                        {% set field = attribute(data.form.children, fieldName) %}

                        {% if not field.isRendered %}
                            {% set fieldLayoutClass = 'col col--sm-12' %}

                            {% if fieldName in data.layout | keys %}
                                {% set fieldLayoutClass = attribute(data.layout, fieldName) %}
                            {% endif %}

                            {% block field %}
                                {{ form_row(field, {
                                    id: not data.resetFieldsId ? field.vars.id,
                                    rowAttr: {
                                        class: config.name ~ '__field ' ~ fieldLayoutClass,
                                    },
                                }) }}
                            {% endblock %}
                        {% endif %}
                    {% endfor %}
                {% endblock %}
            </div>
        {% endblock %}

        <div class=\"{{config.name}}__actions\">
            {% block actions %}
                {% if data.cancel.enable %}
                    {% block cancel %}
                        <a href=\"{{data.cancel.url}}\" class=\"{{config.name}}__action {{data.cancel.class}}\" {{qa(data.cancel.qa)}}>
                            {% if data.cancel.icon is not empty %}
                                {% include atom('icon') with {
                                    modifiers: ['small'],
                                    data: {
                                        name: data.cancel.icon
                                    }
                                } only %}
                            {% endif %}
                            {{data.cancel.text}}
                        </a>
                    {% endblock %}
                {% endif %}

                {% if data.submit.enable %}
                    {% block submit %}
                        <button type=\"submit\"
                                class=\"{{config.name}}__action {{data.submit.class}}\"
                                {{ data.submit.isSingleClickEnforcerEnabled ? 'data-init-single-click' }}
                                {{qa(data.submit.qa)}}>
                            {% if data.submit.icon is not empty %}
                                {% include atom('icon') with {
                                    modifiers: ['small'],
                                    data: {
                                        name: data.submit.icon
                                    }
                                } only %}
                            {% endif %}
                            {{data.submit.text}}
                        </button>
                    {% endblock %}
                {% endif %}
            {% endblock %}
        </div>
    </div>

    {% if data.enableEnd %}
        {{ form_end(data.form) }}
    {% endif %}
{% endblock %}
", '@@SprykerShop:ShopUi/components/molecules/form/form.twig', '/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/form/form.twig');
    }
}
