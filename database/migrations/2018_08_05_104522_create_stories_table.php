<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
            $table->string('task');
            $table->string('goal');
            $table->text('notes');
            $table->enum('priority', ['nice to have', 'should have', 'must have'])->default('should have');
            $table->unsignedInteger('display_order')->default(0);
            $table->softDeletes();
            $table->timestamps();

            // constraints
            $table->integer('idea_id')->unsigned();
            $table->foreign('idea_id')->references('id')->on('ideas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stories');
    }
}
