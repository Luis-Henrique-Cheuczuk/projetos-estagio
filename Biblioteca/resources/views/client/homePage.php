<!DOCTYPE html>
<html lang="pt-br">

    <?php
        include("./resources/views/layout/head.php");
    ?>
    
    <title>Home Page</title>
</head>
<body>
    
                <?php
                    include("./resources/views/layout/nav.php");
                ?>
                <ul class="items">
                    <li><a href="/client/home_user">Home</a></li>
                    <li><a href="/client/loans">Empréstimos</a></li>
                    <li><a href="/client/historic">Histórico</a></li>
                    <li><a href="/client/data_user">Dados</a></li>
                    <li><a href="/">Sair</a></li>
                </ul>
            </div>
        </nav>
    </section>
s
    <section>
        <div class="container">
            <div class="search">
                <p><b>Usuário logado: </b> <?= $_SESSION['name'] ?></p>
            </div>
            <div class="section-books">
                <div class="type-books">
                <?php
                    foreach($booksClient as $book){
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
                        <hr>
                        <div class="btn-options">
                            <?php
                                if(($book['status'] == 'pending') || ($book['status'] == 'unavailable')){

                                echo "Status: ".$book['status'];
                            }else{
                                    ?>

                                    <form method="post" action="/client/store">
                                        <input type="hidden" name="id" value="<?= $book['id'] ?>" />
                                        <button class="btn-concluded" type="submit" >Emprestar</button>
                                    </form>

                            <?php } ?>
                        <!-- <a class="btn-info-book" id="info-book-modal" onclick="openModalInfoBook()">Atualizar informações</a> -->
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
        include("./resources/views/layout/modalInfoBook.php");
    ?>

    <script src="./resources/public/js/script.js"></script>
</body>
</html>