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

Route::group(['as' => 'site.'], function() {

  Route::get('/', [
    'as'    => 'index',
    'uses'  => 'WelcomeController@index'
  ]);

  Route::group(['prefix' => 'startnow', 'as' => 'startnow.'], function() {
    Route::post('/send', [
      'as'    => 'send',
      'uses'  => 'StartNowController@send'
    ]);
  });

  Route::group(['prefix' => 'enterprises', 'as' => 'enterprises.'], function() {
    Route::get('/{enterprise}/description.json', [
      'as'    =>  'description',
      'uses'  =>  'EnterprisesController@description'
    ]);
  });
});
