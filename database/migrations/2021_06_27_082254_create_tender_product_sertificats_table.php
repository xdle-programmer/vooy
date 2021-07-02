<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenderProductSertificatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertificats', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });

        Schema::create('products_sertificats', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sertificat_id')->unsigned();
            $table->foreign('sertificat_id')
                ->references('id')
                ->on('sertificats')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')
                    ->references('id')
                    ->on('tender_products')
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
        Schema::dropIfExists('products_sertificats');
        Schema::dropIfExists('sertificats');
    }
}
