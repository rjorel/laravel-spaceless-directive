<?php

if (!function_exists('minify_html')) {
    function minify_html(string $text): string
    {
        static $searches = [
            '# {2,}#',          // Multiple spaces.
            '#>\s+<#',          // Whitespaces between tags.
            '#(\S)\s+(<|/?>)#', // Whitespaces before opening/closing tags.
            '#(<|>)\s+(\S)#'    // Whitespaces after opening/closing tags.
        ];

        static $replaces = [
            ' ',
            '><',
            '\1 \2',
            '\1 \2',
        ];

        return preg_replace($searches, $replaces, $text);
    }
}
