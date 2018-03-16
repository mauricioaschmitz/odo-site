<?php

class AlteracoesCoa {

    private $id;
    private $id_exame;
    private $perda_ossea_generalizada;
    private $perda_ossea_generalizada2;
    private $perda_ossea_localizadav;
    private $perda_ossea_localizadah;
    private $esfumacamento;
    private $endoperio;
    private $lesao_furca;

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

    public function setPerda_ossea_generalizada($perda_ossea_generalizada) {
        if(!empty($perda_ossea_generalizada)){
            $this->perda_ossea_generalizada = $perda_ossea_generalizada;
        } else{
            $this->perda_ossea_generalizada = "";
        }
    }

    public function getPerda_ossea_generalizada() {
        return $this->perda_ossea_generalizada;
    }

    public function setPerda_ossea_generalizada2($perda_ossea_generalizada2) {
        if(!empty($perda_ossea_generalizada2)){
            $this->perda_ossea_generalizada2 = $perda_ossea_generalizada2;
        } else{
            $this->perda_ossea_generalizada2 = "";
        }
    }

    public function getPerda_ossea_generalizada2() {
        return $this->perda_ossea_generalizada2;
    }

    public function setPerda_ossea_localizadav($perda_ossea_localizadav) {
        if(!empty($perda_ossea_localizadav)){
            $this->perda_ossea_localizadav = $perda_ossea_localizadav;
        } else{
            $this->perda_ossea_localizadav = "";
        }
    }

    public function getPerda_ossea_localizadav() {
        return $this->perda_ossea_localizadav;
    }

    public function setPerda_ossea_localizadah($perda_ossea_localizadah) {
        if(!empty($perda_ossea_localizadah)){
            $this->perda_ossea_localizadah = $perda_ossea_localizadah;
        } else{
            $this->perda_ossea_localizadah = "";
        }
    }

    public function getPerda_ossea_localizadah() {
        return $this->perda_ossea_localizadah;
    }

    public function setEsfumacamento($esfumacamento) {
        if(!empty($esfumacamento)){
            $this->esfumacamento = $esfumacamento;
        } else{
            $this->esfumacamento = "";
        }
    }

    public function getEsfumacamento() {
        return $this->esfumacamento;
    }

    public function setEndoperio($endoperio) {
        if(!empty($endoperio)){
            $this->endoperio = $endoperio;
        } else{
            $this->endoperio = "";
        }
    }

    public function getEndoperio() {
        return $this->endoperio;
    }

    public function setLesao_furca($lesao_furca) {
        if(!empty($lesao_furca)){
            $this->lesao_furca = $lesao_furca;
        } else{
            $this->lesao_furca = "";
        }
    }

    public function getLesao_furca() {
        return $this->lesao_furca;
    }
}