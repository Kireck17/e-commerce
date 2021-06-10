<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('attribute_id')->nullable();
            $table->string("value");
            $table->timestamps();
            $table->foreign('attribute_id')
                  ->references('id')
                  ->on('attributes')
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
        Schema::create('attribute_values', function (Blueprint $table) {
            $table->dropForeign(['attribute_id']);
        });
        Schema::dropIfExists('attribute_values');
    }
}
