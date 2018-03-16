<script type="text/javascript">
  $(".oclusal, .oclusal3, .palat, .ling, .vestsup, .vestinf, .distdir, .distesq, .mesidir, .mesiesq, .monorad, .biradvsup, .biradpsup, .triradpsup, .triradmvsup, .triraddvsup, .triraddvsup2, .triradmvsup2, .biradminf, .biraddinf, .biradminf2, .biraddinf2, .monoradb, .biradvsupb, .biradpsupb, .triradpsupb, .triradmvsupb, .triraddvsupb, .triraddvsup2b, .triradmvsup2b, .biradminfb, .biraddinfb, .biradminf2b, .biraddinf2b, .monoradc, .biradvsupc, .biradpsupc, .triradpsupc, .triradmvsupc, .triraddvsupc, .triraddvsup2c, .triradmvsup2c, .biradminfc, .biraddinfc, .biradminf2c, .biraddinf2c").click(function(){
    var cor = $(this).css('background-color');
    if(cor == 'rgb(17, 153, 244)'){
      $(this).css('background-color','transparent');
      $(this).children('.variavel').prop('checked', false);
    } else{
      $(this).css('background-color','#1199f4');
      $(this).children('.variavel').prop('checked', true);
    }
  });
</script>
<div id="alteracoes_tecido_osseo">
  <div class="form-group row">
    <label class="col-md-12 col-form-label font-weight-bold">ALTERAÇÕES EM TECIDO ÓSSEO</label>
  </div>
  <div class="custom-controls-stacked">
    <label class="custom-control custom-radio">
      <input name="alteracoes-tecido_osseo" onchange="alteracoes('tecido_osseo');" type="radio" value="Sem alterações" class="custom-control-input alteracoes-tecido_osseo">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Sem alterações</span>
    </label>
    <label class="custom-control custom-radio">
      <input name="alteracoes-tecido_osseo" onchange="alteracoes('tecido_osseo');" type="radio" value="Com alterações" class="custom-control-input alteracoes-tecido_osseo">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Com alterações</span>
    </label>
  </div>
