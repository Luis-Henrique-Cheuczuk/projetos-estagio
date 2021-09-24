<?php
    require_once ('./models/Book.php');
    require_once ('./models/User.php');
?>

<!DOCTYPE html>
<html lang="en">
    <?php
        include("./resources/views/layout/head.php");
    ?>
    <title>Empréstimos</title>
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
                    <li><a href="/">Sair</a></li>
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
                    <?php
                        foreach($users as $user){
                            if ($loan = (new Loan())->find($user['id'])) {
                        ?>
                    <div class="books">
                        <div class="title-type-books">
                            <?php if ($book = (new Book())->find($loan['book_id'])) { ?>
                                <b><?= $book['name'] ?></b>
                        </div>
                        <hr>
                        <img class="img-book" src="./resources/public/img/book.png" />
                        <div class="author-book">
                            <?= $book['id'] ?>
                        </div>
                        <?php } ?>
                        <div class="date-book">
                            <label for="date_start"><b>Data da locação: </b><?= $loan['date_start'] ?> </label>
                        </div>
                        <div class="date-book">
                            <label for="date_end"><b>Data da entrega: </b><?= $loan['date_end'] ?></label>
                        </div>
<!--                        <div class="btn-options">-->
<!--                            <a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>-->
<!--                        </div>-->
                    </div>
                    <?php }
                        }?>
                </div>
            </div>
    </section>

    <?php
        include("./resources/views/layout/footer.php");
    ?>

    <script src="./resources/public/js/script.js"></script>

</body>
</html>