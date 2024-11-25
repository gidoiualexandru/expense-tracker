@extends('layouts.app')

@section('title', 'Edit Expense')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Expense</h1>

@if ($errors->any())
    <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
        <ul>
            @foreach ($errors->all() as $error)
                <li>- {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('expenses.update', $expense) }}" method="POST" class="bg-white shadow rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    @method('PUT')
    <input type="hidden" name="budget_id" value="{{ $expense->budget_id }}">
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Expense Name</label>
        <input type="text" name="name" id="name" class="w-full p-2 border rounded" value="{{ old('name', $expense->name) }}" required>
    </div>
    <div class="mb-4">
        <label for="amount" class="block text-gray-700 font-bold mb-2">Amount</label>
        <input type="number" name="amount" id="amount" class="w-full p-2 border rounded" step="0.01" value="{{ old('amount', $expense->amount) }}" required>
    </div>
    <div class="mb-4">
        <label for="date" class="block text-gray-700 font-bold mb-2">Date</label>
        <input type="date" name="date" id="date" class="w-full p-2 border rounded" value="{{ \Carbon\Carbon::parse($expense->date)->format('Y-m-d') }" required>
    </div>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update Expense</button>
</form>
@endsection
