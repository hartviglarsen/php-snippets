<?php

/**
 * Convert a multi-dimensional associative array to dot notation
 *
 * @param  array $array
 * @param  string $context
 * @return array
 */
function dot(array $array, string $context = '') : array {
    $result = [];

    foreach ($array as $key => $value) {
        if (is_array($value) && !empty($value)) {
            $result = array_merge($result, dot($value, $context.$key.'.'));
        } else {
            $result[$context.$key] = $value;
        }
    }

    return $result;
}
