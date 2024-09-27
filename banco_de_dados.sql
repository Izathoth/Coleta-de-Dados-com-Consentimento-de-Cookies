CREATE DATABASE coletadados;

USE coletadados;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    navegador VARCHAR(255),
    plataforma VARCHAR(255),
    idioma VARCHAR(50),
    tamanho_tela VARCHAR(50),
    tamanho_janela VARCHAR(50),
    referenciador VARCHAR(255),
    tempo_permanencia VARCHAR(50),
    tipo_conexao VARCHAR(50),
    cor_fundo VARCHAR(50),
    navegador_online VARCHAR(10),
    cookies_ativos VARCHAR(20),
    largura_media_fonte VARCHAR(20),
    timezone VARCHAR(50),
    profundidade_cor INT,
    orientacao_tela VARCHAR(50),
    url_atual VARCHAR(255),
    sistema_operacional VARCHAR(255),
    suporte_touch VARCHAR(10),
    memoria_dispositivo VARCHAR(50),
    tempo_pagina_visivel VARCHAR(20),
    largura_total_tela VARCHAR(50),
    dpi FLOAT,
    data_acesso DATETIME
);