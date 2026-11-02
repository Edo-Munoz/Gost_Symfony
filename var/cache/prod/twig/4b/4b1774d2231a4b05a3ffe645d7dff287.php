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

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_1b9a5e3ebadb9ed5dd6f3a1da0156fd5 extends Template
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
        $_trait_0 = $this->load("bootstrap_3_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row_render' => [$this, 'block_form_row_render'],
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
        // line 3
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 7
        yield "
";
        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 18
        yield "
";
        // line 19
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 22
        yield "
";
        // line 24
        yield "
";
        // line 25
        yield from $this->unwrap()->yieldBlock('form_row_render', $context, $blocks);
        // line 36
        yield from $this->unwrap()->yieldBlock('submit_row', $context, $blocks);
        // line 44
        yield "
";
        // line 45
        yield from $this->unwrap()->yieldBlock('reset_row', $context, $blocks);
        // line 53
        yield "
";
        // line 54
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        // line 57
        yield "
";
        // line 58
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        return; yield;
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 4), "")) : ("")) . " form-horizontal"))]);
        // line 5
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        return; yield;
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        if ((($context["label"] ?? null) === false)) {
            // line 12
            yield "<div class=\"";
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 14), "")) : ("")) . " ") .             $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
            // line 15
            yield from $this->yieldParentBlock("form_label", $context, $blocks);
        }
        return; yield;
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "col-sm-2";
        return; yield;
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row_render(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "<div";
        $_v0 = $context;
        $_v1 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 26), "")) : ("")) . " form-group") . (((( !(($tmp = ($context["compound"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? (" has-error") : (""))))])];
        if (!is_iterable($_v1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 26, $this->getSourceContext());
        }
        $_v1 = CoreExtension::toArray($_v1);
        $context = $_v1 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v0;
        yield ">";
        // line 27
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 28
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 29
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 30
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 31
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 32
        yield "</div>
";
        // line 33
        yield "</div>";
        return; yield;
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submit_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "<div";
        $_v2 = $context;
        $_v3 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 37), "")) : ("")) . " form-group"))])];
        if (!is_iterable($_v3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 37, $this->getSourceContext());
        }
        $_v3 = CoreExtension::toArray($_v3);
        $context = $_v3 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v2;
        yield ">";
        // line 38
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 39
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 40
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 41
        yield "</div>";
        // line 42
        yield "</div>";
        return; yield;
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_reset_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "<div";
        $_v4 = $context;
        $_v5 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 46), "")) : ("")) . " form-group"))])];
        if (!is_iterable($_v5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 46, $this->getSourceContext());
        }
        $_v5 = CoreExtension::toArray($_v5);
        $context = $_v5 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v4;
        yield ">";
        // line 47
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 48
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 49
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 50
        yield "</div>";
        // line 51
        yield "</div>";
        return; yield;
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_group_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "col-sm-10";
        return; yield;
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "<div";
        $_v6 = $context;
        $_v7 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 59), "")) : ("")) . " form-group") . (( !(($tmp = ($context["valid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-error") : (""))))])];
        if (!is_iterable($_v7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 59, $this->getSourceContext());
        }
        $_v7 = CoreExtension::toArray($_v7);
        $context = $_v7 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v6;
        yield ">";
        // line 60
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 61
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 62
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 63
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 64
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 65
        yield "</div>";
        // line 66
        yield "</div>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bootstrap_3_horizontal_layout.html.twig";
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
        return array (  318 => 66,  316 => 65,  314 => 64,  312 => 63,  310 => 62,  306 => 61,  302 => 60,  290 => 59,  283 => 58,  278 => 55,  271 => 54,  266 => 51,  264 => 50,  262 => 49,  258 => 48,  254 => 47,  242 => 46,  235 => 45,  230 => 42,  228 => 41,  226 => 40,  222 => 39,  218 => 38,  206 => 37,  199 => 36,  194 => 33,  191 => 32,  189 => 31,  187 => 30,  185 => 29,  181 => 28,  179 => 27,  167 => 26,  160 => 25,  155 => 20,  148 => 19,  142 => 15,  140 => 14,  135 => 12,  133 => 11,  126 => 10,  121 => 5,  119 => 4,  112 => 3,  107 => 58,  104 => 57,  102 => 54,  99 => 53,  97 => 45,  94 => 44,  92 => 36,  90 => 25,  87 => 24,  84 => 22,  82 => 19,  79 => 18,  77 => 10,  74 => 9,  71 => 7,  69 => 3,  66 => 2,  39 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "bootstrap_3_horizontal_layout.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
