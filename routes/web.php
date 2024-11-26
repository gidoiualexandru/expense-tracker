<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;

Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('budgets.index')
        : redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('budgets.index');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::resource('budgets', BudgetController::class);

    Route::get('expenses/create/{budget_id}', [ExpenseController::class, 'create'])->name('expenses.create');
    Route::get('expenses/{budget_id}', [ExpenseController::class, 'index'])->name('expenses.index');
    Route::post('expenses', [ExpenseController::class, 'store'])->name('expenses.store');
    Route::get('expenses/{expense}/edit', [ExpenseController::class, 'edit'])->name('expenses.edit');
    Route::put('expenses/{expense}', [ExpenseController::class, 'update'])->name('expenses.update');
    Route::delete('expenses/{expense}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');
    Route::get('/income/create/{type}', [IncomeController::class, 'create'])->name('income.create');
    Route::post('/income', [IncomeController::class, 'store'])->name('income.store');
    Route::get('/income', [IncomeController::class, 'index'])->name('income.index');
    Route::get('/income', [IncomeController::class, 'index'])->name('income.index');
    Route::get('/income/create/{type}', [IncomeController::class, 'create'])->name('income.create');
    Route::post('/income', [IncomeController::class, 'store'])->name('income.store');
    Route::get('/income/{income}/edit', [IncomeController::class, 'edit'])->name('income.edit');
    Route::put('/income/{income}', [IncomeController::class, 'update'])->name('income.update');
    Route::delete('/income/{income}', [IncomeController::class, 'destroy'])->name('income.destroy');
});

require __DIR__ . '/auth.php';