$(".comecar").click(function () {
    if (this.classList.contains("comecar")) {
        let linha = this.offsetParent.parentElement;
        let valorData = linha.getAttribute("data-estado");
        let x = localStorage.getItem("perguntas");
        if (x == null) {
            let respostas = {"pergunta1": null,"pergunta2": null,"pergunta3": null, "pergunta4": null}
            let data = JSON.stringify(respostas);
            localStorage.setItem("perguntas", data);
        } else {
            let data = JSON.parse(x), resposta = 1;
            if (valorData === "pergunta1" || valorData === "pergunta3" || valorData === "pergunta4") {
                let valor = document.getElementsByClassName("input-radio");
                for (let a = 0; a < valor.length; a++) {
                    if (valor[a].name === "zona") {
                        if (valor[a].checked === true) {
                            resposta = parseInt(valor[a].value);
                        }
                    } else if (valor[a].name === "streaming") {
                        if (valor[a].checked === true) {
                            if (valor[a].value === "sim") {
                                resposta = 2;
                            }
                        }
                    } else if (valor[a].name === "jogar") {
                        if (valor[a].checked === true) {
                            if (valor[a].value === "sim") {
                                resposta = 2;
                            }
                        }
                    }
                }
            } else if (valorData === "pergunta2") {
                let valor = document.getElementsByClassName("item-vazio");
                for (let a = 0; a < valor.length; a++) {
                    if (valor[a].classList.contains("item-selecionado")) {
                        resposta =  parseInt(valor[a].getAttribute("data-item"));
                    }
                }
            }
            data[`${valorData}`] = resposta;
            localStorage.setItem("perguntas", JSON.stringify(data));
        }
        linha.style.display = "none";
        linha.nextElementSibling.classList.remove("ocultar");
        if (linha.nextElementSibling.childNodes[1].childNodes[1].classList.contains("c-loader")) {
            let x = localStorage.getItem("perguntas");
            let data = JSON.parse(x);
            localStorage.setItem("perguntas", JSON.stringify(data));
            let buscando = document.querySelector(".buscando-resultado");
            setTimeout(function () {
                buscando.style.height = "0px";
                buscando.style.width = "0px";
                buscando.style.display = "none";
                calcularResultado();
            }, 3000)
        }
    } else if (this.classList.contains("faleComACentral")) {
        let numero = "75998436344";
        let texto = "Olá! Gostaria de saber os planos de internet para a Zona Rural.";
        window.location.href = "https://api.whatsapp.com/send?phone=55" + numero + "&text=" + encodeURI(texto) + "";
    }

});

