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

/* playlist/show.html.twig */
class __TwigTemplate_8b8b5ec9b4a734ec363e339771982cc7 extends Template
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
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
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
        yield "    <header>
        <h2>";
        // line 7
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</h2>
        <form method=\"post\" action=\"";
        // line 8
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_playlist_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "id", [], "any", false, false, false, 8)]), "html", null, true);
        yield "\"
              onsubmit=\"return confirm(\x27Supprimer cette playlist ?\x27);\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 10
        yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_playlist" . CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "id", [], "any", false, false, false, 10))), "html", null, true);
        yield "\">
            <button class=\"btn btn-outline btn-small\">Supprimer la playlist</button>
        </form>
    </header>
    <p class=\"muted\">";
        // line 14
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "tracks", [], "any", false, false, false, 14)), "html", null, true);
        yield " morceau(x)</p>

    <div class=\"track-list\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "tracks", [], "any", false, false, false, 17));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 18
            yield "            <div class=\"track";
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["track"], "youtubeId", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" playable") : (""));
            yield "\"";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["track"], "youtubeId", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "track/_play_attrs.html.twig");
                yield " onclick=\"rowClick(event, this)\" onkeydown=\"if (event.key === \x27Enter\x27) { rowClick(event, this); }\" tabindex=\"0\"";
            }
            yield ">
                <div>
                    <strong>";
            // line 20
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "title", [], "any", false, false, false, 20), "html", null, true);
            yield "</strong>
                    <span class=\"muted\">- ";
            // line 21
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "gameName", [], "any", false, false, false, 21), "html", null, true);
            yield "</span><br>
                    <small class=\"muted\">";
            // line 22
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["track"], "composer", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "composer", [], "any", false, false, false, 22), "html", null, true)) : ("Compositeur inconnu"));
            yield "</small>
                </div>
                <div class=\"actions\">
                    <form method=\"post\" action=\"";
            // line 25
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_playlist_remove_track", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "id", [], "any", false, false, false, 25), "trackId" => CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 26
            yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(((("remove_track" . CoreExtension::getAttribute($this->env, $this->source, ($context["playlist"] ?? null), "id", [], "any", false, false, false, 26)) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 26))), "html", null, true);
            yield "\">
                        <button class=\"btn btn-outline btn-small\">Retirer</button>
                    </form>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 31
        if (!$context['_iterated']) {
            // line 32
            yield "            <p>Cette playlist est vide. Ajoutez des morceaux depuis la page <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_track_index");
            yield "\">Rechercher</a>.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['track'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 34
        yield "    </div>

    <p><a href=\"";
        // line 36
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_playlist_index");
        yield "\">&larr; Retour à mes playlists</a></p>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "playlist/show.html.twig";
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
        return array (  182 => 36,  178 => 34,  168 => 32,  166 => 31,  148 => 26,  144 => 25,  138 => 22,  134 => 21,  130 => 20,  118 => 18,  100 => 17,  94 => 14,  87 => 10,  82 => 8,  78 => 7,  75 => 6,  68 => 5,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "playlist/show.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\templates\\playlist\\show.html.twig");
    }
}
