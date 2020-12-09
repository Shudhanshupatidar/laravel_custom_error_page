<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CsvExportController;
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


Route::get('export',[CsvExportController::class, 'view']);
Route::get('export-excel',[CsvExportController::class, 'exportExcel'])->name('export.excel');

Route::get('/', function () {
    return view('welcome');
});
