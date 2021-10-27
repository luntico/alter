<?php
if (!defined('ABSPATH')) {
    exit; // Sai, se acessado diretamente
}
get_header();
?>
    <div id="inicio"></div>

<?php

require_once ("slider.php");

?>
    <div class="descubra" id="planos">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="/plano-ideal/" class="btn btn-primary btn-lg btn-block btn-descubra" style="">Plano Ideal</a>
                    <div class="row m-4">
                        <div class="col-4 box">
                            <div class="simbol">
                                <ion-icon name="compass-outline" class="simbolo"></ion-icon>
                            </div>
                            <p class="legendas">Navegue em uma internet pronta para a atender as suas necessidades.</p>
                        </div>
                        <div class="col-4 box">
                            <div class="simbol">
                                <ion-icon name="chatbubble-ellipses-outline" class="simbolo"></ion-icon>
                            </div>

                            <p class="legendas">Promova networkings, webnars para gerar engajamento em seu negócio.</p>
                        </div>
                        <div class="col-4 box">
                            <div class="simbol">
                                <ion-icon name="game-controller-outline" class="simbolo"></ion-icon>
                            </div>
                            <p class="legendas">Jogue os melhores games da atualidade, sem travamentos ou perda de
                                qualidade.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 destaques">
                            <div class="row">
                                <div class="col-2 colunas">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/imagens/marca-alvo.png"
                                         class="marca-alvo">
                                </div>
                                <div class="col-10 colunas">
                                    <p class="destaque">Tudo isso para propor uma melhor experiência do usuário</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 demo-celular-pai">
                    <img class="demo-celular temp" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                         data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/demo-celular.png">
                </div>
            </div>
        </div>
    </div>

    <div class="plano-ideal-mobile">
        <a class="plano-ideal-mobile-link" href="/plano-ideal/">
            Plano Ideal
        </a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 centralizar-contrato">
                <p>
                    <a class="contrato" href="<?php echo get_template_directory_uri() ?>/assets/doc/contrato-comodato.pdf" target="_blank">
                        <span class="material-icons">description</span>
                    Contrato de adesão e comodato
                    </a>
                </p>
            </div>
        </div>
    </div>

    <div class="nossa-historia" id="sobre">
        <div class="container">
            <div class="row titulo-sobre">
                <div class="col-6 tab tab-active text-center" id="tab1">Sobre</div>
                <div class="col-6 tab text-center" id="tab2">Loja Alternativa</div>
            </div>
            <div class="row row-sobre">
                <div class="col-sm-6 col-12 imagem-sobre-pai">
                    <img  src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif" data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/img1-fachada-atual.png"
                         class="temp imagem-sobre animate__animated">
                </div>
                <div class="col-sm-6 col-12">
                    <div class="row">
                        <a href="javascript:void(0)" class="btns btns-selected" data-indice="1">
                            <ion-icon class="icons"
                                      src="<?php echo get_template_directory_uri() ?>/assets/imagens/icons/alternativa-branco.svg"></ion-icon>
                            Alternativa
                        </a>
                        <a href="javascript:void(0)" class="btns" data-indice="2">
                            <ion-icon class="icons"
                                      src="<?php echo get_template_directory_uri() ?>/assets/imagens/icons/lupa-laranja.svg"></ion-icon>
                            Missão
                        </a>
                        <a href="javascript:void(0)" class="btns" data-indice="3">
                            <ion-icon class="icons"
                                      src="<?php echo get_template_directory_uri() ?>/assets/imagens/icons/olho-laranja.svg"></ion-icon>
                            Visão
                        </a>
                        <a href="javascript:void(0)" class="btns" data-indice="4">
                            <ion-icon class="icons"
                                      src="<?php echo get_template_directory_uri() ?>/assets/imagens/icons/valores-laranja.svg"></ion-icon>
                            Valores
                        </a>
                        <div class="textos mostrar">
                            <h2 class="titulo">Nossa história</h2>
                            <p class="descricao">Fundada em 23 de outubro de 2003, a Alternativa está sempre à frente do
                                seu
                                tempo, pois sabe que quando o assunto é tecnologia as novidades aparecem a cada minuto.
                                Possuímos uma rede de Fibra Óptica com mais de 200 KM, interligando as cidades de
                                Paripiranga, Adustina e Fátima a Aracaju-SE, trazendo para a nossa região um serviço de
                                internet de altíssima qualidade. A fibra óptica vai além da rede principal, ela chega
                                até as
                                casas de nossos clientes com planos de hyper velocidades.</p>
                        </div>
                        <div class="textos">
                            <h2 class="titulo">Nossa Missão</h2>
                            <p class="descricao">Nossa razão de ser é propiciar a entrega de produtos e serviço de forma
                                eficiente e segura
                                através da excelência na conexão entre nossos clientes e o mundo da tecnologia.</p>
                        </div>
                        <div class="textos">
                            <h2 class="titulo">Nossa Visão</h2>
                            <p class="descricao">Ser o melhor provedor de internet da região para clientes e
                                colaboradores.</p>
                        </div>
                        <div class="textos">
                            <h2 class="titulo">Nossos Valores</h2>
                            <p class="descricao">Satisfação do cliente; valorizar e respeitar as pessoas; inovação;
                                excelência com
                                simplicidade; ética; honestidade; qualidade dos serviços.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-loja">
                <div class="col-sm-8 col-12">
                    <p class="descricao-loja">Na Alternativa, temos diversos produtos tecnológicos para personalizar e
                        dar um "up" em seu smartphone, tablet ou PC.</p>
                    <p class="confira-loja">Confira:</p>
                </div>
                <div class="col-12">
                    <div class="galeria">
                        <div>
                            <span class="material-icons galeria-voltar">keyboard_arrow_left</span>
                        </div>

                        <img class="temp foto mostrar-desktop mostrar-mobile" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                             data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/galeria/107929131_419994.jpg">

                        <img class="temp foto mostrar-desktop" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                             data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/galeria/806525820_308326.jpg">

                        <img class="temp foto mostrar-desktop" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                             data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/galeria/806527876_304749.jpg">

                        <img class="temp foto" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                             data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/galeria/806529423_304476.jpg">

                        <img class="temp foto" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                             data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/galeria/100007900235_266614.jpg">

                        <img class="temp foto" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                             data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/galeria/100008100986_265732.jpg">

                        <img class="temp foto" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                             data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/galeria/100033100949_84818.jpg">

                        <img class="temp foto" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                             data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/galeria/100038600860_3374.jpg">

                        <img class="temp foto" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                             data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/galeria/100039400408_3481.jpg">
                        <div>
                            <span class="material-icons galeria-avancar">keyboard_arrow_right</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="central" id="central">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-12 text-center">
                    <img class="temp imagem-celular-central" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                         data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/celular.png">
                </div>
                <div class="col-sm-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="titulo">Nossa Central de Atendimento em suas mãos</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <img class="temp" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"  data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/aviso-vencimento.png">
                            <p class="descricao-central">Aviso de vencimento</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <img class="temp" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"  data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/desbloqueio.png">
                            <p class="descricao-central">Desbloqueio por confiança</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <img class="temp" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"  data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/segunda-via.png">
                            <p class="descricao-central">Segunda via de boletos</p>
                        </div>
                        <div class="col-md-3 col-6">
                            <img class="temp" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"  data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/abrir-chamados.png">
                            <p class="descricao-central">Abrir chamados</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="disponibilidade">Disponivel em:</p>
                        </div>
                        <div class="col-12">
                            <a href="https://itunes.apple.com/br/app/alternativa-telecomunica%C3%A7%C3%B5es/id1358311999?mt=8"
                               target="_blank" rel="noreferrer noopener">
                                <img class="temp lojas" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                                     data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/app-store-badge.png">
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=br.com.alternativaprovedor.alternativaapp"
                               target="_blank" rel="noreferrer noopener">
                                <img class="temp lojas" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                                     data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/google-play-badge.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="perguntas-frequentes" id="duvidas">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center titulo-faq">
                    <p>Perguntas frequentes</p>
                    <ion-icon name="arrow-down"></ion-icon>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row faq-box pergunta1">
                        <div class="col-sm-1 col-3 box-item-align">
                            <div class="box-faq-item-fechado">
                                <ion-icon name="add"></ion-icon>
                            </div>
                        </div>
                        <div class="col-sm-11 col-9">
                            <div class="pergunta-faq">
                                Como emitir a 2ª via da minha fatura?
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-11 resposta1" style="display: none">
                            <p>A fatura pode ser obtida através da Central do Assinante, que é o portal de serviço ao
                                assinante, ou, basta entrar em contato com o suporte Alternativa Telecom e solicitar o
                                envio
                                por e-mail. Além disso, poderá baixar o nosso APP no seu celular e acessar sua conta de
                                usuário.</p>
                        </div>
                    </div>
                    <div class="row faq-box pergunta2">
                        <div class="col-sm-1 col-3 box-item-align">
                            <div class="box-faq-item-fechado">
                                <ion-icon name="add"></ion-icon>
                            </div>
                        </div>
                        <div class="col-sm-11 col-9">
                            <div class="pergunta-faq">
                                Eu pago pelo suporte técnico?
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-11 resposta2" style="display: none">
                            <p>Não. O suporte faz parte do serviço Alternativa Telecom, desde que a atividade a ser
                                realizada seja para garantir a continuidade do serviço. Atividades como
                                reconfiguração/troca
                                de roteador que não apresenta problema, mudança de ponto na residência ou correção de
                                problema causado pelo usuário, o que denominamos de visita improdutiva, será cobrado
                                taxa de
                                visita técnica. Os valores destas visitas irão variar conforme a localidade e distância,
                                além de grau de dificuldade do serviço a ser realizado.</p>
                        </div>
                    </div>
                    <div class="row faq-box pergunta3">
                        <div class="col-sm-1 col-3 box-item-align">
                            <div class="box-faq-item-fechado">
                                <ion-icon name="add"></ion-icon>
                            </div>
                        </div>
                        <div class="col-sm-11 col-9">
                            <div class="pergunta-faq">
                                Minha internet está lenta, o que devo fazer?
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-11 resposta3" style="display: none">
                            <p>Verifique se há compartilhamento da internet com muitos usuários, pois pode tanto afetar a velocidade contratada, quanto a eficiência e a rapidez para execução de aplicativos como Facebook, Instagram ou Netflix. Portanto, é necessário que o contratante mantenha total sigilo da sua senha wi-fi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <a href="/perguntas-frequentes/" class="botao-assinar">Mais perguntas</a>
            </div>
        </div>
    </div>

    <div class="qualifique-se" id="qualifica">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12">
                    <p class="titulo-qualifique-se">Qualifique-se para a vida e o mercado de trabalho</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <p class="subtitulo-qualifique-se">Aprenda algo novo todo dia e transforme sua vida.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-12">
                    <img class="imagem-celular-qualifique-se"
                         src="<?php echo get_template_directory_uri() ?>/assets/imagens/qualifique-se-2.png"
                         srcset="<?php echo get_template_directory_uri() ?>/assets/imagens/qualifique-se-1.png">
                </div>
                <div class="col-sm-6 col-12">
                    <div class="row text-left">
                        <div class="col-6">
                            <img class="temp" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"  data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/milhares.png">
                            <p class="descricao-qualifique-se">Milhares de aulas</p>
                        </div>
                        <div class="col-6">
                            <img class="temp" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"  data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/certificados.png">
                            <p class="descricao-qualifique-se">Certificados digitais</p>
                        </div>
                        <div class="col-6">
                            <img class="temp" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"  data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/mba-lideranca.png">
                            <p class="descricao-qualifique-se">MBA em Liderança para o Futuro</p>
                        </div>
                        <div class="col-6">
                            <img class="temp" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"  data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/artigos.png">
                            <p class="descricao-qualifique-se">Artigos e Quizzes</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-12">
                            <p class="apps-qualifique-se">Contrate um dos nossos combos e tenha acesso a um dos melhores APPs de ensino do mercado.</p>
                        </div>
                        <div class="col-12 btn-qualifica">
                            <a class="contrate-agora" href="https://api.whatsapp.com/send?phone=5575998436344"
                               target="_blank" rel="noreferrer noopener">Contrate
                                agora!</a>
                            <a class="contrate-agora" href="https://qualifica.com"
                               target="_blank" rel="noreferrer noopener">Saiba mais</a>
                        </div>
                        <div class="col-12">
                            <p class="apps-disponivel">Disponível em:</p>
                        </div>
                        <div class="col-12">
                            <a href="https://apps.apple.com/br/app/qualifica-cursos/id1143628742" target="_blank"
                               rel="noreferrer noopener">
                                <img class="temp lojas" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                                     data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/app-store-badge.png">
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=br.com.mlearn.qualifica&hl=pt_BR"
                               target="_blank" rel="noreferrer noopener">
                                <img class="temp lojas" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                                     data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/google-play-badge.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="assinantes">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="titulo-assinantes">Nossos assinantes prestando imenso respeito e carinho.</p>
                </div>
                <div class="col-12 text-center">
                    <img class="imagem-aspas" src="<?php echo get_template_directory_uri() ?>/assets/imagens/aspas.png">
                </div>
                <div class="row fundo-assinantes">
                    <span class="material-icons left">keyboard_arrow_left</span>
                    <div class="entalhe-assinantes">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/imagens/area-mouse-slider.png"
                             class="area-entalhe">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/imagens/mouse.png" class="entalhe">
                    </div>
                    <?php
                    global $wpdb;
                    $results = $wpdb->get_results( "SELECT id, nome, idade, localizacao, mensagem, data FROM feedback", OBJECT );

                    if (empty($results) || count($results) < 1) {
                        $a = "CREATE TABLE IF NOT EXISTS `feedback` (
                        `id` int(11) NOT NULL AUTO_INCREMENT,
                        `nome` varchar(100) NOT NULL,
                        `idade` int(11) NOT NULL,
                        `localizacao` varchar(50) NOT NULL,
                        `mensagem` varchar(250) NOT NULL,
                        `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
                        PRIMARY KEY (`id`)
                      ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;";
                        $b = $wpdb->query($a);

                        $a = "REPLACE INTO `feedback` (`id`, `nome`, `idade`, `localizacao`, `mensagem`, `data`) VALUES
                    (1, 'Pedro', 30, 'Cidade1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis enim a congue malesuada. Pellentesque fringilla lacus et diam malesuada, a suscipit lectus cursus. Curabitur pretium porttitor ante et dignissim. Proin non eleifend risus.', '2020-12-11 17:40:10'),
                    (2, 'Lucas', 30, 'Cidade2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis enim a congue malesuada. Pellentesque fringilla lacus et diam malesuada, a suscipit lectus cursus. Curabitur pretium porttitor ante et dignissim. Proin non eleifend risus.', '2020-12-11 17:40:10'),
                    (3, 'Daniel', 30, 'Cidade3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis enim a congue malesuada. Pellentesque fringilla lacus et diam malesuada, a suscipit lectus cursus. Curabitur pretium porttitor ante et dignissim. Proin non eleifend risus.', '2020-12-11 17:40:53'),
                    (4, 'Marcos', 30, 'Cidade4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis enim a congue malesuada. Pellentesque fringilla lacus et diam malesuada, a suscipit lectus cursus. Curabitur pretium porttitor ante et dignissim. Proin non eleifend risus.', '2020-12-11 17:40:53');";
                        $a = $wpdb->query($a);
                        var_dump($a);

                        if ($a > 0) {
                            echo '<script>location.reload(); </script>';
                            exit();
                        }
                    } else {
                        $buscarCom = $wpdb->get_results( "SELECT id, nome, idade, localizacao, mensagem, data FROM feedback", OBJECT);
                        $cont = 1;
                        foreach($buscarCom as $d) :
                            ?>
                            <div class="col-md-4 col-12 assinantes-box<?php
                            if ($cont > 3) {
                                echo " ocultar-assinantes-box ";
                            }

                            if ($cont > 1) {
                                echo " ocultar-assinantes-box-mobile ";
                            }
                            ?>">
                                <div class="row">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/imagens/user.png"
                                         class="imagem-testimonial">
                                    <p class="nome-testimonial"><?php echo $d->nome ?>, <?php echo $d->idade ?>.</p>
                                </div>
                                <p class="texto-testimonial"> <?php echo $d->mensagem ?> </p>
                            </div>
                            <?php
                            $cont++;
                        endforeach;
                    }
                    ?>
                    <span class="material-icons right">keyboard_arrow_right</span>
                    <div class="col-12 feedback">
                        <div>
                            <span>></span>
                            <span class="feedback-texto">Deixe seu Feedback</span>
                        </div>
                        <div class="feedback-grafismo"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form id="form_vagas" method="post" enctype="multipart/form-data" action="email.php" target="_blank"
          rel="noreferrer noopener">
        <input type="hidden" name="vagas" value="vagas">
        <div class="trabalhe-conosco">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="titulo-trabalhe-conosco">Trabalhe conosco</p>
                        <p class="descricao-newsletter">Selecione a vaga disponível e<br> envie seu currículo para
                            análise.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="vagas">
                            <input type="radio" value="Auxiliar de Redes" name="vaga" class="opcao-vaga" id="op1">
                            <label for="op1" class="vaga">Auxiliar de redes</label>
                            <input type="radio" value="Auxiliar de Redes" name="vaga" class="opcao-vaga" id="op2">
                            <label for="op2" class="vaga">Auxiliar de Técnico</label>
                            <input type="radio" value="Auxiliar de Redes" name="vaga" class="opcao-vaga" id="op3">
                            <label for="op3" class="vaga">Suporte de rede</label>
                            <input type="radio" value="Auxiliar de Redes" name="vaga" class="opcao-vaga" id="op4">
                            <label for="op4" class="vaga">Analista</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="file" name="arquivo" class="opcao-vaga" id="arquivo" accept=".pdf, .doc, .docx">
                        <label for="arquivo" class="upload">
                            <div class="conteudo-upload text-center">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="material-icons img-upload">cloud_upload</span>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-upload">Faça o seu upload aqui. Formatos aceitos: pdf e docx.</p>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <div class="row">
                            <button class="form-vagas button2">Enviar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>

    <div class="fale-com-alt">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <p class="titulo-alt">Fale com o Alt_</p>
                    <p class="subtitulo-alt">O assistente virtual da Alternativa</p>
                    <img class="temp qr-code-alt" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif"
                         data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/qr-code.png">
                    <p class="descricao-qr">Aponte a câmera para ler o Qr. code</p>
                </div>
                <div class="col-md-6 col-12">
                    <img class="temp alt-celular" src="<?php echo get_template_directory_uri() ?>/assets/imagens/temporaria-alternativa.gif" data-lazy="<?php echo get_template_directory_uri() ?>/assets/imagens/alt.png">
                </div>
            </div>
        </div>
    </div>

    <div class="mapa">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <p class="titulo-mapa">Escolha a Alternativa mais<br> próxima de você.</p>
                </div>
                <div class="col-md-3 col-12"></div>
                <div class="col-md-6 col-12 box-mapa">
                    <div class="selecionar-cidade">
                        <span class="cidades-lista cidade-ativa"></span>
                        <span class="cidades-lista"></span>
                        <span class="cidades-lista"></span>
                        <ul class="barras-cidades">
                            <li class="lista-barras" data-cidade="0"></li>
                            <li class="lista-barras" data-cidade="1"></li>
                            <li class="lista-barras" data-cidade="2"></li>
                        </ul>
                    </div>
                    <div class="endereco-mapa">
                        <span class="endereco-lista endereco-ativo"></span>
                        <span class="endereco-lista"></span>
                        <span class="endereco-lista"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mostrar-mapa">
                    <div class="mapa-cidades mapa-ativo"></div>
                    <div class="mapa-cidades"></div>
                    <div class="mapa-cidades"></div>
                </div>
            </div>
        </div>
    </div>

<?php

get_footer();

?>