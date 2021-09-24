<!DOCTYPE html>
<html lang="pt-br">

    <?php
        include("./resources/views/layout/head.php");
    ?> 
    
    <title>Cadastro</title>
</head>

<body>

                <?php
                    include("./resources/views/layout/nav.php");
                ?>
            </div>
        </nav>
    </section>

    <section>
        <div class="container">
            <fieldset>
                <form method="POST" action="/store_register">
                    <div class="input-login">
                        <h1>Faça seu cadastro </h1>
                        <div class="campos">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" title="Digite seu e-mail" size="30" required autofocus />
                        </div>

                        <div class="campos">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" title="Digite sua senha" size="30" required />
                        </div>

                        <div class="campos">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" title="Digite seu nome" size="30" required />
                        </div>

                        <div class="campos">
                            <label for="phone">Telefone</label>
                            <input type="tel" name="phone" id="phone" title="Digite seu telefone" size="30" minlength="11" maxlength="15" required />
                        </div>

                        <div class="btn-options">
                            <button class="btn-concluded" type="submit" >Concluido</button>
                            <a id="cancel" class="btn-info-book" href="/">Cancelar</a>
                        </div>
                    </div>
                </form>
            </fieldset>
        </div>
    </section>
</body>
</html>