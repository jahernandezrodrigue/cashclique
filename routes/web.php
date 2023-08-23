<?php

use Illuminate\Support\Facades\Route;

// controllers
use App\Http\Controllers\GenerateCrudController;

// finance
use App\Http\Livewire\Finance\BudgetTypes\IndexBudgetTypes;
use App\Http\Livewire\Finance\Budgets\IndexBudgets;
use App\Http\Livewire\Finance\ExpenseTypes\IndexExpenseTypes;
use App\Http\Livewire\Finance\Expenses\IndexExpenses;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('generate', [GenerateCrudController::class, 'index'])->name('generate');

    //finance
    Route::get('/budgettypes', IndexBudgetTypes::class)->name('budgettypes');
    Route::get('/budgets', IndexBudgets::class)->name('budgets');
    Route::get('/expensetypes', IndexExpenseTypes::class)->name('expensetypes');
    Route::get('/expenses', IndexExpenses::class)->name('expenses');
});
