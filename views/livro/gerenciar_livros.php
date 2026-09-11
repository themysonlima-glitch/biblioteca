<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>

    <main class="container-centraliza">
        <a href="/biblioteca/views/categoria/cadastrar_livro.php" class="link-btn">Adicionar Livro</a>
             <table>
            <tr>
                <th>Título</th>
                <th>Ano</th>
                <th>Categoria</th>
                <thcolspan="2">Opcões</th>
            </tr>
            <tr>
                <td>Livro1</td>
                <td>2026</td>
                <td>Categoria 1</td>
                <td>Editar</td>
            </tr>
        </table>


            
            <button type="submit">Cadastrar</button>


        </form>
    </main>

 <?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>