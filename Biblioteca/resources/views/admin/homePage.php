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
                <div class="title-type-books">
                    <h1>Ficção Científica</h1>
                </div>
                <div class="type-books">
                    <div class="books">
                        <img class="img-book" src="/resources/public/img/book.png" />
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
                        <img class="img-book" src="/resources/public/img/book.png" />
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
                        <img class="img-book" src="/resources/public/img/book.png" />
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
                        <img class="img-book" src="/resources/public/img/book.png" />
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
                        <img class="img-book" src="/resources/public/img/book.png" />
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
                        <img class="img-book" src="/resources/public/img/book.png" />
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
                        <img class="img-book" src="/resources/public/img/book.png" />
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
                        <img class="img-book" src="/resources/public/img/book.png" />
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