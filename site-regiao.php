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
$title = isset($_GET['title']) ? $_GET['title'] : (isset($title) ? $title : "HS Color - Serviços de Pintura em Guarulhos | Orçamento Rápido");
$description = isset($_GET['description']) ? $_GET['description'] : (isset($description) ? $description : "Serviços de pintura residencial e comercial em Guarulhos. Orçamento rápido, atendimento especializado e qualidade garantida para sua casa ou empresa.");

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
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
    <?php include 'includes/header.php'; ?>
</head>

<main>
    <!-- Banner Animado de Pintura -->
    <?php include 'includes/banner.php'; ?>

    <section id="conteudo">
    <div class="container">
            <div class="title-section">
                <h2>$title</h2>
            </div>
            <div class="texto-conteudo">
                <p>$conteudo</p>
                <a href="https://wa.me/<?php echo $whatsapp_numero; ?>?text=<?php echo $mensagem_padrao; ?>" class="whatsapp-btn" target="_blank" rel="noopener" aria-label="WhatsApp" title="Link para Whatsapp">Solicite um Orçamento</a>
            </div>
    </section>

    <section id="diferencial-hscolor">
        <div class="container-servicos">
            <div class="diferenciais">
                <div class="icone">
                    <img src="imagens/balde-de-tinta-icon.png" alt="Balde de tinta">
                    <h2>Serviços com Excelência</h2>
                    <p>Cuidamos de cada etapa do seu projeto com atenção e profissionalismo, garantindo resultados duradouros e de alto padrão.</p>
                </div>

                <div class="icone">
                    <img src="imagens/comunicacao-icon.png" alt="Comunicação">
                    <h2>Atendimento</h2>
                    <p>Estamos sempre prontos para ouvir e atender você com agilidade, transparência e respeito ao seu tempo e necessidade.</p>
                </div>

                <div class="icone">
                    <img src="imagens/dinheiro-icon.png" alt="Dinheiro">
                    <h2>Custo-Benefício</h2>
                    <p>Entregamos soluções eficientes com preços justos, evitando retrabalho e garantindo o melhor custo-benefício para o seu investimento.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="servicos" class="servicos">
        <div class="container">
            <div class="title-section">
                <h3>Nossos <b>Serviços</b></h3>
            </div>

            <div class="carousel-wrapper">
                <button class="carousel-btn prev">&#10094;</button>
                <div class="carousel-track">
                    <div class="servicos-card">
                        <img src="imagens/servicos.png" alt="Serviço 1" />
                    </div>
                    <div class="servicos-card">
                        <img src="imagens/servicos.png" alt="Serviço 2" />
                    </div>
                    <div class="servicos-card">
                        <img src="imagens/servicos.png" alt="Serviço 3" />
                    </div>
                    <div class="servicos-card">
                        <img src="imagens/servicos.png" alt="Serviço 4" />
                    </div>
                    <div class="servicos-card">
                        <img src="imagens/servicos.png" alt="Serviço 5" />
                    </div>
                    <div class="servicos-card">
                        <img src="imagens/servicos.png" alt="Serviço 6" />
                    </div>
                    <div class="servicos-card">
                        <img src="imagens/servicos.png" alt="Serviço 7" />
                    </div>
                    <div class="servicos-card">
                        <img src="imagens/servicos.png" alt="Serviço 8" />
                    </div>
                    <div class="servicos-card">
                        <img src="imagens/servicos.png" alt="Serviço 9" />
                    </div>
                </div>
                <button class="carousel-btn next">&#10095;</button>
            </div>
        </div>
    </section>

    <section id="sobre-nos" class="sobre-nos-section">
        <div class="container">
            <div class="title-section">
                <h3>Sobre <b>Nós</b></h3>
            </div>
            <div class="row align-items-center position-relative div-sobre-nos">
                <div class="col-md-8 sobre-nos-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac neque nec enim cursus dictum. Fusce euismod, urna eu tincidunt dictum, nisi elit cursus enim, nec facilisis enim erat eu erat.</p>
                    <a href="https://wa.me/<?php echo $whatsapp_numero; ?>?text=<?php echo $mensagem_padrao; ?>" class="whatsapp-btn" target="_blank" rel="noopener" aria-label="WhatsApp" title="Link para Whatsapp">Solicite um Orçamento</a>
                </div>
                <div class="col-md-4 position-relative sobre-nos-img-wrapper">
                    <img src="imagens/sobre-nos.png" alt="Imagem de um pintor">
                </div>
            </div>
        </div>
    </section>

    <section id="antes-depois">
        <div class="container">
            <div class="title-section">
                <h3>ANTES X <b>DEPOIS</b></h3>
            </div>
            <div class="beer-slider-grid">
                <div id="slider1" class="beer-slider" data-beer-label="DEPOIS" data-start="50">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/dogs-before.jpg" alt="Antes">
                    <div class="beer-reveal" data-beer-label="ANTES">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/dogs-after.jpg" alt="Depois">
                    </div>
                </div>
                <div id="slider2" class="beer-slider" data-beer-label="DEPOIS" data-start="50">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/dogs-before.jpg" alt="Antes">
                    <div class="beer-reveal" data-beer-label="ANTES">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/dogs-after.jpg" alt="Depois">
                    </div>
                </div>
                <div id="slider3" class="beer-slider" data-beer-label="DEPOIS" data-start="50">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/dogs-before.jpg" alt="Antes">
                    <div class="beer-reveal" data-beer-label="ANTES">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74321/dogs-after.jpg" alt="Depois">
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