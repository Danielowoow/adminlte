<?php

return [
    /*
    |------------------------------------------------- -------------------------
    | Ver rutas de almacenamiento
    |------------------------------------------------- -------------------------
    |
    | La mayoría de los sistemas de plantillas cargan plantillas desde el disco. Aquí puedes especificar
    | una serie de rutas que deben comprobarse para sus vistas. Por supuesto
    | la ruta de vista habitual de Laravel ya ha sido registrada para usted.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |------------------------------------------------- -------------------------
    | Ruta de vista compilada
    |------------------------------------------------- -------------------------
    |
    | Esta opción determina dónde estarán todas las plantillas Blade compiladas.
    | almacenado para su aplicación. Normalmente, esto se encuentra dentro del almacenamiento.
    | directorio. Sin embargo, como siempre, eres libre de cambiar este valor.
    |
    */

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

];
