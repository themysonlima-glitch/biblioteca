<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
require_once __DIR__ . "/../../models/livro.php";

$resultado = Livro::listar();
?>

<main class="container-centraliza">
    <a href="/biblioteca/views/livro/cadastrar_livro.php" class="link-btn">+Adicionar Livro</a>
    <table>
        <tr>
            <th>Título</th>
            <th>Ano</th>
            <th>Categoria</th>
            <th colspan="2">Opções</th>
        </tr>
        <?php foreach($resultado as $livro): ?>
        <tr>
            
            <td><?= $livro['titulo'] ?></td>

            <td><?= $livro['ano_pub'] ?></td>

            <td><?= $livro['nome'] ?></td>

            <td><a href="/biblioteca/views/livro/editar_livro.php?id_livro=<?=$livro['id_livro']?>">Editar</a></td>

            <td><a href="/biblioteca/controllers/deletar_livro_controller.php?id_livro=<?=$livro['id_livro']?>">Editar</a>Deletar</td>
        </tr>
        <?php endforeach; ?>
    </table>

</main>

 <?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>