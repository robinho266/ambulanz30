<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('file');
            $table->integer('anamnesis_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('reports', function(Blueprint $table)
        {
            $table->foreign('anamnesis_id')->references('id')->on('anamnesis')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reports', function(Blueprint $table)
        {
            $table->dropForeign('reports_anamnesis_id_foreign');
        });

        Schema::dropIfExists('reports');
    }
}
