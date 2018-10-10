<?php

return [
    //SMS Configs
    "sms" => [
        "sms0098" => [
            "from" => env("SMS0098_FROM"),
            "username" => env("SMS0098_USERNAME"),
            "password" => env("SMS0098_PASSWORD"),
        ],
        "smsir" => [
            "api_key" => env("SMSIR_API_KEY"),
            "line_number" => env("SMSIR_LINE_NUMBER"),
            "secret_key" => env("SMSIR_SECRET_KEY"),
        ]
    ],

    //Push Configs
    "push" => [
        "onesignal" => [
            "app_id" => env("ONESIGNAL_APP_ID"),
            "authorization" => env("ONESIGNAL_AUTHORIZATION"),
        ],
        "chabok" => [
            "uri_dev" => env('CHABOK_URI_DEV'),
            "uri" => env('CHABOK_URI'),
            "app_id" => env('CHABOK_APP_ID'),
            "access_token" => env('CHABOK_ACCESS_TOKEN')
        ]

    ],

    //Message Configs
    "message" => [
        "database" => []
    ],

    //Pagination Configs
    "pagination" => [
        "per_page" => env("PAGINATION_PER_PAGE", 20),
    ]
];