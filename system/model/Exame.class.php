<?php

class Exame {

    private $id;
    private $num_prontuario;
    private $data;
    private $motivo;
    private $local;
    private $exame;
    private $denticao;
    private $dentes_ausentes;
    private $arquivo;
    private $nome;
    private $nascimento;

    public function objectToArray() {
        return get_object_vars($this);
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setNum_prontuario($num_prontuario) {
        $this->num_prontuario = $num_prontuario;
    }

    public function getNum_prontuario() {
        return $this->num_prontuario;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function setMotivo($motivo) {
        $this->motivo = $motivo;
    }

    public function getMotivo() {
        return $this->motivo;
    }

    public function setLocal($local) {
        $this->local = $local;
    }

    public function getLocal() {
        return $this->local;
    }

    public function setExame($exame) {
        $this->exame = $exame;
    }

    public function getExame() {
        return $this->exame;
    }

    public function setDenticao($denticao) {
        $this->denticao = $denticao;
    }

    public function getDenticao() {
        return $this->denticao;
    }

    public function setDentes_ausentes($dentes_ausentes) {
        $this->dentes_ausentes = $dentes_ausentes;
    }

    public function getDentes_ausentes() {
        return $this->dentes_ausentes;
    }

    public function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
    }

    public function getArquivo() {
        return $this->arquivo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    public function getNascimento() {
        return $this->nascimento;
    }

}