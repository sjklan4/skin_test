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
            $table->product_id()->autoIncrement();
            $table->varchar('product_name',300)->unique();
            $table->varchar('URL',2000)->nullable();
            $table->varchar('cas_no',500);
            $table->varchar('ingredient', 10000);
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
