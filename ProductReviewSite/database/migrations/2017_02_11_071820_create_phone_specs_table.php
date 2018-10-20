<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_specs', function (Blueprint $table) {
            $table->increments('phone_id');
            $table->float('phone_price',8,2)->unsigned();
            $table->string('phone_color');
            $table->integer('phone_ram')->unsigned();
            $table->float('phone_screen_size',4,2)->unsigned();
            $table->foreign('phone_id')->references('phone_id')->on('phones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_specs');
    }
}
