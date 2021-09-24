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
                <form method="POST" action="#">
                    <div class="input-login">
                        <h1>Faça seu login </h1>
                        <div class="campos">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" title="Digite seu E-mail" size="30" required autofocus />
                        </div>

                        <div class="campos">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" title="Digite sua senha" size="30" required />
                        </div>

                        <div class="btn-options">
                            <a class="btn-concluded" href="/admin/home_admin">Entrar Admin</a>
                            <a class="btn-concluded" href="/home_user">Entrar User</a>
                            <!-- <button class="btn-concluded" type="submit" >Entrar</button> -->
                            <a class="btn-register" href="/register">Registre-se</a>
                        </div>
                    </div>
                </form>
            </fieldset>
        </div>
    </section>

</body>

</html>