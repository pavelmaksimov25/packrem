<?php

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;
use Twig\Template;

/* @ShopUi/components/organisms/header/header.twig */
class __TwigTemplate_7115b9bf0bcffddeebd079a7c79d45f9 extends Template
{
    private $source;

    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'headerMainContent' => [$this, 'block_headerMainContent'],
            'navigation' => [$this, 'block_navigation'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->env->getFunction('model')->getCallable()('component'), '@ShopUi/components/organisms/header/header.twig', 1);
    }

    /**
     * @return void
     */
    protected function doDisplay(array $context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@ShopUi/components/organisms/header/header.twig'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@ShopUi/components/organisms/header/header.twig'));

        // line 2
        $macros['component'] = $this->macros['component'] = $this;
        // line 4
        if (!array_key_exists('config', $context)) {
            $context['config'] = [];
        }$context['config'] = array_replace_recursive(['name' => 'header', 'tag' => 'header'], $context['config']); // line 9
        if (!array_key_exists('data', $context)) {
            $context['data'] = [];
        }$context['data'] = array_replace_recursive([
        'showSearchForm' => true,
        'showNavigation' => true,
        'user' => twig_get_attribute(
            $this->env,
            $this->source, // line 12
            (isset($context['app']) || array_key_exists('app', $context) ? $context['app'] : (function (): void {
                throw new RuntimeError('Variable "app" does not exist.', 12, $this->source);
            })()),
            'user',
            [],
            'array',
            false,
            false,
            false,
            12,
        ), 'showUserMenu' => !(( // line 13
        array_key_exists('hideUserMenu', $context)) ? (_twig_default_filter((isset($context['hideUserMenu']) || array_key_exists('hideUserMenu', $context) ? $context['hideUserMenu'] : (function (): void {
            throw new RuntimeError('Variable "hideUserMenu" does not exist.', 13, $this->source);
        })()), false)) : (false)), 'cartQuantity' => (($this->env->getFunction('functionExists')->getCallable()('getCartQuantity')) ? ($this->env->getFunction('getCartQuantity')->getCallable()()) : ((( // line 14
        array_key_exists('cartQuantity', $context)) ? ((isset($context['cartQuantity']) || array_key_exists('cartQuantity', $context) ? $context['cartQuantity'] : (function (): void {
            throw new RuntimeError('Variable "cartQuantity" does not exist.', 14, $this->source);
        })())) : (((twig_get_attribute($this->env, $this->source, ($context['app'] ?? null), 'cart.quantity', [], 'array', true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context['app'] ?? null), 'cart.quantity', [], 'array', false, false, false, 14))) : (''))))))], $context['data']); // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);
    }

    // line 17

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

        // line 18
        echo '    <div class="';
        echo twig_call_macro($macros['component'], 'macro_renderClass', [(twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
            throw new RuntimeError('Variable "config" does not exist.', 18, $this->source);
        })()), 'name', [], 'any', false, false, false, 18) . '__top'), (isset($context['modifiers']) || array_key_exists('modifiers', $context) ? $context['modifiers'] : (function (): void {
            throw new RuntimeError('Variable "modifiers" does not exist.', 18, $this->source);
        })())], 18, $context, $this->getSourceContext());
        echo "\">
        ";
        // line 19
        $this->loadTemplate($this->env->getFunction('organism')->getCallable()('navigation-top'), '@ShopUi/components/organisms/header/header.twig', 19)->display(twig_to_array(['class' => 'grid grid--justify grid--stretch container']));
        // line 22
        echo "    </div>

    <div class=\"";
        // line 24
        echo twig_call_macro($macros['component'], 'macro_renderClass', [(twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
            throw new RuntimeError('Variable "config" does not exist.', 24, $this->source);
        })()), 'name', [], 'any', false, false, false, 24) . '__main'), (isset($context['modifiers']) || array_key_exists('modifiers', $context) ? $context['modifiers'] : (function (): void {
            throw new RuntimeError('Variable "modifiers" does not exist.', 24, $this->source);
        })())], 24, $context, $this->getSourceContext());
        echo "\">
        ";
        // line 25
        $this->displayBlock('headerMainContent', $context, $blocks);
        // line 140
        echo "    </div>

    ";
        // line 142
        if (
            twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 142, $this->source);
            })()), 'showNavigation', [], 'any', false, false, false, 142)
        ) {
            // line 143
            echo '        <div class="';
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
                throw new RuntimeError('Variable "config" does not exist.', 143, $this->source);
            })()), 'name', [], 'any', false, false, false, 143), 'html', null, true);
            echo "__navigation\">
            <div class=\"container\">
                ";
            // line 145
            $this->displayBlock('navigation', $context, $blocks);
            // line 148
            echo "            </div>
        </div>
    ";
        }
        // line 151
        echo "
    ";
        // line 152
        $context['triggerClassList'] = [
        0 => (twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
            throw new RuntimeError('Variable "config" does not exist.', 152, $this->source);
        })()), 'jsName', [], 'any', false, false, false, 152) . '__actions-search-trigger'), 1 => 'js-overlay-block'];
        // line 153
        echo "
    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['triggerClassList']) || array_key_exists('triggerClassList', $context) ? $context['triggerClassList'] : (function (): void {
            throw new RuntimeError('Variable "triggerClassList" does not exist.', 154, $this->source);
        })()));
        foreach ($context['_seq'] as $context['_key'] => $context['triggerClass']) {
            // line 155
            echo '        ';
            $this->loadTemplate($this->env->getFunction('molecule')->getCallable()('toggler-click'), '@ShopUi/components/organisms/header/header.twig', 155)->display(twig_to_array([
            'attributes' => [
            'trigger-class-name' => // line 157
            $context['triggerClass'], 'target-class-name' => (twig_get_attribute(
                $this->env,
                $this->source, // line 158
                (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
                    throw new RuntimeError('Variable "config" does not exist.', 158, $this->source);
                })()),
                'jsName',
                [],
                'any',
                false,
                false,
                false,
                158,
            ) . '__search-form'), 'class-to-toggle' => 'search-form--active']]));
            // line 162
            echo '    ';
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['triggerClass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "
    ";
        // line 164
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()('overlay-enabler'), '@ShopUi/components/organisms/header/header.twig', 164)->display(twig_to_array([
        'attributes' => [
        'trigger-class-name' => (twig_get_attribute(
            $this->env,
            $this->source, // line 166
            (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
                throw new RuntimeError('Variable "config" does not exist.', 166, $this->source);
            })()),
            'jsName',
            [],
            'any',
            false,
            false,
            false,
            166,
        ) . '__actions-search-trigger')]]));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 25

    /**
     * @return void
     */
    public function block_headerMainContent($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'headerMainContent'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'headerMainContent'));

        // line 26
        echo "            <div class=\"grid grid--middle container\">
                <div class=\"col ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
            throw new RuntimeError('Variable "config" does not exist.', 27, $this->source);
        })()), 'name', [], 'any', false, false, false, 27), 'html', null, true);
        echo "__actions\">
                    <div class=\"grid\">
                        <div class=\"col ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
            throw new RuntimeError('Variable "config" does not exist.', 29, $this->source);
        })()), 'name', [], 'any', false, false, false, 29), 'html', null, true);
        echo "__actions-item\">
                            <button class=\"link link--alternative js-page-layout-main__side-drawer-trigger\">
                                ";
        // line 31
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()('icon'), '@ShopUi/components/organisms/header/header.twig', 31)->display(twig_to_array(['data' => ['name' => 'bars']]));
        // line 36
        echo "                            </button>
                        </div>
                        <div class=\"col ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
            throw new RuntimeError('Variable "config" does not exist.', 38, $this->source);
        })()), 'name', [], 'any', false, false, false, 38), 'html', null, true);
        echo "__actions-item header__actions-item--search\">
                            <button class=\"link link--alternative ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
            throw new RuntimeError('Variable "config" does not exist.', 39, $this->source);
        })()), 'jsName', [], 'any', false, false, false, 39), 'html', null, true);
        echo "__actions-search-trigger\">
                                ";
        // line 40
        $this->loadTemplate($this->env->getFunction('atom')->getCallable()('icon'), '@ShopUi/components/organisms/header/header.twig', 40)->display(twig_to_array(['modifiers' => [0 => 'big'], 'data' => ['name' => 'search']]));
        // line 46
        echo "                            </button>
                        </div>
                    </div>
                </div>

                ";
        // line 51
        $this->loadTemplate($this->env->getFunction('molecule')->getCallable()('logo'), '@ShopUi/components/organisms/header/header.twig', 51)->display(twig_to_array([
        'class' => (('col ' . twig_get_attribute(
            $this->env,
            $this->source, // line 52
            (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
                throw new RuntimeError('Variable "config" does not exist.', 52, $this->source);
            })()),
            'name',
            [],
            'any',
            false,
            false,
            false,
            52,
        )) . '__logo'), 'modifiers' => [0 => 'main']]));
        // line 55
        echo "
                <div class=\"col ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
            throw new RuntimeError('Variable "config" does not exist.', 56, $this->source);
        })()), 'name', [], 'any', false, false, false, 56), 'html', null, true);
        echo "__search\">
                    ";
        // line 57
        if (
            twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 57, $this->source);
            })()), 'showSearchForm', [], 'any', false, false, false, 57)
        ) {
            // line 58
            echo '                        ';
            $this->loadTemplate('@ShopUi/components/organisms/header/header.twig', '@ShopUi/components/organisms/header/header.twig', 58, '777348167')->display(twig_to_array([
            'class' => (((twig_get_attribute(
                $this->env,
                $this->source, // line 59
                (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
                    throw new RuntimeError('Variable "config" does not exist.', 59, $this->source);
                })()),
                'name',
                [],
                'any',
                false,
                false,
                false,
                59,
            ) . '__search-form ') . twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
                    throw new RuntimeError('Variable "config" does not exist.', 59, $this->source);
            })()), 'jsName', [], 'any', false, false, false, 59)) . '__search-form'), 'modifiers' => [0 => 'main-search'], 'attributes' => ['data-search-id' => 'desktop'], 'embed' => [
            'jsTriggerSearchClass' => (twig_get_attribute(
                $this->env,
                $this->source, // line 65
                (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
                    throw new RuntimeError('Variable "config" does not exist.', 65, $this->source);
                })()),
                'jsName',
                [],
                'any',
                false,
                false,
                false,
                65,
            ) . '__actions-search-trigger')]]));
            // line 72
            echo '                    ';
        }
        // line 73
        echo "                </div>

                ";
        // line 75
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted('ROLE_USER')) {
            // line 76
            echo '                    ';
            $context['businessOnBehalfStatusWidget'] = $this->env->getFunction('findWidget')->getCallable()('BusinessOnBehalfStatusWidget', [0 => '']);
            // line 77
            echo '                    ';
            $context['isUserOnBehalf'] = twig_get_attribute($this->env, $this->source, (isset($context['businessOnBehalfStatusWidget']) || array_key_exists('businessOnBehalfStatusWidget', $context) ? $context['businessOnBehalfStatusWidget'] : (function (): void {
                throw new RuntimeError('Variable "businessOnBehalfStatusWidget" does not exist.', 77, $this->source);
            })()), 'isOnBehalf', [], 'any', false, false, false, 77);
            // line 78
            echo "
                    <div class=\"col col--right ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
                throw new RuntimeError('Variable "config" does not exist.', 79, $this->source);
            })()), 'name', [], 'any', false, false, false, 79), 'html', null, true);
            echo "__user\">
                        <div class=\"grid grid--gap\">
                            ";
            // line 81
            if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can('SeeCompanyMenuPermissionPlugin')) {
                // line 82
                echo "                                <div class=\"col\">
                                    <button
                                        class=\"link link--alternative js-page-layout-main__company-account-navigation-trigger\">
                                        ";
                // line 85
                $this->loadTemplate($this->env->getFunction('atom')->getCallable()('icon'), '@ShopUi/components/organisms/header/header.twig', 85)->display(twig_to_array(['modifiers' => [0 => 'big'], 'data' => ['name' => 'office']]));
                // line 91
                echo "                                    </button>
                                </div>
                            ";
            } else {
                // line 94
                echo '                                ';
                if (
                    (isset($context['isUserOnBehalf']) || array_key_exists('isUserOnBehalf', $context) ? $context['isUserOnBehalf'] : (function (): void {
                        throw new RuntimeError('Variable "isUserOnBehalf" does not exist.', 94, $this->source);
                    })())
                ) {
                    // line 95
                    echo "                                    <div class=\"col\">
                                        <a href=\"";
                    // line 96
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath('company/user/select');
                    echo "\" class=\"link link--alternative\">
                                            ";
                    // line 97
                    $this->loadTemplate($this->env->getFunction('atom')->getCallable()('icon'), '@ShopUi/components/organisms/header/header.twig', 97)->display(twig_to_array(['modifiers' => [0 => 'big'], 'data' => ['name' => 'office']]));
                    // line 103
                    echo "                                        </a>
                                    </div>
                                ";
                }
                // line 106
                echo '                            ';
            }
            // line 107
            echo "                            <div class=\"col\">
                                <button
                                    class=\"link link--alternative js-page-layout-main__user-account-navigation-trigger\">
                                    ";
            // line 110
            $this->loadTemplate($this->env->getFunction('atom')->getCallable()('icon'), '@ShopUi/components/organisms/header/header.twig', 110)->display(twig_to_array(['modifiers' => [0 => 'big'], 'data' => ['name' => 'user']]));
            // line 116
            echo "                                </button>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 121
        echo "
                <div
                    class=\"col col--right ";
        // line 123
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted('ROLE_USER')) {
            echo ' ';
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
                throw new RuntimeError('Variable "config" does not exist.', 123, $this->source);
            })()), 'name', [], 'any', false, false, false, 123), 'html', null, true);
            echo '__user-nav ';
        } else {
            echo ' ';
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
                throw new RuntimeError('Variable "config" does not exist.', 123, $this->source);
            })()), 'name', [], 'any', false, false, false, 123), 'html', null, true);
            echo '__login-wrap ';
        }
        echo "\">
                    ";
        // line 124
        if (
            twig_get_attribute($this->env, $this->source, (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                throw new RuntimeError('Variable "data" does not exist.', 124, $this->source);
            })()), 'showUserMenu', [], 'any', false, false, false, 124)
        ) {
            // line 125
            echo '                        ';
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted('ROLE_USER')) {
                // line 126
                echo '                            ';
                $this->loadTemplate($this->env->getFunction('molecule')->getCallable()('user-navigation'), '@ShopUi/components/organisms/header/header.twig', 126)->display(twig_to_array([
                'data' => [
                'user' => twig_get_attribute(
                    $this->env,
                    $this->source, // line 128
                    (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                        throw new RuntimeError('Variable "data" does not exist.', 128, $this->source);
                    })()),
                    'user',
                    [],
                    'any',
                    false,
                    false,
                    false,
                    128,
                ), 'cartQuantity' => twig_get_attribute(
                    $this->env,
                    $this->source, // line 129
                    (isset($context['data']) || array_key_exists('data', $context) ? $context['data'] : (function (): void {
                            throw new RuntimeError('Variable "data" does not exist.', 129, $this->source);
                    })()),
                    'cartQuantity',
                    [],
                    'any',
                    false,
                    false,
                    false,
                    129,
                )]]));
                // line 132
                echo '                        ';
            } else {
                // line 133
                echo '                            <a href="';
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl('login');
                echo "\"
                               class=\"button button--tight button--medium ";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['config']) || array_key_exists('config', $context) ? $context['config'] : (function (): void {
                    throw new RuntimeError('Variable "config" does not exist.', 134, $this->source);
                })()), 'name', [], 'any', false, false, false, 134), 'html', null, true);
                echo '__login">';
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans('customer.please_login'), 'html', null, true);
                echo "</a>
                        ";
            }
            // line 136
            echo '                    ';
        }
        // line 137
        echo "                </div>
            </div>
        ";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    // line 145

    /**
     * @return void
     */
    public function block_navigation($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'navigation'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'navigation'));

        // line 146
        echo '                    ';
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext('NavigationWidget', [0 => 'MAIN_NAVIGATION', 1 => 'navigation-main'])) {
            $this->loadTemplate('@ShopUi/components/organisms/header/header.twig', '@ShopUi/components/organisms/header/header.twig', 146, 603707194)->display(['_widget' => $widget, '_widgetTemplatePath' => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)]);
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        } // line 147
        echo '                ';

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    public function getTemplateName()
    {
        return '@ShopUi/components/organisms/header/header.twig';
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [355 => 147, 350 => 146, 340 => 145, 328 => 137, 325 => 136, 318 => 134, 313 => 133, 310 => 132, 308 => 129, 307 => 128, 305 => 126, 302 => 125, 300 => 124, 288 => 123, 284 => 121, 277 => 116, 275 => 110, 270 => 107, 267 => 106, 262 => 103, 260 => 97, 256 => 96, 253 => 95, 250 => 94, 245 => 91, 243 => 85, 238 => 82, 236 => 81, 231 => 79, 228 => 78, 225 => 77, 222 => 76, 220 => 75, 216 => 73, 213 => 72, 211 => 65, 210 => 59, 208 => 58, 206 => 57, 202 => 56, 199 => 55, 197 => 52, 196 => 51, 189 => 46, 187 => 40, 183 => 39, 179 => 38, 175 => 36, 173 => 31, 168 => 29, 163 => 27, 160 => 26, 150 => 25, 140 => 166, 139 => 164, 136 => 163, 130 => 162, 128 => 158, 127 => 157, 125 => 155, 121 => 154, 118 => 153, 116 => 152, 113 => 151, 108 => 148, 106 => 145, 100 => 143, 98 => 142, 94 => 140, 92 => 25, 88 => 24, 84 => 22, 82 => 19, 77 => 18, 67 => 17, 57 => 1, 56 => 14, 55 => 13, 54 => 12, 53 => 9, 52 => 4, 50 => 2, 37 => 1];
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'header',
    tag: 'header',
} %}

