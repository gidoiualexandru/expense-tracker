<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BudgetController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $budgets = Auth::user()->budgets()->with('expenses')->get();
        $totalExpenses = $budgets->sum(fn($budget) => $budget->expenses->sum('amount'));
        $remainingBudget = $budgets->sum('total_amount') - $totalExpenses;
        $highestBudget = $budgets->max('total_amount');
        $chartLabels = $budgets->pluck('name')->toArray(); // Budget names
        $chartData = $budgets->map(fn($budget) => $budget->expenses->sum('amount'))->toArray(); // Total expenses per budget

        return view('budgets.index', compact('budgets', 'totalExpenses', 'remainingBudget', 'highestBudget', 'chartLabels', 'chartData'));
    }

    public function create()
    {
        return view('budgets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'total_amount' => 'required|numeric|min:0',
        ]);

        Auth::user()->budgets()->create($request->only('name', 'total_amount'));

        return redirect()->route('budgets.index')->with('success', 'Budget created successfully.');
    }

    public function show(Budget $budget)
    {
        $this->authorize('view', $budget);
        return redirect()->route('expenses.index', $budget->id);
    }

    public function edit(Budget $budget)
    {
        $this->authorize('update', $budget);
        return view('budgets.edit', compact('budget'));
    }

    public function update(Request $request, Budget $budget)
    {
        $this->authorize('update', $budget);

        $request->validate([
            'name' => 'required',
            'total_amount' => 'required|numeric|min:0',
        ]);

        $budget->update($request->only('name', 'total_amount'));

        return redirect()->route('budgets.index')->with('success', 'Budget updated successfully.');
    }

    public function destroy(Budget $budget)
    {
        $this->authorize('delete', $budget);
        $budget->delete();

        return redirect()->route('budgets.index')->with('success', 'Budget deleted successfully.');
    }
}
