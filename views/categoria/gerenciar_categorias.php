<?php
require_once __DIR__ . "/../../templates/_cabecalho.php"

require_once __DIR__ . "/../../models/categoria.php";

$resultado = Categoria::listar();


?>

    <main class="container-centraliza">
        <h1>Gerenciar Categorias</h1>
        <a href="/biblioteca/views/categoria/cadastrar_categoria.php" class="link-btn">+ Adicionar Categoria</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                 </tr>
            </thead>

            <tbody>
                <?php foreach($resultado as $categoria): ?>
                 <tr>
                    <td><?=Categoria 1['nome'] ?></td>
                    <td>Romance</td>
                    <td class="acoes">
                        <button class="btn-editar">Editar</button>
                        <button class="btn-deletar">Deletar</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

<?php
require_once __DIR__ . "/../../templates/_rodape.php"
?>