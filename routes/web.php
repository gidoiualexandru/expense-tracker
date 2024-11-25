<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ExpenseController;

Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('budgets.index') // Authenticated users go to budgets
        : redirect()->route('login');       // Guests go to login
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::resource('budgets', BudgetController::class);

    Route::get('expenses/create/{budget_id}', [ExpenseController::class, 'create'])->name('expenses.create');
    Route::get('expenses/{budget_id}', [ExpenseController::class, 'index'])->name('expenses.index');
    Route::post('expenses', [ExpenseController::class, 'store'])->name('expenses.store');
    Route::get('expenses/{expense}/edit', [ExpenseController::class, 'edit'])->name('expenses.edit');
    Route::put('expenses/{expense}', [ExpenseController::class, 'update'])->name('expenses.update');
    Route::delete('expenses/{expense}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');
});

require __DIR__ . '/auth.php';