function calcularResultado() {

    let plano40, plano80, plano100, plano200, plano250, plano300, plano500;
    plano40={plano:{nome:"fit",valor:"69,90",valorBruto:null,download:40,appQualifica:0,appQualificaPreco:"0,00",alternativaTv:0,alternativaTvPreco:"0,00"},combo:{nome:"fit",valor:"69,90",valorBruto:"79,80",download:40,appQualifica:1,appQualificaPreco:"9,90",alternativaTv:0,alternativaTvPreco:"0,00"}}
    plano80={plano:{nome:"plus",valor:"79,90",valorBruto:null,download:80,appQualifica:0,appQualificaPreco:"0,00",alternativaTv:0,alternativaTvPreco:"0,00"},combo:{nome:"plus",valor:"79,90",valorBruto:"89,80",download:80,appQualifica:1,appQualificaPreco:"9,90",alternativaTv:0,alternativaTvPreco:"0,00"}}
    plano100={plano:{nome:"home",valor:"89,90",valorBruto:null,download:100,appQualifica:0,appQualificaPreco:"0,00",alternativaTv:0,alternativaTvPreco:"0,00"},combo:{nome:"home",valor:"89,90",valorBruto:"99,80",download:100,appQualifica:1,appQualificaPreco:"9,90",alternativaTv:0,alternativaTvPreco:"0,00"}}
    plano200={plano:{nome:"essencial",valor:"109,90",valorBruto:"99,8",download:200,appQualifica:0,appQualificaPreco:"0,00",alternativaTv:0,alternativaTvPreco:"0,00"},combo:{nome:"essencial",valor:"109,90",valorBruto:"119,80",download:200,appQualifica:1,appQualificaPreco:"9,90",alternativaTv:0,alternativaTvPreco:"0,00"}}
    plano250={plano:{nome:"gamer",valor:"129,90",valorBruto:null,download:250,appQualifica:0,appQualificaPreco:"0,00",alternativaTv:0,alternativaTvPreco:"0,00"},combo:{nome:"gamer",valor:"129,90",valorBruto:"139,80",download:250,appQualifica:1,appQualificaPreco:"9,90",alternativaTv:0,alternativaTvPreco:"0,00"}} 
    plano300={plano:{nome:"box",valor:"149,90",valorBruto:null,download:300,appQualifica:0,appQualificaPreco:"0,00",alternativaTv:0,alternativaTvPreco:"0,00"},combo:{nome:"Total",valor:"149,90",valorBruto:"159,80",download:300,appQualifica:1,appQualificaPreco:"9,90",alternativaTv:0,alternativaTvPreco:"0,00"}}
    plano500={plano:{nome:"total",valor:"199,90",valorBruto:null,download:500,appQualifica:0,appQualificaPreco:"0,00",alternativaTv:0,alternativaTvPreco:"0,00"},combo:{nome:"total",valor:"199,90",valorBruto:"209,80",download:500,appQualifica:1,appQualificaPreco:"9,90",alternativaTv:0,alternativaTvPreco:"0,00"}}

    let x = localStorage.getItem("perguntas");
    let data = JSON.parse(x);
    let variavel = data['pergunta1']+","+data['pergunta2']+","+data['pergunta3']+","+data['pergunta4'];

    /*let variavel = "1,4,1,1";*/
    let local = document.querySelector(".resultado");
    let resultado, resultadoFinal, link;    

    resultadoFinal = document.getElementById("resultadoFinal");
    link = "https://api.whatsapp.com/send?phone=5575998436344&text=Olá! Gostaria de contratar o ";
    if (variavel === "1,1,1,1") {
        /* Plano de 40mbps */
        resultado = inserirResultado(plano40, {link});

    } else if (variavel === "1,1,2,1" || variavel === "1,1,1,2" || variavel === "1,2,1,1") {
        /* Plano de 80mbps */
        resultado = inserirResultado(plano80, {link});

    } else if (variavel === "1,1,2,2" || variavel === "1,2,2,1" || variavel === "1,2,1,2") {
        /* Plano de 100mbps */
        resultado = inserirResultado(plano100, {link});

    } else if (variavel === "1,3,1,1" || variavel === "1,3,2,1") {
        /* Plano de 200mbps */
        resultado = inserirResultado(plano200, {link});
    
    } else if (variavel === "1,2,2,2" || variavel === "1,3,1,2") {
        /* Plano de 250mbps */
        resultado = inserirResultado(plano250, {link});

    } else if (variavel === "1,3,2,2" || variavel === "1,4,1,1") {
        /* Plano de 300mbps */
        resultado = inserirResultado(plano300, {link});

    } else if (variavel === "1,4,2,1" || variavel === "1,4,1,2" || variavel === "1,4,2,2") {
        /* Plano de 500mbps */
        resultado = inserirResultado(plano500, {link});

    }
    resultadoFinal.innerHTML = resultado;
    local.style.display = "flex";

}

$(document).ready(function () {
    /*calcularResultado();*/
});

function ajustarTitulo(texto) {
    let words = texto.toLowerCase().split(" ");
    for (let a = 0; a < words.length; a++) {
        let w = words[a];
        if(w === "tv")
            words[a] = "TV";
        else
            words[a] = w[0].toUpperCase() + w.slice(1);
    }
    return words.join(" ");
}

