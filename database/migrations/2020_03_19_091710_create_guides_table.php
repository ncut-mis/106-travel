<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photo')->nullable();
            $table->string('id_card')->nullable();
            $table->string('fontsize')->nullable();
            $table->boolean('pass')->default(false);
            $table->datetime('pass_time')->nullable();
            $table->text('motive')->nullable();
            $table->string('license')->nullable();
            $table->integer('user_id');
            $table->string('image_title')->nullable();
            $table->string('image')->nullable();
            $table->string('image_content')->nullable();
            $table->string('video_title')->nullable();
            $table->string('video')->nullable();
            $table->string('video_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guides');
    }
}