{% define data = {
    showSearchForm: true,
    showNavigation: true,
    user: app['user'],
    showUserMenu: not (hideUserMenu | default(false)),
    cartQuantity: functionExists('getCartQuantity') ? getCartQuantity() : (cartQuantity is defined ? cartQuantity : app['cart.quantity'] | default),
} %}

{% block body %}
    <div class=\"{{ component.renderClass(config.name ~ '__top', modifiers) }}\">
        {% include organism('navigation-top') with {
            class: 'grid grid--justify grid--stretch container',
        } only %}
    </div>

    <div class=\"{{ component.renderClass(config.name ~ '__main', modifiers) }}\">
        {% block headerMainContent %}
            <div class=\"grid grid--middle container\">
                <div class=\"col {{ config.name }}__actions\">
                    <div class=\"grid\">
                        <div class=\"col {{ config.name }}__actions-item\">
                            <button class=\"link link--alternative js-page-layout-main__side-drawer-trigger\">
                                {% include atom('icon') with {
                                    data: {
                                        name: 'bars',
                                    },
                                } only %}
                            </button>
                        </div>
                        <div class=\"col {{ config.name }}__actions-item header__actions-item--search\">
                            <button class=\"link link--alternative {{ config.jsName }}__actions-search-trigger\">
                                {% include atom('icon') with {
                                    modifiers: ['big'],
                                    data: {
                                        name: 'search',
                                    },
                                } only %}
                            </button>
                        </div>
                    </div>
                </div>

                {% include molecule('logo') with {
                    class: 'col ' ~  config.name ~ '__logo',
                    modifiers: ['main'],
                } only %}

                <div class=\"col {{ config.name }}__search\">
                    {% if data.showSearchForm %}
                        {% embed molecule('search-form') with {
                            class: config.name ~ '__search-form ' ~ config.jsName ~ '__search-form',
                            modifiers: ['main-search'],
                            attributes: {
                                'data-search-id': 'desktop',
                            },
                            embed: {
                                jsTriggerSearchClass: config.jsName ~ '__actions-search-trigger',
                            },
                        } only %}
                            {% block close %}
                                {{ embed.jsTriggerSearchClass }}
                            {% endblock %}
                        {% endembed %}
                    {% endif %}
                </div>

                {% if is_granted('ROLE_USER') %}
                    {% set businessOnBehalfStatusWidget = findWidget('BusinessOnBehalfStatusWidget', ['']) %}
                    {% set isUserOnBehalf = businessOnBehalfStatusWidget.isOnBehalf %}

                    <div class=\"col col--right {{ config.name }}__user\">
                        <div class=\"grid grid--gap\">
                            {% if can('SeeCompanyMenuPermissionPlugin') %}
                                <div class=\"col\">
                                    <button
                                        class=\"link link--alternative js-page-layout-main__company-account-navigation-trigger\">
                                        {% include atom('icon') with {
                                            modifiers: ['big'],
                                            data: {
                                                name: 'office',
                                            },
                                        } only %}
                                    </button>
                                </div>
                            {% else %}
                                {% if isUserOnBehalf %}
                                    <div class=\"col\">
                                        <a href=\"{{ path('company/user/select') }}\" class=\"link link--alternative\">
                                            {% include atom('icon') with {
                                                modifiers: ['big'],
                                                data: {
                                                    name: 'office',
                                                },
                                            } only %}
                                        </a>
                                    </div>
                                {% endif %}
                            {% endif %}
                            <div class=\"col\">
                                <button
                                    class=\"link link--alternative js-page-layout-main__user-account-navigation-trigger\">
                                    {% include atom('icon') with {
                                        modifiers: ['big'],
                                        data: {
                                            name: 'user',
                                        },
                                    } only %}
                                </button>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <div
                    class=\"col col--right {% if is_granted('ROLE_USER') %} {{ config.name }}__user-nav {% else %} {{ config.name }}__login-wrap {% endif %}\">
                    {% if data.showUserMenu %}
                        {% if is_granted('ROLE_USER') %}
                            {% include molecule('user-navigation') with {
                                data: {
                                    user: data.user,
                                    cartQuantity: data.cartQuantity,
                                },
                            } only %}
                        {% else %}
                            <a href=\"{{ url('login') }}\"
                               class=\"button button--tight button--medium {{ config.name }}__login\">{{ 'customer.please_login'|trans }}</a>
                        {% endif %}
                    {% endif %}
                </div>
            </div>
        {% endblock %}
    </div>

    {% if data.showNavigation %}
        <div class=\"{{ config.name }}__navigation\">
            <div class=\"container\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>
        </div>
    {% endif %}

    {% set triggerClassList = [config.jsName ~ '__actions-search-trigger', 'js-overlay-block'] %}

    {% for triggerClass in triggerClassList %}
        {% include molecule('toggler-click') with {
            attributes: {
                'trigger-class-name': triggerClass,
                'target-class-name': config.jsName ~ '__search-form',
                'class-to-toggle': 'search-form--active',
            },
        } only %}
    {% endfor %}

    {% include molecule('overlay-enabler') with {
        attributes: {
            'trigger-class-name': config.jsName ~ '__actions-search-trigger',
        },
    } only %}
{% endblock %}
", '@ShopUi/components/organisms/header/header.twig', '/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/header/header.twig');
    }
}

