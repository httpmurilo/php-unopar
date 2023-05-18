<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if (mysqli_query($conn, $sql)) {
    echo "Registro incluido com sucesso!";
} else {
    echo "Erro ao salvar registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
