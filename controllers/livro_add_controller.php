<?php
require_once __DIR__ . "/../models/livro.php";

// receber os dados do front
$titulo = $_POST['titulo'];
$ano_pub = $_POST['ano'];
$autor = $_POST['autor'];
$resumo = $_POST['resumo'];
$id_categoria = $_POST['categoria'];

if(!empty($_FILES['foto']['name'])) {
    $foto = $_FILES['foto'];
    $extensao = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
    $nomedafoto = uniqid() . '.' . $extensao;
    $caminho = __DIR__ . "/../imagens/capas/uploads/" . $nomedafoto;
    move_uploaded_file($foto['tmp_name'], $caminho);
} else {
    $foto = null;
}

// criar um obj do tipo usuario para o inserir
$livro = New Livro();
$livro->inserir($titulo, $ano_pub, $autor, $resumo, $foto, $id_categoria);

// redirecionar
header('Location: /biblioteca/views/livro/gerenciar_livros.php');
exit();