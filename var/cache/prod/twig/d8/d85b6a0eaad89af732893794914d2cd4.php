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

/* auth/login.html.twig */
class __TwigTemplate_bd9c3f7685edca8fcf07e992e97d790c extends Template
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
        yield "Connexion";
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
        yield "<section>
    <h1>Se connecter</h1>

    <form method=\"post\" action=\"";
        // line 9
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
        ";
        // line 10
        if ((($tmp = ($context["error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "            <div class=\"alert alert-danger\">";
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 11), "security"), "html", null, true);
            yield "</div>
        ";
        }
        // line 13
        yield "
        <div>
            <label for=\"username\">Email</label>
            <input type=\"email\" value=\"";
        // line 16
        yield (string) $this->escaper->escape(($context["last_username"] ?? null), "html", null, true);
        yield "\" name=\"_username\" id=\"username\" autocomplete=\"email\" required autofocus>
        </div>
        <div>
            <label for=\"password\">Mot de passe</label>
            <input type=\"password\" name=\"_password\" id=\"password\" autocomplete=\"current-password\" required>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

        <button class=\"btn\" type=\"submit\">Se connecter</button>
    </form>

    <p>Pas encore de compte ? <a href=\"";
        // line 28
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Créez-en un</a></p>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "auth/login.html.twig";
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
        return array (  115 => 28,  107 => 23,  97 => 16,  92 => 13,  86 => 11,  84 => 10,  80 => 9,  75 => 6,  68 => 5,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "auth/login.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\templates\\auth\\login.html.twig");
    }
}
