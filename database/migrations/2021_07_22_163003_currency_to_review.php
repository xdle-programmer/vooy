<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CurrencyToReview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tender_product_reviews', function (Blueprint $table) {
            $table->tinyInteger('from_country')->default('0');  //0 - none; 1 - ru; 2 - ch;
        });
        Schema::table('tender_product_review_items', function (Blueprint $table) {
            $table->bigInteger('currency_id')->unsigned()->nullable();
            $table->foreign('currency_id')
                ->references('id')
                ->on('currencies')
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
