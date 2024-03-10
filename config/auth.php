<?php

return [

/*
    |------------------------------------------------- -------------------------
    | Valores predeterminados de autenticación
    |------------------------------------------------- -------------------------
    |
    | Esta opción controla la "protección" y la contraseña de autenticación predeterminadas.
    | restablecer opciones para su aplicación. Puede cambiar estos valores predeterminados
    | según sea necesario, pero son un comienzo perfecto para la mayoría de las aplicaciones.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

/*
    |------------------------------------------------- -------------------------
    | Guardias de autenticación
    |------------------------------------------------- -------------------------
    |
    | A continuación, puede definir cada protección de autenticación para su aplicación.
    | Por supuesto, se ha definido una excelente configuración predeterminada para usted.
    | aquí que utiliza almacenamiento de sesión y el proveedor de usuario Eloquent.
    |
    | Todos los controladores de autenticación tienen un proveedor de usuario. Esto define cómo el
    | los usuarios en realidad se recuperan de su base de datos u otro almacenamiento
    | Mecanismos utilizados por esta aplicación para conservar los datos de su usuario.
    |
    | Soportado: "sesión"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

/*
    |------------------------------------------------- -------------------------
    | Proveedores de usuarios
    |------------------------------------------------- -------------------------
    |
    | Todos los controladores de autenticación tienen un proveedor de usuario. Esto define cómo el
    | los usuarios en realidad se recuperan de su base de datos u otro almacenamiento
    | Mecanismos utilizados por esta aplicación para conservar los datos de su usuario.
    |
    | Si tiene varias tablas de usuarios o modelos, puede configurar varias
    | Fuentes que representan cada modelo/tabla. Estas fuentes pueden entonces
    | se asignará a cualquier guardia de autenticación adicional que haya definido.
    |
    | Compatible: "base de datos", "elocuente"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

/*
    |------------------------------------------------- -------------------------
    | Restablecer contraseñas
    |------------------------------------------------- -------------------------
    |
    | Puede especificar múltiples configuraciones de restablecimiento de contraseña si tiene más
    | más de una tabla de usuario o modelo en la aplicación y desea tener
    | configuraciones de restablecimiento de contraseña separadas según los tipos de usuarios específicos.
    |
    | El tiempo de vencimiento es la cantidad de minutos que durará cada token de reinicio.
    | considerado válido. Esta característica de seguridad hace que los tokens tengan una vida corta, por lo que
    | tienen menos tiempo para ser adivinados. Puede cambiar esto según sea necesario.
    |
    | La configuración del acelerador es la cantidad de segundos que un usuario debe esperar antes de
    | generando más tokens de restablecimiento de contraseña. Esto evita que el usuario
    | generando rápidamente una gran cantidad de tokens de restablecimiento de contraseña.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],
/*
    |------------------------------------------------- -------------------------
    | Tiempo de espera de confirmación de contraseña
    |------------------------------------------------- -------------------------
    |
    | Aquí puede definir la cantidad de segundos antes de la confirmación de la contraseña.
    | El tiempo de espera se agota y se solicita al usuario que vuelva a ingresar su contraseña a través del
    | pantalla de confirmación. De forma predeterminada, el tiempo de espera dura tres horas.
    |
    */

    'password_timeout' => 10800,

];
