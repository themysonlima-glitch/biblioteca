<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>

    <main class="main-detalhe">
        <div style="display:flex; flex-direction: column;">

        
            <div class="container-perfil">
                <div class="form-item">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" value="Cristiano Ribeiro">
                </div>

                <div class="form-item">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="cristianoribeiro.@gmail.com">
                </div>
            </div>

            <div class="botoes">
                <a href="/biblioteca/views/livro/gerenciar_livros.php" class="link-btn">Gerenciar livros</a>
                <a href="/biblioteca/views/categoria/gerenciar_categorias.php" class="link-btn">Gerenciar categorias</a>
            </div>
        </div>
    </main>
    <?php
require_once __DIR__ . "/../../templates/_rodape.php";
    ?>