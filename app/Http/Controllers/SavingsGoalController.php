<?php

namespace App\Http\Controllers;

use App\Models\SavingsGoal;
use App\Http\Requests\SavingsGoalRequest;

class SavingsGoalController extends Controller
{
    public function index()
    {
        $savingsGoals = SavingsGoal::all();
        return view('savings.index', compact('savingsGoals'));
    }

    public function create()
    {
        return view('savings.create');
    }

    public function store(SavingsGoalRequest $request)
    {
        SavingsGoal::create($request->validated());
        return redirect()->route('savings.index')->with('success', 'Savings goal created successfully!');
    }

    public function edit(SavingsGoal $saving)
    {
        return view('savings.edit', compact('saving'));
    }

    public function update(SavingsGoalRequest $request, SavingsGoal $saving)
    {
        $saving->update($request->validated());
        return redirect()->route('savings.index')->with('success', 'Savings goal updated successfully!');
    }

    public function destroy(SavingsGoal $saving)
    {
        $saving->delete();
        return redirect()->route('savings.index')->with('success', 'Savings goal deleted successfully!');
    }
}
