<?php

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="stylesheet" href="VIEW/CSS/cadastro.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
</head>

<body>
    <div class="register-container">
        <h1>Registre-se</h1>

        <div class="already-have-account">
            Já tem uma conta? <a href="index.php" name="faaLoginText">Faça Login</a>
        </div>

        <br><br>
        <form action="CONTROLLER/cadastrar.php" method="POST">
            <div class="floating-label-container">
                <input type="text" name="login" placeholder=" " />
                <label for="login">Login</label>
            </div>
            <div class="floating-label-container">
                <input type="text" name="nome" placeholder=" " />
                <label for="nome">Nome</label>
            </div>
            <div class="floating-label-container">
                <input type="email" name="email" placeholder=" " />
                <label for="email">Email</label>
            </div>
            <div class="floating-label-container">
                <input type="text" name="contato" placeholder=" " />
                <label for="contato">Contato</label>
            </div>
            <div class="floating-label-container">
                <input type="text" name="cpf_cnpj" placeholder=" " />
                <label for="cpf_cnpj">CPF/CNPJ</label>
            </div>
            <div class="floating-label-container">
                <input type="date" name="data_nasc" placeholder=" " />
                <label for="data_nascimento">Data de Nascimento</label>
            </div>
            <div class="floating-label-container">
                <input type="password" name="senha" placeholder=" " />
                <label for="senha">Senha</label>
            </div>

            <br>
            <button class="register-btn" name="registrarText">Registrar</button>
        </form>
        <div class="divider">ou</div>

        <button class="google-btn"><img src="IMAGENS/google.png" class="google">Continuar com o Google</button>

        <br>

        <div class="terms">
            Ao se registrar, você concorda com nossos Termos de Uso e reconhece que leu nossa Política de Privacidade.
        </div>
    </div>
</body>

</html>