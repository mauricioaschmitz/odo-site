<?php

include_once ROOT . "model/class.db.php";
include_once ROOT . "controller/Controller.class.php";
include_once ROOT . "model/Usuario.class.php";
include_once ROOT . "include/crypt/Crypt.class.php";

class ControllerUsuario extends Controller {

    protected function selectOne($obj) {
        $db = new db();
        return $db->select("usuario", "id_usuario=" . $obj['id_usuario']);
    }

    protected function selectAll() {
        $db = new db();
        return $db->select("usuario");
    }

    protected function insert($obj) {
        $db = new db();
        return $db->insert("usuario", $obj);
    }

    protected function update($obj) {
        $db = new db();
        return $db->update("usuario", $obj, "id_usuario=" . $obj['id_usuario']);
    }

    protected function delete($obj) {
        $db = new db();
        return $db->delete("usuario", "id_usuario=" . $obj['id_usuario']);
    }

    protected function selecionaEmail($obj) {
        $db = new db();
        return $db->select("usuario", "email = '" . $obj['email'] . "'");
    }
    
    protected function validaLogin($u) {
        session_start();
        $senha = $u['senha'];
        $res = "";
        $res = $this->selecionaEmail($u);
        print_r($u);
        if (isset($res[0]["id_usuario"])) {
            $result = crypt::check($senha, $res[0]["senha"]);
            if ($result == 1) {
                $_SESSION['restricted'] = "admin";
                $_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
                $_SESSION['id_usuario'] = $res[0]['id_usuario'];
                header("location:../../inserir.php");
            } else if ($result != 1) {
                header("location:../../login.php?senha=erro");
            }
        } else {
            header("location:../../login.php?email=erro");
        }
    }

    protected function validateInsert($usuario) {
        session_start();
        $valEmail = $this->selecionaEmail($usuario);
        
        if (empty($valEmail)) {
            $this->insert($usuario);
            header("location:../../listaUsuarios.php");
        } else {
            header("location:../../inserirusuario.php?erro=yes");
        }
    }

    protected function selectAllPag($pagina) {
        $db = new db();
        $inicio = ($pagina-1)*10;
        return $db->select("usuario", "1 <> 2 LIMIT ".$inicio.",10");
    }

    protected function contarUsuarios() {
        $db = new db();
        return $db->select("usuario", "", "", "count(id_usuario) as valor");
    }

}