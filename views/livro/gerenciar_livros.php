<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>

    <main class="container-centraliza">
        <h1>Gerenciar Livros</h1>
        <a href="/biblioteca/views/livro/gerenciar_livro.php" class="link-btn">+Adicionar Livro</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Ano</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Dom Casmuro</td>
                    <td>Machado de Assis</td>
                    <td>1899</td>
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
require_once __DIR__ . "/../../templates/_rodape.php";
?>