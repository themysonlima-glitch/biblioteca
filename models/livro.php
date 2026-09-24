<?php
require_once __DIR__ . "/../configs/conexao.php";


class Livro {
    private $id_livro;
    private $titulo;
    private $ano_pub;
    private $autor;
    private $resumo;
    private $capa;
    private $categoria;


    public static function listar() {
        try {
            $conexao = Conexao::conectar();
            $sql = "SELECT * FROM livro";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Erro ao listar livros: ' . $e->getMessage();
            
        }
    }

    public static function buscarPorId($id){
        try {
            $conexao = Conexao::conectar();
            $sql = "SELECT livro.*, categoria.nome FROM livro JOIN categoria ON livro. id_categoria = categoria.id_categoria WHERE id_livro = :id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'Erro ao buscar o livro: ' . $e->getMessage();
        }
    }

    public function inserir($titulo, $ano_pub, $autor, $resumo, $capa, $id_categoria) {
        try {
            // criar conexao
            $conexao = Conexao::conectar();
            // criar o sql
            $sql = "INSERT INTO livro (titulo, ano_pub, autor, resumo, capa, id_categoria) VALUES (:titulo, :ano_pub, :autor, :resumo, :capa, :id_categoria)";
            // preparar o sql
            $stmt = $conexao->prepare($sql);
            // substituir os dados depois de preparado
            $stmt->bindValue(':titulo', $titulo);
            $stmt->bindValue(':ano_pub', $ano_pub);
            $stmt->bindValue(':autor', $autor);
            $stmt->bindValue(':resumo', $resumo);
            $stmt->bindValue(':capa', $capa);
            $stmt->bindValue(':id_categoria', $id_categoria);
            // executar
            $stmt->execute();
    } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function deletar($id) {
        try {
            $conexao = Conexao::conectar();
            $sql = "DELETE FROM livro WHERE id_livro = :id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
        } catch (PDOException $e) { // executa caso aconteça um erro
            // mostra o erro encontrado
            echo $e->getMessage();
        }
    }

    public function carregar($id){
        try {
            $conexao = Conexao::conectar();
            $sql = "SELECT * FROM categoria WHERE id_livro = :id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            $resultado = $stmt->fetch();

            if($resultado) {
                $this->titulo = $resultado['titulo'];
                $this->ano_pub = $resultado ['ano_pub'];
                $this->autor = $resultado ['autor'];
                $this->resumo = $resultado ['resumo'];
                $this->capa = $resultado ['capa'];
                $this->id_categoria = $resultado['id_categoria'];
            }
        } catch (PDOException $e) { // executa caso aconteça um erro
            // mostra o erro encontrado
            echo $e->getMessage();
        }
    }

    public function atualizar($titulo, $ano_pub, $autor, $resumo, $capa, $id_categoria) {
        try {
            $conexao = Conexao::conectar();
            $sql = "UPDATE livro SET nome = :nome WHERE livro = :id";
            $stmt = $conexao->prepare($sql);
           $stmt->bindValue(':titulo', $titulo);
            $stmt->bindValue(':ano_pub', $ano_pub);
            $stmt->bindValue(':autor', $autor);
            $stmt->bindValue(':resumo', $resumo);
            $stmt->bindValue(':capa', $capa);
            $stmt->bindValue(':id_categoria', $id_categoria);
            $stmt->execute();
        } catch (PDOException $e) { // executa caso aconteça um erro
            // mostra o erro encontrado
            echo $e->getMessage();
        }
    }
}