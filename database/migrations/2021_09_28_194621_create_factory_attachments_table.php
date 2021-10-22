<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactoryAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factory_attachments', function (Blueprint $table) {
            $table->id();
            $table->string('path')->nullable();
            $table->string('type')->nullable();
            $table->string('name')->nullable();

            $table->bigInteger('factory_id')->unsigned();
            $table->foreign('factory_id')
                ->references('id')
                ->on('factories')
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
        Schema::dropIfExists('factory_attachments');
    }
}
