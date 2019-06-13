<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="UTF-8">
  <title>Invoice - #123</title>

  <style type="text/css">
    @page {
        margin: 0px;
    }
    body {
        margin: 0px;
    }
    * {
      font-family: Verdana, Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .page-break {
      page-break-after: always;
    }
    a {
      color: #fff;
      text-decoration: none;
    }
    .text-right {
      text-align: right;
    }
    .text-left {
      text-align: left;
    }
    .text-center {
      text-align: center;
    }
    .paddind-left {
      padding-left: 10px;
    }
    

    /* CABECALHO */
    .cabecalho {
      color: #000;
    }
    .cabecalho h5 {
      color: #3CB371;
    }
    .cabecalho .logo {
      margin: 5px;
    }
    .cabecalho table {
      padding: 10px;
    }

    /* CONTEUDO */
    .conteudo td {
      /*border: 1px solid #696969;*/
    }
    .conteudo {
      margin: 15px;
    }
    .conteudo table {
      border-collapse: collapse;
    }
  </style>

</head>
<body>

  <div class="cabecalho">
    <table width="100%" style="margin-left: 15px;">
      <tr>
        <td align="left" style="width: 20%;">
          <img src="{{ public_path('imgs/logo1.png') }}" width="100">
        </td>
        <td align="center">
          <h4>GOVERNO DO ESTADO DE RORAIMA</h4>
          <h5>“Amazônia: Patrimônio dos Brasileiros”</h5>
          <h4>SECRETARIA DE ESTADO DA SEGURANÇA PÚBLICA</h4>
          <h4>POLÍCIA CIVIL</h4>
          <h4>INSTITUTO DE CRIMINALÍSTICA</h4>
        </td>
        <td align="right" style="width: 20%;">
          <img src="{{ public_path('imgs/logo2.png') }}" width="100">
        </td>
      </tr>
    </table>
    <hr>
    <table width="100%">
      <tr>
        <td align="right" style="width: 50%;">
          <em>Laudo nº{{ $laudo->numero_do_laudo }} /DPE/IC/PC/SESP/RR</em>
        </td>
      </tr>
    </table>
  </div>


  <br/>

  <div class="conteudo">
    <table width="100%" border="1" style="margin-left: 15px;">
      <tr>
        <td class="text-center"><strong>I - HISTÓRICO</strong></td>
      </tr>
      <tr>
        <td class="paddind-left">
          <p>
            Aos {{ date('d/m/Y', strtotime($laudo->data_da_ocorrencia)) }} neste Estado de Roraima e no 
            INSTITUTO DE CRIMINALÍSTICA de conformidade com a legislação e os dispositivos regulamentares vigentes, 
            pelo Diretor <strong>{{ $laudo->diretor }}</strong> foi designado o Perito Criminal <strong>{{ $laudo->perito }}</strong>
            para proceder a <strong>Exame Pericial em local de Crime contra Patrimônio</strong>, a fim de ser atendida a solicitação do 
            Delegado da <strong>{{ $laudo->autoridade_requisitante }}</strong>, desta capital, feita através da <strong>Requisição de Exame 
            Pericial nº {{ $laudo->numero_da_requisicao }}</strong>, referente ao {{ $laudo->numero_do_procedimento }}
            descrevendo fielmente e com todas as circustâncias o que encontrarem e bem assim esclarecerem tudo quanto interessar possa.
          </p>
        </td>
      </tr>
    </table>

    <table width="100%" border="1" style="margin-top: 30px; margin-left: 15px;">
      <tr>
        <td colspan="6" class="text-center"><strong>II - DO LOCAL</strong></td>
      </tr>
      <tr>
        <td colspan="6" class="text-center"><strong>CARACTERISTICAS DO PRÉDIO</strong></td>
      </tr>
      <tr>
        <td colspan="2" class="text-center">UTILIZAÇÃO</td>
        <td colspan="2" class="text-center">RECUOS</td>
        <td colspan="2" class="text-center">ÁREA DE CONSTRUÇÃO</td>
      </tr>
      <tr>
        <td colspan="2">
          <table width="70%">
            <tr><td class="text-right">Residência</td><td><input type="checkbox" name="residencia" {{ $laudo->utilizacao == 'residencia' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Escritório</td><td><input type="checkbox" name="escritorio" {{ $laudo->utilizacao == 'escritorio' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Comércio</td><td><input type="checkbox" name="comercio" {{ $laudo->utilizacao == 'comercio' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Armazém</td><td><input type="checkbox" name="armazem" {{ $laudo->utilizacao == 'armazem' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Templo Relgioso</td><td><input type="checkbox" name="templo_religioso" {{ $laudo->utilizacao == 'templo_religioso' ? 'checked' : '' }}></td></tr>
          </table>
        </td>
        <td colspan="2">
          <table width="100%">
            <tr><td class="paddind-left">De frente </td><td>{{ $laudo->recuo_frontal }}m</td></tr>
            <tr><td class="paddind-left">Lateral direita </td><td>{{ $laudo->recuo_lateral_direita }}m</td></tr>
            <tr><td class="paddind-left">Lateral esquerda </td><td>{{ $laudo->recuo_lateral_esquerda }}m</td></tr>
            <tr><td class="paddind-left">Fundos </td><td>{{ $laudo->recuo_fundos }}m</td></tr>
          </table>
        </td>
        <td colspan="2">
          <table width="80%">
            <tr><td class="text-right">Área do Imóvel </td><td class="text-left">&nbsp; {{ $laudo->area_do_imovel }}m<sup>2</sup></td></tr>
            <tr><td class="text-right">Área Construida </td><td class="text-left">&nbsp; {{ $laudo->area_construida }}m<sup>2</sup></td></tr>
            <tr><td class="text-right">Pavimentos nº </td><td>&nbsp; {{ $laudo->numero_de_pavimentos }}</td></tr>
            <tr><td class="text-right">Compartimento nº </td><td>&nbsp; {{ $laudo->numero_de_compartimentos }}</td></tr>
          </table>
        </td>
      </tr>
      <tr>
        <td class="text-center">CONSTRUÇÃO</td>
        <td class="text-center">PISO</td>
        <td class="text-center">COBERTURA</td>
        <td class="text-center">FORRO</td>
        <td class="text-center">ESQUADRIAS</td>
        <td class="text-center">CLASSIFICAÇÃO</td>
      </tr>
      <tr>
        <td>
          <table width="80%">
            <tr><td class="text-right">Concreto</td><td><input type="checkbox" name="concreto" {{ $laudo->tipo_de_construcao == 'concreto' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Alv. Bom Acab</td><td><input type="checkbox" name="alvenaria_bom_acabamento" {{ $laudo->tipo_de_construcao == 'alvenaria_bom_acabamento' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Alv. Mau Acab</td><td><input type="checkbox" name="alvenaria_mau_acabamento" {{ $laudo->tipo_de_construcao == 'alvenaria_mau_acabamento' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Madeira</td><td><input type="checkbox" name="madeira" {{ $laudo->tipo_de_construcao == 'madeira' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Mat. pré-fabri.</td><td><input type="checkbox" name="material_pre_fabricado" {{ $laudo->tipo_de_construcao == 'material_pre_fabricado' ? 'checked' : '' }}></td></tr>
          </table>
        </td>
        <td>
          <table>
            <tr><td class="text-right">Cerâmica</td><td><input type="checkbox" name="ceramica" {{ $laudo->piso == 'ceramica' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Porcelanato</td><td><input type="checkbox" name="porcelanato" {{ $laudo->piso == 'porcelanato' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Taco</td><td><input type="checkbox" name="taco" {{ $laudo->piso == 'taco' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Cimento</td><td><input type="checkbox" name="cimento" {{ $laudo->piso == 'cimento' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Chão batido</td><td><input type="checkbox" name="chao_batido" {{ $laudo->piso == 'chao_batido' ? 'checked' : '' }}></td></tr>
          </table>
        </td>
        <td>
          <table>
            <tr><td class="text-right">Telha de Barro</td><td><input type="checkbox" name="telha_de_barro" {{ $laudo->cobertura == 'telha_de_barro' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Fibro Cimento</td><td><input type="checkbox" name="fibrocimento" {{ $laudo->cobertura == 'fibrocimento' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Concreto</td><td><input type="checkbox" name="concreto" {{ $laudo->cobertura == 'concreto' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Madeira</td><td><input type="checkbox" name="madeira" {{ $laudo->cobertura == 'madeira' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Zinco</td><td><input type="checkbox" name="zinco" {{ $laudo->cobertura == 'zinco' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Ausente</td><td><input type="checkbox" name="ausente" {{ $laudo->cobertura == 'ausente' ? 'checked' : '' }}></td></tr>
          </table>
        </td>
        <td>
          <table>
            <tr><td class="text-right">Concreto</td><td><input type="checkbox" name="concreto" {{ $laudo->forro == 'concreto' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Tabique</td><td><input type="checkbox" name="tabique" {{ $laudo->forro == 'tabique' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">PVC</td><td><input type="checkbox" name="pvc" {{ $laudo->forro == 'pvc' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Gesso</td><td><input type="checkbox" name="gesso" {{ $laudo->forro == 'gesso' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Ausente</td><td><input type="checkbox" name="ausente" {{ $laudo->forro == 'ausente' ? 'checked' : '' }}></td></tr>
          </table>
        </td>
        <td>
          <table width="75%">
            <tr><td class="text-right">Alumínio</td><td><input type="checkbox" name="aluminio" {{ $laudo->esquadrias == 'aluminio' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Madeira</td><td><input type="checkbox" name="madeira" {{ $laudo->esquadrias == 'madeira' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Ferro</td><td><input type="checkbox" name="ferro" {{ $laudo->esquadrias == 'ferro' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Chapeada</td><td><input type="checkbox" name="chapeada" {{ $laudo->esquadrias == 'chapeada' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Bindex</td><td><input type="checkbox" name="blindex" {{ $laudo->esquadrias == 'blindex' ? 'checked' : '' }}></td></tr>
          </table>
        </td>
        <td>
          <table width="70%">
            <tr><td class="text-right">Luxo</td><td><input type="checkbox" name="luxo" {{ $laudo->classificacao == 'luxo' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Fina</td><td><input type="checkbox" name="fina" {{ $laudo->classificacao == 'fina' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Média</td><td><input type="checkbox" name="media" {{ $laudo->classificacao == 'media' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Modesta</td><td><input type="checkbox" name="modesta" {{ $laudo->classificacao == 'modesta' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Popular</td><td><input type="checkbox" name="popular" {{ $laudo->classificacao == 'popular' ? 'checked' : '' }}></td></tr>
            <tr><td class="text-right">Barraco</td><td><input type="checkbox" name="barraco" {{ $laudo->classificacao == 'barraco' ? 'checked' : '' }}></td></tr>
          </table>
        </td>
      </tr>
      <tr>
        <td colspan="4" class="paddind-left">OUTROS DADOS</td>
        <td colspan="2" class="paddind-left">ESTADO DE CONSERVAÇÃO</td>
      </tr>
      <tr>
        <td colspan="4" class="paddind-left">
          Proprietário: <em>{{ $laudo->proprietario_posseiro }}</em> <br>
          Rua: <em>{{ $laudo->endereco }}</em> | Cidade: <em>{{ $laudo->cidade }}</em>
        </td>
        <td colspan="2">
          <table width="80%">
            <tr>
              <td class="text-right">Ótimo</td><td><input type="checkbox" name="otimo" {{ $laudo->estado_de_conservacao == 'otimo' ? 'checked' : '' }}></td> 
              <td class="text-right">Bom</td><td><input type="checkbox" name="bom" {{ $laudo->estado_de_conservacao == 'bom' ? 'checked' : '' }}></td>
            </tr>
            <tr>
              <td class="text-right">Regular</td><td><input type="checkbox" name="regular" {{ $laudo->estado_de_conservacao == 'regular' ? 'checked' : '' }}></td> 
              <td class="text-right">Péssimo</td><td><input type="checkbox" name="pessimo" {{ $laudo->estado_de_conservacao == 'pessimo' ? 'checked' : '' }}></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>

    <div class="page-break"></div>

    <table width="100%" border="1" style="margin-top: 30px; margin-left: 15px;">
      <tr>
        <td class="text-center"><strong>III - DOS EXAMES</strong></td>
      </tr>
      <tr>
        <td class="paddind-left">
          <p>{{ $laudo->exames }}</p>
        </td>
      </tr>
    </table>

    <table width="100%" border="1" style="margin-top: 30px; margin-left: 15px;">
      <tr>
        <td class="text-center"><strong>IV - CONCLUSÃO</strong></td>
      </tr>
      <tr>
        <td class="paddind-left">
          <p>{{ $laudo->conclusao }}</p>
        </td>
      </tr>
    </table>
  

    <div class="page-break"></div>

    <table width="100%" border="1" style="margin-top: 30px; margin-left: 15px;">
      <tr>
        <td class="text-center" colspan="2"><h3>Relatório Fotográfico</h3></td>
      </tr>
      <tr>
        <td style="width: 60%;" class="text-center">Foto</td>
        <td class="text-center" style="width: 40%;">Comentário</td>
      </tr>
      <tr>
        <td style="padding: 10px;" class="text-center">
          <img src="{{ public_path("storage/laudosFurtoQualificado/{$laudo->foto_1}") }}" height="200" />
        </td>
        <td style="padding: 10px 5px; vertical-align: top;">
          <p>{{ $laudo->comentario_1 }}</p>
        </td>
      </tr>
      @if (isset($laudo->foto_2))
        <tr>
          <td style="padding: 10px;">
            <img src="{{ public_path("storage/laudosFurtoQualificado/{$laudo->foto_2}") }}" height="130" />
          </td>
          <td style="padding: 10px 5px; vertical-align: top;">
            <p>{{ $laudo->comentario_2 }}</p>
          </td>
        </tr>
      @endif
    </table>
  
  

  </div>
</body>

</html>