</div>
<div id="alt_tecido_osseo" style="display:none">
  <div class="form-group row">
    <label class="col-md-3 col-form-label font-weight-bold">Características clínicas</label>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Gênero</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="genero">
        <option value="" selected>Selecionar...</option>
        <option value="Desconhecido">Desconhecido</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Cor / raça</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="cor">
        <option value="" selected>Selecionar...</option>
        <option value="Branca">Branca</option>
        <option value="Preta">Preta</option>
        <option value="Parda">Parda</option>
        <option value="Amarela">Amarela</option>
        <option value="Indígena">Indígena</option>
        <option value="Não declarada">Não deseja declarar</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Dor</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="dor">
        <option value="" selected>Selecionar...</option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Parestesia</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="parestesia">
        <option value="" selected>Selecionar...</option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-md-3 col-form-label font-weight-bold">Características radiográficas</label>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Localização</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="localizacao" id="localizacaoto">
        <option value="" selected>Selecionar...</option>
        <option value="Unilateral - esquerda">Unilateral - esquerda</option>
        <option value="Unilateral - direita">Unilateral - direita</option>
        <option value="Bilateral">Bilateral</option>
        <option value="Generalizada">Generalizada</option>
        <option value="Mandíbula">Mandíbula</option>
        <option value="Maxila">Maxila</option>
        <option value="Maxila e mandíbula">Maxila e mandíbula</option>
        <option value="Outra">Outra</option>
      </select>
    </div>
  </div>
  <div class="form-group row outralocalizacaoto-invisible" style="display: none;">
    <label class="col-md-2 col-form-label">Localização</label>
    <div class="col-md-10">
      <input class="form-control" type="text" value="" name="localizacao2">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Centro da lesão</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="centro_lesao" id="centro_lesaoto">
        <option value="" selected>Selecionar...</option>
        <option value="Incisivos">Incisivos</option>
        <option value="Caninos">Caninos</option>
        <option value="Pré-molares - Acima do canal mandibular">Pré-molares - Acima do canal mandibular</option>
        <option value="Pré-molares - Abaixo do canal mandibular">Pré-molares - Abaixo do canal mandibular</option>
        <option value="Molares - Acima do canal mandibular">Pré-molares - Acima do canal mandibular</option>
        <option value="Molares - Abaixo do canal mandibular">Pré-molares - Abaixo do canal mandibular</option>
        <option value="Caninos">Caninos</option>
        <option value="Caninos">Caninos</option>
        <option value="Caninos">Caninos</option>
        <option value="Ramo mandibular">Ramo mandibular</option>
        <option value="Processo coronóide">Processo coronóide</option>
        <option value="ATM">ATM</option>
        <option value="Seio maxilar">Seio maxilar</option>
        <option value="Fossas nasais">Fossas nasais</option>
        <option value="Outro">Outro</option>
      </select>
    </div>
  </div>
  <div class="form-group row outrocentroto-invisible" style="display: none;">
    <label class="col-md-2 col-form-label">Centro da lesão</label>
    <div class="col-md-10">
      <input class="form-control" type="text" value="" name="centro_lesao2">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Relação com dentes</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="relacao_dentes">
        <option value="" selected>Selecionar...</option>
        <option value="Sem relação">Sem relação</option>
        <option value="Coroa associada">Coroa associada</option>
        <option value="Raiz associada">Raiz associada</option>
        <option value="Ápice associado - vital">Ápice associado - vital</option>
        <option value="Ápice associado - não vital">Ápice associado - não vital</option>
        <option value="Ápice associado - desconhecido">Ápice associado - desconhecido</option>
        <option value="Dente ausente">Dente ausente</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Número de lesões</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="numero_lesoes">
        <option value="" selected>Selecionar...</option>
        <option value="Uma">Uma</option>
        <option value="Duas">Duas</option>
        <option value="Três ou mais">Três ou mais</option>
        <option value="Generalizada">Generalizada</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Maior diâmetro</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="maior_diametro" id="maior_diametroto">
        <option value="" selected>Selecionar...</option>
        <option value="Menor que 1mm">Menor que 1mm</option>
        <option value="1mm a 2cm">1mm a 2cm</option>
        <option value="2cm a 3cm">2cm a 3cm</option>
        <option value="Maior que 3cm">Maior que 3cm</option>
      </select>
    </div>
  </div>
  <div class="form-group row maiordiametroto-invisible" style="display: none;">
    <label class="col-md-2 col-form-label">Tamanho(cm)</label>
    <div class="col-md-10">
      <input class="form-control" type="text" value="" name="maior_diametro2">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Origem da lesão</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="origem_lesao">
        <option value="" selected>Selecionar...</option>
        <option value="Central">Central</option>
        <option value="Periférica">Periférica</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-3 col-form-label font-weight-bold">Periferia</label>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Limites</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="limites">
        <option value="" selected>Selecionar...</option>
        <option value="Definido - corticalizado">Definido - corticalizado</option>
        <option value="Definido - não corticalizado">Definido - não corticalizado</option>
        <option value="Definido - halo radiolúcido">Definido - halo radiolúcido</option>
        <option value="Difuso">Difuso</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Aspecto/ forma</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="aspecto_forma">
        <option value="" selected>Selecionar...</option>
        <option value="Arredondada">Arredondada</option>
        <option value="Ovalada">Ovalada</option>
        <option value="Raios de sol">Raios de sol</option>
        <option value="Casca de cebola">Casca de cebola</option>
        <option value="Vidro despolido">Vidro despolido</option>
        <option value="Roído de traça">Roído de traça</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Conteúdo/ aspecto</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="conteudo_aspecto" id= "conteudo_aspectoto">
        <option value="" selected>Selecionar...</option>
        <option value="Radiolúcido - unilocular">Radiolúcido - unilocular</option>
        <option value="Radiolúcido - multilocular">Radiolúcido - multilocular</option>
        <option value="Radiolúcido - não locular">Radiolúcido - não locular</option>
        <option value="Radiopaco">Radiopaco</option>
        <option value="Misto">Misto</option>
      </select>
    </div>
  </div>
  <div class="form-group row conteudoaspectoto-invisible" style="display: none;">
    <label class="col-md-2 col-form-label">Conteúdo/ aspecto</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="conteudo_aspecto2">
        <option value="" selected>Selecionar...</option>
        <option value="Favos de mel">Favos de mel</option>
        <option value="Bolhas de sabão">Bolhas de sabão</option>
        <option value="Raquete de tênis">Raquete de tênis</option>
        <option value="Flocos de algodão">Flocos de algodão</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Lesão contem dentes?</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="contem_dentes" id= "contem_dentesto">
        <option value="" selected>Selecionar...</option>
        <option value="Sim - um">Sim - um</option>
        <option value="Sim - dois ou mais">Sim - dois ou mais</option>
        <option value="Não">Não</option>
      </select>
    </div>
  </div>
  <div class="form-group row contemdentesto-invisible" style="display: none;">
    <label class="col-md-2 col-form-label">Situação dos dentes envolvidos</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="contem_dentes2">
        <option value="" selected>Selecionar...</option>
        <option value="Rechaçado">Rechaçado</option>
        <option value="Incluso">Incluso</option>
        <option value="Semi-incluso">Semi-incluso</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-3 col-form-label font-weight-bold">Estruturas adjacentes</label>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Expansão da cortical óssea</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="expansao_cortical">
        <option value="" selected>Selecionar...</option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Adelgaçamento da cortical óssea</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="adelgacamento_cortical">
        <option value="" selected>Selecionar...</option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Reabsorção radicular</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="reabsorcao_radicular">
        <option value="" selected>Selecionar...</option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Rechaçamento de dentes adjacentes</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="rechacamento_adjacentes">
        <option value="" selected>Selecionar...</option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
      </select>
    </div>
  </div>

