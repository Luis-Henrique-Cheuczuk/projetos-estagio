<!DOCTYPE html>
<html lang="pt-br">

<?php
include("./resources/views/layout/head.php");
?>

<title>Cadastro</title>
</head>

<body>

<?php
include("./resources/views/layout/nav.php");
?>
<ul class="items">
    <li><a href="/home_admin">Home</a></li>
    <li><a href="/add_book">Adicionar livro</a></li>
    <li><a href="/register_adminUser">Cadastrar usuário/admin</a></li>
    <li><a href="./resources/views/login.php">Sair</a></li>
</ul>
</div>
</nav>
</section>

<section>
    <div class="container">
            <div id="modal-screen-add-book" class="modal-screen">
                <div class="modal-book">
                    <h3>Adicionar Livro</h3>
                    <form method="post" action="#">
                        <div class="books">
                            <div class="campos">
                                <label for="title-book">Título do livro</label>
                                <input type="text" name="title-book" id="title-book" title="Título do livro" size="30" />
                            </div>
                            <div class="campos">
                                <label for="author-book">Autor do livro</label>
                                <input type="text" name="author-book" id="author-book" title="Autor do livro" size="30" />
                            </div>
                            <div class="campos">
                                <label for="description-book">Descrição do livro</label>
                                <textarea name="description-book" id="description-book" cols="50" rows="10"></textarea>
                            </div>
                        </div>
                    </form>
                    <div class="btn-options">
                        <button class="btn-concluded" type="submit" >Concluido</button>
                        <button id="cancel" class="btn-info-book" onclick="closeModalAddBook()">Cancelar</button>
                    </div>

                    </form>
                </div>
            </div>
    </div>
</section>

<?php
include("./resources/views/layout/footer.php");
?>

<script src="./resources/public/js/script.js"></script>

</body>
</html>