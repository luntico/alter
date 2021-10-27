$('.item-menu a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    mover(this);
});

$('.item-lista-apps a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    mover(this);
});

function mover(e) {
    let id = $(e).attr('href');
    if ($(id).offset() === undefined) {
        let dominio = window.location.host;
        window.location.href = "https://" + dominio + "/" + id;
    }
    let targetOffset = $(id).offset().top;

    $('html, body').animate({
        scrollTop: targetOffset - 150
    }, 500);
}

$(".toTop").click(function () {
    $([document.documentElement, document.body]).delay(250).animate({
        scrollTop: $(".top-bar").offset().top
    }, 1000);
});

$(".btns").click(function () {
    let textoAnterior = document.getElementsByClassName("textos");
    for (let remover0 = 0; remover0 < textoAnterior.length; remover0++) {
        if (textoAnterior[remover0].classList.contains("mostrar")) {
            textoAnterior[remover0].classList.remove("mostrar");
        }
    }
    let botaoAnterior = document.getElementsByClassName("btns");
    for (let remover = 0; remover < botaoAnterior.length; remover++) {
        if (botaoAnterior[remover].classList.contains("btns-selected")) {
            botaoAnterior[remover].classList.remove("btns-selected");
            botaoAnterior[remover].classList.add("btns");
            botaoAnterior[remover].childNodes[1].classList.remove("icons-selected")
            botaoAnterior[remover].childNodes[1].classList.add("icons")
            botaoAnterior[remover].children[0].setAttribute("src", trocarIcone(remover));
        }
    }
    let imagens = [
        '/assets/imagens/img1-fachada-atual.png',
        '/assets/imagens/img1-fachada-atual.png',
        '/assets/imagens/missao.png',
        '/assets/imagens/visao.png',
        '/assets/imagens/valores.png'
    ];

    let imagem = document.querySelector(".imagem-sobre");
    let selecionarNovaImagem = this.getAttribute("data-indice");
    imagem.setAttribute("src", base + imagens[selecionarNovaImagem]);

    this.classList.add("btns-selected");
    this.childNodes[1].classList.remove("icons");
    this.childNodes[1].classList.add("icons-selected");
    let localTexto = this.getAttribute("data-indice") - 1;
    textoAnterior[localTexto].classList.add("mostrar")
    this.children[0].setAttribute("src", addIcone(localTexto));
})

$(".img1").click(function () {
    let a = this.getAttribute("src");
    let b = document.querySelector(".imagem-sobre");
    b.setAttribute("src", a);
    b.classList.add("animate__fadeIn");
    setTimeout(function () {
        b.classList.remove("animate__fadeIn");
    }, 250)
});

$(".img2").click(function () {
    let a = this.getAttribute("src");
    let b = document.querySelector(".imagem-sobre");
    b.setAttribute("src", a);
    b.classList.add("animate__fadeIn");
    setTimeout(function () {
        b.classList.remove("animate__fadeIn");
    }, 250)
});

$(".img3").click(function () {
    let a = this.getAttribute("src");
    let b = document.querySelector(".imagem-sobre");
    b.setAttribute("src", a);
    b.classList.add("animate__fadeIn");
    setTimeout(function () {
        b.classList.remove("animate__fadeIn");
    }, 250)
});

$(".img4").click(function () {
    let a = this.getAttribute("src");
    let b = document.querySelector(".imagem-sobre");
    b.setAttribute("src", a);
    b.classList.add("animate__fadeIn");
    setTimeout(function () {
        b.classList.remove("animate__fadeIn");
    }, 250)
});

function trocarIcone(numero) {
    if (numero === 0) {
        return base + "/assets/imagens/icons/alternativa-laranja.svg";
    } else if (numero === 1) {
        return base + "/assets/imagens/icons/lupa-laranja.svg";
    } else if (numero === 2) {
        return base + "/assets/imagens/icons/olho-laranja.svg";
    } else if (numero === 3) {
        return base + "/assets/imagens/icons/valores-laranja.svg";
    }
}

function addIcone(numero) {
    if (numero === 0) {
        return base + "/assets/imagens/icons/alternativa-branco.svg";
    } else if (numero === 1) {
        return base + "/assets/imagens/icons/lupa-branco.svg";
    } else if (numero === 2) {
        return base + "/assets/imagens/icons/olho-branco.svg";
    } else if (numero === 3) {
        return base + "/assets/imagens/icons/valores-branco.svg";
    }
}

