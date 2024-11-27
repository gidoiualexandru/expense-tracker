<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExpenseCategory;

class ExpenseCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Groceries', 'budgeted_amount' => 0, 'actual_expense' => 0],
            ['name' => 'Utilities', 'budgeted_amount' => 0, 'actual_expense' => 0],
            ['name' => 'Transportation', 'budgeted_amount' => 0, 'actual_expense' => 0],
            ['name' => 'Entertainment', 'budgeted_amount' => 0, 'actual_expense' => 0],
            ['name' => 'Health', 'budgeted_amount' => 0, 'actual_expense' => 0],
            ['name' => 'Home Maintenance', 'budgeted_amount' => 0, 'actual_expense' => 0],
            ['name' => 'Savings', 'budgeted_amount' => 0, 'actual_expense' => 0],
        ];

        foreach ($categories as $category) {
            ExpenseCategory::create($category);
        }
    }
}
