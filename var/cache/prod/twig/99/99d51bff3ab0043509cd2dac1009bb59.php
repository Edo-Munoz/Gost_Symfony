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

/* admin/track/index.html.twig */
class __TwigTemplate_9d8c315f143fc6299d1eb9b15a00250f extends Template
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
        yield "Admin - Morceaux";
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
        yield "    <h2>Gérer les morceaux et les suggestions</h2>

    <p>
        <strong>En attente :</strong> <span id=\"stat-pending\">...</span> |
        <strong>Utilisateurs actifs :</strong> <span id=\"stat-users\">...</span>
    </p>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Jeu</th>
                <th>Compositeur</th>
                <th>Proposé par</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tracks"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 26
            yield "            <tr>
                <td>
                    ";
            // line 28
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "title", [], "any", false, false, false, 28), "html", null, true);
            yield "<br>
                    <small><a href=\"";
            // line 29
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "youtubeUrl", [], "any", false, false, false, 29), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">lien YouTube</a></small>
                </td>
                <td>";
            // line 31
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "gameName", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                <td>";
            // line 32
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["track"], "composer", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "composer", [], "any", false, false, false, 32), "html", null, true)) : ("-"));
            yield "</td>
                <td>";
            // line 33
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["track"], "addedBy", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["track"], "addedBy", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true)) : ("-"));
            yield "</td>
                <td id=\"status-";
            // line 34
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "\">
                    <span class=\"badge ";
            // line 35
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["track"], "approved", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("badge-pending"));
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "status", [], "any", false, false, false, 35), "html", null, true);
            yield "</span>
                </td>
                <td>
                    <div>
                        <a href=\"";
            // line 39
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_track_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"btn btn-outline btn-small\">Modifier</a>
                        ";
            // line 40
            if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["track"], "approved", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "                            <button type=\"button\" class=\"btn btn-small\" id=\"btn-";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 41), "html", null, true);
                yield "\"
                                    onclick=\"approveTrack(";
                // line 42
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 42), "html", null, true);
                yield ")\">Approuver</button>
                        ";
            }
            // line 44
            yield "                        <form method=\"post\" action=\"";
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_track_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" 
                              onsubmit=\"return confirm(\x27Supprimer définitivement ce morceau ?\x27);\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 46
            yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_track" . CoreExtension::getAttribute($this->env, $this->source, $context["track"], "id", [], "any", false, false, false, 46))), "html", null, true);
            yield "\">
                            <button class=\"btn btn-outline btn-small\">Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 52
        if (!$context['_iterated']) {
            // line 53
            yield "            <tr><td colspan=\"6\">Aucun morceau.</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['track'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 55
        yield "        </tbody>
    </table>

    <script>
        fetch(\x27";
        // line 59
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_api_stats");
        yield "\x27)
            .then(res => res.json())
            .then(data => {
                document.getElementById(\x27stat-pending\x27).innerText = data.pending_tracks;
                document.getElementById(\x27stat-users\x27).innerText = data.active_users;
            });

        function approveTrack(id) {
            fetch(\x27/admin/api/track/\x27 + id + \x27/approve\x27, {
                method: \x27POST\x27,
                headers: { \x27X-CSRF-TOKEN\x27: \x27";
        // line 69
        yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_api"), "html", null, true);
        yield "\x27 }
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById(\x27status-\x27 + id).innerHTML = \x27<span class=\"badge\">approved</span>\x27;
                        document.getElementById(\x27btn-\x27 + id).remove();
                        document.getElementById(\x27stat-pending\x27).innerText = data.pending_tracks;
                    } else {
                        alert(data.message || \x27Erreur.\x27);
                    }
                });
        }
    </script>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/track/index.html.twig";
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
        return array (  201 => 69,  188 => 59,  182 => 55,  174 => 53,  172 => 52,  161 => 46,  155 => 44,  150 => 42,  145 => 41,  143 => 40,  139 => 39,  130 => 35,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  109 => 29,  105 => 28,  101 => 26,  96 => 25,  75 => 6,  68 => 5,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/track/index.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\templates\\admin\\track\\index.html.twig");
    }
}
