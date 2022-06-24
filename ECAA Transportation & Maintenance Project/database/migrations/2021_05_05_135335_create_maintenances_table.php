<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('assigned_mechanic')->default('not assigned');
            $table->string('driver_name')->nullable();
            $table->string('shift_leader')->nullable();
            $table->string('vehicle_type');
            $table->string('license_number');
            $table->integer('kiloMeter_reading');
            $table->json('issues');
            $table->json('fixed_issues')->nullable();
            $table->date('starting_date')->nullable();
            $table->date('finished_date')->nullable();
            $table->integer('Total_time')->nullable();
            $table->integer('material_expense')->nullable();
            $table->integer('Labor_expense')->nullable();
            $table->integer('Total_expense')->nullable();
            $table->string('mechanics_comment')->nullable();
            $table->string('maintenance_type')->nullable();
            $table->string('maintenance_status')->default('pending');
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
        Schema::dropIfExists('maintenances');
    }
}
