<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('attribute_value_variations', function (Blueprint $table) {
            $table->unsignedBigInteger('attribute_value_id');
            $table->unsignedBigInteger('variation_id');
            $table->foreign('attribute_value_id')
                  ->references('id')
                  ->on('attribute_values')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('variation_id')
                  ->references('id')
                  ->on('variations')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
        
        Schema::create('product_variations', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('variation_id');
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('variation_id')
                  ->references('id')
                  ->on('variations')
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
        Schema::table('product_variations', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropForeign(['variation_id']);
        });

        Schema::table('attribute_value_variations', function (Blueprint $table) {
            $table->dropForeign(['attribute_value_id']);
            $table->dropForeign(['variation_id']);
        });

        Schema::dropIfExists('attribute_value_variations');

        Schema::dropIfExists('variations');
    }
}
