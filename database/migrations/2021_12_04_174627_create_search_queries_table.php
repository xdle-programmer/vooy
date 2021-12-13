<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_queries', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->integer('count');
            $table->timestamps();
        });

        Schema::create('user_search_queries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('search_id')->unsigned();
            $table->foreign('search_id')
                ->references('id')
                ->on('search_queries')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
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
        Schema::dropIfExists('search_queries');
    }
}
