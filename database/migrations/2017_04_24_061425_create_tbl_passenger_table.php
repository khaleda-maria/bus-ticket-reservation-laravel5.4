<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPassengerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_passenger', function (Blueprint $table) {
            $table->increments('p_id');
            $table->string('bus_id');
            $table->integer('route_id');
            $table->string('start_point');
            $table->string('end_point');
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('ticket_id',100);
            $table->string('address')->nullable();
            $table->string('b_point');
            $table->string('date');
            $table->string('no_of_sits');
            $table->string('cost');
             $table->string('sits');
            
           
          
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
        Schema::dropIfExists('tbl_passenger');
    }
}