$(".mostrar-menu").click(function () {
    let box = this.nextElementSibling;
    if (box.classList.contains("apps-mostrar")) {
        menuApps(box)
    } else {
        box.classList.add("apps-mostrar");
    }
});

function menuApps(item) {
    item.classList.add("animate__fadeOutUpBig");
    setTimeout(function () {
        item.classList.remove("apps-mostrar", "animate__fadeOutUpBig")
    }, 250)
}

$(".feedback-texto").click(function () {
    abrirFecharFeedback();
});

$(".icones-feedback").click(function () {
    abrirFecharFeedback();
});

$(".feedback-rodape").click(function () {
    abrirFecharFeedback();
});

function abrirFecharFeedback() {
    let mostrarArea = document.querySelector(".feedback-area");
    if (mostrarArea.classList.contains("mostrar-feedback")) {
        mostrarArea.classList.add("animate__fadeOutLeftBig");
        setTimeout(function () {
            mostrarArea.classList.remove("mostrar-feedback", "animate__fadeOutLeftBig")
        }, 250)
    } else {
        mostrarArea.classList.add("mostrar-feedback");
    }
}

$(".barra").click(function () {
    let selecionado = this.getAttribute("data-slide") - 1;
    let slides = document.querySelectorAll(".slide");
    for (let cont = 0; cont <= slides.length; cont++) {
        if (slides[cont].classList.contains("active")) {
            slides[cont].classList.remove("active");
            break;
        }
    }
    slides[selecionado].classList.add("active")
});

let btnRight = document.querySelector(".right");
if (btnRight != null) {
    btnRight.addEventListener("click", function () {
        let box = document.querySelectorAll(".assinantes-box");
        let contem = [], naoContem = [];
        if (screen.width > 600) {
            for (let a = 0; a < box.length; a++) {
                if (box[a].classList.contains("ocultar-assinantes-box")) {
                    contem[contem.length] = a;
                } else {
                    naoContem[naoContem.length] = a;
                }
            }
            for (let a = 0; a < naoContem.length; a++) {
                if (a === 0) {
                    box[naoContem[a]].classList.add("ocultar-assinantes-box");
                }

                if (a === 2) {
                    if (box[naoContem[a] + 1] === undefined) {
                        for (let b = 0; b < box.length; b++) {
                            if (b === 0 || b === 1 || b === 2) {
                                box[b].classList.remove("ocultar-assinantes-box");
                            } else {
                                box[b].classList.add("ocultar-assinantes-box");
                            }
                        }
                    } else {
                        box[naoContem[a] + 1].classList.remove("ocultar-assinantes-box");

                    }

                }
            }
        } else {
            for (let a = 0; a < box.length; a++) {
                if (box[a].classList.contains("ocultar-assinantes-box-mobile")) {
                    contem[contem.length] = a;
                } else {
                    naoContem[naoContem.length] = a;
                }
            }

            for (let a = 0; a < naoContem.length; a++) {
                if (a === 0) {
                    box[naoContem[a]].classList.add("ocultar-assinantes-box-mobile");
                }

                if (box[naoContem[a] + 1] === undefined) {
                    for (let b = 0; b < box.length; b++) {
                        if (b === 0) {
                            box[b].classList.remove("ocultar-assinantes-box-mobile");
                        } else {
                            box[b].classList.add("ocultar-assinantes-box-mobile");
                        }
                    }
                } else {
                    box[naoContem[a] + 1].classList.remove("ocultar-assinantes-box-mobile");
                }
            }
        }
    });
}

