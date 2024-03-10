<?php

use Laravel\Sanctum\Sanctum;

return [
/*
    |------------------------------------------------- -------------------------
    | Dominios con estado
    |------------------------------------------------- -------------------------
    |
    | Las solicitudes de los siguientes dominios/hosts recibirán una API con estado
    | cookies de autenticación. Normalmente, estos deberían incluir su local
    | y dominios de producción que acceden a su API a través de un SPA frontend.
    |
    */

    'stateful' => explode(',', env('SANCTUM_STATEFUL_DOMAINS', sprintf(
        '%s%s',
        'localhost,localhost:3000,127.0.0.1,127.0.0.1:8000,::1',
        Sanctum::currentApplicationUrlWithPort()
    ))),

/*
    |------------------------------------------------- -------------------------
    | Guardias del santuario
    |------------------------------------------------- -------------------------
    |
    | Esta matriz contiene las protecciones de autenticación que se comprobarán cuando
    | Sanctum está intentando autenticar una solicitud. Si ninguno de estos guardias
    | pueden autenticar la solicitud, Sanctum utilizará el portador
    | token que está presente en una solicitud entrante de autenticación.
    |
    */

    'guard' => ['web'],
/*
    |------------------------------------------------- -------------------------
    | Minutos de vencimiento
    |------------------------------------------------- -------------------------
    |
    | Este valor controla el número de minutos hasta que se emita un token.
    | considerado caducado. Esto anulará cualquier valor establecido en el token
    | atributo "expires_at", pero las sesiones propias no se ven afectadas.
    |
    */
    'expiration' => null,

/*
    |------------------------------------------------- -------------------------
    | Prefijo de token
    |------------------------------------------------- -------------------------
    |
    | Sanctum puede anteponer nuevos tokens para aprovechar numerosos
    | Iniciativas de escaneo de seguridad mantenidas por plataformas de código abierto.
    | que notifican a los desarrolladores si envían tokens a los repositorios.
    |
    | Ver: https://docs.github.com/en/code-security/secret-scanning/about-secret-scanning
    |
    */

    'token_prefix' => env('SANCTUM_TOKEN_PREFIX', ''),

/*
    |------------------------------------------------- -------------------------
    | Middleware sagrado
    |------------------------------------------------- -------------------------
    |
    | Al autenticar su SPA propio con Sanctum, es posible que deba
    | personalizar algunos de los middleware que utiliza Sanctum mientras procesa el
    | pedido. Puede cambiar el middleware que se enumera a continuación según sea necesario.
    |
    */

    'middleware' => [
        'authenticate_session' => Laravel\Sanctum\Http\Middleware\AuthenticateSession::class,
        'encrypt_cookies' => App\Http\Middleware\EncryptCookies::class,
        'verify_csrf_token' => App\Http\Middleware\VerifyCsrfToken::class,
    ],

];
