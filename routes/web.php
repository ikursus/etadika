<?php

# Route homepage
Route::get('/', 'PagesController@homepage')->name('pages.homepage');
# Route Authentication
Auth::routes();

# Ruangan admin
Route::group([], function() {

    // Halaman dashboard admin
    Route::get('/dashboard', 'PagesController@dashboard')->name('pages.dashboard');
    // Paparkan senarai users
    Route::get('/users', 'UsersController@index')->name('users.index');
    // Paparkan borang tambah user
    Route::get('/users/add', 'UsersController@create')->name('users.create');
    // Route untuk terima data daripada borang tambah user
    Route::post('/users/add', 'UsersController@store')->name('users.store');
    // Paparkan borang edit user
    Route::get('/users/{id}/edit', 'UsersController@edit')->name('users.edit');
    // Route terima data daripada borang edit user (update)
    Route::patch('/users/{id}/edit', 'UsersController@update')->name('users.update');


    # Halaman permohonan
    Route::get('/permohonan', 'PermohonanController@index')->name('permohonan.index');
    Route::get('/permohonan/{id}/edit', 'PermohonanController@edit')->name('permohonan.edit');

});