let btnLeft = document.querySelector(".left");
if (btnLeft != null) {
    btnLeft.addEventListener("click", function () {
        let box = document.querySelectorAll(".assinantes-box");
        let contem = [], naoContem = [];
        if (screen.width > 600) {
            for (let a = 0; a < box.length; a++) {
                if (box[a].classList.contains("ocultar-assinantes-box")) {
                    contem[contem.length] = a;
                } else {
                    naoContem[naoContem.length] = a;
                }
            }
            if (box[naoContem[0] - 1] === undefined) {
                for (let c = 0; c < naoContem.length; c++) {
                    box[naoContem[c]].classList.add("ocultar-assinantes-box");
                }
                let novoTodos = document.querySelectorAll(".assinantes-box");
                let b = 0;
                for (let a = novoTodos.length - 1; a > 0; a--) {
                    if (b < 3) {
                        novoTodos[a].classList.remove("ocultar-assinantes-box");
                    }
                    b++;
                }
            } else {
                for (let loopNaoContem = 0; loopNaoContem < naoContem.length; loopNaoContem++) {
                    for (let loopTudo = 0; loopTudo < box.length; loopTudo++) {
                        if (naoContem[0] === loopTudo) {
                            box[(loopTudo - 1)].classList.remove("ocultar-assinantes-box")
                        }
                    }
                }
                box[naoContem[naoContem.length - 1]].classList.add("ocultar-assinantes-box")
            }
            let con = [], naoCon = [];
            let novoBox = document.querySelectorAll(".assinantes-box");
            for (let a = 0; a < novoBox.length; a++) {
                if (novoBox[a].classList.contains("ocultar-assinantes-box")) {
                    con[con.length] = a;
                } else {
                    naoCon[naoCon.length] = a;
                }
            }
        } else {
            for (let a = 0; a < box.length; a++) {
                if (box[a].classList.contains("ocultar-assinantes-box-mobile")) {
                    contem[contem.length] = a;
                } else {
                    naoContem[naoContem.length] = a;
                }
            }
            if (box[naoContem[0] - 1] === undefined) {
                box[naoContem[0]].classList.add("ocultar-assinantes-box-mobile");
                box[contem[contem.length - 1]].classList.remove("ocultar-assinantes-box-mobile");
            } else {
                box[naoContem[0] - 1].classList.remove("ocultar-assinantes-box-mobile");
                box[naoContem[0]].classList.add("ocultar-assinantes-box-mobile");
            }
        }
    });
}

let allpage = document.getElementsByTagName("body");
allpage[0].addEventListener("click", function () {
    let verificar = document.getElementsByClassName("apps");
    if (verificar[0].classList.contains("apps-mostrar")) {
        menuApps(verificar[0])
    }
    let removerCanais = document.getElementById("areaCanais");
    if(removerCanais !== undefined  && removerCanais !== null){
        if(removerCanais.style.display === "flex"){
            this.style.overflowY = "visible";
            removerCanais.classList.add("animate__fadeOutRightBig");
            setTimeout(()=>{
                removerCanais.style.display = "none";
                removerCanais.classList.remove("animate__fadeOutRightBig");
            },250)
        }
    }
}, true);

window.onscroll = function () {
    let display = window.screen.width;
    let currentScrollPos = window.pageYOffset;
    if (display > 600) {
        let menuArea = document.querySelector(".menu-area");
        let slider = document.querySelector(".slider");
        let plano = document.querySelector(".plano-ideal");
        let base;

        if (slider != null) {
            base = slider;
        } else {
            base = plano;
        }

        if (currentScrollPos > 65) {
            menuArea.style.position = "fixed";
            menuArea.style.width = "100%";
            menuArea.style.zIndex = "4000";
            menuArea.style.top = "0";

            base.style.marginTop = "120px";
        } else {
            menuArea.style.position = "relative";
            menuArea.style.top = "0";
            base.style.marginTop = "0";
        }
    } else {

        let menuArea = document.querySelector(".menu-area-mobile");

        let slider = document.querySelector(".slider");
        let plano = document.querySelector(".plano-ideal");
        let base;

        if (slider != null) {
            base = slider;
        } else {
            base = plano;
        }

        if (currentScrollPos > 1) {
            menuArea.style.position = "fixed";
            menuArea.style.width = "100%";
            menuArea.style.overflow = "hidden";
            menuArea.style.zIndex = "4000";
            menuArea.style.top = "0";


            base.style.marginTop = "80px";
        } else {
            menuArea.style.position = "initial";
            menuArea.style.top = "0";
            base.style.marginTop = "0";
        }

    }
    if (currentScrollPos > 6000) {
        let verMapa = document.querySelector(".mapa");
        if (verMapa !== undefined) {
            if (!verMapa.classList.contains("mapaCarregado")) {
                iframes();
                verMapa.classList.add("mapaCarregado")
            }
        }
    }

}

