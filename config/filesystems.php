<?php

return [

/*
    |------------------------------------------------- -------------------------
    | Disco del sistema de archivos predeterminado
    |------------------------------------------------- -------------------------
    |
    | Aquí puede especificar el disco del sistema de archivos predeterminado que debe usarse
    | por el marco. El disco "local", así como una variedad de nube.
    | Los discos basados ​​en archivos están disponibles para su aplicación. ¡Solo guárdalo!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

/*
    |------------------------------------------------- -------------------------
    | Discos del sistema de archivos
    |------------------------------------------------- -------------------------
    |
    | Aquí puede configurar tantos "discos" del sistema de archivos como desee y
    | Incluso puede configurar varios discos del mismo controlador. Los valores predeterminados tienen
    | se han configurado para cada controlador como ejemplo de los valores requeridos.
    |
    | Controladores compatibles: "local", "ftp", "sftp", "s3"
    |
    */
    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

    ],

/*
    |------------------------------------------------- -------------------------
    | Enlaces simbólicos
    |------------------------------------------------- -------------------------
    |
    | Aquí podrá configurar los enlaces simbólicos que se crearán cuando el
    | `storage:link` Se ejecuta el comando Artisan. Las claves de la matriz deben ser
    | las ubicaciones de los enlaces y los valores deben ser sus objetivos.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
