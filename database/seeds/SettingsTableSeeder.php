<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'site_title' => 'Imobiliária',
            'logo' => asset('site/assets/images/logo.png'),
            //SEO
            'meta_title' => '',
            'meta_keywords' => 'venda, loca&ccedil;&atilde;o, aluguel garantido, apartamento, casa, terreno, imovel comercial, imoveis rurais, areas, apto, lancamento de imoveis, imobiliaria online, imoveis online, sobrado, administracao de bens, adm de imoveis, compra de imovel, financiamento de imovel',
            'meta_description' => '',
            //Analytics
            'analytics' => null,
            //Empresa
            'about' => '',
            'address' => 'Rua Armando Steck, 000, Centro',
            'email' => 'imobiliaria@imob.com.br',
            'phone1' => '1234-5678',
            'phone2' => '9513-7862',
            //Social
            'facebook' => 'www.facebook.com',
            'twitter' => 'www.twitter.com',
            'googleplus' => 'plus.google.com',
            'linkedin' => 'www.linkedin.com',
            'link' => null,
            //Google Maps
            'latitude' => -23.08228291,
            'longitude' => -46.951793121,
            //Termos e Privacidade
            'terms' => '',
            'privacy' => '',
        ]);
    }
}
