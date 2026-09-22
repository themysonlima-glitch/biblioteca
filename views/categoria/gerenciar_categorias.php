<?php
require_once __DIR__ . "/../../templates/_cabecalho.php"

require_once __DIR__ . "/../../models/categoria.php";

$resultado = Categoria::listar();


?>

    <main class="container-centraliza">
        <a href="/biblioteca/views/categoria/cadastrar_categoria.php" class="link-btn">+ Adicionar Categoria</a>
        <table>
            <tr>
                <th>Nome da Categoria</th>
                <th colspan="2">opções</th>
            </tr>

            
            <?php foreach($resultado as $categoria): ?>
                <tr>
                    <td><?=Categoria['nome'] ?></td>
                    <td><a href="">Editar</a></td>
                    <td><a href="">Deletar</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>

<?php
require_once __DIR__ . "/../../templates/_rodape.php"
?>