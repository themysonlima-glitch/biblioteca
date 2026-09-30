<?php

require_once __DIR__ . "/../models/livro.php";
session_start();

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$ano_pub = $_POST['ano'];
$autor = $_POST['autor'];
$resumo = $_POST['resumo'];
$id_categoria = $_POST['categoria'];

$livro = new Livro();

if(!empty($_FILES['capa']['name'])) {
    $capa = $_FILES['capa'];
    $extensao = strtolower(pathinfo($capa['name'], PATHINFO_EXTENSION));
    $nomedacapa = uniqid() . '.' . $extensao;
    $caminho = __DIR__ . "/../imagens/capas/uploads/" . $nomedacapa;
    move_uploaded_file($capa['tmp_name'], $caminho);

    $livro->atualizar($titulo, $ano_pub, $autor, $resumo, $nomedacapa, $id_categoria, $id);
} else {
    $livro->atualizarSemCapa($titulo, $ano_pub, $autor, $resumo, $id_categoria, $id);
}


$_SESSION['aviso'] = "Livro editado com sucesso!";
header('Location: /biblioteca/views/livro/gerenciar_livros.php');
exit();
