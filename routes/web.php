<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\BranchExpenseController;
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
Auth::routes(['verify' => true]);
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('Expense', ExpenseController::class);
    Route::resource('BusExpense', BranchExpenseController::class);
    // Route::resource('BranchExpense', BranchExpenseController::class);
    Route::get('BranchExpense', [BranchExpenseController::class,'index'])->name('BranchExpense.index');
    Route::get('BranchExpense/add', [BranchExpenseController::class,'add'])->name('BranchExpense.add');
    Route::post('BranchExpense/store', [BranchExpenseController::class,'store'])->name('BranchExpense.store');
});
