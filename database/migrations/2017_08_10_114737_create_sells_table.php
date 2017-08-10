<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_type');
            $table->string('product_cetagory');
            $table->string('customer_name');            
            $table->string('phone');
            $table->string('address');
            $table->string('order_no');
            $table->date('sells_date');
            $table->string('right_sph');
            $table->string('right_cyl');
            $table->string('right_axis');
            $table->string('right_add');
            $table->string('left_sph');
            $table->string('left_cyl');
            $table->string('left_axis');
            $table->string('left_add');
            $table->string('ipd');
            $table->date('delivery_date');
            $table->string('quantity');
            $table->string('total');
            $table->string('advance');
            $table->string('due');
            $table->string('due_payment');
            $table->string('status');
            $table->text('note_about_lens');
            $table->text('note_about_customer');
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
        Schema::dropIfExists('sells');
    }
}
