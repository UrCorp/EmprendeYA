<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $this->call(EnterprisesDescriptionSeeder::class);
    $this->call(KitsSeeder::class);
    $this->call(ServicesSeeder::class);
  }
}
