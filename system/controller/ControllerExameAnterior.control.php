<?php

include_once ROOT . "model/class.db.php";
include_once ROOT . "controller/Controller.class.php";
include_once ROOT . "model/ExameAnterior.class.php";

class ControllerExameAnterior extends Controller {

    protected function selectOne($obj) {
        $db = new db();
        return $db->select("exame_anterior", "id=" . $obj['id']);
    }

    protected function selectAll() {
        $db = new db();
        return $db->select("exame_anterior");
    }

    protected function insert($obj) {
        $db = new db();
        return $db->insert("exame_anterior", $obj);
    }

    protected function update($obj) {
        $db = new db();
        return $db->update("exame_anterior", $obj, "id=" . $obj['id']);
    }

    protected function delete($obj) {
        $db = new db();
        return $db->delete("exame_anterior", "id=" . $obj['id']);
    }

    protected function selectByExame($obj) {
        $db = new db();
        return $db->select("exame_anterior", "id_exame=" . $obj['id_exame']);
    }

}