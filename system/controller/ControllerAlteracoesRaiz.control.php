<?php

include_once ROOT . "model/class.db.php";
include_once ROOT . "controller/Controller.class.php";
include_once ROOT . "model/AlteracoesRaiz.class.php";

class ControllerAlteracoesRaiz extends Controller {

    protected function selectOne($obj) {
        $db = new db();
        return $db->select("alteracoes_raiz", "id=" . $obj['id']);
    }

    protected function selectAll() {
        $db = new db();
        return $db->select("alteracoes_raiz");
    }

    protected function insert($obj) {
        $db = new db();
        return $db->insert("alteracoes_raiz", $obj);
    }

    protected function update($obj) {
        $db = new db();
        return $db->update("alteracoes_raiz", $obj, "id=" . $obj['id']);
    }

    protected function delete($obj) {
        $db = new db();
        return $db->delete("alteracoes_raiz", "id=" . $obj['id']);
    }

    protected function selectByExame($obj) {
        $db = new db();
        return $db->select("alteracoes_raiz", "id_exame=" . $obj['id_exame']);
    }

}