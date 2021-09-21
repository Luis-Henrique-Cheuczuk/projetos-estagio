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
                    <li><a href="/add_book">Adicionar livro</a></li>
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
                            <h1><?= $book['name'] ?></h1>
                        </div>
                        <hr>
                        <img class="img-book" src="/resources/public/img/book.png" />
                        <div class="title-book">
<!--                            <b>--><?//= $book['name'] ?><!--</b>-->
                            <b>Nome de quem emprestou</b>
                        </div>
                        <div class="campos">
                            <label>Devolver? </label>
                            <div class="devolution" id="devolution">
                                <input type="radio" name="devolution" id="yes" required />
                                <label> Sim </label>
                                <input type="radio" name="devolution" id="no" required />
                                <label> Não </label>
                            </div>
                        </div>
                        <div class="date-book">
                            <label for="date_start">Data da locação: </label>
                            <input type="date" id="date_start" disabled/>
                        </div>
                        <div class="date-book">
                            <label for="date_end">Data da entrega: </label>
                            <input type="date" id="date_end" disabled/>
                        </div>
                        <div class="btn-options">
                            <a class="btn-info-book" id="info-book-modal" href="">Atualizar informações</a>
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