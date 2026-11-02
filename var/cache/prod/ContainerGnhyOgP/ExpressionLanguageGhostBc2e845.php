<?php

namespace ContainerGnhyOgP;

class ExpressionLanguageGhostBc2e845 extends \Symfony\Component\ExpressionLanguage\ExpressionLanguage implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'functions' => [parent::class, 'functions', null, 8],
        "\0".parent::class."\0".'cache' => [parent::class, 'cache', null, 16],
        "\0".parent::class."\0".'compiler' => [parent::class, 'compiler', null, 16],
        "\0".parent::class."\0".'lexer' => [parent::class, 'lexer', null, 16],
        "\0".parent::class."\0".'parser' => [parent::class, 'parser', null, 16],
        'cache' => [parent::class, 'cache', null, 16],
        'compiler' => [parent::class, 'compiler', null, 16],
        'functions' => [parent::class, 'functions', null, 8],
        'lexer' => [parent::class, 'lexer', null, 16],
        'parser' => [parent::class, 'parser', null, 16],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ExpressionLanguageGhostBc2e845', false)) {
    \class_alias(__NAMESPACE__.'\\ExpressionLanguageGhostBc2e845', 'ExpressionLanguageGhostBc2e845', false);
}
