<?php
require_once "_cabecalho.php";
?>

    <main class="main-detalhe">
        <form action="" method="post" enctype="multipart/form-data">

             <div class="form-item">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="">
            </div>

            <div class="form-item">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>

<a href="gerenciar_livros.php" class="link-btn">Gerenciar livros</a>
<a href="gerenciar_categorias.php" class="link-btn">Gerenciar categorias</a>

        </form>
    </main>
<?php
require_once "_rodape.php";
?>