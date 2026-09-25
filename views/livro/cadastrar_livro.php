<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
require_once __DIR__ . "/../../models/categoria.php";

$resultado = Categoria::listar();
?>

    <main class="main-detalhe">
        <form action="/biblioteca/controllers/livro_add_controller.php" method="post" enctype="multipart/form-data">

            <div class="form-item">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" required>
            </div>

            <div class="form-item">
                <label for="ano">Ano de publicaçao</label>
                <input type="text" name="ano" id="ano" required>
            </div>

            <div class="form-item">
                <label for="autor">Autor do livro</label>
                <input type="text" name="autor" id="autor" required>
            </div>

            <div class="form-item">
                <label for="resumo">Resumo</label>
                <textarea name="resumo" id="resumo"></textarea>
            </div>

            <div class="form-item">
                <label for="autor">Categoria</label>
                <select name="categoria" id="categoria">
                    <?php foreach($resultado as $categoria): ?>
                    <option value="<?= $categoria['id_categoria'] ?>"><?= $categoria['nome'] ?></option>
                    <?php endforeach; ?>
                    
                </select>
            </div>

            <div class="form-item">
                <label for="foto">Foto de Perfil</label>
                <input type="file" name="foto" id="foto" required>
            </div>


            <button type="submit">Cadastrar</button>


        </form>
    </main>

   <?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>