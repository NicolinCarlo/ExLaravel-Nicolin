<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/', function () {
     return view('welcome');
 });

 Route::get('/prodotti', function () {
    $prodotti = [
        [
            'nome' => 'Iphone 14',
            'prezzo' => '1999',
            'descrizione' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam possimus ad',
            'categoria' => 'smarthphone',
        ],
        [
            'nome' => 'Iphone 8',
            'prezzo' => '1899',
            'descrizione' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam possimus ad',
            'categoria' => 'smarthphone',
        ],
        [
            'nome' => 'Iphone x',
            'prezzo' => '1399',
            'descrizione' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam possimus ad',
            'categoria' => 'smarthphone',
        ],
        [
            'nome' => 'Iphone 12',
            'prezzo' => '1229',
            'descrizione' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam possimus ad',
            'categoria' => 'smarthphone',
        ]
        ];
    return view('prodotti',['prodotti' => $prodotti ]);
});

Route::get('/ilnostroblog', function () {
    return view('ilnostroblog');
});



