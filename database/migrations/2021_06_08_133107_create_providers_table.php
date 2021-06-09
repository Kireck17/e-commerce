<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('origin_id')->nullable();
            $table->string('name');
            $table->timestamps();
            $table->foreign('origin_id')
            ->references('id')
            ->on('origins')
            ->onUpdate('cascade')
            ->onDelete('set null');
        });

        Schema::create('provider_variation', function (Blueprint $table) {
            $table->unsignedBigInteger('provider_id');
            $table->unsignedBigInteger('variation_id');
            $table->foreign('provider_id')
            ->references('id')
            ->on('providers')
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
        Schema::table('providers', function (Blueprint $table) {
            $table->dropForeign(['origin_id']);
        });
        Schema::table('provider_variation', function (Blueprint $table) {
            $table->dropForeign(['provider_id']);
            $table->dropForeign(['variation_id']);
        });
        Schema::dropIfExists('providers');
        Schema::dropIfExists('provider_variation');
    }
}
