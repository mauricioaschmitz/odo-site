<?php

class AlteracoesRaiz {

    private $id;
    private $id_exame;
    private $rizogenese_incompleta;
    private $rizolise;
    private $reabsorcao_dentinaria_interna;
    private $reabsorcao_dentinaria_externa;
    private $canais_colaterais;
    private $carie_radicular;
    private $restauracao_radiolucida;
    private $fratura_radicular;
    private $perfuracao;
    private $preparo_protetico;
    private $espaco_vazio;
    private $apicetomia;
    private $restauracao_parietal;
    private $restauracao_radiopaca;
    private $tratamento_endodontico;
    private $retentor_intrarradicular_raiz;
    private $obturacao_retrograda;
    private $anquilose;
    private $atresia_conduto_radicular;
    private $calculo_raiz;
    private $hipercementose;
    private $agulhas_calcicas;
    private $instrumento_endodontico_fraturado;

    public function objectToArray() {
        return get_object_vars($this);
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setId_exame($id_exame) {
        $this->id_exame = $id_exame;
    }

    public function getId_exame() {
        return $this->id_exame;
    }

    public function setRizogenese_incompleta($rizogenese_incompleta) {
        if(!empty($rizogenese_incompleta)){
            $this->rizogenese_incompleta = $rizogenese_incompleta;
        } else{
            $this->rizogenese_incompleta = "";
        }
    }

    public function getRizogenese_incompleta() {
        return $this->rizogenese_incompleta;
    }
    
    public function setRizolise($rizolise) {
        if(!empty($rizolise)){
        $this->rizolise = $rizolise;
        } else{
            $this->rizolise = "";
        }
    }

    public function getRizolise() {
        return $this->rizolise;
    }

    public function setReabsorcao_dentinaria_interna($reabsorcao_dentinaria_interna) {
        if(!empty($reabsorcao_dentinaria_interna)){
        $this->reabsorcao_dentinaria_interna = $reabsorcao_dentinaria_interna;
        } else{
            $this->reabsorcao_dentinaria_interna = "";
        }
    }

    public function getReabsorcao_dentinaria_interna() {
        return $this->reabsorcao_dentinaria_interna;
    }

    public function setReabsorcao_dentinaria_externa($reabsorcao_dentinaria_externa) {
        if(!empty($reabsorcao_dentinaria_externa)){
        $this->reabsorcao_dentinaria_externa = $reabsorcao_dentinaria_externa;
        } else{
            $this->reabsorcao_dentinaria_externa = "";
        }
    }

    public function getReabsorcao_dentinaria_externa() {
        return $this->reabsorcao_dentinaria_externa;
    }

    public function setCanais_colaterais($canais_colaterais) {
        if(!empty($canais_colaterais)){
        $this->canais_colaterais = $canais_colaterais;
        } else{
            $this->canais_colaterais = "";
        }
    }

    public function getCanais_colaterais() {
        return $this->canais_colaterais;
    }

    public function setCarie_radicular($carie_radicular) {
        if(!empty($carie_radicular)){
        $this->carie_radicular = $carie_radicular;
        } else{
            $this->carie_radicular = "";
        }
    }

    public function getCarie_radicular() {
        return $this->carie_radicular;
    }

    public function setRestauracao_radiolucida($restauracao_radiolucida) {
        if(!empty($restauracao_radiolucida)){
        $this->restauracao_radiolucida = $restauracao_radiolucida;
        } else{
            $this->restauracao_radiolucida = "";
        }
    }

    public function getRestauracao_radiolucida() {
        return $this->restauracao_radiolucida;
    }

    public function setFratura_radicular($fratura_radicular) {
        if(!empty($fratura_radicular)){
        $this->fratura_radicular = $fratura_radicular;
        } else{
            $this->fratura_radicular = "";
        }
    }

    public function getFratura_radicular() {
        return $this->fratura_radicular;
    }

    public function setPerfuracao($perfuracao) {
        if(!empty($perfuracao)){
        $this->perfuracao = $perfuracao;
        } else{
            $this->perfuracao = "";
        }
    }

    public function getPerfuracao() {
        return $this->perfuracao;
    }

    public function setPreparo_protetico($preparo_protetico) {
        if(!empty($preparo_protetico)){
        $this->preparo_protetico = $preparo_protetico;
        } else{
            $this->preparo_protetico = "";
        }
    }

    public function getPreparo_protetico() {
        return $this->preparo_protetico;
    }

    public function setEspaco_vazio($espaco_vazio) {
        if(!empty($espaco_vazio)){
        $this->espaco_vazio = $espaco_vazio;
        } else{
            $this->espaco_vazio = "";
        }
    }

    public function getEspaco_vazio() {
        return $this->espaco_vazio;
    }

    public function setApicetomia($apicetomia) {
        if(!empty($apicetomia)){
        $this->apicetomia = $apicetomia;
        } else{
            $this->apicetomia = "";
        }
    }

    public function getApicetomia() {
        return $this->apicetomia;
    }

    public function setRestauracao_parietal($restauracao_parietal) {
        if(!empty($restauracao_parietal)){
        $this->restauracao_parietal = $restauracao_parietal;
        } else{
            $this->restauracao_parietal = "";
        }
    }

    public function getRestauracao_parietal() {
        return $this->restauracao_parietal;
    }

    public function setRestauracao_radiopaca($restauracao_radiopaca) {
        if(!empty($restauracao_radiopaca)){
        $this->restauracao_radiopaca = $restauracao_radiopaca;
        } else{
            $this->restauracao_radiopaca = "";
        }
    }

    public function getRestauracao_radiopaca() {
        return $this->restauracao_radiopaca;
    }

    public function setTratamento_endodontico($tratamento_endodontico) {
        if(!empty($tratamento_endodontico)){
        $this->tratamento_endodontico = $tratamento_endodontico;
        } else{
            $this->tratamento_endodontico = "";
        }
    }

    public function getTratamento_endodontico() {
        return $this->tratamento_endodontico;
    }

    public function setRetentor_intrarradicular_raiz($retentor_intrarradicular_raiz) {
        if(!empty($retentor_intrarradicular_raiz)){
        $this->retentor_intrarradicular_raiz = $retentor_intrarradicular_raiz;
        } else{
            $this->retentor_intrarradicular_raiz = "";
        }
    }

    public function getRetentor_intrarradicular_raiz() {
        return $this->retentor_intrarradicular_raiz;
    }

    public function setObturacao_retrograda($obturacao_retrograda) {
        if(!empty($obturacao_retrograda)){
        $this->obturacao_retrograda = $obturacao_retrograda;
        } else{
            $this->obturacao_retrograda = "";
        }
    }

    public function getObturacao_retrograda() {
        return $this->obturacao_retrograda;
    }

    public function setAnquilose($anquilose) {
        if(!empty($anquilose)){
        $this->anquilose = $anquilose;
        } else{
            $this->anquilose = "";
        }
    }

    public function getAnquilose() {
        return $this->anquilose;
    }

    public function setAtresia_conduto_radicular($atresia_conduto_radicular) {
        if(!empty($atresia_conduto_radicular)){
        $this->atresia_conduto_radicular = $atresia_conduto_radicular;
        } else{
            $this->atresia_conduto_radicular = "";
        }
    }

    public function getAtresia_conduto_radicular() {
        return $this->atresia_conduto_radicular;
    }

    public function setCalculo_raiz($calculo_raiz) {
        if(!empty($calculo_raiz)){
        $this->calculo_raiz = $calculo_raiz;
        } else{
            $this->calculo_raiz = "";
        }
    }

    public function getCalculo_raiz() {
        return $this->calculo_raiz;
    }

    public function setHipercementose($hipercementose) {
        if(!empty($hipercementose)){
        $this->hipercementose = $hipercementose;
        } else{
            $this->hipercementose = "";
        }
    }

    public function getHipercementose() {
        return $this->hipercementose;
    }

    public function setAgulhas_calcicas($agulhas_calcicas) {
        if(!empty($agulhas_calcicas)){
        $this->agulhas_calcicas = $agulhas_calcicas;
        } else{
            $this->agulhas_calcicas = "";
        }
    }

    public function getAgulhas_calcicas() {
        return $this->agulhas_calcicas;
    }

    public function setInstrumento_endodontico_fraturado($instrumento_endodontico_fraturado) {
        if(!empty($instrumento_endodontico_fraturado)){
        $this->instrumento_endodontico_fraturado = $instrumento_endodontico_fraturado;
        } else{
            $this->instrumento_endodontico_fraturado = "";
        }
    }

    public function getInstrumento_endodontico_fraturado() {
        return $this->instrumento_endodontico_fraturado;
    }

}