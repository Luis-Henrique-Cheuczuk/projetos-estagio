<!DOCTYPE html>
<html lang="pt-br">

    <?php
        include("../layout/head.php");
    ?> 
    
    <title>Atualizar Dados</title>
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
            <fieldset>
                <form method="POST" action="#">
                    <div class="input-login">
                        <h1>Seus dados</h1>
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
                            <input type="tel" name="phone" id="phone" title="Digite seu telefone" size="30" minlength="11" maxlength="11" required />
                        </div>

                        <div class="btn-options">
                            <button class="btn-concluded" type="submit" >Concluido</button>
                        </div>
                    </div>
                </form>
            </fieldset>
        </div>
    </section>

    <?php
        include("../layout/footer.php");
    ?>
    
</body>
</html>