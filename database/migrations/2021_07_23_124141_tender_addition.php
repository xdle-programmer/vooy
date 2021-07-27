<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TenderAddition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenders', function (Blueprint $table) {
            $table->bigInteger('negotiator_id')->unsigned()->nullable();
            $table->foreign('negotiator_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('deliveryman_id')->unsigned()->nullable();
            $table->foreign('deliveryman_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->boolean('need_delivery')->nullable();
            $table->tinyInteger('to_country')->default('0');  //0 - none; 1 - ru; 2 - ch;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
