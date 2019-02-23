<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//标
class CreateBidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bid', function (Blueprint $table) {
            $table->increments('id');
            $table->smallIncrements('user_id');  // 用户关联ID
            $table->string( 'name');             // 投资名称
            $table->integer('amount');           // 投标金额
            $table->string( 'pattern');          // 投标方式
            $table->string( 'status');           // 状态
            $table->integer('expect_amount');    // 预计投资金额
            $table->integer('term');             // 有效期
            $table->string( 'remarks');          // 备注
            $table->integer('type');             // 投标类型 1全部 2抵押宝 3信用宝
            $table->string( 'annual_rate'); // 年化收益利率
            $table->string( 'repayment');   // 还款方式 1全部 2按月付息到月换本 3按月还本息
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
        Schema::dropIfExists('bid');
    }
}
