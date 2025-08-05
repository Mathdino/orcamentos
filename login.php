<?php
include 'configuracao-geral.php';
// Configurações SEO
$palavras_chave = PALAVRAS_CHAVE;
$regioes = REGIOES;

$whatsapp_numero = WHATSAPP_NUMERO;
$instagram_url = INSTAGRAM_URL;
$facebook_url = FACEBOOK_URL;
$email_contato = EMAIL_CONTATO;
$youtube_url = YOUTUBE_URL;
$linkedin_url = LINKEDIN_URL;

// SEO específico da index
$title = "Orcamentos | Sistema de Orçamento";
$description = "Orçamentos fáceis e rápidos: controle completo dos seus projetos e custos em um sistema simples e eficiente.";

$mensagem_enviada = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['regiao'], $_POST['mensagem'])) {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);
    $regiao = trim($_POST['regiao']);
    $mensagem = trim($_POST['mensagem']);

    $assunto = "Novo orçamento de $nome";
    $corpo = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\nRegião: $regiao\nMensagem: $mensagem";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    mail($email_contato, $assunto, $corpo, $headers);
    $mensagem_enviada = true;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/header.php'; ?>
</head>

<main>

</main>

<?php include 'includes/footer.php'; ?>



</body>

</html>