<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderServicesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('provider_services', function (Blueprint $table) {
      $table->id();
      $table->string('name', 100);
      $table->timestamps();
    });

    Schema::create('provider_info_services', function (Blueprint $table) {
      $table->bigInteger('info_id')->unsigned();
      $table->bigInteger('services_id')->unsigned();

      $table->foreign('info_id')->references('id')->on('provider_infos')
      ->onDelete('cascade');

      $table->foreign('services_id')->references('id')->on('provider_services')
      ->onDelete('cascade');
    });

  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('provider_info_services');
    Schema::dropIfExists('provider_services');
  }
}
