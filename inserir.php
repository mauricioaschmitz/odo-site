
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>Inserir exame</title>

  <!-- Bootstrap core CSS -->
  <link href="style/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="style/css/inserir.css" rel="stylesheet">

  <style type="text/css">

  /* The Modal (background) */
  .modalzito {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
  }

  /* Modal Content (image) */
  .modalzito-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
  }

  /* Add Animation */
  .modalzito-content {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
  }

  @-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
  }

  @keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
  }

  /* The Close Button */
  .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
  }

  .close:hover,
  .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
  }

  /* 100% Image Width on Smaller Screens */
  @media only screen and (max-width: 700px){
    .modalzito-content {
      width: 100%;
    }
  }


  #response{
    width: 100%;
    position:absolute;
    z-index:99;
    background-color: white;
  }

  #response > ul {
    width:100%;
    float: left;
    list-style: none;
    padding: 0px;
    border: 1px solid black;
  }

  #response > ul > li {
    padding:3px;
  }

  #response > ul > li:hover {
    color: silver;
    background: #0088cc;
    cursor: pointer;
  }

  #response2{
    width: 100%;
    position:absolute;
    z-index:99;
    background-color: white;
  }

  #response2 > ul {
    width:100%;
    float: left;
    list-style: none;
    padding: 0px;
    border: 1px solid black;
  }

  #response2 > ul > li {
    padding:3px;
  }

  #response2 > ul > li:hover {
    color: silver;
    background: #0088cc;
    cursor: pointer;
  }
</style>
</style>
</head>
<?php
include_once('style/include/head.php');
?>

