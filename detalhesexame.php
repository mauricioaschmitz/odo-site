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

  <title>Detalhes do exame</title>

  <!-- Bootstrap core CSS -->
  <link href="style/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="style/css/inserir.css" rel="stylesheet">
</head>
<?php
include_once('style/include/head.php');
include_once(ROOT . "controller/ControllerExame.control.php");
include_once(ROOT . "controller/ControllerExameAnterior.control.php");
include_once(ROOT . "controller/ControllerAlteracoesCoroa.control.php");
include_once(ROOT . "controller/ControllerAlteracoesRaiz.control.php");
$ce = new ControllerExame();
$cea = new ControllerExameAnterior();
$cac = new ControllerAlteracoesCoroa();
$car = new ControllerAlteracoesRaiz();
$exame = $ce->actionControl("selectOne", array("id" => $_GET['id_exame']));
$exames_ant = $cea->actionControl("selectByExame",array("id_exame" => $_GET['id_exame']));
$alteracoes_coroa = $cac->actionControl("selectByExame",array("id_exame" => $_GET['id_exame']));
$alteracoes_raiz = $car->actionControl("selectByExame",array("id_exame" => $_GET['id_exame']));
$dic = array("carie" => "Cárie", "recidiva_carie" => "Recidiva de cárie", "linha_adesivo_dentinario" => "Linha de adesivo dentinário", "material_restaurador_radiolucido" => "Material restaurador radiolúcido", "preparo_cavitario" => "Preparo cavitário", "deficiencia_adaptacao_restauracao" => "Deficiência na adaptação de restauração", "trepanacao" => "Trepanação", "fratura_coronaria" => "Fratura coronária", "erosao" => "Erosão", "abrasao" => "Abrasão", "atricao" => "Atrição", "hipoplasia_esmalte" => "Hipoplasia do esmalte", "material_forrador_radiopaco" => "Material forrador radiopaco", "material_restaurador_radiopaco" => "Material resturador radiopaco", "coroa_pilar_protetico" => "Coroa/ pilar protético", "pontico" => "Pôntico", "calculo"=> "Cálculo", "perola_esmalte" => "Pérola de esmalte", "cuspide_garra" => "Cúspide em garra", "nodulo_pulpar" => "Nódulo pulpar", "atresia_camara" => "Atresia de câmara pulpar", "cingulo_invaginado" => "Cíngulo invaginado", "dens_in_dente" => "Dens in dente", "material_base" => "Material de base", "retentor_intrarradicular" => "Retentor intrarradicular", "braquete" => "Braquete", "aparato_orto" => "Aparato ortodôntico", "contencao_metalica" => "Contenção metálica", "rizogenese_incompleta" => "Rizogênese incompleta", "rizolise" => "Rizólise", "reabsorcao_dentinaria_interna" => "Reabsorção dentinária interna","reabsorcao_dentinaria_externa" => "Reabsorção dentinária externa", "canais_colaterais" => "Canais colaterais", "carie_radicular" => "Cárie radicular", "restauracao_radiolucida" => "Restauração radiolúcida", "fratura_radicular" => "Fratura radicular", "perfuracao" => "Perfuração", "preparo_protetico" => "Preparo protético", "espaco_vazio" => "Espaço vazio", "apicetomia" => "Apicetomia", "restauracao_parietal" => "Restauração parietal", "restauracao_radiopaca" => "Restauração radiopaca", "tratamento_endodontico" => "Tratamento endodôntico", "retentor_intrarradicular_raiz" => "Retentor intrarradicular", "obturacao_retrograda" => "Obturação retrógrada", "anquilose" => "Anquilose", "atresia_conduto_radicular" => "Atresia do conduto radicular", "calculo_raiz" => "Cálculo dentário", "hipercementose" => "Hipercementose", "agulhas_calcicas" => "Agulhas cálcicas", "instrumento_endodontico_fraturado" => "Instrumento endodôntico fraturado");
?>

