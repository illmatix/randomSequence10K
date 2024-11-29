<?php

$finder = PhpCsFixer\Finder::create()
    ->in(['src', 'tests'])
    ->exclude(['vendor', 'public/assets']);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
        'binary_operator_spaces' => ['default' => 'align_single_space_minimal'],
        'blank_line_after_namespace' => true,
        'blank_line_after_opening_tag' => true,
        'concat_space' => ['spacing' => 'one'],
        'declare_strict_types' => true, // Risky fixer
        'no_unused_imports' => true,
        'single_quote' => true,
        'ternary_operator_spaces' => true,
        'trailing_comma_in_multiline' => true,
    ])
    ->setRiskyAllowed(true) // Enable risky fixers
    ->setFinder($finder);
