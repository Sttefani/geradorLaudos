<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LaudoFurtoQualificadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'numero_do_laudo' => 'required',
            'data_da_ocorrencia' => 'required|date_format:Y-m-d',
            'data_do_acionamento' => 'required|date_format:Y-m-d',
            'hora_do_acionamento' => 'required',
            'data_da_chegada_local' => 'required|date_format:Y-m-d',
            'hora_da_chegada_local' => 'required',
            'perito' => 'required',
            'diretor' => 'required',
            'numero_da_requisicao' => 'required',
            'numero_do_procedimento' => 'required',
            'origem_da_requisicao' => 'required',
            'autoridade_requisitante' => 'required',
            'utilizacao' => 'required', Rule::in(['residencia', 'escritorio', 'comercio', 'armazem', 'templo_religioso']),
            /*'recuo_frontal' => 'required|numeric|min:1',
            'recuo_lateral_direita' => 'required|numeric|min:1',
            'recuo_lateral_esquerda' => 'required|numeric|min:1',
            'recuo_fundos' => 'required|numeric|min:1',*/
            'area_do_imovel' => 'required|numeric|min:1',
            'area_construida' => 'required|numeric|min:1',
            'numero_de_pavimentos' => 'required|numeric',
            'numero_de_compartimentos' => 'required|numeric',
            'tipo_de_construcao' => 'required', Rule::in(['concreto', 'alvenaria_bom_acabamento', 'alvenaria_mau_acabamento', 'madeira', 'material_pre_fabricado']),
            'piso' => 'required', Rule::in(['ceramica', 'porcelanato', 'taco', 'cimento', 'chao_batido']),
            'cobertura' => 'required', Rule::in(['telha_de_barro', 'firocimento', 'concreto', 'madeira', 'zinco', 'ausente']),
            'forro' => 'required', Rule::in(['concreto', 'tabique', 'pvc', 'gesso', 'ausente']),
            'esquadrias' => 'required', Rule::in(['aluminio', 'madeira', 'ferro', 'chapeada', 'blindex']),
            'classificacao' => 'required', Rule::in(['luxo', 'fina', 'media', 'modesta', 'popular', 'barraco']),
            'estado_de_conservacao' => 'required', Rule::in(['otimo', 'bom', 'regular', 'pessimo']),
            'papiloscopia_no_local' => 'required', Rule::in(['sim', 'nao', 'nao_sabe_informar']),
            'local_violado' => 'required', Rule::in(['sim', 'nao', 'parcialmente_violado']),
            /*'proprietario_posseiro' => 'required',*/
            'endereco' => 'required',
            'cidade' => 'required',
            'exames' => 'required',
            'conclusao' => 'required',
        ];
    }
}
