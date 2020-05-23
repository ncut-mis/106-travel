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
            $table->bigIncrements('id');
            $table->string('license_intro')->nullable();//證照簡介
            $table->string('license')->nullable();//圖片路徑
            $table->text('motive')->nullable(); ;//應徵動機
            $table->integer('guide_id');
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
