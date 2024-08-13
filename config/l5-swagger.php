<?php

return [
    'default' => 'default',
    'documentations' => [
        'default' => [
            'api' => [
                'title' => 'L5 Swagger UI',
            ],
            'routes' => [
                /*
                 * Route for accessing api documentation interface
                */
                'api' => 'api/documentation',
            ],
            'paths' => [
                /*
                 * Edit to include full URL in ui for assets
                */
                'use_absolute_path' => env('L5_SWAGGER_USE_ABSOLUTE_PATH', true),

                /*
                 * File name of the generated json documentation file
                */
                'docs_json' => 'api-docs.json',

                /*
                 * File name of the generated YAML documentation file
                */
                'docs_yaml' => 'api-docs.yaml',

                /*
                * Set this to `json` or `yaml` to determine which documentation file to use in UI
                */
                'format_to_use_for_docs' => env('L5_FORMAT_TO_USE_FOR_DOCS', 'json'),

                /*
                 * Absolute paths to directory containing the swagger annotations are stored.
                */
                'annotations' => [
                    base_path('app'),
                ],

            ],
            'securityDefinitions' => [
                'securitySchemes' => [
                    'passport' => [ // Unique name of security
                        'type' => 'oauth2', // The type of the security scheme. Valid values are "basic", "apiKey" or "oauth2".
                        'description' => 'Laravel passport oauth2 security.',
                        'in' => 'header',
                        'scheme' => 'https',
                        'flows' => [
                            "password" => [
                                "authorizationUrl" => config('app.url') . '/oauth/authorize',
                                "tokenUrl" => config('app.url') . '/oauth/token',
                                "refreshUrl" => config('app.url') . '/token/refresh',
                                "scopes" => []
                            ],
                        ],
                    ],
                ],
                'security' => [
                    [
                        'passport' => []
                    ],
                ],
            ],
        ],

    ],
];
