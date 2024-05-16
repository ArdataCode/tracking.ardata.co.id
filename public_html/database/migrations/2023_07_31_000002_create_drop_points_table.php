<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('drop_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no')->default(99);
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->integer('status')->default(1)->comment('0 = Inactive; 1 = Active');
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
        Schema::dropIfExists('drop_points');
    }
}