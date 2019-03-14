<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('place_name');
            $table->string('type');
            $table->string('image');
            $table->string('location');
            $table->string('hall_name');
            $table->integer('hall_max');
            $table->integer('high_price');
            $table->integer('low_price');
            $table->text('description');
            $table->text('owner_id');
//            $table->string('user_id');
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
    }
}
