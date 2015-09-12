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

Route::get('admin', 'Admin\DashboardController@index');

Route::controller('admin/survey', 'Admin\SurveyController', [
    'getIndex' => 'admin.survey.list',
    'getCreate' => 'admin.survey.create',
    'postSave' => 'admin.survey.save'
]);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::get('admin', 'Admin\DashboardController@index');