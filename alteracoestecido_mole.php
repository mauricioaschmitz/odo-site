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
<div id="alteracoes_tecido_mole">
  <div class="form-group row">
    <label class="col-md-12 col-form-label font-weight-bold">ALTERAÇÕES EM TECIDO MOLE</label>
  </div>
  <div class="custom-controls-stacked">
    <label class="custom-control custom-radio">
      <input name="alteracoes-tecido_mole" onchange="alteracoes('tecido_mole');" type="radio" value="Sem alterações" class="custom-control-input alteracoes-tecido_mole">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Sem alterações</span>
    </label>
    <label class="custom-control custom-radio">
      <input name="alteracoes-tecido_mole" onchange="alteracoes('tecido_mole');" type="radio" value="Com alterações" class="custom-control-input alteracoes-tecido_mole">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Com alterações</span>
    </label>
  </div>
</div>
<div id="alt_tecido_mole" style="display:none">
  <div class="form-group row">
    <label class="col-md-3 col-form-label font-weight-bold">Características clínicas</label>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Gênero</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="genero">
        <option value="" >Selecionar...</option>
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
        <option value="" >Selecionar...</option>
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
        <option value="" >Selecionar...</option>
        <option value="Sim - aguda">Sim - aguda</option>
        <option value="Sim - crônica">Sim - crônica</option>
        <option value="Sim - contínua">Sim - contínua</option>
        <option value="Sim - intermitente">Sim - intermitente</option>
        <option value="Sim - localizada">Sim - localizada</option>
        <option value="Sim - difusa">Sim - difusa</option>
        <option value="Sim - reflexa">Sim - reflexa</option>
        <option value="Sim - prévia a refeições">Sim - prévia a refeições</option>
        <option value="Sim - à palpação">Sim - à palpação</option>
        <option value="Não">Não</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Parestesia</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="parestesia" id="parestesiatm">
        <option value="" >Selecionar...</option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
      </select>
    </div>
  </div>
  <div class="form-group row parestesiatm-invisible" style="display: none;">
    <label class="col-md-2 col-form-label">Tempo de parestesia</label>
    <div class="col-md-10">
      <input class="form-control" type="text" value="" name="parestesia2">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Tumefação na face</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="tumefacao">
        <option value="" >Selecionar...</option>
        <option value="Sim - persistente">Sim - persistente</option>
        <option value="Sim - prévia a refeições">Sim - prévia a refeições</option>
        <option value="Não">Não</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Nódulo</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="nodulo" id="nodulotm">
        <option value="">Selecionar...</option>
        <option value="Sim - móvel">Sim - móvel</option>
        <option value="Sim - fixo">Sim - fixo</option>
        <option value="Não">Não</option>
      </select>
    </div>
  </div>
  <div class="form-group row nodulotm-invisible" style="display: none;">
    <label class="col-md-2 col-form-label"></label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="nodulo2">
        <option value="">Selecionar...</option>
        <option value="Cervical">Cervical</option>
        <option value="Submandibular">Submandibular</option>
        <option value="Parotídeo">Parotídeo</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-md-3 col-form-label font-weight-bold">Características radiográficas</label>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Localização</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="localizacao" id="localizacaotm">
        <option value="">Selecionar...</option>
        <option value="Soalho bucal">Soalho bucal</option>
        <option value="Posterior ao palato mole">Posterior ao palato mole</option>
        <option value="Sobreposto ao ramo">Sobreposto ao ramo</option>
        <option value="Lateral ao ramo - unilateral">Lateral ao ramo - unilateral</option>
        <option value="Lateral ao ramo - bilateral">Lateral ao ramo - bilateral</option>
        <option value="Abaixo do ângulo da mandíbula">Abaixo do ângulo da mandíbula</option>
      </select>
    </div>
  </div>
  <div class="form-group row localizacaotm-invisible" style="display: none;">
    <label class="col-md-2 col-form-label"></label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="localizacao2">
        <option value="">Selecionar...</option>
        <option value="Próximo ao corpo da mandíbula">Próximo ao corpo da mandíbula</option>
        <option value="Próximo ao C2">Próximo ao C2</option>
        <option value="Abaixo do hioide">Abaixo do hioide</option>
        <option value="Entre C3 e C4">Entre C3 e C4</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Número de lesões</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="numero_lesoes">
        <option value="" >Selecionar...</option>
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
      <select class="form-control custom-select" name="maior_diametro">
        <option value="" >Selecionar...</option>
        <option value="Menor de 1mm">Menor de 1mm</option>
        <option value="1mm a 2cm">1mm a 2cm</option>
        <option value="2cm a 3cm">2cm a 3cm</option>
        <option value="Maior que 3cm">Maior que 3cm</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Aspecto/ forma da lesão</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="aspecto_forma">
        <option value="" selected>Selecionar...</option>
        <option value="Arredondada">Arredondada</option>
        <option value="Ovalada">Ovalada</option>
        <option value="Cacho de uva">Cacho de uva</option>
        <option value="Faixa">Faixa</option>
        <option value="Área">Área</option>
        <option value="Pontos">Pontos</option>
        <option value="Difuso">Difuso</option>
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