<!DOCTYPE html>
<html lang="pt-br">

    <?php
        include("./resources/views//layout/head.php");
    ?>
    
    <title>Home Page</title>
</head>
<body>
    
                <?php
                    include("./resources/views/layout/nav.php");
                ?>
                <ul class="items">
                    <li><a href="/home_user">Home</a></li>
                    <li><a href="/loans">Empréstimos</a></li>
                    <li><a href="/historic">Histórico</a></li>
                    <li><a href="/data_user">Dados</a></li>
                    <li><a href="/resources/views/login.php">Sair</a></li>
                </ul>
            </div>
        </nav>
    </section>

    <section>
        <div class="container">
            <div class="search">
                <input class="search-nav" type="search" placeholder="Pesquisar Livro..." size="40" />
                <button type="submit">&#128269;</button><!-- Botão com ícone de pesquisa -->
            </div>
            <div class="section-books">
                <div class="type-books">
                <?php
                    foreach($booksClient as $book){
//                        foreach ($loans as $loan){
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
                        <hr>
                        <img class="img-book" src="/resources/public/img/book.png" />
                        <div class="title-book">
                            <b><?= $book['name'] ?></b>
                        </div>
                        <div class="author-book">
                            <b><?= $book['author'] ?></b>
                        </div>
                        <div class="description-book">
                            <p><?= $book['description'] ?></p>
                        </div>
                        <div class="btn-options">
                            <a class="btn-loan-book" href="">Emprestar</a>
                        <!-- <a class="btn-info-book" id="info-book-modal" onclick="openModalInfoBook()">Atualizar informações</a> -->
                        </div> 
                    </div>
                    <?php
                        }?>
            </div>
        </div>
    </section>

    <?php
        include("./resources/views/layout/footer.php");
    ?>
        
    <?php
        include("./resources/views/layout/modalInfoBook.php");
    ?>

    <script src="./resources/public/js/script.js"></script>
</body>
</html>