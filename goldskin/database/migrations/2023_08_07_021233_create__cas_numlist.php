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
        Schema::create('Cas_Numlist', function (Blueprint $table) {
            $table->id('No')->autoIncrement()->primary();
            $table->VARCHAR('Cas_Num',1000)->nullable();
            $table->VARCHAR('chemistry_name',10000)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('_cas_numlist');
    }
};
