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
      'created_at'    => $tmp_date,
      'updated_at'    => $tmp_date
    ]);

    $tmp_date = date('Y-m-d H:i:s');
    Kit::create([
      'name'          => 'digital',
      'created_at'    => $tmp_date,
      'updated_at'    => $tmp_date
    ]);

    $tmp_date = date('Y-m-d H:i:s');
    Kit::create([
      'name'          => 'integral',
      'created_at'    => $tmp_date,
      'updated_at'    => $tmp_date
    ]);
  }
}
