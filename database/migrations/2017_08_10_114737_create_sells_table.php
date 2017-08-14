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
            $table->string('product_category');
            $table->string('customer_name');            
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('order_no');
            $table->date('sells_date');
            $table->string('right_sph')->nullable();
            $table->string('right_cyl')->nullable();
            $table->string('right_axis')->nullable();
            $table->string('right_add')->nullable();
            $table->string('left_sph')->nullable();
            $table->string('left_cyl')->nullable();
            $table->string('left_axis')->nullable();
            $table->string('left_add')->nullable();
            $table->string('ipd')->nullable();
            $table->date('delivery_date')->nullable();
            $table->string('quantity');
            $table->string('total');
            $table->string('advance');
            $table->string('due');
            $table->string('due_payment')->nullable();
            $table->string('status');
            $table->text('note_about_lens')->nullable();
            $table->text('note_about_customer')->nullable();
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
