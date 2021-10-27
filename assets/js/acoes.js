let formFiles = document.querySelector("#form_vagas");

if (formFiles != null) {
    formFiles.addEventListener("submit", sendForm, false);
}

function sendForm(evt) {
    evt.preventDefault();

    let dados = evt.target.elements;
    let arquivo = dados['arquivo'].files[0];
    let vaga = dados['vaga'];


    let textoArquivo = document.querySelector(".text-upload");
    let iconeUpload = document.querySelector(".img-upload");

    if (arquivo === undefined) {
        textoArquivo.innerHTML = "Arquivo não anexado.";
        iconeUpload.innerHTML = "error";
        ajustarTextoBox(textoArquivo, iconeUpload);
        return;
    }
    let b = 0;
    for (let a = 0; a < vaga.length; a++) {
        if (vaga[a].checked === true) {
            b = 1;
        }
    }

    if (b === 0) {
        let a = 0, comprimento = vaga.length;
        let limpar = setInterval(function () {
            if (a === comprimento) {
                vaga[vaga.length - 1].checked = false;
                clearInterval(limpar);
            } else {
                vaga[a].checked = true;
            }
            a++;
        }, 125)
        return;
    }

    let formato = arquivo.type;
    let permitidos = ['application/msword', 'application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];

    let resultadoVerificar = permitidos.some(verificando);

    function verificando(value, index, array) {
        return value === formato;
    }

    if (!resultadoVerificar) {
        textoArquivo.innerHTML = "Formato de arquivo inválido";
        iconeUpload.innerHTML = "error_outline";
        ajustarTextoBox(textoArquivo, iconeUpload);
        return;
    }

    let formData, ajax, pct;
    formData = new FormData(evt.target);
    ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function () {
        if (ajax.readyState === 4) {
            let resultado = JSON.parse(this.responseText);
            if (resultado[0] === true) {
                textoArquivo.innerHTML = "Envio realizado com sucesso!";
                iconeUpload.innerHTML = "check_circle";
            } else {
                textoArquivo.innerHTML = "Falha no envio. Tente em outro momento.";
                iconeUpload.innerHTML = "close";
            }
            formFiles.reset();
            ajustarTextoBox(textoArquivo, iconeUpload);
        }
    }

    ajax.upload.addEventListener("progress", function (evt) {
        pct = Math.floor((evt.loaded * 100) / evt.total);
        textoArquivo.innerHTML = "Enviando...";
        iconeUpload.innerHTML = "autorenew";
    }, false);

    ajax.open("POST", base + "email.php", true);
    ajax.send(formData)
}

function ajustarTextoBox(textoArquivo, iconeUpload) {
    setTimeout(function () {
        textoArquivo.innerHTML = "Faça o seu upload aqui. Formatos aceitos: pdf e docx.";
        iconeUpload.innerHTML = "cloud_upload";
    }, 3000)
}

let formFeedback = document.querySelector("#form_feedback");

if (formFeedback != null) {
    formFeedback.addEventListener("submit", enviarFeedBack, false);
}

function enviarFeedBack(e) {
    e.preventDefault();
    let nome, cidade, idade, comentario, feedback;
    feedback = e.target.elements['feedback'].value;
    nome = e.target.elements['nome'].value;
    cidade = e.target.elements['localizacao'].value;
    idade = e.target.elements['idade'].value;
    comentario = e.target.elements['comentario'].value;

    let resultado = document.querySelector(".resultado_feedback");
    let resultado_p = document.querySelector(".resultado_p");
    let resultado_n = document.querySelector(".resultado_n");

    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            let resul = JSON.parse(this.responseText);

            if (resul[0] === true) {
                resultado_p.style.display = "block";
                resultado.style.display = "flex";
                removerNotificacao(resul[0], resultado, resultado_p);
                formFiles.reset();
            } else if (resul[0] === false) {
                resultado_n.style.display = "block";
                resultado.style.display = "flex";
                removerNotificacao(resul[0], resultado, resultado_n);
            }
            setTimeout(function () {
                resultado.classList.add("animate__flipOutX");
            }, 5000);
        }
    };
    xhttp.open("POST", base + "email.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("feedback=feedback&nome=" + nome + "&cidade=" + cidade + "&idade=" + idade + "&comentario=" + comentario);
}

function removerNotificacao(status, resultado, resultado_2) {

    setTimeout(function () {
        if (status === true) {
            resultado_2.style.display = "none";
            resultado.style.display = "none";
        } else if (status === false) {
            resultado_2.style.display = "none";
            resultado.style.display = "none";
        }
        resultado.classList.remove("animate__flipOutX");
    }, 6000)
}

let formDuvidas = document.querySelector("#form_duvidas");

if (formDuvidas != null) {
    formDuvidas.addEventListener("submit", function (e) {
        e.preventDefault();
        let formData = new FormData();
        formData.append("duvidas", "pagina_duvidas");
        formData.append("nome", e.target[0].value);
        formData.append("mensagem", e.target[1].value);

        const URL_TO_FETCH = base + 'email.php';
        fetch(URL_TO_FETCH, {
            method: 'POST', // opcional
            body: formData
        })
            .then(function (response) {
                response.json()
                    .then(function (result) {
                        if(result[0] === true){
                            alert("Dúvida enviada com sucesso!");
                            formDuvidas.reset();
                        }else{
                            alert("Falha no envio da dúvida, tente em outro momento.");
                        }
                    })
            })
            .catch(function (err) { console.error(err); });
    }, false);
}

/* Carregamento lento das imagens home */
const targets = document.querySelectorAll('.temp');
if (targets.length > 0) {
    const lazyload = target => {
        const io = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    const src = img.getAttribute('data-lazy');
                    img.setAttribute("src", src);
                    observer.disconnect();
                }
            })
        })
        io.observe(target);
    }
    targets.forEach(lazyload);
}
/* Fim do Carregamento lento das imagens home */

