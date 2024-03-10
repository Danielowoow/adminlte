<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Título
    |--------------------------------------------------------------------------
    |
    | Aquí puede cambiar el título predeterminado de su panel de administración.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección de título aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'AdminLTE 3',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |------------------------------------------------- -------------------------
    | favicon
    |------------------------------------------------- -------------------------
    |
    | Aquí puedes activar el favicon.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección de favicon aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |------------------------------------------------- -------------------------
    | Fuentes de Google
    |------------------------------------------------- -------------------------
    |
    | Aquí puedes permitir o no el uso de fuentes externas de Google. Deshabilitar el
    | Las fuentes de Google pueden ser útiles si el acceso a Internet de su panel de administración es
    | restringido de alguna manera.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección de fuentes de Google aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |------------------------------------------------- -------------------------
    | Logotipo del panel de administración
    |------------------------------------------------- -------------------------
    |
    | Aquí puede cambiar el logotipo de su panel de administración.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección del logotipo aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Admin</b>LTE',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Admin Logo',

    /*
    |------------------------------------------------- -------------------------
    | Logotipo de autenticación
    |------------------------------------------------- -------------------------
    |
    | Aquí puede configurar un logotipo alternativo para utilizarlo al iniciar sesión y registrarse.
    | pantallas. Cuando esté deshabilitado, se utilizará el logotipo del panel de administración.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección del logotipo de autenticación aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |------------------------------------------------- -------------------------
    | Animación del precargador
    |------------------------------------------------- -------------------------
    |
    | Aquí puede cambiar la configuración de la animación del precargador. Actualmente, dos
    | Se admiten modos: 'pantalla completa' para una animación del precargador en pantalla completa
    | y 'cwrapper' para adjuntar la animación del precargador al contenedor de contenido
    | elemento y evite superponerlo con las barras laterales y la barra de navegación superior.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección del precargador aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'mode' => 'fullscreen',
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'AdminLTE Preloader Image',
            'effect' => 'animation__shake',
            'width' => 60,
            'height' => 60,
        ],
    ],

    /*
    |------------------------------------------------- -------------------------
    | Menú del Usuario
    |------------------------------------------------- -------------------------
    |
    | Aquí puedes activar y cambiar el menú de usuario.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección del menú de usuario aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,
    /*
    |------------------------------------------------- -------------------------
    | Disposición
    |------------------------------------------------- -------------------------
    |
    | Aquí cambiamos el diseño de su panel de administración.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección de diseño aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => true,

    /*
|------------------------------------------------- -------------------------
    | Clases de vistas de autenticación
    |------------------------------------------------- -------------------------
    |
    | Aquí puede cambiar la apariencia y el comportamiento de las vistas de autenticación.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección de clases de autenticación aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */
    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',
    /*
    |------------------------------------------------- -------------------------
    | Clases del panel de administración
    |------------------------------------------------- -------------------------
    |
    | Aquí puede cambiar la apariencia y el comportamiento del panel de administración.
    |
    | Para obtener instrucciones detalladas, puede consultar las clases del panel de administración aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-dark navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',
    /*
    |------------------------------------------------- -------------------------
    | Barra lateral
    |------------------------------------------------- -------------------------
    |
    | Aquí podemos modificar la barra lateral del panel de administración.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección de la barra lateral aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |------------------------------------------------- -------------------------
    | Barra lateral de control (barra lateral derecha)
    |------------------------------------------------- -------------------------
    |
    | Aquí podemos modificar la barra lateral derecha, también conocida como barra lateral de control del panel de administración.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección de la barra lateral derecha aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |------------------------------------------------- -------------------------
    | URL
    |------------------------------------------------- -------------------------
    |
    | Aquí podemos modificar la configuración de la URL del panel de administración.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección de URL aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |------------------------------------------------- -------------------------
    | Mezcla de Laravel
    |------------------------------------------------- -------------------------
    |
    | Aquí podemos habilitar la opción Laravel Mix para el panel de administración.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección de mezclas de laravel aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */
    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |------------------------------------------------- -------------------------
    | Elementos de menú
    |------------------------------------------------- -------------------------
    |
    | Aquí podemos modificar la barra lateral/navegación superior del panel de administración.
    |
    | Para obtener instrucciones detalladas, puede consultar aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type' => 'navbar-search',
            'text' => 'search',
            'topnav_right' => true,
        ],
        [
            'type' => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'search',
        ],
        [
            'text' => 'blog',
            'url' => 'admin/blog',
            'can' => 'manage-blog',
        ],
        [
            'text' => 'pages',
            'url' => 'admin/pages',
            'icon' => 'far fa-fw fa-file',
            'label' => 4,
            'label_color' => 'success',
        ],
        ['header' => 'account_settings'],
        [
            'text' => 'profile',
            'url' => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'change_password',
            'url' => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ],
        [
            'text' => 'multilevel',
            'icon' => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text' => 'level_one',
                    'url' => '#',
                ],
                [
                    'text' => 'level_one',
                    'url' => '#',
                    'submenu' => [
                        [
                            'text' => 'level_two',
                            'url' => '#',
                        ],
                        [
                            'text' => 'level_two',
                            'url' => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_three',
                                    'url' => '#',
                                ],
                                [
                                    'text' => 'level_three',
                                    'url' => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'level_one',
                    'url' => '#',
                ],
            ],
        ],
        ['header' => 'labels'],
        [
            'text' => 'important',
            'icon_color' => 'red',
            'url' => '#',
        ],
        [
            'text' => 'warning',
            'icon_color' => 'yellow',
            'url' => '#',
        ],
        [
            'text' => 'information',
            'icon_color' => 'cyan',
            'url' => '#',
        ],
    ],

    /*
    |------------------------------------------------- -------------------------
    | Filtros de menú
    |------------------------------------------------- -------------------------
    |
    | Aquí podemos modificar los filtros del menú del panel de administración.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección de filtros del menú aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],
    /*
    |------------------------------------------------- -------------------------
    | Inicialización de complementos
    |------------------------------------------------- -------------------------
    |
    | Aquí podemos modificar los complementos utilizados dentro del panel de administración.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección de complementos aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |------------------------------------------------- -------------------------
    | marco flotante
    |------------------------------------------------- -------------------------
    |
    | Aquí cambiamos la configuración del modo IFrame. Tenga en cuenta que estos cambios
    | solo se aplica a la vista que se extiende y habilita el modo IFrame.
    |
    | Para obtener instrucciones detalladas, puede consultar la sección del modo iframe aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],
    /*
    |------------------------------------------------- -------------------------
    | Cable de alta tensión
    |------------------------------------------------- -------------------------
    |
    | Aquí podemos habilitar el soporte Livewire.
    |
    | Para obtener instrucciones detalladas, puede consultar el livewire aquí:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
