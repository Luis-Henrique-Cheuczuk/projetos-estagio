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

    <section>
        <div id="modal-screen" class="modal-screen">
            <div class="modal-book">
                <h3>Título do Livro</h3>
                <form method="post" action="#">
                    <div class="books">
                        <div class="author-book">
                            <b>Autor livro</b>
                        </div>
                        <div class="description-book">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        <div class="date-book">
                            <label for="date_start">Data da locação: </label>
                            <input type="date" id="date_start" />
                        </div>
                        <div class="date-book">
                            <label for="date_end">Data da entrega: </label>
                            <input type="date" id="date_end" />
                        </div>
                    </div>
                </form>
                <div class="btn-options">
                <button class="btn-info-book" type="submit" onclick="closeModal()">Renovar</button> <!-- Função Cancel provisório, como não envia dados, só para fechar a tela modal -->
                    <button id="cancel" class="btn-info-book" onclick="closeModal()">Cancelar</button>
                </div>
            </div>
        </div>
    </section>

    <script src="../../public/js/script.js"></script>

</body>
</html>