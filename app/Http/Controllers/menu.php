<?php
/**
 *
 */
define( "MENU" ,
[
    [
        "id"        => "p1",
        "nombre"    => "Link 1",
        "search"    => 1,
        "icono"     => "<i class='nav-icon fas fa-home'></i>",
        "submenu"   => [
            [
                "nombre"    => "Contenido",
                "icono"     => "<i class='nav-icon fas fa-file-contract'></i>",
                "url"       => route('contenido.edit', ['seccion' => 'p1'])
            ],[
                "nombre"    => "Slider",
                "icono"     => '<i class="far fa-images"></i>',
                "url"       => route('slider.index', ['seccion' => 'p1'])
            ]
        ],
        "ok"        => 1
    ],
    [
        "id"        => "p2",
        "nombre"    => "Link 2",
        "search"    => 1,
        "icono"     => '<i class="fas fa-question-circle"></i>',
        "submenu"   => [
            [
                "nombre"    => "Contenido",
                "icono"     => "<i class='nav-icon fas fa-file-contract'></i>",
                "url"       => route('contenido.edit', ['seccion' => 'p2'])
            ],[
                "nombre"    => "Slider",
                "icono"     => '<i class="far fa-images"></i>',
                "url"       => route('slider.index', ['seccion' => 'p2'])
            ]
        ],
        "ok"        => 1
    ],
    [
        "id"        => "p3",
        "nombre"    => "Link 3",
        "search"    => 1,
        "icono"     => '<i class="fas fa-exclamation"></i>',
        "submenu"   => [
            [
                "nombre"    => "Categorías",
                "icono"     => "<i class='fas fa-certificate'></i>",
                "url"       => route('categorias.index')
            ],[
                "nombre"    => "Productos",
                "icono"     => '<i class="fas fa-archive"></i>',
                "url"       => route('productos.index')
            ]
        ],
        "ok"        => 1
    ],
    [
        "id"        => "p4",
        "nombre"    => "Link 4",
        "search"    => 1,
        "icono"     => '<i class="fas fa-store"></i>',
        "url"       => route('contenido.edit', ['seccion' => 'p4']),
        "ok"        => 1
    ],
    [
        "id"        => "p5",
        "nombre"    => "Link 5",
        "search"    => 1,
        "icono"     => '<i class="fas fa-store"></i>',
        "url"       => route('sectores.index'),
        "ok"        => 1
    ],
    [
        "id"        => "p6",
        "nombre"    => "Link 6",
        "search"    => 1,
        "icono"     => '<i class="fas fa-store"></i>',
        "url"       => route('contenido.edit', ['seccion' => 'p6']),
        "ok"        => 1
    ],
    [
        "separar"   => 1
    ]
]
);
