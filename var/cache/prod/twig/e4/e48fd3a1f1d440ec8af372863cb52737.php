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

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_b132badca2c6d43a56d47bdfc87cf3b6 extends Template
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
        $_trait_0 = $this->load("bootstrap_4_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'fieldset_form_row' => [$this, 'block_fieldset_form_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
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
        // line 17
        yield "
";
        // line 18
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 21
        yield "
";
        // line 23
        yield "
";
        // line 24
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 45
        yield "
";
        // line 46
        yield from $this->unwrap()->yieldBlock('fieldset_form_row', $context, $blocks);
        // line 62
        yield "
";
        // line 63
        yield from $this->unwrap()->yieldBlock('submit_row', $context, $blocks);
        // line 71
        yield "
";
        // line 72
        yield from $this->unwrap()->yieldBlock('reset_row', $context, $blocks);
        // line 80
        yield "
";
        // line 81
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        // line 84
        yield "
";
        // line 85
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
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
            if (( !array_key_exists("expanded", $context) ||  !(($tmp = ($context["expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 10
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 10), "")) : ("")) . " col-form-label"))]);
            }
            // line 12
            yield "<div class=\"";
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\">";
            // line 13
            yield from $this->yieldParentBlock("form_label", $context, $blocks);
            // line 14
            yield "</div>";
        }
        return; yield;
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "col-sm-2";
        return; yield;
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        if ((array_key_exists("expanded", $context) && (($tmp = ($context["expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 26
            yield from             $this->unwrap()->yieldBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 28
            $context["attr"] = [];
            // line 29
            if ((($tmp = ($context["help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-describedby" => (($context["id"] ?? null) . "_help")]);
            }
            // line 32
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
                // line 33
                $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["aria-invalid" => "true"]);
            }
            // line 35
            $context["widget_attr"] = ["attr" => ($context["attr"] ?? null)];
            // line 36
            yield "<div";
            $_v0 = $context;
            $_v1 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 36), "")) : ("")) . " form-group row") . (((( !(($tmp = ($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? (" is-invalid") : (""))))])];
            if (!is_iterable($_v1)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 36, $this->getSourceContext());
            }
            $_v1 = CoreExtension::toArray($_v1);
            $context = $_v1 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v0;
            yield ">";
            // line 37
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            // line 38
            yield "<div class=\"";
            yield from             $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
            yield "\">";
            // line 39
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
            // line 40
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
            // line 41
            yield "</div>
    ";
            // line 42
            yield "</div>";
        }
        return; yield;
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fieldset_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        $context["widget_attr"] = [];
        // line 48
        if ((($tmp = ($context["help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 51
        yield "<fieldset";
        $_v2 = $context;
        $_v3 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 51), "")) : ("")) . " form-group"))])];
        if (!is_iterable($_v3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 51, $this->getSourceContext());
        }
        $_v3 = CoreExtension::toArray($_v3);
        $context = $_v3 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v2;
        yield ">
        <div class=\"row";
        // line 52
        if ((( !(($tmp = ($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            yield " is-invalid";
        }
        yield "\">";
        // line 53
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 54
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 55
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 56
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 57
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 58
        yield "</div>
        </div>
";
        // line 60
        yield "</fieldset>";
        return; yield;
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "<div";
        $_v4 = $context;
        $_v5 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 64), "")) : ("")) . " form-group row"))])];
        if (!is_iterable($_v5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 64, $this->getSourceContext());
        }
        $_v5 = CoreExtension::toArray($_v5);
        $context = $_v5 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v4;
        yield ">";
        // line 65
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 66
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 67
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 68
        yield "</div>";
        // line 69
        yield "</div>";
        return; yield;
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_reset_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "<div";
        $_v6 = $context;
        $_v7 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 73), "")) : ("")) . " form-group row"))])];
        if (!is_iterable($_v7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 73, $this->getSourceContext());
        }
        $_v7 = CoreExtension::toArray($_v7);
        $context = $_v7 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v6;
        yield ">";
        // line 74
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 75
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 76
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 77
        yield "</div>";
        // line 78
        yield "</div>";
        return; yield;
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_group_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "col-sm-10";
        return; yield;
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 86
        yield "<div";
        $_v8 = $context;
        $_v9 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 86), "")) : ("")) . " form-group row"))])];
        if (!is_iterable($_v9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 86, $this->getSourceContext());
        }
        $_v9 = CoreExtension::toArray($_v9);
        $context = $_v9 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v8;
        yield ">";
        // line 87
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 88
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 89
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 90
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 91
        yield "</div>";
        // line 92
        yield "</div>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bootstrap_4_horizontal_layout.html.twig";
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
        return array (  385 => 92,  383 => 91,  381 => 90,  379 => 89,  375 => 88,  371 => 87,  359 => 86,  352 => 85,  347 => 82,  340 => 81,  335 => 78,  333 => 77,  331 => 76,  327 => 75,  323 => 74,  311 => 73,  304 => 72,  299 => 69,  297 => 68,  295 => 67,  291 => 66,  287 => 65,  275 => 64,  268 => 63,  263 => 60,  259 => 58,  257 => 57,  255 => 56,  253 => 55,  249 => 54,  247 => 53,  242 => 52,  229 => 51,  226 => 49,  224 => 48,  222 => 47,  215 => 46,  209 => 42,  206 => 41,  204 => 40,  202 => 39,  198 => 38,  196 => 37,  184 => 36,  182 => 35,  179 => 33,  177 => 32,  174 => 30,  172 => 29,  170 => 28,  167 => 26,  165 => 25,  158 => 24,  153 => 19,  146 => 18,  140 => 14,  138 => 13,  134 => 12,  131 => 10,  129 => 9,  124 => 7,  122 => 6,  115 => 5,  110 => 85,  107 => 84,  105 => 81,  102 => 80,  100 => 72,  97 => 71,  95 => 63,  92 => 62,  90 => 46,  87 => 45,  85 => 24,  82 => 23,  79 => 21,  77 => 18,  74 => 17,  72 => 5,  69 => 4,  66 => 2,  39 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "bootstrap_4_horizontal_layout.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