/* @ShopUi/components/organisms/header/header.twig */
class __TwigTemplate_7115b9bf0bcffddeebd079a7c79d45f9___777348167 extends Template
{
    private $source;

    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'close' => [$this, 'block_close'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 58
        return $this->loadTemplate($this->env->getFunction('molecule')->getCallable()('search-form'), '@ShopUi/components/organisms/header/header.twig', 58);
    }

    /**
     * @return void
     */
    protected function doDisplay(array $context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@ShopUi/components/organisms/header/header.twig'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@ShopUi/components/organisms/header/header.twig'));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);
    }

    // line 68

    /**
     * @return void
     */
    public function block_close($context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'close'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'close'));

        // line 69
        echo '                                ';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context['embed']) || array_key_exists('embed', $context) ? $context['embed'] : (function (): void {
            throw new RuntimeError('Variable "embed" does not exist.', 69, $this->source);
        })()), 'jsTriggerSearchClass', [], 'any', false, false, false, 69), 'html', null, true);
        echo "
                            ";

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);
    }

    public function getTemplateName()
    {
        return '@ShopUi/components/organisms/header/header.twig';
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [607 => 69, 597 => 68, 575 => 58, 355 => 147, 350 => 146, 340 => 145, 328 => 137, 325 => 136, 318 => 134, 313 => 133, 310 => 132, 308 => 129, 307 => 128, 305 => 126, 302 => 125, 300 => 124, 288 => 123, 284 => 121, 277 => 116, 275 => 110, 270 => 107, 267 => 106, 262 => 103, 260 => 97, 256 => 96, 253 => 95, 250 => 94, 245 => 91, 243 => 85, 238 => 82, 236 => 81, 231 => 79, 228 => 78, 225 => 77, 222 => 76, 220 => 75, 216 => 73, 213 => 72, 211 => 65, 210 => 59, 208 => 58, 206 => 57, 202 => 56, 199 => 55, 197 => 52, 196 => 51, 189 => 46, 187 => 40, 183 => 39, 179 => 38, 175 => 36, 173 => 31, 168 => 29, 163 => 27, 160 => 26, 150 => 25, 140 => 166, 139 => 164, 136 => 163, 130 => 162, 128 => 158, 127 => 157, 125 => 155, 121 => 154, 118 => 153, 116 => 152, 113 => 151, 108 => 148, 106 => 145, 100 => 143, 98 => 142, 94 => 140, 92 => 25, 88 => 24, 84 => 22, 82 => 19, 77 => 18, 67 => 17, 57 => 1, 56 => 14, 55 => 13, 54 => 12, 53 => 9, 52 => 4, 50 => 2, 37 => 1];
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'header',
    tag: 'header',
} %}

