<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>

    <main class="container-centraliza">
        <div class="container-perfil">
            <div class="itens-perfil">
                <p><?= $_SESSION['nome'] ?></p>
                <p>Email da Pessoa</p>
            </div>
                
            

            <div class="itens-perfil">
                <a href="/biblioteca/views/livro/gerenciar_livros.php" class="link-btn">Gerenciar livros</a>
           
                <a href="/biblioteca/views/categoria/gerenciar_categorias.php" class="link-btn">Gerenciar categorias</a>
            </div>
        </div>
    </main>
<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>