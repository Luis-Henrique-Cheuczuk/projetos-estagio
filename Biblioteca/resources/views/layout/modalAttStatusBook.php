<section>
        <div id="modal-screen-info-book" class="modal-screen">
            <div class="modal-book">
                <h3>Título do Livro</h3>
                <form method="post" action="#">
                    <div class="books">
                    <div class="campos">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" title="Nome" size="30" disabled />
                        </div>
                        <div class="campos">
                            <label>Devolver? </label>
                            <div class="devolution">
                                <input type="radio" name="devolution" id="yes" required />
                                <label> Sim </label>
                                <input type="radio" name="devolution" id="no" required />
                                <label> Não </label>
                            </div>
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
                    <button class="btn-concluded" type="submit" >Concluido</button>
                    <button id="cancel" class="btn-info-book" onclick="closeModalInfoBook()">Cancelar</button>
                </div>

                </form>
            </div>
        </div>
    </section>