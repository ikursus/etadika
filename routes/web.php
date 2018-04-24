<?php

# Route homepage
Route::get('/', 'PagesController@homepage')->name('pages.homepage');
# Route Authentication
Auth::routes();

# Ruangan admin
Route::group([], function() {

    // Halaman dashboard admin
    Route::get('/dashboard', 'PagesController@dashboard')->name('pages.dashboard');

    Route::get('/users', 'UsersController@index')->name('users.index');
    Route::get('/users/add', 'UsersController@create')->name('users.create');
    Route::post('/users/add', 'UsersController@store')->name('users.store');
    Route::get('/users/{id}/edit', 'UsersController@edit')->name('users.edit');

    # Halaman students
    Route::get('/students', 'StudentsController@index')->name('students.index');
    Route::get('/students/{id}/edit', 'StudentsController@edit')->name('students.edit');

    # Halaman permohonan
    Route::get('/permohonan', 'PermohonanController@index')->name('permohonan.index');
    Route::get('/permohonan/{id}/edit', 'PermohonanController@edit')->name('permohonan.edit');

});
