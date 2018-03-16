<?php

class ExameAnterior {

    private $id;
    private $id_exame;
    private $data;
    private $numero;
    private $arquivo;

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

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
    }

    public function getArquivo() {
        return $this->arquivo;
    }

}