<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenderProductAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tender_product_attachments', function (Blueprint $table) {
            $table->id();
            $table->string('type', 60);
            $table->string('name', 60);
            $table->string('path', 60);

            $table->bigInteger('tender_product_id')->unsigned();
            $table->foreign('tender_product_id')
                ->references('id')
                ->on('tender_products')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });

        Schema::table('tender_products', function (Blueprint $table) {
            $table->string('main_picture', 60)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tender_product_attachments');
    }
}
