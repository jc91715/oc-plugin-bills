<?php namespace Jc91715\Bill\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBillsTable extends Migration
{
    public function up()
    {
        Schema::create('jc91715_bill_bills', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('time_id')->nullable()->comment('时间id');
            $table->string('type')->default('')->comment('消费类型');
            $table->string('desc')->default('')->comment('消费描述');
            $table->decimal('amount',10,2)->nullable()->comment('消费金额');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jc91715_bill_bills');
    }
}
