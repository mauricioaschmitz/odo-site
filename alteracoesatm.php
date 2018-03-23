<div id="alteracoes_atm">
  <div class="form-group row">
    <label class="col-md-12 col-form-label font-weight-bold">ALTERAÇÕES EM ATM</label>
  </div>
  <div class="custom-controls-stacked">
    <label class="custom-control custom-radio">
      <input name="alteracoes-atm" onchange="alteracoes('atm');" type="radio" value="Sem alterações" class="custom-control-input alteracoes-atm">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Sem alterações</span>
    </label>
    <label class="custom-control custom-radio">
      <input name="alteracoes-atm" onchange="alteracoes('atm');" type="radio" value="Com alterações" class="custom-control-input alteracoes-atm">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Com alterações</span>
    </label>
  </div>
</div>
<div id="alt_atm" style="display:none">
  <div class="form-group row">
    <label class="col-md-3 col-form-label font-weight-bold">ATM Esquerda</label>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Alteração da forma do disco articular</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="alteracao_forma_disco_esq">
        <option value="" selected>Selecionar...</option>
        <option value="Não">Não</option>
        <option value="Sim">Sim</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Deslocamento do disco articular</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="deslocamento_disco_esq">
        <option value="" selected>Selecionar...</option>
        <option value="Para anterior - com redução">Para anterior - com redução</option>
        <option value="Para anterior - sem redução">Para anterior - sem redução</option>
        <option value="Para lateral">Para lateral</option>
        <option value="Para medial">Para medial</option>
        <option value="Para posterior">Para posterior</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Edema</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="edema_atm_esq">
        <option value="" selected>Selecionar...</option>
        <option value="Não">Não</option>
        <option value="Supradiscal">Supradiscal</option>
        <option value="Infradiscal">Infradiscal</option>
        <option value="Bicompartimental">Bicompartimental</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Degenerações articulares</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="degeneracao_art_atm_esq">
        <option value="" selected>Selecionar...</option>
        <option value="Cabeça da mandíbula - aplainamento">Cabeça da mandíbula - aplainamento</option>
        <option value="Cabeça da mandíbula - osteófito">Cabeça da mandíbula - osteófito</option>
        <option value="Cabeça da mandíbula - erosão">Cabeça da mandíbula - erosão</option>
        <option value="Cavidade/ eminência articular - aplainamento">Cavidade/ eminência articular - aplainamento</option>
        <option value="Cavidade/ eminência articular - erosão">Cavidade/ eminência articular - erosão</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Alterações medulares da cabeça da mandíbula</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="alteracoes_med_atm_esq">
        <option value="" selected>Selecionar...</option>
        <option value="Necrose avascular">Necrose avascular</option>
        <option value="Edema medular">Edema medular</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-md-3 col-form-label font-weight-bold">ATM Direita</label>
  </div>

  <div class="form-group row">
    <label class="col-md-2 col-form-label">Alteração da forma do disco articular</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="alteracao_forma_disco_dir">
        <option value="" selected>Selecionar...</option>
        <option value="Não">Não</option>
        <option value="Sim">Sim</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Deslocamento do disco articular</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="deslocamento_disco_dir">
        <option value="" selected>Selecionar...</option>
        <option value="Para anterior - com redução">Para anterior - com redução</option>
        <option value="Para anterior - sem redução">Para anterior - sem redução</option>
        <option value="Para lateral">Para lateral</option>
        <option value="Para medial">Para medial</option>
        <option value="Para posterior">Para posterior</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Edema</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="edema_atm_dir">
        <option value="" selected>Selecionar...</option>
        <option value="Não">Não</option>
        <option value="Supradiscal">Supradiscal</option>
        <option value="Infradiscal">Infradiscal</option>
        <option value="Bicompartimental">Bicompartimental</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Degenerações articulares</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="degeneracao_art_atm_dir">
        <option value="" selected>Selecionar...</option>
        <option value="Cabeça da mandíbula - aplainamento">Cabeça da mandíbula - aplainamento</option>
        <option value="Cabeça da mandíbula - osteófito">Cabeça da mandíbula - osteófito</option>
        <option value="Cabeça da mandíbula - erosão">Cabeça da mandíbula - erosão</option>
        <option value="Cavidade/ eminência articular - aplainamento">Cavidade/ eminência articular - aplainamento</option>
        <option value="Cavidade/ eminência articular - erosão">Cavidade/ eminência articular - erosão</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Alterações medulares da cabeça da mandíbula</label>
    <div class="col-md-10">
      <select class="form-control custom-select" name="alteracoes_med_atm_dir">
        <option value="" selected>Selecionar...</option>
        <option value="Necrose avascular">Necrose avascular</option>
        <option value="Edema medular">Edema medular</option>
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