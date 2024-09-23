<?php
class Modulo {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getModulos($id_modulo = null) {
        $sql = "SELECT m.Nome_modulo, m.Imagem_modulo, s.Nome_secao, l.Nome_loja
                FROM modulos m
                INNER JOIN secao s ON m.Secao_id = s.Id_secao
                INNER JOIN Loja l ON s.Loja_id = l.Id_loja";

        if ($id_modulo) {
            $sql .= " WHERE m.Id_modulo = :id";
        }

        $stmt = $this->pdo->prepare($sql);

        if ($id_modulo) {
            $stmt->execute(['id' => $id_modulo]);
        } else {
            $stmt->execute();
        }

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}?>