let startTime;

function getUserData() {
    const userData = {
        navegador: navigator.userAgent,
        plataforma: navigator.platform,
        idioma: navigator.language,
        tamanhoTela: `${window.screen.width}x${window.screen.height}`,
        tamanhoJanela: `${window.innerWidth}x${window.innerHeight}`,
        referenciador: document.referrer || 'Acesso direto',
        tempoPermanencia: ((new Date().getTime() - startTime) / 1000).toFixed(2) + ' segundos',
        dataAcesso: new Date().toLocaleString(),
        tipoConexao: navigator.connection ? navigator.connection.effectiveType : 'Desconhecida',
        corFundo: window.getComputedStyle(document.body).backgroundColor,
        navegadorOnline: navigator.onLine ? 'Online' : 'Offline',
        cookiesAtivos: navigator.cookieEnabled ? 'Ativos' : 'Desativados',
        larguraMediaFonte: getComputedStyle(document.body).fontSize,
        timezone: Intl.DateTimeFormat().resolvedOptions().timeZone,
        profundidadeCor: screen.colorDepth,
        orientacaoTela: screen.orientation ? screen.orientation.type : 'Desconhecida',
        urlAtual: window.location.href,
        sistemaOperacional: navigator.platform,
        suporteTouch: 'ontouchstart' in window || navigator.maxTouchPoints > 0 ? 'Sim' : 'Não',
        memoriaDispositivo: navigator.deviceMemory || 'Desconhecido',
        tempoPaginaVisivel: document.visibilityState,
        larguraTotalTela: screen.availWidth + 'x' + screen.availHeight,
        dpi: window.devicePixelRatio
    };

    fetch('salvar_dados.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(userData)
    });
}

document.getElementById('acceptCookies').addEventListener('click', function() {
    document.getElementById('cookieConsent').style.display = 'none';
    localStorage.setItem('cookiesAccepted', 'true');
    getUserData();
});

document.getElementById('declineCookies').addEventListener('click', function() {
    document.getElementById('cookieConsent').style.display = 'none';
    localStorage.setItem('cookiesAccepted', 'false');
});

window.onload = function() {
    const consent = localStorage.getItem('cookiesAccepted');
    startTime = new Date().getTime();
    if (consent === 'true') {
        getUserData();
    }
};