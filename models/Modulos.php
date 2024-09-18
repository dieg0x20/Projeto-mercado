<?php
class Modulo{
    private $pdo;

    public function __construct($pdo){   
        $this->pdo = $pdo;
    }
    public function getModulos($id_secao = null) {
        if ($id_secao) {
            $stmt = $this->pdo->prepare("SELECT m.Nome_modulo, s.Nome_secao FROM modulos m INNER JOIN secao s ON m.Secao_id = s.Id_secao WHERE s.Id_secao = :id");
            $stmt->execute(['id' => $id_secao]);
        } else {
            $stmt = $this->pdo->query("SELECT m.Nome_modulo, s.Nome_secao FROM modulos m INNER JOIN secao s ON m.Secao_id = s.Id_secao;");
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
?>