<?php

include_once ROOT . "model/class.db.php";
include_once ROOT . "controller/Controller.class.php";
include_once ROOT . "model/AlteracoesTecidoOsseo.class.php";

class ControllerAlteracoesTecidoOsseo extends Controller {

    protected function selectOne($obj) {
        $db = new db();
        return $db->select("alteracoes_tecido_osseo", "id=" . $obj['id']);
    }

    protected function selectAll() {
        $db = new db();
        return $db->select("alteracoes_tecido_osseo");
    }

    protected function insert($obj) {
        $db = new db();
        return $db->insert("alteracoes_tecido_osseo", $obj);
    }

    protected function update($obj) {
        $db = new db();
        return $db->update("alteracoes_tecido_osseo", $obj, "id=" . $obj['id']);
    }

    protected function delete($obj) {
        $db = new db();
        return $db->delete("alteracoes_tecido_osseo", "id=" . $obj['id']);
    }

    protected function selectByExame($obj) {
        $db = new db();
        return $db->select("alteracoes_tecido_osseo", "id_exame=" . $obj['id_exame']);
    }

}