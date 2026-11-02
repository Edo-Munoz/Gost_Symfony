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

/* admin/user/index.html.twig */
class __TwigTemplate_fe2a468044fb09b0cc6fd66c316ac0ee extends Template
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
        yield "Admin - Utilisateurs";
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
        yield "    <h2>Gérer les utilisateurs</h2>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôles</th>
                <th>Banni</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 20
            yield "            ";
            $context["currentRole"] = ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["u"], "roles", [], "any", false, false, false, 20))) ? ("ROLE_ADMIN") : (((CoreExtension::inFilter("ROLE_MODERATOR", CoreExtension::getAttribute($this->env, $this->source, $context["u"], "roles", [], "any", false, false, false, 20))) ? ("ROLE_MODERATOR") : ("ROLE_USER"))));
            // line 21
            yield "            <tr>
                <td>";
            // line 22
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                <td>";
            // line 24
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["u"], "roles", [], "any", false, false, false, 24), ", "), "html", null, true);
            yield "</td>
                <td>";
            // line 25
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["u"], "banned", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
            yield "</td>
                <td>
                    <div>
                        ";
            // line 28
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 28) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28))) {
                // line 29
                yield "                            <form method=\"post\" action=\"";
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_toggle_ban", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 30
                yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 30))), "html", null, true);
                yield "\">
                                <button class=\"btn btn-small ";
                // line 31
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["u"], "banned", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("btn-outline"));
                yield "\">
                                    ";
                // line 32
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["u"], "banned", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Débannir") : ("Bannir"));
                yield "
                                </button>
                            </form>
                            <form method=\"post\" action=\"";
                // line 35
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_role", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 36
                yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("role" . CoreExtension::getAttribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 36))), "html", null, true);
                yield "\">
                                <select name=\"role\" aria-label=\"Rôle\">
                                    <option value=\"ROLE_USER\" ";
                // line 38
                yield (string) (((($context["currentRole"] ?? null) == "ROLE_USER")) ? ("selected") : (""));
                yield ">Utilisateur</option>
                                    <option value=\"ROLE_MODERATOR\" ";
                // line 39
                yield (string) (((($context["currentRole"] ?? null) == "ROLE_MODERATOR")) ? ("selected") : (""));
                yield ">Modérateur</option>
                                    <option value=\"ROLE_ADMIN\" ";
                // line 40
                yield (string) (((($context["currentRole"] ?? null) == "ROLE_ADMIN")) ? ("selected") : (""));
                yield ">Admin</option>
                                </select>
                                <button class=\"btn btn-small\">Changer le rôle</button>
                            </form>
                        ";
            } else {
                // line 45
                yield "                            <em class=\"muted\">C\x27est vous</em>
                        ";
            }
            // line 47
            yield "                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['u'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 51
        yield "        </tbody>
    </table>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/user/index.html.twig";
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
        return array (  178 => 51,  168 => 47,  164 => 45,  156 => 40,  152 => 39,  148 => 38,  143 => 36,  139 => 35,  133 => 32,  129 => 31,  125 => 30,  120 => 29,  118 => 28,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  97 => 21,  94 => 20,  90 => 19,  75 => 6,  68 => 5,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/user/index.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\templates\\admin\\user\\index.html.twig");
    }
}
