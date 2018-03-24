<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientdata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->text('address');
            $table->string('mobilenumber');
            $table->string('sex');
            $table->integer('svnr');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('patientdata', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patientdata', function(Blueprint $table)
        {
            $table->dropForeign('patientdata_user_id_foreign');
        });

        Schema::dropIfExists('patientdata');
    }
}
