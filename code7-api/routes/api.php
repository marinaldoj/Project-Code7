<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\DebtController;


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('debts')->group(function () {
    Route::post('/addNewDebt', [DebtController::class, 'createNewDebt']);
    Route::put('/updateDebt/{id}', [DebtController::class, 'updateDebt']);
    Route::delete('/deleteDebt/{id}', [DebtController::class, 'deleteDebt']);
    Route::get('/{id}', [DebtController::class, 'getAllDebts']);

});
