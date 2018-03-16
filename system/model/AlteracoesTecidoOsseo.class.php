<?php

class AlteracoesTecidoOsseo {

    private $id;
    private $id_exame;
    private $genero;
    private $cor;
    private $dor;
    private $parestesia;
    private $localizacao;
    private $localizacao2;
    private $centro_lesao;
    private $centro_lesao2;
    private $relacao_dentes;
    private $numero_lesoes;
    private $maior_diametro;
    private $maior_diametro2;
    private $origem_lesao;
    private $limites;
    private $aspecto_forma;
    private $conteudo_aspecto;
    private $conteudo_aspecto2;
    private $contem_dentes;
    private $contem_dentes2;
    private $expansao_cortical;
    private $adelgacamento_cortical;
    private $reabsorcao_radicular;
    private $rechacamento_adjacentes;

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

    public function setCentro_lesao($centro_lesao) {
        if(!empty($centro_lesao)){
            $this->centro_lesao = $centro_lesao;
        } else{
            $this->centro_lesao = "";
        }
    }

    public function getCentro_lesao() {
        return $this->centro_lesao;
    }

    public function setCentro_lesao2($centro_lesao2) {
        if(!empty($centro_lesao2)){
            $this->centro_lesao2 = $centro_lesao2;
        } else{
            $this->centro_lesao2 = "";
        }
    }

    public function getCentro_lesao2() {
        return $this->centro_lesao2;
    }

    public function setRelacao_dentes($relacao_dentes) {
        if(!empty($relacao_dentes)){
            $this->relacao_dentes = $relacao_dentes;
        } else{
            $this->relacao_dentes = "";
        }
    }

    public function getRelacao_dentes() {
        return $this->relacao_dentes;
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

    public function setMaior_diametro2($maior_diametro2) {
        if(!empty($maior_diametro2)){
            $this->maior_diametro2 = $maior_diametro2;
        } else{
            $this->maior_diametro2 = "";
        }
    }

    public function getMaior_diametro2() {
        return $this->maior_diametro2;
    }

    public function setOrigem_lesao($origem_lesao) {
        if(!empty($origem_lesao)){
            $this->origem_lesao = $origem_lesao;
        } else{
            $this->origem_lesao = "";
        }
    }

    public function getOrigem_lesao() {
        return $this->origem_lesao;
    }

    public function setLimites($limites) {
        if(!empty($limites)){
            $this->limites = $limites;
        } else{
            $this->limites = "";
        }
    }

    public function getLimites() {
        return $this->limites;
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

    public function setConteudo_aspecto($conteudo_aspecto) {
        if(!empty($conteudo_aspecto)){
            $this->conteudo_aspecto = $conteudo_aspecto;
        } else{
            $this->conteudo_aspecto = "";
        }
    }

    public function getConteudo_aspecto() {
        return $this->conteudo_aspecto;
    }

    public function setConteudo_aspecto2($conteudo_aspecto2) {
        if(!empty($conteudo_aspecto2)){
            $this->conteudo_aspecto2 = $conteudo_aspecto2;
        } else{
            $this->conteudo_aspecto2 = "";
        }
    }

    public function getConteudo_aspecto2() {
        return $this->conteudo_aspecto2;
    }

    public function setContem_dentes($contem_dentes) {
        if(!empty($contem_dentes)){
            $this->contem_dentes = $contem_dentes;
        } else{
            $this->contem_dentes = "";
        }
    }

    public function getContem_dentes() {
        return $this->contem_dentes;
    }

    public function setContem_dentes2($contem_dentes2) {
        if(!empty($contem_dentes2)){
            $this->contem_dentes2 = $contem_dentes2;
        } else{
            $this->contem_dentes2 = "";
        }
    }

    public function getContem_dentes2() {
        return $this->contem_dentes2;
    }

    public function setExpansao_cortical($expansao_cortical) {
        if(!empty($expansao_cortical)){
            $this->expansao_cortical = $expansao_cortical;
        } else{
            $this->expansao_cortical = "";
        }
    }

    public function getExpansao_cortical() {
        return $this->expansao_cortical;
    }

    public function setAdelgacamento_cortical($adelgacamento_cortical) {
        if(!empty($adelgacamento_cortical)){
            $this->adelgacamento_cortical = $adelgacamento_cortical;
        } else{
            $this->adelgacamento_cortical = "";
        }
    }

    public function getAdelgacamento_cortical() {
        return $this->adelgacamento_cortical;
    }

    public function setReabsorcao_radicular($reabsorcao_radicular) {
        if(!empty($reabsorcao_radicular)){
            $this->reabsorcao_radicular = $reabsorcao_radicular;
        } else{
            $this->reabsorcao_radicular = "";
        }
    }

    public function getReabsorcao_radicular() {
        return $this->reabsorcao_radicular;
    }

    public function setRechacamento_adjacentes($rechacamento_adjacentes) {
        if(!empty($rechacamento_adjacentes)){
            $this->rechacamento_adjacentes = $rechacamento_adjacentes;
        } else{
            $this->rechacamento_adjacentes = "";
        }
    }

    public function getRechacamento_adjacentes() {
        return $this->rechacamento_adjacentes;
    }
}