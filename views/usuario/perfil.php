<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>

    <main class="main-detalhe">
            <div class="container-perfil">
                <div class="form-item">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="" value="Cristiano Ribeiro" readonly>
                </div>

                <div class="form-item">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="cristianor.@gmail.com">
                </div>
            </div>

            <div class="botoes">
                <a href="biblioteca/views/categoria/gerenciar_livros.php" class="link-btn">Gerenciar livros</a>
                <a href="biblioteca/views/categoria/gerenciar_categorias.php" class="link-btn">Gerenciar categorias</a>
            </div>
    
    </main>
    <?php
require_once __DIR__ . "/../../templates/_rodape.php";
    ?>