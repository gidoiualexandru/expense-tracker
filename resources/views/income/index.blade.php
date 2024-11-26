@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white py-10 px-4">
    <h1 class="text-2xl font-bold text-blue-600 mb-6">Income Overview</h1>

    <div class="flex flex-wrap w-full max-w-4xl shadow-lg rounded-lg overflow-hidden">
        <div class="w-full md:w-1/2 bg-blue-50 p-6">
            <h2 class="text-xl font-semibold text-blue-600 mb-4">Expected Income</h2>
            <ul class="text-gray-800">
                @foreach ($expectedIncomes as $income)
                <li class="mb-2 flex justify-between items-center">
                    <span>{{ $income->source }}: {{ number_format($income->amount, 2) }} RON on {{ $income->date }}</span>
                    <div class="flex gap-2">
                        <a href="{{ route('income.edit', $income) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('income.destroy', $income) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="text-lg font-bold mt-4">Total: {{ number_format($totalExpected, 2) }} RON</div>
            <a href="{{ route('income.create', ['type' => 'expected']) }}" class="block mt-6 px-4 py-2 bg-blue-600 text-white text-center rounded">Add Expected Income</a>
        </div>
        <div class="w-full md:w-1/2 bg-white p-6 border-l border-blue-200">
            <h2 class="text-xl font-semibold text-blue-600 mb-4">Actual Income</h2>
            <ul class="text-gray-800">
                @foreach ($actualIncomes as $income)
                <li class="mb-2 flex justify-between items-center">
                    <span>{{ $income->source }}: {{ number_format($income->amount, 2) }} RON on {{ $income->date }}</span>
                    <div class="flex gap-2">
                        <a href="{{ route('income.edit', $income) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('income.destroy', $income) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="text-lg font-bold mt-4">Total: {{ number_format($totalActual, 2) }} RON</div>
            <div class="text-lg font-bold text-blue-800 mt-2">Difference: {{ number_format($difference, 2) }} RON</div>
            <a href="{{ route('income.create', ['type' => 'actual']) }}" class="block mt-6 px-4 py-2 bg-blue-600 text-white text-center rounded">Add Actual Income</a>
        </div>
    </div>
</div>
@endsection
