<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



//抵押物品表
class CreateCollateralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collateral', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('pid');
            $table->string('name');
            $table->tinyInteger('status'); // 1正常2冻结3待定
            $table->tinyInteger('user_id'); //
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
        Schema::dropIfExists('collateral');
    }
}
