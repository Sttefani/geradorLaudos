{!! csrf_field() !!}
<fieldset class="scheduler-border">
  <legend class="scheduler-border">I - Histórico</legend>
  <div class="form-row">
    <div class="form-group col-lg-4 col-md-6">
      <label for="numero_do_laudo">Nº do laudo</label>
      <input type="text" id="numero_do_laudo" name="numero_do_laudo" value="{{ isset($laudo) ? $laudo->numero_do_laudo : old('numero_do_laudo') }}"
        class="form-control @error('numero_do_laudo') is-invalid @enderror"
      >
      @error('numero_do_laudo')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="data_da_ocorrencia">Data da ocorrência</label>
      <input type="date" id="data_da_ocorrencia" name="data_da_ocorrencia" value="{{ isset($laudo) ? $laudo->data_da_ocorrencia : old('data_da_ocorrencia') }}"
        class="form-control @error('data_da_ocorrencia') is-invalid @enderror"
      >
      @error('data_da_ocorrencia')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="data_do_acionamento">Data do acionamento</label>
      <input type="date" id="data_do_acionamento" name="data_do_acionamento" value="{{ isset($laudo) ? $laudo->data_do_acionamento : old('data_do_acionamento') }}"
        class="form-control @error('data_do_acionamento') is-invalid @enderror"
      >
      @error('data_do_acionamento')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="hora_do_acionamento">Hora do acionamento</label>
      <input type="time" id="hora_do_acionamento" name="hora_do_acionamento" value="{{ isset($laudo) ? $laudo->hora_do_acionamento : old('hora_do_acionamento') }}"
        class="form-control @error('hora_do_acionamento') is-invalid @enderror"
      >
      @error('hora_do_acionamento')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="data_da_chegada_local">Data da chegada ao local</label>
      <input type="date" id="data_da_chegada_local" name="data_da_chegada_local" value="{{ isset($laudo) ? $laudo->data_da_chegada_local : old('data_da_chegada_local') }}"
        class="form-control @error('data_da_chegada_local') is-invalid @enderror"
      >
      @error('data_da_chegada_local')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="hora_da_chegada_local">Hora da chegada ao local</label>
      <input type="time" id="hora_da_chegada_local" name="hora_da_chegada_local" value="{{ isset($laudo) ? $laudo->hora_da_chegada_local : old('hora_da_chegada_local') }}"
        class="form-control @error('hora_da_chegada_local') is-invalid @enderror"
      >
      @error('hora_da_chegada_local')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="perito">Perito</label>
      <input type="text" id="perito" name="perito" value="{{ isset($laudo) ? $laudo->perito : old('perito') }}"
        class="form-control @error('perito') is-invalid @enderror"
      >
      @error('perito')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="diretor">Diretor</label>
      <input type="text" id="diretor" name="diretor" value="{{ isset($laudo) ? $laudo->diretor : old('diretor') }}"
        class="form-control @error('diretor') is-invalid @enderror"
      >
      @error('diretor')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="numero_da_requisicao">Nº da requisição</label>
      <input type="text" id="numero_da_requisicao" name="numero_da_requisicao" value="{{ isset($laudo) ? $laudo->numero_da_requisicao : old('numero_da_requisicao') }}"
        class="form-control @error('numero_da_requisicao') is-invalid @enderror"
      >
      @error('numero_da_requisicao')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="numero_do_procedimento">Nº do Procedimento</label>
      <input type="text" id="numero_do_procedimento" name="numero_do_procedimento" value="{{ isset($laudo) ? $laudo->numero_do_procedimento : old('numero_do_procedimento') }}"
        class="form-control @error('numero_do_procedimento') is-invalid @enderror"
      >
      @error('numero_do_procedimento')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="origem_da_requisicao">Origem da requisição</label>
      <input type="text" id="origem_da_requisicao" name="origem_da_requisicao" value="{{ isset($laudo) ? $laudo->origem_da_requisicao : old('origem_da_requisicao') }}"
        class="form-control @error('origem_da_requisicao') is-invalid @enderror"
      >
      @error('origem_da_requisicao')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="autoridade_requisitante">Autoridade requisitante</label>
      <input type="text" id="autoridade_requisitante" name="autoridade_requisitante" value="{{ isset($laudo) ? $laudo->autoridade_requisitante : old('autoridade_requisitante') }}"
        class="form-control @error('autoridade_requisitante') is-invalid @enderror"
      >
      @error('autoridade_requisitante')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div><!-- /.form-row -->
