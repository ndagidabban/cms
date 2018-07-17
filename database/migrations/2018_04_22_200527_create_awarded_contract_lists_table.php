<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardedContractListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awarded_contract_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
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
        Schema::dropIfExists('awarded_contract_lists');
    }
}
