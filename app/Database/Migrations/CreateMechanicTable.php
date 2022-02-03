<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateMechanicTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('mechanics', function (Blueprint $table)
        {
            $table->id();

            $table->integer('national_id');

            $table->string('fullName');

            $table->string('email');

            $table->string('title');

            $table->string('phone');

            $table->string('photo');

            $table->string('gender');

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
        Schema::drop('mechanics');
    }
}
