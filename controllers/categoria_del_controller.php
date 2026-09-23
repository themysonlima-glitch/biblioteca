<?php
require_once __DIR__ . "/../models/categoria.php";
session_start();

$id = $_GET['id'];

$categoria = new Categoria();
$categoria->deletar($id);

$_SESSION['aviso'] = "Categoria deletada com sucesso!";
header('Location: /biblioteca/views/categoria/gerenciar_categorias.php');
exit();
