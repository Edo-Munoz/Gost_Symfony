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

/* base.html.twig */
class __TwigTemplate_af25d98f963954ef4ab16260aa289258 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " - Games Original Sound Tracks</title>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        yield "\">
        ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 9
        yield "        <script>
            let currentTrackId = null;

            function showMessage(text, type) {
                const div = document.createElement(\x27div\x27);
                div.className = \x27alert alert-\x27 + type;
                div.textContent = text;
                document.getElementById(\x27ajax-messages\x27).appendChild(div);
                setTimeout(() => div.remove(), 3000);
            }

            function postAjax(url, formData) {
                return fetch(url, { method: \x27POST\x27, body: formData, headers: { \x27X-Requested-With\x27: \x27XMLHttpRequest\x27 } })
                    .then(res => { if (!res.ok) { throw new Error(); } return res.json(); })
                    .then(data => { showMessage(data.message, data.type); return data; })
                    .catch(() => { showMessage(\x27Une erreur est survenue.\x27, \x27danger\x27); return null; });
            }

            document.addEventListener(\x27submit\x27, function (event) {
                const form = event.target;
                if (!form.classList.contains(\x27ajax-form\x27)) { return; }
                event.preventDefault();
                postAjax(form.action, new FormData(form)).then(data => {
                    if (data && \x27liked\x27 in data) { setLiked(form.dataset.trackId, data.liked); }
                });
            });

            function setLiked(trackId, liked) {
                document.querySelectorAll(\x27[data-like-btn=\"\x27 + trackId + \x27\"]\x27).forEach(b => {
                    b.className = liked ? \x27btn btn-small\x27 : \x27btn btn-outline btn-small\x27;
                    b.textContent = liked ? \x27♥ Liké\x27 : \x27♡ Liker\x27;
                });
                document.querySelectorAll(\x27[data-track-id=\"\x27 + trackId + \x27\"][data-video]\x27).forEach(b => {
                    b.dataset.liked = liked ? \x271\x27 : \x270\x27;
                });
                if (String(currentTrackId) === String(trackId)) { setPlayerLiked(liked); }
            }

            function rowClick(event, row) {
                if (event.target.closest(\x27a, button, form, select, input\x27)) { return; }
                playTrack(row);
            }

            function playTrack(btn) {
                const d = btn.dataset;
                currentTrackId = d.trackId;
                document.getElementById(\x27player-video\x27).classList.remove(\x27hidden\x27);
                document.getElementById(\x27player-close\x27).classList.remove(\x27hidden\x27);
                document.getElementById(\x27global-player\x27).src = \x27https://www.youtube.com/embed/\x27 + encodeURIComponent(d.video) + \x27?autoplay=1\x27;
                document.getElementById(\x27player-title\x27).textContent = d.title;
                document.getElementById(\x27player-game\x27).textContent = d.game;

                const likeBtn = document.getElementById(\x27player-like\x27);
                if (likeBtn) {
                    likeBtn.dataset.url = d.likeUrl;
                    likeBtn.dataset.token = d.likeToken;
                    document.getElementById(\x27player-add-form\x27).action = d.addUrl;
                    document.getElementById(\x27player-add-form\x27).querySelector(\x27[name=_token]\x27).value = d.addToken;
                    setPlayerLiked(d.liked === \x271\x27);
                    setPlayerEnabled(true);
                    likeBtn.classList.remove(\x27hidden\x27);
                    document.getElementById(\x27player-playlist\x27).classList.remove(\x27hidden\x27);
                }
            }

            function closePlayer() {
                document.getElementById(\x27global-player\x27).removeAttribute(\x27src\x27);
                document.getElementById(\x27player-video\x27).classList.add(\x27hidden\x27);
                document.getElementById(\x27player-close\x27).classList.add(\x27hidden\x27);
                document.getElementById(\x27player-title\x27).textContent = \x27Aucun morceau en lecture\x27;
                document.getElementById(\x27player-game\x27).textContent = \x27\x27;
                currentTrackId = null;
                if (document.getElementById(\x27player-like\x27)) {
                    setPlayerLiked(false);
                    setPlayerEnabled(false);
                    document.getElementById(\x27player-like\x27).classList.add(\x27hidden\x27);
                    document.getElementById(\x27player-playlist\x27).classList.add(\x27hidden\x27);
                    document.getElementById(\x27player-popup\x27).classList.add(\x27hidden\x27);
                }
            }

            function setPlayerEnabled(enabled) {
                document.getElementById(\x27player-like\x27).disabled = !enabled;
                document.getElementById(\x27player-add-btn\x27).disabled = !enabled;
            }

            function setPlayerLiked(liked) {
                const btn = document.getElementById(\x27player-like\x27);
                btn.textContent = liked ? \x27♥\x27 : \x27♡\x27;
                btn.classList.toggle(\x27liked\x27, liked);
                btn.title = liked ? \x27Retirer des titres likés\x27 : \x27Ajouter aux titres likés\x27;
            }

            function togglePlayerLike() {
                const btn = document.getElementById(\x27player-like\x27);
                const body = new FormData();
                body.append(\x27_token\x27, btn.dataset.token);
                postAjax(btn.dataset.url, body).then(data => {
                    if (data) { setLiked(currentTrackId, data.liked); }
                });
            }

            function togglePlayerPopup() {
                document.getElementById(\x27player-popup\x27).classList.toggle(\x27hidden\x27);
            }

            function syncPlayer() {
                const source = document.getElementById(\x27playlist-source\x27);
                const select = document.getElementById(\x27player-playlist-select\x27);
                if (source && select) {
                    select.innerHTML = source.innerHTML;
                    const hasPlaylists = select.options.length > 0;
                    document.getElementById(\x27player-add-form\x27).classList.toggle(\x27hidden\x27, !hasPlaylists);
                    document.getElementById(\x27player-no-playlist\x27).classList.toggle(\x27hidden\x27, hasPlaylists);
                }
                if (currentTrackId && document.getElementById(\x27player-like\x27)) {
                    const playBtn = document.querySelector(\x27[data-track-id=\"\x27 + currentTrackId + \x27\"][data-video]\x27);
                    if (playBtn) { setPlayerLiked(playBtn.dataset.liked === \x271\x27); }
                }
            }

            function updateHeaderHeight() {
                const nav = document.getElementById(\x27main-nav\x27);
                if (nav) { document.documentElement.style.setProperty(\x27--header-h\x27, nav.offsetHeight + \x27px\x27); }
            }
            document.addEventListener(\x27DOMContentLoaded\x27, syncPlayer);
            document.addEventListener(\x27DOMContentLoaded\x27, updateHeaderHeight);
            document.addEventListener(\x27turbo:load\x27, syncPlayer);
            document.addEventListener(\x27turbo:load\x27, updateHeaderHeight);
            window.addEventListener(\x27resize\x27, updateHeaderHeight);
        </script>
        ";
        // line 140
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 143
        yield "    </head>
    <body>
        <nav id=\"main-nav\">
            <a href=\"";
        // line 146
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">GOST</a>
            <ul>
                <li><a href=\"";
        // line 148
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_track_index");
        yield "\">Rechercher</a></li>
                ";
        // line 149
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 150
            yield "                    <li><a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_playlist_index");
            yield "\">Playlists</a></li>
                    <li><a href=\"";
            // line 151
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liked_songs");
            yield "\">Titres likés</a></li>
                    <li><a href=\"";
            // line 152
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_track_suggest");
            yield "\">Proposer un morceau</a></li>
                ";
        }
        // line 154
        yield "                ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MODERATOR")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 155
            yield "                    <li><a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_track_index");
            yield "\">Admin morceaux</a></li>
                ";
        }
        // line 157
        yield "                ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield "                    <li><a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
            yield "\">Admin utilisateurs</a></li>
                ";
        }
        // line 160
        yield "            </ul>
            <ul>
                ";
        // line 162
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 163
            yield "                    <li><a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 163), "username", [], "any", false, false, false, 163), "html", null, true);
            yield "</a></li>
                    <li><a href=\"";
            // line 164
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a></li>
                ";
        } else {
            // line 166
            yield "                    <li><a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Se connecter</a></li>
                    <li><a href=\"";
            // line 167
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">S\x27inscrire</a></li>
                ";
        }
        // line 169
        yield "            </ul>
        </nav>

        <main id=\"main-content\">
            <div id=\"ajax-messages\"></div>

            ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 175));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 176
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 177
                yield "                    <div class=\"alert alert-";
                yield (string) $this->escaper->escape($context["label"], "html", null, true);
                yield "\" role=\"alert\">
                        <span>";
                // line 178
                yield (string) $this->escaper->escape($context["message"], "html", null, true);
                yield "</span>
                        <button type=\"button\" class=\"alert-close\" aria-label=\"Fermer\" onclick=\"this.parentElement.remove()\">✕</button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 182
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 183
        yield "
            ";
        // line 184
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 185
        yield "        </main>

        <div id=\"player-bar\" data-turbo-permanent>
            <div id=\"player-video\" class=\"hidden\">
                <iframe id=\"global-player\"
                        title=\"Lecteur YouTube\"
                        allow=\"encrypted-media; picture-in-picture\"
                        allowfullscreen>
                </iframe>
            </div>

            <div id=\"player-info\">
                <div id=\"player-title\">Aucun morceau en lecture</div>
                <div id=\"player-game\">&nbsp;</div>
            </div>

            <div id=\"player-actions\">
                ";
        // line 202
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 203
            yield "                    <button type=\"button\" id=\"player-like\" class=\"btn-icon hidden\" title=\"Ajouter aux titres likés\" onclick=\"togglePlayerLike()\" disabled>♡</button>

                    <div id=\"player-playlist\" class=\"hidden\">
                        <button type=\"button\" id=\"player-add-btn\" class=\"btn-icon\" title=\"Ajouter à une playlist\" onclick=\"togglePlayerPopup()\" disabled>＋</button>
                        <div id=\"player-popup\" class=\"hidden\">
                            <form method=\"post\" id=\"player-add-form\" class=\"ajax-form\" data-turbo=\"false\">
                                <input type=\"hidden\" name=\"_token\" value=\"\">
                                <select id=\"player-playlist-select\" name=\"playlist\" aria-label=\"Choisir une playlist\"></select>
                                <button class=\"btn btn-small\">Ajouter</button>
                            </form>
                            <small id=\"player-no-playlist\" class=\"hidden\">Créez d\x27abord une <a href=\"";
            // line 213
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_playlist_index");
            yield "\">playlist</a>.</small>
                        </div>
                    </div>
                ";
        }
        // line 217
        yield "                <button type=\"button\" id=\"player-close\" class=\"btn-icon hidden\" title=\"Fermer le morceau en cours\" onclick=\"closePlayer()\">✕</button>
            </div>
        </div>

        ";
        // line 221
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 222
            yield "            <select id=\"playlist-source\" hidden>
                ";
            // line 223
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 223), "playlists", [], "any", false, false, false, 223));
            foreach ($context['_seq'] as $context["_key"] => $context["playlist"]) {
                // line 224
                yield "                    <option value=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "id", [], "any", false, false, false, 224), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "name", [], "any", false, false, false, 224), "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['playlist'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 226
            yield "            </select>
        ";
        }
        // line 228
        yield "
    </body>
</html>
";
        return; yield;
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "GOST";
        return; yield;
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 140
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 141
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 142
        yield "        ";
        return; yield;
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield (string) $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        return; yield;
    }

    // line 184
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  451 => 184,  440 => 141,  435 => 142,  432 => 141,  425 => 140,  415 => 8,  404 => 6,  396 => 228,  392 => 226,  380 => 224,  376 => 223,  373 => 222,  371 => 221,  365 => 217,  358 => 213,  346 => 203,  344 => 202,  325 => 185,  323 => 184,  320 => 183,  313 => 182,  302 => 178,  297 => 177,  292 => 176,  288 => 175,  280 => 169,  275 => 167,  270 => 166,  265 => 164,  258 => 163,  256 => 162,  252 => 160,  246 => 158,  243 => 157,  237 => 155,  234 => 154,  229 => 152,  225 => 151,  220 => 150,  218 => 149,  214 => 148,  209 => 146,  204 => 143,  202 => 140,  69 => 9,  67 => 8,  63 => 7,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\templates\\base.html.twig");
    }
}
