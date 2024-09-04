<?php 
require_once("../MODEL/conexao.php");
@session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$query = $pdo->prepare("SELECT * FROM usuarios WHERE login = :login AND senha = :senha");
$query->bindValue(":login", $login);
$query->bindValue(":senha", $senha);
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = count($res);
if($total_reg > 0){
    $_SESSION['login'] = $res[0]['login'];
    $_SESSION['id'] = $res[0]['id'];

    // REDIRECIONAR O USUÁRIO CONFORME O NÍVEL
    echo "<script language='javascript'> window.location='../VIEW/' </script>";
}else {
    // Lidar com falha de autenticação
    echo "<script language='javascript'> window.location='../index.php' </script>";
}
?>
