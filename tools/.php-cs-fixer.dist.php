<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(dirname(__DIR__) . '/src')
    ->in(dirname(__DIR__) . '/tests')
    ->ignoreVCSIgnored(true)
;

return (new PhpCsFixer\Config())
    ->setCacheFile(dirname(__DIR__) . '/.cache/php-cs-fixer.cache')
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        '@PSR12' => true,
        '@PSR12:risky' => true,
        '@PHP81Migration' => true,
        '@PHP80Migration:risky' => true,
        '@PhpCsFixer' => true,
        '@Symfony' => true,
        'single_line_empty_body' => true,
        'declare_strict_types' => true,
        'ordered_imports' => true,
        'global_namespace_import' => [
            'import_classes' => true,
        ],
        'concat_space' => [
            'spacing' => 'one',
        ],
        'php_unit_test_class_requires_covers' => false,
        'php_unit_internal_class' => false,
        'yoda_style' => [
            'equal' => null,
            'identical' => null,
            'less_and_greater' => null,
            'always_move_variable' => false,
        ],
    ])
    ->setFinder($finder)
;
