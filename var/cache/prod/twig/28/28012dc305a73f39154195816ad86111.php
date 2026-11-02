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

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_3272a6b3bc805e5ef4495c6c0aba3949 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->parent = false;

        $this->ensureTraitsAllowed();

        // line 1
        $_trait_0 = $this->load("bootstrap_base_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row_render' => [$this, 'block_form_row_render'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_help' => [$this, 'block_form_help'],
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
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 11
        yield "
";
        // line 12
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 16
        yield "
";
        // line 17
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 34
        yield "
";
        // line 35
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 45
        yield "
";
        // line 46
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 56
        yield "
";
        // line 57
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 61
        yield "
";
        // line 63
        yield "
";
        // line 64
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 68
        yield "
";
        // line 69
        yield from $this->unwrap()->yieldBlock('choice_label', $context, $blocks);
        // line 74
        yield "
";
        // line 75
        yield from $this->unwrap()->yieldBlock('checkbox_label', $context, $blocks);
        // line 80
        yield "
";
        // line 81
        yield from $this->unwrap()->yieldBlock('radio_label', $context, $blocks);
        // line 86
        yield "
";
        // line 87
        yield from $this->unwrap()->yieldBlock('checkbox_radio_label', $context, $blocks);
        // line 127
        yield "
";
        // line 129
        yield "
";
        // line 130
        yield from $this->unwrap()->yieldBlock('form_row_render', $context, $blocks);
        // line 139
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 144
        yield "
";
        // line 145
        yield from $this->unwrap()->yieldBlock('choice_row', $context, $blocks);
        // line 149
        yield "
";
        // line 150
        yield from $this->unwrap()->yieldBlock('date_row', $context, $blocks);
        // line 154
        yield "
";
        // line 155
        yield from $this->unwrap()->yieldBlock('time_row', $context, $blocks);
        // line 159
        yield "
";
        // line 160
        yield from $this->unwrap()->yieldBlock('datetime_row', $context, $blocks);
        // line 164
        yield "
";
        // line 165
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 172
        yield "
";
        // line 173
        yield from $this->unwrap()->yieldBlock('radio_row', $context, $blocks);
        // line 180
        yield "
";
        // line 182
        yield "
";
        // line 183
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 194
        yield "
";
        // line 196
        yield "
";
        // line 197
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        if (( !array_key_exists("type", $context) || !CoreExtension::inFilter(($context["type"] ?? null), ["file", "hidden"]))) {
            // line 7
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 7), "")) : ("")) . " form-control"))]);
        }
        // line 9
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 13), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 14
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        return; yield;
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        $context["prepend"] =  !(is_string($_v0 = ($context["money_pattern"] ?? null)) && is_string($_v1 = "{{") && str_starts_with($_v0, $_v1));
        // line 19
        yield "    ";
        $context["append"] =  !(is_string($_v2 = ($context["money_pattern"] ?? null)) && is_string($_v3 = "}}") && str_ends_with($_v2, $_v3));
        // line 20
        yield "    ";
        if (((($tmp = ($context["prepend"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["append"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 21
            yield "        <div class=\"input-group\">
            ";
            // line 22
            if ((($tmp = ($context["prepend"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "                <span class=\"input-group-addon\">";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>
            ";
            }
            // line 25
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 26
            if ((($tmp = ($context["append"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 27
                yield "                <span class=\"input-group-addon\">";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>
            ";
            }
            // line 29
            yield "        </div>
    ";
        } else {
            // line 31
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield;
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 36), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 36), "")) : (""))));
        // line 37
        if (CoreExtension::inFilter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 38
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 40
            yield "<div class=\"checkbox\">";
            // line 41
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 42
            yield "</div>";
        }
        return; yield;
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 47), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 47), "")) : (""))));
        // line 48
        if (CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 49
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 51
            yield "<div class=\"radio\">";
            // line 52
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 53
            yield "</div>";
        }
        return; yield;
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 58), "")) : ("")) . " form-control"))]);
        // line 59
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        return; yield;
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 65), "")) : ("")) . " control-label"))]);
        // line 66
        yield from $this->yieldParentBlock("form_label", $context, $blocks);
        return; yield;
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 71
        $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 71)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 71), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 72
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        return; yield;
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
        // line 78
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        return; yield;
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
        // line 84
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        return; yield;
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        if (array_key_exists("widget", $context)) {
            // line 90
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 91
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 91), "")) : ("")) . " required"))]);
            }
            // line 93
            if (array_key_exists("parent_label_class", $context)) {
                // line 94
                $context["embed_label_classes"] = Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["parent_label_class"] ?? null), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return CoreExtension::inFilter(($context["class"] ?? null), ["checkbox-inline", "radio-inline"]); });
                // line 95
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 95)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 95), "")) : ("")) . " ") . Twig\Extension\CoreExtension::join(($context["embed_label_classes"] ?? null), " ")))]);
            }
            // line 97
            if (((null === ($context["label"] ?? null)) || (($context["label"] ?? null) === ""))) {
                // line 98
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                    // line 99
                    $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                     // line 100
($context["name"] ?? null), "%id%" =>                     // line 101
($context["id"] ?? null)]);
                } elseif ( !(                // line 103
($context["label"] ?? null) === false)) {
                    // line 104
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 107
            yield "<label";
            $_v4 = $context;
            $_v5 = ["attr" => ($context["label_attr"] ?? null)];
            if (!is_iterable($_v5)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 107, $this->getSourceContext());
            }
            $_v5 = CoreExtension::toArray($_v5);
            $context = $_v5 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v4;
            yield ">";
            // line 109
            yield (string) ($context["widget"] ?? null);
            yield " ";
            if ( !(($context["label"] ?? null) === false)) {
                // line 110
                if ((($context["translation_domain"] ?? null) === false)) {
                    // line 111
                    if ((($context["label_html"] ?? null) === false)) {
                        // line 112
                        yield (string) $this->escaper->escape(($context["label"] ?? null), "html", null, true);
                    } else {
                        // line 114
                        yield (string) ($context["label"] ?? null);
                    }
                } else {
                    // line 117
                    if ((($context["label_html"] ?? null) === false)) {
                        // line 118
                        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                    } else {
                        // line 120
                        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                    }
                }
            }
            // line 124
            yield "</label>";
        }
        return; yield;
    }

    // line 130
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row_render(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 131
        yield "<div";
        $_v6 = $context;
        $_v7 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 131)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 131), "")) : ("")) . " form-group") . (((( !(($tmp = ($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? (" has-error") : (""))))])];
        if (!is_iterable($_v7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 131, $this->getSourceContext());
        }
        $_v7 = CoreExtension::toArray($_v7);
        $context = $_v7 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v6;
        yield ">";
        // line 132
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        yield " ";
        // line 133
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        yield " ";
        // line 134
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 135
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield " ";
        // line 136
        yield "</div> ";
        return; yield;
    }

    // line 139
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 140
        yield "<div";
        $_v8 = $context;
        $_v9 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 140)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 140), "")) : ("")) . " form-group"))])];
        if (!is_iterable($_v9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 140, $this->getSourceContext());
        }
        $_v9 = CoreExtension::toArray($_v9);
        $context = $_v9 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v8;
        yield ">";
        // line 141
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 142
        yield "</div>";
        return; yield;
    }

    // line 145
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 146
        $context["force_error"] = true;
        // line 147
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield;
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 151
        $context["force_error"] = true;
        // line 152
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield;
    }

    // line 155
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 156
        $context["force_error"] = true;
        // line 157
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield;
    }

    // line 160
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 161
        $context["force_error"] = true;
        // line 162
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield;
    }

    // line 165
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 166
        yield "<div";
        $_v10 = $context;
        $_v11 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 166)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 166), "")) : ("")) . " form-group") . (( !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-error") : (""))))])];
        if (!is_iterable($_v11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 166, $this->getSourceContext());
        }
        $_v11 = CoreExtension::toArray($_v11);
        $context = $_v11 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v10;
        yield ">";
        // line 167
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 168
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 169
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 170
        yield "</div>";
        return; yield;
    }

    // line 173
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 174
        yield "<div";
        $_v12 = $context;
        $_v13 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 174)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 174), "")) : ("")) . " form-group") . (( !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-error") : (""))))])];
        if (!is_iterable($_v13)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 174, $this->getSourceContext());
        }
        $_v13 = CoreExtension::toArray($_v13);
        $context = $_v13 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v12;
        yield ">";
        // line 175
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 176
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 177
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 178
        yield "</div>";
        return; yield;
    }

    // line 183
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 184
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 185
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                yield "<span class=\"help-block\">";
            } else {
                yield "<div class=\"alert alert-danger\">";
            }
            // line 186
            yield "    <ul class=\"list-unstyled\">";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 188
                yield "<li id=\"";
                yield (string) $this->escaper->escape(((($context["id"] ?? null) . "_error") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 188)), "html", null, true);
                yield "\"><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 188), "html", null, true);
                yield "</li>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 190
            yield "</ul>
    ";
            // line 191
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                yield "</span>";
            } else {
                yield "</div>";
            }
        }
        return; yield;
    }

    // line 197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 198
        if ((($tmp = ($context["help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 199
            $context["help_attr"] = Twig\Extension\CoreExtension::merge(($context["help_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 199)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 199), "")) : ("")) . " help-block"))]);
            // line 200
            yield "<span id=\"";
            yield (string) $this->escaper->escape(($context["id"] ?? null), "html", null, true);
            yield "_help\"";
            $_v14 = $context;
            $_v15 = ["attr" => ($context["help_attr"] ?? null)];
            if (!is_iterable($_v15)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 200, $this->getSourceContext());
            }
            $_v15 = CoreExtension::toArray($_v15);
            $context = $_v15 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v14;
            yield ">";
            // line 201
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 202
                if ((($context["help_html"] ?? null) === false)) {
                    // line 203
                    yield (string) $this->escaper->escape(($context["help"] ?? null), "html", null, true);
                } else {
                    // line 205
                    yield (string) ($context["help"] ?? null);
                }
            } else {
                // line 208
                if ((($context["help_html"] ?? null) === false)) {
                    // line 209
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 211
                    yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 214
            yield "</span>";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bootstrap_3_layout.html.twig";
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
        return array (  763 => 214,  759 => 211,  756 => 209,  754 => 208,  750 => 205,  747 => 203,  745 => 202,  743 => 201,  729 => 200,  727 => 199,  725 => 198,  718 => 197,  708 => 191,  705 => 190,  686 => 188,  669 => 187,  667 => 186,  661 => 185,  659 => 184,  652 => 183,  647 => 178,  645 => 177,  643 => 176,  641 => 175,  629 => 174,  622 => 173,  617 => 170,  615 => 169,  613 => 168,  611 => 167,  599 => 166,  592 => 165,  587 => 162,  585 => 161,  578 => 160,  573 => 157,  571 => 156,  564 => 155,  559 => 152,  557 => 151,  550 => 150,  545 => 147,  543 => 146,  536 => 145,  531 => 142,  529 => 141,  517 => 140,  510 => 139,  505 => 136,  502 => 135,  500 => 134,  497 => 133,  494 => 132,  482 => 131,  475 => 130,  469 => 124,  464 => 120,  461 => 118,  459 => 117,  455 => 114,  452 => 112,  450 => 111,  448 => 110,  444 => 109,  432 => 107,  428 => 104,  426 => 103,  424 => 101,  423 => 100,  422 => 99,  420 => 98,  418 => 97,  415 => 95,  413 => 94,  411 => 93,  408 => 91,  406 => 90,  404 => 89,  397 => 87,  392 => 84,  390 => 82,  383 => 81,  378 => 78,  376 => 76,  369 => 75,  364 => 72,  362 => 71,  355 => 69,  350 => 66,  348 => 65,  341 => 64,  336 => 59,  334 => 58,  327 => 57,  321 => 53,  319 => 52,  317 => 51,  314 => 49,  312 => 48,  310 => 47,  303 => 46,  297 => 42,  295 => 41,  293 => 40,  290 => 38,  288 => 37,  286 => 36,  279 => 35,  273 => 31,  269 => 29,  263 => 27,  261 => 26,  259 => 25,  253 => 23,  251 => 22,  248 => 21,  245 => 20,  242 => 19,  240 => 18,  233 => 17,  228 => 14,  226 => 13,  219 => 12,  214 => 9,  211 => 7,  209 => 6,  202 => 5,  197 => 197,  194 => 196,  191 => 194,  189 => 183,  186 => 182,  183 => 180,  181 => 173,  178 => 172,  176 => 165,  173 => 164,  171 => 160,  168 => 159,  166 => 155,  163 => 154,  161 => 150,  158 => 149,  156 => 145,  153 => 144,  151 => 139,  149 => 130,  146 => 129,  143 => 127,  141 => 87,  138 => 86,  136 => 81,  133 => 80,  131 => 75,  128 => 74,  126 => 69,  123 => 68,  121 => 64,  118 => 63,  115 => 61,  113 => 57,  110 => 56,  108 => 46,  105 => 45,  103 => 35,  100 => 34,  98 => 17,  95 => 16,  93 => 12,  90 => 11,  88 => 5,  85 => 4,  82 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "bootstrap_3_layout.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
