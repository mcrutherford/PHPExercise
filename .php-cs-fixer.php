<?php
require_once __DIR__.'/tools/phpstan/vendor/autoload.php';

$config = new PhpCsFixer\Config();
$config->setRules([
    '@PSR2' => true,
    'indentation_type' => true,
    'array_indentation' => true,
    'array_syntax' => ['syntax' => 'short'],
    'combine_consecutive_unsets' => true,
    'class_attributes_separation' => [
        'elements' => ['method' => 'one'],
    ],
    'single_quote' => true,
    'braces' => [
        'allow_single_line_closure' => true,
        'position_after_functions_and_oop_constructs' => 'same',
    ],
    'concat_space' => ['spacing' => 'none'],
    'declare_equal_normalize' => true,
    'function_typehint_space' => true,
    'single_line_comment_style' => true,
    'include' => true,
    'lowercase_cast' => true,
    'no_extra_blank_lines' => [
        'tokens' => [
            'curly_brace_block',
            'extra',
            'parenthesis_brace_block',
            'square_brace_block',
            'throw',
            'use',
        ],
    ],
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_spaces_around_offset' => true,
    'no_whitespace_before_comma_in_array' => true,
    'no_whitespace_in_blank_line' => true,
    'object_operator_without_whitespace' => true,
    'single_blank_line_before_namespace' => true,
    'ternary_operator_spaces' => true,
    'trailing_comma_in_multiline' => true,
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
    'whitespace_after_comma_in_array' => true,
])->setLineEnding("\n");

$finder = new PhpCsFixer\Finder();

$finder->exclude(
    [
        'vendor/',
    ]
)->in([]);

$config->setFinder($finder);

return $config;
