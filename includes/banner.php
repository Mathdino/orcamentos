<?php
$mensagem_padrao = urlencode("Olá! Gostaria de solicitar um orçamento.");
?>
<div class="bg">
  <div class="bg-wall">
    <ul>
      <li><span></span></li>
      <li><span></span></li>
      <li><span></span></li>
      <li><span></span></li>
    </ul>
  </div>
  <div class="side-wall">
    <ul class="perspective">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <div class="conteudo-banner">
      <h1 class="banner-title">HS COLOR</h1>
      <p>Especialização em <br><b>Pintura Residencial</b> e <br><b>Predial</b></p>
      <a href="https://wa.me/<?php echo $whatsapp_numero; ?>?text=<?php echo $mensagem_padrao; ?>" class="whatsapp-btn" target="_blank" rel="noopener" aria-label="WhatsApp" title="Link para Whatsapp">Solicite um Orçamento</a>
    </div>
 
</div>