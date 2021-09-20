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
                    <li><a href="loans">Empréstimos</a></li>
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
                <div class="title-type-books">
                    <h1>Ficção Científica</h1>
                </div>
                <div class="type-books">
                    <?php
                        
                        foreach($books as $book){

                    ?>
                    <div class="books" >
                        <img class="img-book" src="/resources/public/img/book.png" />
                        <div class="title-book">
                            <b>
                                <?php echo $book ?>
                            </b>
                        </div>
                        <div class="author-book">
                        <?php echo $book['author'] ?>
                        </div>
                        <div class="btn-options">
                            <a class="btn-loan-book" href="">Emprestar</a>
                            <a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>
                        </div>
                    </div>
                    <?php } ?>

                    <!-- <div class="books">
                        <img class="img-book" src="/resources/public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo2</b>
                        </div>
                        <div class="author-book">
                            Descrição livro 2
                        </div>
                        <div class="btn-options">
                            <a class="btn-loan-book" href="">Emprestar</a>
                            <a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>
                        </div>
                    </div>

                    <div class="books">
                        <img class="img-book" src="/resources/public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo3</b>
                        </div>
                        <div class="author-book">
                            Descrição livro 3
                        </div>
                        <div class="btn-options">
                            <a class="btn-loan-book" href="">Emprestar</a>
                            <a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>
                        </div>
                    </div>

                    <div class="books">
                        <img class="img-book" src="/resources/public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo4</b>
                        </div>
                        <div class="author-book">
                            Descrição livro 4
                        </div>
                        <div class="btn-options">
                            <a class="btn-loan-book" href="">Emprestar</a>
                            <a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>
                        </div>
                    </div> -->
                </div>


                <!-- <div class="title-type-books">
                    <h1>Ação</h1>
                </div>
                <div class="type-books">
                    <div class="books">
                        <img class="img-book" src="/resources/public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo</b>
                        </div>
                        <div class="author-book">
                            Descrição livro 1
                        </div>
                        <div class="btn-options">
                            <a class="btn-loan-book" href="">Emprestar</a>
                            <a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>
                        </div>
                    </div>

                    <div class="books">
                        <img class="img-book" src="/resources/public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo2</b>
                        </div>
                        <div class="author-book">
                            Descrição livro 2
                        </div>
                        <div class="btn-options">
                            <a class="btn-loan-book" href="">Emprestar</a>
                            <a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>
                        </div>
                    </div>

                    <div class="books">
                        <img class="img-book" src="/resources/public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo3</b>
                        </div>
                        <div class="author-book">
                            Descrição livro 3
                        </div>
                        <div class="btn-options">
                            <a class="btn-loan-book" href="">Emprestar</a>
                            <a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>
                        </div>
                    </div>

                    <div class="books">
                        <img class="img-book" src="/resources/public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo4</b>
                        </div>
                        <div class="author-book">
                            Descrição livro 4
                        </div>
                        <div class="btn-options">
                            <a class="btn-loan-book" href="">Emprestar</a>
                            <a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>
                        </div>
                    </div>
                </div>
 -->

<!--                 <div class="title-type-books">
                        <h1>Romance</h1>
                </div>
                <div class="type-books">
                    <div class="books">
                        <img class="img-book" src="/resources/public/img/book.png" />
                        <div class="title-book">
                            <b>Titulo</b>
                        </div>
                        <div class="author-book">
                            Descrição livro 1
                        </div>
                        <div class="btn-register">
                            <a class="btn-loan-book" href="">Emprestar</a>
                            <a class="btn-info-book" href="">Informações</a>
                        </div>
                    </div>

                        <div class="books">
                            <img class="img-book" src="/resources/public/img/book.png" />
                            <div class="title-book">
                                <b>Titulo2</b>
                            </div>
                            <div class="author-book">
                                Descrição livro 2
                            </div>
                            <div class="btn-register">
                                <a class="btn-loan-book" href="">Emprestar</a>
                                <a class="btn-info-book" href="">Informações</a>
                            </div>
                        </div>

                        <div class="books">
                            <img class="img-book" src="/resources/public/img/book.png" />
                            <div class="title-book">
                                <b>Titulo3</b>
                            </div>
                            <div class="author-book">
                                Descrição livro 3
                            </div>
                            <div class="btn-register">
                                <a class="btn-loan-book" href="">Emprestar</a>
                                <a class="btn-info-book" href="">Informações</a>
                            </div>
                        </div>

                        <div class="books">
                            <img class="img-book" src="/resources/public/img/book.png" />
                            <div class="title-book">
                                <b>Titulo4</b>
                            </div>
                            <div class="author-book">
                                Descrição livro 4
                            </div>
                            <div class="btn-register">
                                <a class="btn-loan-book" href="">Emprestar</a>
                                <a class="btn-info-book" href="">Informações</a>
                            </div>
                        </div>
                    </div>

                <div class="title-type-books">
                        <h1>Aventura</h1>
                    </div>
                    <div class="type-books">
                        <div class="books">
                            <img class="img-book" src="/resources/public/img/book.png" />
                            <div class="title-book">
                                <b>Titulo</b>
                            </div>
                            <div class="author-book">
                                Descrição livro 1
                            </div>
                            <div class="btn-register">
                                <a class="btn-loan-book" href="">Emprestar</a>
                                <a class="btn-info-book" href="">Informações</a>
                            </div>
                        </div>

                        <div class="books">
                            <img class="img-book" src="/resources/public/img/book.png" />
                            <div class="title-book">
                                <b>Titulo2</b>
                            </div>
                            <div class="author-book">
                                Descrição livro 2
                            </div>
                            <div class="btn-register">
                                <a class="btn-loan-book" href="">Emprestar</a>
                                <a class="btn-info-book" href="">Informações</a>
                            </div>
                        </div>

                        <div class="books">
                            <img class="img-book" src="/resources/public/img/book.png" />
                            <div class="title-book">
                                <b>Titulo3</b>
                            </div>
                            <div class="author-book">
                                Descrição livro 3
                            </div>
                            <div class="btn-register">
                                <a class="btn-loan-book" href="">Emprestar</a>
                                <a class="btn-info-book" href="">Informações</a>
                            </div>
                        </div>
                        <div class="books">
                            <img class="img-book" src="/resources/public/img/book.png" />
                            <div class="title-book">
                                <b>Titulo4</b>
                            </div>
                            <div class="author-book">
                                Descrição livro 4
                            </div>
                            <div class="btn-register">
                                <a class="btn-loan-book" href="">Emprestar</a>
                                <a class="btn-info-book" href="">Informações</a>
                            </div>
                        </div>
                    </div>
                </div> -->
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