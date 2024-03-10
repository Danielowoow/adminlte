<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    /*
    |------------------------------------------------- -------------------------
    | Nombre de la aplicación
    |------------------------------------------------- -------------------------
    |
    | Este valor es el nombre de su aplicación. Este valor se utiliza cuando el
    | framework necesita colocar el nombre de la aplicación en una notificación o
    | cualquier otra ubicación según lo requiera la aplicación o sus paquetes.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |------------------------------------------------- -------------------------
    | Entorno de aplicación
    |------------------------------------------------- -------------------------
    |
    | Este valor determina el "entorno" en el que se encuentra actualmente su aplicación.
    | ejecutándose. Esto puede determinar cómo prefiere configurar varios
    | servicios que utiliza la aplicación. Configure esto en su archivo ".env".
    |
    */

    'env' => env('APP_ENV', 'production'),
    /*
    |------------------------------------------------- -------------------------
    | Modo de depuración de aplicaciones
    |------------------------------------------------- -------------------------
    |
    | Cuando su aplicación está en modo de depuración, aparecen mensajes de error detallados con
    | Los seguimientos de la pila se mostrarán en cada error que ocurra dentro de su
    | solicitud. Si está deshabilitado, se muestra una página de error genérica simple.
    |
    */
    'debug' => (bool) env('APP_DEBUG', false),
    /*
    |------------------------------------------------- -------------------------
    | URL de la aplicación
    |------------------------------------------------- -------------------------
    |
    | La consola utiliza esta URL para generar URL correctamente cuando se utiliza
    | la herramienta de línea de comando Artisan. Deberías configurar esto en la raíz de
    | su aplicación para que se utilice al ejecutar tareas de Artisan.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

    /*
    |------------------------------------------------- -------------------------
    | Zona horaria de la aplicación
    |------------------------------------------------- -------------------------
    |
    | Aquí puede especificar la zona horaria predeterminada para su aplicación, que
    | será utilizado por las funciones de fecha y hora de PHP. Nos hemos ido
    | adelante y configúrelo en un valor predeterminado sensato para usted listo para usar.
    |
    */

    'timezone' => 'UTC',

    /*
    |------------------------------------------------- -------------------------
    | Configuración regional de la aplicación
    |------------------------------------------------- -------------------------
    |
    | La configuración regional de la aplicación determina la configuración regional predeterminada que se utilizará.
    | por el proveedor de servicios de traducción. Eres libre de establecer este valor
    | a cualquiera de las configuraciones regionales que serán compatibles con la aplicación.
    |
    */

    'locale' => 'en',

    /*
    |------------------------------------------------- -------------------------
    | Configuración regional alternativa de la aplicación
    |------------------------------------------------- -------------------------
    |
    | La configuración regional alternativa determina la configuración regional que se utilizará cuando la actual
    | no está disponible. Puede cambiar el valor para que corresponda a cualquiera de
    | las carpetas de idiomas que se proporcionan a través de su aplicación.
    |
    */

    'fallback_locale' => 'en',

    /*
    |------------------------------------------------- -------------------------
    | Localización falsa
    |------------------------------------------------- -------------------------
    |
    | Esta configuración regional será utilizada por la biblioteca PHP Faker al generar archivos falsos.
    | datos para las semillas de su base de datos. Por ejemplo, esto se utilizará para obtener
    | números de teléfono localizados, información de direcciones y más.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |------------------------------------------------- -------------------------
    | Clave de encriptación
    |------------------------------------------------- -------------------------
    |
    | Esta clave la utiliza el servicio de cifrado Illuminate y debe configurarse
    | a una cadena aleatoria de 32 caracteres; de lo contrario, estas cadenas cifradas
    | no estará a salvo. ¡Haga esto antes de implementar una aplicación!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |------------------------------------------------- -------------------------
    | Controlador del modo de mantenimiento
    |------------------------------------------------- -------------------------
    |
    | Estas opciones de configuración determinan el controlador utilizado para determinar y
    | gestionar el estado del "modo de mantenimiento" de Laravel. El controlador de "caché"
    | Permite controlar el modo de mantenimiento en varias máquinas.
    |
    | Controladores compatibles: "archivo", "caché"
    |
    */

    'maintenance' => [
        'driver' => 'file',
        // 'store' => 'redis',
    ],

    /*
    |------------------------------------------------- -------------------------
    | Proveedores de servicios cargados automáticamente
    |------------------------------------------------- -------------------------
    |
    | Los proveedores de servicios enumerados aquí se cargarán automáticamente en el
    | solicitud a su solicitud. Siéntase libre de agregar sus propios servicios a
    | esta matriz para otorgar funcionalidad ampliada a sus aplicaciones.
    |
    */

    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
    ])->toArray(),
    /*
    |------------------------------------------------- -------------------------
    | Alias ​​de clase
    |------------------------------------------------- -------------------------
    |
    | Esta matriz de alias de clase se registrará cuando esta aplicación
    | Está empezado. Sin embargo, siéntete libre de registrar tantos como desees.
    | los alias se cargan de forma "lenta" para que no obstaculicen el rendimiento.
    |
    */

    'aliases' => Facade::defaultAliases()->merge([
        // 'Example' => App\Facades\Example::class,
    ])->toArray(),

];
