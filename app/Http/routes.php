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

  Route::get('/faq', [
    'as'    => 'faq',
    'uses'  => 'FaqController@index'
  ]);

  Route::group(['prefix' => 'ComienzaYA', 'as' => 'startnow.'], function() {
    Route::get('/', [
      'as'    => 'index',
      'uses'  => 'StartNowController@index'
    ]);

    Route::post('/send', [
      'as'    => 'send',
      'uses'  => 'StartNowController@send'
    ]);

    Route::post('/mail', [
      'as'    => 'mail',
      'uses'  => 'StartNowController@mail'
    ]);
  });

  Route::group(['prefix' => 'enterprises', 'as' => 'enterprise.'], function() {
    Route::get('/{enterprise}/description.json', [
      'as'    =>  'description',
      'uses'  =>  'EnterprisesController@description'
    ]);

    Route::group(['prefix' => '{enterprise}/download', 'as' => 'download.'], function() { 
      Route::get('description', [
        'as'    =>  'description',
        'uses'  =>  'EnterprisesController@download_description'
      ]);
    });
  });
});
