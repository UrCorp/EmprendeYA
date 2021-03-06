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
      $table->string('slug')->nullable();
      $table->text('logo_path');
      $table->text('logo_file_name');
      $table->string('name')->nullable();
      $table->text('description');
      $table->text('description_path');
      $table->text('description_file_name');
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
    Schema::drop('enterprises_description');
  }
}
