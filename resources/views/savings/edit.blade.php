@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 bg-white shadow rounded-lg p-8">
    <h1 class="text-2xl font-bold mb-6 text-center">Edit Savings Goal</h1>
    <form action="{{ route('savings.update', $saving->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Goal Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $saving->name) }}" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="target_amount" class="block text-sm font-medium text-gray-700">Target Amount (RON)</label>
            <input type="number" name="target_amount" id="target_amount" value="{{ old('target_amount', $saving->target_amount) }}" step="0.01" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('target_amount')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="current_amount" class="block text-sm font-medium text-gray-700">Current Amount (RON)</label>
            <input type="number" name="current_amount" id="current_amount" value="{{ old('current_amount', $saving->current_amount) }}" step="0.01" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('current_amount')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="due_date" class="block text-sm font-medium text-gray-700">Due Date</label>
            <input type="date" name="due_date" id="due_date" value="{{ old('due_date', $saving->due_date) }}" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('due_date')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end mt-6">
            <a href="{{ route('savings.index') }}" class="px-4 py-2 mr-4 bg-gray-500 text-white rounded shadow hover:bg-gray-600">Cancel</a>
            <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded shadow hover:bg-blue-600">Update</button>
        </div>
    </form>
</div>
@endsection
