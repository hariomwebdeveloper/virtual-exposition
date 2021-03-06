<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->string('picture');
            $table->integer('event_id');
            $table->integer('booking_company_id')->nullable();
            $table->boolean('reserved');
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
        Schema::dropIfExists('stands');
    }
}
