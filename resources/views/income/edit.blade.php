@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white py-10 px-4">
    <h1 class="text-2xl font-bold text-blue-600 mb-6">Edit Income</h1>

    <form action="{{ route('income.update', $income) }}" method="POST" class="max-w-md mx-auto bg-blue-50 p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="source" class="block text-sm font-bold text-blue-600 mb-2">Source</label>
            <input type="text" id="source" name="source" value="{{ $income->source }}" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="amount" class="block text-sm font-bold text-blue-600 mb-2">Amount</label>
            <input type="number" id="amount" name="amount" value="{{ $income->amount }}" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="date" class="block text-sm font-bold text-blue-600 mb-2">Date</label>
            <input type="date" id="date" name="date" value="{{ $income->date }}" class="w-full px-3 py-2 border rounded" required>
        </div>
        <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white font-bold rounded">Update Income</button>
    </form>
</div>
@endsection
