<?php

use App\Http\Controllers\Admincontroller;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', [Admincontroller::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/addnewrecord', [Admincontroller::class, 'addnewrecord'])->name('addnewrecord')->middleware(['auth']);
Route::post('/addnewrecorddb', [AdminController::class, 'addnewrecord_db']);

Route::get('/aed_to_pkr', [Admincontroller::class, 'aed_to_pkr'])->name('aed_to_pkr')->middleware(['auth']);
Route::get('/creditbook', [Admincontroller::class, 'creditbook'])->name('creditbook')->middleware(['auth']);

Route::post('editaedtopkcredit', [AdminController::class, 'editaedtopkcredit'])->middleware(['auth'])->name('editaedtopkcredit');
Route::post('editaedtopkcreditdb', [AdminController::class, 'editaedtopkcreditdb'])->middleware(['auth'])->name('editaedtopkcreditdb');
Route::get('deleteaedtopkrecord/{id}', [Admincontroller::class, 'deleteaedtopkrecord'])->middleware(['auth'])->name('deleteaedtopkrecord');

// second pkr module
Route::get('/addpkrnewrecord', [Admincontroller::class, 'addpkrnewrecord'])->name('addpkrnewrecord')->middleware(['auth']);
Route::post('/addpkrnewrecorddb', [AdminController::class, 'addpkrnewrecorddb']);
Route::get('/pkr_to_aed', [Admincontroller::class, 'pkr_to_aed'])->name('pkr_to_aed')->middleware(['auth']);
Route::get('/pkrcreditbook', [Admincontroller::class, 'pkrcreditbook'])->name('pkrcreditbook')->middleware(['auth']);
Route::post('editpkrtoaedcredit', [AdminController::class, 'editpkrtoaedcredit'])->middleware(['auth'])->name('editpkrtoaedcredit');
Route::post('editpkrtoaedcreditdb', [AdminController::class, 'editpkrtoaedcreditdb'])->middleware(['auth'])->name('editpkrtoaedcreditdb');








require __DIR__.'/auth.php';
