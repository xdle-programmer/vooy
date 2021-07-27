<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenderProductReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tender_product_reviews', function (Blueprint $table) {
            $table->id();
            $table->boolean('hidden')->default(0);
            $table->bigInteger('tender_id')->unsigned();
            $table->foreign('tender_id')
                ->references('id')
                ->on('tenders')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('provider_id')->unsigned();
            $table->foreign('provider_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');


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
        Schema::dropIfExists('tender_product_reviews');
    }
}
