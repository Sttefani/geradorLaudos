@extends('layouts.app')

@section('content')

<div class="container">
  <h3>Formulários de Furto Qualificado</h3>

  <form class="mt-4">
    <fieldset class="scheduler-border">
      <legend class="scheduler-border">I - Histórico</legend>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="user">Usuário</label>
          <input type="text" class="form-control" id="user" name="user">
        </div>
        <div class="form-group col-md-4">
          <label for="numero_do_laudo">Nº do laudo</label>
          <input type="password" class="form-control" id="numero_do_laudo" name="numero_do_laudo">
        </div>
        <div class="form-group col-md-4">
          <label for="data_da_ocorrencia">Data da ocorrência</label>
          <input type="date" class="form-control" id="data_da_ocorrencia" name="data_da_ocorrencia">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="data_do_acionamento">Data do acionamento</label>
          <input type="date" class="form-control" id="data_do_acionamento" name="data_do_acionamento">
        </div>
        <div class="form-group col-md-3">
          <label for="hora_do_acionamento">Hora do acionamento</label>
          <input type="time" class="form-control" id="hora_do_acionamento" name="hora_do_acionamento">
        </div>
        <div class="form-group col-md-3">
          <label for="data_da_chegada_local">Data da chegada ao local</label>
          <input type="date" class="form-control" id="data_da_chegada_local" name="data_da_chegada_local">
        </div>
        <div class="form-group col-md-3">
          <label for="hora_da_chegada_local">Hora da chegado ao local</label>
          <input type="time" class="form-control" id="hora_da_chegada_local" name="hora_da_chegada_local">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="perito">Perito</label>
          <input type="text" class="form-control" id="perito" name="perito">
        </div>
        <div class="form-group col-md-4">
          <label for="diretor">Diretor</label>
          <input type="text" class="form-control" id="diretor" name="diretor">
        </div>
        <div class="form-group col-md-4">
          <label for="numero_da_requisicao">Nº da requisição</label>
          <input type="text" class="form-control" id="numero_da_requisicao" name="numero_da_requisicao">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
            <label for="numero_do_procedimento">Nº do procedimento</label>
            <input type="text" class="form-control" id="numero_do_procedimento" name="numero_do_procedimento">
          </div>
        <div class="form-group col-md-4">
          <label for="origem_da_requisicao">Origem da requisição</label>
          <input type="text" class="form-control" id="origem_da_requisicao" name="origem_da_requisicao">
        </div>
        <div class="form-group col-md-4">
          <label for="autoridade_requisitante">Autoridade requisitante</label>
          <input type="text" class="form-control" id="autoridade_requisitante" name="autoridade_requisitante">
        </div>
      </div>
    </fieldset>

    <fieldset class="scheduler-border">
      <legend class="scheduler-border">II - Do Local</legend>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="utilizacao">Utilização</label>
          <select id="utilizacao" name="utilizacao" class="form-control">
            <option selected>Selecione...</option>
            <option value="residencia">Residência</option>
            <option value="escritorio">Escritório</option>
            <option value="comercio">Comércio</option>
            <option value="armazem">Armazem</option>
            <option value="templo_religioso">Templo Religioso</option>
          </select>
        </div>
        <div class="form-group col-md-4">
            <label for="recuo_frontal">Recuo frontal</label>
            <input type="number" class="form-control" id="recuo_frontal" name="recuo_frontal">
        </div>
        <div class="form-group col-md-4">
            <label for="recuo_lateral_direita">Recuo lateral direta</label>
            <input type="number" class="form-control" id="recuo_lateral_direita" name="recuo_lateral_direita">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
            <label for="recuo_lateral_esquerda">Recuo lateral esquerda</label>
            <input type="number" class="form-control" id="recuo_lateral_esquerda" name="recuo_lateral_esquerda">
        </div>
        <div class="form-group col-md-4">
            <label for="recuo_fundos">Recuo fundos</label>
            <input type="number" class="form-control" id="recuo_fundos" name="recuo_fundos">
        </div>
        <div class="form-group col-md-4">
            <label for="area_do_imovel">Área do imóvel</label>
            <input type="number" class="form-control" id="area_do_imovel" name="area_do_imovel">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
            <label for="area_construida">Área contruida</label>
            <input type="number" class="form-control" id="area_construida" name="area_construida">
        </div>
        <div class="form-group col-md-2">
            <label for="numero_de_pavimentos">Nº de pavimentos</label>
            <input type="number" class="form-control" id="numero_de_pavimentos" name="numero_de_pavimentos">
        </div>
        <div class="form-group col-md-2">
            <label for="numero_de_compartimentos">Nº de compartimentos</label>
            <input type="number" class="form-control" id="numero_de_compartimentos" name="numero_de_compartimentos">
        </div>
        <div class="form-group col-md-4">
          <label for="tipo_de_construcao">Tipo de construção</label>
          <select id="tipo_de_construcao" name="tipo_de_construcao" class="form-control">
            <option selected>Selecione...</option>
            <option value="concreto">Concreto</option>
            <option value="alvenaria_bom_acabamento">Alvenaria bom acabamento</option>
            <option value="alvenaria_mau_acabamento">Alvenaria mau acabamento</option>
            <option value="madeira">Madeira</option>
            <option value="material_pre_fabricado">Material pré fabricado</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="piso">Piso</label>
          <select id="piso" name="piso" class="form-control">
            <option selected>Selecione...</option>
            <option value="ceramica">Cerâmica</option>
            <option value="porcelanato">Porcelanato</option>
            <option value="taco">Taco</option>
            <option value="cimento">Cimento</option>
            <option value="chao_batido">Chão batido</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="cobertura">Cobertura</label>
          <select id="cobertura" name="cobertura" class="form-control">
            <option selected>Selecione...</option>
            <option value="telha_de_barro">Telha de barro</option>
            <option value="firocimento">Firocimento</option>
            <option value="concreto">Concreto</option>
            <option value="madeira">Madeira</option>
            <option value="zinco">Zinco</option>
            <option value="ausente">Ausente</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="forro">Forro</label>
          <select id="forro" name="forro" class="form-control">
            <option selected>Selecione...</option>
            <option value="concreto">Concreto</option>
            <option value="tabique">Tabique</option>
            <option value="pvc">PVC</option>
            <option value="gesso">Gesso</option>
            <option value="ausente">Ausente</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="esquadrias">Esquadrinas</label>
          <select id="esquadrias" name="esquadrias" class="form-control">
            <option selected>Selecione...</option>
            <option value="aluminio">Alumínio</option>
            <option value="madeira">Madeira</option>
            <option value="ferro">Ferro</option>
            <option value="chapeada">Chapeada</option>
            <option value="blindex">Blindex</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="classificacao">Classificação</label>
          <select id="classificacao" name="classificacao" class="form-control">
            <option selected>Selecione...</option>
            <option value="luxo">Luxo</option>
            <option value="fina">Fina</option>
            <option value="media">Média</option>
            <option value="modesta">Modesta</option>
            <option value="popular">Popular</option>
            <option value="barraco">Barraco</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="estado_de_conservacao">Estado de conservação</label>
          <select id="estado_de_conservacao" name="estado_de_conservacao" class="form-control">
            <option selected>Selecione...</option>
            <option value="otimo">Ótimo</option>
            <option value="bom">Bom</option>
            <option value="regular">Regular</option>
            <option value="pessimo">Péssimo</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="papiloscopia_no_local">Papiloscopia no local</label>
          <select id="papiloscopia_no_local" name="papiloscopia_no_local" class="form-control">
            <option selected>Selecione...</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
            <option value="nao_sabe_informar">Não sabe informar</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="local_violado">Local violado</label>
          <select id="local_violado" name="local_violado" class="form-control">
            <option selected>Selecione...</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
            <option value="nao_sabe_informar">Não sabe informar</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="proprietario_posseiro">Propietário posseiro</label>
          <input type="text" class="form-control" id="proprietario_posseiro" name="proprietario_posseiro">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="endereco">Endereço</label>
          <input type="text" class="form-control" id="endereco" name="endereco">
        </div>
        <div class="form-group col-md-4">
          <label for="cidade">Cidade</label>
          <input type="text" class="form-control" id="cidade" name="cidade">
        </div>
      </div>
    </fieldset>

    <fieldset class="scheduler-border">
      <legend class="scheduler-border">III - Dos Exames</legend>
      <div class="form-group">
        <textarea id="exames" name="exames" rows="3" class="form-control"></textarea>
      </div>
    </fieldset>

    <fieldset class="scheduler-border">
      <legend class="scheduler-border">IV - Conclusão</legend>
      <div class="form-group">
        <textarea id="conclusao" name="conclusao" rows="3" class="form-control"></textarea>
      </div>
    </fieldset>

    <fieldset class="scheduler-border">
      <legend class="scheduler-border">V - Fotos do laudo</legend>
      <div class="form-row">
        <div class="form-group col-md-7">
          <label for="foto_1">Foto 1</label>
          <input type="file" class="form-control" id="foto_1" name="foto_1">
          <textarea id="comentario_1" name="comentario_1" rows="2" placeholder="escreva aqui comentários sobre a 1ª foto selecionada..." class="form-control mt-2"></textarea>
        </div>
        <div class="col-md-5 d-flex justify-content-center align-items-center">
          <img src="{{url('imgs/picture.png')}}" alt="sem foto">
        </div>
      </div>

      <div class="form-row d-none" id="campos-foto2">
        <div class="form-group col-md-7" id="campos-foto2">
          <label for="foto_2">Foto 2</label>
          <input type="file" class="form-control" id="foto_2" name="foto_2">
          <textarea id="comentario_2" name="comentario_2" rows="2" placeholder="escreva aqui comentários sobre a 2ª foto selecionada..." class="form-control mt-2"></textarea>
        </div>
        <div class="col-md-5 d-flex justify-content-center align-items-center">
          <img src="{{url('imgs/picture.png')}}" alt="sem foto">
        </div>
      </div>

      <div class="form-row d-none" id="campos-foto3">
        <div class="form-group col-md-7">
          <label for="foto_3">Foto 3</label>
          <input type="file" class="form-control" id="foto_3" name="foto_3">
          <textarea id="comentario_3" name="comentario_3" rows="2" placeholder="escreva aqui comentários sobre a 3ª foto selecionada..." class="form-control mt-2"></textarea>
        </div>
        <div class="col-md-5 d-flex justify-content-center align-items-center">
          <img src="{{url('imgs/picture.png')}}" alt="sem foto">
        </div>
      </div>
      <div class="form-row d-none" id="campos-foto4">
        <div class="form-group col-md-7">
          <label for="foto_4">Foto 4</label>
          <input type="file" class="form-control" id="foto_4" name="foto_4">
          <textarea id="comentario_4" name="comentario_4" rows="2" placeholder="escreva aqui comentários sobre a 4ª foto selecionada..." class="form-control mt-2"></textarea>
        </div>
        <div class="col-md-5 d-flex justify-content-center align-items-center">
          <img src="{{url('imgs/picture.png')}}" alt="sem foto">
        </div>
      </div>
    </fieldset>

    <a href="{{ route('home') }}" class="btn btn-light">Cancelar</a>
    <button type="submit" class="btn btn-primary">Realizar o cadastro</button>
  </form>

</div><!-- /.container -->

@endsection

@section('javascript')
<script>
  $( document ).ready(function() {
    console.log( "Tudo ok!" );
  });
</script>
@endsection

@section('stylecss')
<style>
  fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
  }

  legend.scheduler-border {
      font-size: 1.2em !important;
      font-weight: bold !important;
      text-align: left !important;
  }

  legend.scheduler-border {
    width:inherit; /* Or auto */
    padding:0 10px; /* To give a bit of padding on the left and right */
    border-bottom:none;
  }
</style>
@endsection