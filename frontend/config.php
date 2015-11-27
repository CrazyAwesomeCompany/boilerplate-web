<?php
return [
    "framework" => "silex", // The framework implementation to use
    "twig.config" => [
        "twig.path" => [ // The template folder to search twig files. This can be an array of paths.
            __DIR__ . '/templates'
        ]
    ]
];
