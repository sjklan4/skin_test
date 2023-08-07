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
        Schema::create('product_list_table', function (Blueprint $table) {
            $table->integer('product_id')->autoIncrement()->primary();
            $table->varchar('product_name',300)->notnull();
            $table->varchar('URL',2000)->nullable();
            $table->varchar('ingredient_name', 10000)->notnull();
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
        //
    }
};