{% define data = {
    showSearchForm: true,
    showNavigation: true,
    user: app['user'],
    showUserMenu: not (hideUserMenu | default(false)),
    cartQuantity: functionExists('getCartQuantity') ? getCartQuantity() : (cartQuantity is defined ? cartQuantity : app['cart.quantity'] | default),
} %}

{% block body %}
    <div class=\"{{ component.renderClass(config.name ~ '__top', modifiers) }}\">
        {% include organism('navigation-top') with {
            class: 'grid grid--justify grid--stretch container',
        } only %}
    </div>

    <div class=\"{{ component.renderClass(config.name ~ '__main', modifiers) }}\">
        {% block headerMainContent %}
            <div class=\"grid grid--middle container\">
                <div class=\"col {{ config.name }}__actions\">
                    <div class=\"grid\">
                        <div class=\"col {{ config.name }}__actions-item\">
                            <button class=\"link link--alternative js-page-layout-main__side-drawer-trigger\">
                                {% include atom('icon') with {
                                    data: {
                                        name: 'bars',
                                    },
                                } only %}
                            </button>
                        </div>
                        <div class=\"col {{ config.name }}__actions-item header__actions-item--search\">
                            <button class=\"link link--alternative {{ config.jsName }}__actions-search-trigger\">
                                {% include atom('icon') with {
                                    modifiers: ['big'],
                                    data: {
                                        name: 'search',
                                    },
                                } only %}
                            </button>
                        </div>
                    </div>
                </div>

                {% include molecule('logo') with {
                    class: 'col ' ~  config.name ~ '__logo',
                    modifiers: ['main'],
                } only %}

                <div class=\"col {{ config.name }}__search\">
                    {% if data.showSearchForm %}
                        {% embed molecule('search-form') with {
                            class: config.name ~ '__search-form ' ~ config.jsName ~ '__search-form',
                            modifiers: ['main-search'],
                            attributes: {
                                'data-search-id': 'desktop',
                            },
                            embed: {
                                jsTriggerSearchClass: config.jsName ~ '__actions-search-trigger',
                            },
                        } only %}
                            {% block close %}
                                {{ embed.jsTriggerSearchClass }}
                            {% endblock %}
                        {% endembed %}
                    {% endif %}
                </div>

                {% if is_granted('ROLE_USER') %}
                    {% set businessOnBehalfStatusWidget = findWidget('BusinessOnBehalfStatusWidget', ['']) %}
                    {% set isUserOnBehalf = businessOnBehalfStatusWidget.isOnBehalf %}

                    <div class=\"col col--right {{ config.name }}__user\">
                        <div class=\"grid grid--gap\">
                            {% if can('SeeCompanyMenuPermissionPlugin') %}
                                <div class=\"col\">
                                    <button
                                        class=\"link link--alternative js-page-layout-main__company-account-navigation-trigger\">
                                        {% include atom('icon') with {
                                            modifiers: ['big'],
                                            data: {
                                                name: 'office',
                                            },
                                        } only %}
                                    </button>
                                </div>
                            {% else %}
                                {% if isUserOnBehalf %}
                                    <div class=\"col\">
                                        <a href=\"{{ path('company/user/select') }}\" class=\"link link--alternative\">
                                            {% include atom('icon') with {
                                                modifiers: ['big'],
                                                data: {
                                                    name: 'office',
                                                },
                                            } only %}
                                        </a>
                                    </div>
                                {% endif %}
                            {% endif %}
                            <div class=\"col\">
                                <button
                                    class=\"link link--alternative js-page-layout-main__user-account-navigation-trigger\">
                                    {% include atom('icon') with {
                                        modifiers: ['big'],
                                        data: {
                                            name: 'user',
                                        },
                                    } only %}
                                </button>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <div
                    class=\"col col--right {% if is_granted('ROLE_USER') %} {{ config.name }}__user-nav {% else %} {{ config.name }}__login-wrap {% endif %}\">
                    {% if data.showUserMenu %}
                        {% if is_granted('ROLE_USER') %}
                            {% include molecule('user-navigation') with {
                                data: {
                                    user: data.user,
                                    cartQuantity: data.cartQuantity,
                                },
                            } only %}
                        {% else %}
                            <a href=\"{{ url('login') }}\"
                               class=\"button button--tight button--medium {{ config.name }}__login\">{{ 'customer.please_login'|trans }}</a>
                        {% endif %}
                    {% endif %}
                </div>
            </div>
        {% endblock %}
    </div>

    {% if data.showNavigation %}
        <div class=\"{{ config.name }}__navigation\">
            <div class=\"container\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>
        </div>
    {% endif %}

    {% set triggerClassList = [config.jsName ~ '__actions-search-trigger', 'js-overlay-block'] %}

    {% for triggerClass in triggerClassList %}
        {% include molecule('toggler-click') with {
            attributes: {
                'trigger-class-name': triggerClass,
                'target-class-name': config.jsName ~ '__search-form',
                'class-to-toggle': 'search-form--active',
            },
        } only %}
    {% endfor %}

    {% include molecule('overlay-enabler') with {
        attributes: {
            'trigger-class-name': config.jsName ~ '__actions-search-trigger',
        },
    } only %}
{% endblock %}
", '@ShopUi/components/organisms/header/header.twig', '/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/header/header.twig');
    }
}

