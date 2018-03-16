<?php

include_once ROOT . "model/class.db.php";
include_once ROOT . "controller/Controller.class.php";
include_once ROOT . "model/Exame.class.php";

class ControllerExame extends Controller {

    protected function selectOne($obj) {
        $db = new db();
        return $db->select("exame", "id=" . $obj['id']);
    }

    protected function selectLastId() {
        $db = new db();
        return $db->select("exame", "1 = 1", "", "MAX(id) as id");
    }

    protected function selectAll() {
        $db = new db();
        return $db->select("exame");
    }

    protected function insert($obj) {
        $db = new db();
        return $db->insert("exame", $obj);
    }

    protected function update($obj) {
        $db = new db();
        return $db->update("exame", $obj, "id=" . $obj['id']);
    }

    protected function delete($obj) {
        $db = new db();
        return $db->delete("exame", "id=" . $obj['id']);
    }

    protected function selectAllPag($pagina) {
        $db = new db();
        $inicio = ($pagina-1)*10;
        return $db->select("exame", "1 <> 2 LIMIT ".$inicio.",10");
    }

    protected function contarExames() {
        $db = new db();
        return $db->select("exame", "", "", "count(id) as valor");
    }

}