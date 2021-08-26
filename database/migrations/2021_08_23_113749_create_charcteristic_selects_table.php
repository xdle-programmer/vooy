<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharcteristicSelectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charcteristic_selects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('charcteristic_id')->unsigned();
            $table->foreign('charcteristic_id')
                ->references('id')
                ->on('characteristics')
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
        Schema::dropIfExists('charcteristic_selects');
    }
}