<div class="container">

  <div class="starter-template">


    <form method="POST" action="system/services/exame.php" enctype="multipart/form-data">
      <input type="hidden" name="acao" value="inserir">
      <div class="form-group row">
        <label for="prontuario" class="col-md-12 col-form-label font-weight-bold">DADOS DO PACIENTE</label>
      </div>

      <div class="form-group row">
        <label for="prontuario" class="col-md-2 col-form-label">Prontuário Nº</label>
        <div class="col-md-10">
          <input class="form-control target2" type="number" value="" name="num_prontuario" id="prontuario" required>
          <div id="response2">

          </div>
          <input type="hidden" value="" name="id_paciente" id="id_paciente" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="prontuario" class="col-md-2 col-form-label">Nome</label>
        <div class="col-md-10">
          <input class="form-control target1" type="text" value="" name="nome" id="searchBox1"  required>
          <div id="response">

          </div>
        </div>
        
      </div>
      <div class="form-group row">
        <label for="prontuario" class="col-md-2 col-form-label">Nascimento</label>
        <div class="col-md-10">
          <input class="form-control" type="date" value="" name="nascimento" id="nascimento" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="prontuario" class="col-md-2 col-form-label">Exames anteriores</label>
        <div class="col-md-3">
          <input class="form-control" type="date" name="data-exame[]" id="data-exame1">
        </div>
        <div class="col-md-3">
          <input class="form-control" type="text" placeholder="Nº do exame" name="num-exame[]" id="exame1-numero">
        </div>
        <div class="col-md-3">
          <input class="form-control" type="file" value="" name="exame[]" id="exame1">
        </div>
        <div class="col-md-1">
          <button class="btn btn-primary btn-block" type="button" id="add-novo-exame">+</button>
        </div>
      </div>
      <div id="add-exames">

      </div>
      <div class="form-group row">
        <label for="prontuario" class="col-md-12 col-form-label font-weight-bold">EXAME ATUAL</label>
      </div>

      <div class="modal modalzin" role="dialog" style="left: auto; bottom: auto;top:23px;">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <img id="view-img" style="display: none; margin:0 auto; width: 220px;" src="default.jpg">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" onclick="ampliar();">Ampliar</button>
            </div>
          </div>
        </div>
      </div>

      <div id="myModal" class="modal modalzito" style="display: none;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.9);">
        <span class="close" onclick="fechamodal();">&times;</span>
        <img class="modal-content modalzito-content" id="img01">
      </div>

      <div class="form-group row">
        <label for="data" class="col-md-2 col-form-label">Exame*</label>
        <div class="col-md-10">
          <input class="form-control" type="file" name="arquivo" id="imgInput">
        </div>
      </div>
      <div class="form-group row">
        <label for="data" class="col-md-12 col-form-label">
          <img id="view-img" style="display: none; margin:0 auto;" src="default.jpg">
        </label>
      </div>

      
      <div class="form-group row">
        <label for="data" class="col-md-2 col-form-label">Data*</label>
        <div class="col-md-10">
          <input class="form-control" type="date" value="<?php echo date("Y-m-d");?>" name="data" id="data" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="motivo" class="col-md-2 col-form-label">Motivo do exame*</label>
        <div class="col-md-10">
          <input class="form-control" type="text" value="" name="motivo" id="motivo" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="local" class="col-md-2 col-form-label">Local do exame*</label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="local1" id="local" required>
            <option value="">Selecionar...</option>
            <option value="radio-ufrgs">Serviço de Radiologia Odontológica / UFRGS</option>
            <option value="graduacao">Graduação</option>
            <option value="extensao">Projeto de extensão</option>
            <option value="pos">Pós-graduação</option>
          </select>
        </div>
      </div>
      <div class="form-group row radio-ufrgs-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Encaminhado por*</label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="local2" id="local2">
            <option value="">Selecionar...</option>
            <option value="SISREG">SISREG</option>
            <option value="CEO">CEO</option>
            <option value="Graduação">Graduação</option>
            <option value="radio-pos-grad">Pós-graduação...</option>
          </select>
        </div>
      </div>
      <div class="form-group row radioposgrad-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Pós-graduação*</label>
        <div class="col-md-10">
          <input class="form-control" type="text" value="" name="local3" id="local3">
        </div>
      </div>
      <div class="form-group row graduacao-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Graduação*</label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="local4" id="local4">
            <option value="">Selecionar...</option>
            <option value="Clínica I">Clínica I</option>
            <option value="Clínica II">Clínica II</option>
            <option value="Clínica III">Clínica III</option>
            <option value="Clínica IV">Clínica IV</option>
          </select>
        </div>
      </div>
      <div class="form-group row extensao-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Projeto de extensão*</label>
        <div class="col-md-10">
          <input class="form-control" type="text" value="" name="local5" id="extensao">
        </div>
      </div>
      <div class="form-group row pos-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Pós-graduação*</label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="local6" id="local6">
            <option value="">Selecionar...</option>
            <option value="Especialização">Especialização</option>
            <option value="Mestrado">Mestrado</option>
            <option value="Doutorado">Doutorado</option>
          </select>
        </div>
      </div>
      <div class="form-group row posgrad-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Área pós-graduação*</label>
        <div class="col-md-10">
          <input class="form-control" type="text" value="" name="local7" id="local7">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-form-label">Exame*</label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="tipo-exame1" id="tipo-exame1" required>
            <option value="">Selecionar...</option>
            <option value="intrabucal">Radiografia intrabucal</option>
            <option value="extrabucal">Radiografia extrabucal</option>
            <option value="tomografia">Tomografia computadorizada</option>
            <option value="ressonancia">Imagem por ressonância magnética</option>
          </select>
        </div>
      </div>
      <div class="form-group row intrabucal-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Intrabucal*</label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="tipo-exame2" id="tipo-exame2">
            <option value="">Selecionar...</option>
            <option value="periapical-bissetriz">Periapical - bissetriz</option>
            <option value="periapical-paralelismo">Periapical - paralelismo</option>
            <option value="interproximal">Interproximal</option>
            <option value="oclusal">Oclusal</option>
            <option value="outra">Outra</option>
          </select>
        </div>
      </div>
      <div class="form-group row periapical-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Periapical*</label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="tipo-exame3" id="tipo-exame3">
            <option value="">Selecionar...</option>
            <option value="Incisivos superiores">Incisivos superiores</option>
            <option value="Incisivos inferiores">Incisivos inferiores</option>
            <option value="Canino superior direito">Canino superior direito</option>
            <option value="Canino superior esquerdo">Canino superior esquerdo</option>
            <option value="Canino inferior direito">Canino inferior direito</option>
            <option value="Canino inferior esquerdo">Canino inferior esquerdo</option>
            <option value="Pré-molares superiores direitos">Pré-molares superiores direitos</option>
            <option value="Pré-molares superiores esquerdos">Pré-molares superiores esquerdos</option>
            <option value="Pré-molares inferiores direitos">Pré-molares inferiores direitos</option>
            <option value="Pré-molares inferiores esquerdos">Pré-molares inferiores esquerdos</option>
            <option value="Molares superiores direitos">Molares superiores direitos</option>
            <option value="Molares superiores esquerdos">Molares superiores esquerdos</option>
            <option value="Molares inferiores direitos">Molares inferiores direitos</option>
            <option value="Molares inferiores esquerdos">Molares inferiores esquerdos</option>
          </select>
        </div>
      </div>
      <div class="form-group row interproximal-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Interproximal*</label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="tipo-exame4" id="tipo-exame4">
            <option value="">Selecionar...</option>
            <option value="Anteriores">Anteriores</option>
            <option value="Pré-molares direitos">Pré-molares direitos</option>
            <option value="Pré-molares esquerdos">Pré-molares esquerdos</option>
            <option value="Molares direitos">Molares direitos</option>
            <option value="Molares esquerdos">Molares esquerdos</option>
          </select>
        </div>
      </div>
      <div class="form-group row oclusal-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Oclusal*</label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="tipo-exame5" id="tipo-exame5">
            <option value="">Selecionar...</option>
            <option value="Maxila total">Maxila total</option>
            <option value="Maxila lateralizada direita">Maxila lateralizada direita</option>
            <option value="Maxila lateralizada esquerda">Maxila lateralizada esquerda</option>
            <option value="Mandíbula total">Mandíbula total</option>
            <option value="Mandíbula lateralizada direita">Mandíbula lateralizada direita</option>
            <option value="Mandíbula lateralizada esquerda">Mandíbula lateralizada esquerda</option>
            <option value="Incisivos superiores">Incisivos superiores</option>
            <option value="Mandíbula">Mandíbula</option>
            <option value="De sínfise">De sínfise</option>
          </select>
        </div>
      </div>
      <div class="form-group row outraintra-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Outra*</label>
        <div class="col-md-10">
          <input class="form-control" type="text" value="" name="tipo-exame6" id="tipo-exame6">
        </div>
      </div>
      <div class="form-group row extrabucal-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Extrabucal*</label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="extrabucal" id="extrabucal">
            <option value="">Selecionar...</option>
            <option value="Panorâmica">Panorâmica</option>
            <option value="Telerradiografia lateral">Telerradiografia lateral</option>
            <option value="Telerradiografia frontal">Telerradiografia frontal</option>
            <option value="outra">Outra</option>
          </select>
        </div>
      </div>
      <div class="form-group row outraextra-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Outra*</label>
        <div class="col-md-10">
          <input class="form-control" type="text" value="" name="tipo-exame7" id="tipo-exame7">
        </div>
      </div>
      <div class="form-group row tomografia-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Tomografia computadorizada*</label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="tomografia" id="tomografia">
            <option value="">Selecionar...</option>
            <option value="FOV amplo - maxila">FOV amplo - maxila</option>
            <option value="FOV amplo - mandíbula">FOV amplo - mandíbula</option>
            <option value="FOV amplo - maxila e mandíbula">FOV amplo - maxila e mandíbula</option>
            <option value="FOV amplo - face">FOV amplo - face</option>
            <option value="FOV restrito">FOV restrito</option>
          </select>
        </div>
      </div>
      <div class="form-group row ressonancia-invisible" style="display: none;">
        <label class="col-md-2 col-form-label">Ressonância magnética*</label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="ressonancia" id="ressonancia">
            <option value="">Selecionar...</option>
            <option value="Maxila">Maxila</option>
            <option value="Mandíbula">Mandíbula</option>
            <option value="Maxila e mandíbula">Maxila e mandíbula</option>
            <option value="Face">Face</option>
            <option value="ATM">ATM</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-12 col-form-label font-weight-bold">INTERPRETAÇÃO DO EXAME</label>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-form-label">Região em avaliação*</label>
        <div class="col-md-12">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input regaval" name="regiao_avaliada[]" value="coroa">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Coroa</span>
          </label>
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input regaval" name="regiao_avaliada[]" value="raiz">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Raiz</span>
          </label>
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input regaval" name="regiao_avaliada[]" value="crista">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Crista óssea alveolar</span>
          </label>
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input regaval" name="regiao_avaliada[]" value="periapice">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Periápice</span>
          </label>
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input regaval" name="regiao_avaliada[]" value='tecido_osseo'>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Tecido ósseo</span>
          </label>
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input regaval" name="regiao_avaliada[]" value="tecido_mole">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Tecido moles</span>
          </label>
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input regaval" name="regiao_avaliada[]" value='atm'>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">ATM</span>
          </label>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-form-label">Dentição*</label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="denticao" id="denticao" required>
            <option value="" selected>Selecionar...</option>
            <option value="permanente">Dentição permanente</option>
            <option value="mista">Dentição mista</option>
            <option value="decidua">Dentição decídua</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-form-label denticao" style="display: none;">Dentes ausentes*</label>
        <div class="col-md-12">
          <div class="permanente" style="display:none;">
            <div class="col-md-6" style="margin-top:20px;">
              <div class="dente dente11">
                <p class="nomedente">11</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="11">
                </div>
              </div>
              <div class="dente dente12">
                <p class="nomedente">12</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="12">
                </div>
              </div>
              <div class="dente dente13">
                <p class="nomedente">13</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="13">
                </div>
              </div>
              <div class="dente dente14">
                <p class="nomedente">14</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="14">
                </div>
              </div>
              <div class="dente dente15">
                <p class="nomedente">15</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="15">
                </div>
              </div>
              <div class="dente dente16">
                <p class="nomedente">16</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="16">
                </div>
              </div>
              <div class="dente dente17">
                <p class="nomedente">17</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="17">
                </div>
              </div>
              <div class="dente dente18">
                <p class="nomedente">18</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="18">
                </div>
              </div>
            </div>
            <div class="col-md-6" style="margin-top:20px;">
              <div class="dente dente21">
                <p class="nomedente">21</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="21">
                </div>
              </div>
              <div class="dente dente22">
                <p class="nomedente">22</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="22">
                </div>
              </div>
              <div class="dente dente23">
                <p class="nomedente">23</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="23">
                </div>
              </div>
              <div class="dente dente24">
                <p class="nomedente">24</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="24">
                </div>
              </div>
              <div class="dente dente25">
                <p class="nomedente">25</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="25">
                </div>
              </div>
              <div class="dente dente26">
                <p class="nomedente">26</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="26">
                </div>
              </div>
              <div class="dente dente27">
                <p class="nomedente">27</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="27">
                </div>
              </div>
              <div class="dente dente28">
                <p class="nomedente">28</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="28">
                </div>
              </div>
            </div>
          </div>

          <div class="decidua" style="display:none;">
            <div class="col-md-6">
              <div class="dente dente51">
                <p class="nomedente">51</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="51">
                </div>
              </div>
              <div class="dente dente52">
                <p class="nomedente">52</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="52">
                </div>
              </div>
              <div class="dente dente53">
                <p class="nomedente">53</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="53">
                </div>
              </div>
              <div class="dente dente54">
                <p class="nomedente">54</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="54">
                </div>
              </div>
              <div class="dente dente55">
                <p class="nomedente">55</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="55">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="dente dente61">
                <p class="nomedente">61</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="61">
                </div>
              </div>
              <div class="dente dente62">
                <p class="nomedente">62</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="62">
                </div>
              </div>
              <div class="dente dente63">
                <p class="nomedente">63</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="63">
                </div>
              </div>
              <div class="dente dente64">
                <p class="nomedente">64</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="64">
                </div>
              </div>
              <div class="dente dente65">
                <p class="nomedente">65</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="65">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="dente dente81">
                <p class="nomedente">81</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="81">
                </div>
              </div>
              <div class="dente dente82">
                <p class="nomedente">82</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="82">
                </div>
              </div>
              <div class="dente dente83">
                <p class="nomedente">83</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="83">
                </div>
              </div>
              <div class="dente dente84">
                <p class="nomedente">84</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel " value="84">
                </div>
              </div>
              <div class="dente dente85">
                <p class="nomedente">85</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="85">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="dente dente71">
                <p class="nomedente">71</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="71">
                </div>
              </div>
              <div class="dente dente72">
                <p class="nomedente">72</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="72">
                </div>
              </div>
              <div class="dente dente73">
                <p class="nomedente">73</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="73">
                </div>
              </div>
              <div class="dente dente74">
                <p class="nomedente">74</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="74">
                </div>
              </div>
              <div class="dente dente75">
                <p class="nomedente">75</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="75">
                </div>
              </div>
            </div>

          </div>

          <div class="permanente" style="display:none;">
            <div class="col-md-6">
              <div class="dente dente41">
                <p class="nomedente">41</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="41">
                </div>
              </div>
              <div class="dente dente42">
                <p class="nomedente">42</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="42">
                </div>
              </div>
              <div class="dente dente43">
                <p class="nomedente">43</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="43">
                </div>
              </div>
              <div class="dente dente44">
                <p class="nomedente">44</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="44">
                </div>
              </div>
              <div class="dente dente45">
                <p class="nomedente">45</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="45">
                </div>
              </div>
              <div class="dente dente46">
                <p class="nomedente">46</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="46">
                </div>
              </div>
              <div class="dente dente47">
                <p class="nomedente">47</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="47">
                </div>
              </div>
              <div class="dente dente48">
                <p class="nomedente">48</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="48">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="dente dente31">
                <p class="nomedente">31</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="31">
                </div>
              </div>
              <div class="dente dente32">
                <p class="nomedente">32</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="32">
                </div>
              </div>
              <div class="dente dente33">
                <p class="nomedente">33</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="33">
                </div>
              </div>
              <div class="dente dente34">
                <p class="nomedente">34</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="34">
                </div>
              </div>
              <div class="dente dente35">
                <p class="nomedente">35</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="35">
                </div>
              </div>
              <div class="dente dente36">
                <p class="nomedente">36</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="36">
                </div>
              </div>
              <div class="dente dente37">
                <p class="nomedente">37</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="37">
                </div>
              </div>
              <div class="dente dente38">
                <p class="nomedente">38</p>
                <div class="geral dentesausentes oclusal2">
                  <input type="checkbox" name="dentesausentes[]" class="variavel" value="38">
                </div>
              </div>
            </div>
            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input regaval" name="marcar_dentesausentes" onclick="marcar('dentesausentes');" id="marcar_dentesausentes">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Marcar/desmarcar todos</span>
            </label>
          </div>
          
        </div>
      </div>
      
      <div id="acoroa">

      </div>

      <div id="araiz">

      </div>

      <div id="acrista">

      </div>

      <div id="aperiapice">

      </div>

      <div id="atecido_osseo">

      </div>

      <div id="atecido_mole">

      </div>

      <div id="aatm">

      </div>

      <input type="submit" name="enviar" value="Enviar">

    </form>
  </div>

