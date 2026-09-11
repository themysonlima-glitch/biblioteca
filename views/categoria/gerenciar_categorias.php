<?php
require_once __DIR__ . "/../../templates/_cabecalho.php"
?>

    <main class="main-detalhe">
        <h1>Gerenciar Categorias</h1>
        <a href="/biblioteca/views/categoria/cadastrar_categoria.php" class="link-btn">+ Adicionar Livro</a>
        <table>
            <tr>
                <th>Nome da Categoria</th>
                <th>Opcões</th>
            </tr>
            <tr>
                <td>Categoria1</td>
                <td>Editar</td>
                <td>Deletar</td>
            </tr>
        </table>

    </main>

<?php
require_once __DIR__ . "/../../templates/_rodape.php"
?>