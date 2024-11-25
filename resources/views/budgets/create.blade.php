@extends('layouts.app')

@section('title', 'Create Budget')

@section('content')
<h1 class="text-2xl font-bold mb-4">Create New Budget</h1>

@if ($errors->any())
    <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
        <ul>
            @foreach ($errors->all() as $error)
                <li>- {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('budgets.store') }}" method="POST" class="bg-white shadow rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Budget Name</label>
        <input type="text" name="name" id="name" class="w-full p-2 border rounded" value="{{ old('name') }}" required>
    </div>
    <div class="mb-4">
        <label for="total_amount" class="block text-gray-700 font-bold mb-2">Total Amount</label>
        <input type="number" name="total_amount" id="total_amount" class="w-full p-2 border rounded" step="0.01" value="{{ old('total_amount') }}" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Budget</button>
</form>
@endsection
