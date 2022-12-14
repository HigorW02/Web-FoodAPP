<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" type="text/css" href="./css/forms.css">
    <title>AtlasFood Formulário</title>
</head>

<body>

    <div class="imagens">
        <div><img src="./img/logo_pequena.jpg" alt=""></div>
        <div><img src="./img/logo_pequena.jpg" alt=""></div>
        <div><img src="./img/logo_pequena.jpg" alt=""></div>
        <div><img src="./img/logo_pequena.jpg" alt=""></div>
        <div><img src="./img/logo_pequena.jpg" alt=""></div>
        <div><img src="./img/logo_pequena.jpg" alt=""></div>
        <div><img src="./img/logo_pequena.jpg" alt=""></div>
        <div><img src="./img/logo_pequena.jpg" alt=""></div>
        <div><img src="./img/logo_pequena.jpg" alt=""></div>
    </div>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <!-- FORMULÁRIO DE LOGIN -->
                <form action="../control/validate.php" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Digite seu e-mail" name="email" id="email">
                        <i class="uil uil-envelope-alt icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="senha" placeholder="Digite sua senha" name="senha" id="senha_login">
                        <i class="uil uil-padlock icon"></i>
                        <i class="uil uil-eye-slash showHiddenPass" onclick="show_password()"></i>
                    </div>
                    
                    <!-- ERRO DE ENVIO DE CAMPO VAZIO-->
                    <?php
                        if (isset($_SESSION['campo_vazio'])):
                        ?>
                        <div class="Error-message">
                            <p>Erro: Todos os campos são obrigatórios!</p>
                        </div>
                    <?php
                        endif;
                        unset($_SESSION['campo_vazio']);
                    ?>

                    <!-- ERRO DE USUÁRIO INVÁLIDO -->
                    <?php
                        if (isset($_SESSION['usuario_invalido'])):
                    ?>
                    <div class="Error-message">
                        <p>Erro: Email ou senhas inválidos!</p>
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['usuario_invalido']);
                    ?>

                    <div class="button">
                        <input type="submit" value="Entrar">
                    </div>
                </form>

                <div class="login_cadastro">
                    <span class="text">Não tem conta?
                        <a href="#" class="text cadastro_link" onclick="change_form()">Cadastre-se</a>
                    </span>
                </div>
            </div>

            <div class="form cadastro">
                <span class="title">Cadastro</span>

                <!-- FORMULÁRIO DE CADASTRO -->
                <form action="../control/insert.php" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Digite seu nome" name="nome">
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="email" placeholder="Digite seu e-mail" name="email" >
                        <i class="uil uil-envelope-alt icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="senha" placeholder="Digite sua senha" name="senha" id="senha_cadastro">
                        <i class="uil uil-padlock icon"></i>
                    </div>

                    <div class="input-field">
                        <input type="password" class="senha" placeholder="Confirme sua senha" name="confirma_senha" id="confirma_senha">
                        <i class="uil uil-padlock icon"></i>
                        <i class="uil uil-eye-slash showHiddenPass" onclick="show_password()"></i>
                    </div>

                    <div class="button">
                        <input type="submit" value="Cadastrar">
                    </div>
                </form>

                <div class="login_cadastro">
                    <span class="text">Já tem conta?
                        <a class="text login_link" onclick="change_form()">Entre na sua conta</a>
                    </span>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="./js/forms.js"></script>
</body>

</html>