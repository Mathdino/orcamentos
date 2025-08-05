<?php
// Configurações SEO
define('PALAVRAS_CHAVE', [
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

define('WHATSAPP_NUMERO', "5511910064302");
define('INSTAGRAM_URL', "https://instagram.com/xxxxxxxxxx");
define('FACEBOOK_URL', "https://facebook.com/xxxxxxxxxx");
define('EMAIL_CONTATO', "contato@orcamentos.com.br");
define('YOUTUBE_URL', "https://youtube.com/@xxxxxxxxxx");
define('LINKEDIN_URL', "https://linkedin.com/company/xxxxxxxxxx");
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