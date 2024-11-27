<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use Illuminate\Http\Request;

class ExpenseCategoryController extends Controller
{
    public function index()
    {
        $categories = ExpenseCategory::all();
        return view('expense_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('expense_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'budgeted_amount' => 'required|numeric|min:0',
            'actual_expense' => 'nullable|numeric|min:0',
        ]);

        ExpenseCategory::create($request->all());
        return redirect()->route('expense-categories.index');
    }

    public function edit(ExpenseCategory $expenseCategory)
    {
        return view('expense_categories.edit', compact('expenseCategory'));
    }

    public function update(Request $request, ExpenseCategory $expenseCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'budgeted_amount' => 'required|numeric|min:0',
            'actual_expense' => 'nullable|numeric|min:0',
        ]);

        $expenseCategory->update($request->all());
        return redirect()->route('expense-categories.index');
    }

    public function destroy(ExpenseCategory $expenseCategory)
    {
        $expenseCategory->delete();
        return redirect()->route('expense-categories.index');
    }
}
