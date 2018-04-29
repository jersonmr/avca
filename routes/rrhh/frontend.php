<?php

// Rutas para el frontend del módulo de Recursos Humanos de AVCA
Route::group(['prefix' => 'frontend', 'middleware' => 'guest'], function() {
   Route::get('/', 'rrhh\FrontendController@home')->name('home');
});
