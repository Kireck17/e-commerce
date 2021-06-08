<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_packages', function (Blueprint $table) {
            $table->id();
            $table->integer('tracking_number');
            $table->date('shipping_date')->nullable();
            $table->date('delivery_date')->nullable();
            $table->decimal('price');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('phone_id');
            $table->unsignedBigInteger('address_id');
            $table->timestamps();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('phone_id')
                  ->references('id')
                  ->on('phones')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('address_id')
                  ->references('id')
                  ->on('addresses')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
        /* Ordenes */
        Schema::create('order_shipping_package', function (Blueprint $table){
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('shipping_package_id');
            $table->foreign('order_id')
                  ->references('id')
                  ->on('orders')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('shipping_package_id')
                  ->references('id')
                  ->on('shipping_packages')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
        /* Paqueteria */
        Schema::create('parcel_shipping_package', function (Blueprint $table){
            $table->unsignedBigInteger('parcel_id');
            $table->unsignedBigInteger('shipping_package_id');
            $table->foreign('parcel_id')
                  ->references('id')
                  ->on('parcels')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('shipping_package_id')
                  ->references('id')
                  ->on('shipping_packages')
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
        Schema::table('shipping_packages', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['phone_id']);
            $table->dropForeign(['address_id']);
        });
        Schema::table('order_shipping_package', function (Blueprint $table) {
            $table->dropForeign(['order_id']);
            $table->dropForeign(['shipping_package_id']);
        });
        Schema::table('parcel_shipping_package', function (Blueprint $table) {
            $table->dropForeign(['parcel_id']);
            $table->dropForeign(['shipping_package_id']);
        });
        Schema::dropIfExists('shipping_packages');
        Schema::dropIfExists('order_shipping_package');
        Schema::dropIfExists('parcel_shipping_package');
    }
}