</div>

<script type="text/javascript">
 $( "#perdaosseageneralizada" ).change(function() {
  var perda = $("#perdaosseageneralizada").val();
  if(perda == "horizontal" || perda == "vertical"){
    $(".perdag-invisible").css("display","block");
  } else {
    $(".perdag-invisible").css("display","none");
  }
});

 $( "#parestesiatm" ).change(function() {
  var tipo = $("#parestesiatm").val();
  if(tipo == "Sim"){
    $(".parestesiatm-invisible").css("display","block");
  } else{
    $(".parestesiatm-invisible").css("display","none");
  }
});

 $( "#nodulotm" ).change(function() {
  var tipo = $("#nodulotm").val();
  if(tipo == "Sim - móvel" || tipo == "Sim - fixo"){
    $(".nodulotm-invisible").css("display","block");
  } else{
    $(".nodulotm-invisible").css("display","none");
  }
});

 $( "#localizacaotm" ).change(function() {
  var tipo = $("#localizacaotm").val();
  if(tipo == "Abaixo do ângulo da mandíbula"){
    $(".localizacaotm-invisible").css("display","block");
  } else{
    $(".localizacaotm-invisible").css("display","none");
  }
});

 $( "#localizacaoto" ).change(function() {
  var tipo = $("#localizacaoto").val();
  if(tipo == "Outra"){
    $(".outralocalizacaoto-invisible").css("display","block");
  } else{
    $(".outralocalizacaoto-invisible").css("display","none");
  }
});

 $( "#centro_lesaoto" ).change(function() {
  var tipo = $("#centro_lesaoto").val();
  if(tipo == "Outro"){
    $(".outrocentroto-invisible").css("display","block");
  } else{
    $(".outrocentroto-invisible").css("display","none");
  }
});

 $( "#maior_diametroto" ).change(function() {
  var tipo = $("#maior_diametroto").val();
  if(tipo == "Maior que 3cm"){
    $(".maiordiametroto-invisible").css("display","block");
  } else{
    $(".maiordiametroto-invisible").css("display","none");
  }
});

 $( "#conteudo_aspectoto" ).change(function() {
  var tipo = $("#conteudo_aspectoto").val();
  if(tipo == "Radiolúcido - multilocular"){
    $(".conteudoaspectoto-invisible").css("display","block");
  } else{
    $(".conteudoaspectoto-invisible").css("display","none");
  }
});

 $( "#contem_dentesto" ).change(function() {
  var tipo = $("#contem_dentesto").val();
  if(tipo == "Sim - um" || tipo == "Sim - dois ou mais"){
    $(".contemdentesto-invisible").css("display","block");
  } else{
    $(".contemdentesto-invisible").css("display","none");
  }
});
</script>