<?php namespace Jc91715\Bill\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTimesTable extends Migration
{
    public function up()
    {
        Schema::create('jc91715_bill_times', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->dateTime('today_bill_date')->comment('账单时间日期');
            $table->decimal('today_amount',10,2)->nullable()->comment('当天总额');
            $table->boolean('if_calculation')->default(false)->comment('是否计算过金额,可不用');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jc91715_bill_times');
    }
}
