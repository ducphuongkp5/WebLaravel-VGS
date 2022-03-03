<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/info', function (){
//     return view('info');
// });

// Route::get('/admin',function(){
//     return view('admin');
// });

// Route::prefix('truyen')->group(function(){
//     Route::get('{slug}-{id}.html', function($slug, $id){
        
//             $content= 'Phuongw thuc id= '. $id .'<br/>';
//             $content .= 'ten '.$slug;
//             return $content;
        
//     })->where([
//         'id'=>'.+',
//         'slug'=>'0-9+'
//     ]);
// });

Route::get('/', 'HomeController@index')->name('home');


Route::get('/truyentranh/{slug}', 'HomeController@product')->name('product-detail');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::post('/delete', [AdminController::class, 'delete'])->name('delete');

    Route::post('/update', [AdminController::class, 'update'])->name('update');

    Route::get('/create', [AdminController::class, 'create'])->name('create');
});