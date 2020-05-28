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
<<<<<<< HEAD
            $table->string('name');//導遊暱稱
            $table->string('id_card');//身分證
            $table->string('fontsize');//導遊暱稱
            $table->string('photo');//大頭貼
=======
            $table->string('id_card')->nullable();//身分證
            $table->string('fontsize')->nullable();//
            $table->string('photo')->nullable();//大頭貼
>>>>>>> 9c569e61dcac15ca211a7658378850d74e1c26a6
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
