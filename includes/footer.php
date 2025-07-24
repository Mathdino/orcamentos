<script src="https://cdn.jsdelivr.net/npm/beerslider/dist/BeerSlider.min.js"></script>
<script>
  window.addEventListener('DOMContentLoaded', function() {
    new BeerSlider(document.getElementById('slider1'));
    new BeerSlider(document.getElementById('slider2'));
    new BeerSlider(document.getElementById('slider3'));
  });
</script>
    <footer id="contato">
        <div class="container">
            <nav aria-label="Links internos">
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#sobre-nos">Sobre Nós</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#orcamento">Orçamento</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
            <div class="social-links">
                <ul class="wrapper">
                    <li class="icon facebook">
                        <a href="https://www.facebook.com/hscolor" target="_blank" rel="noopener noreferrer">
                            <span class="tooltip">Facebook</span>
                            <span><i class="fab fa-facebook-f"></i></span>
                        </a>
                    </li>
                    <li class="icon whatsapp">
                        <a href="https://wa.me/5511999999999" target="_blank" rel="noopener noreferrer">
                            <span class="tooltip">Whatsapp</span>
                            <span><i class="fab fa-whatsapp"></i></span>
                        </a>
                    </li>
                    <li class="icon instagram">
                        <a href="https://www.instagram.com/hscolor" target="_blank" rel="noopener noreferrer">
                            <span class="tooltip">Instagram</span>
                            <span><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                    <li class="icon youtube">
                        <a href="https://www.youtube.com/@hscolor" target="_blank" rel="noopener noreferrer">
                            <span class="tooltip">Youtube</span>
                            <span><i class="fab fa-youtube"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Contato: <a class="link-email" href="mailto:contato@hscolor.com.br" title="Link para E-mail">contato@hscolor.com.br</a></p>
            <p>&copy; <?php echo date('Y'); ?> HS Color - Todos os direitos reservados.</p>
        </div>
    </footer>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "HS Color",
      "url": "<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']; ?>",
      "logo": "imagens/logo.png",
      "contactPoint": [{
        "@type": "ContactPoint",
        "telephone": "<?php echo WHATSAPP_NUMERO; ?>",
        "contactType": "customer service",
        "areaServed": "BR",
        "availableLanguage": ["Portuguese"]
      }],
      "sameAs": [
        "<?php echo FACEBOOK_URL; ?>",
        "<?php echo INSTAGRAM_URL; ?>",
        "<?php echo YOUTUBE_URL; ?>",
        "<?php echo LINKEDIN_URL; ?>"
      ]
    }
    </script>
</body>
</html> 