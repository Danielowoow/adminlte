<?php

return [

/*
    |------------------------------------------------- -------------------------
    | Configuración de uso compartido de recursos entre orígenes (CORS)
    |------------------------------------------------- -------------------------
    |
    | Aquí puede configurar sus ajustes para compartir recursos entre orígenes
    | o "CORS". Esto determina qué operaciones de origen cruzado pueden ejecutarse.
    | en navegadores web. Eres libre de ajustar estas configuraciones según sea necesario.
    |
    | Para obtener más información: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
