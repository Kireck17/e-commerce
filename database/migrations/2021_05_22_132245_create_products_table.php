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
            $table->string('name');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->unsignedBigInteger('trademark_id')->nullable();
            $table->longText('description');
            $table->timestamps();
            $table->foreign('trademark_id')
                  ->references('id')
                  ->on('trademarks')
                  ->onUpdate('cascade')
                  ->onDelete('set null');
            $table->foreign('subcategory_id')
                  ->references('id')
                  ->on('subcategories')
                  ->onUpdate('cascade')
                  ->onDelete('set null');
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onUpdate('cascade')
                  ->onDelete('set null');
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
            $table->dropForeign(['category_id']);
        });
        
        
        Schema::dropIfExists('products');
    }
}
