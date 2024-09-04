<?php 
@session_start();
require_once("../MODEL/conexao.php");

// MENUS PARA O PAINEL
$menu1 = 'home';
$menu2 = 'CriarOfertas';
$menu3 = 'funcionarios';
$menu4 = 'cargos';
$menu5 = 'mesas';
$menu6 = 'fornecedores';
$menu7 = 'categorias';

$id = $_SESSION['id'];
$query = $pdo->query("SELECT * FROM usuarios WHERE id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if ($total_reg > 0) {
	$login = $res[0]['login'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">   
	<title>Painel - Ampera</title>
	<link rel="stylesheet" type="text/css" href="CSS/index.css">
</head>
<body>

	<nav>
		<div class="logo">
			<img src="../IMAGENS/logo.png" alt="Ampera Logo">
		</div>
		<div class="user">
		<div class="menu">
			<a href="home">Ofertas</a>
			<a href="sobre">Sobre</a>
			<a href="solicitacoes">Solicitações</a>
			<a href="planos">Planos</a>
			<span><?php echo $login; ?></span>
		</div>
		<img src="../IMAGENS/user.png" alt="User Avatar">
	</nav>

	<div class="container-fluid mt-4 mx-4 px-4">
     	<?php 
     		if(@$_GET['pag'] == $menu1){
     			require_once($menu1.'');

     		}else if(@$_GET['pag'] == $menu2){
     			require_once($menu2.'');
     		
     		}
     		else{
     			# require_once($menu1.'');
     		}
     	 ?>
	</div>

<!-- FOOTER -->	
	<footer>
        <div class="social-icons">
            <a href="#"><img src="../IMAGENS/instagram.png" alt="Instagram"></a>
            <a href="#"><img src="../IMAGENS/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="../IMAGENS/twitter.png" alt="Twitter"></a>
            <a href="#"><img src="../IMAGENS/whatsapp.png" alt="WhatsApp"></a>
        </div>
        <div class="copyright">
            <p>© 2024 Ampera</p>
        </div>
    </footer>

</body>
</html>
