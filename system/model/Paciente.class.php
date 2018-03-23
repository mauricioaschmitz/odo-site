<?php

class Paciente {

    private $id;
    private $prontuario;
    private $nascimento;
    private $nome;

    public function objectToArray() {
        return get_object_vars($this);
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function setprontuario($prontuario) {
        $this->prontuario = $prontuario;
    }

    public function getprontuario() {
        return $this->prontuario;
    }

    public function setnascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    public function getnascimento() {
        return $this->nascimento;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

}