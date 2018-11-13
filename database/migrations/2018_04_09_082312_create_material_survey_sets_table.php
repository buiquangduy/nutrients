<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialSurveySetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_survey_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('material_survey_id');
            $table->unsignedInteger('material_id');
            $table->tinyInteger('weight')->nullable();
            $table->text('colors')->nullable();
            $table->text('tastes');
            $table->text('expressions')->nullable();
            $table->timestamps();

            $table->foreign('material_id')
                ->references('id')
                ->on('materials')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            ;
            $table->foreign('material_survey_id')
                ->references('id')
                ->on('material_surveys')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_survey_sets');
    }
}
