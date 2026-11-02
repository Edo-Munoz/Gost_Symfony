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

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_42896d8dd3ac6174f77a3977b41a125d extends Template
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
                'money_widget' => [$this, 'block_money_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'button_widget' => [$this, 'block_button_widget'],
                'submit_widget' => [$this, 'block_submit_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_errors' => [$this, 'block_form_label_errors'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
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
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 26
        yield "
";
        // line 27
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 34
        yield "
";
        // line 35
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 42
        yield "
";
        // line 43
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 50
        yield "
";
        // line 51
        yield from $this->unwrap()->yieldBlock('dateinterval_widget', $context, $blocks);
        // line 107
        yield "
";
        // line 108
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 120
        yield "
";
        // line 121
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 136
        yield "
";
        // line 137
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 153
        yield "
";
        // line 154
        yield from $this->unwrap()->yieldBlock('widget_attributes', $context, $blocks);
        // line 160
        yield "
";
        // line 161
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 165
        yield "
";
        // line 166
        yield from $this->unwrap()->yieldBlock('submit_widget', $context, $blocks);
        // line 170
        yield "
";
        // line 171
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 190
        yield "
";
        // line 191
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 205
        yield "
";
        // line 206
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 210
        yield "
";
        // line 211
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 222
        yield "
";
        // line 224
        yield "
";
        // line 225
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 248
        yield "
";
        // line 249
        yield from $this->unwrap()->yieldBlock('checkbox_radio_label', $context, $blocks);
        // line 279
        yield "
";
        // line 281
        yield "
";
        // line 282
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 300
        yield "
";
        // line 302
        yield "
";
        // line 303
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 314
        yield "
";
        // line 316
        yield "
";
        // line 317
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        $context["prepend"] =  !(is_string($_v0 = ($context["money_pattern"] ?? null)) && is_string($_v1 = "{{") && str_starts_with($_v0, $_v1));
        // line 7
        $context["append"] =  !(is_string($_v2 = ($context["money_pattern"] ?? null)) && is_string($_v3 = "}}") && str_ends_with($_v2, $_v3));
        // line 8
        if (((($tmp = ($context["prepend"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["append"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 9
            yield "<div class=\"input-group ";
            yield (string) $this->escaper->escape(((array_key_exists("group_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["group_class"] ?? null), "")) : ("")), "html", null, true);
            yield "\">";
            // line 10
            if ((($tmp = ($context["prepend"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 11
                yield "<div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">";
                // line 12
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>
                </div>";
            }
            // line 15
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 16
            if ((($tmp = ($context["append"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 17
                yield "<div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
                // line 18
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>
                </div>";
            }
            // line 21
            yield "</div>";
        } else {
            // line 23
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield;
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        if (((($context["widget"] ?? null) != "single_text") &&  !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 29
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 29), "")) : ("")) . " is-invalid"))]);
            // line 30
            $context["valid"] = true;
        }
        // line 32
        yield from $this->yieldParentBlock("datetime_widget", $context, $blocks);
        return; yield;
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        if (((($context["widget"] ?? null) != "single_text") &&  !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 37
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 37), "")) : ("")) . " is-invalid"))]);
            // line 38
            $context["valid"] = true;
        }
        // line 40
        yield from $this->yieldParentBlock("date_widget", $context, $blocks);
        return; yield;
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        if (((($context["widget"] ?? null) != "single_text") &&  !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 45
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 45), "")) : ("")) . " is-invalid"))]);
            // line 46
            $context["valid"] = true;
        }
        // line 48
        yield from $this->yieldParentBlock("time_widget", $context, $blocks);
        return; yield;
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dateinterval_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        if (((($context["widget"] ?? null) != "single_text") &&  !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 53
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 53), "")) : ("")) . " is-invalid"))]);
            // line 54
            $context["valid"] = true;
        }
        // line 56
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 57
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 59), "")) : ("")) . " form-inline"))]);
            // line 60
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 61
            if ((($tmp = ($context["with_years"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "<div class=\"col-auto\">
                ";
                // line 63
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 63), 'label');
                yield "
                ";
                // line 64
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 64), 'widget');
                yield "
            </div>";
            }
            // line 67
            if ((($tmp = ($context["with_months"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "<div class=\"col-auto\">
                ";
                // line 69
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 69), 'label');
                yield "
                ";
                // line 70
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 70), 'widget');
                yield "
            </div>";
            }
            // line 73
            if ((($tmp = ($context["with_weeks"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 74
                yield "<div class=\"col-auto\">
                ";
                // line 75
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 75), 'label');
                yield "
                ";
                // line 76
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 76), 'widget');
                yield "
            </div>";
            }
            // line 79
            if ((($tmp = ($context["with_days"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 80
                yield "<div class=\"col-auto\">
                ";
                // line 81
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 81), 'label');
                yield "
                ";
                // line 82
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 82), 'widget');
                yield "
            </div>";
            }
            // line 85
            if ((($tmp = ($context["with_hours"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "<div class=\"col-auto\">
                ";
                // line 87
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 87), 'label');
                yield "
                ";
                // line 88
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 88), 'widget');
                yield "
            </div>";
            }
            // line 91
            if ((($tmp = ($context["with_minutes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 92
                yield "<div class=\"col-auto\">
                ";
                // line 93
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 93), 'label');
                yield "
                ";
                // line 94
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 94), 'widget');
                yield "
            </div>";
            }
            // line 97
            if ((($tmp = ($context["with_seconds"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 98
                yield "<div class=\"col-auto\">
                ";
                // line 99
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 99), 'label');
                yield "
                ";
                // line 100
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 100), 'widget');
                yield "
            </div>";
            }
            // line 103
            if ((($tmp = ($context["with_invert"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, false, 103), 'widget');
            }
            // line 104
            yield "</div>";
        }
        return; yield;
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 109
        if ((($tmp = ($context["symbol"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 110
            yield "<div class=\"input-group\">";
            // line 111
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 112
            yield "<div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 113
            yield (string) $this->escaper->escape(((array_key_exists("symbol", $context)) ? (Twig\Extension\CoreExtension::default(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
            yield "</span>
            </div>
        </div>";
        } else {
            // line 117
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield;
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 122
        yield "<";
        yield (string) $this->escaper->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        yield " class=\"custom-file\">";
        // line 123
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "file")) : ("file"));
        // line 124
        $context["input_lang"] = "en";
        // line 125
        if ((array_key_exists("app", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", true, true, false, 125))) {
            $context["input_lang"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 125), "locale", [], "any", false, false, false, 125);
        }
        // line 126
        $context["attr"] = Twig\Extension\CoreExtension::merge(["lang" => ($context["input_lang"] ?? null)], ($context["attr"] ?? null));
        // line 127
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 128
        $context["label_attr"] = Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 128), "")) : ("")) . " custom-file-label"))]), function ($__value__, $__key__) use ($context, $macros) { $context["value"] = $__value__; $context["key"] = $__key__; return (($context["key"] ?? null) != "id"); });
        // line 129
        yield "<label for=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129), "html", null, true);
        yield "\" ";
        $_v4 = $context;
        $_v5 = ["attr" => ($context["label_attr"] ?? null)];
        if (!is_iterable($_v5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 129, $this->getSourceContext());
        }
        $_v5 = CoreExtension::toArray($_v5);
        $context = $_v5 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v4;
        yield ">";
        // line 130
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 130) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 130)))) {
            // line 131
            yield (string) (((($context["translation_domain"] ?? null) === false)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 131), "html", null, true)) : ($this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 131), [], ($context["translation_domain"] ?? null)), "html", null, true)));
        }
        // line 133
        yield "</label>
    </";
        // line 134
        yield (string) $this->escaper->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        yield ">
