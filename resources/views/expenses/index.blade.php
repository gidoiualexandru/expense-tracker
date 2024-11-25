@extends('layouts.app')

@section('title', 'Expenses for ' . $budget->name)

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Expenses for "{{ $budget->name }}"</h1>
    <a href="{{ route('expenses.create', ['budget_id' => $budget->id]) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Expense</a>
</div>

@if($expenses->count())
    <div class="bg-white shadow rounded">
        <table class="min-w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-left">Date</th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Amount</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($expenses as $expense)
                    <tr>
                        <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($expense->date)->format('Y-m-d') }}</td>
                        <td class="border px-4 py-2">{{ $expense->name }}</td>
                        <td class="border px-4 py-2">${{ number_format($expense->amount, 2) }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('expenses.edit', $expense) }}" class="text-green-500">Edit</a>
                            <form action="{{ route('expenses.destroy', $expense) }}" method="POST" class="inline ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500" onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr class="bg-gray-100 font-bold">
                    <td colspan="2" class="border px-4 py-2 text-right">Total Expenses:</td>
                    <td class="border px-4 py-2">${{ number_format($expenses->sum('amount'), 2) }}</td>
                    <td class="border px-4 py-2"></td>
                </tr>
                <tr class="bg-gray-100 font-bold">
                    <td colspan="2" class="border px-4 py-2 text-right">Remaining Budget:</td>
                    <td class="border px-4 py-2">
                        ${{ number_format($budget->total_amount - $expenses->sum('amount'), 2) }}
                    </td>
                    <td class="border px-4 py-2"></td>
                </tr>
            </tbody>
        </table>
    </div>
@else
    <p>No expenses recorded yet.</p>
@endif
@endsection
