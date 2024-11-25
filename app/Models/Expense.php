<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = ['budget_id', 'name', 'amount', 'date'];

    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }
}
