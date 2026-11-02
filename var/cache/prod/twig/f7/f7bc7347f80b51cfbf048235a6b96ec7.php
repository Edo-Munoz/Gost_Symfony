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

/* registration/register.html.twig */
class __TwigTemplate_e0ebf2cfd7eda32355e354c27b4f004e extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        yield "Inscription";
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
    <h1>Créer un compte</h1>

    ";
        // line 9
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        yield "
        ";
        // line 10
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 10), 'row');
        yield "
        ";
        // line 11
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "username", [], "any", false, false, false, 11), 'row');
        yield "
        ";
        // line 12
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 12), "first", [], "any", false, false, false, 12), 'row');
        yield "
        ";
        // line 13
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 13), "second", [], "any", false, false, false, 13), 'row');
        yield "
        ";
        // line 14
        yield (string) $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "submit", [], "any", false, false, false, 14), 'row');
        yield "
    ";
        // line 15
        yield (string)         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        yield "

    <p>Vous avez déjà un compte ? <a href=\"";
        // line 17
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Connectez-vous</a></p>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/register.html.twig";
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
        return array (  106 => 17,  101 => 15,  97 => 14,  93 => 13,  89 => 12,  85 => 11,  81 => 10,  77 => 9,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "registration/register.html.twig", "B:\\local_files\\Desktop\\gost_symfony\\templates\\registration\\register.html.twig");
    }
}
