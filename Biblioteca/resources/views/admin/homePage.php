<!DOCTYPE html>
<html lang="pt-br">

    <?php
        include("./resources/views/layout/head.php");
    ?>
    
    <title>Home Page Admin</title>
</head>
<body>
    
                <?php
                    include("./resources/views/layout/nav.php");
                ?>
                <ul class="items">
                    <li><a href="/admin/home_admin">Home</a></li>
                    <li><a href="/admin/add_book">Adicionar livro</a></li>
                    <li><a href="/admin/register_adminUser">Cadastrar usuário/admin</a></li>
                    <li><a href="/admin/list_user">Listar Usuários</a></li>
                    <li><a href="/">Sair</a></li>
                </ul>
            </div>
        </nav>
    </section>

    <section>
        <div class="container">
            <div class="search">
                <input class="search-nav" name="serach" type="search" placeholder="Pesquisar Livro..." size="40" />
                <button type="submit">&#128269;</button><!-- Botão com ícone de pesquisa -->
            </div>
            <div class="section-books">
                <div class="type-books">
                <?php
                    foreach($books as $book){
                ?>
                    <!-- <h1>Titulo do Livro: <?= $book['name'] ?></h1> -->
                    <!-- <h1>Autor: <?= $book['author'] ?></h1> -->
                    <!-- <h1>Categoria: <?= $book['category'] ?></h1> -->
                    <!-- <h1>Quantidade: <?= $book['quantity'] ?></h1> -->
                    <!-- <h1>Descrição: <?= $book['description'] ?></h1> -->
                    <!-- <h1>Status: <?= $book['status'] ?></h1> -->
                    
                    <div class="books" >
                        <div class="title-type-books">
                            <h1><?= $book['name'] ?></h1>
                        </div>
                        <hr>
                        <img class="img-book" src="/resources/public/img/book.png" />
                        <div class="title-book">
                            <b><?= $book['status'] ?></b>
                        </div>
                        <div class="btn">
                            <form method="post" action="/admin/edit_book">
                                <div class="btn-options">
                                    <input type="hidden" name="id" value="<?= $book['id'] ?>"/>
                                    <button type="submit" class="btn-info-book" id="info-book-modal">Atualizar livro </button>
                                </div>
                            </form>
                            <form method="post" action="/admin/delete_book">
                                <div class="btn-options">
                                    <input type="hidden" name="id" value="<?= $book['id'] ?>"/>
                                    <button type="submit" class="btn-info-book" id="info-book-modal">Excluir livro </button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php
        include("./resources/views/layout/footer.php");
    ?>

    <script src="./resources/public/js/script.js"></script>
</body>
</html>