/* @ShopUi/components/organisms/header/header.twig */
class __TwigTemplate_7115b9bf0bcffddeebd079a7c79d45f9___603707194 extends Template
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
        // line 146
        return $this->loadTemplate((isset($context['_widgetTemplatePath']) || array_key_exists('_widgetTemplatePath', $context) ? $context['_widgetTemplatePath'] : (function (): void {
            throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 146, $this->source);
        })()), '@ShopUi/components/organisms/header/header.twig', 146);
    }

    /**
     * @return void
     */
    protected function doDisplay(array $context, array $blocks = []): void
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@ShopUi/components/organisms/header/header.twig'));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@ShopUi/components/organisms/header/header.twig'));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);
    }

    public function getTemplateName()
    {
        return '@ShopUi/components/organisms/header/header.twig';
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [829 => 146, 607 => 69, 597 => 68, 575 => 58, 355 => 147, 350 => 146, 340 => 145, 328 => 137, 325 => 136, 318 => 134, 313 => 133, 310 => 132, 308 => 129, 307 => 128, 305 => 126, 302 => 125, 300 => 124, 288 => 123, 284 => 121, 277 => 116, 275 => 110, 270 => 107, 267 => 106, 262 => 103, 260 => 97, 256 => 96, 253 => 95, 250 => 94, 245 => 91, 243 => 85, 238 => 82, 236 => 81, 231 => 79, 228 => 78, 225 => 77, 222 => 76, 220 => 75, 216 => 73, 213 => 72, 211 => 65, 210 => 59, 208 => 58, 206 => 57, 202 => 56, 199 => 55, 197 => 52, 196 => 51, 189 => 46, 187 => 40, 183 => 39, 179 => 38, 175 => 36, 173 => 31, 168 => 29, 163 => 27, 160 => 26, 150 => 25, 140 => 166, 139 => 164, 136 => 163, 130 => 162, 128 => 158, 127 => 157, 125 => 155, 121 => 154, 118 => 153, 116 => 152, 113 => 151, 108 => 148, 106 => 145, 100 => 143, 98 => 142, 94 => 140, 92 => 25, 88 => 24, 84 => 22, 82 => 19, 77 => 18, 67 => 17, 57 => 1, 56 => 14, 55 => 13, 54 => 12, 53 => 9, 52 => 4, 50 => 2, 37 => 1];
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'header',
    tag: 'header',
} %}

