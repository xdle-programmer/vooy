<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChatAddition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chats', function (Blueprint $table) {
            $table->bigInteger('tender_id')->unsigned()->nullable();
            $table->foreign('tender_id')
                ->references('id')
                ->on('tenders')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('review_id')->unsigned()->nullable();
            $table->foreign('review_id')
                ->references('id')
                ->on('tender_product_reviews')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