";
        return; yield;
    }

    // line 137
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 138
        if (( !array_key_exists("type", $context) || (($context["type"] ?? null) != "hidden"))) {
            // line 139
            $context["className"] = " form-control";
            // line 140
            if ((((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "")) : ("")) == "file")) {
                // line 141
                $context["className"] = " custom-file-input";
            } elseif ((((            // line 142
array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "")) : ("")) == "range")) {
                // line 143
                $context["className"] = " form-control-range";
            }
            // line 145
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 145), "")) : ("")) . ($context["className"] ?? null)))]);
        }
        // line 147
        if ((array_key_exists("type", $context) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 148
            yield "        ";
            // line 149
            $context["required"] = false;
        }
        // line 151
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 154
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 155
        if ( !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 156
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 156)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 156), "")) : ("")) . " is-invalid"))]);
        }
        // line 158
        yield from $this->yieldParentBlock("widget_attributes", $context, $blocks);
        return; yield;
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 162
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 162)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 162), "btn-secondary")) : ("btn-secondary")) . " btn"))]);
        // line 163
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        return; yield;
    }

    // line 166
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 167
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 167)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 167), "btn-primary")) : ("btn-primary")))]);
        // line 168
        yield from $this->yieldParentBlock("submit_widget", $context, $blocks);
        return; yield;
    }

    // line 171
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 172
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 172)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 172), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 172)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 172), "")) : (""))));
        // line 173
        if (CoreExtension::inFilter("checkbox-custom", ($context["parent_label_class"] ?? null))) {
            // line 174
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 174)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 174), "")) : ("")) . " custom-control-input"))]);
            // line 175
            yield "<div class=\"custom-control custom-checkbox";
            yield (string) ((CoreExtension::inFilter("checkbox-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            yield "\">";
            // line 176
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 177
            yield "</div>";
        } elseif (CoreExtension::inFilter("switch-custom",         // line 178
($context["parent_label_class"] ?? null))) {
            // line 179
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 179)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 179), "")) : ("")) . " custom-control-input"))]);
            // line 180
            yield "<div class=\"custom-control custom-switch";
            yield (string) ((CoreExtension::inFilter("switch-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            yield "\">";
            // line 181
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 182
            yield "</div>";
        } else {
            // line 184
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 184)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 184), "")) : ("")) . " form-check-input"))]);
            // line 185
            yield "<div class=\"form-check";
            yield (string) ((CoreExtension::inFilter("checkbox-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            yield "\">";
            // line 186
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 187
            yield "</div>";
        }
        return; yield;
    }

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 192
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 192)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 192), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 192)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 192), "")) : (""))));
        // line 193
        if (CoreExtension::inFilter("radio-custom", ($context["parent_label_class"] ?? null))) {
            // line 194
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 194)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 194), "")) : ("")) . " custom-control-input"))]);
            // line 195
            yield "<div class=\"custom-control custom-radio";
            yield (string) ((CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            yield "\">";
            // line 196
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 197
            yield "</div>";
        } else {
            // line 199
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 199)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 199), "")) : ("")) . " form-check-input"))]);
            // line 200
            yield "<div class=\"form-check";
            yield (string) ((CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            yield "\">";
            // line 201
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 202
            yield "</div>";
        }
        return; yield;
    }

    // line 206
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 207
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 207)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 207), "")) : ("")) . " form-control"))]);
        // line 208
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        return; yield;
    }

    // line 211
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 212
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 214
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 215
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 215)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 215), "")) : ("")), "translation_domain" =>             // line 216
($context["choice_translation_domain"] ?? null), "valid" =>             // line 217
($context["valid"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 220
        yield "</div>";
        return; yield;
    }

    // line 225
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 226
        if ( !(($context["label"] ?? null) === false)) {
            // line 227
            if ((array_key_exists("compound", $context) && (($tmp = ($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 228
                $context["element"] = "legend";
                // line 229
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 229)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 229), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 231
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 233
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 234
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 234)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 234), "")) : ("")) . " required"))]);
            }
            // line 236
            yield "<";
            yield (string) $this->escaper->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if ((($tmp = ($context["label_attr"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $_v6 = $context;
                $_v7 = ["attr" => ($context["label_attr"] ?? null)];
                if (!is_iterable($_v7)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 236, $this->getSourceContext());
                }
                $_v7 = CoreExtension::toArray($_v7);
                $context = $_v7 + $context + $this->env->getGlobals();
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                $context = $_v6;
            }
            yield ">";
            // line 237
            yield from             $this->unwrap()->yieldBlock("form_label_content", $context, $blocks);
            // line 238
            yield "</";
            yield (string) $this->escaper->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            yield ">
        ";
            // line 239
            yield from $this->unwrap()->yieldBlock('form_label_errors', $context, $blocks);
        } else {
            // line 241
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
                // line 242
                yield "<div id=\"";
                yield (string) $this->escaper->escape(($context["id"] ?? null), "html", null, true);
                yield "_errors\" class=\"mb-2\">";
                // line 243
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                // line 244
                yield "</div>";
            }
        }
        return; yield;
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        return; yield;
    }

    // line 249
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 251
        if (array_key_exists("widget", $context)) {
            // line 252
            $context["is_parent_custom"] = (array_key_exists("parent_label_class", $context) && ((CoreExtension::inFilter("checkbox-custom", ($context["parent_label_class"] ?? null)) || CoreExtension::inFilter("radio-custom", ($context["parent_label_class"] ?? null))) || CoreExtension::inFilter("switch-custom", ($context["parent_label_class"] ?? null))));
            // line 253
            yield "        ";
            $context["is_custom"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 253) && ((CoreExtension::inFilter("checkbox-custom", CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 253)) || CoreExtension::inFilter("radio-custom", CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 253))) || CoreExtension::inFilter("switch-custom", CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 253))));
            // line 254
            if (((($tmp = ($context["is_parent_custom"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["is_custom"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 255
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 255)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 255), "")) : ("")) . " custom-control-label"))]);
            } else {
                // line 257
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 257)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 257), "")) : ("")) . " form-check-label"))]);
            }
            // line 259
            if ( !(($tmp = ($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 260
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 262
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 263
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 263)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 263), "")) : ("")) . " required"))]);
            }
            // line 265
            if (array_key_exists("parent_label_class", $context)) {
                // line 266
                $context["embed_label_classes"] = Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["parent_label_class"] ?? null), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return CoreExtension::inFilter(($context["class"] ?? null), ["checkbox-inline", "radio-inline"]); });
                // line 267
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 267)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 267), "")) : ("")) . " ") . Twig\Extension\CoreExtension::join(($context["embed_label_classes"] ?? null), " ")))]);
            }
            // line 269
            yield "
        ";
            // line 270
            yield (string) ($context["widget"] ?? null);
            yield "
        <label";
            // line 271
            $_v8 = $context;
            $_v9 = ["attr" => ($context["label_attr"] ?? null)];
            if (!is_iterable($_v9)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 271, $this->getSourceContext());
            }
            $_v9 = CoreExtension::toArray($_v9);
            $context = $_v9 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v8;
            yield ">";
            // line 272
            if ( !(($context["label"] ?? null) === false)) {
                // line 273
                yield from                 $this->unwrap()->yieldBlock("form_label_content", $context, $blocks);
            }
            // line 275
            yield "</label>";
            // line 276
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        return; yield;
    }

    // line 282
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 283
        if ((array_key_exists("compound", $context) && (($tmp = ($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 284
            $context["element"] = "fieldset";
        }
        // line 286
        $context["attr"] = [];
        // line 287
        if ((($tmp = ($context["help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 288
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-describedby" => (($context["id"] ?? null) . "_help")]);
        }
        // line 290
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 291
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-invalid" => "true"]);
        }
        // line 293
        $context["widget_attr"] = ["attr" => ($context["attr"] ?? null)];
        // line 294
        yield "<";
        yield (string) $this->escaper->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        $_v10 = $context;
        $_v11 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 294)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 294), "")) : ("")) . " form-group"))])];
        if (!is_iterable($_v11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 294, $this->getSourceContext());
        }
        $_v11 = CoreExtension::toArray($_v11);
        $context = $_v11 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v10;
        yield ">";
        // line 295
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 296
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 297
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 298
        yield "</";
        yield (string) $this->escaper->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        yield ">";
        return; yield;
    }

    // line 303
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 304
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 305
            yield "<span class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                yield "invalid-feedback";
            } else {
                yield "alert alert-danger";
            }
            yield " d-block mb-1\">";
            // line 306
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 307
                yield "<span class=\"d-block\">
                    <span class=\"form-error-icon badge badge-danger text-uppercase\">";
                // line 308
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error", [], "validators"), "html", null, true);
                yield "</span> <span class=\"form-error-message\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 308), "html", null, true);
                yield "</span>
                </span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 311
            yield "</span>";
        }
        return; yield;
    }

    // line 317
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 318
        if ((($tmp = ($context["help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 319
            $context["help_attr"] = Twig\Extension\CoreExtension::merge(($context["help_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 319)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 319), "")) : ("")) . " form-text text-muted"))]);
            // line 320
            yield "<small id=\"";
            yield (string) $this->escaper->escape(($context["id"] ?? null), "html", null, true);
            yield "_help\"";
            $_v12 = $context;
            $_v13 = ["attr" => ($context["help_attr"] ?? null)];
            if (!is_iterable($_v13)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 320, $this->getSourceContext());
            }
            $_v13 = CoreExtension::toArray($_v13);
            $context = $_v13 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v12;
            yield ">";
            // line 321
            yield from             $this->unwrap()->yieldBlock("form_help_content", $context, $blocks);
            // line 322
            yield "</small>";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bootstrap_4_layout.html.twig";
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
        return array (  993 => 322,  991 => 321,  977 => 320,  975 => 319,  973 => 318,  966 => 317,  960 => 311,  949 => 308,  946 => 307,  942 => 306,  934 => 305,  932 => 304,  925 => 303,  918 => 298,  916 => 297,  914 => 296,  912 => 295,  899 => 294,  897 => 293,  894 => 291,  892 => 290,  889 => 288,  887 => 287,  885 => 286,  882 => 284,  880 => 283,  873 => 282,  867 => 276,  865 => 275,  862 => 273,  860 => 272,  849 => 271,  845 => 270,  842 => 269,  839 => 267,  837 => 266,  835 => 265,  832 => 263,  830 => 262,  827 => 260,  825 => 259,  822 => 257,  819 => 255,  817 => 254,  814 => 253,  812 => 252,  810 => 251,  803 => 249,  792 => 239,  785 => 244,  783 => 243,  779 => 242,  777 => 241,  774 => 239,  769 => 238,  767 => 237,  752 => 236,  749 => 234,  747 => 233,  744 => 231,  741 => 229,  739 => 228,  737 => 227,  735 => 226,  728 => 225,  723 => 220,  716 => 217,  715 => 216,  714 => 215,  713 => 214,  709 => 213,  705 => 212,  698 => 211,  693 => 208,  691 => 207,  684 => 206,  678 => 202,  676 => 201,  672 => 200,  670 => 199,  667 => 197,  665 => 196,  661 => 195,  659 => 194,  657 => 193,  655 => 192,  648 => 191,  642 => 187,  640 => 186,  636 => 185,  634 => 184,  631 => 182,  629 => 181,  625 => 180,  623 => 179,  621 => 178,  619 => 177,  617 => 176,  613 => 175,  611 => 174,  609 => 173,  607 => 172,  600 => 171,  595 => 168,  593 => 167,  586 => 166,  581 => 163,  579 => 162,  572 => 161,  567 => 158,  564 => 156,  562 => 155,  555 => 154,  550 => 151,  547 => 149,  545 => 148,  543 => 147,  540 => 145,  537 => 143,  535 => 142,  533 => 141,  531 => 140,  529 => 139,  527 => 138,  520 => 137,  513 => 134,  510 => 133,  507 => 131,  505 => 130,  491 => 129,  489 => 128,  487 => 127,  485 => 126,  481 => 125,  479 => 124,  477 => 123,  473 => 122,  466 => 121,  460 => 117,  454 => 113,  451 => 112,  449 => 111,  447 => 110,  445 => 109,  438 => 108,  432 => 104,  428 => 103,  423 => 100,  419 => 99,  416 => 98,  414 => 97,  409 => 94,  405 => 93,  402 => 92,  400 => 91,  395 => 88,  391 => 87,  388 => 86,  386 => 85,  381 => 82,  377 => 81,  374 => 80,  372 => 79,  367 => 76,  363 => 75,  360 => 74,  358 => 73,  353 => 70,  349 => 69,  346 => 68,  344 => 67,  339 => 64,  335 => 63,  332 => 62,  330 => 61,  326 => 60,  324 => 59,  321 => 57,  319 => 56,  316 => 54,  314 => 53,  312 => 52,  305 => 51,  300 => 48,  297 => 46,  295 => 45,  293 => 44,  286 => 43,  281 => 40,  278 => 38,  276 => 37,  274 => 36,  267 => 35,  262 => 32,  259 => 30,  257 => 29,  255 => 28,  248 => 27,  242 => 23,  239 => 21,  234 => 18,  231 => 17,  229 => 16,  227 => 15,  222 => 12,  219 => 11,  217 => 10,  213 => 9,  211 => 8,  209 => 7,  207 => 6,  200 => 5,  195 => 317,  192 => 316,  189 => 314,  187 => 303,  184 => 302,  181 => 300,  179 => 282,  176 => 281,  173 => 279,  171 => 249,  168 => 248,  166 => 225,  163 => 224,  160 => 222,  158 => 211,  155 => 210,  153 => 206,  150 => 205,  148 => 191,  145 => 190,  143 => 171,  140 => 170,  138 => 166,  135 => 165,  133 => 161,  130 => 160,  128 => 154,  125 => 153,  123 => 137,  120 => 136,  118 => 121,  115 => 120,  113 => 108,  110 => 107,  108 => 51,  105 => 50,  103 => 43,  100 => 42,  98 => 35,  95 => 34,  93 => 27,  90 => 26,  88 => 5,  85 => 4,  82 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "bootstrap_4_layout.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_4_layout.html.twig");
    }
}
