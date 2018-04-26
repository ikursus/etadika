<?php

# Route homepage
Route::get('/', 'PagesController@homepage')->name('pages.homepage');
# Route Authentication
Auth::routes();

// Route::get('/home', function () {
//     return redirect()->route('pages.dashboard');
// });
// Route::redirect('/home', '/dashboard');

# Ruangan admin
    Route::group(['middleware' => 'auth'], function() {

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
    // Route untuk hapuskan rekod
    Route::delete('/users/{id}', 'UsersController@destroy')->name('users.destroy');


    # Halaman permohonan
    Route::get('/permohonan', 'PermohonanController@index')->name('permohonan.index');
    Route::get('/permohonan/add', 'PermohonanController@create')->name('permohonan.create');
    Route::post('/permohonan/add', 'PermohonanController@store')->name('permohonan.store');
    Route::get('/permohonan/{id}/edit', 'PermohonanController@edit')->name('permohonan.edit');
    Route::patch('/permohonan/{id}/edit', 'PermohonanController@update')->name('permohonan.update');
    Route::delete('/permohonan/{id}', 'PermohonanController@destroy')->name('permohonan.destroy');

    # Maklumat Role
    Route::get('/roles', 'RolesController@index')->name('roles.index');
    Route::get('/roles/add', 'RolesController@create')->name('roles.create');
    Route::post('/roles/add', 'RolesController@store')->name('roles.store');
    Route::get('/roles/{id}/edit', 'RolesController@edit')->name('roles.edit');
    Route::patch('/roles/{id}/edit', 'RolesController@update')->name('roles.update');
    Route::delete('/roles/{id}', 'RolesController@destroy')->name('roles.destroy');

});