</fieldset>

<fieldset class="scheduler-border">
  <legend class="scheduler-border">II - Do Local</legend>
  <div class="form-row">
    <div class="form-group col-lg-4 col-md-6">
      <label for="utilizacao">Utilização</label>
      <select id="utilizacao" name="utilizacao" class="form-control @error('utilizacao') is-invalid @enderror">
        <option value="">Selecione...</option>
        <option value="residencia" {{isset($laudo) && $laudo->utilizacao === 'residencia' || old('utilizacao') === 'residencia' ? 'selected' : ''}}>Residência</option>
        <option value="escritorio" {{isset($laudo) && $laudo->utilizacao === 'escritorio' || old('utilizacao') === 'escritorio' ? 'selected' : ''}}>Escritório</option>
        <option value="comercio" {{isset($laudo) && $laudo->utilizacao === 'comercio' || old('utilizacao') === 'comercio' ? 'selected' : ''}}>Comércio</option>
        <option value="armazem" {{isset($laudo) && $laudo->utilizacao === 'armazem' || old('utilizacao') === 'armazem' ? 'selected' : ''}}>Armazém</option>
        <option value="templo_religioso" {{isset($laudo) && $laudo->utilizacao === 'templo_religioso' || old('utilizacao') === 'templo_religioso' ? 'selected' : ''}}>Templo Religioso</option>
      </select>
      @error('utilizacao')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="recuo_frontal">Recuo frontal</label>
      <div class="input-group">
        <input type="number" class="form-control" id="recuo_frontal" name="recuo_frontal" value="{{ isset($laudo) ? $laudo->recuo_frontal : old('recuo_frontal') }}">
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2">m</span>
        </div>
      </div>
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="recuo_lateral_direita">Recuo lateral direta</label>
      <div class="input-group">
        <input type="number" class="form-control" id="recuo_lateral_direita" name="recuo_lateral_direita" value="{{ isset($laudo) ? $laudo->recuo_lateral_direita : old('recuo_lateral_direita') }}">
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2">m</span>
        </div>
      </div>
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="recuo_lateral_esquerda">Recuo lateral esquerda</label>
      <div class="input-group">
        <input type="number" class="form-control" id="recuo_lateral_esquerda" name="recuo_lateral_esquerda" value="{{ isset($laudo) ? $laudo->recuo_lateral_esquerda : old('recuo_lateral_esquerda') }}">
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2">m</span>
        </div>
      </div>
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="recuo_fundos">Recuo fundos</label>
      <div class="input-group">
        <input type="number" class="form-control" id="recuo_fundos" name="recuo_fundos" value="{{ isset($laudo) ? $laudo->recuo_fundos : old('recuo_fundos') }}">
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2">m</span>
        </div>
      </div>
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="area_do_imovel">Área do imóvel</label>
      <div class="input-group">
        <input type="number" id="area_do_imovel" name="area_do_imovel" value="{{ isset($laudo) ? $laudo->area_do_imovel : old('area_do_imovel') }}"
          class="form-control @error('area_do_imovel') is-invalid @enderror"
        >
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2">m<sup>2</sup></span>
        </div>
        @error('area_do_imovel')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="area_construida">Área construída</label>
      <div class="input-group">
        <input type="number" id="area_construida" name="area_construida" value="{{ isset($laudo) ? $laudo->area_construida : old('area_construida') }}"
          class="form-control @error('area_do_imovel') is-invalid @enderror"
        >
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2">m<sup>2</sup></span>
        </div>
        @error('area_construida')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="form-group col-lg-2 col-md-6">
      <label for="numero_de_pavimentos">Nº de pavimentos</label>
      <input type="number" id="numero_de_pavimentos" name="numero_de_pavimentos" value="{{ isset($laudo) ? $laudo->numero_de_pavimentos : old('numero_de_pavimentos') }}"
        class="form-control @error('numero_de_pavimentos') is-invalid @enderror"
      >
      @error('numero_de_pavimentos')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-2 col-md-6">
      <label for="numero_de_compartimentos">Nº de compartimentos</label>
      <input type="number" id="numero_de_compartimentos" name="numero_de_compartimentos" value="{{ isset($laudo) ? $laudo->numero_de_compartimentos : old('numero_de_compartimentos') }}"
        class="form-control @error('numero_de_compartimentos') is-invalid @enderror"
      >
      @error('numero_de_compartimentos')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="tipo_de_construcao">Tipo de construção</label>
      <select id="tipo_de_construcao" name="tipo_de_construcao" class="form-control @error('tipo_de_construcao') is-invalid @enderror">
        <option value="">Selecione...</option>
        <option value="concreto" {{isset($laudo) && $laudo->tipo_de_construcao === 'concreto' || old('tipo_de_construcao') === 'concreto' ? 'selected' : ''}}>Concreto</option>
        <option value="alvenaria_bom_acabamento" {{isset($laudo) && $laudo->alvenaria_bom_acabamento === 'concreto' || old('tipo_de_construcao') === 'alvenaria_bom_acabamento' ? 'selected' : ''}}>Alvenaria bom acabamento</option>
        <option value="alvenaria_mau_acabamento" {{isset($laudo) && $laudo->alvenaria_mau_acabamento === 'concreto' || old('tipo_de_construcao') === 'alvenaria_mau_acabamento' ? 'selected' : ''}}>Alvenaria mau acabamento</option>
        <option value="madeira" {{isset($laudo) && $laudo->madeira === 'concreto' || old('tipo_de_construcao') === 'madeira' ? 'selected' : ''}}>Madeira</option>
        <option value="material_pre_fabricado" {{isset($laudo) && $laudo->material_pre_fabricado === 'material_pre_fabricado' || old('tipo_de_construcao') === 'material_pre_fabricado' ? 'selected' : ''}}>Material pré-fabricado</option>
      </select>
      @error('tipo_de_construcao')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="piso">Piso</label>
      <select id="piso" name="piso" class="form-control @error('piso') is-invalid @enderror">
        <option value="">Selecione...</option>
        <option value="ceramica" {{isset($laudo) && $laudo->piso === 'ceramica' || old('piso') === 'ceramica' ? 'selected' : ''}}>Cerâmica</option>
        <option value="porcelanato" {{isset($laudo) && $laudo->piso === 'porcelanato' || old('piso') === 'porcelanato' ? 'selected' : ''}}>Porcelanato</option>
        <option value="taco" {{isset($laudo) && $laudo->piso === 'taco' || old('piso') === 'taco' ? 'selected' : ''}}>Taco</option>
        <option value="cimento" {{isset($laudo) && $laudo->piso === 'cimento' || old('piso') === 'cimento' ? 'selected' : ''}}>Cimento</option>
        <option value="chao_batido" {{isset($laudo) && $laudo->piso === 'chao_batido' || old('piso') === 'chao_batido' ? 'selected' : ''}}>Chão batido</option>
      </select>
      @error('piso')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="cobertura">Cobertura</label>
      <select id="cobertura" name="cobertura" class="form-control @error('cobertura') is-invalid @enderror">
        <option value="">Selecione...</option>
        <option value="telha_de_barro" {{isset($laudo) && $laudo->cobertura === 'telha_de_barro' || old('cobertura') === 'telha_de_barro' ? 'selected' : ''}}>Telha de barro</option>
        <option value="fibrocimento" {{isset($laudo) && $laudo->cobertura === 'fibrocimento' || old('cobertura') === 'fibrocimento' ? 'selected' : ''}}>Fibrocimento</option>
        <option value="concreto" {{isset($laudo) && $laudo->cobertura === 'concreto' || old('cobertura') === 'concreto' ? 'selected' : ''}}>Concreto</option>
        <option value="madeira" {{isset($laudo) && $laudo->cobertura === 'madeira' || old('cobertura') === 'madeira' ? 'selected' : ''}}>Madeira</option>
        <option value="zinco" {{isset($laudo) && $laudo->cobertura === 'zinco' || old('cobertura') === 'zinco' ? 'selected' : ''}}>Zinco</option>
        <option value="ausente" {{isset($laudo) && $laudo->cobertura === 'ausente' || old('cobertura') === 'ausente' ? 'selected' : ''}}>Ausente</option>
      </select>
      @error('cobertura')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="forro">Forro</label>
      <select id="forro" name="forro" class="form-control @error('forro') is-invalid @enderror">
        <option value="">Selecione...</option>
        <option value="concreto" {{isset($laudo) && $laudo->forro === 'concreto' || old('forro') === 'concreto' ? 'selected' : ''}}>Concreto</option>
        <option value="tabique" {{isset($laudo) && $laudo->forro === 'tabique' || old('forro') === 'tabique' ? 'selected' : ''}}>Tabique</option>
        <option value="pvc" {{isset($laudo) && $laudo->forro === 'pvc' || old('forro') === 'pvc' ? 'selected' : ''}}>PVC</option>
        <option value="gesso" {{isset($laudo) && $laudo->forro === 'gesso' || old('forro') === 'gesso' ? 'selected' : ''}}>Gesso</option>
        <option value="ausente" {{isset($laudo) && $laudo->forro === 'ausente' || old('forro') === 'ausente' ? 'selected' : ''}}>Ausente</option>
      </select>
      @error('forro')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="esquadrias">Esquadrinas</label>
      <select id="esquadrias" name="esquadrias" class="form-control @error('esquadrias') is-invalid @enderror">
        <option value="">Selecione...</option>
        <option value="aluminio" {{isset($laudo) && $laudo->esquadrias === 'concreto' || old('esquadrias') === 'concreto' ? 'selected' : ''}}>Alumínio</option>
        <option value="madeira" {{isset($laudo) && $laudo->esquadrias === 'madeira' || old('esquadrias') === 'madeira' ? 'selected' : ''}}>Madeira</option>
        <option value="ferro" {{isset($laudo) && $laudo->esquadrias === 'ferro' || old('esquadrias') === 'ferro' ? 'selected' : ''}}>Ferro</option>
        <option value="chapeada" {{isset($laudo) && $laudo->esquadrias === 'chapeada' || old('esquadrias') === 'chapeada' ? 'selected' : ''}}>Chapeada</option>
        <option value="blindex" {{isset($laudo) && $laudo->esquadrias === 'blindex' || old('esquadrias') === 'blindex' ? 'selected' : ''}}>Blindex</option>
      </select>
      @error('esquadrias')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="classificacao">Classificação</label>
      <select id="classificacao" name="classificacao" class="form-control @error('classificacao') is-invalid @enderror">
        <option value="">Selecione...</option>
        <option value="luxo" {{isset($laudo) && $laudo->classificacao === 'luxo' || old('classificacao') === 'luxo' ? 'selected' : ''}}>Luxo</option>
        <option value="fina" {{isset($laudo) && $laudo->classificacao === 'fina' || old('classificacao') === 'fina' ? 'selected' : ''}}>Fina</option>
        <option value="media" {{isset($laudo) && $laudo->classificacao === 'media' || old('classificacao') === 'media' ? 'selected' : ''}}>Média</option>
        <option value="modesta" {{isset($laudo) && $laudo->classificacao === 'modesta' || old('classificacao') === 'modesta' ? 'selected' : ''}}>Modesta</option>
        <option value="popular" {{isset($laudo) && $laudo->classificacao === 'popular' || old('classificacao') === 'popular' ? 'selected' : ''}}>Popular</option>
        <option value="barraco" {{isset($laudo) && $laudo->classificacao === 'barraco' || old('classificacao') === 'barraco' ? 'selected' : ''}}>Barraco</option>
      </select>
      @error('classificacao')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="estado_de_conservacao">Estado de conservação</label>
      <select id="estado_de_conservacao" name="estado_de_conservacao" class="form-control @error('estado_de_conservacao') is-invalid @enderror">
        <option value="">Selecione...</option>
        <option value="otimo" {{isset($laudo) && $laudo->estado_de_conservacao === 'otimo' || old('estado_de_conservacao') === 'otimo' ? 'selected' : ''}}>Ótimo</option>
        <option value="bom" {{isset($laudo) && $laudo->estado_de_conservacao === 'bom' || old('estado_de_conservacao') === 'bom' ? 'selected' : ''}}>Bom</option>
        <option value="regular" {{isset($laudo) && $laudo->estado_de_conservacao === 'regular' || old('estado_de_conservacao') === 'regular' ? 'selected' : ''}}>Regular</option>
        <option value="pessimo" {{isset($laudo) && $laudo->estado_de_conservacao === 'pessimo' || old('estado_de_conservacao') === 'pessimo' ? 'selected' : ''}}>Péssimo</option>
      </select>
      @error('estado_de_conservacao')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="papiloscopia_no_local">Papiloscopia no local</label>
      <select id="papiloscopia_no_local" name="papiloscopia_no_local" class="form-control @error('papiloscopia_no_local') is-invalid @enderror">
        <option value="">Selecione...</option>
        <option value="sim" {{isset($laudo) && $laudo->papiloscopia_no_local === 'sim' || old('papiloscopia_no_local') === 'sim' ? 'selected' : ''}}>Sim</option>
        <option value="nao" {{isset($laudo) && $laudo->papiloscopia_no_local === 'nao' || old('papiloscopia_no_local') === 'nao' ? 'selected' : ''}}>Não</option>
        <option value="nao_sabe_informar" {{isset($laudo) && $laudo->papiloscopia_no_local === 'nao_sabe_informar' || old('papiloscopia_no_local') === 'nao_sabe_informar' ? 'selected' : ''}}>Não sabe informar</option>
      </select>
      @error('papiloscopia_no_local')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="local_violado">Local violado</label>
      <select id="local_violado" name="local_violado" class="form-control @error('local_violado') is-invalid @enderror">
        <option value="">Selecione...</option>
        <option value="sim" {{isset($laudo) && $laudo->local_violado === 'sim' || old('local_violado') === 'sim' ? 'selected' : ''}}>Sim</option>
        <option value="nao" {{isset($laudo) && $laudo->local_violado === 'nao' || old('local_violado') === 'nao' ? 'selected' : ''}}>Não</option>
        <option value="nao_sabe_informar" {{isset($laudo) && $laudo->local_violado === 'nao_sabe_informar' || old('local_violado') === 'nao_sabe_informar' ? 'selected' : ''}}>Não sabe informar</option>
      </select>
      @error('local_violado')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="proprietario_posseiro">Propietário posseiro</label>
      <input type="text" class="form-control" id="proprietario_posseiro" name="proprietario_posseiro" value="{{ isset($laudo) ? $laudo->proprietario_posseiro : old('proprietario_posseiro') }}">
    </div>
    <div class="form-group col-lg-4 col-md-6">
      <label for="cidade">Cidade</label>
      <input type="text" id="cidade" name="cidade" value="{{ isset($laudo) ? $laudo->cidade : old('cidade') }}"
        class="form-control @error('cidade') is-invalid @enderror"
      >
      @error('cidade')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group col-lg-8 col-md-12">
      <label for="endereco">Endereço</label>
      <input type="text" id="endereco" name="endereco" value="{{ isset($laudo) ? $laudo->endereco : old('endereco') }}"
        class="form-control @error('cidade') is-invalid @enderror"
      >
      @error('endereco')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div><!-- /.form-row -->
