<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateEnquiriesTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table)
        {
            $table->id();

            $table->integer('user_id');

            $table->string('subject');

            $table->text('description');

            $table->string('status');

            $table->text('response');

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
        Schema::drop('enquiries');
    }
}
