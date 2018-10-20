<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function(Blueprint $table)
        {
            $table->increments('phone_id');
            $table->string('phone_name');
            $table->integer('c_id')->unsigned();
            $table->string('phone_photo');
            $table->foreign('c_id')
                  ->references('company_id')->on('companys')
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
        //
    }
}
