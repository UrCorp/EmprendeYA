<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\EnterprisesDescription;

class AddEnterpriseDescriptionRegister extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    $tmp_date = date('Y-m-d H:i:s');
    EnterprisesDescription::create([
      'logo_path'             => 'public/files/admin/img/enterprises_description/',
      'logo_file_name'        => 'platform.svg',
      'name'                  => 'Plataforma EmprendeYA',
      'description'           => '<ul><li>Plataforma de negocios EmprendeYA</li><li>Vincula a clientes y proveedores con las características y requisitos que cada uno necesita</li><li>Haciendo contacto directo y de una manera rápida y sencilla, con la facilidad de agendar una cita de negocios y poner en marcha nuevos proyectos.</li></ul>',
      'description_path'      => 'public/files/admin/documents/enterprises_description/',
      'description_file_name' => 'platform.pdf',
      'created_at'            => $tmp_date,
      'updated_at'            => $tmp_date
    ]);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    EnterprisesDescription::get()->last()->delete();
  }
}
