<?php

include_once("../../config.php");
include_once(ROOT . "controller/ControllerUsuario.control.php");
include_once(ROOT . "include/crypt/Crypt.class.php");

$crypt = new Crypt();

$cu = new ControllerUsuario();
$u = new Usuario();

if (isset($_POST["button"])) {
    if ($_POST['action'] == "insert") {
        $u->setEmail($_POST['email']);
        $u->setSenha(crypt::hash($_POST['senha1']));
        $u->setnome($_POST['nome']);
        $u = $u->objectToArray();
        $cu->actionControl('validateInsert', $u);
    }
    else if ($_POST['action'] == "login") {
        $u->setEmail($_POST['email']);
        $u->setSenha($_POST['senha']);
        $u = $u->objectToArray();
        $cu->actionControl('validaLogin', $u);
    }
    else if ($_POST['action'] == "update") {
        $u->setId_usuario($_POST['id_usuario']);
        $u->setEmail($_POST['email']);
        $u->setnome($_POST['nome']);
        if($_POST['senha1'] != ""){
            $u->setSenha(crypt::hash($_POST['senha1']));
        }else{
            $u->setSenha($_POST['senhaAnt']);
        }
        $u = $u->objectToArray();
        $cu->actionControl('update', $u);
        header('location:../../listausuarios.php');
    }
} else if($_GET['action'] == "delete"){
    $u->setid_usuario($_GET['id']);
    $user = $u->objectToArray();
    $cu->actionControl('delete',$user);
    header('location:../../listausuarios.php');
} else if($_GET['action'] == "logout"){
    session_start();
    unset($_SESSION['restricted']);
    header("location:../../login.php");
}