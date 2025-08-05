<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="<?php echo gerar_keywords($palavras_chave, $regioes); ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo isset($title) ? $title : 'HS Color - Serviços de Pintura'; ?>">
  <meta property="og:description" content="<?php echo isset($description) ? $description : 'HS Color: Serviços de pintura residencial e comercial em Guarulhos. Orçamento rápido e atendimento especializado nas principais regiões.'; ?>">
  <meta property="og:image" content="imagens/logo.png">
  <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
  <meta property="og:locale" content="pt_BR">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo isset($title) ? $title : 'HS Color - Serviços de Pintura'; ?>">
  <meta name="twitter:description" content="<?php echo isset($description) ? $description : 'HS Color: Serviços de pintura residencial e comercial em Guarulhos. Orçamento rápido e atendimento especializado nas principais regiões.'; ?>">
  <meta name="twitter:image" content="imagens/logo.png">
  <link rel="canonical" href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
  <link rel="apple-touch-icon" href="imagens/favicon.png">
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "HS Color",
      "image": "imagens/logo.png",
      "@id": "",
      "url": "<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']; ?>",
      "telephone": "<?php echo WHATSAPP_NUMERO; ?>",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Guarulhos",
        "addressRegion": "SP",
        "addressCountry": "BR"
      },
      "sameAs": [
        "<?php echo FACEBOOK_URL; ?>",
        "<?php echo INSTAGRAM_URL; ?>",
        "<?php echo YOUTUBE_URL; ?>",
        "<?php echo LINKEDIN_URL; ?>"
      ]
    }
  </script>
  <title><?php echo isset($title) ? $title : 'Orcamentos - Software de orçamentos para sua empresa'; ?></title>
  <meta name="description" content="<?php echo isset($description) ? $description : 'Orcamentos: software prático e eficiente para criar, gerenciar e enviar orçamentos profissionais na sua empresa.'; ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/beerslider/dist/BeerSlider.min.css">
  <link rel="icon" type="image/png" href="imagens/favicon-orcamentos.png">
  <script defer src="js/script.js"></script>
  <!-- jQuery e Bootstrap JS para as tabs -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
  <!-- Google Analytics -->
  <?php if (defined('GOOGLE_ANALYTICS_ID') && GOOGLE_ANALYTICS_ID): ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GOOGLE_ANALYTICS_ID; ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', '<?php echo GOOGLE_ANALYTICS_ID; ?>');
    </script>
  <?php endif; ?>
</head>

<body>
  <header>
    <div class="header-content container">
      <div class="logo-area">
        <a href="/">
        <img src="imagens/logo.png" alt="Logo Orcamentos" class="logo-img">
        </a>
      </div>
      <button class="hamburger" id="hamburger-menu" aria-label="Abrir menu" aria-expanded="false" aria-controls="main-nav">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav id="main-nav">
        <ul>
          <li><a href="#funcionalidades">Funcionalidades</a></li>
          <li><a href="#servico">Serviços</a></li>
          <li><a href="#contato">Contato</a></li>
          <li><a href="https://wa.me/5511910064302?text=Olá%2C+gostaria+de+conversar+sobre+o+sistema+Orcamentos!" class="btn-header" target="_blank" rel="noopener">Solicite um Orçamento</a></li>
          <li><a href="login.php" class="btn-login">Entrar</a></li>
        </ul>
      </nav>
    </div>
  </header>