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

/* foundation_5_layout.html.twig */
class __TwigTemplate_4eb0d057ee277693da3fb6f53b53a36c extends Template
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

        $this->blocks = [
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'form_label' => [$this, 'block_form_label'],
            'choice_label' => [$this, 'block_choice_label'],
            'checkbox_label' => [$this, 'block_checkbox_label'],
            'radio_label' => [$this, 'block_radio_label'],
            'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
            'form_row_render' => [$this, 'block_form_row_render'],
            'choice_row' => [$this, 'block_choice_row'],
            'date_row' => [$this, 'block_date_row'],
            'time_row' => [$this, 'block_time_row'],
            'datetime_row' => [$this, 'block_datetime_row'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'radio_row' => [$this, 'block_radio_row'],
            'form_errors' => [$this, 'block_form_errors'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("form_div_layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("form_div_layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 8
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 8), "")) : ("")) . " error"))]);
            // line 9
            yield "    ";
        }
        // line 10
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 15
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 15), "")) : ("")) . " error"))]);
            // line 16
            yield "    ";
        }
        // line 17
        yield from $this->yieldParentBlock("textarea_widget", $context, $blocks);
        return; yield;
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 21), "")) : ("")) . " button"))]);
        // line 22
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        return; yield;
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["money_pattern"] ?? null), 0, 2));
        // line 28
        yield "        ";
        if ( !(($tmp = ($context["prepend"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
            yield "</span>
            </div>
        ";
        }
        // line 33
        yield "        <div class=\"small-9 large-10 columns\">";
        // line 34
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 35
        yield "</div>
        ";
        // line 36
        if ((($tmp = ($context["prepend"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
            yield "</span>
            </div>
        ";
        }
        // line 41
        yield "    </div>";
        return; yield;
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "<div class=\"row collapse\">";
        // line 46
        if ((($tmp = ($context["symbol"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "<div class=\"small-9 large-10 columns\">";
            // line 48
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 49
            yield "</div>
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 51
            yield (string) $this->escaper->escape(((array_key_exists("symbol", $context)) ? (Twig\Extension\CoreExtension::default(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
            yield "</span>
            </div>";
        } else {
            // line 54
            yield "<div class=\"small-12 large-12 columns\">";
            // line 55
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            // line 56
            yield "</div>";
        }
        // line 58
        yield "</div>";
        return; yield;
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 63
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 65), "")) : ("")) . " row"))]);
            // line 66
            yield "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 67
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 67), 'errors');
            yield "</div>
            <div class=\"large-5 columns\">";
            // line 68
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 68), 'errors');
            yield "</div>
        </div>
        <div ";
            // line 70
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
            <div class=\"large-7 columns\">";
            // line 71
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 71), 'widget', ["datetime" => true]);
            yield "</div>
            <div class=\"large-5 columns\">";
            // line 72
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 72), 'widget', ["datetime" => true]);
            yield "</div>
        </div>
    ";
        }
        return; yield;
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 78
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 79
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 81
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 81)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 81), "")) : ("")) . " row"))]);
            // line 82
            yield "        ";
            if (( !array_key_exists("datetime", $context) ||  !(($tmp = ($context["datetime"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 83
                yield "            <div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">
        ";
            }
            // line 85
            yield (string) Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 86
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 86), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 87
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 87), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 88
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 88), 'widget')) . "</div>")]);
            // line 90
            if (( !array_key_exists("datetime", $context) ||  !(($tmp = ($context["datetime"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 91
                yield "            </div>
        ";
            }
            // line 93
            yield "    ";
        }
        return; yield;
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 97
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 98
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            yield "        ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 100), "")) : ("")) . " row"))]);
            // line 101
            yield "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 102
                yield "            <div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">
        ";
            }
            // line 104
            yield "        ";
            if ((($tmp = ($context["with_seconds"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 105
                yield "            <div class=\"large-4 columns\">";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 105), 'widget');
                yield "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 112
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 112), 'widget');
                yield "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 122
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 122), 'widget');
                yield "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 127
                yield "            <div class=\"large-6 columns\">";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 127), 'widget');
                yield "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 134
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 134), 'widget');
                yield "
                    </div>
                </div>
            </div>
        ";
            }
            // line 139
            yield "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 140
                yield "            </div>
        ";
            }
            // line 142
            yield "    ";
        }
        return; yield;
    }

    // line 145
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 146
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 147
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 147), "")) : ("")) . " error"))]);
            // line 148
            yield "    ";
        }
        // line 149
        yield "
    ";
        // line 150
        if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 151
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["style" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "style", [], "any", true, true, false, 151)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "style", [], "any", false, false, false, 151), "")) : ("")) . " height: auto; background-image: none;"))]);
            // line 152
            yield "    ";
        }
        // line 153
        yield "
    ";
        // line 154
        if (((((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (null === ($context["placeholder"] ?? null))) &&  !(($tmp = ($context["placeholder_in_choices"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 155
            $context["required"] = false;
        }
        // line 157
        yield "<select ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        yield ">
        ";
        // line 158
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 159
            yield "<option value=\"\"";
            if ((($tmp = ((array_key_exists("placeholder_attr", $context)) ? (Twig\Extension\CoreExtension::default(($context["placeholder_attr"] ?? null), [])) : ([]))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $_v0 = $context;
                $_v1 = ["attr" => ($context["placeholder_attr"] ?? null)];
                if (!is_iterable($_v1)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 159, $this->getSourceContext());
                }
                $_v1 = CoreExtension::toArray($_v1);
                $context = $_v1 + $context + $this->env->getGlobals();
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                $context = $_v0;
            }
            if (((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null)))) {
                yield " selected=\"selected\"";
            }
            yield ">";
            yield (string) (((($context["translation_domain"] ?? null) === false)) ? ($this->escaper->escape(($context["placeholder"] ?? null), "html", null, true)) : ($this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true)));
            yield "</option>";
        }
        // line 161
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["preferred_choices"] ?? null)) > 0)) {
            // line 162
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 163
            yield "            ";
            $context["render_preferred_choices"] = true;
            // line 164
            yield from             $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
            // line 165
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 166
                if (( !array_key_exists("separator_html", $context) || (($context["separator_html"] ?? null) === false))) {
                    // line 167
                    yield "<option disabled=\"disabled\">";
                    yield (string) $this->escaper->escape(($context["separator"] ?? null), "html", null, true);
                    yield "</option>
                ";
                } else {
                    // line 169
                    yield "                    ";
                    yield (string) ($context["separator"] ?? null);
                    yield "
                ";
                }
            }
        }
        // line 173
        $context["options"] = ($context["choices"] ?? null);
        // line 174
        $context["render_preferred_choices"] = false;
        // line 175
        yield from         $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
        // line 176
        yield "</select>";
        return; yield;
    }

    // line 179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 180
        if (CoreExtension::inFilter("-inline", ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 180)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 180), "")) : ("")))) {
            // line 181
            yield "        <ul class=\"inline-list\">
            ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 183
                yield "                <li>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 184
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 184)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 184), "")) : (""))]);
                // line 185
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 187
            yield "        </ul>
    ";
        } else {
            // line 189
            yield "        <div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
            ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 191
                yield "                ";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 192
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 192)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 192), "")) : (""))]);
                // line 193
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 195
            yield "        </div>
    ";
        }
        return; yield;
    }

    // line 199
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 200
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), "")) : (""));
        // line 201
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 202
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 202)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 202), "")) : ("")) . " error"))]);
            // line 203
            yield "    ";
        }
        // line 204
        yield "    ";
        if (CoreExtension::inFilter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 205
            yield "        ";
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            yield "
    ";
        } else {
            // line 207
            yield "        <div class=\"checkbox\">
            ";
            // line 208
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            yield "
        </div>
    ";
        }
        return; yield;
    }

    // line 213
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 214
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["parent_label_class"] ?? null), "")) : (""));
        // line 215
        yield "    ";
        if (CoreExtension::inFilter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 216
            yield "        ";
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            yield "
    ";
        } else {
            // line 218
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
                // line 219
                $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 219)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 219), "")) : ("")) . " error"))]);
                // line 220
                yield "        ";
            }
            // line 221
            yield "        <div class=\"radio\">
            ";
            // line 222
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            yield "
        </div>
    ";
        }
        return; yield;
    }

    // line 229
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 230
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 231
            $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 231)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 231), "")) : ("")) . " error"))]);
            // line 232
            yield "    ";
        }
        // line 233
        yield from $this->yieldParentBlock("form_label", $context, $blocks);
        return; yield;
    }

    // line 236
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 237
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 238
            $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 238)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 238), "")) : ("")) . " error"))]);
            // line 239
            yield "    ";
        }
        // line 240
        yield "    ";
        // line 241
        yield "    ";
        $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 241)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 241), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 242
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        return; yield;
    }

    // line 245
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 246
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        return; yield;
    }

    // line 249
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 250
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        return; yield;
    }

    // line 253
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 254
        if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 255
            yield "        ";
            $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 255)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 255), "")) : ("")) . " required"))]);
            // line 256
            yield "    ";
        }
        // line 257
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 258
            $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 258)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 258), "")) : ("")) . " error"))]);
            // line 259
            yield "    ";
        }
        // line 260
        if (array_key_exists("parent_label_class", $context)) {
            // line 261
            $context["embed_label_classes"] = Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["parent_label_class"] ?? null), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return CoreExtension::inFilter(($context["class"] ?? null), ["checkbox-inline", "radio-inline"]); });
            // line 262
            $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 262)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 262), "")) : ("")) . " ") . Twig\Extension\CoreExtension::join(($context["embed_label_classes"] ?? null), " ")))]);
        }
        // line 264
        yield "    ";
        if (((null === ($context["label"] ?? null)) || (($context["label"] ?? null) === ""))) {
            // line 265
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                // line 266
                $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                 // line 267
($context["name"] ?? null), "%id%" =>                 // line 268
($context["id"] ?? null)]);
            } elseif ( !(            // line 270
($context["label"] ?? null) === false)) {
                // line 271
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 274
        yield "    <label";
        $_v2 = $context;
        $_v3 = ["attr" => ($context["label_attr"] ?? null)];
        if (!is_iterable($_v3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 274, $this->getSourceContext());
        }
        $_v3 = CoreExtension::toArray($_v3);
        $context = $_v3 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v2;
        yield ">
        ";
        // line 275
        yield (string) ($context["widget"] ?? null);
        // line 276
        if ( !(($context["label"] ?? null) === false)) {
            // line 277
            yield from             $this->unwrap()->yieldBlock("form_label_content", $context, $blocks);
        }
        // line 279
        yield "</label>";
        return; yield;
    }

    // line 284
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row_render(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 285
        yield "<div";
        $_v4 = $context;
        $_v5 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 285)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 285), "")) : ("")) . " row"))])];
        if (!is_iterable($_v5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 285, $this->getSourceContext());
        }
        $_v5 = CoreExtension::toArray($_v5);
        $context = $_v5 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v4;
        yield ">
        <div class=\"large-12 columns";
        // line 286
        if ((( !(($tmp = ($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            yield " error";
        }
        yield "\">";
        // line 287
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 288
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 289
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 290
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 291
        yield "</div>
    </div>";
        return; yield;
    }

    // line 295
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 296
        $context["force_error"] = true;
        // line 297
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield;
    }

    // line 300
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 301
        $context["force_error"] = true;
        // line 302
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield;
    }

    // line 305
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 306
        $context["force_error"] = true;
        // line 307
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield;
    }

    // line 310
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 311
        $context["force_error"] = true;
        // line 312
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_row", $context, $blocks);
        return; yield;
    }

    // line 315
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 316
        yield "<div";
        $_v6 = $context;
        $_v7 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 316)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 316), "")) : ("")) . " row"))])];
        if (!is_iterable($_v7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 316, $this->getSourceContext());
        }
        $_v7 = CoreExtension::toArray($_v7);
        $context = $_v7 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v6;
        yield ">
        <div class=\"large-12 columns";
        // line 317
        if ( !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " error";
        }
        yield "\">
            ";
        // line 318
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 319
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 320
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
        </div>
    </div>";
        return; yield;
    }

    // line 325
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 326
        yield "<div";
        $_v8 = $context;
        $_v9 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 326)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 326), "")) : ("")) . " row"))])];
        if (!is_iterable($_v9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 326, $this->getSourceContext());
        }
        $_v9 = CoreExtension::toArray($_v9);
        $context = $_v9 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v8;
        yield ">
        <div class=\"large-12 columns";
        // line 327
        if ( !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " error";
        }
        yield "\">
            ";
        // line 328
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 329
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 330
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
        </div>
    </div>";
        return; yield;
    }

    // line 337
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 338
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 339
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                yield "<small class=\"error\">";
            } else {
                yield "<div data-alert class=\"alert-box alert\">";
            }
            // line 340
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
                // line 341
                yield "<span id=\"";
                yield (string) $this->escaper->escape(((($context["id"] ?? null) . "_error") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 341)), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 341), "html", null, true);
                yield "</span>";
                if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 341)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ", ";
                }
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
            // line 343
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                yield "</small>";
            } else {
                yield "</div>";
            }
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "foundation_5_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
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
        return array (  993 => 343,  971 => 341,  954 => 340,  948 => 339,  946 => 338,  939 => 337,  931 => 330,  929 => 329,  927 => 328,  921 => 327,  908 => 326,  901 => 325,  893 => 320,  891 => 319,  889 => 318,  883 => 317,  870 => 316,  863 => 315,  857 => 312,  855 => 311,  848 => 310,  842 => 307,  840 => 306,  833 => 305,  827 => 302,  825 => 301,  818 => 300,  812 => 297,  810 => 296,  803 => 295,  797 => 291,  795 => 290,  793 => 289,  791 => 288,  789 => 287,  784 => 286,  771 => 285,  764 => 284,  759 => 279,  756 => 277,  754 => 276,  752 => 275,  739 => 274,  735 => 271,  733 => 270,  731 => 268,  730 => 267,  729 => 266,  727 => 265,  724 => 264,  721 => 262,  719 => 261,  717 => 260,  714 => 259,  712 => 258,  709 => 257,  706 => 256,  703 => 255,  701 => 254,  694 => 253,  689 => 250,  682 => 249,  677 => 246,  670 => 245,  665 => 242,  662 => 241,  660 => 240,  657 => 239,  655 => 238,  653 => 237,  646 => 236,  641 => 233,  638 => 232,  636 => 231,  634 => 230,  627 => 229,  618 => 222,  615 => 221,  612 => 220,  610 => 219,  607 => 218,  601 => 216,  598 => 215,  596 => 214,  589 => 213,  580 => 208,  577 => 207,  571 => 205,  568 => 204,  565 => 203,  563 => 202,  560 => 201,  558 => 200,  551 => 199,  544 => 195,  536 => 193,  534 => 192,  532 => 191,  528 => 190,  523 => 189,  519 => 187,  511 => 185,  509 => 184,  507 => 183,  503 => 182,  500 => 181,  498 => 180,  491 => 179,  486 => 176,  484 => 175,  482 => 174,  480 => 173,  472 => 169,  466 => 167,  464 => 166,  462 => 165,  460 => 164,  457 => 163,  455 => 162,  453 => 161,  433 => 159,  431 => 158,  423 => 157,  420 => 155,  418 => 154,  415 => 153,  412 => 152,  410 => 151,  408 => 150,  405 => 149,  402 => 148,  400 => 147,  398 => 146,  391 => 145,  385 => 142,  381 => 140,  378 => 139,  370 => 134,  359 => 127,  351 => 122,  338 => 112,  327 => 105,  324 => 104,  318 => 102,  315 => 101,  312 => 100,  309 => 98,  307 => 97,  300 => 96,  294 => 93,  290 => 91,  288 => 90,  286 => 88,  285 => 87,  284 => 86,  283 => 85,  277 => 83,  274 => 82,  271 => 81,  268 => 79,  266 => 78,  259 => 77,  250 => 72,  246 => 71,  242 => 70,  237 => 68,  233 => 67,  230 => 66,  227 => 65,  224 => 63,  222 => 62,  215 => 61,  210 => 58,  207 => 56,  205 => 55,  203 => 54,  198 => 51,  194 => 49,  192 => 48,  190 => 47,  188 => 46,  186 => 45,  179 => 44,  174 => 41,  168 => 38,  165 => 37,  163 => 36,  160 => 35,  158 => 34,  156 => 33,  150 => 30,  147 => 29,  144 => 28,  142 => 27,  139 => 26,  132 => 25,  127 => 22,  125 => 21,  118 => 20,  113 => 17,  110 => 16,  108 => 15,  106 => 14,  99 => 13,  94 => 10,  91 => 9,  89 => 8,  87 => 7,  80 => 6,  69 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "foundation_5_layout.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
