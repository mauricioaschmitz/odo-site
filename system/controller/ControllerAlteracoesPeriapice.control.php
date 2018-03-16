<?php

include_once ROOT . "model/class.db.php";
include_once ROOT . "controller/Controller.class.php";
include_once ROOT . "model/AlteracoesPeriapice.class.php";

class ControllerAlteracoesPeriapice extends Controller {

    protected function selectOne($obj) {
        $db = new db();
        return $db->select("alteracoes_periapice", "id=" . $obj['id']);
    }

    protected function selectAll() {
        $db = new db();
        return $db->select("alteracoes_periapice");
    }

    protected function insert($obj) {
        $db = new db();
        return $db->insert("alteracoes_periapice", $obj);
    }

    protected function update($obj) {
        $db = new db();
        return $db->update("alteracoes_periapice", $obj, "id=" . $obj['id']);
    }

    protected function delete($obj) {
        $db = new db();
        return $db->delete("alteracoes_periapice", "id=" . $obj['id']);
    }

    protected function selectByExame($obj) {
        $db = new db();
        return $db->select("alteracoes_periapice", "id_exame=" . $obj['id_exame']);
    }

}