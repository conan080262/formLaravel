<?php
use App\Http\Middleware\CheckAdmin;
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
    return view('welcome');
});

Route::prefix('product')->group(function(){
    Route::get('/{id}/{dbName}','ProductController@index')->middleware(CheckAdmin::class,'year');
});

// Route::group(['middleware' => ['admin']], function () {
//     Route::prefix('product')->group(function(){
//         Route::get('/{id}/{dbName}','ProductController@index');
//     });
// });
//Route::resource('product', 'ProductController');



