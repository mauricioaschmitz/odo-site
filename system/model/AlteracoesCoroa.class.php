<?php

class AlteracoesCoroa {

    private $id;
    private $id_exame;
    private $carie;
    private $recidiva_carie;
    private $linha_adesivo_dentinario;
    private $material_restaurador_radiolucido;
    private $preparo_cavitario;
    private $deficiencia_adaptacao_restauracao;
    private $trepanacao;
    private $fratura_coronaria;
    private $erosao;
    private $abrasao;
    private $atricao;
    private $hipoplasia_esmalte;
    private $material_forrador_radiopaco;
    private $material_restaurador_radiopaco;
    private $coroa_pilar_protetico;
    private $pontico;
    private $calculo;
    private $perola_esmalte;
    private $cuspide_garra;
    private $nodulo_pulpar;
    private $atresia_camara;
    private $cingulo_invaginado;
    private $dens_in_dente;
    private $material_base;
    private $retentor_intrarradicular;
    private $aparato_orto;

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

    public function setCarie($carie) {
        if(!empty($carie)){
            $this->carie = $carie;
        } else{
            $this->carie = "";
        }
    }

    public function getCarie() {
        return $this->carie;
    }
    
    public function setRecidiva_carie($recidiva_carie) {
        if(!empty($recidiva_carie)){
        $this->recidiva_carie = $recidiva_carie;
        } else{
            $this->recidiva_carie = "";
        }
    }

    public function getRecidiva_carie() {
        return $this->recidiva_carie;
    }

    public function setLinha_adesivo_dentinario($linha_adesivo_dentinario) {
        if(!empty($linha_adesivo_dentinario)){
        $this->linha_adesivo_dentinario = $linha_adesivo_dentinario;
        } else{
            $this->linha_adesivo_dentinario = "";
        }
    }

    public function getLinha_adesivo_dentinario() {
        return $this->linha_adesivo_dentinario;
    }

    public function setMaterial_restaurador_radiolucido($material_restaurador_radiolucido) {
        if(!empty($material_restaurador_radiolucido)){
        $this->material_restaurador_radiolucido = $material_restaurador_radiolucido;
        } else{
            $this->material_restaurador_radiolucido = "";
        }
    }

    public function getMaterial_restaurador_radiolucido() {
        return $this->material_restaurador_radiolucido;
    }

    public function setPreparo_cavitario($preparo_cavitario) {
        if(!empty($preparo_cavitario)){
        $this->preparo_cavitario = $preparo_cavitario;
        } else{
            $this->preparo_cavitario = "";
        }
    }

    public function getPreparo_cavitario() {
        return $this->preparo_cavitario;
    }

    public function setDeficiencia_adaptacao_restauracao($deficiencia_adaptacao_restauracao) {
        if(!empty($deficiencia_adaptacao_restauracao)){
        $this->deficiencia_adaptacao_restauracao = $deficiencia_adaptacao_restauracao;
        } else{
            $this->deficiencia_adaptacao_restauracao = "";
        }
    }

    public function getDeficiencia_adaptacao_restauracao() {
        return $this->deficiencia_adaptacao_restauracao;
    }

    public function setTrepanacao($trepanacao) {
        if(!empty($trepanacao)){
        $this->trepanacao = $trepanacao;
        } else{
            $this->trepanacao = "";
        }
    }

    public function getTrepanacao() {
        return $this->trepanacao;
    }

    public function setFratura_coronaria($fratura_coronaria) {
        if(!empty($fratura_coronaria)){
        $this->fratura_coronaria = $fratura_coronaria;
        } else{
            $this->fratura_coronaria = "";
        }
    }

    public function getFratura_coronaria() {
        return $this->fratura_coronaria;
    }

    public function setErosao($erosao) {
        if(!empty($erosao)){
        $this->erosao = $erosao;
        } else{
            $this->erosao = "";
        }
    }

    public function getErosao() {
        return $this->erosao;
    }

    public function setAbrasao($abrasao) {
        if(!empty($abrasao)){
        $this->abrasao = $abrasao;
        } else{
            $this->abrasao = "";
        }
    }

    public function getAbrasao() {
        return $this->abrasao;
    }

    public function setAtricao($atricao) {
        if(!empty($atricao)){
        $this->atricao = $atricao;
        } else{
            $this->atricao = "";
        }
    }

    public function getAtricao() {
        return $this->atricao;
    }

    public function setHipoplasia_esmalte($hipoplasia_esmalte) {
        if(!empty($hipoplasia_esmalte)){
        $this->hipoplasia_esmalte = $hipoplasia_esmalte;
        } else{
            $this->hipoplasia_esmalte = "";
        }
    }

