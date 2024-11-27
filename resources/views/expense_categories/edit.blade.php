@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Edit Expense Category</h1>
    <form action="{{ route('expense-categories.update', $expenseCategory) }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold">Name</label>
            <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $expenseCategory->name }}" required>
        </div>
        <div class="mb-4">
            <label for="budgeted_amount" class="block text-gray-700 font-bold">Expected Expense</label>
            <input type="number" name="budgeted_amount" id="budgeted_amount" step="0.01" class="border rounded w-full py-2 px-3 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $expenseCategory->budgeted_amount }}">
        </div>
        <div class="mb-4">
            <label for="actual_expense" class="block text-gray-700 font-bold">Actual Expense</label>
            <input type="number" name="actual_expense" id="actual_expense" step="0.01" class="border rounded w-full py-2 px-3 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $expenseCategory->actual_expense }}">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition transform hover:scale-105">
            Update
        </button>
    </form>
</div>
@endsection