<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\BranchExpenseController;
use App\Http\Controllers\BranchController;
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
    Route::get('BranchExpense/edit/{id}', [BranchExpenseController::class,'edit'])->name('BranchExpense.edit');
    Route::post('BranchExpense/update/{id}', [BranchExpenseController::class,'update'])->name('BranchExpense.update');

    Route::get('/branch',[BranchController::class,'index'])->name('branch');
    Route::get('/branch/add',[BranchController::class,'create'])->name('branch.add');
    Route::post('/branch/store',[BranchController::class,'store'])->name('branch.store');
    Route::get('/branch/edit/{id}',[BranchController::class,'edit'])->name('branch.edit');
});
