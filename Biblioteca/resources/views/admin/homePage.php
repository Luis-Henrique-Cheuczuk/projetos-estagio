<!DOCTYPE html>
<html lang="pt-br">

    <?php
        include("../layout/head.php");
    ?>
    
    <title>Home Page Admin</title>
</head>
<body>
    
                <?php
                    include("../layout/nav.php");
                ?>
                <ul class="items">
                    <li><a href="./homePage.php">Home</a></li>
                    <li><a onclick="openModalAddBook()">Adicionar livro</a></li>
                    <li><a href="./register.php">Cadastrar usuário/admin</a></li>
                    <li><a href="../login.php">Sair</a></li>
                </ul>
            </div>
        </nav>
    </section>

    <section>
        <div class="container">
            <div class="section-books">
                <div class="title-type-books">
                    <h1>Ficção Científica</h1>
                </div>
                <div class="type-books">
                    <div class="books">
                        <img class="img-book" src="../../public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo</b>
                        </div>
                        <div class="description-book">
                            Nome do usuário que locou o livro
                        </div>
                        <div class="btn-options">
                            <a class="btn-info-book" id="info-book-modal" onclick="openModalInfoBook()">Atualizar informações</a>
                        </div>
                    </div>

                    <div class="books">
                        <img class="img-book" src="../../public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo2</b>
                        </div>
                        <div class="description-book">
                            Nome do usuário que locou o livro
                        </div>
                        <div class="btn-options">
                            <a class="btn-info-book" id="info-book-modal" onclick="openModalInfoBook()">Atualizar informações</a>
                        </div>
                    </div>

                    <div class="books">
                        <img class="img-book" src="../../public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo3</b>
                        </div>
                        <div class="description-book">
                            Nome do usuário que locou o livro
                        </div>
                        <div class="btn-options">
                            <a class="btn-info-book" id="info-book-modal" onclick="openModalInfoBook()">Atualizar informações</a>
                        </div>
                    </div>

                    <div class="books">
                        <img class="img-book" src="../../public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo4</b>
                        </div>
                        <div class="description-book">
                            Nome do usuário que locou o livro
                        </div>
                        <div class="btn-options">
                            <a class="btn-info-book" id="info-book-modal" onclick="openModalInfoBook()">Atualizar informações</a>
                        </div>
                    </div>
                </div>


                <div class="title-type-books">
                    <h1>Ação</h1>
                </div>
                <div class="type-books">
                    <div class="books">
                        <img class="img-book" src="../../public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo</b>
                        </div>
                        <div class="description-book">
                            Nome do usuário que locou o livro
                        </div>
                        <div class="btn-options">
                            <a class="btn-info-book" id="info-book-modal" onclick="openModalInfoBook()">Atualizar informações</a>
                        </div>
                    </div>

                    <div class="books">
                        <img class="img-book" src="../../public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo2</b>
                        </div>
                        <div class="description-book">
                            Nome do usuário que locou o livro
                        </div>
                        <div class="btn-options">
                            <a class="btn-info-book" id="info-book-modal" onclick="openModalInfoBook()">Atualizar informações</a>
                        </div>
                    </div>

                    <div class="books">
                        <img class="img-book" src="../../public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo3</b>
                        </div>
                        <div class="description-book">
                            Nome do usuário que locou o livro
                        </div>
                        <div class="btn-options">
                            <a class="btn-info-book" id="info-book-modal" onclick="openModalInfoBook()">Atualizar informações</a>
                        </div>
                    </div>

                    <div class="books">
                        <img class="img-book" src="../../public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo4</b>
                        </div>
                        <div class="description-book">
                            Nome do usuário que locou o livro
                        </div>
                        <div class="btn-options">
                            <a class="btn-info-book" id="info-book-modal" onclick="openModalInfoBook()">Atualizar informações</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include("../layout/footer.php");
    ?>

    <?php
        include("../layout/modalAttStatusBook.php");
    ?>

    <?php
        include("../layout/modalAddBook.php");
    ?>

    <script src="../../public/js/script.js"></script>
</body>
</html>