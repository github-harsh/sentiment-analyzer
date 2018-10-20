<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('reviews', function(Blueprint $table)
        {
            $table->increments('review_id');
            $table->text('review');
            $table->integer('p_id')->unsigned();
            $table->foreign('p_id')
                  ->references('phone_id')->on('phones')
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
