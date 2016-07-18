<?php

use Illuminate\Database\Seeder;
use App\Kit;

class KitsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $tmp_date = date('Y-m-d H:i:s');
    Kit::create([
      'name'          => 'NONE',
      'created_at'    => $tmp_date,
      'updated_at'    => $tmp_date
    ]);

    $tmp_date = date('Y-m-d H:i:s');
    Kit::create([
      'name'          => 'inicial',
      'price'         => 775,
      'created_at'    => $tmp_date,
      'updated_at'    => $tmp_date
    ]);

    $tmp_date = date('Y-m-d H:i:s');
    Kit::create([
      'name'          => 'digital',
      'price'         => 999,
      'created_at'    => $tmp_date,
      'updated_at'    => $tmp_date
    ]);

    $tmp_date = date('Y-m-d H:i:s');
    Kit::create([
      'name'          => 'integral',
      'price'         => 1099,
      'created_at'    => $tmp_date,
      'updated_at'    => $tmp_date
    ]);
  }
}
