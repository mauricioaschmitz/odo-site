<?php

include_once ROOT . "model/class.db.php";
include_once ROOT . "controller/Controller.class.php";
include_once ROOT . "model/AlteracoesAtm.class.php";

class ControllerAlteracoesAtm extends Controller {

    protected function selectOne($obj) {
        $db = new db();
        return $db->select("alteracoes_atm", "id=" . $obj['id']);
    }

    protected function selectAll() {
        $db = new db();
        return $db->select("alteracoes_atm");
    }

    protected function insert($obj) {
        $db = new db();
        return $db->insert("alteracoes_atm", $obj);
    }

    protected function update($obj) {
        $db = new db();
        return $db->update("alteracoes_atm", $obj, "id=" . $obj['id']);
    }

    protected function delete($obj) {
        $db = new db();
        return $db->delete("alteracoes_atm", "id=" . $obj['id']);
    }

    protected function selectByExame($obj) {
        $db = new db();
        return $db->select("alteracoes_atm", "id_exame=" . $obj['id_exame']);
    }

}