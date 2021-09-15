<section>
        <div id="modal-screen-add-book" class="modal-screen">
            <div class="modal-book">
                <h3>Adicionar Livro</h3>
                <form method="post" action="#">
                    <div class="books">
                        <div class="campos">
                            <label for="title-book">Título do livro</label>
                            <input type="text" name="title-book" id="title-book" title="Título do livro" size="30" />
                        </div>
                        <div class="campos">
                            <label for="author-book">Autor do livro</label>
                            <input type="text" name="author-book" id="author-book" title="Autor do livro" size="30" />
                        </div>
                        <div class="campos">
                            <label for="description-book">Descrição do livro</label>
                            <textarea name="description-book" id="description-book" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </form>
                <div class="btn-options">
                    <button class="btn-concluded" type="submit" >Concluido</button>
                    <button id="cancel" class="btn-info-book" onclick="closeModalAddBook()">Cancelar</button>
                </div>

                </form>
            </div>
        </div>
    </section>