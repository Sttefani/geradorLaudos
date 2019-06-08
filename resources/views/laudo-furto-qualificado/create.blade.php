@extends('layouts.app')

@section('content')

<div class="container">
  <h3>Formulário de Furto Qualificado</h3>

  <form action="{{ route('laudoFurtoQualificado.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
    @include('laudo-furto-qualificado.form')
  </form>

</div><!-- /.container -->

@endsection