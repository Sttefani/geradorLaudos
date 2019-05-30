<?php

use Illuminate\Database\Seeder;

class Laudos_furtos_qualificados_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laudos_furtos_qualificados')->insert([

            'numero_do_laudo' => '085',
            'data_do_laudo' => '22.12.2012',
            'perito' => 'Sttefani Ribeiro',
            'diretor' => 'Sttefani',
            'numero_da_requisicao' => '0884',
            'numero_do_procedimento' => '65/2019',
            'utilizacao' => ['residencia'],
            'recuo_frontal' => 33.8,
            'recuo_lateral_direita' => 337,
            'recuo_lateral_esquerda' => 78.8,
            'recuo_fundos' => 14.89,
            'area_do_imovel'=> 600.00,
            'area_construida' => 345.00,
             'numero_de_pavimentos'=> 2,
             'numero_de_compartimentos'=> 5,
             'tipo_de_construcao' => 'material_pre_fabricado',
             'piso' => 'ceramica', 
            'cobertura' => 'ausente',
             'forro' => 'concreto',
            'esquadrias' => 'aluminio',
            'classificacao' => 'luxo', 
            'estado_de_conservacao' => 'otimo',
             'papiloscopia_no_local' => 'sim',
             'local_violado' =>'sim',
            'proprietario_posseiro' => 'João dos Santos',
            'endereco' => 'Zacarias Mendes Ribeiro',
            'cidade' => 'Boa Vista',
           'exames' => 'rsrsrsrsrsrsrsrsrsrsrrsrsrrsrsr',
           'conclusao' => 'rsrsrsrsrsrsrsrsrsrsrrsrsrrsrsr',
            'foto_1' => 'url1',
            'foto_2' => 'url2',
            'foto_3' => 'url3',
            'foto_4' => 'url4',
            'foto_5' => 'url5',
            'foto_6' => 'url6',
            
            
            ]);
    }
}
