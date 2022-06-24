<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->increments('id',true);
            $table->unsignedInteger('user_id')->nullable();
            $table->string('requested_by')->nullable();
            $table->string('Approved_by')->nullable();
            $table->string('travelers_name');
            $table->string('destination');
            $table->string('reason');
            $table->time('starting_time')->nullable();
            $table->time('ending_time')->nullable();
            $table->string('driver_name')->nullable();
            $table->string('car_license_num')->nullable();
            $table->integer('initial_kilo_meter')->nullable();
            $table->integer('final_kilo_meter')->nullable();
            $table->integer('Traveled_kilo_meter')->nullable();
            $table->unsignedInteger('driver_id')->nullable();
            $table->unsignedInteger('car_id')->nullable();
            $table->string('request_status')->default('pending');
            $table->string('driver_status')->nullable();
            $table->timestamps();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->foreign('driver_id')
                    ->references('id')
                    ->on('drivers')
                    ->onDelete('cascade');
            $table->foreign('car_id')
                    ->references('id')
                    ->on('cars')
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
        Schema::dropIfExists('transports');
        
    }
}
