<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->date('feach_day');
            $table->decimal('sub_total');
            $table->integer('discount');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
            $table->foreign('order_id')
                  ->references('id')
                  ->on('orders')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_details', function (Blueprint $table) {
            $table->dropForeign(['order_id']);
            $table->dropForeign(['product_id']);
        });
        Schema::dropIfExists('order_details');
    }
}
