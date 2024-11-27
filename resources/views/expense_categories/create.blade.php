@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Create Expense Category</h1>
    <form action="{{ route('expense-categories.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold">Name</label>
            <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter category name" required>
        </div>
        <div class="mb-4">
            <label for="budgeted_amount" class="block text-gray-700 font-bold">Expected Expense</label>
            <input type="number" name="budgeted_amount" id="budgeted_amount" step="0.01" class="border rounded w-full py-2 px-3 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter expected expense (optional)">
        </div>
        <div class="mb-4">
            <label for="actual_expense" class="block text-gray-700 font-bold">Actual Expense</label>
            <input type="number" name="actual_expense" id="actual_expense" step="0.01" class="border rounded w-full py-2 px-3 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter actual expense (optional)">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition transform hover:scale-105">
            Save
        </button>
    </form>
</div>
@endsection
