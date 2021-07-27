<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenderProductReviewItemAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tender_product_review_item_attachments', function (Blueprint $table) {
            $table->id();
            $table->string('type', 60);
            $table->string('name', 60);
            $table->string('path', 60);

            $table->bigInteger('review_product_id')->unsigned();
            $table->foreign('review_product_id')
                ->references('id')
                ->on('tender_product_review_items')
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
        Schema::dropIfExists('tender_product_review_item_attachments');
    }
}
