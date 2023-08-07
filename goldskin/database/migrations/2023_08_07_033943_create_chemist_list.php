<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chemist_list', function (Blueprint $table) {
            $table->increments('chem_num');
            $table->string('dataNo',1000);
            $table->string('chemEn',1000);
            $table->string('chemKo',1000);
            $table->string('casNo',1000);
            $table->string('symptom',1000);
            $table->string('inhale',1000);
            $table->string('skin',1000);
            $table->string('eyeball',1000);
            $table->string('oral',1000);
            $table->string('etc',1000);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chemist_list');
    }
};


