<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapitalBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capital_budgets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zone');
            $table->string('state');
            $table->string('name');
            $table->string('code');
            $table->string('range');
            $table->float('amount', 12);
            $table->string('speciality');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capital_budgets');
    }
}
