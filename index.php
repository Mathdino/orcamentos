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
            <span class="animated-slide-up animated-delay-1">Desenvolvimento de Sistemas de Orçamentos</span>
            <h1 class="animated-slide-up animated-delay-2">Simplifique seu negócio com um <br><b>sistema de orçamentos inteligente</b></h1>
            <div class="cta-buttons">
                <a class="animated-slide-up animated-delay-3" href="https://wa.me/5511910064302?text=Olá%2C+gostaria+de+conversar+sobre+o+sistema+Orcamentos!" target="_blank" rel="noopener" title="Link para Whatsapp">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Vamos Conversar
                </a>
                <a class="animated-slide-up animated-delay-4" href="#depoimentos">Cases de Sucesso →</a>
            </div>
        </div>
    </section>

    <section id="video">
        <div class="container flex">
            <div class="video-section">
                <video src="./imagens/video/Orcamentos-app.mp4" loop muted playsinline></video>
            </div>
            <div class="conteudo-video">
                <h2>Gerencie seus orçamentos de forma <b>simples</b> e <b>eficiente</b></h2>
                <div class="scroll-direita1">
                    <span class="animated-slide-up animated-delay-1">Nossos sistemas contam com as funcionalidades:</span>
                    <div class="funcionalidades">
                        <div class="cards-funcionalidades animated-slide-up animated-delay-2">
                            <img src="./imagens/icon-pdf.png" alt="Icone de PDF" width="80" height="80">
                            <h3>PDFs PERSONALIZADOS</h3>
                        </div>
                        <div class="cards-funcionalidades animated-slide-up animated-delay-3">
                            <img src="./imagens/icon-ferramenta.png" alt="Icone de Ferramenta" width="80" height="80">
                            <h3>GESTÃO DE OBRAS</h3>
                        </div>
                        <div class="cards-funcionalidades animated-slide-up animated-delay-4">
                            <img src="./imagens/icon-dinheiro.png" alt="Icone de Dinheiro" width="80" height="80">
                            <h3>SISTEMA FINANCEIRO</h3>
                        </div>
                        <div class="cards-funcionalidades animated-slide-up animated-delay-5">
                            <img src="./imagens/icon-cliente.png" alt="Icone de Cliente" width="80" height="80">
                            <h3>CADASTRO DE CLIENTES</h3>
                        </div>
                    </div>
                </div>
                <div class="scroll-direita2">
                    <span class="animated-slide-up animated-delay-1"><strong>ORCAME</strong><b>NTOS</b> em números</span>
                    <div class="funcionalidades">
                        <div class="linha1">
                            <div class="card-1 animated-slide-up animated-delay-2">
                                <h4><strong>100%</strong><br>Satisfação do cliente</h4>
                            </div>
                            <div class="card-2 animated-slide-up animated-delay-3">
                                <h4><strong>5+</strong><br>Sistemas Concluídos</h4>
                            </div>
                        </div>
                    </div>
                    <div class="funcionalidades part2">
                        <div class="linha1">
                            <div class="card-3 animated-slide-up animated-delay-4">
                                <h4><strong>12K</strong><br>Investimentos captados <br>por nossos clientes</h4>
                            </div>
                            <div class="card-4 animated-slide-up animated-delay-5">
                                <h4><strong>10+</strong><br>Sites Concluídos</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="depoimentos">
        <div class="container title-depoimentos">
            <span>Depoimentos de nossos Clientes</span>
            <h2>Nosso <b>cliente</b> em destaque, vence</h2>
        </div>

        <div class="clients">
            <!-- CARD 1 -->
            <div class="client-item">
                <span class="logo">HS COLOR</span>

                <a class="hover-card" href="#">
                    <h4 class="hc-title">Hs Color</h4>
                    <p class="hc-desc">
                        Sistema Personalizado para uma empresa especializada em serviços de pintura e acabamentos, ajudando a economizar tempo do orçamento até a finalização da obra.
                    </p>
                    <div class="hc-amount">$1M</div>
                    <div class="hc-tags">
                        <span class="tag">PINTURA</span>
                        <span class="tag"><img src="./imagens/BR.png" alt="Bandeira do Brasil">BR</span>
                    </div>
                </a>
            </div>

            <!-- CARD 2 -->
            <div class="client-item">
                <span class="logo">PROXIMO PARCEIRO</span>

                <a class="hover-card" href="#">
                    <h4 class="hc-title">---</h4>
                    <p class="hc-desc">
                        SOLICITE UM ORCAMENTO E FAÇA PARTE DA NOVA FORMA DE CONTRATAR SERVIÇOS COM AGILIDADE, PRATICIDADE E ZERO BUROCRACIA!
                    </p>
                    <div class="hc-amount">+</div>
                    <div class="hc-tags">
                        <span class="tag">---</span>
                        <span class="tag"><img src="./imagens/BR.png" alt="Bandeira do Brasil">BR</span>
                    </div>
                </a>
            </div>

            <!-- CARD 3 -->
            <div class="client-item">
                <span class="logo">PROXIMO PARCEIRO</span>

                <a class="hover-card" href="#">
                    <h4 class="hc-title">---</h4>
                    <p class="hc-desc">
                        SOLICITE UM ORCAMENTO E FAÇA PARTE DA NOVA FORMA DE CONTRATAR SERVIÇOS COM AGILIDADE, PRATICIDADE E ZERO BUROCRACIA!
                    </p>
                    <div class="hc-amount">+</div>
                    <div class="hc-tags">
                        <span class="tag">---</span>
                        <span class="tag"><img src="./imagens/BR.png" alt="Bandeira do Brasil">BR</span>
                    </div>
                </a>
            </div>
        </div>

    </section>

    <section id="funcionalidades">
       <div class="container">
            <div class="title-depoimentos">
                <span>Explore as principais funcionalidades</span>
                <h2>Funcionalidades do Orcame<b>ntos</b></h2>
            </div>
            <button id="toggle-grid">Alternar Visualização</button>
        </div>
            <ul class="grid">
                <li class="one"> <span class="s"></span></li>
                <li class="two"><span class="s"></span></li>
                <li class="three"><span class="s"></span></li>
            </ul>
    </section>

    <section id="servico" class="tabs t-tabs">
        <div class="container">
            <ul class="nav nav-tabs fancyTabs" role="tablist">
            
                        <li class="tab fancyTab active">
                        <div class="arrow-down"><div class="arrow-down-inner"></div></div>	
                            <a id="tab0" href="#tabBody0" role="tab" aria-controls="tabBody0" aria-selected="true" data-toggle="tab" tabindex="0"><i class="fa fa-file-circle-plus" style="color: #080d10;"></i><span class="hidden-xs">Orçamentos Facilitados</span></a>
                            <div class="whiteBlock"></div>
                        </li>
                        
                        <li class="tab fancyTab">
                        <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                            <a id="tab1" href="#tabBody1" role="tab" aria-controls="tabBody1" aria-selected="false" data-toggle="tab" tabindex="0"><i class="fa fa-file-pdf" style="color: #080d10;"></i><span class="hidden-xs">PDF's Personalizados</span></a>
                            <div class="whiteBlock"></div>
                        </li>
                        
                        <li class="tab fancyTab">
                        <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                            <a id="tab3" href="#tabBody3" role="tab" aria-controls="tabBody3" aria-selected="false" data-toggle="tab" tabindex="0"><i class="fa fa-hammer" style="color: #080d10;"></i><span class="hidden-xs">Gestão de Obras</span></a>
                            <div class="whiteBlock"></div>
                        </li> 
                            
                        <li class="tab fancyTab">
                        <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                            <a id="tab4" href="#tabBody4" role="tab" aria-controls="tabBody4" aria-selected="false" data-toggle="tab" tabindex="0"><i class="fa fa-users" style="color: #080d10;"></i><span class="hidden-xs">Cadastro de Clientes</span></a>
                            <div class="whiteBlock"></div>
                        </li>
                        
                        <li class="tab fancyTab">
                        <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                            <a id="tab5" href="#tabBody5" role="tab" aria-controls="tabBody5" aria-selected="false" data-toggle="tab" tabindex="0"><i class="fa fa-dollar-sign" style="color: #080d10;"></i><span class="hidden-xs">Sistema Financeiro</span></a>
                            <div class="whiteBlock"></div>
                        </li>

                        <li class="tab fancyTab">
                        <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                            <a id="tab2" href="#tabBody2" role="tab" aria-controls="tabBody2" aria-selected="false" data-toggle="tab" tabindex="0"><i class="fa fa-earth-americas" style="color: #080d10;"></i><span class="hidden-xs">Mobile e Desktop</span></a>
                            <div class="whiteBlock"></div>
                        </li>
            </ul>
            <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
                
                        <div class="tab-pane fade active" id="tabBody0" role="tabpanel" aria-labelledby="tab0" aria-hidden="false" tabindex="0">
                            <div>
                                <div class="row">                                 
                                    <div class="col-md-12">
                                        <h2><strong>Orçamentos Facilitados</strong></h2>
                                        <p>Crie orçamentos profissionais com agilidade, usando uma interface intuitiva e campos prontos para preenchimento. Adicione itens, serviços, medidas e valores com facilidade. Evite retrabalho e padronize seus processos comerciais.</p>
                                    </div>                             
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tabBody1" role="tabpanel" aria-labelledby="tab1" aria-hidden="true" tabindex="0">
                            <div class="row">                              
                                    <div class="col-md-12">
                                        <h2><strong>PDF's Personalizados</strong></h2>
                                        <p>Gere orçamentos em PDF com a logo, cores e dados da sua empresa. Envie arquivos bem estruturados, com aparência profissional e clara. Adicione observações, condições de pagamento e prazo de validade. Surpreenda seus clientes com um material visualmente organizado.</p>
                                    
                                    </div>
                                </div>
                        </div>

                        <div class="tab-pane fade" id="tabBody2" role="tabpanel" aria-labelledby="tab2" aria-hidden="true" tabindex="0">
                            <div class="row">
                                    <div class="col-md-12">
                                        <h2><strong>Mobile e Desktop</strong></h2>
                                        <p>Use o sistema em qualquer dispositivo, seja no computador ou celular. Ideal para quem precisa acessar informações direto do canteiro de obras. A interface é responsiva, rápida e adaptada para uso em campo.</p>
                                    
                                    </div>
                                </div>
                        </div>

                        <div class="tab-pane fade" id="tabBody3" role="tabpanel" aria-labelledby="tab3" aria-hidden="true" tabindex="0">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2><strong>Gestão de Obras</strong></h2>
                                    <p>Controle o andamento de cada obra com etapas, cronograma e status de execução. Acompanhe prazos, custos previstos x realizados e atualizações em tempo real. Evite atrasos e perdas financeiras com uma gestão centralizada. Tenha mais controle desde o planejamento até a entrega final.</p>
                                        
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tabBody4" role="tabpanel" aria-labelledby="tab4" aria-hidden="true" tabindex="0">
                            <div class="row">
                                <div class="col-md-12">
                                            <h2><strong>Cadastro de Clientes</strong></h2>
                                            <p>Organize e armazene dados completos dos seus clientes, como nome, telefone, endereço e histórico de orçamentos. Tenha fácil acesso às últimas negociações e preferências de cada um. Facilite o contato e aumente suas chances de conversão.</p>
                                        
                                        </div>
                                    </div>
                        </div>

                        <div class="tab-pane fade" id="tabBody5" role="tabpanel" aria-labelledby="tab5" aria-hidden="true" tabindex="0">
                            <div class="row">
                                <div class="col-md-12">
                                            <h2><strong>Sistema Financeiro</strong></h2>
                                            <p>Gerencie entradas, saídas, parcelas e formas de pagamento com controle total. Tenha relatórios claros sobre lucros, despesas e saldo por obra. Automatize cobranças e mantenha suas finanças organizadas. Reduza erros manuais e tome decisões baseadas em dados reais.</p>
                                        
                                        </div>
                                    </div>
                        </div>
            </div>
        </div>
    </section>

    <section id="orcamento" class="orcamento">
        <div class="container">
            <div class="title-orcamento">
                <h2>Solicite um Orcame<b>ntos</b></h2>
            </div>
            <?php if ($mensagem_enviada): ?>
                <div class="mensagem-enviada">
                    <p>Sua mensagem foi enviada com sucesso! Em breve entraremos em contato.</p>
                </div>
            <?php endif; ?>
            <?php if (!$mensagem_enviada): ?>
                <form id="form-orcamento" method="post" action="index.php">
                    <input type="text" name="nome" placeholder="Nome" required>
                    <input type="email" name="email" placeholder="Seu e-mail" required>
                    <input type="tel" name="telefone" placeholder="Seu telefone" required>
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

