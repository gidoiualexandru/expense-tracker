<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavingsGoalRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'target_amount' => 'required|numeric|min:0',
            'current_amount' => 'nullable|numeric|min:0',
            'due_date' => 'required|date|after:today',
        ];
    }
}
