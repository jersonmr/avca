<?php

// Rutas para el frontend del módulo de Recursos Humanos de AVCA
Route::group(['prefix' => 'backend', 'middleware' => 'auth'], function() {
    Route::get('admin', 'rrhh\BackendController@dashboard')->name('dashboard');
});
