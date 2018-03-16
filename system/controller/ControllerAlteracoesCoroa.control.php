<?php

include_once ROOT . "model/class.db.php";
include_once ROOT . "controller/Controller.class.php";
include_once ROOT . "model/AlteracoesCoroa.class.php";

class ControllerAlteracoesCoroa extends Controller {

    protected function selectOne($obj) {
        $db = new db();
        return $db->select("alteracoes_coroa", "id=" . $obj['id']);
    }

    protected function selectAll() {
        $db = new db();
        return $db->select("alteracoes_coroa");
    }

    protected function insert($obj) {
        $db = new db();
        return $db->insert("alteracoes_coroa", $obj);
    }

    protected function update($obj) {
        $db = new db();
        return $db->update("alteracoes_coroa", $obj, "id=" . $obj['id']);
    }

    protected function delete($obj) {
        $db = new db();
        return $db->delete("alteracoes_coroa", "id=" . $obj['id']);
    }

    protected function selectByExame($obj) {
        $db = new db();
        return $db->select("alteracoes_coroa", "id_exame=" . $obj['id_exame']);
    }

}