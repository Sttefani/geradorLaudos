@extends('layouts.app')

@section('content')

<div class = "jumbotron bg-light border border-scondary">
  <div class="container">
    <div class = "row">
      <div class="card-deck">
        <div class="card border boder-primary">
          <div class="card-body">
            <h5 class="card-title">Laudo Furto Qualificado</h5>
            <p class="cart=text">Preencha as tabelas requeridas para geração do laudo.</p>
            <br>
            <a href="{{ route('laudoFurtoQualificado.create') }}" class=" btn btn-primary">Cadastre os dados</a>
          </div>
        </div>
        <div class="card border boder-primary">
          <div class="card-body">
            <h5 class="card-title">Laudo de Exame Químico Preliminar</h5>
            <p class="cart=text">Preencha as tabelas requeridas para geração do laudo.</p>
            <br>
            <a href="/laudos_exames_quimicos_preliminares" class=" btn btn-primary">Cadastre os dados</a>
          </div>
        </div>
        <div class="card border boder-primary">
            <div class="card-body">
              <h5 class="card-title">Laudo de Vistoria Veicular</h5>
              <p class="cart=text">Preencha as tabelas requeridas para geração do laudo.</p>
              <br>
              <a href="/laudos_vistorias_veiculos" class=" btn btn-primary">Cadastre os dados</a>
            </div>
        </div>
      </div><!-- /.card-deck -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.jumbotron -->

<div class = "jumbotron bg-light border border-scondary">
  <div class="container">
    <div class = "row">
      <div class="card-deck">
        <div class="card border boder-primary">
          <div class="card-body">
            <h5 class="card-title">Laudo de Constatação de Danos</h5>
            <p class="cart=text">Preencha as tabelas requeridas para geração do laudo.</p>
            <br>
            <a href="/laudos_danos" class=" btn btn-primary">Cadastre os dados</a>
          </div>
        </div>
        <div class="card border boder-primary">
          <div class="card-body">
            <h5 class="card-title">Em breve estaremos lançando novidades!!</h5>
            <p class="cart=text">Estamos trabalhando.</p>
            <br>
            <a href="/laudos_danos" class=" btn btn-primary">Cadastre os dados</a>
          </div>
        </div>
        <div class="card border boder-primary">
          <div class="card-body">
            <h5 class="card-title">Em breve estaremos lançando novidades!!</h5>
            <p class="cart=text">Estamos trabalhando.</p>
            <br>
            <a href="/laudos_danos" class=" btn btn-primary">Cadastre os dados</a>
          </div>
        </div>
      </div><!-- /.card-deck -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.jumbotron -->
    
@endsection
