@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white py-10 px-4">
    <h1 class="text-2xl font-bold text-blue-600 mb-6">
        Add {{ ucfirst($type) }} Income
    </h1>

    <form action="{{ route('income.store') }}" method="POST" class="max-w-md mx-auto bg-blue-50 p-6 rounded-lg shadow-md">
        @csrf
        <input type="hidden" name="type" value="{{ $type }}">
        <div class="mb-4">
            <label for="source" class="block text-sm font-bold text-blue-600 mb-2">Source</label>
            <input type="text" id="source" name="source" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="amount" class="block text-sm font-bold text-blue-600 mb-2">Amount</label>
            <input type="number" id="amount" name="amount" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="date" class="block text-sm font-bold text-blue-600 mb-2">Date</label>
            <input type="date" id="date" name="date" class="w-full px-3 py-2 border rounded" required>
        </div>
        <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white font-bold rounded">Save {{ ucfirst($type) }} Income</button>
    </form>
</div>
@endsection
