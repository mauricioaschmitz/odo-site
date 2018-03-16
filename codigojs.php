<script type="text/javascript">
  $(".oclusal2").click(function(){
    var cor = $(this).css('background-color');
    if(cor == 'rgb(239, 16, 16)'){
      $(this).css('background-color','transparent');
      $(this).children('.variavel').prop('checked', false);
    } else{
      $(this).css('background-color','#ef1010');
      $(this).children('.variavel').prop('checked', true);
    }
  });
  $(".oclusal, .oclusal3, .palat, .ling, .vestsup, .vestinf, .distdir, .distesq, .mesidir, .mesiesq").click(function(){
    var cor = $(this).css('background-color');
    if(cor == 'rgb(17, 153, 244)'){
      $(this).css('background-color','transparent');
      $(this).children('.variavel').prop('checked', false);
    } else{
      $(this).css('background-color','#1199f4');
      $(this).children('.variavel').prop('checked', true);
    }
  });

  $(".monorad, .biradvsup, .biradpsup, .triradpsup, .triradmvsup, .triraddvsup, .triraddvsup2, .triradmvsup2, .biradminf, .biraddinf, .biradminf2, .biraddinf2").click(function(){
    var cor = $(this).css('background-color');
    if(cor == 'rgb(17, 153, 244)'){
      $(this).css('background-color','transparent');
      $(this).children('.variavel').prop('checked', false);
    } else{
      $(this).css('background-color','#1199f4');
      $(this).children('.variavel').prop('checked', true);
    }
  });

  $(".monoradb, .biradvsupb, .biradpsupb, .triradpsupb, .triradmvsupb, .triraddvsupb, .triraddvsup2b, .triradmvsup2b, .biradminfb, .biraddinfb, .biradminf2b, .biraddinf2b").click(function(){
    var cor = $(this).css('background-color');
    if(cor == 'rgb(17, 153, 244)'){
      $(this).css('background-color','transparent');
      $(this).children('.variavel').prop('checked', false);
    } else{
      $(this).css('background-color','#1199f4');
      $(this).children('.variavel').prop('checked', true);
    }
  });

  $(".monoradc, .biradvsupc, .biradpsupc, .triradpsupc, .triradmvsupc, .triraddvsupc, .triraddvsup2c, .triradmvsup2c, .biradminfc, .biraddinfc, .biradminf2c, .biraddinf2c").click(function(){
    var cor = $(this).css('background-color');
    if(cor == 'rgb(17, 153, 244)'){
      $(this).css('background-color','transparent');
      $(this).children('.variavel').prop('checked', false);
    } else{
      $(this).css('background-color','#1199f4');
      $(this).children('.variavel').prop('checked', true);
    }
  });

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