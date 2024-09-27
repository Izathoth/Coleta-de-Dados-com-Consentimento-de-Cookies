<?php
    $data = json_decode(file_get_contents("php://input"), true);

    $navegador = $data['navegador'];
    $plataforma = $data['plataforma'];
    $idioma = $data['idioma'];
    $tamanho_tela = $data['tamanhoTela'];
    $tamanho_janela = $data['tamanhoJanela'];
    $referenciador = $data['referenciador'];
    $tempo_permanencia = $data['tempoPermanencia'];
    $tipo_conexao = $data['tipoConexao'];
    $cor_fundo = $data['corFundo'];
    $navegador_online = $data['navegadorOnline'];
    $cookies_ativos = $data['cookiesAtivos'];
    $largura_media_fonte = $data['larguraMediaFonte'];
    $timezone = $data['timezone'];
    $profundidade_cor = $data['profundidadeCor'];
    $orientacao_tela = $data['orientacaoTela'];
    $url_atual = $data['urlAtual'];
    $sistema_operacional = $data['sistemaOperacional'];
    $suporte_touch = $data['suporteTouch'];
    $memoria_dispositivo = $data['memoriaDispositivo'];
    $tempo_pagina_visivel = $data['tempoPaginaVisivel'];
    $largura_total_tela = $data['larguraTotalTela'];
    $dpi = $data['dpi'];
    $data_acesso = date('Y-m-d H:i:s');

    $conn = new mysqli('localhost', 'root', '', 'coletadados');

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "INSERT INTO usuarios (navegador, plataforma, idioma, tamanho_tela, tamanho_janela, referenciador, tempo_permanencia, tipo_conexao, cor_fundo, navegador_online, cookies_ativos, largura_media_fonte, timezone, profundidade_cor, orientacao_tela, url_atual, sistema_operacional, suporte_touch, memoria_dispositivo, tempo_pagina_visivel, largura_total_tela, dpi, data_acesso)
            VALUES ('$navegador', '$plataforma', '$idioma', '$tamanho_tela', '$tamanho_janela', '$referenciador', '$tempo_permanencia', '$tipo_conexao', '$cor_fundo', '$navegador_online', '$cookies_ativos', '$largura_media_fonte', '$timezone', '$profundidade_cor', '$orientacao_tela', '$url_atual', '$sistema_operacional', '$suporte_touch', '$memoria_dispositivo', '$tempo_pagina_visivel', '$largura_total_tela', '$dpi', '$data_acesso')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados salvos com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>