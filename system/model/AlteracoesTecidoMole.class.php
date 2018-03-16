<?php

class AlteracoesTecidoMole {

    private $id;
    private $id_exame;
    private $genero;
    private $cor;
    private $dor;
    private $parestesia;
    private $parestesia2;
    private $tumefacao;
    private $nodulo;
    private $nodulo2;
    private $localizacao;
    private $localizacao2;
    private $numero_lesoes;
    private $maior_diametro;
    private $aspecto_forma;

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

    public function setGenero($genero) {
        if(!empty($genero)){
            $this->genero = $genero;
        } else{
            $this->genero = "";
        }
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setCor($cor) {
        if(!empty($cor)){
            $this->cor = $cor;
        } else{
            $this->cor = "";
        }
    }

    public function getCor() {
        return $this->cor;
    }

    public function setDor($dor) {
        if(!empty($dor)){
            $this->dor = $dor;
        } else{
            $this->dor = "";
        }
    }

    public function getDor() {
        return $this->dor;
    }

    public function setParestesia($parestesia) {
        if(!empty($parestesia)){
            $this->parestesia = $parestesia;
        } else{
            $this->parestesia = "";
        }
    }

    public function getParestesia() {
        return $this->parestesia;
    }

    public function setParestesia2($parestesia2) {
        if(!empty($parestesia2)){
            $this->parestesia2 = $parestesia2;
        } else{
            $this->parestesia2 = "";
        }
    }

    public function getParestesia2() {
        return $this->parestesia2;
    }

    public function setTumefacao($tumefacao) {
        if(!empty($tumefacao)){
            $this->tumefacao = $tumefacao;
        } else{
            $this->tumefacao = "";
        }
    }

    public function getTumefacao() {
        return $this->tumefacao;
    }

    public function setNodulo($nodulo) {
        if(!empty($nodulo)){
            $this->nodulo = $nodulo;
        } else{
            $this->nodulo = "";
        }
    }

    public function getNodulo() {
        return $this->nodulo;
    }

    public function setNodulo2($nodulo2) {
        if(!empty($nodulo2)){
            $this->nodulo2 = $nodulo2;
        } else{
            $this->nodulo2 = "";
        }
    }

    public function getNodulo2() {
        return $this->nodulo2;
    }

    public function setLocalizacao($localizacao) {
        if(!empty($localizacao)){
            $this->localizacao = $localizacao;
        } else{
            $this->localizacao = "";
        }
    }

    public function getLocalizacao() {
        return $this->localizacao;
    }

    public function setLocalizacao2($localizacao2) {
        if(!empty($localizacao2)){
            $this->localizacao2 = $localizacao2;
        } else{
            $this->localizacao2 = "";
        }
    }

    public function getLocalizacao2() {
        return $this->localizacao2;
    }

    public function setNumero_lesoes($numero_lesoes) {
        if(!empty($numero_lesoes)){
            $this->numero_lesoes = $numero_lesoes;
        } else{
            $this->numero_lesoes = "";
        }
    }

    public function getNumero_lesoes() {
        return $this->numero_lesoes;
    }

    public function setMaior_diametro($maior_diametro) {
        if(!empty($maior_diametro)){
            $this->maior_diametro = $maior_diametro;
        } else{
            $this->maior_diametro = "";
        }
    }

    public function getMaior_diametro() {
        return $this->maior_diametro;
    }

    public function setAspecto_forma($aspecto_forma) {
        if(!empty($aspecto_forma)){
            $this->aspecto_forma = $aspecto_forma;
        } else{
            $this->aspecto_forma = "";
        }
    }

    public function getAspecto_forma() {
        return $this->aspecto_forma;
    }

}