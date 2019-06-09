@extends('layouts.app')

@section('content')

<div class="container">
  <h3>Formulário de Furto Qualificado</h3>

  <form action="{{ route('laudoFurtoQualificado.update', $laudo->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
    {!! method_field('PUT') !!}
    @include('laudo-furto-qualificado.form')
  </form>

</div><!-- /.container -->

@endsection