<?php

namespace App\Providers;

use App\Models\Budget;
use App\Policies\BudgetPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Budget::class => BudgetPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