function inserirResultado(objetos, link) {
    let html;

    function valor1(e) {
        let a = e.split(",");
        return a[0];
    }

    function valor2(e) {
        let a = e.split(",");
        return a[1];
    }
    

    if(Object.keys(objetos).length === 3){
        html = '<div class="col-12 col-md-3 box-plano remove-padding">\n' +
            '                                <div class="area-titulo">Plano '+ajustarTitulo(objetos.plano.nome)+'</div>\n' +
            '                                <div class="conteudos-planos">\n' +
            '                                    <div class="icone-planos">\n' +
            '                                        <div class="item"><span class="material-icons">signal_wifi_4_bar</span><span\n' +
            '                                                    class="item-descricao">Internet</span></div>\n' +
            '                                    </div>\n' +
            '                                    <div class="icone-planos icone-planos2">\n' +
            '                                        <div class="item"><span class="plano">'+objetos.plano.download+'MB</span><span class="adesao">*Adesão grátis</span>\n' +
            '                                        </div>\n' +
            '                                    </div>\n' +
            '                                </div>\n' +
            '                                <div class="valor-planos"><p class="valor"><span>R$ '+valor1(objetos.plano.valor)+'</span><span class="centavos">,'+valor2(objetos.plano.valor)+'/mês</span>\n' +
            '                                    </p>\n' +
            '                                    <div class="valores-avulsos"><p>*Roteador não incluso</p></div>\n' +
            '                                    <a href="'+encodeURI(link.link+'plano '+objetos.plano.nome)+'" target="_blank" class="btn-assine">Assine já!</a></div>\n' +
            '                            </div>\n' +
            '                            <div class="col-12 col-md-1 entre-planos">\n' +
            '                                <div class="entre-planos-a">\n' +
            '                                    <span class="material-icons icon-entre-plano">next_plan</span>\n' +
            '                                    <p>Opção Combo</p>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                            <div class="col-12 col-md-3 box-plano remove-padding">\n' +
            '                                <div class="area-titulo">Combo '+ajustarTitulo(objetos.combo.nome)+'</div>\n' +
            '                                <div class="conteudos-planos">\n' +
            '                                    <div class="icone-planos">\n' +
            '                                        <div class="item"><span class="material-icons">signal_wifi_4_bar</span><span\n' +
            '                                                    class="item-descricao">Internet</span></div>\n' +
            '                                        <div class="divisor"></div>\n' +
            '                                        <div class="item">\n' +
            '                                            <img class="imagem-selo-resultado"\n' +
            '                                                 src="'+base+'/assets/imagens/selo-qualifica.png">\n' +
            '                                        </div>\n' +
            '                                    </div>\n' +
            '                                    <div class="icone-planos icone-planos2">\n' +
            '                                        <div class="item"><span class="plano">'+objetos.combo.download+'MB</span><span class="adesao">*Adesão grátis</span>\n' +
            '                                        </div>\n' +
            '                                        <div class="divisor maior"></div>\n' +
            '                                        <div class="item maior">\n' +
            '                                            <div class="item-info-link"><p class="canais"> Qualifica<br> Cursos</p><a\n' +
            '                                                        href="https://qualifica.com" class="plano-link"\n' +
            '                                                        target="_blank" rel="noreferrer noopener">Saiba mais</a></div>\n' +
            '                                        </div>\n' +
            '                                    </div>\n' +
            '                                </div>\n' +
            '                                <div class="valor-planos"><p class="valor"><span>R$ '+valor1(objetos.combo.valor)+'</span><span class="centavos">,'+valor2(objetos.combo.valor)+'/mês</span>\n' +
            '                                    </p>\n' +
            '                                    <div class="valores-avulsos"><p>*Roteador não incluso</p></div>\n' +
            '                                    <a href="'+encodeURI(link.link+'combo '+objetos.combo.nome)+'" target="_blank" class="btn-assine">Assine já!</a></div>\n' +
            '                            </div>\n' +
            '                            <div class="col-12 col-md-1 entre-planos">\n' +
            '                                <div class="entre-planos-a">\n' +
            '                                    <span class="material-icons icon-entre-plano">next_plan</span>\n' +
            '                                    <p>Ou leve pelo menor valor</p>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                            <div class="col-12 col-md-4 box-plano remove-padding">\n' +
            '                                <div class="area-titulo">Combo '+ajustarTitulo(objetos.comboTv.nome)+'</div>\n' +
            '                                <div class="conteudos-planos">\n' +
            '                                    <div class="icone-planos">\n' +
            '                                        <div class="item"><span class="material-icons">tv</span><span\n' +
            '                                                    class="item-descricao">TV por assinatura</span></div>\n' +
            '                                        <div class="divisor"></div>\n' +
            '                                        <div class="item"><span class="material-icons">signal_wifi_4_bar</span><span\n' +
            '                                                    class="item-descricao">Internet</span>\n' +
            '                                        </div>\n' +
            '                                        <div class="divisor"></div>\n' +
            '                                        <div class="item">\n' +
            '                                            <img class="imagem-selo-resultado"\n' +
            '                                                 src="'+base+'/assets/imagens/selo-qualifica.png">\n' +
            '                                        </div>\n' +
            '                                    </div>\n' +
            '                                    <div class="icone-planos icone-planos2">\n' +
            '                                        <div class="item maior">\n' +
            '                                            <div class="item-info-link"><p class="canais"> '+objetos.comboTv.alternativaTv+' canais HD</p><a\n' +
            '                                                        id="vercanais" href="javascript:void(0)"\n' +
            '                                                        onclick="verCanais(\''+objetos.comboTv.nome+'\', \'' + objetos.comboTv.alternativaTv + '\')" rel="noreferrer noopener"\n' +
            '                                                        class="plano-link">Ver canais</a></div>\n' +
            '                                        </div>\n' +
            '                                        <div class="divisor maior"></div>\n' +
            '                                        <div class="item maior"><span class="plano">'+objetos.comboTv.download+'MB</span><span class="adesao">*Adesão grátis</span>\n' +
            '                                        </div>\n' +
            '                                        <div class="divisor maior"></div>\n' +
            '                                        <div class="item maior">\n' +
            '                                            <div class="item-info-link"><p class="canais"> Qualifica<br> Cursos</p><a\n' +
            '                                                        href="https://qualifica.com" class="plano-link"\n' +
            '                                                        target="_blank" rel="noreferrer noopener">Saiba mais</a></div>\n' +
            '                                        </div>\n' +
            '                                    </div>\n' +
            '                                </div>\n' +
            '                                <div class="valor-planos">\n' +
            '                                    <div class="plano-combo"><p>De</p>\n' +
            '                                        <p class="valor-anterior">R$ '+objetos.comboTv.valorBruto+'</p>\n' +
            '                                        <p>Por</p>\n' +
            '                                        <p class="valor">R$ '+valor1(objetos.comboTv.valor)+'<span class="centavos">,'+valor2(objetos.comboTv.valor)+'/mês</span>\n' +
            '                                        </p>\n' +
            '                                        <p>Economize no combo</p>\n' +
            '                                        <div class="divisor2"></div>\n' +
            '                                        <div class="valores-avulsos"><p class="titulo-valores-avulsos">**Valores\n' +
            '                                                avulsos</p>\n' +
            '                                            <p>Plano '+objetos.plano.nome+' R$ '+objetos.plano.valor+'/mês</p>\n' +
            '                                            <p>Pacote de TV com '+objetos.comboTv.alternativaTv+' canais R$ '+objetos.comboTv.alternativaTvPreco+'/mês</p>\n' +
            '                                            <p>Aplicativo Qualifica R$ '+objetos.comboTv.appQualificaPreco+'/mês</p>\n' +
            '                                            <p>*Roteador e TV BOX não inclusos</p></div>\n' +
            '                                        <a href="'+encodeURI(link.link+'combo '+objetos.comboTv.nome)+'" target="_blank" class="btn-assine" target="_blank"\n' +
            '                                           rel="noreferrer noopener">Assine já!</a></div>\n' +
            '                                </div>\n' +
            '                            </div>';
    }else{
        html = '<div class="col-12 col-md-5 box-plano remove-padding">' +
            '<div class="area-titulo">Plano ' + ajustarTitulo(objetos.plano.nome) + '</div><div class="conteudos-planos"><div class="icone-planos"><div class="item"><span class="material-icons">signal_wifi_4_bar</span><span class="item-descricao">Internet</span></div></div><div class="icone-planos icone-planos2"><div class="item"><span class="plano">' + objetos.plano.download + 'MB</span><span class="adesao">*Adesão grátis</span></div></div></div><div class="valor-planos"><p class="valor"><span>R$ ' + valor1(objetos.plano.valor) + '</span><span class="centavos">,' + valor2(objetos.plano.valor) + '/mês</span></p><div class="valores-avulsos"><p>*Roteador não incluso</p></div><a href="'+encodeURI(link.link+'plano '+objetos.plano.nome)+'" target="_blank" class="btn-assine">Assine já!</a></div>' +
            '</div>\n' +
            '                            <div class="col-12 col-md-2 entre-planos">\n' +
            '                                <div class="entre-planos-a">\n' +
            '                                    <span class="material-icons icon-entre-plano">next_plan</span>\n' +
            '                                    <p>Ou leve pelo menor valor</p>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                            <div id="combo" class="col-12 col-md-5 box-plano remove-padding">\n' +
            '                                <div class="area-titulo">Combo ' + ajustarTitulo(objetos.combo.nome) + '</div>\n' +
            '                                <div class="conteudos-planos">\n' +
            '                                    <div class="icone-planos">\n' +
            (objetos.combo.alternativaTv > 0 ? '<div class="item"><span class="material-icons">tv</span><span\n' +
                '                                                    class="item-descricao">TV por assinatura</span></div>\n' +
                '                                        <div class="divisor"></div>\n' : '') +
            '                                        <div class="item"><span class="material-icons">signal_wifi_4_bar</span><span\n' +
            '                                                    class="item-descricao">Internet</span>\n' +
            '                                        </div>\n' +
            '                                        <div class="divisor"></div>\n' +
            '                                        <div class="item">\n' +
            '                                            <img class="imagem-selo-resultado" src="'+base+'assets/imagens/selo-qualifica.png">\n' +
            '                                        </div>\n' +
            '                                    </div>\n' +
            '                                    <div class="icone-planos icone-planos2">\n' +
            (objetos.combo.alternativaTv > 0 ? '<div class="item maior">\n' +
                '                                            <div class="item-info-link"><p class="canais"> ' + objetos.combo.alternativaTv + ' canais HD</p><a id="vercanais" href="javascript:void(0)" onclick="verCanais(\'' + objetos.combo.nome + '\', \'' + objetos.combo.alternativaTv + '\')" rel="noreferrer noopener" class="plano-link">Ver canais</a></div>\n' +
                '                                        </div>\n' +
                '                                        <div class="divisor maior"></div>\n' : '') +
            '                                        <div class="item maior"><span class="plano">' + objetos.combo.download + 'MB</span><span class="adesao">*Adesão grátis</span></div>\n' +
            '                                        <div class="divisor maior"></div>\n' +
            '                                        <div class="item maior">\n' +
            '                                            <div class="item-info-link"><p class="canais"> Qualifica<br> Cursos</p><a id="vercanais" href="https://qualifica.com" class="plano-link" target="_blank" rel="noreferrer noopener">Saiba mais</a></div>\n' +
            '                                        </div>\n' +
            '                                    </div>\n' +
            '                                </div>\n' +
            '                                <div class="valor-planos">\n' +
            '                                    <div class="plano-combo"><p>De</p>\n' +
            '                                        <p class="valor-anterior">R$ ' + objetos.combo.valorBruto + '</p>\n' +
            '                                        <p>Por</p>\n' +
            '                                        <p class="valor">R$ ' + valor1(objetos.combo.valor) + '<span class="centavos">,' + valor2(objetos.combo.valor) + '/mês</span>\n' +
            '                                        </p>\n' +
            '                                        <p>Economize no combo</p>\n' +
            '                                        <div class="divisor2"></div>\n' +
            '                                        <div class="valores-avulsos"><p class="titulo-valores-avulsos">**Valores avulsos</p>\n' +
            '                                            <p>Plano ' + objetos.plano.nome + ' R$ ' + objetos.plano.valor + '/mês</p>\n' +
            (objetos.combo.alternativaTv > 0 ? '<p>Pacote de TV com ' + objetos.combo.alternativaTv + ' canais R$ ' + objetos.combo.alternativaTvPreco + '/mês</p>\n' : '') +
            '                                            <p>Aplicativo Qualifica R$ ' + objetos.combo.appQualificaPreco + '/mês</p>\n'+
            (objetos.combo.alternativaTv > 0 ? '<p>*Roteador e TV BOX não inclusos</p>\n' : '<p>*Roteador não incluso</p>\n') +
            '                                        </div>' +
            '<a href="'+encodeURI(link.link+'combo '+objetos.combo.nome)+'" class="btn-assine" target="_blank" rel="noreferrer noopener">Assine já!</a></div>\n' +
            '                                </div>\n' +
            '                            </div>';
    }

    return html;
}

