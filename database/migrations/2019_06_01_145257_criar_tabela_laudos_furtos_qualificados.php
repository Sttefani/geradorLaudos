<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaLaudosFurtosQualificados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    
    {
        Schema::create('laudos_furtos_qualificados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('numero_do_laudo');
            $table->date('data_da_ocorrencia');
            $table->dateTime('data_e_hora_do_acionamento');
            $table->dateTime('data_e_hora_da_chegada_ao_local');
            $table->string('perito');
            $table->string('diretor');
            $table->string('numero_da_requisicao');
            $table->string('numero_do_procedimento');
            $table->string('origem_da_requisicao');
            $table->string('autoridade_requisitante');
            $table->enum('utilizacao', ['residencia', 'escritorio', 
            'comercio', 'armazem', 'templo_religioso']);
            $table->float('recuo_frontal');
            $table->float('recuo_lateral_direita');
            $table->float('recuo_lateral_esquerda');
            $table->float('recuo_fundos');
            $table->float('area_do_imovel');
            $table->float('area_construida');
            $table->integer('numero_de_pavimentos');
            $table->integer('numero_de_compartimentos');
            $table->enum('tipo_de_construcao', ['concreto', 'alvenaria_bom_acabamento', 
            'alvenaria_mau_acabamento', 'madeira', 'material_pre_fabricado']);
            $table->enum('piso', ['ceramica', 'porcelanato', 
            'taco', 'cimento', 'chao_batido']);
            $table->enum('cobertura', ['telha_de_barro', 'firocimento', 
            'concreto', 'madeira', 'zinco', 'ausente']);
            $table->enum('forro', ['concreto', 'tabique', 
            'pvc', 'gesso', 'ausente']);
            $table->enum('esquadrias', ['aluminio', 'madeira', 
            'ferro', 'chapeada', 'blindex']);
            $table->enum('classificacao', ['luxo', 'fina', 
            'media', 'modesta', 'popular', 'barraco']);
            $table->enum('estado_de_conservacao', ['otimo', 'bom', 
            'regular', 'pessimo']);
            $table->enum('papiloscopia_no_local', ['sim', 'nao', 
            'nao_sabe_informar',]);
            $table->enum('local_violado', ['sim', 'nao', 
            'parcialmente_violado',]);
            $table->string('proprietario_posseiro');
            $table->string('endereco');
            $table->string('cidade');
            $table->longText('exames');
            $table->longText('conclusao');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->string('foto_5');
            $table->string('foto_6');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *


     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laudos_furtos_qualificados');
            
    }
}