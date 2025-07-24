<?php
// Configurações SEO
define('PALAVRAS_CHAVE', [
    "Pintura",
    "Pintor",
    "Pintura Residencial",
    "Pintura Comercial",
    "Pintura Predial",
    "Pintura de Fachada",
    "Pintor Residencial",
    "Pintura Interna",
    "Pintura Externa",
    "Pintura de Casa",
    "Pintura de Predio",
    "Empresa de Pintura",
    "Aplicacao de Massa Corrida",
    "Aplicacao de Massa Acrilica",
    "Massa Corrida",
    "Massa Acrilica",
    "Massa Corrida em Parede",
    "Textura de Parede",
    "Textura Acrilica",
    "Textura Projetada",
    "Textura Rustica",
    "Efeito Decorativo",
    "Pintura Efeito Mármore",
    "Pintura Efeito Aco Corten",
    "Pintura Efeito Cimento Queimado",
    "Pintura Efeito Pedra",
    "Pintura Efeito Tijolinho",
    "Cimento Queimado",
    "Tinta Cimento Queimado",
    "Parede de Cimento Queimado",
    "Piso de Cimento Queimado",
    "Tinta Aco Corten",
    "Efeito Aco Corten",
    "Parede Aco Corten",
    "Tinta Ferrugem",
    "Parede com Pedra Natural",
    "Efeito Pedra",
    "Textura Pedra",
    "Parede com Tijolinho",
    "Efeito Tijolinho",
    "Tijolinho Fake",
    "Tinta Imitando Tijolo",
    "Parede com Mármore",
    "Efeito Mármore",
    "Pintura Decorativa",
    "Tecnicas de Pintura Decorativa",
    "Ideias de Pintura Criativa",
    "Tendências de Cores 2025",
    "Melhores Tintas para Parede",
    "Preco de Pintura por Metro",
    "Quanto Cobra um Pintor",
    "Pintura com Rapel",
    "Pintura com Balancim",
    "Normas para Pintura Predial",
    "Pintura de Condominio",
    "Pintor Profissional",
    "Servico de Pintura",
    "Tinta para Parede Interna",
    "Tinta para Parede Externa",
    "Tinta que Imita Mármore",
    "Tinta que Imita Pedra",
    "Tinta que Imita Cimento",
    "Tinta que Imita Aco Corten"
]);

define('REGIOES', [
    "Guarulhos",
    "Centro",
    "Gopouva",
    "Vila Augusta",
    "Vila Galvao",
    "Jardim Bom Clima",
    "Macedo",
    "Jardim Santa Francisca",
    "Jardim Tranquilidade",
    "Picanco",
    "Jardim Maia",
    "Vila Rio de Janeiro",
    "Jardim Cumbica",
    "Parque Continental",
    "Jardim Sao Joao",
    "Jardim Presidente Dutra",
    "Jardim Nova Cumbica",
    "Parque Mikail",
    "Jardim Arapongas",
    "Jardim das Oliveiras",
    "Parque Cecap",
    "Vila Barros",
    "Vila Fátima",
    "Jardim Santa Mena",
    "Jardim Iporanga",
    "Jardim Bela Vista",
    "Jardim Moreira",
    "Parque Santos Dumont",
    "Jardim Almeida Prado",
    "Cidade Satelite de Cumbica",
    "Jardim Sao Domingos",
    "Jardim Sao Paulo",
    "Jardim Ponte Alta",
    "Vila Uniao",
    "Parque Alvorada",
    "Inocoop",
    "Jardim Aracilia",
    "Jardim Angelica",
    "Pimentas",
    "Jardim Fortaleza",
    "Jardim Presidente Dutra",
    "Jardim Maria de Lourdes",
    "Parque Jandaia",
    "Jardim Carmela",
    "Jardim Leblon",
    "Jardim Santa Paula",
    "Jardim Nova Cidade",
    "Jardim das Oliveiras",
    "Jardim Sao Joao",
    "Jardim Albertina",
    "Jardim Santo Afonso",
    "Jardim Aracilia",
    "Jardim Maria Dirce",
]);

define('WHATSAPP_NUMERO', "5511999999999");
define('INSTAGRAM_URL', "https://instagram.com/hscoloroficial");
define('FACEBOOK_URL', "https://facebook.com/hscoloroficial");
define('EMAIL_CONTATO', "contato@hscolor.com.br");
define('YOUTUBE_URL', "https://youtube.com/@hscoloroficial");
define('LINKEDIN_URL', "https://linkedin.com/company/hscoloroficial");
define('GOOGLE_ANALYTICS_ID', 'G-XXXXXXXXXX');

// Função para gerar meta keywords dinâmicas
function gerar_keywords($palavras, $regioes)
{
    $keywords = [];
    foreach ($palavras as $p) {
        $keywords[] = $p;
        foreach ($regioes as $r) {
            $keywords[] = "$p no $r";
        }
    }
    return implode(", ", $keywords);
} 