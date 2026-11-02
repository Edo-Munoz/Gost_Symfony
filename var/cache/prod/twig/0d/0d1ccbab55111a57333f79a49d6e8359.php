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

/* track/_play_attrs.html.twig */
class __TwigTemplate_dc788e58e6990075d299c153719abcb4 extends Template
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
        yield "data-track-id=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "id", [], "any", false, false, false, 1), "html", null, true);
        yield "\"
data-video=\"";
        // line 2
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "youtubeId", [], "any", false, false, false, 2), "html", null, true);
        yield "\"
data-title=\"";
        // line 3
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
        yield "\"
data-game=\"";
        // line 4
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "gameName", [], "any", false, false, false, 4), "html", null, true);
        yield "\"
";
        // line 5
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "    data-like-url=\"";
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_track_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "id", [], "any", false, false, false, 6)]), "html", null, true);
            yield "\"
    data-like-token=\"";
            // line 7
            yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("like" . CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "id", [], "any", false, false, false, 7))), "html", null, true);
            yield "\"
    data-liked=\"";
            // line 8
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8), "likedTracks", [], "any", false, false, false, 8), "contains", [($context["track"] ?? null)], "method", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
    data-add-url=\"";
            // line 9
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_playlist_add_track", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "id", [], "any", false, false, false, 9)]), "html", null, true);
            yield "\"
    data-add-token=\"";
            // line 10
            yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("add_track" . CoreExtension::getAttribute($this->env, $this->source, ($context["track"] ?? null), "id", [], "any", false, false, false, 10))), "html", null, true);
            yield "\"
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "track/_play_attrs.html.twig";
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
        return array (  83 => 10,  79 => 9,  75 => 8,  71 => 7,  66 => 6,  64 => 5,  60 => 4,  56 => 3,  52 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "track/_play_attrs.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\templates\\track\\_play_attrs.html.twig");
    }
}
