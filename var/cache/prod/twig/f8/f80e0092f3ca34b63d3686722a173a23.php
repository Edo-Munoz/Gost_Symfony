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

/* account/index.html.twig */
class __TwigTemplate_326c02933d5ad4b11c80b68b20f60489 extends Template
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
        yield "Mon compte";
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
        yield "    <h2>Mon compte</h2>
    <article>
        <p><strong>Nom d\x27utilisateur :</strong> ";
        // line 8
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 8), "html", null, true);
        yield "</p>
        <p><strong>Email :</strong> ";
        // line 9
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 9), "html", null, true);
        yield "</p>
        <p><strong>Rôles :</strong> ";
        // line 10
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 10), ", "), "html", null, true);
        yield "</p>
        <p><strong>Membre depuis le :</strong> ";
        // line 11
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "createdAt", [], "any", false, false, false, 11), "d/m/Y"), "html", null, true);
        yield "</p>
        <p>
            <strong>Playlists :</strong> ";
        // line 13
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "playlists", [], "any", false, false, false, 13)), "html", null, true);
        yield " &middot;
            <strong>Titres likés :</strong> ";
        // line 14
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "likedTracks", [], "any", false, false, false, 14)), "html", null, true);
        yield " &middot;
            <strong>Morceaux proposés :</strong> ";
        // line 15
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "addedTracks", [], "any", false, false, false, 15)), "html", null, true);
        yield "
        </p>
    </article>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "account/index.html.twig";
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
        return array (  104 => 15,  100 => 14,  96 => 13,  91 => 11,  87 => 10,  83 => 9,  79 => 8,  75 => 6,  68 => 5,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "account/index.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\templates\\account\\index.html.twig");
    }
}
