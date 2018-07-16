<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->integer('app_type_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

            // constraints
            $table->unique('name', 'name_idx');
            $table->unique('slug', 'slug_idx');
            $table->foreign('app_type_id')->references('id')->on('app_types')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('ideas');
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
