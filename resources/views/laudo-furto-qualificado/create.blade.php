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
          <label for="numeroLaudo">Nº do laudo</label>
          <input type="password" class="form-control" id="numeroLaudo" name="numeroLaudo">
        </div>
        <div class="form-group col-md-4">
          <label for="dataOcorrencia">Data da ocorrência</label>
          <input type="date" class="form-control" id="dataOcorrencia" name="dataOcorrenca">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="dataAcionamento">Data do acionamento</label>
          <input type="date" class="form-control" id="dataAcionamento" name="dataAcionamento">
        </div>
        <div class="form-group col-md-2">
          <label for="horaAcionamento">Hora do acionamento</label>
          <input type="time" class="form-control" id="horaAcionamento" name="horaAcionamento">
        </div>
        <div class="form-group col-md-4">
          <label for="perito">Perito</label>
          <input type="text" class="form-control" id="perito" name="perito">
        </div>
        <div class="form-group col-md-4">
          <label for="diretor">Diretor</label>
          <input type="text" class="form-control" id="diretor" name="diretor">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="numeroRequisicao">Nº da requisição</label>
          <input type="text" class="form-control" id="numeroRequisicao" name="numeroRequisicao">
        </div>
        <div class="form-group col-md-4">
            <label for="numeroProcedimento">Nº do procedimento</label>
            <input type="text" class="form-control" id="numeroProcedimento" name="numeroProcedimento">
          </div>
        <div class="form-group col-md-4">
          <label for="origemRequisicao">Origem da requisição</label>
          <input type="text" class="form-control" id="origemRequisicao" name="origemRequisicao">
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
            <label for="recuoFrontal">Recuo frontal</label>
            <input type="number" class="form-control" id="recuoFrontal" name="recuoFrontal">
        </div>
        <div class="form-group col-md-4">
            <label for="recuoLateralDireita">Recuo lateral direta</label>
            <input type="number" class="form-control" id="recuoLateralDireita" name="recuoLateralDireita">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
            <label for="recuoLateralEsquerda">Recuo lateral esquerda</label>
            <input type="number" class="form-control" id="recuoLateralEsquerda" name="recuoLateralEsquerda">
        </div>
        <div class="form-group col-md-4">
            <label for="recuoFundos">Recuo fundos</label>
            <input type="number" class="form-control" id="recuoFundos" name="recuoFundos">
        </div>
        <div class="form-group col-md-4">
            <label for="areaImovel">Área do imóvel</label>
            <input type="number" class="form-control" id="areaImovel" name="areaImovel">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
            <label for="areaContruida">Área contruida</label>
            <input type="number" class="form-control" id="areaContruida" name="areaContruida">
        </div>
        <div class="form-group col-md-2">
            <label for="numeroPavimentos">Nº de pavimentos</label>
            <input type="number" class="form-control" id="numeroPavimentos" name="numeroPavimentos">
        </div>
        <div class="form-group col-md-2">
            <label for="numeroCompartimentos">Nº de compartimentos</label>
            <input type="number" class="form-control" id="numeroCompartimentos" name="numeroCompartimentos">
        </div>
        <div class="form-group col-md-4">
          <label for="tipoContrucao">Tipo de construção</label>
          <select id="tipoContrucao" name="tipoContrucao" class="form-control">
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
          <label for="estadoConservacao">Estado de conservação</label>
          <select id="estadoConservacao" name="estadoConservacao" class="form-control">
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
          <label for="papiloscopiaNoLocal">Papiloscopia no local</label>
          <select id="papiloscopiaNoLocal" name="papiloscopiaNoLocal" class="form-control">
            <option selected>Selecione...</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
            <option value="nao_sabe_informar">Não sabe informar</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="localViolado">Local violado</label>
          <select id="localViolado" name="localViolado" class="form-control">
            <option selected>Selecione...</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
            <option value="nao_sabe_informar">Não sabe informar</option>
          </select>
        </div>
        <div class="form-group col-md-4">
            <label for="proprietarioPosseiro">Propietário posseiro</label>
            <input type="text" class="form-control" id="proprietarioPosseiro" name="proprietarioPosseiro">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
            <label for="endereco">Endereço</label>
            <input type="number" class="form-control" id="endereco" name="endereco">
        </div>
        <div class="form-group col-md-4">
            <label for="cidade">Cidade</label>
            <input type="number" class="form-control" id="cidade" name="cidade">
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

    <a href="{{ route('home') }}" class="btn btn-light">Cancelar</a>
    <button type="submit" class="btn btn-primary">Realizar o cadastro</button>
  </form>

</div><!-- /.container -->

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