<?php

class AlteracoesAtm {

    private $id;
    private $id_exame;
    private $alteracao_forma_disco_esq;
    private $deslocamento_disco_esq;
    private $edema_atm_esq;
    private $degeneracao_art_atm_esq;
    private $alteracoes_med_atm_esq;
    private $alteracao_forma_disco_dir;
    private $deslocamento_disco_dir;
    private $edema_atm_dir;
    private $degeneracao_art_atm_dir;
    private $alteracoes_med_atm_dir;

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

    public function setAlteracao_forma_disco_esq($alteracao_forma_disco_esq) {
        if(!empty($alteracao_forma_disco_esq)){
            $this->alteracao_forma_disco_esq = $alteracao_forma_disco_esq;
        } else{
            $this->alteracao_forma_disco_esq = "";
        }
    }

    public function getAlteracao_forma_disco_esq() {
        return $this->alteracao_forma_disco_esq;
    }
    
    public function setDeslocamento_disco_esq($deslocamento_disco_esq) {
        if(!empty($deslocamento_disco_esq)){
            $this->deslocamento_disco_esq = $deslocamento_disco_esq;
        } else{
            $this->deslocamento_disco_esq = "";
        }
    }

    public function getDeslocamento_disco_esq() {
        return $this->deslocamento_disco_esq;
    }

    public function setEdema_atm_esq($edema_atm_esq) {
        if(!empty($edema_atm_esq)){
            $this->edema_atm_esq = $edema_atm_esq;
        } else{
            $this->edema_atm_esq = "";
        }
    }

    public function getEdema_atm_esq() {
        return $this->edema_atm_esq;
    }

    public function setDegeneracao_art_atm_esq($degeneracao_art_atm_esq) {
        if(!empty($degeneracao_art_atm_esq)){
            $this->degeneracao_art_atm_esq = $degeneracao_art_atm_esq;
        } else{
            $this->degeneracao_art_atm_esq = "";
        }
    }

    public function getDegeneracao_art_atm_esq() {
        return $this->degeneracao_art_atm_esq;
    }

    public function setAlteracoes_med_atm_esq($alteracoes_med_atm_esq) {
        if(!empty($alteracoes_med_atm_esq)){
            $this->alteracoes_med_atm_esq = $alteracoes_med_atm_esq;
        } else{
            $this->alteracoes_med_atm_esq = "";
        }
    }

    public function getAlteracoes_med_atm_esq() {
        return $this->alteracoes_med_atm_esq;
    }

    public function setAlteracao_forma_disco_dir($alteracao_forma_disco_dir) {
        if(!empty($alteracao_forma_disco_dir)){
            $this->alteracao_forma_disco_dir = $alteracao_forma_disco_dir;
        } else{
            $this->alteracao_forma_disco_dir = "";
        }
    }

    public function getAlteracao_forma_disco_dir() {
        return $this->alteracao_forma_disco_dir;
    }
    
    public function setDeslocamento_disco_dir($deslocamento_disco_dir) {
        if(!empty($deslocamento_disco_dir)){
            $this->deslocamento_disco_dir = $deslocamento_disco_dir;
        } else{
            $this->deslocamento_disco_dir = "";
        }
    }

    public function getDeslocamento_disco_dir() {
        return $this->deslocamento_disco_dir;
    }

    public function setEdema_atm_dir($edema_atm_dir) {
        if(!empty($edema_atm_dir)){
            $this->edema_atm_dir = $edema_atm_dir;
        } else{
            $this->edema_atm_dir = "";
        }
    }

    public function getEdema_atm_dir() {
        return $this->edema_atm_dir;
    }

    public function setDegeneracao_art_atm_dir($degeneracao_art_atm_dir) {
        if(!empty($degeneracao_art_atm_dir)){
            $this->degeneracao_art_atm_dir = $degeneracao_art_atm_dir;
        } else{
            $this->degeneracao_art_atm_dir = "";
        }
    }

    public function getDegeneracao_art_atm_dir() {
        return $this->degeneracao_art_atm_dir;
    }

    public function setAlteracoes_med_atm_dir($alteracoes_med_atm_dir) {
        if(!empty($alteracoes_med_atm_dir)){
            $this->alteracoes_med_atm_dir = $alteracoes_med_atm_dir;
        } else{
            $this->alteracoes_med_atm_dir = "";
        }
    }

    public function getAlteracoes_med_atm_dir() {
        return $this->alteracoes_med_atm_dir;
    }

}