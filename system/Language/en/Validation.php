<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For full copyright and license information, please view
 * LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
    // Core Messages
    'noRuleSets' => 'No rule sets specified in Validation configuration.',
    'ruleNotFound' => '"{0}" is not a valid rule.',
    'groupNotFound' => '"{0}" is not a validation rules group.',
    'groupNotArray' => '"{0}" rule group must be an array.',
    'invalidTemplate' => '"{0}" is not a valid Validation template.',

    // Rule Messages
    'alpha' => '{field} field may only contain alphabetical characters.',
    'alpha_dash' => '{field} field may only contain alphanumeric, underscore, and dash characters.',
    'alpha_numeric' => '{field} hanya bisa diisi dengan karakter alfanumerik.',
    'alpha_numeric_punct' => '{field} field may contain only alphanumeric characters, spaces, and  ~ ! # $ % & * - _ + = | : . characters.',
    'alpha_numeric_space' => '{field} field may only contain alphanumeric and space characters.',
    'alpha_space' => '{field} field may only contain alphabetical characters and spaces.',
    'decimal' => '{field} field must contain a decimal number.',
    'differs' => '{field} field must differ from {param} field.',
    'equals' => '{field} field must be exactly: {param}.',
    'exact_length' => '{field} field must be exactly {param} characters in length.',
    'field_exists' => '{field} field must exist.',
    'greater_than' => '{field} field must contain a number greater than {param}.',
    'greater_than_equal_to' => '{field} field must contain a number greater than or equal to {param}.',
    'hex' => '{field} field may only contain hexadecimal characters.',
    'in_list' => '{field} field must be one of: {param}.',
    'integer' => '{field} field must contain an integer.',
    'is_natural' => '{field} field must only contain digits.',
    'is_natural_no_zero' => '{field} field must only contain digits and must be greater than zero.',
    'is_not_unique' => '{field} field must contain a previously existing value in database.',
    'is_unique' => '{field} harus bersifat unik.',
    'less_than' => '{field} field must contain a number less than {param}.',
    'less_than_equal_to' => '{field} field must contain a number less than or equal to {param}.',
    'matches' => '{field} field does not match {param} field.',
    'max_length' => '{field} field cannot exceed {param} characters in length.',
    'min_length' => '{field} harus berisi setidaknya {param} karakter.',
    'not_equals' => '{field} field cannot be: {param}.',
    'not_in_list' => '{field} field must not be one of: {param}.',
    'numeric' => '{field} field must contain only numbers.',
    'regex_match' => '{field} field is not in correct format.',
    'required' => '{field} harus diisi.',
    'required_with' => '{field} field is required when {param} is present.',
    'required_without' => '{field} field is required when {param} is not present.',
    'string' => '{field} field must be a valid string.',
    'timezone' => '{field} field must be a valid timezone.',
    'valid_base64' => '{field} field must be a valid base64 string.',
    'valid_email' => '{field} harus diisi dengan email yang valid.',
    'valid_emails' => '{field} field must contain all valid email addresses.',
    'valid_ip' => '{field} field must contain a valid IP.',
    'valid_url' => '{field} field must contain a valid URL.',
    'valid_url_strict' => '{field} field must contain a valid URL.',
    'valid_date' => '{field} field must contain a valid date.',
    'valid_json' => '{field} field must contain a valid json.',

    // Credit Cards
    'valid_cc_num' => '{field} does not appear to be a valid credit card number.',

    // Files
    'uploaded' => '{field} is not a valid uploaded file.',
    'max_size' => '{field} is too large of a file.',
    'is_image' => '{field} is not a valid, uploaded image file.',
    'mime_in' => '{field} does not have a valid mime type.',
    'ext_in' => '{field} does not have a valid file extension.',
    'max_dims' => '{field} is ei not an image, or it is too wide or tall.',
];
