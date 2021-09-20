    <section>
        <div id="modal-screen" class="modal-screen">
            <?php
                foreach($books as $book){     
            ?>
            <div class="modal-book">
                <h3><?= $book['name'] ?></h3>
                <form method="post" action="#">
                    <div class="books">
                        <div class="author-book">
                            <b><?= $book['author'] ?></b>
                        </div>
                        <div class="description-book">
                            <?= $book['description'] ?>
                        </div>
                    </div>
                </form>
                <div class="btn-options">
                    <button id="cancel" class="btn-info-book" onclick="closeModal()">Cancelar</button>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>