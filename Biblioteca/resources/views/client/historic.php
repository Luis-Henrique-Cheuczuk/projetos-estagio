<?php
require_once('./models/Book.php');
require_once('./models/User.php');
?>

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
    <li><a href="/client/home_user">Home</a></li>
    <li><a href="/client/loans">Empréstimos</a></li>
    <li><a href="/client/historic">Histórico</a></li>
    <li><a href="/client/data_user">Dados</a></li>
    <li><a href="/">Sair</a></li>
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
                foreach ($historics as $historic) {
                    if ($historic['user_id'] == $_SESSION['id']) {
                        if ($historic['date_end'] < date("Y-m-d H:i:s", time() + 3600 * (date("I")))) {
                            if ($book = (new Book())->find($historic['book_id'])) {
                                ?>
                                <div class="books">
                                <div class="title-type-books">
                                    <b><?= $book['name'] ?></b>
                                </div>
                                <hr>
                                <img class="img-book" src="/resources/public/img/book.png"/>
                                <div class="author-book">
                                    <?= $book['author'] ?>
                                </div>
                            <?php } ?>
                            <div class="date-book">
                                <label for="date_start"><b>Data da locação: </b><?= $historic['date_start'] ?> </label>
                            </div>
                            <div class="date-book">
                                <label for="date_end"><b>Data da entrega: </b><?= $historic['date_end'] ?></label>
                            </div>
                            <!--                        <div class="btn-options">-->
                            <!--                            <a class="btn-info-book" id="contact-modal" onclick="openModal()">Informações</a>-->
                            <!--                        </div>-->
                            </div>
                        <?php }
                    }
                } ?>
            </div>
        </div>
</section>

<?php
include("./resources/views/layout/footer.php");
?>

<script src="./resources/public/js/script.js"></script>

</body>
</html>