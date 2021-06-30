<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_cart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stock_id');
            $table->unsignedBigInteger('user_id');
            //$table->unsignedBigInteger('cupon_id');
            $table->foreign('stock_id')
                ->references('id')
                ->on('stocks')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
           /* $table->foreign('cupon_id')
                ->references('id')
                ->on('cupon')
                ->onUpdate('cascade')
                ->onDelete('cascade');
                */
            
            $table->integer('quantity');
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

        Schema::table('shopping_cart', function (Blueprint $table) {
            $table->dropForeign(['products_id']);
            $table->dropForeign(['users_id']);
            $table->dropForeign(['cupon_id']);
           
        });


        Schema::dropIfExists('shopping_cart');
    }
}
