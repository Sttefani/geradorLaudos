@extends('layouts.app')

@section('content')

<div class="container">
  <div class="d-flex bd-highlight">
    <div class="mr-auto p-2 bd-highlight">
      <h3>Meus Laudos Cadastrados</h3>
    </div>
    <div class="p-2 bd-highlight align-self-center">
      <a href="{{ route('laudoFurtoQualificado.create') }}" class=" btn btn-info">Cadastrar Laudo</a>
    </div>
  </div>
  <hr>

  <table class="table table-hover table-bordered mt-4">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nº Laudo</th>
        <th scope="col">Data Ocorrência</th>
        <th scope="col">Perito</th>
        <th scope="col">Diretor</th>
        <th scope="col">Nº Requisição</th>
        <th scope="col">Autoridade</th>
        <th scope="col">Foto 1</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @forelse($laudos as $laudo)
        <tr>
          <th scope="row">{{ $laudo->numero_do_laudo }}</th>
          <td>{{ date('d/m/Y', strtotime($laudo->data_da_ocorrencia)) }}</td>
          <td>{{ $laudo->perito }}</td>
          <td>{{ $laudo->diretor }}</td>
          <td>{{ $laudo->numero_da_requisicao }}</td>
          <td>{{ $laudo->autoridade_requisitante }}</td>
          <td>
            @if (isset($laudo->foto_1))
              <img src="{{ url("storage/laudosFurtoQualificado/{$laudo->foto_1}") }}" width="80" alt="foto 1 do laudo" />
            @endif
          </td>
          <td style="min-width: 95px;" id="btn-acoes">
            <a href="{{ route('laudoFurtoQualificado.edit', $laudo->id) }}">
              <img src="{{url('imgs/edit.png')}}" alt="editar laudo">
            </a>
            <a href="{{ route('laudoFurtoQualificado.geradorpdf', $laudo->id) }}">
              <img src="{{url('imgs/pdf.png')}}" alt="gerar pdf">
            </a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="8">Nenhum laudo encontrado!</td>
        </tr>
      @endforelse
    </tbody>
  </table>

</div><!-- /.container -->

@endsection