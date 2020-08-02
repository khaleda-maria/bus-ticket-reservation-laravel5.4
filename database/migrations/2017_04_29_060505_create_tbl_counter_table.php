<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCounterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_counter', function (Blueprint $table) {
            $table->increments('counter_id');
            $table->string('counter_name');
            $table->integer('route_id');
            $table->integer('bus_id');
            $table->string('contact');
            $table->tinyInteger('c_status')->default(1);
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
        Schema::dropIfExists('tbl_counter');
    }
}
