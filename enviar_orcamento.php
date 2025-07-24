<?php
include 'index.php'; // para acessar $email_contato

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $telefone = isset($_POST['telefone']) ? trim($_POST['telefone']) : '';
    $regiao = isset($_POST['regiao']) ? trim($_POST['regiao']) : '';
    $mensagem = isset($_POST['mensagem']) ? trim($_POST['mensagem']) : '';

    $assunto = "Novo orçamento de $nome";
    $corpo = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\nRegião: $regiao\nMensagem: $mensagem";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    mail($email_contato, $assunto, $corpo, $headers);
}

header("Location: obrigado.html");
exit; 