<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('status_id')->unsigned();
            $table->foreign('status_id')
                ->references('id')
                ->on('tender_statuses')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('substatus_id')->unsigned()->nullable();
            $table->foreign('substatus_id')
                ->references('id')
                ->on('tender_substatuses')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('buyer_id')->unsigned();
            $table->foreign('buyer_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('provider_id')->unsigned()->nullable();
            $table->foreign('provider_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->date('date_end')->nullable();

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
        Schema::dropIfExists('tenders');
    }
}
