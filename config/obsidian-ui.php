<?php

return
[
    /*
    |--------------------------------------------------------------------------
    | Obsidian UI - Template
    |--------------------------------------------------------------------------
    */

    'template' =>
    [
        'layout'   => env('OBSIDIAN_UI_LAYOUT','leonardo'),
        'palette'  => env('OBSIDIAN_UI_PALETTE','minimal'),
        'sidebars' => env('OBSIDIAN_UI_SIDEBARS','standard'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Obsidian UI - Button
    |--------------------------------------------------------------------------
    */

    'button' =>
    [
        'rounded' => env('OBSIDIAN_UI_BUTTON_ROUNDED','rounded-full'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Obsidian UI - Code
    |--------------------------------------------------------------------------
    */

    'code' =>
    [
        'language'  => env('OBSIDIAN_UI_CODE_LANGUAGE','php'),

        'themes'    =>
        [
            'light' => env('OBSIDIAN_UI_CODE_THEME_LIGHT','github-light'),
            'dark'  => env('OBSIDIAN_UI_CODE_THEME_DARK','github-dark'),
        ]
    ]
];