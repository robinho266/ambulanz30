<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnamnesisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamnesis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('spine_op');
            $table->text('medicine');
            $table->string('localisation');
            $table->string('pain_intensity');
            $table->string('pain_duration');
            $table->string('additional_pain_location');
            $table->string('walking_distance');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

        });

        Schema::table('anamnesis', function(Blueprint $table)
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
        Schema::table('anamnesis', function(Blueprint $table)
        {
            $table->dropForeign('anamnesis_user_id_foreign');
        });

        Schema::dropIfExists('anamnesis');
    }
}
