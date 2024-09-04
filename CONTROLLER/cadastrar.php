<?php
require_once("../MODEL/conexao.php");
session_start();

// Obtém os dados do POST
$login = $_POST["login"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$contato = $_POST["contato"];
$cpf_cnpj = $_POST["cpf_cnpj"];
$data_nasc = $_POST["data_nasc"];
$senha = $_POST["senha"];

// Prepara a consulta SQL para a tabela 'perfil'
$sql = "INSERT INTO perfil (nome, email, contato, cpf_cnpj, data_nasc, senha) VALUES (:nome, :email, :contato, :cpf_cnpj, :data_nasc, :senha)";

// Prepara a consulta SQL para a tabela 'usuarios'
$sql2 = "INSERT INTO usuarios (login, nome, senha) VALUES (:login, :nome, :senha)";

// Prepara as declarações
$ins = $pdo->prepare($sql);
$ins2 = $pdo->prepare($sql2);

// Verifica se a preparação foi bem-sucedida
if ($ins === false || $ins2 === false) {
    die('Prepare failed: ' . htmlspecialchars($pdo->errorInfo()[2]));
}

// Liga os parâmetros para o primeiro insert na tabela 'perfil'
$ins->bindParam(':nome', $nome);
$ins->bindParam(':email', $email);
$ins->bindParam(':contato', $contato);
$ins->bindParam(':cpf_cnpj', $cpf_cnpj);
$ins->bindParam(':data_nasc', $data_nasc);
$ins->bindParam(':senha', $senha);

// Liga os parâmetros para o segundo insert na tabela 'usuarios'
$ins2->bindParam(':login', $login);
$ins2->bindParam(':nome', $nome);
$ins2->bindParam(':senha', $senha);

$res = $ins->execute();
$_SESSION['id_last_perfil'] = $pdo->lastInsertId();
$res2 = $ins2->execute();

// Executa as declarações
if ( $res && $res2 ) {
    echo "<script language='javascript'> window.location='../cadastro1.php' </script>";
} else {
    echo "Erro: " . implode(", ", $ins->errorInfo()) . " " . implode(", ", $ins2->errorInfo());
}
?>
