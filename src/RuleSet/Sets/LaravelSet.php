<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PhpCsFixer\RuleSet\Sets;

use PhpCsFixer\RuleSet\AbstractRuleSetDescription;

/**
 * @author Jakub Kwaśniewski <jakub@zero-85.pl>
 *         based on Matt Allan's Laravel Code Style <https://github.com/matt-allan/laravel-code-style>
 */
final class LaravelSet extends AbstractRuleSetDescription
{
    /**
     * @return array<string, mixed>
     */
    public function getRules(): array
    {
        return [
            'align_multiline_comment' => [
                'comment_type' => 'phpdocs_like',
            ],
            'array_indentation' => true,
            'array_syntax' => true,
            'binary_operator_spaces' => true,
            'blank_line_after_namespace' => true,
            'blank_line_after_opening_tag' => true,
            'blank_line_before_statement' => [
                'statements' => ['return'],
            ],
            'braces' => [
                'allow_single_line_anonymous_class_with_empty_body' => false,
                'allow_single_line_closure' => false,
                'position_after_anonymous_constructs' => 'next',
                'position_after_control_structures' => 'same',
                'position_after_functions_and_oop_constructs' => 'next',
            ],
            'cast_spaces' => true,
            'class_attributes_separation' => true,
            'class_definition' => true,
            'clean_namespace' => true,
            'compact_nullable_typehint' => true,
            'concat_space' => true,
            'constant_case' => true,
            'curly_braces_position' => [
                'allow_single_line_anonymous_functions' => false,
                'allow_single_line_empty_anonymous_classes' => true,
                'anonymous_classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
                'anonymous_functions_opening_brace' => 'same_line',
                'classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
                'control_structures_opening_brace' => 'same_line',
                'functions_opening_brace' => 'next_line_unless_newline_at_signature_end',
            ],
            'declare_equal_normalize' => true,
            'elseif' => true,
            'encoding' => true,
            'full_opening_tag' => true,
            'function_declaration' => true,
            'function_typehint_space' => true,
            'heredoc_to_nowdoc' => true,
            'include' => true,
            'increment_style' => [
                'style' => 'post',
            ],
            'indentation_type' => true,
            'integer_literal_case' => true,
            'lambda_not_used_import' => true,
            'line_ending' => true,
            'list_syntax' => true,
            'lowercase_cast' => true,
            'lowercase_keywords' => true,
            'lowercase_static_reference' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'method_argument_space' => true,
            'multiline_whitespace_before_semicolons' => true,
            'native_function_casing' => true,
            'native_function_type_declaration_casing' => true,
            'no_alias_language_construct_call' => true,
            'no_alternative_syntax' => true,
            'no_binary_string' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_closing_tag' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_blank_lines' => [
                'tokens' => ['extra', 'throw', 'use'],
            ],
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => true,
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_spaces_after_function_name' => true,
            'no_spaces_around_offset' => [
                'positions' => ['inside'],
            ],
            'no_spaces_inside_parenthesis' => true,
            'no_trailing_comma_in_list_call' => true,
            'no_trailing_comma_in_singleline_array' => true,
            'no_trailing_whitespace' => true,
            'no_trailing_whitespace_in_comment' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unneeded_curly_braces' => true,
            'no_unset_cast' => true,
            'no_unused_imports' => true,
            'no_useless_return' => true,
            'no_whitespace_before_comma_in_array' => true,
            'no_whitespace_in_blank_line' => true,
            'normalize_index_brace' => true,
            'not_operator_with_successor_space' => true,
            'object_operator_without_whitespace' => true,
            'ordered_imports' => [
                'sort_algorithm' => 'alpha',
            ],
            'phpdoc_align' => [
                'align' => 'left',
                'spacing' => ['param' => 2],
            ],
            'phpdoc_indent' => true,
            'phpdoc_inline_tag_normalizer' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_alias_tag' => [
                'replacements' => [
                    'type' => 'var',
                ],
            ],
            'phpdoc_no_package' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_order' => [
                'order' => ['param', 'return', 'throws'],
            ],
            'phpdoc_return_self_reference' => true,
            'phpdoc_scalar' => true,
            'phpdoc_separation' => [
                'groups' => [
                    ['deprecated', 'link', 'see', 'since'],
                    ['author', 'copyright', 'license'],
                    ['category', 'package', 'subpackage'],
                    ['property', 'property-read', 'property-write'],
                    ['param', 'return'],
                ],
            ],
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => true,
            'phpdoc_trim' => true,
            'phpdoc_types' => true,
            'phpdoc_var_without_name' => true,
            'return_type_declaration' => true,
            'short_scalar_cast' => true,
            'single_blank_line_at_eof' => true,
            'single_blank_line_before_namespace' => true,
            'single_class_element_per_statement' => true,
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'single_line_comment_style' => [
                'comment_types' => ['hash'],
            ],
            'single_quote' => true,
            'space_after_semicolon' => true,
            'standardize_not_equals' => true,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'switch_continue_to_break' => true,
            'ternary_operator_spaces' => true,
            'trailing_comma_in_multiline' => [
                'elements' => ['arrays'],
            ],
            'trim_array_spaces' => true,
            'types_spaces' => true,
            'unary_operator_spaces' => true,
            'visibility_required' => true,
            'whitespace_after_comma_in_array' => true,
        ];
    }

    public function getDescription(): string
    {
        return 'Safe rules covering Laravel style.';
    }
}