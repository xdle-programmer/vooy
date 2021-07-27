<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenderProductReviewItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tender_product_review_items', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('review_id')->unsigned();
            $table->foreign('review_id')
                ->references('id')
                ->on('tender_product_reviews')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('tender_products')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('name', 255);
            $table->text('description');
            $table->integer('price');
            $table->integer('count');
            $table->integer('release_time');
            $table->boolean('sample');
            $table->boolean('branding');
            $table->boolean('packing');

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
        Schema::dropIfExists('tender_product_review_items');
    }
}
