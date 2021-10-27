<?php
/*
Template Name: Plano Ideal
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Sai, se acessado diretamente
}

get_header();

?>
    <form>
        <div class="plano-ideal">
            <div class="container">
                <div class="row animate__animated animate__fadeInRight planos" data-estado="comecar">
                    <div class="col-sm-6 col-12 area-teste">
                        <p class="titulo-plano">Não sabe qual plano escolher? Deixa que a gente te ajuda!</p>
                        <button type="button" class="botao-plano comecar">Começar</button>
                    </div>
                    <div class="col-sm-6 col-12 area-img-teste">
                        <img class="imagens-teste"
                             src="<?php echo get_template_directory_uri() ?>/assets/imagens/teste/comecar.png">
                    </div>
                </div>
                <div class="row animate__animated animate__fadeInRight planos ocultar" data-estado="pergunta1">
                    <div class="col-sm-6 col-12 area-img-teste">
                        <img class="imagens-teste"
                             src="<?php echo get_template_directory_uri() ?>/assets/imagens/teste/rural.png">
                    </div>
                    <div class="col-sm-6 col-12 area-teste">
                        <p class="titulo-plano">1 - Reside na zona rural ou urbana?</p>
                        <div class="row">
                            <div class="col-6 alinhar-centro">
                                <label><input type="radio" name="zona" value="1" class="input-radio">Zona Urbana
                                    <span class="check"></span></label>
                            </div>
                            <div class="col-6 alinhar-centro">
                                <label><input type="radio" name="zona" value="2" class="input-radio">Zona Rural
                                    <span class="check"></span></label>
                            </div>
                        </div>

                        <button type="button" class="botao-plano comecar">Avançar</button>
                    </div>
                </div>
                <div class="row animate__animated animate__fadeInRight planos ocultar" data-estado="pergunta2">
                    <div class="col-sm-6 col-12 area-img-teste">
                        <img class="imagens-teste"
                             src="<?php echo get_template_directory_uri() ?>/assets/imagens/teste/quantidade-pessoas-1.png">
                    </div>
                    <div class="col-sm-6 col-12 area-teste">
                        <p class="titulo-plano">2 - Quantas pessoas utilizam internet na sua casa?</p>
                        <div class="row">
                            <div class="col-3 text-center remover-m-p">Até <strong>2</strong> pessoas
                                <div class="item-vazio" data-item="1">1-2</div>
                                <div class="linha"></div>
                            </div>
                            <div class="col-3 text-center remover-m-p">Até <strong>4</strong> pessoas
                                <div class="item-vazio" data-item="2">3-4</div>
                                <div class="linha"></div>
                            </div>
                            <div class="col-3 text-center remover-m-p">Até <strong>6</strong> pessoas
                                <div class="item-vazio" data-item="3">5-6</div>
                                <div class="linha"></div>
                            </div>
                            <div class="col-3 text-center remover-m-p"><strong>+6</strong> pessoas
                                <div class="item-vazio" data-item="4">6+</div>
                                <div class="linha"></div>
                            </div>
                        </div>
                        <button type="button" class="botao-plano comecar">Avançar</button>
                    </div>
                </div>
                <div class="row animate__animated animate__fadeInRight planos ocultar" data-estado="pergunta3">
                    <div class="col-sm-6 col-12 area-img-teste">
                        <img class="imagens-teste"
                             src="<?php echo get_template_directory_uri() ?>/assets/imagens/teste/assistir-streaming-sim.png">
                    </div>
                    <div class="col-sm-6 col-12 area-teste">
                        <p class="titulo-plano">3 - Utiliza serviços de streaming de filmes e séries? (Netflix, Hulu,
                            Amazon
                            Prime...)</p>

                        <div class="row">
                            <div class="col-6 alinhar-centro">
                                <label><input type="radio" name="streaming" value="sim" class="input-radio">Sim
                                    <span class="check"></span></label>
                            </div>
                            <div class="col-6 alinhar-centro">
                                <label><input type="radio" name="streaming" value="nao" class="input-radio">Não
                                    <span class="check"></span></label>
                            </div>
                        </div>
                        <button type="button" class="botao-plano comecar">Avançar</button>
                    </div>
                </div>
                <div class="row animate__animated animate__fadeInRight planos ocultar" data-estado="pergunta4">
                    <div class="col-sm-6 col-12 area-img-teste">
                        <img class="imagens-teste"
                             src="<?php echo get_template_directory_uri() ?>/assets/imagens/teste/joga-online-sim.png">
                    </div>
                    <div class="col-sm-6 col-12 area-teste">
                        <p class="titulo-plano">4 - Utiliza da internet para baixar jogos e/ou jogá-los online?</p>

                        <div class="row">
                            <div class="col-6 alinhar-centro">
                                <label><input type="radio" name="jogar" value="sim" class="input-radio">Sim
                                    <span class="check"></span></label>
                            </div>
                            <div class="col-6 alinhar-centro">
                                <label><input type="radio" name="jogar" value="nao" class="input-radio">Não
                                    <span class="check"></span></label>
                            </div>
                        </div>

                        <button type="button" class="botao-plano comecar">Avançar</button>
                    </div>
                </div>
                <div class="row animate__animated animate__zoomIn planos ocultar">
                    <div class="col-12 buscando-resultado">
                        <div class="c-loader"></div>
                    </div>
                </div>
                <div class="row animate__animated animate__zoomIn resultado ocultar">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 remove-padding">
                                <p class="titulo-plano">Seu plano</p>
                                <p class="subtitulo-plano">Agora selecione o seu combo e aproveite!</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div id="resultadoFinal" class="row"></div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <p class="refazer">Quer refazer o teste? <span id="refazer">Clique aqui<span>!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div id="areaCanais" class="feedback-area animate__animated animate__fadeInRightBig">
        <div class="container-fluid">
            <div class="row header-area-canais">
                <div class="col-12 col-sm-6 imagem-esquerda-header-canais">
                    <img class="imagem-header-it" src="<?php echo get_template_directory_uri() ?>/assets/imagens/powered-azul.png">
                </div>
                <div class="col-12 col-sm-6 imagem-direita-header-canais">
                    <img class="imagem-header-canais" src="<?php echo get_template_directory_uri() ?>/assets/imagens/filmes-min.png">
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 area-titulo-plano">
                        <p class="nome-plano">Combo <span id="nomePlano"></span></p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 area-titulo-plano">
                        <div class="box-canais">
                            <div class="m1">
                                <span class="material-icons icone-tv">tv</span>
                            </div>
                            <div class="m2">
                                <span id="quantidadeCanais"></span> Canais digitais
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="titulo-lista">Lista de canais disponíveis:
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="listaCanais" class="row"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 centralizar">
                        <a href="#" target="_blank" class="link-contratar" rel="noreferrer noopener">Assine já!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
/*
global $wpdb;
$results = $wpdb->get_results( "SELECT tipo, nome, valor, valorBruto, download, appQualifica, appQualificaPreco, alternativaTv, alternativaTvPreco FROM dados_planos", ARRAY_A );
echo json_encode($results)
*/
get_footer();