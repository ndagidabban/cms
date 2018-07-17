<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractorListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractor_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('address');
            $table->string('speciality');
            $table->string('year');
            $table->string('person');
            $table->string('mobile');
            $table->string('cac');
            $table->string('maa');
            $table->string('tcc');
            $table->string('pencom');
            $table->string('itf');
            $table->string('nsitf');
            $table->string('bpp');
            $table->string('swn');
            $table->string('eqm');
            $table->string('sim');
            $table->string('profile');
            $table->string('staff');
            $table->string('audited');
            $table->string('capability');
            $table->string('sign');
            $table->string('comment');
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
        Schema::dropIfExists('contractor_lists');
    }
}
