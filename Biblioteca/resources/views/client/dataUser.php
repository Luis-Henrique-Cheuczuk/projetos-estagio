<!DOCTYPE html>
<html lang="pt-br">

    <?php
        include("./resources/views/layout/head.php");
    ?> 
    
    <title>Atualizar Dados</title>
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
            <fieldset>
                <form method="POST" action="/controller/client/DataUserController.php">
                    <div class="input-login">
                        <h1>Seus dados</h1>
                        <?php
                            foreach($data_clients as $client){
                                if ($user = (new User())->find($client['id'])) {
                        ?>
                        <div class="campos">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" title="Digite seu e-mail" size="30" value="<?= $user['email'] ?>" />
<!--                            <p>--><?//= $user['email'] ?><!--</p>-->
                        </div>

                        <div class="campos">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" title="Digite sua senha" size="30" value="<?= $user['password'] ?>" />
                        </div>

                        <div class="campos">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" title="Digite seu nome" size="30" value="<?= $user['name'] ?>" />
                        </div>

                        <div class="campos">
                            <label for="phone">Telefone</label>
                            <input type="tel" name="phone" id="phone" title="Digite seu telefone" size="30" minlength="11" maxlength="15" value="<?= $user['phone'] ?>" />
                        </div>

                        <div class="btn-options">
                            <button class="btn-concluded" type="submit" >Concluido</button>
                        </div>
                        <?php }
                         } ?>
                    </div>
                </form>
            </fieldset>
        </div>
    </section>

    <?php
        include("./resources/views/layout/footer.php");
    ?>
    
</body>
</html>