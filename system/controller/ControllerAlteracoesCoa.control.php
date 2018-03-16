<?php

include_once ROOT . "model/class.db.php";
include_once ROOT . "controller/Controller.class.php";
include_once ROOT . "model/AlteracoesCoa.class.php";

class ControllerAlteracoesCoa extends Controller {

    protected function selectOne($obj) {
        $db = new db();
        return $db->select("alteracoes_coa", "id=" . $obj['id']);
    }

    protected function selectAll() {
        $db = new db();
        return $db->select("alteracoes_coa");
    }

    protected function insert($obj) {
        $db = new db();
        return $db->insert("alteracoes_coa", $obj);
    }

    protected function update($obj) {
        $db = new db();
        return $db->update("alteracoes_coa", $obj, "id=" . $obj['id']);
    }

    protected function delete($obj) {
        $db = new db();
        return $db->delete("alteracoes_coa", "id=" . $obj['id']);
    }

    protected function selectByExame($obj) {
        $db = new db();
        return $db->select("alteracoes_coa", "id_exame=" . $obj['id_exame']);
    }

}