</fieldset>

<fieldset class="scheduler-border">
  <legend class="scheduler-border">III - Dos Exames</legend>
  <div class="form-group">
    <textarea id="exames" name="exames" rows="3" class="form-control @error('exames') is-invalid @enderror">{{ isset($laudo) ? $laudo->exames : old('exames') }}</textarea>
    @error('exames')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</fieldset>

<fieldset class="scheduler-border">
  <legend class="scheduler-border">IV - Conclusão</legend>
  <div class="form-group">
    <textarea id="conclusao" name="conclusao" rows="3" class="form-control @error('conclusao') is-invalid @enderror">{{ isset($laudo) ? $laudo->conclusao : old('conclusao') }}</textarea>
    @error('conclusao')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</fieldset>

<fieldset class="scheduler-border">
  <legend class="scheduler-border">V - Fotos do laudo</legend>
  <div class="form-row">

    <div class="form-group col-md-7">
      <label>Foto 1</label>
      <div class="input-group">
        <span class="input-group-btn">
          <span class="btn btn-default btn-file">
            Escolher imagem <input type="file" id="imgInpFoto1" name="foto_1">
          </span>
        </span>
        <input type="text" class="form-control" readonly>
      </div>
      <textarea id="comentario_1" name="comentario_1" rows="2" placeholder="escreva aqui comentários sobre a 1ª foto selecionada..." class="form-control mt-2">{{ isset($laudo) ? $laudo->comentario_1 : old('comentario_1') }}</textarea>
    </div>
    <div class="col-md-5 d-flex justify-content-center align-items-center">
      @if (isset($laudo->foto_1))
        <img src="{{ url("storage/laudosFurtoQualificado/{$laudo->foto_1}") }}" height="150" id="img-upload1" alt="foto 1 do laudo" />
      @else
        <img src="{{url('imgs/picture.png')}}" id="img-upload1">
      @endif
    </div>
  </div>

  <div class="form-row" id="campos-foto2">
    <div class="form-group col-md-7" id="campos-foto2">
      <label for="foto_2">Foto 2</label>
      <div class="input-group">
        <span class="input-group-btn">
          <span class="btn btn-default btn-file">
            Escolher imagem <input type="file" id="imgInpFoto2" name="foto_2">
          </span>
        </span>
        <input type="text" class="form-control" readonly>
      </div>
      <textarea id="comentario_2" name="comentario_2" rows="2" placeholder="escreva aqui comentários sobre a 2ª foto selecionada..." class="form-control mt-2"></textarea>
    </div>
    <div class="col-md-5 d-flex justify-content-center align-items-center">
      @if (isset($laudo->foto_2))
        <img src="{{ url("storage/laudosFurtoQualificado/{$laudo->foto_2}") }}" height="150" id="img-upload2" alt="foto 2 do laudo" />
      @else
        <img src="{{url('imgs/picture.png')}}" id="img-upload2">
      @endif
    </div>
  </div>

  <div class="form-row" id="campos-foto3">
    <div class="form-group col-md-7">
      <label for="foto_3">Foto 3</label>
      <div class="input-group">
        <span class="input-group-btn">
          <span class="btn btn-default btn-file">
            Escolher imagem <input type="file" id="imgInpFoto3" name="foto_3">
          </span>
        </span>
        <input type="text" class="form-control" readonly>
      </div>
      <textarea id="comentario_3" name="comentario_3" rows="2" placeholder="escreva aqui comentários sobre a 3ª foto selecionada..." class="form-control mt-2"></textarea>
    </div>
    <div class="col-md-5 d-flex justify-content-center align-items-center">
      @if (isset($laudo->foto_3))
        <img src="{{ url("storage/laudosFurtoQualificado/{$laudo->foto_3}") }}" height="150" id="img-upload3" alt="foto 3 do laudo" />
      @else
        <img src="{{url('imgs/picture.png')}}" id="img-upload3">
      @endif
    </div>
  </div>

  <div class="form-row" id="campos-foto4">
    <div class="form-group col-md-7">
      <label for="foto_4">Foto 4</label>
      <div class="input-group">
        <span class="input-group-btn">
          <span class="btn btn-default btn-file">
            Escolher imagem <input type="file" id="imgInpFoto4" name="foto_4">
          </span>
        </span>
        <input type="text" class="form-control" readonly>
      </div>
      <textarea id="comentario_4" name="comentario_4" rows="2" placeholder="escreva aqui comentários sobre a 4ª foto selecionada..." class="form-control mt-2"></textarea>
    </div>
    <div class="col-md-5 d-flex justify-content-center align-items-center">
      @if (isset($laudo->foto_4))
        <img src="{{ url("storage/laudosFurtoQualificado/{$laudo->foto_4}") }}" height="150" id="img-upload4" alt="foto 4 do laudo" />
      @else
        <img src="{{url('imgs/picture.png')}}" id="img-upload4">
      @endif
    </div>
  </div>
