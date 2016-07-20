<?php

use Illuminate\Database\Seeder;

use App\Service;
use App\Kit;

class ServicesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Service::create([
      'name'          => 'NONE'
    ]);

    Service::create([
      'name'          => 'telefonía',
      'description'   => 'Teléfono ilimitado y plan de datos'
    ]);

    Service::create([
      'name'          => 'financiamiento',
      'description'   => 'Financiamiento oportuno y sin trabas'
    ]);

    Service::create([
      'name'          => 'legal',
      'description'   => 'Asesoría legal y contratos'
    ]);

    Service::create([
      'name'          => 'contabilidad',
      'description'   => 'Contratos, asesoría y servicios legales'
    ]);

    Service::create([
      'name'          => 'terminal móvil',
      'description'   => 'Recibe pagos con tarjetas de crédito<br/>o débito'
    ]);

    Service::create([
      'name'          => 'plataforma de negocios',
      'description'   => 'Plataforma de negocios con empresas<br/>de México y EEUU'
    ]);

    Service::create([
      'name'          => 'sistema de administración',
      'description'   => 'Sistema de administración de tu negocio:<br/>Facturas, inventarios, ventas, etc.'
    ]);

    Service::create([
      'name'          => 'pagina web',
      'description'   => 'Dominio, diseño de pagina web y<br/>correos electrónicos'
    ]);

    Service::create([
      'name'          => 'diseño corporativo',
      'description'   => 'Diseño de logo e identidad corporativa'
    ]);

    Service::create([
      'name'          => 'diseño de papelería',
      'description'   => 'Diseño de tarjetas de presentación, <br/>papelería y hojas membretadas'
    ]);

    Service::create([
      'name'          => 'diseño de plantillas',
      'description'   => 'Diseño de plantillas PPT y PDF'
    ]);

    $kits = Kit::all();
    $i = $j = 0;

    foreach($kits as $kit) {
      
      if ($i == 0) {
        ++$i;
        continue;
      }

      if ($j == 0) {
        $n = 7;
      }
      else if ($j == 1) {
        $n = 8;
      } 
      else if ($j == 2) {
        $n = 11;
      }

      for ($k = 2; $k <= 1+$n; ++$k) {
        $kit->services()->attach($k);
      }
      ++$j;
    }
  }
}
