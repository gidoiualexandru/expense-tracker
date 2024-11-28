<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavingsGoalsTable extends Migration
{
    public function up()
    {
        Schema::create('savings_goals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('target_amount', 10, 2);
            $table->decimal('current_amount', 10, 2)->default(0);
            $table->date('due_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('savings_goals');
    }
}
