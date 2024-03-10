<?php

use Illuminate\Support\Str;

return [

/*
    |------------------------------------------------- -------------------------
    | Controlador de sesión predeterminado
    |------------------------------------------------- -------------------------
    |
    | Esta opción controla el "controlador" de sesión predeterminado que se utilizará en
    | peticiones. De forma predeterminada, usaremos el controlador nativo liviano pero
    | puede especificar cualquiera de los otros maravillosos controladores que se proporcionan aquí.
    |
    | Compatible: "archivo", "cookie", "base de datos", "apc",
    | "memcached", "redis", "dynamodb", "matriz"
    |
    */
    'driver' => env('SESSION_DRIVER', 'file'),

/*
    |------------------------------------------------- -------------------------
    | Duración de la sesión
    |------------------------------------------------- -------------------------
    |
    | Aquí podrás especificar el número de minutos que deseas que dure la sesión.
    | que se le permita permanecer inactivo antes de que caduque. si los quieres
    | para caducar inmediatamente al cerrar el navegador, configure esa opción.
    |
    */

    'lifetime' => env('SESSION_LIFETIME', 120),

    'expire_on_close' => false,

/*
    |------------------------------------------------- -------------------------
    | Cifrado de sesión
    |------------------------------------------------- -------------------------
    |
    | Esta opción le permite especificar fácilmente que todos los datos de su sesión
    | debe cifrarse antes de almacenarse. Se ejecutará todo el cifrado
    | automáticamente por Laravel y puedes usar la sesión como de costumbre.
    |
    */

    'encrypt' => false,

/*
    |------------------------------------------------- -------------------------
    | Ubicación del archivo de sesión
    |------------------------------------------------- -------------------------
    |
    | Cuando utilizamos el controlador de sesión nativo, necesitamos una ubicación donde se inicie la sesión.
    | Se pueden almacenar archivos. Se ha establecido un valor predeterminado para usted, pero diferente
    | Se puede especificar la ubicación. Esto sólo es necesario para sesiones de archivos.
    |
    */
    'files' => storage_path('framework/sessions'),
/*
    |------------------------------------------------- -------------------------
    | Conexión de base de datos de sesión
    |------------------------------------------------- -------------------------
    |
    | Al utilizar los controladores de sesión "base de datos" o "redis", puede especificar un
    | conexión que se debe utilizar para gestionar estas sesiones. Esto debería
    | corresponden a una conexión en las opciones de configuración de su base de datos.
    |
    */
    'connection' => env('SESSION_CONNECTION'),

/*
    |------------------------------------------------- -------------------------
    | Tabla de base de datos de sesión
    |------------------------------------------------- -------------------------
    |
    | Al utilizar el controlador de sesión "base de datos", puede especificar la tabla que
    | debe utilizar para gestionar las sesiones. Por supuesto, un valor predeterminado sensato es
    | proporcionado para usted; sin embargo, usted es libre de cambiar esto según sea necesario.
    |
    */

    'table' => 'sessions',
/*
    |------------------------------------------------- -------------------------
    | Almacén de caché de sesión
    |------------------------------------------------- -------------------------
    |
    | Mientras utiliza uno de los backends de sesión controlados por caché del marco, puede
    | enumere un almacén de caché que debe usarse para estas sesiones. Este valor
    | debe coincidir con una de las "tiendas" de caché configuradas de la aplicación.
    |
    | Afecta a: "apc", "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('SESSION_STORE'),
/*
    |------------------------------------------------- -------------------------
    | Lotería de barrido de sesiones
    |------------------------------------------------- -------------------------
    |
    | Algunos controladores de sesión deben barrer manualmente su ubicación de almacenamiento para obtener
    | deshacerse de las sesiones antiguas del almacenamiento. Estas son las posibilidades de que así sea
    | suceder en una solicitud determinada. Por defecto, las probabilidades son 2 sobre 100.
    |
    */
    'lottery' => [2, 100],

/*
    |------------------------------------------------- -------------------------
    | Nombre de la cookie de sesión
    |------------------------------------------------- -------------------------
    |
    | Aquí puedes cambiar el nombre de la cookie utilizada para identificar una sesión.
    | instancia por ID. El nombre especificado aquí se utilizará cada vez que un
    | El marco crea una nueva cookie de sesión para cada controlador.
    |
    */
    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),

/*
    |------------------------------------------------- -------------------------
    | Ruta de cookies de sesión
    |------------------------------------------------- -------------------------
    |
    | La ruta de la cookie de sesión determina la ruta por la cual se instalará la cookie.
    | considerarse como disponible. Normalmente, esta será la ruta raíz de
    | su aplicación, pero usted es libre de cambiar esto cuando sea necesario.
    |
    */
    'path' => '/',

/*
    |------------------------------------------------- -------------------------
    | Dominio de cookies de sesión
    |------------------------------------------------- -------------------------
    |
    | Aquí puedes cambiar el dominio de la cookie utilizada para identificar una sesión.
    | en su solicitud. Esto determinará qué dominios es la cookie.
    | disponibles en su aplicación. Se ha establecido un valor predeterminado sensato.
    |
    */

    'domain' => env('SESSION_DOMAIN'),

/*
    |------------------------------------------------- -------------------------
    | Cookies solo HTTPS
    |------------------------------------------------- -------------------------
    |
    | Al configurar esta opción en verdadero, las cookies de sesión solo se devolverán
    | al servidor si el navegador tiene una conexión HTTPS. Esto mantendrá
    | que se le envíe la cookie cuando no se puede hacer de forma segura.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

/*
    |------------------------------------------------- -------------------------
    | Sólo acceso HTTP
    |------------------------------------------------- -------------------------
    |
    | Establecer este valor en verdadero evitará que JavaScript acceda al
    | valor de la cookie y la cookie sólo será accesible a través de
    | el protocolo HTTP. Eres libre de modificar esta opción si es necesario.
    |
    */



    'http_only' => true,

/*
    |------------------------------------------------- -------------------------
    | Cookies del mismo sitio
    |------------------------------------------------- -------------------------
    |
    | Esta opción determina cómo se comportan sus cookies cuando las solicitudes entre sitios
    | tienen lugar y pueden usarse para mitigar los ataques CSRF. Por defecto, nosotros
    | establecerá este valor en "laxo", ya que es un valor predeterminado seguro.
    |
    | Compatible: "laxo", "estricto", "ninguno", nulo
    |
    */

    'same_site' => 'lax',
/*
    |------------------------------------------------- -------------------------
    | Cookies particionadas
    |------------------------------------------------- -------------------------
    |
    | Establecer este valor en verdadero vinculará la cookie al sitio de nivel superior para
    | un contexto entre sitios. El navegador acepta las cookies particionadas.
    | cuando está marcado como "seguro" y el atributo Mismo sitio está establecido en "ninguno".
    |
    */
    'partitioned' => false,

];
