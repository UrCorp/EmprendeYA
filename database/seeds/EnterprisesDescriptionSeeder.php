<?php

use Illuminate\Database\Seeder;
use App\EnterprisesDescription;

class EnterprisesDescriptionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $tmp_date = date('Y-m-d H:i:s');
    EnterprisesDescription::create([
      'logo_path'             => 'public/files/admin/img/enterprises_description/',
      'logo_file_name'        => 'telcel.png',
      'name'                  => 'TELCEL',
      'description'           => '<ul><li>Línea telefónica celular postpago (no incluye equipos en esta primera etapa) </li><li>Llamadas SMS y redes sociales ilimitados</li><li>1GB data</li></ul>',
      'description_path'      => '',
      'description_file_name' => '',
      'created_at'            => $tmp_date,
      'updated_at'            => $tmp_date
    ]);

    $tmp_date = date('Y-m-d H:i:s');
    EnterprisesDescription::create([
      'logo_path'             => 'public/files/admin/img/enterprises_description/',
      'logo_file_name'        => 'proyecto-pyme.png',
      'name'                  => 'PROYECTO PYME',
      'description'           => '<ul><li>Financiamiento oportuno, sin trabas y con trato personalizado</li></ul>',
      'description_path'      => 'public/files/admin/documents/enterprises_description/',
      'description_file_name' => 'proyecto-pyme.pdf',
      'created_at'            => $tmp_date,
      'updated_at'            => $tmp_date
    ]);

    $tmp_date = date('Y-m-d H:i:s');
    EnterprisesDescription::create([
      'logo_path'             => 'public/files/admin/img/enterprises_description/',
      'logo_file_name'        => 'urcorp.svg',
      'name'                  => 'URCORP',
      'description'           => '<ul><li>Dominio, pagina web(*) y correos electrónicos </li><li>Hospedaje 1 Sitio web</li><li>30 GB de almacenamiento</li><li>Capacidad de transferencia ilimitado (Ancho de banda)</li><li>10 direcciones de correo electrónico</li><li>Dominio gratis (.com)</li><li>2 modificaciones mensuales a la pagina</li><li>Mantenimiento y soporte técnico.</li><li>Diseño imagen(*)</li><li>Logotipo</li><li>Tarjetas de presentación</li><li>Hojas membretadas</li><li>Plantilla ppt/pdf</li></ul>',
      'description_path'      => 'public/files/admin/documents/enterprises_description/',
      'description_file_name' => 'urcorp.pdf',
      'created_at'            => $tmp_date,
      'updated_at'            => $tmp_date
    ]);

    $tmp_date = date('Y-m-d H:i:s');
    EnterprisesDescription::create([
      'logo_path'             => 'public/files/admin/img/enterprises_description/',
      'logo_file_name'        => 'legalario.jpg',
      'name'                  => 'LEGALARIO',
      'description'           => '<ul><li>Asesoría y servicios legales</li><li>20 documentos legales, que los ayudarán a regular las principales actividades de su negocio.</li><li>3 consultas legales al mes, con un máximo de 450 carácteres cada una.</li><li>Newsletter vía mail con noticias y recomendaciones legales enfocadas a emprendedores.</li></ul>',
      'description_path'      => 'public/files/admin/documents/enterprises_description/',
      'description_file_name' => 'legalario.pdf',
      'created_at'            => $tmp_date,
      'updated_at'            => $tmp_date
    ]);

    $tmp_date = date('Y-m-d H:i:s');
    EnterprisesDescription::create([
      'logo_path'             => 'public/files/admin/img/enterprises_description/',
      'logo_file_name'        => 'contax.png',
      'name'                  => 'CONTAX',
      'description'           => '<ul><li>Asesoría y servicios de recursos humanos, contable y fiscal</li><li>Manejo, asesoría y estrategias contables que permitan el cumplimiento de las obligaciones fiscales. Así como la elaboración de estados financieros, estados de resultado y asesoría financiera, así como el control para un equilibrio fiscal y financiero en el pago de impuestos.</li><li>12 registros contables, estos pueden estar conformados por facturas a favor o emitidas.</li><li>La relación es por medio de un call center para soporte contable y asesoría fiscal básica, así como una plataforma digital para intercambio de información (PDF y XML básicamente).</li></ul>',
      'description_path'      => 'public/files/admin/documents/enterprises_description/',
      'description_file_name' => 'contax.pdf',
      'created_at'            => $tmp_date,
      'updated_at'            => $tmp_date
    ]);

    $tmp_date = date('Y-m-d H:i:s');
    EnterprisesDescription::create([
      'logo_path'             => 'public/files/admin/img/enterprises_description/',
      'logo_file_name'        => 'aem.jpg',
      'name'                  => 'AEM',
      'description'           => '<ul><li>Plataforma de negocios WTC Querétaro</li><li>Vincula a clientes y proveedores con las características y requisitos que cada uno necesita</li><li>Haciendo contacto directo y de una manera rápida y sencilla, con la facilidad de agendar una cita de negocios y poner en marcha nuevos proyectos.</li></ul>',
      'description_path'      => 'public/files/admin/documents/enterprises_description/',
      'description_file_name' => 'aem.pdf',
      'created_at'            => $tmp_date,
      'updated_at'            => $tmp_date
    ]);

    $tmp_date = date('Y-m-d H:i:s');
    EnterprisesDescription::create([
      'logo_path'             => 'public/files/admin/img/enterprises_description/',
      'logo_file_name'        => 'sr-pago.png',
      'name'                  => 'SEÑOR PAGO',
      'description'           => '<ul><li>Recibe pagos con tarjetas de crédito o debito</li><li>Con tu smartphone iOS y Android</li><li>Sin necesidad de cuentas de banco</li><li>Sin cuotas mensuales</li></ul>',
      'description_path'      => '',
      'description_file_name' => '',
      'created_at'            => $tmp_date,
      'updated_at'            => $tmp_date
    ]);

    $tmp_date = date('Y-m-d H:i:s');
    EnterprisesDescription::create([
      'logo_path'             => 'public/files/admin/img/enterprises_description/',
      'logo_file_name'        => 'rocketum.jpg',
      'name'                  => 'ROCKETUM',
      'description'           => '<ul><li>Sistema para administrar tu empresa y tomar decisiones informadas</li></ul>',
      'description_path'      => 'public/files/admin/documents/enterprises_description/',
      'description_file_name' => 'rocketum.pdf',
      'created_at'            => $tmp_date,
      'updated_at'            => $tmp_date
    ]);
  }
}
