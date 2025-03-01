<?php

declare(strict_types=1);

/*
 * This file is part of the FOSOAuthServerBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$header = <<<EOF
This file is part of the FOSOAuthServerBundle package.

(c) FriendsOfSymfony <http://friendsofsymfony.github.com/>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

return (new PhpCsFixer\Config())
    ->setRules([
        'psr_autoloading' => true,
        'header_comment' => ['header' => $header],
    ])
    ->setRiskyAllowed(true)
    ->setRules(
        [
            '@Symfony' => true,
            'array_syntax' => ['syntax' => 'short'],
            'combine_consecutive_unsets' => true,
            'declare_strict_types' => true,
            'dir_constant' => true,
            'general_phpdoc_annotation_remove' => ['annotations' => ['@author']],
            'header_comment' => ['header' => $header],
            'linebreak_after_opening_tag' => true,
            'mb_str_functions' => true,
            'modernize_types_casting' => true,
            // 'native_function_invocation' => true,
            'no_extra_blank_lines' => [
                'tokens' => [
                    'continue',
                    'extra',
                    'return',
                    'throw',
                    'use',
                    'parenthesis_brace_block',
                    'square_brace_block',
                    'curly_brace_block',
                ],
            ],
            'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
            'no_php4_constructor' => true,
            'echo_tag_syntax' => true,
            'no_unreachable_default_argument_value' => true,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'not_operator_with_space' => false,
            'not_operator_with_successor_space' => false,
            'ordered_class_elements' => true,
            'ordered_imports' => true,
            'php_unit_construct' => true,
            'php_unit_strict' => true,
            'phpdoc_add_missing_param_annotation' => true,
            'phpdoc_annotation_without_dot' => true,
            'general_phpdoc_tag_rename' => false,
            'phpdoc_no_empty_return' => false,
            'phpdoc_order' => true,
            'phpdoc_to_comment' => false,
            'random_api_migration' => true,
            'semicolon_after_instruction' => true,
            'single_import_per_statement' => true,
            'strict_comparison' => true,
            'strict_param' => true,
            'yoda_style' => false,
        ]
    )->setUsingCache(true)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
    )
;
