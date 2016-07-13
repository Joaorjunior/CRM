<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::group (['prefix' => 'admin','middleware' => 'auth.checkrole' , 'as' => 'admin.'], function() {

    Route::get('clients', ['as' => 'clients.index', 'uses' => 'ClientsController@index']);
    Route::get('clients/create', ['as' => 'clients.create', 'uses' => 'ClientsController@create']);
    Route::get('clients/edit/{id}', ['as' => 'clients.edit', 'uses' => 'ClientsController@edit']);
    Route::post('clients/update/{id}', ['as' => 'clients.update', 'uses' => 'ClientsController@update']);
    Route::post('clients/store', ['as' => 'clients.store', 'uses' => 'ClientsController@store']);
    Route::get('clients/destroy/{id}', ['as' => 'clients.destroy', 'uses' => 'ClientsController@destroy']);


    Route::get('tickets', ['as' => 'tickets.index', 'uses' => 'TicketsController@index']);
    Route::get('tickets/create', ['as' => 'tickets.create', 'uses' => 'TicketsController@create']);
    Route::get('tickets/edit/{id}', ['as' => 'tickets.edit', 'uses' => 'TicketsController@edit']);
    Route::post('tickets/update/{id}', ['as' => 'tickets.update', 'uses' => 'TicketsController@update']);
    Route::post('tickets/store', ['as' => 'tickets.store', 'uses' => 'TicketsController@store']);
    Route::get('tickets/destroy/{id}', ['as' => 'tickets.destroy', 'uses' => 'TicketsController@destroy']);

    Route::get('contacts', ['as' => 'contacts.index', 'uses' => 'ContactsController@index']);
    Route::get('contacts/create', ['as' => 'contacts.create', 'uses' => 'ContactsController@create']);
    Route::get('contacts/edit/{id}', ['as' => 'contacts.edit', 'uses' => 'ContactsController@edit']);
    Route::post('contacts/update/{id}', ['as' => 'contacts.update', 'uses' => 'ContactsController@update']);
    Route::post('contacts/store', ['as' => 'contacts.store', 'uses' => 'ContactsController@store']);
    Route::get('contacts/destroy/{id}', ['as' => 'contacts.destroy', 'uses' => 'ContactsController@destroy']);



    Route::get('logs', ['as' => 'logs.index', 'uses' => 'LogsController@index']);
    Route::get('logs/edit/{id}', ['as' => 'logs.edit', 'uses' => 'LogsController@edit']);
    Route::post('logs/update/{id}', ['as' => 'logs.update', 'uses' => 'LogsController@update']);



});
