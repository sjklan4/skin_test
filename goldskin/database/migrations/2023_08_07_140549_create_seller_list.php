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
        Schema::create('sell_list', function (Blueprint $table) {
            $table->integer('sell_id')->autoIncrement();
            $table->string('sell_name', 255)->notnull();
            $table->string('link_url', 500)->notnull();
            $table->integer('product_id')->notnull();
        
            $table->foreign('product_id') // product_id를 외래 키로 설정
                  ->references('product_id') // products 테이블의 id 필드를 참조
                  ->on('product_list') // products 테이블을 참조
                  ->onDelete('cascade'); // 선택적: 부모 레코드가 삭제되면 자식 레코드도 삭제
        
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
        Schema::dropIfExists('seller_list');
    }
};
