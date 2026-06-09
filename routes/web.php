<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BreakdownController;

Route::get('/', function () {
    return view('home');
});

// user form
Route::get('/breakdown', [BreakdownController::class, 'create']);

Route::post('/request-breakdown', [BreakdownController::class, 'store']);

// admin view
Route::get('/admin/requests', [BreakdownController::class, 'index']);
// mechanic view
Route::get('/mechanic/requests', [BreakdownController::class, 'index']);
// update status
Route::post('/admin/update-status/{id}', [BreakdownController::class, 'updateStatus']);

require __DIR__.'/auth.php';