</fieldset>

<a href="{{ route('home') }}" class="btn btn-light">Cancelar</a>
<button type="submit" class="btn btn-primary">Realizar o cadastro</button>

@section('javascript')
<script>
  $(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
      var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
      var input = $(this).parents('.input-group').find(':text'),
          log = label;
      
      if( input.length ) {
          input.val(log);
      } else {
          if( log ) alert(log);
      }
		});

		function readURL(input, numeroDaFoto) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
          $('#img-upload'+numeroDaFoto).attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
      }
		}

		$("#imgInpFoto1").change(function(){
      readURL(this, '1');
		});
    $("#imgInpFoto2").change(function(){
      readURL(this, '2');
		});
    $("#imgInpFoto3").change(function(){
      readURL(this, '3');
		});
    $("#imgInpFoto4").change(function(){
      readURL(this, '4');
		});
    $("#imgInpFoto5").change(function(){
      readURL(this, '5');
		});
    $("#imgInpFoto6").change(function(){
      readURL(this, '6');
		});
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


  /*
  **** PREVIEW PARA UPLOAD DE FOTO **** 
  */
  .btn-file {
    position: relative;
    overflow: hidden;
    border: 1px solid #CCC;
  }
  .btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
  }
  #img-upload1, #img-upload2, #img-upload3, #img-upload4, #img-upload5, #img-upload6 {
    max-height: 150px;
  }
</style>
@endsection