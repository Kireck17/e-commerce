<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Intentaremos realizar una relación polimorfica con la tabla stocks
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('kit_id')->nullable();
            $table->bigInteger('stockable_id');
            $table->string('stockable_type');
            $table->unsignedBigInteger('provider_id')->nullable();
            $table->unsignedBigInteger('warehouse_id');
            $table->integer('quantity');
            $table->decimal('price');
            $table->timestamps();
            /*$table->foreign('kit_id')
                  ->references('id')
                  ->on('kits')
                  ->onUpdate('cascade')
                  ->onDelete('set null');*/
            $table->foreign('provider_id')
                  ->references('id')
                  ->on('providers')
                  ->onUpdate('cascade')
                  ->onDelete('set null');
            $table->foreign('warehouse_id')
                  ->references('id')
                  ->on('warehouses')
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
        Schema::table('stocks', function (Blueprint $table) {
            //$table->dropForeign(['kit_id']);
            $table->dropForeign(['provider_id']);
            $table->dropForeign(['warehouse_id']);
        });

        Schema::dropIfExists('stocks');
    }
}
