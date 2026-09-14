<?php
require_once __DIR__ . "/../../templates/_cabecalho.php"
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
                 <tr>
                    <td>Categoria1</td>
                    <td>Romance</td>
                    <td class="acoes">
                        <button class="btn-editar">Editar</button>
                        <button class="btn-deletar">Deletar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

<?php
require_once __DIR__ . "/../../templates/_rodape.php"
?>