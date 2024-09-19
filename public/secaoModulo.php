<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../database/config.php';
require_once '../controllers/ModelController.php';

$modelController = new ModelController($pdo);

// Verifica se um ID foi passado na URL
if (isset($_GET['id'])) {
    $modelController->modelIndex();
} else {
    echo "<p style='text-align:center;'>Selecione uma área no mapa para visualizar informações.</p>";
}
?>