<script>
    // Controle de reprodução do vídeo baseado na visibilidade da seção
    document.addEventListener('DOMContentLoaded', function() {
    const videoSection = document.getElementById('video');
    const video = videoSection.querySelector('video');
    
    // Criar Intersection Observer para detectar quando a seção está visível
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Seção está visível, reproduzir vídeo
                video.play().catch(e => console.log('Erro ao reproduzir vídeo:', e));
            } else {
                // Seção não está visível, pausar vídeo
                video.pause();
            }
        });
    }, {
        threshold: 0.3 // Disparar quando 30% da seção estiver visível
    });
    
    // Observar a seção do vídeo
    observer.observe(videoSection);
    
    // Controle do grid 3D na seção de funcionalidades
    const grid = document.querySelector('.grid');
    const toggleButton = document.getElementById('toggle-grid');
    
    if (toggleButton && grid) {
        toggleButton.addEventListener('click', function() {
            grid.classList.toggle('toggle');
            
            // Atualizar texto do botão
            if (grid.classList.contains('toggle')) {
                this.textContent = 'Visualização 3D';
            } else {
                this.textContent = 'Visualização Plana';
            }
        });
    }
    });
</script>

<script>
    $(document).ready(function() {
        // Controle das tabs
        $('.fancyTab a').on('click', function(e) {
            e.preventDefault();
            
            // Remove active de todas as tabs
            $('.fancyTab').removeClass('active');
            $('.tab-pane').removeClass('active').hide();
            
            // Adiciona active na tab clicada
            $(this).parent().addClass('active');
            
            // Mostra o conteúdo correspondente
            var target = $(this).attr('href');
            $(target).addClass('active').show();
        });
        
        // Garantir que apenas a primeira aba esteja ativa no carregamento
        $('.tab-pane').removeClass('active').hide();
        $('#tabBody0').addClass('active').show();
        
        // Ajusta largura das tabs baseado no número
        var numItems = $('li.fancyTab').length;
        if (numItems == 12) {
            $("li.fancyTab").width('8.3%');
        } else if (numItems == 11) {
            $("li.fancyTab").width('9%');
        } else if (numItems == 10) {
            $("li.fancyTab").width('10%');
        } else if (numItems == 9) {
            $("li.fancyTab").width('11.1%');
        } else if (numItems == 8) {
            $("li.fancyTab").width('12.5%');
        } else if (numItems == 7) {
            $("li.fancyTab").width('14.2%');
        } else if (numItems == 6) {
            $("li.fancyTab").width('16.666666666666667%');
        } else if (numItems == 5) {
            $("li.fancyTab").width('20%');
        } else if (numItems == 4) {
            $("li.fancyTab").width('25%');
        } else if (numItems == 3) {
            $("li.fancyTab").width('33.3%');
        } else if (numItems == 2) {
            $("li.fancyTab").width('50%');
        }
        
        // Ajusta altura das tabs
        $('.fancyTabs').each(function() {
            var highestBox = 0;
            $('.fancyTab a', this).each(function() {
                if ($(this).height() > highestBox) {
                    highestBox = $(this).height();
                }
            });
            $('.fancyTab a', this).height(highestBox);
        });
    });
</script>

</body>

</html>