function carregarSlides() {
    let loader = document.querySelector(".loader");
    let body = document.querySelector("body");
    loader.classList.add("animate__fadeOut");
    setTimeout(function () {
        body.style.overflowY = "visible"
        loader.remove();
    }, 250)

    document.querySelector("div[vw]").style.zIndex = "4999";


    setInterval(function () {
        let slides = document.querySelectorAll(".slide"), proximo;
        if (slides.length > 0) {
            for (let cont = 0; cont < slides.length; cont++) {
                if (slides[cont].classList.contains("active")) {
                    slides[cont].classList.add("animate__fadeOutLeft");
                    setTimeout(function () {
                        slides[cont].classList.remove("active", "animate__fadeOutLeft");
                    }, 500);

                    proximo = cont + 1;
                    if (slides[proximo] === undefined) {
                        slides[0].classList.add("active");
                    } else {
                        slides[proximo].classList.add("active");
                    }
                    break;
                }
            }
        }
    }, 10000);

    localStorage.removeItem("perguntas");

    zerarInputs()

    function zerarInputs() {
        let valor = document.getElementsByClassName("input-radio");
        for (let a = 0; a < valor.length; a++) {
            valor[a].checked = false;
        }
    }

    let btns = document.querySelector(".btns-flutuantes");
    if (btns !== undefined) {
        setTimeout(function () {
            btns.style.right = "0";
        }, 10000);
    }


}


function iframes() {
    let listaCidades = ['Paripiranga - BA', 'Adustina - BA', 'Fátima - BA'];
    let listaEnderecos = ['Av. Salustiano Domingos de Santana, 850, 48430-000.', 'Rua Antonio Miguel de Menezes, 149, CASA, Centro, 48435-000.', 'Av. Sete de Setembro, 133-251, 48415-000.'];
    let listaMapas = [
        '<iframe class="iframe-mapa" frameborder="0" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1165.6110872306028!2d-37.85984722347105!3d-10.685588509350076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc2e684c45b44d99!2sAlternativa%20Telecom!5e0!3m2!1spt-BR!2sbr!4v1605118741572!5m2!1spt-BR!2sbr" style="border:0; allowfullscreen=" width="100%"" aria-hidden="false" tabindex="0"></iframe>',
        '<iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.547612042083!2d-38.114573185055875!3d-10.536252518507988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x70e30e4d343a719%3A0x2d654013bc954a7c!2sR.%20Ant%C3%B4nio%20Miguel%20de%20Menezes%2C%20149%2C%20Adustina%20-%20BA%2C%2048435-000!5e0!3m2!1spt-BR!2sbr!4v1607614674586!5m2!1spt-BR!2sbr" style="border:0;" tabindex="0" width="100%"></iframe>',
        '<iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1165.9554120755201!2d-38.21195607819159!3d-10.595514771399037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b6790025285c543!2sAlternativa%20Inform%C3%A1tica%20Provedor!5e0!3m2!1spt-BR!2sbr!4v1607614731263!5m2!1spt-BR!2sbr" style="border:0;" tabindex="0" width="100%"></iframe>'
    ];
    let inserirCidades = document.getElementsByClassName("cidades-lista");
    let inserirEndereco = document.getElementsByClassName("endereco-lista");
    let inserirMapas = document.getElementsByClassName("mapa-cidades");

    for (let a = 0; a < listaCidades.length; a++) {
        if (inserirCidades[a] !== undefined) {
            inserirCidades[a].innerHTML = listaCidades[a];
            inserirEndereco[a].innerHTML = listaEnderecos[a];
            inserirMapas[a].innerHTML = listaMapas[a];
        }
    }
}

let tab1 = document.getElementById("tab1");
let tab2 = document.getElementById("tab2");

if (tab1 != null && tab2 != null) {

    let sobre = document.querySelector(".row-sobre");
    let loja = document.querySelector(".row-loja");

    let tabs = document.getElementsByClassName("tab");
    tab1.addEventListener("click", function () {
        if (!tab1.classList.contains("tab-active")) {
            for (let a = 0; a < tabs.length; a++) {
                if (tabs[a].classList.contains("tab-active")) {
                    tabs[a].classList.remove("tab-active")
                }
            }
            tab1.classList.add("tab-active");

            sobre.style.display = "flex";
            loja.style.display = "none";
        }

    }, false);

    tab2.addEventListener("click", function () {
        if (!tab2.classList.contains("tab-active")) {
            for (let a = 0; a < tabs.length; a++) {
                if (tabs[a].classList.contains("tab-active")) {
                    tabs[a].classList.remove("tab-active")
                }
            }
            tab2.classList.add("tab-active");

            sobre.style.display = "none";
            loja.style.display = "flex";

        }
    }, false);
}

