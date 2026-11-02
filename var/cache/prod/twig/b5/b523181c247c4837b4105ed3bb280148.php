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

/* form_div_layout.html.twig */
class __TwigTemplate_e09724a054f6e6d47dea30ef92e47113 extends Template
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

        $this->blocks = [
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'range_widget' => [$this, 'block_range_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'color_widget' => [$this, 'block_color_widget'],
            'week_widget' => [$this, 'block_week_widget'],
            'form_label' => [$this, 'block_form_label'],
            'form_label_content' => [$this, 'block_form_label_content'],
            'button_label' => [$this, 'block_button_label'],
            'form_help' => [$this, 'block_form_help'],
            'form_help_content' => [$this, 'block_form_help_content'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'form_row_render' => [$this, 'block_form_row_render'],
            'button_row' => [$this, 'block_button_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form' => [$this, 'block_form'],
            'form_start' => [$this, 'block_form_start'],
            'form_end' => [$this, 'block_form_end'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_rest' => [$this, 'block_form_rest'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'button_attributes' => [$this, 'block_button_attributes'],
            'attributes' => [$this, 'block_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield from $this->unwrap()->yieldBlock('form_widget', $context, $blocks);
        // line 11
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 20
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        // line 30
        yield from $this->unwrap()->yieldBlock('collection_widget', $context, $blocks);
        // line 37
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 41
        yield from $this->unwrap()->yieldBlock('choice_widget', $context, $blocks);
        // line 49
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 58
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 84
        yield from $this->unwrap()->yieldBlock('choice_widget_options', $context, $blocks);
        // line 97
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 101
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 105
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 118
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 132
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 143
        yield from $this->unwrap()->yieldBlock('dateinterval_widget', $context, $blocks);
        // line 178
        yield from $this->unwrap()->yieldBlock('number_widget', $context, $blocks);
        // line 184
        yield from $this->unwrap()->yieldBlock('integer_widget', $context, $blocks);
        // line 189
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 193
        yield from $this->unwrap()->yieldBlock('url_widget', $context, $blocks);
        // line 198
        yield from $this->unwrap()->yieldBlock('search_widget', $context, $blocks);
        // line 203
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 208
        yield from $this->unwrap()->yieldBlock('password_widget', $context, $blocks);
        // line 213
        yield from $this->unwrap()->yieldBlock('hidden_widget', $context, $blocks);
        // line 218
        yield from $this->unwrap()->yieldBlock('email_widget', $context, $blocks);
        // line 223
        yield from $this->unwrap()->yieldBlock('range_widget', $context, $blocks);
        // line 228
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 234
        yield from $this->unwrap()->yieldBlock('submit_widget', $context, $blocks);
        // line 239
        yield from $this->unwrap()->yieldBlock('reset_widget', $context, $blocks);
        // line 244
        yield from $this->unwrap()->yieldBlock('tel_widget', $context, $blocks);
        // line 249
        yield from $this->unwrap()->yieldBlock('color_widget', $context, $blocks);
        // line 254
        yield from $this->unwrap()->yieldBlock('week_widget', $context, $blocks);
        // line 267
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 281
        yield from $this->unwrap()->yieldBlock('form_label_content', $context, $blocks);
        // line 307
        yield from $this->unwrap()->yieldBlock('button_label', $context, $blocks);
        // line 310
        yield "
";
        // line 311
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 319
        yield "
";
        // line 320
        yield from $this->unwrap()->yieldBlock('form_help_content', $context, $blocks);
        // line 335
        yield "
";
        // line 338
        yield from $this->unwrap()->yieldBlock('repeated_row', $context, $blocks);
        // line 346
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 365
        yield from $this->unwrap()->yieldBlock('form_row_render', $context, $blocks);
        // line 374
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 380
        yield from $this->unwrap()->yieldBlock('hidden_row', $context, $blocks);
        // line 386
        yield from $this->unwrap()->yieldBlock('form', $context, $blocks);
        // line 392
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 406
        yield from $this->unwrap()->yieldBlock('form_end', $context, $blocks);
        // line 413
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 423
        yield from $this->unwrap()->yieldBlock('form_rest', $context, $blocks);
        // line 444
        yield "
";
        // line 447
        yield from $this->unwrap()->yieldBlock('form_rows', $context, $blocks);
        // line 453
        yield from $this->unwrap()->yieldBlock('widget_attributes', $context, $blocks);
        // line 460
        yield from $this->unwrap()->yieldBlock('widget_container_attributes', $context, $blocks);
        // line 465
        yield from $this->unwrap()->yieldBlock('button_attributes', $context, $blocks);
        // line 470
        yield from $this->unwrap()->yieldBlock('attributes', $context, $blocks);
        return; yield;
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        if ((($tmp = ($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield from             $this->unwrap()->yieldBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        return; yield;
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 13
        if (((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color"))) {
            // line 15
            $context["required"] = false;
        }
        // line 17
        yield "<input type=\"";
        yield (string) $this->escaper->escape(($context["type"] ?? null), "html", null, true);
        yield "\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["value"] ?? null))) {
            yield "value=\"";
            yield (string) $this->escaper->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
        }
        yield "/>";
        return; yield;
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_compound(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 22
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
            // line 23
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 25
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 26
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 27
        yield "</div>";
        return; yield;
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        if ((array_key_exists("prototype", $context) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 32
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
        }
        // line 34
        yield from         $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        return; yield;
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "<textarea ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        yield (string) $this->escaper->escape(($context["value"] ?? null), "html", null, true);
        yield "</textarea>";
        return; yield;
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        if ((($tmp = ($context["expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield from             $this->unwrap()->yieldBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 45
            yield from             $this->unwrap()->yieldBlock("choice_widget_collapsed", $context, $blocks);
        }
        return; yield;
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 53
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 55
        yield "</div>";
        return; yield;
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        if ((((((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (null === ($context["placeholder"] ?? null))) &&  !(($tmp = ($context["placeholder_in_choices"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && ( !CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", true, true, false, 59) || (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", false, false, false, 59) <= 1)))) {
            // line 60
            $context["required"] = false;
        }
        // line 62
        yield "<select ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " multiple=\"multiple\"";
        }
        yield ">";
        // line 63
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 64
            yield "<option value=\"\"";
            if ((($tmp = ((array_key_exists("placeholder_attr", $context)) ? (Twig\Extension\CoreExtension::default(($context["placeholder_attr"] ?? null), [])) : ([]))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $_v0 = $context;
                $_v1 = ["attr" => ($context["placeholder_attr"] ?? null)];
                if (!is_iterable($_v1)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 64, $this->getSourceContext());
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
            yield (string) (((($context["placeholder"] ?? null) != "")) ? ((((($context["translation_domain"] ?? null) === false)) ? ($this->escaper->escape(($context["placeholder"] ?? null), "html", null, true)) : ($this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true)))) : (""));
            yield "</option>";
        }
        // line 66
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["preferred_choices"] ?? null)) > 0)) {
            // line 67
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 68
            yield "            ";
            $context["render_preferred_choices"] = true;
            // line 69
            yield from             $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
            // line 70
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 71
                if (( !array_key_exists("separator_html", $context) || (($context["separator_html"] ?? null) === false))) {
                    // line 72
                    yield "<option disabled=\"disabled\">";
                    yield (string) $this->escaper->escape(($context["separator"] ?? null), "html", null, true);
                    yield "</option>
                ";
                } else {
                    // line 74
                    yield "                    ";
                    yield (string) ($context["separator"] ?? null);
                    yield "
                ";
                }
            }
        }
        // line 78
        $context["options"] = ($context["choices"] ?? null);
        // line 79
        $context["render_preferred_choices"] = false;
        // line 80
        yield from         $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
        // line 81
        yield "</select>";
        return; yield;
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_options(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 86
            if (is_iterable($context["choice"])) {
                // line 87
                yield "<optgroup label=\"";
                yield (string) (((($context["choice_translation_domain"] ?? null) === false)) ? ($this->escaper->escape($context["group_label"], "html", null, true)) : ($this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], ($context["choice_translation_domain"] ?? null)), "html", null, true)));
                yield "\">
                ";
                // line 88
                $context["options"] = $context["choice"];
                // line 89
                yield from                 $this->unwrap()->yieldBlock("choice_widget_options", $context, $blocks);
                // line 90
                yield "</optgroup>";
            } else {
                // line 92
                yield "<option value=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 92), "html", null, true);
                yield "\"";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    $_v2 = $context;
                    $_v3 = ["attr" => CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 92)];
                    if (!is_iterable($_v3)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 92, $this->getSourceContext());
                    }
                    $_v3 = CoreExtension::toArray($_v3);
                    $context = $_v3 + $context + $this->env->getGlobals();
                    yield from                     $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                    $context = $_v2;
                }
                if ((( !(($tmp = ((array_key_exists("render_preferred_choices", $context)) ? (Twig\Extension\CoreExtension::default(($context["render_preferred_choices"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp) ||  !(($tmp = (((array_key_exists("duplicate_preferred_choices", $context) &&  !(null === $context["duplicate_preferred_choices"]))) ? ($context["duplicate_preferred_choices"]) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null)))) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield (string) (((($context["choice_translation_domain"] ?? null) === false)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 92), "html", null, true)) : ($this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 92), CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "labelTranslationParameters", [], "any", false, false, false, 92), ($context["choice_translation_domain"] ?? null)), "html", null, true)));
                yield "</option>";
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
        unset($context['_seq'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        return; yield;
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 98
        yield "<input type=\"checkbox\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield (string) $this->escaper->escape(($context["value"] ?? null), "html", null, true);
            yield "\"";
        }
        if ((($tmp = ($context["checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked=\"checked\"";
        }
        yield " />";
        return; yield;
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 102
        yield "<input type=\"radio\" ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            yield " value=\"";
            yield (string) $this->escaper->escape(($context["value"] ?? null), "html", null, true);
            yield "\"";
        }
        if ((($tmp = ($context["checked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " checked=\"checked\"";
        }
        yield " />";
        return; yield;
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 106
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 107
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 109
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 110
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 110), 'errors');
            // line 111
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 111), 'errors');
            // line 112
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 112), 'widget');
            // line 113
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 113), 'widget');
            // line 114
            yield "</div>";
        }
        return; yield;
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 119
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 120
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 122
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 123
            yield (string) Twig\Extension\CoreExtension::replace(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 124
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 124), 'widget'), "{{ month }}" =>             // line 125
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 125), 'widget'), "{{ day }}" =>             // line 126
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 126), 'widget')]);
            // line 128
            yield "</div>";
        }
        return; yield;
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 133
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 134
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 136
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 137
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
            ";
            // line 138
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 138), 'widget', ($context["vars"] ?? null));
            if ((($tmp = ($context["with_minutes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ":";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 138), 'widget', ($context["vars"] ?? null));
            }
            if ((($tmp = ($context["with_seconds"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ":";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 138), 'widget', ($context["vars"] ?? null));
            }
            // line 139
            yield "        </div>";
        }
        return; yield;
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dateinterval_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 144
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 145
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 147
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 148
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 149
            yield "<table class=\"";
            yield (string) $this->escaper->escape(((array_key_exists("table_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["table_class"] ?? null), "")) : ("")), "html", null, true);
            yield "\" role=\"presentation\">
                <thead>
                    <tr>";
            // line 152
            if ((($tmp = ($context["with_years"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 152), 'label');
                yield "</th>";
            }
            // line 153
            if ((($tmp = ($context["with_months"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 153), 'label');
                yield "</th>";
            }
            // line 154
            if ((($tmp = ($context["with_weeks"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 154), 'label');
                yield "</th>";
            }
            // line 155
            if ((($tmp = ($context["with_days"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 155), 'label');
                yield "</th>";
            }
            // line 156
            if ((($tmp = ($context["with_hours"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 156), 'label');
                yield "</th>";
            }
            // line 157
            if ((($tmp = ($context["with_minutes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 157), 'label');
                yield "</th>";
            }
            // line 158
            if ((($tmp = ($context["with_seconds"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<th>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 158), 'label');
                yield "</th>";
            }
            // line 159
            yield "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 163
            if ((($tmp = ($context["with_years"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<td>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 163), 'widget');
                yield "</td>";
            }
            // line 164
            if ((($tmp = ($context["with_months"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<td>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 164), 'widget');
                yield "</td>";
            }
            // line 165
            if ((($tmp = ($context["with_weeks"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<td>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 165), 'widget');
                yield "</td>";
            }
            // line 166
            if ((($tmp = ($context["with_days"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<td>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 166), 'widget');
                yield "</td>";
            }
            // line 167
            if ((($tmp = ($context["with_hours"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<td>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 167), 'widget');
                yield "</td>";
            }
            // line 168
            if ((($tmp = ($context["with_minutes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<td>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 168), 'widget');
                yield "</td>";
            }
            // line 169
            if ((($tmp = ($context["with_seconds"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<td>";
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 169), 'widget');
                yield "</td>";
            }
            // line 170
            yield "</tr>
                </tbody>
            </table>";
            // line 173
            if ((($tmp = ($context["with_invert"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, false, 173), 'widget');
            }
            // line 174
            yield "</div>";
        }
        return; yield;
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 180
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 181
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 184
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 185
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "number")) : ("number"));
        // line 186
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 189
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 190
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null),         $this->unwrap()->renderBlock("form_widget_simple", $context, $blocks));
        return; yield;
    }

    // line 193
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_url_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "url")) : ("url"));
        // line 195
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 198
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "search")) : ("search"));
        // line 200
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 203
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "text")) : ("text"));
        // line 205
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        if ((($tmp = ($context["symbol"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " ";
            yield (string) $this->escaper->escape(((array_key_exists("symbol", $context)) ? (Twig\Extension\CoreExtension::default(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
        }
        return; yield;
    }

    // line 208
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_password_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "password")) : ("password"));
        // line 210
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 213
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hidden_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 215
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 218
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_email_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 219
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "email")) : ("email"));
        // line 220
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 223
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_range_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 224
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "range")) : ("range"));
        // line 225
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 228
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 229
        yield "<button type=\"";
        yield (string) $this->escaper->escape(((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        yield "\" ";
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">";
        // line 230
        yield from         $this->unwrap()->yieldBlock("form_label_content", $context, $blocks);
        // line 231
        yield "</button>";
        return; yield;
    }

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 235
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "submit")) : ("submit"));
        // line 236
        yield from         $this->unwrap()->yieldBlock("button_widget", $context, $blocks);
        return; yield;
    }

    // line 239
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_reset_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 240
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "reset")) : ("reset"));
        // line 241
        yield from         $this->unwrap()->yieldBlock("button_widget", $context, $blocks);
        return; yield;
    }

    // line 244
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tel_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 245
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "tel")) : ("tel"));
        // line 246
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 249
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_color_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 250
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default(($context["type"] ?? null), "color")) : ("color"));
        // line 251
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        return; yield;
    }

    // line 254
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_week_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 255
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 256
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 258
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 259
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
            ";
            // line 260
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 260), 'widget', ($context["vars"] ?? null));
            yield "-";
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "week", [], "any", false, false, false, 260), 'widget', ($context["vars"] ?? null));
            yield "
        </div>";
        }
        return; yield;
    }

    // line 267
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 268
        if ( !(($context["label"] ?? null) === false)) {
            // line 269
            if ( !(($tmp = ($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 270
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 272
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 273
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 273)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 273), "")) : ("")) . " required"))]);
            }
            // line 275
            yield "<";
            yield (string) $this->escaper->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if ((($tmp = ($context["label_attr"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $_v4 = $context;
                $_v5 = ["attr" => ($context["label_attr"] ?? null)];
                if (!is_iterable($_v5)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 275, $this->getSourceContext());
                }
                $_v5 = CoreExtension::toArray($_v5);
                $context = $_v5 + $context + $this->env->getGlobals();
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                $context = $_v4;
            }
            yield ">";
            // line 276
            yield from             $this->unwrap()->yieldBlock("form_label_content", $context, $blocks);
            // line 277
            yield "</";
            yield (string) $this->escaper->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            yield ">";
        }
        return; yield;
    }

    // line 281
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 282
        if (((null === ($context["label"] ?? null)) || (($context["label"] ?? null) === ""))) {
            // line 283
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["label_format"] ?? null))) {
                // line 284
                $context["label"] = Twig\Extension\CoreExtension::replace(($context["label_format"] ?? null), ["%name%" =>                 // line 285
($context["name"] ?? null), "%id%" =>                 // line 286
($context["id"] ?? null)]);
            } elseif ((!CoreExtension::inFilter("button",             // line 288
($context["block_prefixes"] ?? null)) ||  !(($context["label"] ?? null) === false))) {
                // line 289
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 292
        if ((($context["translation_domain"] ?? null) === false)) {
            // line 293
            if ((($context["label_html"] ?? null) === false)) {
                // line 294
                yield (string) $this->escaper->escape(($context["label"] ?? null), "html", null, true);
            } else {
                // line 296
                yield (string) ($context["label"] ?? null);
            }
        } else {
            // line 299
            if ((($context["label_html"] ?? null) === false)) {
                // line 300
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 302
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            }
        }
        return; yield;
    }

    // line 307
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 311
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 312
        if ((($tmp = ($context["help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 313
            $context["help_attr"] = Twig\Extension\CoreExtension::merge(($context["help_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 313)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 313), "")) : ("")) . " help-text"))]);
            // line 314
            yield "<";
            yield (string) $this->escaper->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
            yield " id=\"";
            yield (string) $this->escaper->escape(($context["id"] ?? null), "html", null, true);
            yield "_help\"";
            $_v6 = $context;
            $_v7 = ["attr" => ($context["help_attr"] ?? null)];
            if (!is_iterable($_v7)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 314, $this->getSourceContext());
            }
            $_v7 = CoreExtension::toArray($_v7);
            $context = $_v7 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v6;
            yield ">";
            // line 315
            yield from             $this->unwrap()->yieldBlock("form_help_content", $context, $blocks);
            // line 316
            yield "</";
            yield (string) $this->escaper->escape(((array_key_exists("element", $context)) ? (Twig\Extension\CoreExtension::default(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
            yield ">";
        }
        return; yield;
    }

    // line 320
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 321
        if ((($context["translation_domain"] ?? null) === false)) {
            // line 322
            if ((($context["help_html"] ?? null) === false)) {
                // line 323
                yield (string) $this->escaper->escape(($context["help"] ?? null), "html", null, true);
            } else {
                // line 325
                yield (string) ($context["help"] ?? null);
            }
        } else {
            // line 328
            if ((($context["help_html"] ?? null) === false)) {
                // line 329
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 331
                yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            }
        }
        return; yield;
    }

    // line 338
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_repeated_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 343
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        return; yield;
    }

    // line 346
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 347
        $context["attr"] = [];
        // line 348
        $context["aria_describedby"] = [];
        // line 349
        if ((($tmp = ($context["help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 350
            $context["aria_describedby"] = Twig\Extension\CoreExtension::merge(($context["aria_describedby"] ?? null), [(($context["id"] ?? null) . "_help")]);
        }
        // line 352
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 353
            $context["aria_describedby"] = Twig\Extension\CoreExtension::merge(($context["aria_describedby"] ?? null), Twig\Extension\CoreExtension::map($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), ($context["errors"] ?? null), function ($_____, $__index__) use ($context, $macros) { $context["_"] = $_____; $context["index"] = $__index__; return ((($context["id"] ?? null) . "_error") . (($context["index"] ?? null) + 1)); }));
        }
        // line 355
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["aria_describedby"] ?? null)) > 0)) {
            // line 356
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-describedby" => Twig\Extension\CoreExtension::join(($context["aria_describedby"] ?? null), " ")]);
        }
        // line 358
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 359
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-invalid" => "true"]);
        }
        // line 361
        $context["widget_attr"] = ["attr" => ($context["attr"] ?? null)];
        // line 362
        yield from         $this->unwrap()->yieldBlock("form_row_render", $context, $blocks);
        return; yield;
    }

    // line 365
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row_render(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 366
        yield "<div";
        $_v8 = $context;
        $_v9 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($_v9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 366, $this->getSourceContext());
        }
        $_v9 = CoreExtension::toArray($_v9);
        $context = $_v9 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v8;
        yield ">";
        // line 367
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 368
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 369
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 370
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 371
        yield "</div>";
        return; yield;
    }

    // line 374
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 375
        yield "<div";
        $_v10 = $context;
        $_v11 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($_v11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 375, $this->getSourceContext());
        }
        $_v11 = CoreExtension::toArray($_v11);
        $context = $_v11 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v10;
        yield ">";
        // line 376
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 377
        yield "</div>";
        return; yield;
    }

    // line 380
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hidden_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 381
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        return; yield;
    }

    // line 386
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 387
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        // line 388
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 389
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        return; yield;
    }

    // line 392
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 393
        CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, false, 393);
        // line 394
        $context["method"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["method"] ?? null));
        // line 395
        if (CoreExtension::inFilter(($context["method"] ?? null), ["GET", "POST"])) {
            // line 396
            $context["form_method"] = ($context["method"] ?? null);
        } else {
            // line 398
            $context["form_method"] = "POST";
        }
        // line 400
        yield "<form";
        if ((($context["name"] ?? null) != "")) {
            yield " name=\"";
            yield (string) $this->escaper->escape(($context["name"] ?? null), "html", null, true);
            yield "\"";
        }
        yield " method=\"";
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["form_method"] ?? null)), "html", null, true);
        yield "\"";
        if ((($context["action"] ?? null) != "")) {
            yield " action=\"";
            yield (string) $this->escaper->escape(($context["action"] ?? null), "html", null, true);
            yield "\"";
        }
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        if ((($tmp = ($context["multipart"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " enctype=\"multipart/form-data\"";
        }
        yield ">";
        // line 401
        if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
            // line 402
            yield "<input type=\"hidden\" name=\"_method\" value=\"";
            yield (string) $this->escaper->escape(($context["method"] ?? null), "html", null, true);
            yield "\" />";
        }
        return; yield;
    }

    // line 406
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 407
        if (( !array_key_exists("render_rest", $context) || (($tmp = ($context["render_rest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 408
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        }
        // line 410
        yield "</form>";
        return; yield;
    }

    // line 413
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 414
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 415
            yield "<ul>";
            // line 416
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
                // line 417
                yield "<li id=\"";
                yield (string) $this->escaper->escape(((($context["id"] ?? null) . "_error") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 417)), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 417), "html", null, true);
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
            // line 419
            yield "</ul>";
        }
        return; yield;
    }

    // line 423
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_rest(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 425
            if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 425)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 426
                yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 430
        if (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "methodRendered", [], "any", false, false, false, 430)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null)))) {
            // line 431
            CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, false, 431);
            // line 432
            $context["method"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["method"] ?? null));
            // line 433
            if (CoreExtension::inFilter(($context["method"] ?? null), ["GET", "POST"])) {
                // line 434
                $context["form_method"] = ($context["method"] ?? null);
            } else {
                // line 436
                $context["form_method"] = "POST";
            }
            // line 439
            if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
                // line 440
                yield "<input type=\"hidden\" name=\"_method\" value=\"";
                yield (string) $this->escaper->escape(($context["method"] ?? null), "html", null, true);
                yield "\" />";
            }
        }
        return; yield;
    }

    // line 447
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_rows(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 448
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source), ($context["form"] ?? null), function ($__child__) use ($context, $macros) { $context["child"] = $__child__; return  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 448)) && $tmp instanceof Markup ? (string) $tmp : $tmp); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 449
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        return; yield;
    }

    // line 453
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 454
        yield "id=\"";
        yield (string) $this->escaper->escape(($context["id"] ?? null), "html", null, true);
        yield "\" name=\"";
        yield (string) $this->escaper->escape(($context["full_name"] ?? null), "html", null, true);
        yield "\"";
        // line 455
        if ((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " disabled=\"disabled\"";
        }
        // line 456
        if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " required=\"required\"";
        }
        // line 457
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        return; yield;
    }

    // line 460
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_container_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 461
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["id"] ?? null))) {
            yield "id=\"";
            yield (string) $this->escaper->escape(($context["id"] ?? null), "html", null, true);
            yield "\"";
        }
        // line 462
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        return; yield;
    }

    // line 465
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 466
        yield "id=\"";
        yield (string) $this->escaper->escape(($context["id"] ?? null), "html", null, true);
        yield "\" name=\"";
        yield (string) $this->escaper->escape(($context["full_name"] ?? null), "html", null, true);
        yield "\"";
        if ((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " disabled=\"disabled\"";
        }
        // line 467
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        return; yield;
    }

    // line 470
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 471
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 472
            yield " ";
            // line 473
            if (CoreExtension::inFilter($context["attrname"], ["placeholder", "title"])) {
                // line 474
                yield (string) $this->escaper->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield (string) ((((($context["translation_domain"] ?? null) === false) || (null === $context["attrvalue"]))) ? ($this->escaper->escape($context["attrvalue"], "html", null, true)) : ($this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"], ($context["attr_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true)));
                yield "\"";
            } elseif ((            // line 475
$context["attrvalue"] === true)) {
                // line 476
                yield (string) $this->escaper->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield (string) $this->escaper->escape($context["attrname"], "html", null, true);
                yield "\"";
            } elseif ( !(            // line 477
$context["attrvalue"] === false)) {
                // line 478
                yield (string) $this->escaper->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield (string) $this->escaper->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "form_div_layout.html.twig";
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
        return array (  1613 => 478,  1611 => 477,  1606 => 476,  1604 => 475,  1599 => 474,  1597 => 473,  1595 => 472,  1591 => 471,  1584 => 470,  1579 => 467,  1570 => 466,  1563 => 465,  1558 => 462,  1552 => 461,  1545 => 460,  1540 => 457,  1536 => 456,  1532 => 455,  1526 => 454,  1519 => 453,  1509 => 449,  1505 => 448,  1498 => 447,  1489 => 440,  1487 => 439,  1484 => 436,  1481 => 434,  1479 => 433,  1477 => 432,  1475 => 431,  1473 => 430,  1465 => 426,  1463 => 425,  1459 => 424,  1452 => 423,  1446 => 419,  1427 => 417,  1410 => 416,  1408 => 415,  1406 => 414,  1399 => 413,  1394 => 410,  1391 => 408,  1389 => 407,  1382 => 406,  1374 => 402,  1372 => 401,  1352 => 400,  1349 => 398,  1346 => 396,  1344 => 395,  1342 => 394,  1340 => 393,  1333 => 392,  1328 => 389,  1326 => 388,  1324 => 387,  1317 => 386,  1312 => 381,  1305 => 380,  1300 => 377,  1298 => 376,  1286 => 375,  1279 => 374,  1274 => 371,  1272 => 370,  1270 => 369,  1268 => 368,  1266 => 367,  1254 => 366,  1247 => 365,  1242 => 362,  1240 => 361,  1237 => 359,  1235 => 358,  1232 => 356,  1230 => 355,  1227 => 353,  1225 => 352,  1222 => 350,  1220 => 349,  1218 => 348,  1216 => 347,  1209 => 346,  1204 => 343,  1197 => 338,  1190 => 331,  1187 => 329,  1185 => 328,  1181 => 325,  1178 => 323,  1176 => 322,  1174 => 321,  1167 => 320,  1159 => 316,  1157 => 315,  1141 => 314,  1139 => 313,  1137 => 312,  1130 => 311,  1120 => 307,  1113 => 302,  1110 => 300,  1108 => 299,  1104 => 296,  1101 => 294,  1099 => 293,  1097 => 292,  1093 => 289,  1091 => 288,  1089 => 286,  1088 => 285,  1087 => 284,  1085 => 283,  1083 => 282,  1076 => 281,  1068 => 277,  1066 => 276,  1051 => 275,  1048 => 273,  1046 => 272,  1043 => 270,  1041 => 269,  1039 => 268,  1032 => 267,  1022 => 260,  1017 => 259,  1015 => 258,  1012 => 256,  1010 => 255,  1003 => 254,  998 => 251,  996 => 250,  989 => 249,  984 => 246,  982 => 245,  975 => 244,  970 => 241,  968 => 240,  961 => 239,  956 => 236,  954 => 235,  947 => 234,  942 => 231,  940 => 230,  934 => 229,  927 => 228,  922 => 225,  920 => 224,  913 => 223,  908 => 220,  906 => 219,  899 => 218,  894 => 215,  892 => 214,  885 => 213,  880 => 210,  878 => 209,  871 => 208,  862 => 205,  860 => 204,  853 => 203,  848 => 200,  846 => 199,  839 => 198,  834 => 195,  832 => 194,  825 => 193,  820 => 190,  813 => 189,  808 => 186,  806 => 185,  799 => 184,  794 => 181,  792 => 180,  785 => 178,  779 => 174,  775 => 173,  771 => 170,  765 => 169,  759 => 168,  753 => 167,  747 => 166,  741 => 165,  735 => 164,  729 => 163,  724 => 159,  718 => 158,  712 => 157,  706 => 156,  700 => 155,  694 => 154,  688 => 153,  682 => 152,  676 => 149,  674 => 148,  670 => 147,  667 => 145,  665 => 144,  658 => 143,  652 => 139,  642 => 138,  637 => 137,  635 => 136,  632 => 134,  630 => 133,  623 => 132,  617 => 128,  615 => 126,  614 => 125,  613 => 124,  612 => 123,  608 => 122,  605 => 120,  603 => 119,  596 => 118,  590 => 114,  588 => 113,  586 => 112,  584 => 111,  582 => 110,  578 => 109,  575 => 107,  573 => 106,  566 => 105,  551 => 102,  544 => 101,  529 => 98,  522 => 97,  484 => 92,  481 => 90,  479 => 89,  477 => 88,  472 => 87,  470 => 86,  453 => 85,  446 => 84,  441 => 81,  439 => 80,  437 => 79,  435 => 78,  427 => 74,  421 => 72,  419 => 71,  417 => 70,  415 => 69,  412 => 68,  410 => 67,  408 => 66,  388 => 64,  386 => 63,  379 => 62,  376 => 60,  374 => 59,  367 => 58,  362 => 55,  355 => 53,  353 => 52,  349 => 51,  345 => 50,  338 => 49,  332 => 45,  329 => 43,  327 => 42,  320 => 41,  311 => 38,  304 => 37,  299 => 34,  296 => 32,  294 => 31,  287 => 30,  282 => 27,  280 => 26,  278 => 25,  275 => 23,  273 => 22,  269 => 21,  262 => 20,  247 => 17,  244 => 15,  242 => 13,  240 => 12,  233 => 11,  227 => 7,  224 => 5,  222 => 4,  215 => 3,  210 => 470,  208 => 465,  206 => 460,  204 => 453,  202 => 447,  199 => 444,  197 => 423,  195 => 413,  193 => 406,  191 => 392,  189 => 386,  187 => 380,  185 => 374,  183 => 365,  181 => 346,  179 => 338,  176 => 335,  174 => 320,  171 => 319,  169 => 311,  166 => 310,  164 => 307,  162 => 281,  160 => 267,  158 => 254,  156 => 249,  154 => 244,  152 => 239,  150 => 234,  148 => 228,  146 => 223,  144 => 218,  142 => 213,  140 => 208,  138 => 203,  136 => 198,  134 => 193,  132 => 189,  130 => 184,  128 => 178,  126 => 143,  124 => 132,  122 => 118,  120 => 105,  118 => 101,  116 => 97,  114 => 84,  112 => 58,  110 => 49,  108 => 41,  106 => 37,  104 => 30,  102 => 20,  100 => 11,  98 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "form_div_layout.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
