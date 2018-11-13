<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

// Authentication Routes...
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('countries/{locale}', 'CountryController@index')->name('get.countries');
$this->get('provinces/{id}/{locale}', 'ProvinceController@index')->name('get.provinces');
$this->post('register', 'Auth\RegisterController@create')->name('user.create');
$this->get('active-account/{code}', 'Auth\RegisterController@activeAccount')->name('user.active.mail');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');
$this->get('/material/color', 'MaterialColorController@index')->name('material.color');

// Update Profile Routes...
$this->get('user-information', 'ProfileController@index')->name('profile.update');
$this->post('user-information', 'ProfileController@update')->name('profile.updated');
$this->post('change-password', 'ProfileController@changePassword')->name('profile.change-password');

// Get alpha for color gradient setting...
Route::get('/get-alpha-color-setting', 'SettingColorGradient@index')->name('get-alpha-color-setting');

// API routes
Route::get('/api/material-surveys', 'MaterialSurveyController@show')->name('material.show');
Route::get('/api/material-surveys-session', 'MaterialSurveyController@showMaterialSession')->name('material.show_material_session');
Route::post('/api/material-surveys', 'MaterialSurveyController@create')->name('material.create');
Route::post('/api/expression', 'ExpressionController@update')->name('expression.update');
Route::post('/api/expression-recipe', 'ExpressionController@updateExpressionWhenRecipeSurvey')->name('expression_recipe.update');

Route::get('/api/recipe-surveys', 'RecipeSurveyController@show')->name('recipe.show');
Route::get('/api/recipe-surveys-session', 'RecipeSurveyController@showRecipeSession')->name('recipe.show_recipe_session');
Route::post('/api/recipe-surveys', 'RecipeSurveyController@create')->name('recipe.create');

Route::fallback(function () {
    return view('layouts.app');
});

// Admin routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/download', 'DownloadController@showDownloadForm');
    Route::post('/download', 'DownloadController@download')->name('download');
});
