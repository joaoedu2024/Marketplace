<?php
require_once("../MODEL/conexao.php");
session_start();
// Obtém os dados do POST
$cep = $_POST["cep"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$rua = $_POST["rua"];
$pais = $_POST["pais"];

// Prepara a consulta SQL para a tabela 'perfil'
$sql = "INSERT INTO endereco (cep, estado, cidade, bairro, rua, pais) VALUES (:cep, :estado, :cidade, :bairro, :rua, :pais);";

// Prepara as declarações
$ins = $pdo->prepare($sql);
// Verifica se a preparação foi bem-sucedida
if ($ins === false ) {
    die('Prepare failed: ' . htmlspecialchars($pdo->errorInfo()[2]));
}

// Liga os parâmetros para o primeiro insert na tabela 'perfil'
$ins->bindParam(':cep', $cep);
$ins->bindParam(':estado', $estado);
$ins->bindParam(':cidade', $cidade);
$ins->bindParam(':bairro', $bairro);
$ins->bindParam(':rua', $rua);
$ins->bindParam(':pais', $pais);

// Executa as declarações
if ($ins->execute()) {
    echo "<script language='javascript'> window.location='../' </script>";
    $ultimoId = $pdo->lastInsertId();
    $up = "UPDATE perfil SET id_endereco = $ultimoId WHERE id = {$_SESSION['id_last_perfil']}; ";
    $pdo->exec($up);
} else {
    echo "Erro: " . implode(", ", $ins->errorInfo());
}
?>
