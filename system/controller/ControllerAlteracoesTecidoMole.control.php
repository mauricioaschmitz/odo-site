<?php

include_once ROOT . "model/class.db.php";
include_once ROOT . "controller/Controller.class.php";
include_once ROOT . "model/AlteracoesTecidoMole.class.php";

class ControllerAlteracoesTecidoMole extends Controller {

    protected function selectOne($obj) {
        $db = new db();
        return $db->select("alteracoes_tecido_mole", "id=" . $obj['id']);
    }

    protected function selectAll() {
        $db = new db();
        return $db->select("alteracoes_tecido_mole");
    }

    protected function insert($obj) {
        $db = new db();
        return $db->insert("alteracoes_tecido_mole", $obj);
    }

    protected function update($obj) {
        $db = new db();
        return $db->update("alteracoes_tecido_mole", $obj, "id=" . $obj['id']);
    }

    protected function delete($obj) {
        $db = new db();
        return $db->delete("alteracoes_tecido_mole", "id=" . $obj['id']);
    }

    protected function selectByExame($obj) {
        $db = new db();
        return $db->select("alteracoes_tecido_mole", "id_exame=" . $obj['id_exame']);
    }

}