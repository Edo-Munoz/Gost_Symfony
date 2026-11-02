<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* bootstrap_5_horizontal_layout.html.twig */
class __TwigTemplate_3898095fc9f027ed99ace6b1dc75a6e2 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->ensureTraitsAllowed();

        // line 1
        $_trait_0 = $this->load("bootstrap_5_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row_render' => [$this, 'block_form_row_render'],
                'fieldset_form_row' => [$this, 'block_fieldset_form_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'button_row' => [$this, 'block_button_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "
";
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 19
        yield "
";
        // line 20
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 23
        yield "
";
        // line 25
        yield "
";
        // line 26
        yield from $this->unwrap()->yieldBlock('form_row_render', $context, $blocks);
        // line 68
        yield "
";
        // line 69
        yield from $this->unwrap()->yieldBlock('fieldset_form_row', $context, $blocks);
        // line 85
        yield "
";
        // line 86
        yield from $this->unwrap()->yieldBlock('submit_row', $context, $blocks);
        // line 94
        yield "
";
        // line 95
        yield from $this->unwrap()->yieldBlock('reset_row', $context, $blocks);
        // line 103
        yield "
";
        // line 104
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 112
        yield "
";
        // line 113
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 123
        yield "
";
        // line 124
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        if ((($context["label"] ?? null) === false)) {
            // line 7
            yield "<div class=\"";
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\"></div>";
        } else {
            // line 9
            $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 9), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 9), "")) : (""))));
            // line 10
            if ((!CoreExtension::inFilter("form-floating", ($context["row_class"] ?? null)) && !CoreExtension::inFilter("input-group", ($context["row_class"] ?? null)))) {
                // line 11
                if (( !array_key_exists("expanded", $context) ||  !(($tmp = ($context["expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 12
                    $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 12), "")) : ("")) . " col-form-label"))]);
                }
                // line 14
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 14), "")) : ("")) . " ") .                 $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
            }
            // line 16
            yield from $this->yieldParentBlock("form_label", $context, $blocks);
        }
        return; yield;
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "col-sm-2";
        return; yield;
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row_render(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        if ((array_key_exists("expanded", $context) && (($tmp = ($context["expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 28
            yield from             $this->unwrap()->yieldBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 30
            $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 30), "mb-3")) : ("mb-3")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 30), "mb-3")) : ("mb-3"))));
            // line 31
            $context["is_form_floating"] = ((array_key_exists("is_form_floating", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_form_floating"] ?? null), CoreExtension::inFilter("form-floating", ($context["row_class"] ?? null)))) : (CoreExtension::inFilter("form-floating", ($context["row_class"] ?? null))));
            // line 32
            $context["is_input_group"] = ((array_key_exists("is_input_group", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_input_group"] ?? null), CoreExtension::inFilter("input-group", ($context["row_class"] ?? null)))) : (CoreExtension::inFilter("input-group", ($context["row_class"] ?? null))));
            // line 34
            $context["row_class"] = Twig\Extension\CoreExtension::replace(($context["row_class"] ?? null), ["form-floating" => "", "input-group" => ""]);
            // line 35
            yield "<div";
            $_v0 = $context;
            $_v1 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((($context["row_class"] ?? null) . " row") . (((( !(($tmp = ($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? (" is-invalid") : (""))))])];
            if (!is_iterable($_v1)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 35, $this->getSourceContext());
            }
            $_v1 = CoreExtension::toArray($_v1);
            $context = $_v1 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v0;
            yield ">";
            // line 36
            if (((($tmp = ($context["is_form_floating"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["is_input_group"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 37
                yield "<div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
                yield "\"></div>
                <div class=\"";
                // line 38
                yield from                 $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
                yield "\">";
                // line 39
                if ((($tmp = ($context["is_form_floating"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 40
                    yield "<div class=\"form-floating\">";
                    // line 41
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
                    // line 42
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                    // line 43
                    yield "</div>";
                } elseif ((($tmp =                 // line 44
($context["is_input_group"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 45
                    yield "<div class=\"input-group\">";
                    // line 46
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                    // line 47
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
                    // line 49
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
                    // line 50
                    yield "</div>";
                }
                // line 52
                if ( !(($tmp = ($context["is_input_group"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 53
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
                }
                // line 55
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                // line 56
                yield "</div>";
            } else {
                // line 58
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                // line 59
                yield "<div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
                yield "\">";
                // line 60
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
                // line 61
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
                // line 62
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                // line 63
                yield "</div>";
            }
            // line 65
            yield "</div>";
        }
        return; yield;
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fieldset_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        $context["widget_attr"] = [];
        // line 71
        if ((($tmp = ($context["help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 74
        yield "<fieldset";
        $_v2 = $context;
        $_v3 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 74)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 74), "mb-3")) : ("mb-3")))])];
        if (!is_iterable($_v3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 74, $this->getSourceContext());
        }
        $_v3 = CoreExtension::toArray($_v3);
        $context = $_v3 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v2;
        yield ">
        <div class=\"row";
        // line 75
        if ((( !(($tmp = ($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            yield " is-invalid";
        }
        yield "\">";
        // line 76
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 77
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 78
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 79
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 80
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 81
        yield "</div>
        </div>
    </fieldset>";
        return; yield;
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        yield "<div";
        $_v4 = $context;
        $_v5 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 87), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($_v5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 87, $this->getSourceContext());
        }
        $_v5 = CoreExtension::toArray($_v5);
        $context = $_v5 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v4;
        yield ">";
        // line 88
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 89
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 90
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 91
        yield "</div>";
        // line 92
        yield "</div>";
        return; yield;
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_reset_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 96
        yield "<div";
        $_v6 = $context;
        $_v7 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 96)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 96), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($_v7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 96, $this->getSourceContext());
        }
        $_v7 = CoreExtension::toArray($_v7);
        $context = $_v7 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v6;
        yield ">";
        // line 97
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 98
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 99
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 100
        yield "</div>";
        // line 101
        yield "</div>";
        return; yield;
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 105
        yield "<div";
        $_v8 = $context;
        $_v9 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 105)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 105), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($_v9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 105, $this->getSourceContext());
        }
        $_v9 = CoreExtension::toArray($_v9);
        $context = $_v9 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v8;
        yield ">";
        // line 106
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 107
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 108
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 109
        yield "</div>";
        // line 110
        yield "</div>";
        return; yield;
    }

    // line 113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 114
        yield "<div";
        $_v10 = $context;
        $_v11 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 114), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($_v11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 114, $this->getSourceContext());
        }
        $_v11 = CoreExtension::toArray($_v11);
        $context = $_v11 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v10;
        yield ">";
        // line 115
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 116
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 117
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 118
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 119
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 120
        yield "</div>";
        // line 121
        yield "</div>";
        return; yield;
    }

    // line 124
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_group_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 125
        yield "col-sm-10";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bootstrap_5_horizontal_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  467 => 125,  460 => 124,  455 => 121,  453 => 120,  451 => 119,  449 => 118,  447 => 117,  443 => 116,  439 => 115,  427 => 114,  420 => 113,  415 => 110,  413 => 109,  411 => 108,  407 => 107,  403 => 106,  391 => 105,  384 => 104,  379 => 101,  377 => 100,  375 => 99,  371 => 98,  367 => 97,  355 => 96,  348 => 95,  343 => 92,  341 => 91,  339 => 90,  335 => 89,  331 => 88,  319 => 87,  312 => 86,  305 => 81,  303 => 80,  301 => 79,  299 => 78,  295 => 77,  293 => 76,  288 => 75,  275 => 74,  272 => 72,  270 => 71,  268 => 70,  261 => 69,  255 => 65,  252 => 63,  250 => 62,  248 => 61,  246 => 60,  242 => 59,  240 => 58,  237 => 56,  235 => 55,  232 => 53,  230 => 52,  227 => 50,  225 => 49,  223 => 47,  221 => 46,  219 => 45,  217 => 44,  215 => 43,  213 => 42,  211 => 41,  209 => 40,  207 => 39,  204 => 38,  199 => 37,  197 => 36,  185 => 35,  183 => 34,  181 => 32,  179 => 31,  177 => 30,  174 => 28,  172 => 27,  165 => 26,  160 => 21,  153 => 20,  147 => 16,  144 => 14,  141 => 12,  139 => 11,  137 => 10,  135 => 9,  130 => 7,  128 => 6,  121 => 5,  116 => 124,  113 => 123,  111 => 113,  108 => 112,  106 => 104,  103 => 103,  101 => 95,  98 => 94,  96 => 86,  93 => 85,  91 => 69,  88 => 68,  86 => 26,  83 => 25,  80 => 23,  78 => 20,  75 => 19,  73 => 5,  70 => 4,  67 => 2,  39 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "bootstrap_5_horizontal_layout.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_5_horizontal_layout.html.twig");
    }
}
