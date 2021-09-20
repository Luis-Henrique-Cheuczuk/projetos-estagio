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
                    <li><a href="/home_admin">Home</a></li>
                    <li><a onclick="openModalAddBook()">Adicionar livro</a></li>
                    <li><a href="/register_adminUser">Cadastrar usuário/admin</a></li>
                    <li><a href="./resources/views/login.php">Sair</a></li>
                </ul>
            </div>
        </nav>
    </section>

    <section>
        <div class="container">
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
                        <h1><?= $book['category'] ?></h1>
                    </div>
                        <img class="img-book" src="/resources/public/img/book.png" />
                        <div class="title-book">
                            <p><?= $book['name'] ?></p>
                        </div>
                        <div class="author-book">
                            <p><?= $book['author'] ?></p>
                        </div>
                        <div class="btn-options">
                        <a class="btn-info-book" id="info-book-modal" onclick="openModalInfoBook()">Atualizar informações</a>
                        </div>
                    </div>
                    <?php } ?>
            </div>
        </div>
    </section>

    <?php
        include("./resources/views/layout/footer.php");
    ?>

    <?php
        include("./resources/views/layout/modalAttStatusBookAdmin.php");
    ?>

    <?php
        include("./resources/views/layout/modalAddBook.php");
    ?>

    <script src="./resources/public/js/script.js"></script>
</body>
</html>