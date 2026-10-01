<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
require_once __DIR__ . "/../../models/categoria.php";
require_once __DIR__ . "/../../models/livro.php";

$resultado = Categoria::listar();

$id = $_GET ['id_livro'];
$livro = new Livro();
$livro->carregar($id);

?>

    <main class="main-detalhe">
        <form action="/biblioteca/controllers/livro_edt_controller.php" method="post" enctype="multipart/form-data">

            <div class="form-item">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" value="<?= $livro->getTitulo() ?>" required>
            </div>

            <div class="form-item">
                <label for="ano">Ano de publicaçao</label>
                <input type="text" name="ano" id="ano" max="2026" value="<?= $livro->getAnoPub() ?>" required>
            </div>

            <div class="form-item">
                <label for="autor">Autor do livro</label>
                <input type="text" name="autor" id="autor" value="<?= $livro->getAutor() ?>" required>
            </div>

            <div class="form-item">
                <label for="resumo">Resumo</label>
                <textarea name="resumo" id="resumo"><?= $livro->getResumo() ?></textarea>
            </div>

            <div class="form-item">
                <label for="autor">Categoria</label>
                <select name="categoria" id="categoria">
                    <?php foreach($resultado as $categoria): ?>
                    <option value="<?= $categoria['id_categoria'] ?>" <?= $categoria['id_categoria'] == $livro->getCategoria() ? "selected" : "" ?>><?= $categoria['nome'] ?></option>
                    <?php endforeach; ?>
                    
                </select>
            </div>

            <div class="form-item">
                <label for="capa">Capa</label>
                <input type="file" name="capa" id="capa">
            </div>

            <input type="hidden" name="id" id="id" value="<?= $livro->getId() ?>" required>


            <button type="submit">Atualizar</button>


        </form>
    </main>

   <?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>