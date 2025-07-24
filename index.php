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

    <section id="home">
        <div class="container">
            <span>Startup de Desenvolvimento de Sistemas de Orçamentos</span>
            <h1>Simplifique seu negócio com um <br><b>sistema de orçamentos inteligente</b></h1>
            <div class="cta-buttons">
                <a href="https://wa.me/5511910064302?text=Olá%2C+gostaria+de+conversar+sobre+o+sistema+Orcamentos!" target="_blank" rel="noopener" title="Link para Whatsapp">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Vamos Conversar
                </a>
                <a href="">Cases de Sucesso →</a>
            </div>
        </div>

    </section>

    <section id="video">
        <div class="container flex">
            <div class="video-section"></div>
            <div class="conteudo-video">
                <h2>Gerencie seus orçamentos de forma <b>simples</b> e <b>eficiente</b></h2>
                <div class="scroll-direita1">
                    <span>Nossos sistemas contam com as funcionalidades:</span>
                    <div class="funcionalidades">
                        <div class="cards-funcionalidades">
                            <img src="./imagens/icon-pdf.png" alt="Icone de PDF" width="80" height="80">
                            <h3>PDFs PERSONALIZADOS</h3>
                        </div>
                        <div class="cards-funcionalidades">
                            <img src="./imagens/icon-ferramenta.png" alt="Icone de Ferramenta" width="80" height="80">
                            <h3>GESTÃO DE OBRAS</h3>
                        </div>
                        <div class="cards-funcionalidades">
                            <img src="./imagens/icon-dinheiro.png" alt="Icone de Dinheiro" width="80" height="80">
                            <h3>SISTEMA FINANCEIRO</h3>
                        </div>
                        <div class="cards-funcionalidades">
                            <img src="./imagens/icon-cliente.png" alt="Icone de Cliente" width="80" height="80">
                            <h3>CADASTRO DE CLIENTES</h3>
                        </div>

                    </div>
                </div>
                <div class="scroll-direita2">
                    <span><strong>ORCAME</strong><b>NTOS</b> em números</span>
                    <div class="funcionalidades">
                        <div class="linha1">
                            <div class="card-1">
                                <h4><strong>100%</strong><br>Satisfação do cliente</h4>
                            </div>
                            <div class="card-2">
                                <h4><strong>25+</strong><br>Sistemas Concluídos</h4>
                            </div>
                        </div>
                    </div>
                    <div class="funcionalidades part2">
                        <div class="linha1">
                            <div class="card-3">
                                <h4><strong>125K</strong><br>Investimentos captados <br>por nossos clientes</h4>
                            </div>
                            <div class="card-4">
                                <h4><strong>10+</strong><br>Sites Concluídos</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="orcamento" class="orcamento">
        <div class="container">
            <div class="title-section text-center">
                <h3>Solicite seu Orçamento</h3>
            </div>
            <?php if ($mensagem_enviada): ?>
                <div class="mensagem-enviada">
                    <p>Sua mensagem foi enviada com sucesso! Em breve entraremos em contato.</p>
                </div>
            <?php endif; ?>
            <?php if (!$mensagem_enviada): ?>
                <form id="form-orcamento" method="post" action="index.php">
                    <input type="text" name="nome" placeholder="Seu nome" required>
                    <input type="email" name="email" placeholder="Seu e-mail" required>
                    <input type="tel" name="telefone" placeholder="Seu telefone" required>
                    <input type="text" name="regiao" placeholder="Região (ex: Cocaia)" required>
                    <textarea name="mensagem" placeholder="Descreva seu serviço" required></textarea>
                    <button type="submit">Enviar Orçamento</button>
                </form>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>

<a href="https://wa.me/<?php echo $whatsapp_numero; ?>" class="whatsapp-float" target="_blank" rel="noopener" aria-label="WhatsApp" title="Link para Whatsapp">
    <img src="imagens/whatsapp-icon.png" alt="WhatsApp">
</a>
</body>

</html>