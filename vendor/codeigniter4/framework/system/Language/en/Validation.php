<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
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
    'alpha' => ' Kolom {field} field may only contain alphabetical characters.',
    'alpha_dash' => 'Kolom {field} field may only contain alphanumeric, underscore, and dash characters.',
    'alpha_numeric' => 'Kolom {field} harus diisi dengan karakter alfanumerik.',
    'alpha_numeric_punct' => 'Kolom {field} field may contain only alphanumeric characters, spaces, and  ~ ! # $ % & * - _ + = | : . characters.',
    'alpha_numeric_space' => 'Kolom {field} field may only contain alphanumeric and space characters.',
    'alpha_space' => 'Kolom {field} field may only contain alphabetical characters and spaces.',
    'decimal' => 'Kolom {field} field must contain a decimal number.',
    'differs' => 'Kolom {field} field must differ from  {param} field.',
    'equals' => 'Kolom {field} field must be exactly: param}.',
    'exact_length' => 'Kolom {field} field must be exactly {param} characters in length.',
    'field_exists' => 'Kolom {field} field must exist.',
    'greater_than' => 'Kolom {field} field must contain a number greater than {param}.',
    'greater_than_equal_to' => 'Kolom {field} field must contain a number greater than or equal to {param}.',
    'hex' => 'Kolom {field} field may only contain hexadecimal characters.',
    'in_list' => 'Kolom {field} field must be one of: {param}.',
    'integer' => 'Kolom {field} field must contain an integer.',
    'is_natural' => 'Kolom {field} field must only contain digits.',
    'is_natural_no_zero' => 'Kolom {field} field must only contain digits and must be greater than zero.',
    'is_not_unique' => 'Kolom {field} field must contain a previously existing value in  database.',
    'is_unique' => '{field} sudah ada, silahkan masukkan {field} lain.',
    'less_than' => 'Kolom {field} field must contain a number less than {param}.',
    'less_than_equal_to' => 'Kolom {field} field must contain a number less than or equal to {param}.',
    'matches' => 'Kolom {field} tidak sama dengan kolom {param}.',
    'max_length' => 'Kolom {field} field cannot exceed {aram} characters in length.',
    'min_length' => 'Kolom {field} harus berisi minimal {param} karakter.',
    'not_equals' => 'Kolom {field} field cannot be: {param}.',
    'not_in_list' => 'Kolom {field} field must not be one of: {param}.',
    'numeric' => 'Kolom {field} field must contain only numbers.',
    'regex_match' => 'Kolom {field} field is not in  correct format.',
    'required' => 'Kolom {field} harus diisi.',
    'required_with' => 'Kolom {field} field is required when {param} is present.',
    'required_without' => 'Kolom {field} field is required when {param} is not present.',
    'string' => 'Kolom {field} field must be a valid string.',
    'timezone' => 'Kolom {field} field must be a valid timezone.',
    'valid_base64' => 'Kolom {field} field must be a valid base64 string.',
    'valid_email' => 'Kolom {field} harus diisi dengan email yang valid.',
    'valid_emails' => 'Kolom {field} field must contain all valid email addresses.',
    'valid_ip' => 'Kolom {field} field must contain a valid IP.',
    'valid_url' => 'Kolom {field} field must contain a valid URL.',
    'valid_url_strict' => 'Kolom {field} field must contain a valid URL.',
    'valid_date' => 'Kolom {field} field must contain a valid date.',
    'valid_json' => 'Kolom {field} field must contain a valid json.',
    // Credit Cards
    'valid_cc_num' => 'Kolom {field} does not appear to be a valid credit card number.',

    // Files
    'uploaded' => 'Kolom {field} berisi file yang tidak valid.',
    'max_size' => 'Kolom {field} berisi file yang berukuran terlalu besar.',
    'is_image' => 'Kolom {field} berisi file foto yang tidak valid.',
    'mime_in' => 'Kolom {field} berisi jenis file yang tidak valid. Silahkan upload file dengan tipe jpg/jpeg/png',
    'ext_in' => 'Kolom {field} does not have a valid file extension.',
    'max_dims' => 'Kolom {field} is either not an image, or it is too wide or tall.',
];
