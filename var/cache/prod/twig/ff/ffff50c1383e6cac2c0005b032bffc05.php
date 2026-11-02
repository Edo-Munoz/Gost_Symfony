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

/* admin/track/edit.html.twig */
class __TwigTemplate_14e653582a5519c339746b26fd98f4ff extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier un morceau";
        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <section>
        <h2>Modifier : ";
        // line 7
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        yield "</h2>
        <p class=\"muted\">
            Statut : <span class=\"badge ";
        // line 9
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "approved", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("badge-pending"));
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "status", [], "any", false, false, false, 9), "html", null, true);
        yield "</span>
            ";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "addedBy", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "&middot; proposé par ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "addedBy", [], "any", false, false, false, 10), "username", [], "any", false, false, false, 10), "html", null, true);
        }
        // line 11
        yield "        </p>

        ";
        // line 13
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        yield "

        <a href=\"";
        // line 15
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_track_index");
        yield "\">&larr; Retour à la liste</a>
    </section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/track/edit.html.twig";
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
        return array (  103 => 15,  98 => 13,  94 => 11,  89 => 10,  83 => 9,  78 => 7,  75 => 6,  68 => 5,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/track/edit.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\templates\\admin\\track\\edit.html.twig");
    }
}
