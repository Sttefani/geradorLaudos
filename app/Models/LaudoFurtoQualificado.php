<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaudoFurtoQualificado extends Model
{
    protected $table = "laudos_furtos_qualificados";

    protected $fillable = [
        'user_id', 'numero_do_laudo', 'data_da_ocorrencia', 'data_do_acionamento', 'hora_do_acionamento',
        'data_da_chegada_local', 'hora_da_chegada_local', 'perito', 'diretor', 'numero_da_requisicao', 'numero_do_procedimento',
        'origem_da_requisicao', 'autoridade_requisitante', 'utilizacao', 'recuo_frontal', 'recuo_lateral_direita', 'recuo_lateral_esquerda',
        'recuo_fundos', 'area_do_imovel', 'area_construida', 'numero_de_pavimentos', 'numero_de_compartimentos',
        'tipo_de_construcao', 'piso', 'cobertura', 'forro', 'esquadrias', 'classificacao', 'estado_de_conservacao',
        'papiloscopia_no_local', 'local_violado', 'proprietario_posseiro', 'endereco', 'cidade',
        'exames', 'conclusao', 'foto_1', 'comentario_1', 'foto_2', 'comentario_2', 'foto_3', 'comentario_3',
        'foto_4', 'comentario_4', 'foto_5', 'comentarios_5', 'foto_6', 'comentarios_6'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
