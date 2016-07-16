<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterprisesDescriptionTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('enterprises_description', function(Blueprint $table) {
      $table->increments('id');
      $table->text('logo_path');
      $table->text('logo_file_name');
      $table->string('name');
      $table->text('description');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('enterprises_description');
  }
}
