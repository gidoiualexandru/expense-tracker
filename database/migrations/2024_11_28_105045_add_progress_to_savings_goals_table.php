<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProgressToSavingsGoalsTable extends Migration
{
    public function up()
    {
        Schema::table('savings_goals', function (Blueprint $table) {
            $table->decimal('progress', 5, 2)->virtualAs('(current_amount / target_amount) * 100');
        });
    }

    public function down()
    {
        Schema::table('savings_goals', function (Blueprint $table) {
            $table->dropColumn('progress');
        });
    }
}
