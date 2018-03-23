<?php

include_once ROOT . "model/class.db.php";
include_once ROOT . "controller/Controller.class.php";
include_once ROOT . "model/Paciente.class.php";

class ControllerPaciente extends Controller {

    protected function selectOne($obj) {
        $db = new db();
        return $db->select("paciente", "id=" . $obj['id']);
    }

    protected function selectAll() {
        $db = new db();
        return $db->select("paciente");
    }

    protected function insert($obj) {
        $db = new db();
        return $db->insert("paciente", $obj);
    }

    protected function update($obj) {
        $db = new db();
        return $db->update("paciente", $obj, "id=" . $obj['id']);
    }

    protected function delete($obj) {
        $db = new db();
        return $db->delete("paciente", "id=" . $obj['id']);
    }

}