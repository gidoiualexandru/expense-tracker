@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto mt-10">
    <h1 class="text-3xl font-bold mb-8 text-center">Savings Goals</h1>

    <div class="flex justify-end mb-5">
        <a href="{{ route('savings.create') }}" class="px-6 py-2 bg-blue-500 text-white rounded shadow hover:bg-blue-600">+ Add New Goal</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($savingsGoals as $goal)
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4">{{ $goal->name }}</h2>
                <p class="text-gray-600 mb-2">Target: <span class="font-medium">{{ number_format($goal->target_amount, 2) }} RON</span></p>
                <p class="text-gray-600 mb-2">Current: <span class="font-medium">{{ number_format($goal->current_amount, 2) }} RON</span></p>
                <p class="text-gray-600 mb-4">Due Date: <span class="font-medium">{{ $goal->due_date }}</span></p>

                <div class="mb-4">
                    <div class="relative w-full h-4 bg-gray-200 rounded">
                        <div class="absolute top-0 left-0 h-4 bg-blue-500 rounded" style="width: {{ $goal->progress }}%;"></div>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">{{ number_format($goal->progress, 2) }}% complete</p>
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('savings.edit', $goal->id) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('savings.destroy', $goal->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-500">
                No savings goals found.
            </div>
        @endforelse
    </div>
</div>
@endsection
