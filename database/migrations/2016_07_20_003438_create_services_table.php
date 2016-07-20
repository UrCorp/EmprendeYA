<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('services', function(Blueprint $table) {
      $table->increments('id');
      $table->string('name', 60);
      $table->string('slug');
      $table->text('description');
      $table->timestamps();
    });

    Schema::create('kits_services', function(Blueprint $table) {
      /**
       * Kit/Services - Fields
       * ============================================================= //
       */
      $table->integer('kit_id')->unsigned();
      $table->integer('service_id')->unsigned();
      /**
       * Kit/Services - Foreign Keys
       * ============================================================= //
       */
      $table->foreign('kit_id')
            ->references('id')->on('kits')
            ->onDelete('cascade');

      $table->foreign('service_id')
            ->references('id')->on('services')
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
    Schema::drop('kits_services');
    Schema::drop('services');
  }
}
