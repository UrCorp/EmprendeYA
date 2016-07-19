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
      'description'           => 'Telcel es una marca propiedad de la empresa mexicana Radiomóvil DIPSA, S.A. de C.V.. Tiene presencia en todo México y se dedica a ofrecer servicios de telefonía móvil, telefonía fija, servicios de banda ancha',
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
      'description'           => 'Proyecto PYME nace para permitirle a las pequeñas y medianas empresas a tener cada vez mas ventas, mas clientes y crecer en capital de trabajo. Rompe la barrera de la liquidez que te detiene a crecer',
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
      'description'           => 'Diseñamos marcas y estrategias de posicionamiento que te acercan a tus clientes transfomando ideas en aplicaciones y páginas web. En internet no hay fornteras, crecemos tu negocio pensando global.',
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
      'description'           => 'Asesoría y documentación especializada para comenzar un negocio. Legalario es una plataforma en la que los usuarios del programa EMprendeYA, tendrán acceso a los servicios legales pensados para ellos',
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
      'description'           => 'Contax Contadores Integrales SC es una firma que nace con la finalidad de apoyar a nuestros clientes en crear un escenario confiable, estructurado y eficiente en el contexto contable, financiero y fiscal.',
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
      'description'           => 'AEM se dedica a contribuir al desarrollo profesional e intelectual de nuestros asociados, colaborando con su adaptación y entendimiento de la cultura, tanto mexicana como de los Estados Unidos de Norte América.',
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
      'description'           => 'Sr. Pago es el dispositivo que te permite recibir pagos con tarjetas desde smartphones o tablets de las plataformas iOS* (iPod, iPad, iPhone) o Android* Podrás disponer de tu dinero con tu tarjeta Sr. Pago MasterCard cajeros automáticos ó comprando en cualquiera de los miles de comercios afiliados a MasterCard.',
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
      'description'           => 'ROCKETUM es el primer ERP diseñado especialmente para emprendedores y MiPymes que buscan una adecuada administración de sus negocios. Controla tus Ventas, CRM, Clientes, Bodegas, Inventarios, Servicios, Proveedores, Compras, Factura Electrónica CFDi y mucho más.',
      'description_path'      => 'public/files/admin/documents/enterprises_description/',
      'description_file_name' => 'rocketum.pdf',
      'created_at'            => $tmp_date,
      'updated_at'            => $tmp_date
    ]);
  }
}
