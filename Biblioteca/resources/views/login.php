<!DOCTYPE html>
<html lang="pt-br">

    <?php
        include("layout/head.php");
    ?>

    <title>Login</title>
</head>

<body>

                <?php
                    include("layout/nav.php");
                ?>
            </div>
        </nav>
    </section>

    <section>
        <div class="container">
            <fieldset>
                <form method="POST" action="/login">
                    <div class="input-login">
                        <h1>Faça seu login </h1>
                        <div class="campos">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" title="Digite seu E-mail" size="30" autofocus />
                        </div>

                        <div class="campos">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" title="Digite sua senha" size="30" />
                        </div>
<!--                        <div class="campos">-->
<!--                            <label>Tipo da conta</label>-->
<!--                            <div class="type-user">-->
<!--                                <input type="radio" name="type_user" id="typeUser" value = 0 required />-->
<!--                                <label> Usuário normal</label>-->
<!--                            </div>-->
<!--                            <div class="type-user">-->
<!--                                <input type="radio" name="type_user" id="typeAdmin" value = 1 required />-->
<!--                                <label> Usuário Admin</label>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="btn-options">
                            <!--                                <input type="hidden" name="id" value="--><?//= $user['id'] ?><!--/>-->
                            <button type="submit" class="btn-info-book" > Entrar </button>
                        </div>
                    </div>
                </form>
                <form method="post" action="/register">
                    <div class="btn-options">
                        <!--                                <input type="hidden" name="id" value="--><?//= $user['id'] ?><!--/>-->
                        <button type="submit" class="btn-info-book" > Registre-se</button>
                    </div>
                </form>
            </fieldset>
        </div>
    </section>

</body>

</html>