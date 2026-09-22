<?php
require_once __DIR__ . "/../configs/conexao.php";
class Categoria {
    private $id_categoria;
    private $nome;

    public static function listar() {
        try {
            $conexao = Conexao::conectar();
            $sql = "SELECT * FROM categoria";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public function inserir($nome) {
        try {
            // criar conexao
            $conexao = Conexao::conectar();
            // criar o sql
            $sql = "INSERT INTO categoria (nome) VALUES (:nome)";
            // preparar o sql
            $stmt = $conexao->prepare($sql);
            // substituir os dados depois de preparado
            $stmt->bindValue(':nome', $nome);
            // executar
            $stmt->execute();
    } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}