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
            $table->string('id_card')->nullable();//身分證
            $table->string('fontsize')->nullable();//
            $table->string('photo')->nullable();//大頭貼
            $table->boolean('pass')->default(false);
            $table->datetime('pass_time')->nullable();
            $table->text('motive')->nullable();
            $table->string('license');
            $table->integer('user_id');
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
