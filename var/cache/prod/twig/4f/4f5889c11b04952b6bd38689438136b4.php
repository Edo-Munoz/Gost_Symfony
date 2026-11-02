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

/* track/_item.html.twig */
class __TwigTemplate_6f7e6dc0a3f0256e1347c08945c10764 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"track";
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "youtubeId", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" playable") : (""));
        yield "\"";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "youtubeId", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "track/_play_attrs.html.twig");
            yield " onclick=\"rowClick(event, this)\" onkeydown=\"if (event.key === \x27Enter\x27) { rowClick(event, this); }\" tabindex=\"0\"";
        }
        yield ">
    <div>
        <strong>";
        // line 3
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
        yield "</strong>
        <span class=\"muted\">- ";
        // line 4
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "gameName", [], "any", false, false, false, 4), "html", null, true);
        yield "</span><br>
        <small class=\"muted\">";
        // line 5
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "composer", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "composer", [], "any", false, false, false, 5), "html", null, true)) : ("Compositeur inconnu"));
        yield "</small>
    </div>

    <div class=\"actions\">
        ";
        // line 9
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "            <form method=\"post\" action=\"";
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_track_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "id", [], "any", false, false, false, 10)]), "html", null, true);
            yield "\" class=\"ajax-form\" data-turbo=\"false\" data-track-id=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
            yield "\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 11
            yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("like" . CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "id", [], "any", false, false, false, 11))), "html", null, true);
            yield "\">
                ";
            // line 12
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "likedTracks", [], "any", false, false, false, 12), "contains", [($context["track"] ?? null)], "method", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 13
                yield "                    <button class=\"btn btn-small\" data-like-btn=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "id", [], "any", false, false, false, 13), "html", null, true);
                yield "\" title=\"Retirer des titres likés\">♥ Liké</button>
                ";
            } else {
                // line 15
                yield "                    <button class=\"btn btn-outline btn-small\" data-like-btn=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
                yield "\" title=\"Ajouter aux titres likés\">♡ Liker</button>
                ";
            }
            // line 17
            yield "            </form>

            ";
            // line 19
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19), "playlists", [], "any", false, false, false, 19)) > 0)) {
                // line 20
                yield "                <form method=\"post\" action=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_playlist_add_track", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "id", [], "any", false, false, false, 20)]), "html", null, true);
                yield "\" class=\"ajax-form\" data-turbo=\"false\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 21
                yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("add_track" . CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "id", [], "any", false, false, false, 21))), "html", null, true);
                yield "\">
                    <select name=\"playlist\" aria-label=\"Choisir une playlist\">
                        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "playlists", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["playlist"]) {
                    // line 24
                    yield "                            <option value=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "id", [], "any", false, false, false, 24), "html", null, true);
                    yield "\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "name", [], "any", false, false, false, 24), "html", null, true);
                    yield "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['playlist'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 26
                yield "                    </select>
                    <button class=\"btn btn-outline btn-small\">+ Playlist</button>
                </form>
            ";
            }
            // line 30
            yield "        ";
        }
        // line 31
        yield "    </div>
</div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "track/_item.html.twig";
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
        return array (  142 => 31,  139 => 30,  133 => 26,  121 => 24,  117 => 23,  112 => 21,  107 => 20,  105 => 19,  101 => 17,  95 => 15,  89 => 13,  87 => 12,  83 => 11,  76 => 10,  74 => 9,  67 => 5,  63 => 4,  59 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "track/_item.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\templates\\track\\_item.html.twig");
    }
}
