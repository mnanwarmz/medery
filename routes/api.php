<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');

Route::get('/registered-medicines/import', 'RegisteredMedicineController@fileImport');
Route::get('/canceled-medicines/import', 'CanceledMedicineController@fileImport');
Route::get('/medicines/import', 'MedicineController@fileImport');
Route::get('/pharmacies/import', 'PharmacyController@fileImport');
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/medicines', 'MedicineController@index');
    Route::get('/registerd-medicines', 'RegisteredMedicineController@index');
    Route::get('/canceled-medicines', 'CanceledMedicineController@index');
    Route::get('/pharmacies', 'PharmacyController@index');
});
