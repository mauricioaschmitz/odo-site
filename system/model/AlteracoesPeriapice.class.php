<?php

class AlteracoesPeriapice {

    private $id;
    private $id_exame;
    private $continuidade_lamina_dura;
    private $area_radiolucida_apical;
    private $area_radiopaca_apical;
    private $espessamento_espaco_ligamento;

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

    public function setContinuidade_lamina_dura($continuidade_lamina_dura) {
        if(!empty($continuidade_lamina_dura)){
            $this->continuidade_lamina_dura = $continuidade_lamina_dura;
        } else{
            $this->continuidade_lamina_dura = "";
        }
    }

    public function getContinuidade_lamina_dura() {
        return $this->continuidade_lamina_dura;
    }

    public function setArea_radiolucida_apical($area_radiolucida_apical) {
        if(!empty($area_radiolucida_apical)){
            $this->area_radiolucida_apical = $area_radiolucida_apical;
        } else{
            $this->area_radiolucida_apical = "";
        }
    }

    public function getArea_radiolucida_apical() {
        return $this->area_radiolucida_apical;
    }

    public function setArea_radiopaca_apical($area_radiopaca_apical) {
        if(!empty($area_radiopaca_apical)){
            $this->area_radiopaca_apical = $area_radiopaca_apical;
        } else{
            $this->area_radiopaca_apical = "";
        }
    }

    public function getArea_radiopaca_apical() {
        return $this->area_radiopaca_apical;
    }

    public function setEspessamento_espaco_ligamento($espessamento_espaco_ligamento) {
        if(!empty($espessamento_espaco_ligamento)){
            $this->espessamento_espaco_ligamento = $espessamento_espaco_ligamento;
        } else{
            $this->espessamento_espaco_ligamento = "";
        }
    }

    public function getEspessamento_espaco_ligamento() {
        return $this->espessamento_espaco_ligamento;
    }

}