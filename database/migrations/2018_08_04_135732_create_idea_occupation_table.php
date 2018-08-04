<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeaOccupationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idea_occupation', function (Blueprint $table) {
            $table->integer('occupation_id')->unsigned();
            $table->foreign('occupation_id')->references('id')->on('occupations')->onDelete('cascade');
            $table->integer('idea_id')->unsigned();
            $table->foreign('idea_id')->references('id')->on('ideas')->onDelete('cascade');
            $table->timestamps();

            // constraints
            $table->unique(['occupation_id', 'idea_id'], 'idea_occupation_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('idea_occupation');
    }
}
