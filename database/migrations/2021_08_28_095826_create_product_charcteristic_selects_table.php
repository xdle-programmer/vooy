<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCharcteristicSelectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_charcteristic_selects', function (Blueprint $table) {
            $table->id();
            $table->string('value');

            $table->bigInteger('select_id')->unsigned();
            $table->foreign('select_id')
                ->references('id')
                ->on('charcteristic_selects')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
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
        Schema::dropIfExists('product_charcteristic_selects');
    }
}
