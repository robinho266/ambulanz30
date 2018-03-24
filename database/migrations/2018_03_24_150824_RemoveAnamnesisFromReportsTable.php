<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveAnamnesisFromReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports', function(Blueprint $table)
        {
            $table->dropForeign('reports_anamnesis_id_foreign');

            $table->dropColumn('anamnesis_id');
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
            $table->integer('anamnesis_id')->unsigned();

            $table->foreign('anamnesis_id')->references('id')->on('anamnesis')->onUpdate('cascade')->onDelete('restrict');
        });
    }
}
