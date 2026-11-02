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

/* @email/zurb_2/notification/body.txt.twig */
class __TwigTemplate_9a485f886d1797e506631f2665b3dd17 extends Template
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

        $this->blocks = [
            'lead' => [$this, 'block_lead'],
            'content' => [$this, 'block_content'],
            'action' => [$this, 'block_action'],
            'exception' => [$this, 'block_exception'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('lead', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 8
        yield "
";
        // line 9
        yield from $this->unwrap()->yieldBlock('action', $context, $blocks);
        // line 14
        yield "
";
        // line 15
        yield from $this->unwrap()->yieldBlock('exception', $context, $blocks);
        return; yield;
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_lead(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["email"] ?? null), "subject", [], "any", false, false, false, 2);
        yield "
";
        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield (string) ($context["content"] ?? null);
        yield "
";
        return; yield;
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_action(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        if ((($tmp = ($context["action_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield (string) ($context["action_text"] ?? null);
            yield ": ";
            yield (string) ($context["action_url"] ?? null);
            yield "
";
        }
        return; yield;
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_exception(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        if ((($tmp = ($context["exception"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "Exception stack trace attached.
";
            // line 18
            yield (string) ($context["exception"] ?? null);
            yield "
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@email/zurb_2/notification/body.txt.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  127 => 18,  124 => 17,  122 => 16,  115 => 15,  105 => 11,  103 => 10,  96 => 9,  89 => 6,  82 => 5,  75 => 2,  68 => 1,  63 => 15,  60 => 14,  58 => 9,  55 => 8,  53 => 5,  50 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@email/zurb_2/notification/body.txt.twig", "B:\\local_files\\Desktop\\gost_symfony\\vendor\\symfony\\twig-bridge\\Resources\\views\\Email\\zurb_2\\notification\\body.txt.twig");
    }
}
