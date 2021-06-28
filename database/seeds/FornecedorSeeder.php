<?php

use Illuminate\Database\Seeder;
use App\SiteContato;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siteContato = new SiteContato();
        $siteContato->nome = 'Elias';
        $siteContato->telefone = '99998888';
        $siteContato->email = 'elias@elias.com';
        $siteContato->save();

        SiteContato::create(['nome' => 'Neto', 'telefone' => '9988', 'email' => 'neto@neto.com']);

        DB::table('site_contatos')->insert(['nome' => 'Lazcano', 'email' => 'lazcano@email.com']);
    }
}
