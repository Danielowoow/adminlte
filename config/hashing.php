<?php

return [
/*
    |------------------------------------------------- -------------------------
    | Controlador hash predeterminado
    |------------------------------------------------- -------------------------
    |
    | Esta opción controla el controlador hash predeterminado que se utilizará para realizar hash.
    | contraseñas para su aplicación. Por defecto, el algoritmo bcrypt es
    | usado; sin embargo, usted es libre de modificar esta opción si lo desea.
    |
    | Compatible: "bcrypt", "argon", "argon2id"
    |
    */

    'driver' => 'bcrypt',

/*
    |------------------------------------------------- -------------------------
    | Opciones de Bcrypt
    |------------------------------------------------- -------------------------
    |
    | Aquí puede especificar las opciones de configuración que se deben utilizar cuando
    | Las contraseñas se codifican mediante el algoritmo Bcrypt. Esto te permitirá
    | para controlar la cantidad de tiempo que lleva codificar la contraseña proporcionada.
    |
    */

    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 12),
        'verify' => true,
    ],
/*
    |------------------------------------------------- -------------------------
    | Opciones de argón
    |------------------------------------------------- -------------------------
    |
    | Aquí puede especificar las opciones de configuración que se deben utilizar cuando
    | Las contraseñas se codifican mediante el algoritmo Argon. Estos te permitirán
    | para controlar la cantidad de tiempo que lleva codificar la contraseña proporcionada.
    |
    */

    'argon' => [
        'memory' => 65536,
        'threads' => 1,
        'time' => 4,
        'verify' => true,
    ],

];
