<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('shipping_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('awb', 50);
            $table->string('sender', 100);
            $table->string('from', 100);
            $table->string('recipient', 50)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('address');
            $table->string('city', 100);
            $table->string('province', 50);
            $table->string('postalcode', 10)->nullable();
            $table->string('delivery_date', 50)->nullable();
            $table->string('goods_name', 100)->nullable();
            $table->unsignedBigInteger('goods_type')->index();
            $table->foreign('goods_type')->references('id')->on('goods_type')->onDelete('cascade');
            $table->string('weight', 10);
            $table->unsignedBigInteger('services_type')->index();
            $table->foreign('services_type')->references('id')->on('services_type')->onDelete('cascade');
            $table->double('price');
            $table->string('status', 50);
            $table->string('receipt_date', 50)->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('shipping_orders');
    }
}