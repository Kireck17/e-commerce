<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKitDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kit_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kit_id');
            $table->unsignedBigInteger('variation_id');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('kit_id')
                  ->references('id')
                  ->on('kits')
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
        Schema::table('kit_details', function (Blueprint $table) {
            $table->dropForeign(['kit_id']);
            $table->dropForeign(['variation_id']);
        });
        Schema::dropIfExists('kit_details');
    }
}
