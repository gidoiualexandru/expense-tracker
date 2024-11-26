@extends('layouts.app')

@section('content')
<div class="flex h-screen">
    <main class="flex-1 px-6 py-6 overflow-y-auto bg-gray-50">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
            <div class="flex space-x-4">
                <button class="px-4 py-2 text-sm font-bold text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200">March</button>
                <button class="px-4 py-2 text-sm font-bold text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200">April</button>
                <button class="px-4 py-2 text-sm font-bold text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200">May</button>
                <button class="px-4 py-2 text-sm font-bold text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200">June</button>
                <button class="px-4 py-2 text-sm font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-600">July</button>
            </div>
        </div>
        
        <div class="grid grid-cols-3 gap-6 mt-6">
            <div class="p-6 bg-white rounded-lg shadow">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <circle cx="12" cy="12" r="10" stroke-width="2" />
                            <path d="M12 6v6l4 2" stroke-width="2" />
                        </svg>
                        <h2 class="text-lg font-bold text-gray-800">July Income</h2>
                    </div>
                    <svg class="w-6 h-6 text-gray-400 cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </div>
                <p class="mt-4 text-2xl font-bold text-gray-800">€450,000</p>
                <p class="mt-2 text-sm text-green-500">+26% vs last month</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <svg class="w-6 h-6 text-pink-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <rect x="3" y="10" width="18" height="11" stroke-width="2" />
                            <line x1="7" y1="10" x2="7" y2="21" stroke-width="2" />
                        </svg>
                        <h2 class="text-lg font-bold text-gray-800">Expenses Budget</h2>
                    </div>
                    <svg class="w-6 h-6 text-gray-400 cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </div>
                <p class="mt-4 text-2xl font-bold text-gray-800">€395,200</p>
                <p class="mt-2 text-sm text-red-500">+27% vs last month</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <svg class="w-6 h-6 text-purple-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <rect x="6" y="6" width="12" height="12" rx="2" ry="2" stroke-width="2" />
                        </svg>
                        <h2 class="text-lg font-bold text-gray-800">Remaining Budget</h2>
                    </div>
                    <svg class="w-6 h-6 text-gray-400 cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </div>
                <p class="mt-4 text-2xl font-bold text-gray-800">€54,800</p>
                <div class="flex items-center mt-2 space-x-4">
                    <p class="text-sm text-green-500">+27% vs last month</p>
                    <a href="#" class="text-sm text-blue-500 underline">Add to savings</a>
                </div>
            </div>
        </div>

        <!-- Flex Container for the Two Tables -->
        <div class="flex space-x-6 mt-6">
            <!-- Left Table: Transaction Overview -->
            <div class="w-1/2 bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Transaction Overview</h2>
                <div class="overflow-hidden rounded-lg shadow">
                    <table class="min-w-full bg-white text-sm text-left text-gray-500">
                        <thead>
                            <tr class="bg-gray-50 text-gray-700 uppercase">
                                <th class="px-6 py-4 font-medium">Category</th>
                                <th class="px-6 py-4 font-medium">Amount</th>
                                <th class="px-6 py-4 font-medium">Date</th>
                                <th class="px-6 py-4 font-medium">Description</th>
                                <th class="px-6 py-4 font-medium"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="px-6 py-4 text-gray-900">Groceries</td>
                                <td class="px-6 py-4 text-red-600">€6,400</td>
                                <td class="px-6 py-4">29-07-2024</td>
                                <td class="px-6 py-4">Vegetables & Soft drinks</td>
                                <td class="px-6 py-4 text-gray-400 text-right">...</td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-6 py-4 text-gray-900">Income</td>
                                <td class="px-6 py-4 text-green-600">€74,000</td>
                                <td class="px-6 py-4">27-07-2024</td>
                                <td class="px-6 py-4">Side gig payment</td>
                                <td class="px-6 py-4 text-gray-400 text-right">...</td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-6 py-4 text-gray-900">Extra</td>
                                <td class="px-6 py-4 text-red-600">€8,500</td>
                                <td class="px-6 py-4">15-07-2024</td>
                                <td class="px-6 py-4">Sibling</td>
                                <td class="px-6 py-4 text-gray-400 text-right">...</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-gray-900">Extra</td>
                                <td class="px-6 py-4 text-red-600">€80,000</td>
                                <td class="px-6 py-4">15-07-2024</td>
                                <td class="px-6 py-4">Parents</td>
                                <td class="px-6 py-4 text-gray-400 text-right">...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Right Table: Expenses Budget -->
            <div class="w-1/2 bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Expenses Budget</h2>
                <div class="space-y-4">
                    <div class="flex justify-between items-center p-4 border rounded-lg">
                        <div class="flex items-center space-x-2">
                            <span class="w-3 h-3 bg-orange-500 rounded-full"></span>
                            <span class="text-gray-700">Groceries</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="font-semibold text-gray-800">€82,450</span>
                            <span class="text-green-500 text-xs px-2 py-1 border border-green-500 rounded-md">↓11%</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center p-4 border rounded-lg">
                        <div class="flex items-center space-x-2">
                            <span class="w-3 h-3 bg-purple-500 rounded-full"></span>
                            <span class="text-gray-700">Utilities</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="font-semibold text-gray-800">€40,000</span>
                            <span class="text-red-500 text-xs px-2 py-1 border border-red-500 rounded-md">↑41%</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center p-4 border rounded-lg">
                        <div class="flex items-center space-x-2">
                            <span class="w-3 h-3 bg-blue-500 rounded-full"></span>
                            <span class="text-gray-700">Transportation</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="font-semibold text-gray-800">€62,000</span>
                            <span class="text-green-500 text-xs px-2 py-1 border border-green-500 rounded-md">↓22%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