{% define data = {
    showSearchForm: true,
    showNavigation: true,
    user: app['user'],
    showUserMenu: not (hideUserMenu | default(false)),
    cartQuantity: functionExists('getCartQuantity') ? getCartQuantity() : (cartQuantity is defined ? cartQuantity : app['cart.quantity'] | default),
} %}

{% block body %}
    <div class=\"{{ component.renderClass(config.name ~ '__top', modifiers) }}\">
        {% include organism('navigation-top') with {
            class: 'grid grid--justify grid--stretch container',
        } only %}
    </div>

    <div class=\"{{ component.renderClass(config.name ~ '__main', modifiers) }}\">
        {% block headerMainContent %}
            <div class=\"grid grid--middle container\">
                <div class=\"col {{ config.name }}__actions\">
                    <div class=\"grid\">
                        <div class=\"col {{ config.name }}__actions-item\">
                            <button class=\"link link--alternative js-page-layout-main__side-drawer-trigger\">
                                {% include atom('icon') with {
                                    data: {
                                        name: 'bars',
                                    },
                                } only %}
                            </button>
                        </div>
                        <div class=\"col {{ config.name }}__actions-item header__actions-item--search\">
                            <button class=\"link link--alternative {{ config.jsName }}__actions-search-trigger\">
                                {% include atom('icon') with {
                                    modifiers: ['big'],
                                    data: {
                                        name: 'search',
                                    },
                                } only %}
                            </button>
                        </div>
                    </div>
                </div>

                {% include molecule('logo') with {
                    class: 'col ' ~  config.name ~ '__logo',
                    modifiers: ['main'],
                } only %}

                <div class=\"col {{ config.name }}__search\">
                    {% if data.showSearchForm %}
                        {% embed molecule('search-form') with {
                            class: config.name ~ '__search-form ' ~ config.jsName ~ '__search-form',
                            modifiers: ['main-search'],
                            attributes: {
                                'data-search-id': 'desktop',
                            },
                            embed: {
                                jsTriggerSearchClass: config.jsName ~ '__actions-search-trigger',
                            },
                        } only %}
                            {% block close %}
                                {{ embed.jsTriggerSearchClass }}
                            {% endblock %}
                        {% endembed %}
                    {% endif %}
                </div>

                {% if is_granted('ROLE_USER') %}
                    {% set businessOnBehalfStatusWidget = findWidget('BusinessOnBehalfStatusWidget', ['']) %}
                    {% set isUserOnBehalf = businessOnBehalfStatusWidget.isOnBehalf %}

                    <div class=\"col col--right {{ config.name }}__user\">
                        <div class=\"grid grid--gap\">
                            {% if can('SeeCompanyMenuPermissionPlugin') %}
                                <div class=\"col\">
                                    <button
                                        class=\"link link--alternative js-page-layout-main__company-account-navigation-trigger\">
                                        {% include atom('icon') with {
                                            modifiers: ['big'],
                                            data: {
                                                name: 'office',
                                            },
                                        } only %}
                                    </button>
                                </div>
                            {% else %}
                                {% if isUserOnBehalf %}
                                    <div class=\"col\">
                                        <a href=\"{{ path('company/user/select') }}\" class=\"link link--alternative\">
                                            {% include atom('icon') with {
                                                modifiers: ['big'],
                                                data: {
                                                    name: 'office',
                                                },
                                            } only %}
                                        </a>
                                    </div>
                                {% endif %}
                            {% endif %}
                            <div class=\"col\">
                                <button
                                    class=\"link link--alternative js-page-layout-main__user-account-navigation-trigger\">
                                    {% include atom('icon') with {
                                        modifiers: ['big'],
                                        data: {
                                            name: 'user',
                                        },
                                    } only %}
                                </button>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <div
                    class=\"col col--right {% if is_granted('ROLE_USER') %} {{ config.name }}__user-nav {% else %} {{ config.name }}__login-wrap {% endif %}\">
                    {% if data.showUserMenu %}
                        {% if is_granted('ROLE_USER') %}
                            {% include molecule('user-navigation') with {
                                data: {
                                    user: data.user,
                                    cartQuantity: data.cartQuantity,
                                },
                            } only %}
                        {% else %}
                            <a href=\"{{ url('login') }}\"
                               class=\"button button--tight button--medium {{ config.name }}__login\">{{ 'customer.please_login'|trans }}</a>
                        {% endif %}
                    {% endif %}
                </div>
            </div>
        {% endblock %}
    </div>

    {% if data.showNavigation %}
        <div class=\"{{ config.name }}__navigation\">
            <div class=\"container\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>
        </div>
    {% endif %}

    {% set triggerClassList = [config.jsName ~ '__actions-search-trigger', 'js-overlay-block'] %}

    {% for triggerClass in triggerClassList %}
        {% include molecule('toggler-click') with {
            attributes: {
                'trigger-class-name': triggerClass,
                'target-class-name': config.jsName ~ '__search-form',
                'class-to-toggle': 'search-form--active',
            },
        } only %}
    {% endfor %}

    {% include molecule('overlay-enabler') with {
        attributes: {
            'trigger-class-name': config.jsName ~ '__actions-search-trigger',
        },
    } only %}
{% endblock %}
", '@ShopUi/components/organisms/header/header.twig', '/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/header/header.twig');
    }
}
