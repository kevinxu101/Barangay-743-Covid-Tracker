<?php

Route::redirect('/', '/login');

Route::redirect('/home', '/admin/users');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::get('users/{user}/case_record','UsersController@case_record_edit')->name('user.caserecord');
    Route::get('users/{user}/case_index','UsersController@case_index')->name('user.caseindex');
    Route::get('users/{user}/case_index/edit','UsersController@case_record_index')->name('user.case_edit');
    Route::put('users/{user}/case_record','UsersController@case_record_add')->name('user.caserecordadd');
    Route::get('users/{user}/case_index/print','UsersController@case_index_print')->name('user.caseindex_print');
    Route::put('users/{user}/case_record/edit','UsersController@case_record_put_edit')->name('user.caserecord_put_edit');
    Route::resource('users', 'UsersController');

    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');

    Route::resource('products', 'ProductsController');
});
