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

/* tailwind_2_layout.html.twig */
class __TwigTemplate_4e3c5effbfbce750f3b8883bab991624 extends Template
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
                'form_row' => [$this, 'block_form_row'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'form_label' => [$this, 'block_form_label'],
                'form_help' => [$this, 'block_form_help'],
                'form_errors' => [$this, 'block_form_errors'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 8
        yield from $this->unwrap()->yieldBlock('widget_attributes', $context, $blocks);
        // line 13
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 18
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 23
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 33
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 45
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 61
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 66
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        return; yield;
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 4), ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "mb-6")) : ("mb-6")))) : (((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "mb-6")) : ("mb-6"))))]);
        // line 5
        yield from $this->yieldParentBlock("form_row", $context, $blocks);
        return; yield;
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => ((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 9), ((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "mt-1 w-full")) : ("mt-1 w-full")))) : (((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "mt-1 w-full")) : ("mt-1 w-full")))) . (((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ((array_key_exists("widget_disabled_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_disabled_class"] ?? null), "border-gray-300 text-gray-500")) : ("border-gray-300 text-gray-500")))) : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ((array_key_exists("widget_errors_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_errors_class"] ?? null), "border-red-700")) : ("border-red-700")))) : ("")))]);
        // line 10
        yield from $this->yieldParentBlock("widget_attributes", $context, $blocks);
        return; yield;
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 14), ((array_key_exists("label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_class"] ?? null), "block text-gray-800")) : ("block text-gray-800")))) : (((array_key_exists("label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_class"] ?? null), "block text-gray-800")) : ("block text-gray-800"))))]);
        // line 15
        yield from $this->yieldParentBlock("form_label", $context, $blocks);
        return; yield;
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        $context["help_attr"] = Twig\Extension\CoreExtension::merge(($context["help_attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 19), ((array_key_exists("help_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["help_class"] ?? null), "mt-1 text-gray-600")) : ("mt-1 text-gray-600")))) : (((array_key_exists("help_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["help_class"] ?? null), "mt-1 text-gray-600")) : ("mt-1 text-gray-600"))))]);
        // line 20
        yield from $this->yieldParentBlock("form_help", $context, $blocks);
        return; yield;
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 25
            yield "<ul>";
            // line 26
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
                // line 27
                yield "<li class=\"";
                yield (string) $this->escaper->escape(((array_key_exists("error_item_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["error_item_class"] ?? null), "text-red-700")) : ("text-red-700")), "html", null, true);
                yield "\" id=\"";
                yield (string) $this->escaper->escape(((($context["id"] ?? null) . "_error") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 27)), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 27), "html", null, true);
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
            // line 29
            yield "</ul>";
        }
        return; yield;
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 34), "mt-2")) : ("mt-2"))]);
        // line 35
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 37
            yield "            <div class=\"flex items-center\">";
            // line 38
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 39
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
            // line 40
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 42
        yield "</div>";
        return; yield;
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 46), ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "mb-6")) : ("mb-6")))) : (((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "mb-6")) : ("mb-6"))))]);
        // line 47
        $context["widget_attr"] = [];
        // line 48
        if ((($tmp = ($context["help"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 51
        yield "<div";
        $_v0 = $context;
        $_v1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($_v1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 51, $this->getSourceContext());
        }
        $_v1 = CoreExtension::toArray($_v1);
        $context = $_v1 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v0;
        yield ">";
        // line 52
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 53
        yield "<div class=\"inline-flex items-center\">";
        // line 54
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 55
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 56
        yield "</div>";
        // line 57
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 58
        yield "</div>";
        return; yield;
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "mr-2")) : ("mr-2"));
        // line 63
        yield from $this->yieldParentBlock("checkbox_widget", $context, $blocks);
        return; yield;
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "mr-2")) : ("mr-2"));
        // line 68
        yield from $this->yieldParentBlock("radio_widget", $context, $blocks);
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tailwind_2_layout.html.twig";
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
        return array (  306 => 68,  304 => 67,  297 => 66,  292 => 63,  290 => 62,  283 => 61,  278 => 58,  276 => 57,  274 => 56,  272 => 55,  270 => 54,  268 => 53,  266 => 52,  254 => 51,  251 => 49,  249 => 48,  247 => 47,  245 => 46,  238 => 45,  233 => 42,  225 => 40,  223 => 39,  221 => 38,  219 => 37,  215 => 36,  211 => 35,  209 => 34,  202 => 33,  196 => 29,  175 => 27,  158 => 26,  156 => 25,  154 => 24,  147 => 23,  142 => 20,  140 => 19,  133 => 18,  128 => 15,  126 => 14,  119 => 13,  114 => 10,  112 => 9,  105 => 8,  100 => 5,  98 => 4,  91 => 3,  86 => 66,  84 => 61,  82 => 45,  80 => 33,  78 => 23,  76 => 18,  74 => 13,  72 => 8,  70 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tailwind_2_layout.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\tailwind_2_layout.html.twig");
    }
}