</div><!-- /.container -->


    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="style/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
      <script src="style/dist/js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="style/docs/assets/js/ie10-viewport-bug-workaround.js"></script>

      <script src="style/js/src/inserir.js"></script>

      <script>
        $(document).ready(function(){
          $("#searchBox1").keyup(function(){
            var query = $("#searchBox1").val();
            
            if(query.length > 0){
              $.ajax(
              {
                url: 'system/include/buscapacientes.php',
                method:'POST',
                data: {
                  search: 1,
                  q: query
                },
                success: function (data){
                  $("#response").html(data);
                },
                dataType: 'text'
              }
              );
            }
          });
        });

        $(document).on('click', 'li', function () {
          var country = $(this).text();
          $("#response").html("");
          $("#response2").html("");
          $.ajax(
          {
            url: 'system/include/buscapacientes2.php',
            method:'POST',
            data: {
              search: 1,
              q: country
            },
            success: function (data){
              var res = data.split("--");
              $("#id_paciente").val(res[0]);
              $("#searchBox1").val(res[1]);
              $("#prontuario").val(res[3]);
              $("#nascimento").val(res[2]);
            },
            dataType: 'text'
          }
          );
        });


        $(document).ready(function(){
          $("#prontuario").keyup(function(){
            var query = $("#prontuario").val();
            
            if(query.length > 0){
              $.ajax(
              {
                url: 'system/include/buscapacientes3.php',
                method:'POST',
                data: {
                  search: 1,
                  q: query
                },
                success: function (data){
                  $("#response2").html(data);
                },
                dataType: 'text'
              }
              );
            }
          });
        });
      </script>

      
    </body>
    </html>