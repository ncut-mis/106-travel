<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('region')->nullable();//縣市
            $table->date('start');
            $table->date('end');
            $table->text('content')->nullable();//內容描述
            $table->text('name')->nullable();//景點名稱
            $table->text('room')->nullable();
            $table->text('breakfast')->nullable();
            $table->text('lunch')->nullable();
            $table->text('dinner')->nullable();
            $table->text('going')->nullable();//出發地點
            $table->text('arriving')->nullable();//目的地
            $table->text('traffic')->nullable();
            $table->integer('cost')->default(0);
            $table->text('guide_id')->nullable();
            $table->text('attraction_id')->nullable();
            $table->integer('travel_id');
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
        Schema::dropIfExists('schedules');
    }
}
