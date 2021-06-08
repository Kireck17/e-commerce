<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('barcode');
            $table->string('name',255);
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('trademark_id');
            $table->longText('description');
            $table->timestamps();
            $table->foreign('trademark_id')
                  ->references('id')
                  ->on('trademarks')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('subcategory_id')
                  ->references('id')
                  ->on('subcategories')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
        /*Carrito de compras */
        Schema::create('product_user', function (Blueprint $table){
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
        /* Fotografia de Porductos*/
        Schema::create('photo_product', function (Blueprint $table){
            $table->unsignedBigInteger('photo_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('photo_id')
                  ->references('id')
                  ->on('photos')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
        /* Fotografia de Cupones*/
        Schema::create('coupon_product', function (Blueprint $table){
            $table->unsignedBigInteger('coupon_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('coupon_id')
                  ->references('id')
                  ->on('coupons')
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['trademark_id']);
            $table->dropForeign(['subcategory_id']);
        });
        Schema::table('product_user', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::table('photo_product', function (Blueprint $table) {
            $table->dropForeign(['photo_id']);
            $table->dropForeign(['product_id']);
        });
        Schema::table('coupon_product', function (Blueprint $table) {
            $table->dropForeign(['coupon_id']);
            $table->dropForeign(['product_id']);
        });
        
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_user');

        Schema::dropIfExists('photo_product');
        Schema::dropIfExists('coupon_product');
    }
}
