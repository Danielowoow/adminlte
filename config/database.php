<?php

use Illuminate\Support\Str;

return [

/*
    |------------------------------------------------- -------------------------
    | Nombre de conexión de base de datos predeterminado
    |------------------------------------------------- -------------------------
    |
    | Aquí puede especificar cuál de las siguientes conexiones de base de datos desea
    | para usar como conexión predeterminada para todo el trabajo de la base de datos. Por supuesto
    | puede utilizar muchas conexiones a la vez utilizando la biblioteca de bases de datos.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

/*
    |------------------------------------------------- -------------------------
    | Conexiones de bases de datos
    |------------------------------------------------- -------------------------
    |
    | Aquí se muestran cada una de las conexiones de bases de datos configuradas para su aplicación.
    | Por supuesto, ejemplos de configuración de cada plataforma de base de datos que es
    | compatible con Laravel se muestra a continuación para simplificar el desarrollo.
    |
    |
    | Todo el trabajo de la base de datos en Laravel se realiza a través de las instalaciones de PHP PDO.
    | así que asegúrese de tener el controlador para su base de datos particular de
    | Choice instalada en su máquina antes de comenzar el desarrollo.
    |
    */
    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],
/*
    |------------------------------------------------- -------------------------
    | Tabla del repositorio de migración
    |------------------------------------------------- -------------------------
    |
    | Esta tabla realiza un seguimiento de todas las migraciones que ya se han ejecutado durante
    | su aplicación. Usando esta información, podemos determinar cuál de
    | las migraciones en disco en realidad no se han ejecutado en la base de datos.
    |
    */
    'migrations' => 'migrations',

/*
    |------------------------------------------------- -------------------------
    | Bases de datos Redis
    |------------------------------------------------- -------------------------
    |
    | Redis es un almacén de claves-valor avanzado, rápido y de código abierto que también
    | Proporciona un cuerpo de comandos más rico que un sistema típico de clave-valor.
    | como APC o Memcached. Laravel hace que sea fácil profundizar.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
