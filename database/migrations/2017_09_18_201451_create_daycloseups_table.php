<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaycloseupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daycloseups', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('total_sells');
            $table->integer('total_advance');
            $table->integer('total_due_payment');
            $table->integer('total_expenses');
            $table->integer('total_visa');
            $table->integer('balance');
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
        Schema::dropIfExists('daycloseups');
    }
}
