<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartnowTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('kits', function(Blueprint $table) {
      /**
       * Kits - Fields
       * ============================================================= //
       */
      $table->increments('id');
      $table->string('name', 60);
      $table->string('slug');
      $table->decimal('price', 17, 4);
      $table->timestamps();
    });

    Schema::create('startnow', function(Blueprint $table) {
      /**
       * StartNow - Fields
       * ============================================================= //
       */
      $table->increments('id');
      $table->string('name', 60);
      $table->string('phone', 15);
      $table->string('email', 255);
      $table->string('company', 60);
      $table->string('city', 60);
      $table->string('turn', 60);
      $table->text('subject');
      $table->integer('kit_id')->unsigned();
      $table->timestamps();

      /**
       * StartNow - Foreign Keys
       * ============================================================= //
       */
      $table->foreign('kit_id')
            ->references('id')->on('kits')
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
    Schema::drop('startnow');
    Schema::drop('kits');
  }
}
