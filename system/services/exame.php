<?php

include_once("../../config.php");
include_once(ROOT . "controller/ControllerExame.control.php");
include_once(ROOT . "controller/ControllerExameAnterior.control.php");
include_once(ROOT . "controller/ControllerAlteracoesAtm.control.php");
include_once(ROOT . "controller/ControllerAlteracoesCoa.control.php");
include_once(ROOT . "controller/ControllerAlteracoesCoroa.control.php");
include_once(ROOT . "controller/ControllerAlteracoesPeriapice.control.php");
include_once(ROOT . "controller/ControllerAlteracoesRaiz.control.php");
include_once(ROOT . "controller/ControllerAlteracoesTecidoMole.control.php");
include_once(ROOT . "controller/ControllerAlteracoesTecidoOsseo.control.php");

$ce = new ControllerExame();
$cea = new ControllerExameAnterior();
$caatm = new ControllerAlteracoesAtm();
$cacoa = new ControllerAlteracoesCoa();
$cac = new ControllerAlteracoesCoroa();
$cap = new ControllerAlteracoesPeriapice();
$car = new ControllerAlteracoesRaiz();
$catm = new ControllerAlteracoesTecidoMole();
$cato = new ControllerAlteracoesTecidoOsseo();
$e = new Exame();


if (isset($_POST["enviar"])) {
    if ($_POST['acao'] == "inserir") {
        $e->setNum_prontuario($_POST['num_prontuario']);
        $e->setData($_POST['data']);
        $e->setMotivo($_POST['motivo']);
        $e->setNascimento($_POST['nascimento']);
        $e->setNome($_POST['nome']);

        $path = $_FILES['arquivo']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $arqname = uniqid().".".$ext;
        $e->setArquivo($arqname);
        move_uploaded_file($_FILES['arquivo']['tmp_name'], "../../arquivos/" . $arqname);

        $local = "";
        if($_POST['local1'] == "radio-ufrgs"){
            $local .= "Serviço de Radiologia Odontológica / UFRGS";
            if($_POST['local2'] == "radio-pos-grad"){
                $local .= " - Encaminhado pela pós-graduação em ".$_POST['local3'];
            } else{
                $local .= " - Encaminhado por ".$_POST['local2'];
            }
        } else if($_POST['local1'] == "graduacao"){
            $local .= "Graduação - ".$_POST['local4'];
        } else if($_POST['local1'] == "extensao"){
            $local .= "Projeto de extensão - ".$_POST['local5'];
        } else if($_POST['local1'] == "pos"){
            $local .= "Pós-graduação - ".$_POST['local6']." em ".$_POST['local7'];
        } 
        $e->setLocal($local);

        $exame = "";
        if($_POST['tipo-exame1'] == "intrabucal"){
            $exame .= "Radiografia intrabucal - ";
            if($_POST['tipo-exame2'] == "periapical-bissetriz"){
                $exame .= "Periapical (bissetriz) de ".$_POST['tipo-exame3'];
            } else if($_POST['tipo-exame2'] == "periapical-paralelismo"){
                $exame .= "Periapical (paralelismo) de ".$_POST['tipo-exame3'];
            } else if($_POST['tipo-exame2'] == "interproximal"){
                $exame .= "Interproximal de ".$_POST['tipo-exame4'];
            } else if($_POST['tipo-exame2'] == "oclusal"){
                $exame .= "Oclusal de ".$_POST['tipo-exame5'];
            } else if($_POST['tipo-exame2'] == "outra"){
                $exame .= "Radiografia intrabucal - ".$_POST['tipo-exame6'];
            } 
        } else if($_POST['tipo-exame1'] == "extrabucal"){
            if($_POST['extrabucal'] == "outra"){
                $exame .= "Radiografia extrabucal - ".$_POST['tipo-exame7'];
            } else{
                $exame .= "Radiografia extrabucal - ".$_POST['extrabucal'];
            }
        } else if($_POST['tipo-exame1'] == "tomografia"){
            $exame .= "Tomografia computadorizada de ".$_POST['tomografia'];
        } else if($_POST['tipo-exame1'] == "ressonancia"){
            $exame .= "Ressonância de ".$_POST['ressonancia'];
        }
        $e->setExame($exame);

        $e->setDenticao($_POST['denticao']);
        $aus = "";
        if(isset($_POST['dentesausentes'])){
            foreach($_POST['dentesausentes'] as $ausentes){
                $aus .= $ausentes."-";
            }
        }
        $e->setDentes_ausentes($aus);

        $e = $e->objectToArray();
        $ce->actionControl('insert', $e);
        $id_exame = $ce->actionControl("selectLastId");
        
        $cont = 0;
        foreach($_POST['num-exame'] as $key => $numexame){
            if($numexame != "" && $_POST['data-exame'][$key] != "0000-00-00"){
                $path = $_FILES['exame']['name'][$key];
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $arqname = uniqid().".".$ext;
                $ea = new ExameAnterior();
                $ea->setId_exame($id_exame[0]['id']);
                $ea->setNumero($numexame);
                $ea->setData($_POST['data-exame'][$key]);
                $ea->setArquivo($arqname);
                $ea = $ea->objectToArray();
                $cea->actionControl('insert',$ea);
                move_uploaded_file($_FILES['exame']['tmp_name'][$key], "../../arquivos/" . $arqname);
                $cont++;
            }
        }
        foreach($_POST['regiao_avaliada'] as $regiao_avaliada){
            if($regiao_avaliada == "atm"){
                if($_POST['alteracoes-atm'] == "Com alterações"){
                    $aatm = new AlteracoesAtm();
                    $aatm->setId_exame($id_exame[0]['id']);
                    @$aatm->setAlteracao_forma_disco_esq($_POST['alteracao_forma_disco_esq']);
                    @$aatm->setDeslocamento_disco_esq($_POST['deslocamento_disco_esq']);
                    @$aatm->setEdema_atm_esq($_POST['edema_atm_esq']);
                    @$aatm->setDegeneracao_art_atm_esq($_POST['degeneracao_art_atm_esq']);
                    @$aatm->setAlteracoes_med_atm_esq($_POST['alteracoes_med_atm_esq']);
                    @$aatm->setAlteracao_forma_disco_dir($_POST['alteracao_forma_disco_dir']);
                    @$aatm->setDeslocamento_disco_dir($_POST['deslocamento_disco_dir']);
                    @$aatm->setEdema_atm_dir($_POST['edema_atm_dir']);
                    @$aatm->setDegeneracao_art_atm_dir($_POST['degeneracao_art_atm_dir']);
                    @$aatm->setAlteracoes_med_atm_dir($_POST['alteracoes_med_atm_dir']);
                    $aatm = $aatm->objectToArray();
                    $caatm->actionControl('insert',$aatm);
                }
            } else if($regiao_avaliada == "crista"){
                if($_POST['alteracoes-crista'] == "Com alterações"){
                    $acoa = new AlteracoesCoa();
                    $acoa->setId_exame($id_exame[0]['id']);
                    @$acoa->setPerda_ossea_generalizada($_POST['perdaosseageneralizada']);
                    @$acoa->setPerda_ossea_generalizada2($_POST['perdaosseageneralizada2']);
                    @$acoa->setPerda_ossea_localizadav(implode(",",$_POST['perdaossealocalizadav']));
                    @$acoa->setPerda_ossea_localizadah(implode(",",$_POST['perdaossealocalizadah']));
                    @$acoa->setEsfumacamento(implode(",",$_POST['esfumacamento']));
                    @$acoa->setEndoperio(implode(",",$_POST['endoperio']));
                    @$acoa->setLesao_furca(implode(",",$_POST['lesao_furca']));
                    $acoa = $acoa->objectToArray();
                    $cacoa->actionControl('insert',$acoa);
                }
            } else if($regiao_avaliada == "coroa"){
                if($_POST['alteracoes-coroa'] == "Com alterações"){
                    $ac = new AlteracoesCoroa();
                    $ac->setId_exame($id_exame[0]['id']);
                    @$ac->setCarie(implode(",",$_POST['carie']));
                    @$ac->setRecidiva_carie(implode(",",$_POST['recidiva']));
                    @$ac->setLinha_adesivo_dentinario(implode(",",$_POST['linhaadesivo']));
                    @$ac->setMaterial_restaurador_radiolucido(implode(",",$_POST['materialrestradiolucido']));
                    @$ac->setPreparo_cavitario(implode(",",$_POST['preparocavitario']));
                    @$ac->setDeficiencia_adaptacao_restauracao(implode(",",$_POST['defadaptrest']));
                    @$ac->setTrepanacao(implode(",",$_POST['trepanacao']));
                    @$ac->setFratura_coronaria(implode(",",$_POST['fraturacoronaria']));
                    @$ac->setErosao(implode(",",$_POST['erosao']));
                    @$ac->setAbrasao(implode(",",$_POST['abrasao']));
                    @$ac->setAtricao(implode(",",$_POST['atricao']));
                    @$ac->setHipoplasia_esmalte(implode(",",$_POST['hipoplasia_esmalte']));
                    @$ac->setMaterial_forrador_radiopaco(implode(",",$_POST['materialforradorradiopaco']));
                    @$ac->setMaterial_restaurador_radiopaco(implode(",",$_POST['materialrestauradorradiopaco']));
                    @$ac->setCoroa_pilar_protetico(implode(",",$_POST['coroapilarprot']));
                    @$ac->setPontico(implode(",",$_POST['pontico']));
                    @$ac->setCalculo(implode(",",$_POST['calculo']));
                    @$ac->setPerola_esmalte(implode(",",$_POST['perola_esmalte']));
                    @$ac->setCuspide_garra(implode(",",$_POST['cuspide_garra']));
                    @$ac->setNodulo_pulpar(implode(",",$_POST['nodulo_pulpar']));
                    @$ac->setAtresia_camara(implode(",",$_POST['atresia_camara']));
                    @$ac->setCingulo_invaginado(implode(",",$_POST['cingulo_invaginado']));
                    @$ac->setDens_in_dente(implode(",",$_POST['dens_in_dente']));
                    @$ac->setMaterial_base(implode(",",$_POST['material_base']));
                    @$ac->setRetentor_intrarradicular(implode(",",$_POST['retentor_intrarradicular']));
                    @$ac->setAparato_orto(implode(",",$_POST['aparato_orto']));
                    $ac = $ac->objectToArray();
                    $cac->actionControl('insert',$ac);
                }
            } else if($regiao_avaliada == "periapice"){
                if($_POST['alteracoes-periapice'] == "Com alterações"){
                    $ap = new AlteracoesPeriapice();
                    $ap->setId_exame($id_exame[0]['id']);
                    @$ap->setContinuidade_lamina_dura(implode(",",$_POST['continuidade_lamina_dura']));
                    @$ap->setArea_radiolucida_apical(implode(",",$_POST['area_radiolucida_apical']));
                    @$ap->setArea_radiopaca_apical(implode(",",$_POST['area_radiopaca_apical']));
                    @$ap->setEspessamento_espaco_ligamento(implode(",",$_POST['espessamento_espaco_ligamento']));
                    $ap = $ap->objectToArray();
                    $cap->actionControl('insert',$ap);
                }
            } else if($regiao_avaliada == "raiz"){
                if($_POST['alteracoes-raiz'] == "Com alterações"){
                    $ar = new AlteracoesRaiz();
                    $ar->setId_exame($id_exame[0]['id']);
                    @$ar->setRizogenese_incompleta(implode(",",$_POST['rizogenese_incompleta']));
                    @$ar->setRizolise(implode(",",$_POST['rizolise']));
                    @$ar->setReabsorcao_dentinaria_interna(implode(",",$_POST['reabsorcao_dentinaria_interna']));
                    @$ar->setReabsorcao_dentinaria_externa(implode(",",$_POST['reabsorcao_dentinaria_externa']));
                    @$ar->setCanais_colaterais(implode(",",$_POST['canais_colaterais']));
                    @$ar->setCarie_radicular(implode(",",$_POST['carie_radicular']));
                    @$ar->setRestauracao_radiolucida(implode(",",$_POST['restauracao_radiolucida']));
                    @$ar->setFratura_radicular(implode(",",$_POST['fratura_radicular']));
                    @$ar->setPerfuracao(implode(",",$_POST['perfuracao']));
                    @$ar->setPreparo_protetico(implode(",",$_POST['preparo_protetico']));
                    @$ar->setEspaco_vazio(implode(",",$_POST['espaco_vazio']));
                    @$ar->setApicetomia(implode(",",$_POST['apicetomia']));
                    @$ar->setRestauracao_parietal(implode(",",$_POST['restauracao_parietal']));
                    @$ar->setRestauracao_radiopaca(implode(",",$_POST['restauracao_radiopaca']));
                    @$ar->setTratamento_endodontico(implode(",",$_POST['tratamento_endodontico']));
                    @$ar->setRetentor_intrarradicular_raiz(implode(",",$_POST['retentor_intrarradicular_raiz']));
                    @$ar->setObturacao_retrograda(implode(",",$_POST['obturacao_retrograda']));
                    @$ar->setAnquilose(implode(",",$_POST['anquilose']));
                    @$ar->setAtresia_conduto_radicular(implode(",",$_POST['atresia_conduto_radicular']));
                    @$ar->setCalculo_raiz(implode(",",$_POST['calculo_raiz']));
                    @$ar->setHipercementose(implode(",",$_POST['hipercementose']));
                    @$ar->setAgulhas_calcicas(implode(",",$_POST['agulhas_calcicas']));
                    @$ar->setInstrumento_endodontico_fraturado(implode(",",$_POST['instrumento_endodontico_fraturado']));
                    $ar = $ar->objectToArray();
                    $car->actionControl('insert',$ar);
                }
            } else if($regiao_avaliada == "tecido_mole"){
                if($_POST['alteracoes-tecido_mole'] == "Com alterações"){
                    $atm = new AlteracoesTecidoMole();
                    $atm->setId_exame($id_exame[0]['id']);
                    @$atm->setGenero($_POST['genero']);
                    @$atm->setCor($_POST['cor']);
                    @$atm->setDor($_POST['dor']);
                    @$atm->setParestesia($_POST['parestesia']);
                    @$atm->setParestesia2($_POST['parestesia2']);
                    @$atm->setTumefacao($_POST['tumefacao']);
                    @$atm->setNodulo($_POST['nodulo']);
                    @$atm->setNodulo2($_POST['nodulo2']);
                    @$atm->setLocalizacao($_POST['localizacao']);
                    @$atm->setLocalizacao2($_POST['localizacao2']);
                    @$atm->setNumero_lesoes($_POST['numero_lesoes']);
                    @$atm->setMaior_diametro($_POST['maior_diametro']);
                    @$atm->setAspecto_forma($_POST['aspecto_forma']);
                    $atm = $atm->objectToArray();
                    $catm->actionControl('insert',$atm);
                }
            } else if($regiao_avaliada == "tecido_osseo"){
                if($_POST['alteracoes-tecido_osseo'] == "Com alterações"){
                    $ato = new AlteracoesTecidoOsseo();
                    $ato->setId_exame($id_exame[0]['id']);
                    @$ato->setGenero($_POST['genero']);
                    @$ato->setCor($_POST['cor']);
                    @$ato->setDor($_POST['dor']);
                    @$ato->setParestesia($_POST['parestesia']);
                    @$ato->setLocalizacao($_POST['localizacao']);
                    @$ato->setLocalizacao2($_POST['localizacao2']);
                    @$ato->setCentro_lesao($_POST['centro_lesao']);
                    @$ato->setCentro_lesao2($_POST['centro_lesao2']);
                    @$ato->setRelacao_dentes($_POST['relacao_dentes']);
                    @$ato->setNumero_lesoes($_POST['numero_lesoes']);
                    @$ato->setMaior_diametro($_POST['maior_diametro']);
                    @$ato->setMaior_diametro2($_POST['maior_diametro2']);
                    @$ato->setOrigem_lesao($_POST['origem_lesao']);
                    @$ato->setLimites($_POST['limites']);
                    @$ato->setAspecto_forma($_POST['aspecto_forma']);
                    @$ato->setConteudo_aspecto($_POST['conteudo_aspecto']);
                    @$ato->setConteudo_aspecto2($_POST['conteudo_aspecto2']);
                    @$ato->setContem_dentes($_POST['contem_dentes']);
                    @$ato->setContem_dentes2($_POST['contem_dentes2']);
                    @$ato->setExpansao_cortical($_POST['expansao_cortical']);
                    @$ato->setAdelgacamento_cortical($_POST['adelgacamento_cortical']);
                    @$ato->setReabsorcao_radicular($_POST['reabsorcao_radicular']);
                    @$ato->setRechacamento_adjacentes($_POST['rechacamento_adjacentes']);
                    $ato = $ato->objectToArray();
                    $cato->actionControl('insert',$ato);
                }
            } 
        }
        header("location:../../detalhesexame.php?id_exame=".$id_exame[0]['id']);
    }
    else if ($_POST['acao'] == "login") {
        $e->setEmail($_POST['email']);
        $e->setSenha($_POST['senha']);
        $u = $e->objectToArray();
        $cu->actionControl('validaLogin', $u);
    }
    else if ($_POST['acao'] == "update") {
        $e->setid_usuario($_POST['id_usuario']);
        $e->setEmail($_POST['email']);
        $e->setnome($_POST['nome']);
        $u = $e->objectToArray();
        $cu->actionControl('update', $u);
        header('location:../../www/usuario/listaUsuarios.php');
    }
} else if($_GET['acao'] == "delete"){
    $e->setid_usuario($_GET['id_usuario']);
    $user = $e->objectToArray();
    $cu->actionControl('delete',$user);
    header('location:../../www/usuario/listaUsuarios.php');
} else if($_GET['acao'] == "logout"){
    session_start();
    unset($_SESSION['restricted']);
    header("location:../../login.php");
}