function verCanais(plano, quantCanais) {
    let areaCanais = document.getElementById("areaCanais");
    areaCanais.style.display = "flex";
    areaCanais.style.overflowY = "auto";

    let body = document.querySelector("body");

    setTimeout(function () {
        body.style.overflowY = "hidden";
    }, 250)

    let localCanais = document.querySelector("#listaCanais");
    let listaPlanos = [
        ['TV Home', "smartHome"],
        ['TV Essencial', "smartEssencial"],
        ['TV Gamer', "smartGamer"],
        ['TV Total', "smartTotal"]
    ];

    let indexCanais = escolherPlano(listaPlanos, plano);

    function escolherPlano(listaPlanos, plano) {
        for (let a = 0; a < listaPlanos.length; a++) {
            if (listaPlanos[a][0] === plano) {
                return a;
            }
        }
    };


    let listaCanais = [
        [[3, "Band Bahia "], [4, "TV Sudoeste "], [5, "Rede TV"], [6, "TV Brasil"], [7, "TV Escola"], [8, "TV Cabrália "], [11, "TV Aratu "], [12, "TV Aparecida"], [13, "Canção Nova"], [14, "TV Senado"], [15, "TV Câmara "], [17, "TV Justiça "], [18, "TV Gazeta "], [20, "Rede Super"], [21, "Rede 21"], [23, "Novo Tempo"], [24, "Rede Vida"], [25, "Evangelizar"], [27, "SescTV"], [28, "Agro Canal"], [29, "Terraviva"], [30, "Canal Do Boi"], [31, "Rit TV"], [33, "Futura"], [35, "Arte1"], [37, "Polishop"], [38, "Cine Brasil"], [51, "Record News"], [52, "AGROMAIS"], [110, "Music Box Brazil "], [204, "Prime Box"], [215, "Travel Box Brazil"], [350, "AL Jazeera "], ["", ""], ["", ""], ["", ""]],
        [["", ""], [1, "TV Itnet "], [3, "Band Bahia "], [4, "TV Sudoeste "], [5, "Rede TV"], [6, "TV Brasil"], [7, "TV Escola"], [8, "TV Cabrália "], [10, "Loading HD"], [11, "TV Aratu "], [12, "TV Aparecida"], [13, "Canção Nova"], [14, "TV Senado"], [15, "TV Câmara "], [17, "TV Justiça "], [18, "TV Gazeta "], [20, "Rede Super"], [21, "Rede 21"], [23, "Novo Tempo"], [24, "Rede Vida"], [25, "Evangelizar"], [27, "SescTV"], [28, "Agro Canal"], [29, "Terraviva"], [30, "Canal Do Boi"], [31, "Rit TV"], [33, "Futura"], [36, "A&E"], [37, "Polishop"], [38, "Cine Brasil"], [40, "TV Pai Eterno "], [41, "CNT"], [49, "Band News"], [51, "Record News"], [52, "AGROMAIS"], [53, "Metrópole"], [57, "CNN Brasil"], [65, "Love Nature HD"], [88, "Discovery Kids"], [96, "Disney Junior "], [100, "Cartoon Network "], [111, "Play TV"], [135, "Fish TV"], [139, "Disc. Home&Health "], [143, "E!"], [159, "MTV Brasil"], [204, "Prime Box"], [223, "National Geographic"], [223, "Discovery Channel "], [226, "Fox HD"], [227, "Warner"], [228, "Fox Life"], [238, "TNT"], [243, "Sony Channel "], [247, "ESPN Internacional "], [257, "Conmebol"], [350, "AL Jazeera "], [402, "Arirang"], ["", ""], ["", ""]],
        [[1, "TV Itnet "], [3, "Band Bahia "], [4, "TV Sudoeste "], [5, "Rede TV"], [6, "TV Brasil"], [7, "TV Escola"], [8, "TV Cabrália "], [10, "Loading HD"], [11, "TV Aratu "], [12, "TV Aparecida"], [13, "Canção Nova"], [14, "TV Senado"], [15, "TV Câmara "], [17, "TV Justiça "], [18, "TV Gazeta "], [20, "Rede Super"], [21, "Rede 21"], [23, "Novo Tempo"], [24, "Rede Vida"], [25, "Evangelizar"], [27, "SescTV"], [28, "Agro Canal"], [29, "Terraviva"], [30, "Canal Do Boi"], [31, "Rit TV"], [33, "Futura"], [35, "Arte1"], [36, "A&E"], [37, "Polishop"], [38, "Cine Brasil"], [40, "TV Pai Eterno "], [41, "CNT"], [49, "Band News"], [51, "Record News"], [52, "AGROMAIS"], [53, "Metrópole"], [57, "CNN Brasil"], [65, "Love Nature HD"], [78, "TV Rá Tim Bum"], [79, "Nat Geo Kids"], [88, "Discovery Kids"], [96, "Disney Junior "], [97, "Disney XD"], [98, "Nick"], [100, "Cartoon Network "], [102, "Disney Channel "], [106, "Boomerang "], [110, "Music Box Brazil "], [111, "Play TV"], [135, "Fish TV"], [138, "ID - Investigação Discovery"], [139, "Disc. Home&Health "], [142, "TruTV"], [143, "E!"], [145, "Central da Comédia"], [159, "MTV Brasil"], [204, "Prime Box"], [211, "Animal Planet"], [215, "Travel Box Brazil"], [220, "National Geographic"], [223, "Discovery Channel "], [225, "Fashion TV"], [226, "Fox HD"], [227, "Warner"], [228, "Fox Life"], [229, "TBS"], [230, "TCM"], [231, "TLC"], [235, "Paramount "], [237, "Space"], [238, "TNT"], [239, "FX"], [240, "AXN"], [241, "TNT Series "], [242, "Woohoo"], [243, "Sony Channel "], [246, "ESPN Brasil"], [247, "ESPN Internacional "], [248, "ESPN 2"], [253, "Discovery Turbo "], [254, "FOX Sports 1"], [256, "FOX Sports 2"], [257, "Conmebol"], [258, "Band Sports"], [350, "AL Jazeera "], [402, "Arirang"], ["", ""], ["", ""]],
        [[1, "TV Itnet"], [3, "Band Bahia "], [4, "TV Sudoeste"], [5, "Rede TV"], [6, "TV Brasil"], [7, "TV Escola"], [8, "TV Cabrália "], [10, "Loading HD"], [11, "TV Aratu"], [12, "TV Aparecida "], [13, "Canção Nova"], [14, "TV Senado"], [15, "TV Câmara"], [17, "TV Justiça"], [18, "TV Gazeta"], [20, "Rede Super"], [21, "Rede 21"], [23, "Novo Tempo"], [24, "Rede Vida"], [25, "Evangelizar "], [27, "SescTV"], [28, "Agro Canal"], [29, "Terraviva"], [30, "Canal Do Boi"], [31, "Rit TV"], [33, "Futura"], [35, "Arte1"], [36, "A&E"], [37, "Polishop "], [38, "Cine Brasil"], [40, "TV Pai Eterno"], [41, "CNT"], [45, "CNN Internacional "], [48, "CNN Espanhol"], [49, "Band News"], [51, "Record News"], [52, "AGROMAIS"], [53, "Metrópole "], [57, "CNN Brasil"], [65, "Love Nature HD"], [66, "Discovery Theater "], [73, "Discovery Science"], [78, "TV Rá Tim Bum"], [79, "Nat Geo Kids"], [87, "Nick JR."], [88, "Discovery Kids"], [96, "Disney Junior"], [97, "Disney XD"], [98, "Nick "], [100, "Cartoon Network"], [102, "Disney Channel"], [106, "Boomerang "], [110, "Music Box Brazil"], [111, "PlayTV"], [135, "Fish TV"], [136, "Chef Tv"], [138, "ID - Investigação Discovery "], [139, "Disc. Home&Health "], [140, "Lifetime"], [141, "HGTV"], [142, "TruTV"], [143, "E!"], [145, "Central da Comédia"], [146, "MTV Live HD "], [159, "MTV Brasil"], [204, "Prime Box"], [211, "Animal Planet"], [215, "Travel Box Brazil"], [220, "National Geographic "], [222, "Discovery  World"], [223, "Discovery Channel "], [224, "History "], [225, "Fashion TV"], [226, "FOX HD"], [227, "Warner"], [228, "Fox Life"], [229, "TBS"], [230, "TCM"], [231, "TLC"], [232, "History 2"], [235, "Paramount "], [237, "Space"], [238, "TNT"], [239, "FX"], [240, "AXN"], [241, "TNT Series"], [242, "Woohoo"], [243, "Sony Channel"], [246, "ESPN Brasil"], [247, "ESPN Internacional "], [248, "ESPN 2"], [249, "ESPN Extra"], [253, "Discovery Turbo "], [254, "FOX Sports 1"], [256, "FOX Sports 2"], [257, "Conmebol"], [258, "Band Sports"], [306, "NHK "], [350, "AL Jazeera "], [402, "Arirang "]]
    ];

    let quantidadeCanaisColuna = listaCanais[indexCanais].length / 4;

    let html = '<div class="col-12 col-sm-6 col-lg-3"><ul class="item-canais">';

    for (let a = 0; a < listaCanais[indexCanais].length; a++) {

        html += ((listaCanais[indexCanais][a][0].length === undefined) ? '<li class="item-canal"><span class="canal">' + listaCanais[indexCanais][a][0] + '</span>&nbsp;-&nbsp;' + listaCanais[indexCanais][a][1] + '</li>' : '');

        if (a % quantidadeCanaisColuna === 0 && a !== 0) {
            html += '</ul></div><div class="col-12 col-sm-6 col-lg-3"><ul class="item-canais">';
        }
    }
    html += '</ul></div>';
    localCanais.innerHTML = html;

    document.getElementById("nomePlano").innerHTML = ajustarTitulo(plano);
    document.getElementById("quantidadeCanais").innerHTML = quantCanais.toString();


}

