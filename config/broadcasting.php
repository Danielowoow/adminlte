<?php

return [

    /*
    |------------------------------------------------- -------------------------
    | Emisor predeterminado
    |------------------------------------------------- -------------------------
    |
    | Esta opción controla la emisora ​​predeterminada que utilizará el
    | marco cuando es necesario transmitir un evento. Puede configurar esto en
    | cualquiera de las conexiones definidas en la matriz "conexiones" a continuación.
    |
    | Compatible: "pusher", "ably", "redis", "log", "null"
    |
    */

    'default' => env('BROADCAST_DRIVER', 'null'),

    /*
    |------------------------------------------------- -------------------------
    | Conexiones de transmisión
    |------------------------------------------------- -------------------------
    |
    | Aquí puede definir todas las conexiones de transmisión que se utilizarán.
    | para transmitir eventos a otros sistemas o a través de websockets. Muestras de
    | Cada tipo de conexión disponible se proporciona dentro de esta matriz.
    |
    */

    'connections' => [

        'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_APP_KEY'),
            'secret' => env('PUSHER_APP_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'host' => env('PUSHER_HOST') ?: 'api-' . env('PUSHER_APP_CLUSTER', 'mt1') . '.pusher.com',
                'port' => env('PUSHER_PORT', 443),
                'scheme' => env('PUSHER_SCHEME', 'https'),
                'encrypted' => true,
                'useTLS' => env('PUSHER_SCHEME', 'https') === 'https',
            ],
            'client_options' => [
                // Guzzle client options: https://docs.guzzlephp.org/en/stable/request-options.html
            ],
        ],

        'ably' => [
            'driver' => 'ably',
            'key' => env('ABLY_KEY'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];
