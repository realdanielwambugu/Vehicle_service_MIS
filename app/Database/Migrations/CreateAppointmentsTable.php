<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateAppointmentsTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table)
        {
            $table->id();

            $table->integer('user_id');

            $table->integer('service_id');

            $table->integer('mechanic_id');

            $table->string('vehicle_reg_no');

            $table->string('vehicle_brand');

            $table->string('vehicle_model');

            $table->string('service_date');

            $table->string('service_time');

            $table->text('admin_remarks');

            $table->string('service_charges');

            $table->string('parts_charges');

            $table->string('additional_charges');

            $table->string('status');

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
        Schema::drop('appointments');
    }
}
