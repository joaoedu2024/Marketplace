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
        <h1>Coloque suas informações  </h1>
        
		

	    <br><br>
        <form action="CONTROLLER/cadastrar_endereco.php" method="POST">
            <input type="text" name="cep" placeholder="CEP" />
            <input type="text" name="estado" placeholder="Estado" />
            <input type="text" name="cidade" placeholder="Cidade " />
            <input type="text" name="bairro" placeholder="Bairro" />
            <input type="text" name="rua" placeholder="Rua" />
            <input type="text" name="pais" placeholder="País" />
            <br><br>
            <button class="register-btn" id="registrarText" type="submit">Registrar</button>
        </form>

        <div class="divider">-</div>

        <a href="cadastro.php"><button class="register-btn" id="registrarText" type="submit">Voltar</button></a>

		<div class="terms">
            Ao se registrar, você concorda com nossos Termos de Uso e reconhece que leu nossa Política de Privacidade.
        </div>

    </div>

</body>
</html>
