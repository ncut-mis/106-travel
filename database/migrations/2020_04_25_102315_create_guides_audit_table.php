<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidesAuditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides_audit', function (Blueprint $table) {
            $table->integer('guide_id');
            $table->string('license_intro');//證照簡介
            $table->string('license');//圖片路徑
            $table->string('video_intro')->nullable();//影片簡介
            $table->string('video')->nullable();//影片路徑
            $table->text('motive')->nullable(); ;//假如沒有圖片,影片的話
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guides_audit');
    }
}
