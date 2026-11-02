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

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_73c71e2fd5c14621c576bf893cdc4588 extends Template
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
        $_trait_0 = $this->load("form_div_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
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
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 27
        yield "
";
        // line 28
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 38
        yield "
";
        // line 39
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 62
        yield "
";
        // line 63
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 89
        yield "
";
        // line 90
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 108
        yield from $this->unwrap()->yieldBlock('dateinterval_widget', $context, $blocks);
        // line 146
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 165
        yield "
";
        // line 167
        yield "
";
        // line 168
        yield from $this->unwrap()->yieldBlock('choice_label', $context, $blocks);
        // line 173
        yield "
";
        // line 174
        yield from $this->unwrap()->yieldBlock('checkbox_label', $context, $blocks);
        // line 177
        yield "
";
        // line 178
        yield from $this->unwrap()->yieldBlock('radio_label', $context, $blocks);
        // line 181
        yield "
";
        // line 183
        yield "
";
        // line 184
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 189
        yield "
";
        // line 190
        yield from $this->unwrap()->yieldBlock('choice_row', $context, $blocks);
        // line 194
        yield "
";
        // line 195
        yield from $this->unwrap()->yieldBlock('date_row', $context, $blocks);
        // line 199
        yield "
";
        // line 200
        yield from $this->unwrap()->yieldBlock('time_row', $context, $blocks);
        // line 204
        yield "
";
        // line 205
        yield from $this->unwrap()->yieldBlock('datetime_row', $context, $blocks);
        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 6), "")) : ("")) . " form-control"))]);
        // line 7
        yield from $this->yieldParentBlock("textarea_widget", $context, $blocks);
        return; yield;
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        $context["prepend"] =  !(is_string($_v0 = ($context["money_pattern"] ?? null)) && is_string($_v1 = "{{") && str_starts_with($_v0, $_v1));
        // line 12
        yield "    ";
        $context["append"] =  !(is_string($_v2 = ($context["money_pattern"] ?? null)) && is_string($_v3 = "}}") && str_ends_with($_v2, $_v3));
        // line 13
        yield "    ";
        if (((($tmp = ($context["prepend"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["append"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 14
            yield "        <div class=\"input-group ";
            yield (string) $this->escaper->escape(((array_key_exists("group_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["group_class"] ?? null), "")) : ("")), "html", null, true);
            yield "\">
            ";
            // line 15
            if ((($tmp = ($context["prepend"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 16
                yield "                <span class=\"input-group-addon\">";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>
            ";
            }
            // line 18
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 19
            if ((($tmp = ($context["append"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "                <span class=\"input-group-addon\">";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                yield "</span>
            ";
            }
            // line 22
            yield "        </div>
    ";
        } else {
            // line 24
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield;
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        if ((($tmp = ($context["symbol"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "<div class=\"input-group\">";
            // line 31
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 32
            yield "<span class=\"input-group-addon\">";
            yield (string) $this->escaper->escape(((array_key_exists("symbol", $context)) ? (Twig\Extension\CoreExtension::default(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
            yield "</span>
        </div>";
        } else {
            // line 35
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield;
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 41
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 43
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 43), "")) : ("")) . " form-inline"))]);
            // line 44
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 45
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 45), 'errors');
            // line 46
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 46), 'errors');
            // line 48
            yield "<div class=\"sr-only\">";
            // line 49
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, true, false, 49), "year", [], "any", true, true, false, 49)) {
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 49), "year", [], "any", false, false, false, 49), 'label');
            }
            // line 50
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, true, false, 50), "month", [], "any", true, true, false, 50)) {
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 50), "month", [], "any", false, false, false, 50), 'label');
            }
            // line 51
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, true, false, 51), "day", [], "any", true, true, false, 51)) {
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 51), "day", [], "any", false, false, false, 51), 'label');
            }
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, true, false, 52), "hour", [], "any", true, true, false, 52)) {
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 52), "hour", [], "any", false, false, false, 52), 'label');
            }
            // line 53
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, true, false, 53), "minute", [], "any", true, true, false, 53)) {
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 53), "minute", [], "any", false, false, false, 53), 'label');
            }
            // line 54
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, true, false, 54), "second", [], "any", true, true, false, 54)) {
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 54), "second", [], "any", false, false, false, 54), 'label');
            }
            // line 55
            yield "</div>";
            // line 57
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 57), 'widget', ["datetime" => true]);
            // line 58
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 58), 'widget', ["datetime" => true]);
            // line 59
            yield "</div>";
        }
        return; yield;
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 65
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 67
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 67), "")) : ("")) . " form-inline"))]);
            // line 68
            if (( !array_key_exists("datetime", $context) ||  !(($tmp = ($context["datetime"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 69
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 71
            if ( !(($context["label"] ?? null) === false)) {
                // line 72
                yield "<div class=\"sr-only\">
                ";
                // line 73
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 73), 'label');
                yield "
                ";
                // line 74
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 74), 'label');
                yield "
                ";
                // line 75
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 75), 'label');
                yield "
            </div>";
            }
            // line 79
            yield (string) Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 80), 'widget'), "{{ month }}" =>             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 81), 'widget'), "{{ day }}" =>             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 82), 'widget')]);
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !(($tmp = ($context["datetime"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 85
                yield "</div>";
            }
        }
        return; yield;
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 91
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 92
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 94)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 94), "")) : ("")) . " form-inline"))]);
            // line 95
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 96
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 98
            if ( !(($context["label"] ?? null) === false)) {
                yield "<div class=\"sr-only\">";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 98), 'label');
                yield "</div>";
            }
            // line 99
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 99), 'widget');
            // line 100
            if ((($tmp = ($context["with_minutes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ":";
                if ( !(($context["label"] ?? null) === false)) {
                    yield "<div class=\"sr-only\">";
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 100), 'label');
                    yield "</div>";
                }
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 100), 'widget');
            }
            // line 101
            if ((($tmp = ($context["with_seconds"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ":";
                if ( !(($context["label"] ?? null) === false)) {
                    yield "<div class=\"sr-only\">";
                    yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 101), 'label');
                    yield "</div>";
                }
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 101), 'widget');
            }
            // line 102
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 103
                yield "</div>";
            }
        }
        return; yield;
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dateinterval_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 109
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 110
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 112), "")) : ("")) . " form-inline"))]);
            // line 113
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 114
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 115
            yield "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 116
            yield (string) $this->escaper->escape(((array_key_exists("table_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["table_class"] ?? null), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            yield "\" role=\"presentation\">
                    <thead>
                    <tr>";
            // line 119
            if ((($tmp = ($context["with_years"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 119), 'label');
                yield "</th>";
            }
            // line 120
            if ((($tmp = ($context["with_months"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 120), 'label');
                yield "</th>";
            }
            // line 121
            if ((($tmp = ($context["with_weeks"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 121), 'label');
                yield "</th>";
            }
            // line 122
            if ((($tmp = ($context["with_days"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 122), 'label');
                yield "</th>";
            }
            // line 123
            if ((($tmp = ($context["with_hours"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 123), 'label');
                yield "</th>";
            }
            // line 124
            if ((($tmp = ($context["with_minutes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 124), 'label');
                yield "</th>";
            }
            // line 125
            if ((($tmp = ($context["with_seconds"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 125), 'label');
                yield "</th>";
            }
            // line 126
            yield "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 130
            if ((($tmp = ($context["with_years"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<td>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 130), 'widget');
                yield "</td>";
            }
            // line 131
            if ((($tmp = ($context["with_months"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<td>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 131), 'widget');
                yield "</td>";
            }
            // line 132
            if ((($tmp = ($context["with_weeks"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<td>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 132), 'widget');
                yield "</td>";
            }
            // line 133
            if ((($tmp = ($context["with_days"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<td>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 133), 'widget');
                yield "</td>";
            }
            // line 134
            if ((($tmp = ($context["with_hours"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<td>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 134), 'widget');
                yield "</td>";
            }
            // line 135
            if ((($tmp = ($context["with_minutes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<td>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 135), 'widget');
                yield "</td>";
            }
            // line 136
            if ((($tmp = ($context["with_seconds"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<td>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 136), 'widget');
                yield "</td>";
            }
            // line 137
            yield "</tr>
                    </tbody>
                </table>
            </div>";
            // line 141
            if ((($tmp = ($context["with_invert"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, false, 141), 'widget');
            }
            // line 142
            yield "</div>";
        }
        return; yield;
    }

    // line 146
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 147
        if (CoreExtension::inFilter("-inline", ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 147), "")) : ("")))) {
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 150
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 150)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 150), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
        } else {
            // line 155
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 157
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 158
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 158)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 158), "")) : ("")), "translation_domain" =>                 // line 159
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 162
            yield "</div>";
        }
        return; yield;
    }

    // line 168
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 170
        $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 170)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 170), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => "", "checkbox-custom" => "", "radio-custom" => "", "switch-custom" => ""]))]);
        // line 171
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        return; yield;
    }

    // line 174
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 175
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        return; yield;
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 179
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        return; yield;
    }

    // line 184
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 185
        yield "<div";
        $_v4 = $context;
        $_v5 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 185)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 185), "")) : ("")) . " form-group"))])];
        if (!is_iterable($_v5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 185, $this->getSourceContext());
        }
        $_v5 = CoreExtension::toArray($_v5);
        $context = $_v5 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v4;
        yield ">";
        // line 186
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 187
        yield "</div>";
        return; yield;
    }

    // line 190
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 191
        $context["force_error"] = true;
        // line 192
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield;
    }

    // line 195
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 196
        $context["force_error"] = true;
        // line 197
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield;
    }

    // line 200
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 201
        $context["force_error"] = true;
        // line 202
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield;
    }

    // line 205
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 206
        $context["force_error"] = true;
        // line 207
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bootstrap_base_layout.html.twig";
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
        return array (  714 => 207,  712 => 206,  705 => 205,  700 => 202,  698 => 201,  691 => 200,  686 => 197,  684 => 196,  677 => 195,  672 => 192,  670 => 191,  663 => 190,  658 => 187,  656 => 186,  644 => 185,  637 => 184,  632 => 179,  625 => 178,  620 => 175,  613 => 174,  608 => 171,  606 => 170,  599 => 168,  593 => 162,  586 => 159,  585 => 158,  584 => 157,  580 => 156,  576 => 155,  568 => 151,  567 => 150,  566 => 149,  562 => 148,  560 => 147,  553 => 146,  547 => 142,  543 => 141,  538 => 137,  532 => 136,  526 => 135,  520 => 134,  514 => 133,  508 => 132,  502 => 131,  496 => 130,  491 => 126,  485 => 125,  479 => 124,  473 => 123,  467 => 122,  461 => 121,  455 => 120,  449 => 119,  444 => 116,  441 => 115,  439 => 114,  435 => 113,  433 => 112,  430 => 110,  428 => 109,  421 => 108,  414 => 103,  412 => 102,  402 => 101,  392 => 100,  390 => 99,  384 => 98,  379 => 96,  377 => 95,  375 => 94,  372 => 92,  370 => 91,  363 => 90,  356 => 85,  354 => 84,  352 => 82,  351 => 81,  350 => 80,  349 => 79,  344 => 75,  340 => 74,  336 => 73,  333 => 72,  331 => 71,  326 => 69,  324 => 68,  322 => 67,  319 => 65,  317 => 64,  310 => 63,  304 => 59,  302 => 58,  300 => 57,  298 => 55,  294 => 54,  290 => 53,  286 => 52,  282 => 51,  278 => 50,  274 => 49,  272 => 48,  270 => 46,  268 => 45,  264 => 44,  262 => 43,  259 => 41,  257 => 40,  250 => 39,  244 => 35,  238 => 32,  236 => 31,  234 => 30,  232 => 29,  225 => 28,  219 => 24,  215 => 22,  209 => 20,  207 => 19,  205 => 18,  199 => 16,  197 => 15,  192 => 14,  189 => 13,  186 => 12,  184 => 11,  177 => 10,  172 => 7,  170 => 6,  163 => 5,  158 => 205,  155 => 204,  153 => 200,  150 => 199,  148 => 195,  145 => 194,  143 => 190,  140 => 189,  138 => 184,  135 => 183,  132 => 181,  130 => 178,  127 => 177,  125 => 174,  122 => 173,  120 => 168,  117 => 167,  114 => 165,  112 => 146,  110 => 108,  108 => 90,  105 => 89,  103 => 63,  100 => 62,  98 => 39,  95 => 38,  93 => 28,  90 => 27,  88 => 10,  85 => 9,  83 => 5,  80 => 4,  77 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "bootstrap_base_layout.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_base_layout.html.twig");
    }
}
