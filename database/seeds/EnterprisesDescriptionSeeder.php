<?php

use Illuminate\Database\Seeder;

class EnterprisesDescriptionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('enterprises_description')->insert([
      'logo_path'       => 'public/storage/enterprises_description/',
      'logo_file_name'  => 'telcel.png',
      'name'            => 'TELCEL',
      'description'     => 'Telcel es una marca propiedad de la empresa mexicana Radiomóvil DIPSA, S.A. de C.V.. Tiene presencia en todo México y se dedica a ofrecer servicios de telefonía móvil, telefonía fija, servicios de banda ancha'
    ]);

    DB::table('enterprises_description')->insert([
      'logo_path'       => 'public/storage/enterprises_description/',
      'logo_file_name'  => 'proyecto-pyme.png',
      'name'            => 'PROYECTO PYME',
      'description'     => 'Proyecto PYME nace para permitirle a las pequeñas y medianas empresas a tener cada vez mas ventas, mas clientes y crecer en capital de trabajo. Rompe la barrera de la liquidez que te detiene a crecer'
    ]);

    DB::table('enterprises_description')->insert([
      'logo_path'       => 'public/storage/enterprises_description/',
      'logo_file_name'  => 'urcorp.svg',
      'name'            => 'URCORP',
      'description'     => 'Diseñamos marcas y estrategias de posicionamiento que te acercan a tus clientes transfomando ideas en aplicaciones y páginas web. En internet no hay fornteras, crecemos tu negocio pensando global.'
    ]);

    DB::table('enterprises_description')->insert([
      'logo_path'       => 'public/storage/enterprises_description/',
      'logo_file_name'  => 'legalario.jpg',
      'name'            => 'LEGALARIO',
      'description'     => 'Asesoría y documentación especializada para comenzar un negocio. Legalario es una plataforma en la que los usuarios del programa EMprendeYA, tendrán acceso a los servicios legales pensados para ellos'
    ]);

    DB::table('enterprises_description')->insert([
      'logo_path'       => 'public/storage/enterprises_description/',
      'logo_file_name'  => 'contax.png',
      'name'            => 'CONTAX',
      'description'     => 'Contax Contadores Integrales SC es una firma que nace con la finalidad de apoyar a nuestros clientes en crear un escenario confiable, estructurado y eficiente en el contexto contable, financiero y fiscal.'
    ]);

    DB::table('enterprises_description')->insert([
      'logo_path'       => 'public/storage/enterprises_description/',
      'logo_file_name'  => 'aem.jpg',
      'name'            => 'AEM',
      'description'     => 'AEM se dedica a contribuir al desarrollo profesional e intelectual de nuestros asociados, colaborando con su adaptación y entendimiento de la cultura, tanto mexicana como de los Estados Unidos de Norte América.'
    ]);

    DB::table('enterprises_description')->insert([
      'logo_path'       => 'public/storage/enterprises_description/',
      'logo_file_name'  => 'sr-pago.png',
      'name'            => 'SEÑOR PAGO',
      'description'     => 'Sr. Pago es el dispositivo que te permite recibir pagos con tarjetas desde smartphones o tablets de las plataformas iOS* (iPod, iPad, iPhone) o Android* Podrás disponer de tu dinero con tu tarjeta Sr. Pago MasterCard cajeros automáticos ó comprando en cualquiera de los miles de comercios afiliados a MasterCard.'
    ]);

    DB::table('enterprises_description')->insert([
      'logo_path'       => 'public/storage/enterprises_description/',
      'logo_file_name'  => 'rocketum.jpg',
      'name'            => 'ROCKETUM',
      'description'     => 'ROCKETUM es el primer ERP diseñado especialmente para emprendedores y MiPymes que buscan una adecuada administración de sus negocios. Controla tus Ventas, CRM, Clientes, Bodegas, Inventarios, Servicios, Proveedores, Compras, Factura Electrónica CFDi y mucho más.'
    ]);
  }
}
