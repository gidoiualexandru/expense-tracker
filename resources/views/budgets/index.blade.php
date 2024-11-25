@extends('layouts.app')

@section('title', 'My Budgets')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">My Budgets</h1>
    <a href="{{ route('budgets.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Budget</a>
</div>

@if($budgets->count())
    <div class="bg-white shadow rounded">
        <table class="min-w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Total Amount</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($budgets as $budget)
                    <tr>
                        <td class="border px-4 py-2">{{ $budget->name }}</td>
                        <td class="border px-4 py-2">${{ number_format($budget->total_amount, 2) }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('expenses.index', $budget->id) }}" class="text-blue-500">View Expenses</a>
                            <a href="{{ route('budgets.edit', $budget) }}" class="ml-2 text-green-500">Edit</a>
                            <form action="{{ route('budgets.destroy', $budget) }}" method="POST" class="inline ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500" onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <p>You have no budgets yet.</p>
@endif
@endsection
