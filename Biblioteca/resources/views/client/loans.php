<!DOCTYPE html>
<html lang="en">
    <?php
        include("../layout/head.php");
    ?>
    <title>Empréstimos</title>
</head>
<body>
    <?php
        include("../layout/nav.php");
    ?>
                <ul class="items">
                    <li><a href="./homePage.php">Home</a></li>
                    <li><a href="./loans.php">Empréstimos</a></li>
                    <li><a href="./historic.php">Histórico</a></li>
                    <li><a href="./dataUser.php">Dados</a></li>
                    <li><a href="../login.php">Sair</a></li>
                </ul>
            </div>
        </nav>
    </section>

    <section>
        <div class="container">
            <div class="section-books">
                <div class="title-type-books">
                    <h1>Livros emprestados</h1>
                </div>
                <div class="type-books">
                    <div class="books">
                        <img class="img-book" src="../../public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo</b>
                        </div>
                        <div class="description-book">
                            Descrição livro 1
                        </div>
                        <div class="btn-options">
                            <a class="btn-loan-book" href="">Devolver</a>
                            <a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>
                        </div>
                    </div>

                    <div class="books">
                        <img class="img-book" src="../../public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo2</b>
                        </div>
                        <div class="description-book">
                            Descrição livro 2
                        </div>
                        <div class="btn-options">
                            <a class="btn-loan-book" href="">Devolver</a>
                            <a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>
                        </div>
                    </div>

                    <div class="books">
                        <img class="img-book" src="../../public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo3</b>
                        </div>
                        <div class="description-book">
                            Descrição livro 3
                        </div>
                        <div class="btn-options">
                            <a class="btn-loan-book" href="">Devolver</a>
                            <a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>
                        </div>
                    </div>

                    <div class="books">
                        <img class="img-book" src="../../public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo4</b>
                        </div>
                        <div class="description-book">
                            Descrição livro 4
                        </div>
                        <div class="btn-options">
                            <a class="btn-loan-book" href="">Devolver</a>
                            <a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <?php
        include("../layout/footer.php");
    ?>

    <?php
        include("../layout/modalAttStatusBookUser.php");
    ?>

    <script src="../../public/js/script.js"></script>

</body>
</html>