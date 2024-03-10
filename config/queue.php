<?php

return [

/*
    |------------------------------------------------- -------------------------
    | Nombre de conexión de cola predeterminada
    |------------------------------------------------- -------------------------
    |
    | La API de cola de Laravel admite una variedad de back-ends a través de un único
    | API, que le brinda acceso conveniente a cada back-end utilizando el mismo
    | sintaxis para cada uno. Aquí puede definir una conexión predeterminada.
    |
    */
    'default' => env('QUEUE_CONNECTION', 'sync'),
/*
    |------------------------------------------------- -------------------------
    | Conexiones de cola
    |------------------------------------------------- -------------------------
    |
    | Aquí podrá configurar la información de conexión para cada servidor que
    | es utilizado por su aplicación. Se ha agregado una configuración predeterminada.
    | para cada back-end enviado con Laravel. Eres libre de agregar más.
    |
    | Controladores: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
            'after_commit' => false,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
            'block_for' => 0,
            'after_commit' => false,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'default'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'after_commit' => false,
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => 90,
            'block_for' => null,
            'after_commit' => false,
        ],

    ],

/*
    |------------------------------------------------- -------------------------
    | Trabajo por lotes
    |------------------------------------------------- -------------------------
    |
    | Las siguientes opciones configuran la base de datos y la tabla que almacena el trabajo.
    | información de lotes. Estas opciones se pueden actualizar a cualquier base de datos.
    | conexión y tabla que ha sido definida por su aplicación.
    |
    */

    'batching' => [
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'job_batches',
    ],
/*
    |------------------------------------------------- -------------------------
    | Trabajos de cola fallidos
    |------------------------------------------------- -------------------------
    |
    | Estas opciones configuran el comportamiento del registro de trabajos en cola fallidos para que
    | puede controlar qué base de datos y tabla se utilizan para almacenar los trabajos que
    | ha fallado. Puede cambiarlos a cualquier base de datos/tabla que desee.
    |
    */
    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

];
