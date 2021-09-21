<!DOCTYPE html>
<html lang="en">
    <?php
        include("./resources/views/layout/head.php");
    ?>
    <title>Histórico</title>
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
            <div class="section-books">
                <div class="title-type-books">
                    <h1>Histórico de livros emprestados</h1>
                </div>
                <div class="type-books">
                    <?php
                        foreach($hist as $historic){
                        ?>
                        <div class="books">
                            <img class="img-book" src="./resources/public/img/book.png" />
                            <div class="date-book">
                                <label for="date_start">Data da locação: <?= $historic['date_start'] ?> </label>
                            </div>
                            <div class="date-book">
                                <label for="date_end">Data da entrega: <?= $historic['date_end'] ?></label>
                            </div>
                            <!--<div class="description-book">-->
                            <!--Descrição livro 1-->
                            <!--</div>-->
                            <!--<div class="btn-options">-->
                            <!--<a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>-->
                            <!--</div>-->
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