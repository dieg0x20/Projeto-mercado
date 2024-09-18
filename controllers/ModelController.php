<?php
require_once '../database/config.php';
require_once '../models/Modulos.php';

class ModelController {
    private $ModelModulos;

    public function __construct($pdo) {
        $this->ModelModulos = new Modulo($pdo);
    }

    public function modelIndex() {
        $id_secao = isset($_GET['id']) ? (int) $_GET['id'] : null; 
        $models = $this->ModelModulos->getModulos($id_secao);
        require '../views/modulo.php'; 
    }
}
?>
