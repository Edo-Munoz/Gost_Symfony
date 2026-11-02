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

/* playlist/index.html.twig */
class __TwigTemplate_9a43f05f621a0b049d18ef79368e1df2 extends Template
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
        yield "Mes playlists";
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
        yield "    <h2>Mes playlists</h2>

    <div>
        ";
        // line 9
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        yield "
    </div>

    <div class=\"playlists\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["playlists"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["playlist"]) {
            // line 14
            yield "            <article>
                <h3>";
            // line 15
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "name", [], "any", false, false, false, 15), "html", null, true);
            yield "</h3>
                <p>";
            // line 16
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "tracks", [], "any", false, false, false, 16)), "html", null, true);
            yield " morceau(x)</p>
                <a href=\"";
            // line 17
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_playlist_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            yield "\" class=\"btn btn-small\">Ouvrir</a>
            </article>
        ";
            $context['_iterated'] = true;
        }
        // line 19
        if (!$context['_iterated']) {
            // line 20
            yield "            <p>Vous n\x27avez pas encore de playlist.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['playlist'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 22
        yield "    </div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "playlist/index.html.twig";
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
        return array (  120 => 22,  112 => 20,  110 => 19,  103 => 17,  99 => 16,  95 => 15,  92 => 14,  87 => 13,  80 => 9,  75 => 6,  68 => 5,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "playlist/index.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\templates\\playlist\\index.html.twig");
    }
}
