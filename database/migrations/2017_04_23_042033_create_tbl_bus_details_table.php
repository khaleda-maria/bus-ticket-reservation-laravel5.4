<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblBusDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bus_details', function (Blueprint $table) {
            $table->increments('bus_id');
            $table->string('bus_name');
            $table->string('bus_type');
            $table->string('bus_layout');
            $table->string('start_point');
           
            $table->string('end_point');
            $table->string('total_seat');
            $table->string('regi_number');
            $table->string('regular_fare');
            $table->string('f_class_fare');
            $table->string('start_time');
            $table->string('arrival_time');
            $table->string('blocked_seats');
            
            $table->tinyInteger('bus_status');
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
        Schema::dropIfExists('tbl_bus_details');
    }
}
