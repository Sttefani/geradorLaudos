<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'data_hora_do_acionamento' => 'required',
            'setor_id' => 'required',
            'data_da_ocorrencia' => 'required|date_format:Y-m-d',
            'data_do_registro' => 'required|date_format:Y-m-d',
            'status' => 'required', Rule::in(['PROCESSAMENTO', 'CONCLUIDO']),
            'origem' => 'required|max:191',
            'descricao' => 'required'
        ];
    }
}
