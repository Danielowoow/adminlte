<?php

return [
    /*
    |------------------------------------------------- -------------------------
    | Correo predeterminado
    |------------------------------------------------- -------------------------
    |
    | Esta opción controla el correo predeterminado que se utiliza para enviar cualquier correo electrónico.
    | mensajes enviados por su aplicación. Se pueden configurar correos alternativos
    | y utilizado según sea necesario; sin embargo, este correo se utilizará de forma predeterminada.
    |
    */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |------------------------------------------------- -------------------------
    | Configuraciones de correo
    |------------------------------------------------- -------------------------
    |
    | Aquí puede configurar todos los correos utilizados por su aplicación más
    | sus respectivas configuraciones. Se han configurado varios ejemplos para
    | usted y usted son libres de agregar el suyo propio según lo requiera su aplicación.
    |
    | Laravel admite una variedad de controladores de "transporte" de correo que se pueden utilizar mientras
    | enviando un correo electrónico. Especificarás cuál estás usando para tu
    | anuncios publicitarios a continuación. Usted es libre de agregar anuncios publicitarios adicionales según sea necesario.
    |
    | Compatible con: "smtp", "sendmail", "mailgun", "ses", "ses-v2",
    | "matasellos", "registro", "matriz", "conmutación por error", "roundrobin"
    |
    */

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'url' => env('MAIL_URL'),
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN'),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'postmark' => [
            'transport' => 'postmark',
            // 'message_stream_id' => null,
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'mailgun' => [
            'transport' => 'mailgun',
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],

        'roundrobin' => [
            'transport' => 'roundrobin',
            'mailers' => [
                'ses',
                'postmark',
            ],
        ],
    ],

    /*
    |------------------------------------------------- -------------------------
    | Dirección global "De"
    |------------------------------------------------- -------------------------
    |
    | Es posible que desee que todos los correos electrónicos enviados por su aplicación se envíen desde
    | la misma dirección. Aquí puede especificar un nombre y una dirección que sea
    | Se utiliza globalmente para todos los correos electrónicos que envía su aplicación.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    |------------------------------------------------- -------------------------
    | Configuración de correo de rebajas
    |------------------------------------------------- -------------------------
    |
    | Si está utilizando la representación de correo electrónico basada en Markdown, puede configurar su
    | rutas de temas y componentes aquí, lo que le permite personalizar el diseño
    | de los correos electrónicos. ¡O simplemente puedes seguir con los valores predeterminados de Laravel!
    |
    */
    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
