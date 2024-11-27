@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6 text-center">Expense Categories</h1>
    <a href="{{ route('expense-categories.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition transform hover:scale-105 mb-4 inline-block">
        Add Category
    </a>
    <table class="table-auto w-full border border-gray-300 rounded-lg shadow-lg overflow-hidden mt-4">
        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Expected Expense</th>
                <th class="px-4 py-2">Actual Expense</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr class="hover:bg-gray-100 transition">
                <td class="border px-4 py-2">{{ $category->name }}</td>
                <td class="border px-4 py-2">₦{{ number_format($category->budgeted_amount, 2) }}</td>
                <td class="border px-4 py-2">₦{{ number_format($category->actual_expense, 2) }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('expense-categories.edit', $category) }}" class="text-yellow-500 font-bold hover:underline mr-2">Edit</a>
                    <form action="{{ route('expense-categories.destroy', $category) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 font-bold hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center text-gray-500 py-4">No categories found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
