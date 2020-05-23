<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidesArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides_article', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_title')->nullable();
            $table->string('image')->nullable();
            $table->string('image_content')->nullable();
            $table->string('video_title')->nullable();
            $table->string('video')->nullable();
            $table->string('video_content')->nullable();
            $table->string('guide_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guides_article');
    }
}
