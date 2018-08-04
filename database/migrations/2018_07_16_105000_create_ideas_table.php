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
            $table->text('description')->nullable()->default(null);
            $table->integer('app_type_id')->unsigned()->nullable();
            $table->integer('preferable_min_age');
            $table->integer('preferable_max_age');
            $table->boolean('visible')->default(true);
            $table->timestamps();
            $table->softDeletes();

            // constraints
            $table->unique('name', 'name_idx');
            $table->unique('slug', 'slug_idx');
            $table->foreign('app_type_id')->references('id')->on('app_types')->onDelete('set null');
            $table->index('app_type_id', 'app_type_id_idx');
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
