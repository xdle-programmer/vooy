<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tender_products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->text('description');

            $table->bigInteger('tender_id')->unsigned();
            $table->foreign('tender_id')
                ->references('id')
                ->on('tenders')
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
        Schema::dropIfExists('tender_products');
    }
}
