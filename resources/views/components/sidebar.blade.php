<div class="flex flex-col h-screen bg-white shadow-lg">
    <div class="flex items-center justify-between px-6 pt-4">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-full w-10">
            <span class="text-2xl font-bold">Budgetio</span>
        </div>
    </div>

    <nav class="flex py-6 flex-col space-y-6 border-r">
        <div>
            <span class="px-6 text-gray-400 text-sm uppercase">Budget & Investment</span>
            <ul class="space-y-2 mt-2">
                <li>
                    <a href="/dashboard" class="flex items-center px-6 py-3 space-x-3 text-gray-600 hover:bg-[#676df7] hover:text-white transition duration-150 ease-in-out rounded-lg">
                        <x-heroicon-o-chart-bar class="h-6 w-6" />
                        <span>Dashboard Overview</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 space-x-3 text-gray-600 hover:bg-[#676df7] hover:text-white transition duration-150 ease-in-out rounded-lg">
                        <x-heroicon-o-calendar class="h-6 w-6" />
                        <span>Monthly Budget</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 space-x-3 text-gray-600 hover:bg-[#676df7] hover:text-white transition duration-150 ease-in-out rounded-lg">
                        <x-heroicon-o-document-text class="h-6 w-6" />
                        <span>Expenses Category</span>
                    </a>
                </li>
                <li>
                    <a href="/income" class="flex items-center px-6 py-3 space-x-3 text-gray-600 hover:bg-[#676df7] hover:text-white transition duration-150 ease-in-out rounded-lg">
                        <x-heroicon-o-currency-dollar class="h-6 w-6" />
                        <span>Income</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 space-x-3 text-gray-600 hover:bg-[#676df7] hover:text-white transition duration-150 ease-in-out rounded-lg">
                        <x-heroicon-o-shield-check class="h-6 w-6" />
                        <span>Savings Goal</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 space-x-3 text-gray-600 hover:bg-[#676df7] hover:text-white transition duration-150 ease-in-out rounded-lg">
                        <x-heroicon-o-chart-pie class="h-6 w-6" />
                        <span>Expense Analysis</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 space-x-3 text-gray-600 hover:bg-[#676df7] hover:text-white transition duration-150 ease-in-out rounded-lg">
                        <x-heroicon-o-currency-dollar class="h-6 w-6" />
                        <span>Income Analysis</span>
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <span class="px-6 text-gray-400 text-sm uppercase">Goals & Investment</span>
            <ul class="space-y-2 mt-2">
                <li>
                    <a href="#" class="flex items-center px-6 py-3 space-x-3 text-gray-600 hover:bg-[#676df7] hover:text-white transition duration-150 ease-in-out rounded-lg">
                        <x-heroicon-o-chart-bar class="h-6 w-6" />
                        <span>Goal Tracking</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 space-x-3 text-gray-600 hover:bg-[#676df7] hover:text-white transition duration-150 ease-in-out rounded-lg">
                        <x-heroicon-o-chart-bar class="h-6 w-6" />
                        <span>Debt Management</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 space-x-3 text-gray-600 hover:bg-[#676df7] hover:text-white transition duration-150 ease-in-out rounded-lg">
                        <x-heroicon-o-chart-bar class="h-6 w-6" />
                        <span>Investment Management</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 space-x-3 text-gray-600 hover:bg-[#676df7] hover:text-white transition duration-150 ease-in-out rounded-lg">
                        <x-heroicon-o-chart-bar class="h-6 w-6" />
                        <span>Investment Tracking</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-6 py-3 space-x-3 text-gray-600 hover:bg-[#676df7] hover:text-white transition duration-150 ease-in-out rounded-lg">
                        <x-heroicon-o-document-text class="h-6 w-6" />
                        <span>Report</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="border-t">
        <span class="text-gray-400 text-sm uppercase px-6">General</span>
        <a href="#" class="flex items-center px-6 py-3 space-x-3 text-gray-600 hover:bg-[#676df7] hover:text-white transition duration-150 ease-in-out rounded-lg">
            <x-heroicon-o-cog class="h-6 w-6" />
            <span>Settings</span>
        </a>
    </div>
</div>
