<?php

class Restricted {

    public function __construct() {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function verify($permission) {
        if (!isset($_SESSION['restricted']) || !in_array($_SESSION['restricted'], $permission) || !isset($_SESSION['HTTP_USER_AGENT']) || $_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT'])) {
            unset($_SESSION['restricted']);
            header('location:login.php');
        } else {
            session_regenerate_id();
        }
    }

}

?>