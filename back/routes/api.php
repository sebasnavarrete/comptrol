<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('projects', 'ProjectAPIController');

Route::resource('pay_modes', 'PayModeAPIController');

Route::resource('user_roles', 'UserRoleAPIController');

Route::resource('project_types', 'ProjectTypeAPIController');

Route::resource('project_statuses', 'ProjectStatusAPIController');

Route::resource('currencies', 'CurrencyAPIController');

Route::resource('transaction_types', 'TransactionTypeAPIController');

Route::resource('transaction_statuses', 'TransactionStatusAPIController');

Route::resource('transactions', 'TransactionAPIController');

Route::resource('users', 'UserAPIController');