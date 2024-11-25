<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Budget;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    use AuthorizesRequests;

    public function index($budget_id)
    {
        $budget = Budget::findOrFail($budget_id);
        $this->authorize('view', $budget);

        $expenses = $budget->expenses;
        return view('expenses.index', compact('expenses', 'budget'));
    }

    public function create($budget_id)
    {
        $budget = Budget::findOrFail($budget_id);
        $this->authorize('view', $budget);

        return view('expenses.create', compact('budget'));
    }

    public function store(Request $request)
    {
        $budget = Budget::findOrFail($request->budget_id);
        $this->authorize('update', $budget);

        $request->validate([
            'name' => 'required',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);

        $budget->expenses()->create($request->only('name', 'amount', 'date'));

        return redirect()->route('expenses.index', $budget->id)->with('success', 'Expense added successfully.');
    }

    public function edit(Expense $expense)
    {
        $budget = $expense->budget;
        $this->authorize('update', $budget);

        return view('expenses.edit', compact('expense'));
    }

    public function update(Request $request, Expense $expense)
    {
        $budget = $expense->budget;
        $this->authorize('update', $budget);

        $request->validate([
            'name' => 'required',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);

        $expense->update($request->only('name', 'amount', 'date'));

        return redirect()->route('expenses.index', $budget->id)->with('success', 'Expense updated successfully.');
    }

    public function destroy(Expense $expense)
    {
        $budget = $expense->budget;
        $this->authorize('delete', $budget);

        $expense->delete();

        return redirect()->route('expenses.index', $budget->id)->with('success', 'Expense deleted successfully.');
    }
}
