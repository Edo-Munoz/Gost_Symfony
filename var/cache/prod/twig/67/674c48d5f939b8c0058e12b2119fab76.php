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

/* track/index.html.twig */
class __TwigTemplate_e60c5ebad1fd4975637b9cf85f71f5cd extends Template
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
        yield "Rechercher";
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
        yield "    <h2>Rechercher un morceau</h2>

    <form method=\"get\" action=\"";
        // line 8
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_track_index");
        yield "\" role=\"search\">
        <input type=\"search\" name=\"q\" placeholder=\"Titre, jeu ou compositeur...\" value=\"";
        // line 9
        yield (string) $this->escaper->escape(((array_key_exists("query", $context)) ? (Twig\Extension\CoreExtension::default(($context["query"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
        <button type=\"submit\" class=\"btn\">Rechercher</button>
    </form>

    <div class=\"track-list\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tracks"] ?? null));
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
            // line 15
            yield "            ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "track/_item.html.twig", ["track" => $context["track"]]);
            yield "
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
        // line 16
        if (!$context['_iterated']) {
            // line 17
            yield "            <p>Aucun morceau trouvé.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['track'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 19
        yield "    </div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "track/index.html.twig";
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
        return array (  134 => 19,  126 => 17,  124 => 16,  109 => 15,  91 => 14,  83 => 9,  79 => 8,  75 => 6,  68 => 5,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "track/index.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\templates\\track\\index.html.twig");
    }
}
