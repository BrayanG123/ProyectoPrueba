<?php


Route::get('/', 'TestController@welcome');

Route::get('/prueba', function (){
    return 'Ruta de prueba';
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
