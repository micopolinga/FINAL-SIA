<?php
use App\Http\Controllers\ShirtController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['shirts' => []]);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/scanner', function () {
    return view('scanner');
})->name('scanner');

Route::get('/shirts', [ShirtController::class, 'index'])->name('shirts.index');

// Route::get('/shirts', function () {
//     return view('shirt');
// });

Route::get('/shirts/pdf', [ShirtController::class, 'pdf']);


Route::get('/shirts/csv-all', [ShirtController::class, 'generateCSV']);


Route::post('/shirts/import-csv', [ShirtController::class, 'importCsv'])->name('shirts.import.csv');
