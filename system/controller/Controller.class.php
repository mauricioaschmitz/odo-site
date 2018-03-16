<?php

abstract class Controller {

    abstract protected function selectOne($obj);

    abstract protected function selectAll();

    abstract protected function insert($obj);

    abstract protected function update($obj);

    abstract protected function delete($obj);

    public function actionControl($action, $obj = false) {

        if (method_exists($this, $action)) {
            return $this->{$action}($obj);
        } else {
            echo 'Método não existe';
        }

    }

}