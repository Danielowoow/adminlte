<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
use Monolog\Processor\PsrLogMessageProcessor;

return [

    /*
    |------------------------------------------------- -------------------------
    | Canal de registro predeterminado
    |------------------------------------------------- -------------------------
    |
    | Esta opción define el canal de registro predeterminado que se utiliza al escribir
    | mensajes a los registros. El nombre especificado en esta opción debe coincidir
    | uno de los canales definidos en la matriz de configuración "canales".
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |------------------------------------------------- -------------------------
    | Canal de registro de obsolescencias
    |------------------------------------------------- -------------------------
    |
    | Esta opción controla el canal de registro que se debe utilizar para registrar advertencias.
    | con respecto a PHP obsoleto y características de la biblioteca. Esto le permite obtener
    | su aplicación está lista para las próximas versiones principales de dependencias.
    |
    */
    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        'trace' => false,
    ],

    /*
    |------------------------------------------------- -------------------------
    | Canales de registro
    |------------------------------------------------- -------------------------
    |
    | Aquí puede configurar los canales de registro para su aplicación. Fuera de
    | En el cuadro, Laravel usa la biblioteca de registro PHP de Monolog. Esto da
    | le ofrece una variedad de potentes controladores/formateadores de registros para utilizar.
    |
    | Controladores disponibles: "single", "daily", "slack", "syslog",
    | "registro de errores", "monólogo",
    | "personalizado", "apilar"
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => 14,
            'replace_placeholders' => true,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            'level' => env('LOG_LEVEL', 'critical'),
            'replace_placeholders' => true,
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class),
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
                'connectionString' => 'tls://' . env('PAPERTRAIL_URL') . ':' . env('PAPERTRAIL_PORT'),
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
            'facility' => LOG_USER,
            'replace_placeholders' => true,
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],
    ],

];
