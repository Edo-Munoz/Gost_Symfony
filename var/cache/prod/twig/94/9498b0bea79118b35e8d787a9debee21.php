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

/* form_table_layout.html.twig */
class __TwigTemplate_f27c620ded73fd09729c6da900adbeed extends Template
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
        $_trait_0 = $this->load("form_div_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_row_render' => [$this, 'block_form_row_render'],
                'button_row' => [$this, 'block_button_row'],
                'hidden_row' => [$this, 'block_hidden_row'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield from $this->unwrap()->yieldBlock('form_row_render', $context, $blocks);
        // line 16
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 25
        yield from $this->unwrap()->yieldBlock('hidden_row', $context, $blocks);
        // line 34
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        return; yield;
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row_render(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<tr";
        $_v0 = $context;
        $_v1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($_v1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 4, $this->getSourceContext());
        }
        $_v1 = CoreExtension::toArray($_v1);
        $context = $_v1 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v0;
        yield ">
        <td>";
        // line 6
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 7
        yield "</td>
        <td>";
        // line 9
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 10
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 11
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 12
        yield "</td>
    </tr>";
        return; yield;
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "<tr";
        $_v2 = $context;
        $_v3 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($_v3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 17, $this->getSourceContext());
        }
        $_v3 = CoreExtension::toArray($_v3);
        $context = $_v3 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v2;
        yield ">
        <td></td>
        <td>";
        // line 20
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 21
        yield "</td>
    </tr>";
        return; yield;
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hidden_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        $context["style"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "style", [], "any", true, true, false, 26)) ? ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "style", [], "any", false, false, false, 26) . (((Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "style", [], "any", false, false, false, 26))) != ";")) ? ("; ") : ("")))) : (""));
        // line 27
        yield "<tr";
        $_v4 = $context;
        $_v5 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["style" => Twig\Extension\CoreExtension::trim((($context["style"] ?? null) . " display: none"))])];
        if (!is_iterable($_v5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 27, $this->getSourceContext());
        }
        $_v5 = CoreExtension::toArray($_v5);
        $context = $_v5 + $context + $this->env->getGlobals();
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $_v4;
        yield ">
        <td colspan=\"2\">";
        // line 29
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 30
        yield "</td>
    </tr>";
        return; yield;
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_compound(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "<table ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 36
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0))) {
            // line 37
            yield "<tr>
            <td colspan=\"2\">";
            // line 39
            yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 40
            yield "</td>
        </tr>";
        }
        // line 43
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 44
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 45
        yield "</table>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "form_table_layout.html.twig";
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
        return array (  195 => 45,  193 => 44,  191 => 43,  187 => 40,  185 => 39,  182 => 37,  180 => 36,  176 => 35,  169 => 34,  163 => 30,  161 => 29,  148 => 27,  146 => 26,  139 => 25,  133 => 21,  131 => 20,  117 => 17,  110 => 16,  104 => 12,  102 => 11,  100 => 10,  98 => 9,  95 => 7,  93 => 6,  80 => 4,  73 => 3,  68 => 34,  66 => 25,  64 => 16,  62 => 3,  39 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "form_table_layout.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
