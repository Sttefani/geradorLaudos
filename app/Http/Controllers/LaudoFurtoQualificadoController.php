<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LaudoFurtoQualificadoRequest;
use App\Models\LaudoFurtoQualificado;
use PDF;

class LaudoFurtoQualificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $laudos = LaudoFurtoQualificado::where('user_id', $userId)->paginate(15);
        return view('laudo-furto-qualificado.index', compact('laudos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laudo-furto-qualificado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaudoFurtoQualificadoRequest $request)
    {
        try {
            $data = $request->all();
            $data['user_id'] = auth()->user()->id;

            //dd($data);

            if (isset($data['foto_1'])) {
                $data['foto_1'] = $this->uploadFoto($request, 'foto_1');
            }
            if (isset($data['foto_2'])) {
                $data['foto_2'] = $this->uploadFoto($request, 'foto_2');
            }
            if (isset($data['foto_3'])) {
                $data['foto_3'] = $this->uploadFoto($request, 'foto_3');
            }
            if (isset($data['foto_4'])) {
                $data['foto_4'] = $this->uploadFoto($request, 'foto_4');
            }
            if (isset($data['foto_5'])) {
                $data['foto_5'] = $this->uploadFoto($request, 'foto_5');
            }
            if (isset($data['foto_6'])) {
                $data['foto_6'] = $this->uploadFoto($request, 'foto_6');
            }

            $laudo = LaudoFurtoQualificado::create($data);

            return redirect()
                ->route('laudoFurtoQualificado.index')
                ->with($request['success'] ? 'success' : 'error', $request['message']);
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => StringsPattern::error()
            ];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laudo = LaudoFurtoQualificado::findOrFail($id);
        return view('laudo-furto-qualificado.edit', compact('laudo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LaudoFurtoQualificadoRequest $request, $id)
    {
        try {
            $data = $request->all();
            $data = request()->except(['_method', '_token']);
            $laudoBuscado = LaudoFurtoQualificado::findOrFail($id);

            if (isset($data['foto_1'])) {
                $data['foto_1'] = $this->uploadFoto($request, 'foto_1', $laudoBuscado);
            }
            if (isset($data['foto_2'])) {
                $data['foto_2'] = $this->uploadFoto($request, 'foto_2', $laudoBuscado);
            }
            if (isset($data['foto_3'])) {
                $data['foto_3'] = $this->uploadFoto($request, 'foto_3', $laudoBuscado);
            }
            if (isset($data['foto_4'])) {
                $data['foto_4'] = $this->uploadFoto($request, 'foto_4', $laudoBuscado);
            }
            if (isset($data['foto_5'])) {
                $data['foto_5'] = $this->uploadFoto($request, 'foto_5', $laudoBuscado);
            }
            if (isset($data['foto_6'])) {
                $data['foto_6'] = $this->uploadFoto($request, 'foto_6', $laudoBuscado);
            }

            $laudo = LaudoFurtoQualificado::where('id', $id)->update($data);

            return redirect()
                ->route('laudoFurtoQualificado.index')
                ->with($request['success'] ? 'success' : 'error', $request['message']);

        } catch (Exception $e) {

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function geradorpdf($id)
    {
        $laudo = LaudoFurtoQualificado::findOrFail($id);
        $pdf = PDF::loadView('laudo-furto-qualificado.laudoPDF', compact('laudo'));
        return $pdf->stream();
    }

    private function uploadFoto($request, $nomeFoto, $laudoBuscado = null)
    {
        // $nomeFoto exemplo = 'foto_1'
        if ($request->hasFile($nomeFoto) && $request->file($nomeFoto)->isValid()) {
            if ($laudoBuscado[$nomeFoto] != null && !empty($laudoBuscado[$nomeFoto])) {
                $nomeFinal = $laudoBuscado[$nomeFoto];
            } else {
                $nomeAleatorioFoto = uniqid(date('HisYmd')) . "-" . $request->file($nomeFoto)->getClientOriginalName();
                $extensao = $request->file($nomeFoto)->extension();
                $nomeFinal = $nomeAleatorioFoto . "." . $extensao;
            }

            $upload = $request->file($nomeFoto)->storeAs('laudosFurtoQualificado', $nomeFinal);
            if (!$upload) {
                return redirect()->back()->with('error', 'Falha ao fazer upload de imagem');
            }

            return $nomeFinal;
        }
        return false;
    }
}
