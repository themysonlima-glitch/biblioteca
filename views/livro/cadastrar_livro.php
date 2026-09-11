<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>

    <main class="main-detalhe">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-item">
                <label for="titulo">Titulo</label>
                <input type="text" name="Titulo" id="titulo" prequired>
            </div>

            <div class="form-item">
                <label for="ano">Ano de publicaçao</label>
                <input type="text" name="ano" id="ano" prequired>
            </div>

            <div class="form-item">
                <label for="autor">Autor do livro</label>
                <input type="text" name="autor" id="autor" prequired>
            </div>

            <div class="form-item">
                <label for="resumo">Resumo</label>
                <textarea name="resumo" id="resumo"></textarea>
            </div>

            <div class="form-item">
                <label for="autor">Categoria</label>
                <select name="categoria" id="categoria">
                    <option value="cat1">Categoria1</option>
                    <option value="cat2">Categoria2</option>
                </select>
            </div>

            <button type="submit">Cadastrar</button>


        </form>
    </main>

   <?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>