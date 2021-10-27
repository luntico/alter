
$(".lista-barras").click(function (e) {

    let cidadeSelecionada = e.currentTarget.dataset.cidade;

    let listaCidades = document.querySelectorAll(".lista-barras");

    let cidadesLista = document.querySelectorAll(".cidades-lista");

    let enderecoLista = document.querySelectorAll(".endereco-lista");

    let mapaCidades = document.querySelectorAll(".mapa-cidades");

    for(let tamanho = 0; tamanho < listaCidades.length; tamanho++){
        if(cidadesLista[tamanho].classList.contains("cidade-ativa")){
            cidadesLista[tamanho].classList.remove("cidade-ativa")
        }
        if(enderecoLista[tamanho].classList.contains("endereco-ativo")){
            enderecoLista[tamanho].classList.remove("endereco-ativo")
        }
        if(mapaCidades[tamanho].classList.contains("mapa-ativo")){
            mapaCidades[tamanho].classList.remove("mapa-ativo")
        }
    }

    cidadesLista[cidadeSelecionada].classList.add("cidade-ativa")
    enderecoLista[cidadeSelecionada].classList.add("endereco-ativo")
    mapaCidades[cidadeSelecionada].classList.add("mapa-ativo")


})