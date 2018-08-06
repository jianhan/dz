<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
            $table->string('task');
            $table->string('goal');
            $table->unsignedInteger('display_order')->default(0);
            $table->enum('priority', ['nice to have', 'should have', 'must have'])->nullable()->default(null);
            $table->enum('condition_time', ['before', 'when', 'after'])->nullable()->default(null);
            $table->string('condition_event')->nullable()->default(null);
            $table->text('notes')->nullable()->default(null);
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
        Schema::dropIfExists('features');
    }
}