    public function getHipoplasia_esmalte() {
        return $this->hipoplasia_esmalte;
    }

    public function setMaterial_forrador_radiopaco($material_forrador_radiopaco) {
        if(!empty($material_forrador_radiopaco)){
        $this->material_forrador_radiopaco = $material_forrador_radiopaco;
        } else{
            $this->material_forrador_radiopaco = "";
        }
    }

    public function getMaterial_forrador_radiopaco() {
        return $this->material_forrador_radiopaco;
    }

    public function setMaterial_restaurador_radiopaco($material_restaurador_radiopaco) {
        if(!empty($material_restaurador_radiopaco)){
        $this->material_restaurador_radiopaco = $material_restaurador_radiopaco;
        } else{
            $this->material_restaurador_radiopaco = "";
        }
    }

    public function getMaterial_restaurador_radiopaco() {
        return $this->material_restaurador_radiopaco;
    }

    public function setCoroa_pilar_protetico($coroa_pilar_protetico) {
        if(!empty($coroa_pilar_protetico)){
        $this->coroa_pilar_protetico = $coroa_pilar_protetico;
        } else{
            $this->coroa_pilar_protetico = "";
        }
    }

    public function getCoroa_pilar_protetico() {
        return $this->coroa_pilar_protetico;
    }

    public function setPontico($pontico) {
        if(!empty($pontico)){
        $this->pontico = $pontico;
        } else{
            $this->pontico = "";
        }
    }

    public function getPontico() {
        return $this->pontico;
    }

    public function setCalculo($calculo) {
        if(!empty($calculo)){
        $this->calculo = $calculo;
        } else{
            $this->calculo = "";
        }
    }

    public function getCalculo() {
        return $this->calculo;
    }

    public function setPerola_esmalte($perola_esmalte) {
        if(!empty($perola_esmalte)){
        $this->perola_esmalte = $perola_esmalte;
        } else{
            $this->perola_esmalte = "";
        }
    }

    public function getPerola_esmalte() {
        return $this->perola_esmalte;
    }

    public function setCuspide_garra($cuspide_garra) {
        if(!empty($cuspide_garra)){
        $this->cuspide_garra = $cuspide_garra;
        } else{
            $this->cuspide_garra = "";
        }
    }

    public function getCuspide_garra() {
        return $this->cuspide_garra;
    }

    public function setNodulo_pulpar($nodulo_pulpar) {
        if(!empty($nodulo_pulpar)){
        $this->nodulo_pulpar = $nodulo_pulpar;
        } else{
            $this->nodulo_pulpar = "";
        }
    }

    public function getNodulo_pulpar() {
        return $this->nodulo_pulpar;
    }

    public function setAtresia_camara($atresia_camara) {
        if(!empty($atresia_camara)){
        $this->atresia_camara = $atresia_camara;
        } else{
            $this->atresia_camara = "";
        }
    }

    public function getAtresia_camara() {
        return $this->atresia_camara;
    }

    public function setCingulo_invaginado($cingulo_invaginado) {
        if(!empty($cingulo_invaginado)){
        $this->cingulo_invaginado = $cingulo_invaginado;
        } else{
            $this->cingulo_invaginado = "";
        }
    }

    public function getCingulo_invaginado() {
        return $this->cingulo_invaginado;
    }

    public function setDens_in_dente($dens_in_dente) {
        if(!empty($dens_in_dente)){
        $this->dens_in_dente = $dens_in_dente;
        } else{
            $this->dens_in_dente = "";
        }
    }

    public function getDens_in_dente() {
        return $this->dens_in_dente;
    }

    public function setMaterial_base($material_base) {
        if(!empty($material_base)){
        $this->material_base = $material_base;
        } else{
            $this->material_base = "";
        }
    }

    public function getMaterial_base() {
        return $this->material_base;
    }

    public function setRetentor_intrarradicular($retentor_intrarradicular) {
        if(!empty($retentor_intrarradicular)){
        $this->retentor_intrarradicular = $retentor_intrarradicular;
        } else{
            $this->retentor_intrarradicular = "";
        }
    }

    public function getRetentor_intrarradicular() {
        return $this->retentor_intrarradicular;
    }

    public function setAparato_orto($aparato_orto) {
        if(!empty($aparato_orto)){
        $this->aparato_orto = $aparato_orto;
        } else{
            $this->aparato_orto = "";
        }
    }

    public function getAparato_orto() {
        return $this->aparato_orto;
    }

}