$('#refazer').on("click", function () {
    let planosArray = document.querySelectorAll(".planos");
    let resultado = document.querySelector(".resultado");
    let limparLoader = document.querySelector(".buscando-resultado");

    for (let a = 0; a < planosArray.length; a++){
        if(!planosArray[a].classList.contains("ocultar"))
            planosArray[a].classList.add("ocultar");planosArray[a].removeAttribute("style");
    }
    limparLoader.removeAttribute("style");
    resultado.style.display = "none";
    planosArray[0].classList.remove("ocultar");
    localStorage.removeItem("perguntas"); 
    let valor = document.getElementsByClassName("input-radio");
    for (let a = 0; a < valor.length; a++) {
        valor[a].checked = false;
    }
    let valor1 = document.querySelectorAll(".item-vazio");
    for (let a = 0; a < valor1.length; a++) {
        if(valor1[a].classList.contains("item-selecionado")){
            valor1[a].classList.remove("item-selecionado");
        }
    }
    let altura = $(planosArray[0]).offset().top;
    $('html, body').animate({
        scrollTop: altura - 225
    }, 500);
});

$('.check').on('click', function () {
    let pergunta = this.previousElementSibling.name
    let parent = this.parentElement.childNodes[0];
    parent.checked = true;

    let todos = document.querySelectorAll(".check");
    for (let a = 0; a < todos.length; a++) {
        if (todos[a].classList.contains("checked")) {
            todos[a].classList.remove("checked");
        }
    }
    this.classList.add("checked");
    let imagem = document.querySelectorAll(".imagens-teste");
    if (pergunta === "zona") {
        if (parent.value === "2") {
            imagem[1].setAttribute("src", base + "assets/imagens/teste/rural.png");
            this.parentElement.parentElement.parentElement.nextElementSibling.innerHTML = "Fale com nossa Central";
            if (this.parentElement.parentElement.parentElement.nextElementSibling.classList.contains("comecar")) {
                this.parentElement.parentElement.parentElement.nextElementSibling.classList.remove("comecar");
                this.parentElement.parentElement.parentElement.nextElementSibling.classList.add("faleComACentral");
            }
        } else {
            imagem[1].setAttribute("src", base + "assets/imagens/teste/urbana.png");
            this.parentElement.parentElement.parentElement.nextElementSibling.innerHTML = "Avançar";
            if (this.parentElement.parentElement.parentElement.nextElementSibling.classList.contains("faleComACentral")) {
                this.parentElement.parentElement.parentElement.nextElementSibling.classList.add("comecar");
                this.parentElement.parentElement.parentElement.nextElementSibling.classList.remove("faleComACentral");
            }
        }
    } else if (pergunta === "streaming") {
        if (parent.value === "sim") {
            imagem[3].setAttribute("src", base + "assets/imagens/teste/assistir-streaming-sim.png");
        } else {
            imagem[3].setAttribute("src", base + "assets/imagens/teste/assistir-streaming-nao.png");
        }
    } else if (pergunta === "jogar") {
        if (parent.value === "sim") {
            imagem[4].setAttribute("src", base + "assets/imagens/teste/joga-online-sim.png");
            imagem[4].style.width = "100%";
            imagem[4].style.maxWidth = "350px";
        } else {
            imagem[4].setAttribute("src", base + "assets/imagens/teste/joga-online-nao.png");
            imagem[4].style.width = "150px";
            imagem[4].style.maxWidth = "350px";
        }
    }
});

$('.item-vazio').on('click', function () {
    let quantidade = this.getAttribute("data-item");
    let imagem = document.querySelectorAll(".imagens-teste");
    let todos = document.querySelectorAll(".item-vazio");
    for (let a = 0; a < todos.length; a++) {
        todos[a].classList.remove("item-selecionado")
    }
    imagem[2].setAttribute("src", base + "assets/imagens/teste/quantidade-pessoas-" + quantidade + ".png");
    this.classList.add("item-selecionado")
});