<div class="container wrap">

  <div class="starter-template">
    <button type="button" class="btn btn-success notprint" style="float:right;" onClick="window.print()">Gerar laudo</button>
    <h1>Detalhes do exame</h1>
    <div class="col-md-7 print" style="text-align: left;">
      <h4>Exame </h4>
      <?php
      echo "<u>Número do prontuário</u>: ".$exame[0]['num_prontuario'].";<br>";
      echo "<u>Nome do paciente</u>: ".$exame[0]['nome'].";<br>";
      echo "<u>Data de nascimento</u>: ".date('d/m/Y', strtotime($exame[0]['nascimento'])).";<br><br>";
      echo "<u>Data</u>: ".date('d/m/Y', strtotime($exame[0]['data'])).";<br>";
      echo "<u>Local</u>: ".$exame[0]['local'].";<br>";
      echo "<u>Exame</u>: ".$exame[0]['exame'].";<br><br>";
      echo "<u>Motivo</u>: ".$exame[0]['motivo'].";<br>";
      echo "<u>Dentição</u>: ".$exame[0]['denticao'].";<br>";
      if($exame[0]['dentes_ausentes'] == ""){
        echo "<u>Dentes ausentes</u>: Não há dentes ausentes.<br>";
      } else{
        echo "<u>Dentes ausentes</u>: ".substr($exame[0]['dentes_ausentes'],0,-1).".<br>";
      }
      ?>
    </div>
    <div class="col-md-5 notprint" style="text-align: left;">
      <h4>Exames anteriores</h4>
      <?php
      if(!empty($exames_ant)){
        foreach ($exames_ant as $ant) {
          echo "<a href='http://localhost/coletor/arquivos/".$ant['arquivo']."' target='_blank'>Exame nº ".$ant['numero']." - dia ". date('d/m/Y', strtotime($ant['data'])) ."</a><br>";
        }
      } else{
        echo "Não há exames anteriores.";
      }
      ?>
    </div>

    <div class="col-md-12">
      <hr>
      <h4>Alterações de coroa</h4>
      <?php
      if(!isset($alteracoes_coroa[0])){
        echo "Não há alterações de coroa";
      } else{
        foreach($alteracoes_coroa[0] as $key => $alt){
          $texto = "";
          if($key != "id" && $key != "id_exame" && $alt != ""){
            echo $dic[$key]. ": ";
            $alt = explode(",", $alt);
            foreach($alt as $al){

              $al = explode("_", $al);
              if(isset($al[1])){
                if(count($alt) == 160 && $exame[0]['denticao'] == "permanente"){
                  $texto = "Todas as faces";
                  break;
                } else if(count($alt) == 260 && $exame[0]['denticao'] != "permanente"){
                  $texto = "Todas as faces";
                  break;
                }
                $texto .=  $al[0];
                if($al[1] == "o"){
                  $texto .=  "(".strtoupper($al[1]). "), ";
                } else{
                  $texto .=  strtoupper($al[1]).", ";
                }
              } else{
                if(count($alt) == 32 && $exame[0]['denticao'] == "permanente"){
                  $texto = "Todos os dentes";
                  break;
                } else if(count($alt) == 52 && $exame[0]['denticao'] != "permanente"){
                  $texto = "Todos os dentes";
                  break;
                }
                $texto .= $al[0].", ";
              }
            }
            echo trim($texto, ", ").".";
            echo "<hr>";
          }
        }
        $dentes = array (11, 12, 13, 14, 15, 16, 17, 18, 21, 22, 23, 24, 25, 26, 27, 28, 51, 52, 53, 54, 55, 61 ,62, 63, 64, 65, 81, 82, 83, 84, 85, 71, 72, 73, 74, 75, 41, 42, 43, 44, 45, 46, 47, 48, 31, 32, 33, 34, 35, 36, 37, 38);
        foreach($dentes as $dent){
          if($exame[0]['denticao'] == "mista" || $exame[0]['denticao'] == "permanente" && $dent <= 48 || $exame[0]['denticao'] == "decidua" && $dent >= 51){

            if($dent == 11 || $dent == 21 || $dent == 31 || $dent == 41 || $dent == 51 || $dent == 61 || $dent == 71 || $dent == 81){
              echo '<div class="col-md-6 notprint" style="margin-top:20px;">';
            }

            $dentes_aus = explode("-", $exame[0]['dentes_ausentes']);
            if (in_array($dent, $dentes_aus)) { 
              $o = 'style="background-color: rgb(0, 0, 0)" ';
              $co = 'Dente ausente.';
              $d = 'style="background-color: rgb(0, 0, 0)" ';
              $cd = 'Dente ausente.';
              $m = 'style="background-color: rgb(0, 0, 0)" ';
              $cm = 'Dente ausente.';
              $l = 'style="background-color: rgb(0, 0, 0)" ';
              $cl = 'Dente ausente.';
              $v = 'style="background-color: rgb(0, 0, 0)" ';
              $cv = 'Dente ausente.';
            } else {
              $o = "";
              $co = "";
              $d = "";
              $cd = "";
              $m = "";
              $cm = "";
              $l = "";
              $cl = "";
              $v = "";
              $cv = "";
              foreach($alteracoes_coroa[0] as $key => $alte){
                if($key != "id" && $key != "id_exame" && $alte != ""){
                  $alt = explode(",", $alte);
                  foreach($alt as $al){
                    $al = explode("_", $al);
                    if(isset($al[1])){
                      if($al[0] == $dent){
                        if(isset($al[1])){
                          if($al[1] == "p" || $al[1] == "l"){
                            $l = 'style="background-color: rgb(100, 0, 0)" ';
                            $cl.= $dic[$key].", ";
                          } else if($al[1] == "v"){
                            $v = 'style="background-color: rgb(100, 0, 0)" ';
                            $cv.= $dic[$key].", ";
                          } else if($al[1] == "m"){
                            $m = 'style="background-color: rgb(100, 0, 0)" ';
                            $cm.= $dic[$key].", ";
                          } else if($al[1] == "d"){
                            $d = 'style="background-color: rgb(100, 0, 0)" ';
                            $cd.= $dic[$key].", ";
                          } else if($al[1] == "o"){
                            $o = 'style="background-color: rgb(100, 0, 0)" ';
                            $co.= $dic[$key].", ";
                          }
                        } 
                      }
                    } else{
                      if($al[0] == $dent){
                        $l = 'style="background-color: rgb(100, 0, 0)" ';
                        $cl.= $dic[$key].", ";
                        $v = 'style="background-color: rgb(100, 0, 0)" ';
                        $cv.= $dic[$key].", ";
                        $m = 'style="background-color: rgb(100, 0, 0)" ';
                        $cm.= $dic[$key].", ";
                        $d = 'style="background-color: rgb(100, 0, 0)" ';
                        $cd.= $dic[$key].", ";
                        $o = 'style="background-color: rgb(100, 0, 0)" ';
                        $co.= $dic[$key].", ";
                      }
                    } 
                  }
                }
              }
              $cv = substr($cv, 0, -2);
              $cd = substr($cd, 0, -2);
              $cm = substr($cm, 0, -2);
              $co = substr($co, 0, -2);
              $cl = substr($cl, 0, -2);
            }


            if($dent <= 18 || $dent >= 51 && $dent <=55){
              echo '<div class="dente dente'.$dent.'">
              <p class="nomedente">'.$dent.'</p>
              <div class="geral distdir" data-toggle="popover" '.$d.' data-content="'. $cd .'">
              </div>
              <div class="geral mesidir" data-toggle="popover" '.$m.' data-content="'. $cm .'">
              </div>
              <div class="geral vestsup" data-toggle="popover" '.$v.' data-content="'. $cv .'">
              </div>
              <div class="geral palat" data-toggle="popover" '.$l.' data-content="'. $cl .'">
              </div>
              <div class="geral oclusal" data-toggle="popover" '.$o.' data-content="'. $co .'">
              </div>
              </div>';
            } else if($dent <= 28  && $dent >= 21 || $dent >= 61 && $dent <=65){
              echo '<div class="dente dente'.$dent.'">
              <p class="nomedente">'.$dent.'</p>
              <div class="geral distesq" data-toggle="popover" '.$d.' data-content="'. $cd .'">
              </div>
              <div class="geral mesiesq" data-toggle="popover" '.$m.' data-content="'. $cm .'">
              </div>
              <div class="geral vestsup" data-toggle="popover" '.$v.' data-content="'. $cv .'">
              </div>
              <div class="geral palat" data-toggle="popover" '.$l.' data-content="'. $cl .'">
              </div>
              <div class="geral oclusal" data-toggle="popover" '.$o.' data-content="'. $co .'">
              </div>
              </div>';
            } else if($dent <= 48  && $dent >= 41 || $dent >= 81 && $dent <=85){
              echo '<div class="dente dente'.$dent.'">
              <p class="nomedente">'.$dent.'</p>
              <div class="geral distdir" data-toggle="popover" '.$d.' data-content="'. $cd .'">
              </div>
              <div class="geral mesidir" data-toggle="popover" '.$m.' data-content="'. $cm .'">
              </div>
              <div class="geral ling" data-toggle="popover" '.$l.' data-content="'. $cl .'">
              </div>
              <div class="geral vestinf" data-toggle="popover" '.$v.' data-content="'. $cv .'">
              </div>
              <div class="geral oclusal" data-toggle="popover" '.$o.' data-content="'. $co .'">
              </div>
              </div>';
            } else{
              echo '<div class="dente dente'.$dent.'">
              <p class="nomedente">'.$dent.'</p>
              <div class="geral distesq" data-toggle="popover" '.$d.' data-content="'. $cd .'">
              </div>
              <div class="geral mesiesq" data-toggle="popover" '.$m.' data-content="'. $cm .'">
              </div>
              <div class="geral ling" data-toggle="popover" '.$l.' data-content="'. $cl .'">
              </div>
              <div class="geral vestinf" data-toggle="popover" '.$v.' data-content="'. $cv .'">
              </div>
              <div class="geral oclusal" data-toggle="popover" '.$o.' data-content="'. $co .'">
              </div>
              </div>';
            }
            if($dent == 18 || $dent == 28 || $dent == 38 || $dent == 48 || $dent == 55 || $dent == 65 || $dent == 75 || $dent == 85){
              echo '</div>';
            }
          }
        }
      }
      ?>
      <hr>
      <h4>Alterações de raiz</h4>

      <?php
      if(!isset($alteracoes_raiz[0])){
        echo "Não há alterações de raiz";
      } else{
        foreach($alteracoes_raiz[0] as $key => $alt){
          $texto = "";
          if($key != "id" && $key != "id_exame" && $alt != ""){
            echo $dic[$key]. ": ";
            $alt = explode(",", $alt);
            foreach($alt as $al){

              $al = explode("_", $al);
              if(isset($al[1])){
                if(count($alt) == 52 && $exame[0]['denticao'] == "permanente"){
                  $texto = "Todas as raízes";
                  break;
                } else if(count($alt) == 84 && $exame[0]['denticao'] != "permanente"){
                  $texto = "Todas as raízes";
                  break;
                }
                $texto .= $al[0];
                if($al[1] != "mo"){
                  $texto .= strtoupper($al[1]).", ";
                } else{
                  $texto .= ", ";
                }
              } //else{
                //if(count($alt) == 32 && $exame[0]['denticao'] == "permanente"){
                  //echo "Todos os dentes";
                  //break;
                //} else if(count($alt) == 52 && $exame[0]['denticao'] != "permanente"){
                  //echo "Todos os dentes.";
                  //break;
                //}
                //echo $al[0].", ";
              //}
              }
              echo trim($texto,", ").".";
              echo "<br><br class='notprint'>";
            }
          }
          $dentes = array (11, 12, 13, 14, 15, 16, 17, 18, 21, 22, 23, 24, 25, 26, 27, 28, 51, 52, 53, 54, 55, 61 ,62, 63, 64, 65, 81, 82, 83, 84, 85, 71, 72, 73, 74, 75, 41, 42, 43, 44, 45, 46, 47, 48, 31, 32, 33, 34, 35, 36, 37, 38);
          foreach($dentes as $dent){
            if($exame[0]['denticao'] == "mista" || $exame[0]['denticao'] == "permanente" && $dent <= 48 || $exame[0]['denticao'] == "decidua" && $dent >= 51){

              if($dent == 11 || $dent == 21 || $dent == 31 || $dent == 41 || $dent == 51 || $dent == 61 || $dent == 71 || $dent == 81){
                echo '<div class="col-md-6 notprint" style="margin-top:20px;">';
              }

              $dentes_aus = explode("-", $exame[0]['dentes_ausentes']);
              if (in_array($dent, $dentes_aus)) { 
                $mo = 'style="background-color: rgb(0, 0, 0)" ';
                $cmo = 'Dente ausente.';
                $d = 'style="background-color: rgb(0, 0, 0)" ';
                $cd = 'Dente ausente.';
                $m = 'style="background-color: rgb(0, 0, 0)" ';
                $cm = 'Dente ausente.';
                $p = 'style="background-color: rgb(0, 0, 0)" ';
                $cp = 'Dente ausente.';
                $v = 'style="background-color: rgb(0, 0, 0)" ';
                $cv = 'Dente ausente.';
                $dv = 'style="background-color: rgb(0, 0, 0)" ';
                $cdv = 'Dente ausente.';
                $mv = 'style="background-color: rgb(0, 0, 0)" ';
                $cmv = 'Dente ausente.';
              } else {
                $mo = "";
                $cmo = "";
                $d = "";
                $cd = "";
                $m = "";
                $cm = "";
                $p = "";
                $cp = "";
                $v = "";
                $cv = "";
                $dv = "";
                $cdv = "";
                $mv = "";
                $cmv = "";
                foreach($alteracoes_raiz[0] as $key => $alte){
                  if($key != "id" && $key != "id_exame" && $alte != ""){
                    $alt = explode(",", $alte);
                    foreach($alt as $al){
                      $al = explode("_", $al);
                      if(isset($al[1])){
                        if($al[0] == $dent){
                          if($al[1] == "p"){
                            $p = 'style="background-color: rgb(100, 0, 0)" ';
                            $cp.= $dic[$key].", ";
                          } else if($al[1] == "v"){
                            $v = 'style="background-color: rgb(100, 0, 0)" ';
                            $cv.= $dic[$key].", ";
                          } else if($al[1] == "m"){
                            $m = 'style="background-color: rgb(100, 0, 0)" ';
                            $cm.= $dic[$key].", ";
                          } else if($al[1] == "d"){
                            $d = 'style="background-color: rgb(100, 0, 0)" ';
                            $cd.= $dic[$key].", ";
                          } else if($al[1] == "mo"){
                            $mo = 'style="background-color: rgb(100, 0, 0)" ';
                            $cmo.= $dic[$key].", ";
                          } else if($al[1] == "dv"){
                            $dv = 'style="background-color: rgb(100, 0, 0)" ';
                            $cdv.= $dic[$key].", ";
                          } else if($al[1] == "mv"){
                            $mv = 'style="background-color: rgb(100, 0, 0)" ';
                            $cmv.= $dic[$key].", ";
                          } 
                        }
                      }
                    }
                  }
                }
                $cv = substr($cv, 0, -2);
                $cdv = substr($cdv, 0, -2);
                $cmv = substr($cmv, 0, -2);
                $cd = substr($cd, 0, -2);
                $cm = substr($cm, 0, -2);
                $cmo = substr($cmo, 0, -2);
                $cp = substr($cp, 0, -2);
              }


              if($dent >= 11 && $dent <= 13 || $dent == 15 || $dent >= 21 && $dent <= 23 || $dent == 25 || $dent >= 51 && $dent <= 53 || $dent >= 61 && $dent <= 63 || $dent >= 71 && $dent <= 73 || $dent >= 81 && $dent <= 83 || $dent >= 31 && $dent <= 35 || $dent >= 41 && $dent <= 45){
                echo '
                  <div class="dente dente'.$dent.'">
                    <p class="nomedente" style="margin-left:5px;">R</p>
                    <p class="nomedente2">'.$dent.'</p>
                    <div class="geral monorad" data-toggle="popover" '.$mo.' data-content="'. $cmo .'">
                      
                    </div>
                  </div>';
              } else if($dent == 14 || $dent == 24){
                echo '
                <div class="dente dente'.$dent.'">
                  <p class="nomedente2">'.$dent.'</p>
                  <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
                  <div class="geral biradvsup" data-toggle="popover" '.$v.' data-content="'. $cv .'">
                    
                  </div>
                  <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
                  <div class="geral biradpsup" data-toggle="popover" '.$p.' data-content="'. $cp .'">
                    
                  </div>
                </div>';
              } else if($dent >= 16  && $dent <= 18 || $dent == 54 || $dent == 55){
                echo '
                <div class="dente dente'.$dent.'">
                  <p class="nomedente2">'.$dent.'</p>
                  <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
                  <div class="geral rizogenese_incompleta triradpsup" data-toggle="popover" '.$p.' data-content="'. $cp .'">
                    
                  </div>
                  <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
                  <div class="geral rizogenese_incompleta triradmvsup" data-toggle="popover" '.$mv.' data-content="'. $cmv .'">
                    
                  </div>
                  <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
                  <div class="geral rizogenese_incompleta triraddvsup" data-toggle="popover" '.$dv.' data-content="'. $cdv .'">
                    
                  </div>
                </div>';
              } else if($dent >= 26  && $dent <= 28 || $dent == 64 || $dent == 65){
                echo '
                <div class="dente dente'.$dent.'">
                  <p class="nomedente2">'.$dent.'</p>
                  <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
                  <div class="geral rizogenese_incompleta triradpsup" data-toggle="popover" '.$p.' data-content="'. $cp .'">
                    
                  </div>
                  <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
                  <div class="geral rizogenese_incompleta triradmvsup2" data-toggle="popover" '.$mv.' data-content="'. $cmv .'">
                    
                  </div>
                  <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
                  <div class="geral rizogenese_incompleta triraddvsup2" data-toggle="popover" '.$dv.' data-content="'. $cdv .'">
                    
                  </div>
                </div>';
              } else if($dent >= 36  && $dent <= 38 || $dent == 74 || $dent == 75){
                echo '
                <div class="dente dente'.$dent.'">
                  <p class="nomedente2">'.$dent.'</p>
                  <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
                  <div class="geral rizogenese_incompleta biradminf2" data-toggle="popover" '.$m.' data-content="'. $cm .'">
                    
                  </div>
                  <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
                  <div class="geral rizogenese_incompleta biraddinf2" data-toggle="popover" '.$d.' data-content="'. $cd .'">
                    
                  </div>
                </div>';
              } else if($dent >= 46  && $dent <= 48 || $dent == 84 || $dent == 85){
                echo '
                <div class="dente dente'.$dent.'">
                  <p class="nomedente2">'.$dent.'</p>
                  <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
                  <div class="geral rizogenese_incompleta biradminf" data-toggle="popover" '.$m.' data-content="'. $cm .'">
                    
                  </div>
                  <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
                  <div class="geral rizogenese_incompleta biraddinf" data-toggle="popover" '.$d.' data-content="'. $cd .'">
                    
                  </div>
                </div>';
              } else{
                echo '<div class="dente dente'.$dent.'">
                <p class="nomedente">'.$dent.'</p>
                <div class="geral distesq" data-toggle="popover" '.$d.' data-content="'. $cd .'">
                </div>
                <div class="geral mesiesq" data-toggle="popover" '.$m.' data-content="'. $cm .'">
                </div>
                <div class="geral ling" data-toggle="popover" '.$l.' data-content="'. $cl .'">
                </div>
                <div class="geral vestinf" data-toggle="popover" '.$v.' data-content="'. $cv .'">
                </div>
                <div class="geral oclusal" data-toggle="popover" '.$o.' data-content="'. $co .'">
                </div>
                </div>';
              }
              if($dent == 18 || $dent == 28 || $dent == 38 || $dent == 48 || $dent == 55 || $dent == 65 || $dent == 75 || $dent == 85){
                echo '</div>';
              }
            }
          }
        }
        ?>

      </div>
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
      <script>
        $(document).ready(function(){
          $('[data-toggle="popover"]').popover();

          $('[data-toggle="popover"]').on('click', function (e) {
            $('[data-toggle="popover"]').not(this).popover('hide');
          });
        });
      </script>
    </body>
    </html>