let galeria_voltar = document.querySelector(".galeria-voltar");
if (galeria_voltar != null) {
    galeria_voltar.addEventListener("click", function () {
        let todasAsFotos = document.getElementsByClassName("foto");
        let contador = 3, proximo, anterior;
        if (screen.width > 600) {
            for (let a = 0; a < todasAsFotos.length; a++) {
                if (todasAsFotos[a].classList.contains("mostrar-desktop")) {
                    contador--;
                    if (contador === 0) {
                        proximo = a - 3;
                        if (todasAsFotos[proximo] === undefined) {
                            for (let b = 0; b < todasAsFotos.length; b++) {
                                if (todasAsFotos[b].classList.contains("mostrar-desktop")) {
                                    todasAsFotos[b].classList.remove("mostrar-desktop");
                                }
                            }
                            todasAsFotos[todasAsFotos.length - 3].classList.add("mostrar-desktop")
                            todasAsFotos[todasAsFotos.length - 2].classList.add("mostrar-desktop")
                            todasAsFotos[todasAsFotos.length - 1].classList.add("mostrar-desktop")
                        } else {
                            todasAsFotos[proximo].classList.add("mostrar-desktop")
                            todasAsFotos[a].classList.remove("mostrar-desktop")
                        }
                    }
                }
            }
        } else {
            for (let a = 0; a < todasAsFotos.length; a++) {
                if (todasAsFotos[a].classList.contains("mostrar-mobile")) {
                    anterior = a - 1;

                    if (todasAsFotos[anterior] === undefined) {
                        todasAsFotos[todasAsFotos.length - 1].classList.add("mostrar-mobile");
                    } else {
                        todasAsFotos[anterior].classList.add("mostrar-mobile");
                    }
                    todasAsFotos[a].classList.remove("mostrar-mobile");
                    break;
                }
            }
        }
    }, true);
}

let galeria_avancar = document.querySelector(".galeria-avancar");
if (galeria_avancar != null) {
    galeria_avancar.addEventListener("click", function () {
        let todasAsFotos = document.getElementsByClassName("foto");
        let contador = 0, proximo, anterior;
        if (screen.width > 600) {
            for (let a = 0; a < todasAsFotos.length; a++) {
                if (todasAsFotos[a].classList.contains("mostrar-desktop")) {
                    contador++;
                    if (contador === 3) {
                        anterior = a - 2;
                        proximo = a + 1;
                        if (todasAsFotos[proximo] === undefined) {
                            for (let b = 0; b < todasAsFotos.length; b++) {
                                if (todasAsFotos[b].classList.contains("mostrar-desktop")) {
                                    todasAsFotos[b].classList.remove("mostrar-desktop");
                                }
                            }
                            todasAsFotos[0].classList.add("mostrar-desktop");
                            todasAsFotos[1].classList.add("mostrar-desktop");
                            todasAsFotos[2].classList.add("mostrar-desktop");
                        } else {
                            todasAsFotos[anterior].classList.remove("mostrar-desktop");
                            todasAsFotos[proximo].classList.add("mostrar-desktop");
                        }
                    }
                }
            }
        } else {
            for (let a = 0; a < todasAsFotos.length; a++) {
                if (todasAsFotos[a].classList.contains("mostrar-mobile")) {
                    todasAsFotos[a].classList.remove("mostrar-mobile")
                    proximo = a + 1;
                    if (todasAsFotos[proximo] === undefined) {
                        todasAsFotos[0].classList.add("mostrar-mobile");
                    } else {
                        todasAsFotos[proximo].classList.add("mostrar-mobile");
                    }
                    break;
                }
            }
        }
    }, true);
}

$("#verPacotesCanais").on("click", function () {
    let listaCanais = document.getElementById("listaCanais");
    let body = document.querySelector("body");
    listaCanais.style.display = "flex";
    listaCanais.style.overflow = "auto";
    setTimeout(function () {
        body.style.overflowY = "hidden";
    }, 500)
});

$(".icones-fechar-pacotes").on("click", function () {
    let listaCanais = document.getElementById("listaCanais");
    let body = document.querySelector("body");
    body.style.overflowY = "auto";
    listaCanais.classList.add("animate__fadeOutLeftBig")

    setTimeout(function () {
        listaCanais.style.display = "none";
        listaCanais.classList.remove("animate__fadeOutLeftBig")
    }, 500)
});

let acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
