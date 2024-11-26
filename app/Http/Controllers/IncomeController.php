<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        $expectedIncomes = Income::where('type', 'expected')->get();
        $actualIncomes = Income::where('type', 'actual')->get();

        $totalExpected = $expectedIncomes->sum('amount');
        $totalActual = $actualIncomes->sum('amount');
        $difference = $totalActual - $totalExpected;

        return view('income.index', compact('expectedIncomes', 'actualIncomes', 'totalExpected', 'totalActual', 'difference'));
    }

    public function create($type)
    {
        if (!in_array($type, ['expected', 'actual'])) {
            abort(404);
        }

        return view('income.create', compact('type'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'source' => 'required|string|max:255',
            'type' => 'required|in:expected,actual',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);

        Income::create($request->all());

        return redirect()->route('income.index')->with('success', ucfirst($request->type) . ' income added successfully.');
    }

    public function edit(Income $income)
    {
        return view('income.edit', compact('income'));
    }

    public function update(Request $request, Income $income)
    {
        $request->validate([
            'source' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);

        $income->update($request->all());

        return redirect()->route('income.index')->with('success', 'Income updated successfully.');
    }

    public function destroy(Income $income)
    {
        $income->delete();

        return redirect()->route('income.index')->with('success', 'Income deleted successfully.');
    }
}
