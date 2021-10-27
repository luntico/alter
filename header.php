<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Sai, se acessado diretamente
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title("") ?></title>
    <?php wp_head(); ?>

    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/imagens/favicon-32.png" sizes="32x32" />
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/imagens/favicon-76.png" sizes="76x76" />
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/imagens/favicon-144.png" sizes="144x144" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/assets/imagens/favicon-144.png" />
    <script type="module" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.esm.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-69Z2EY1PDC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-69Z2EY1PDC');
    </script>

</head>

<body onload="carregarSlides()">

    <div class="loader animate__animated">
        <div class="c-loader"></div>
    </div>

    <section class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-3 col-3">
                    <a class="link-top-menu" href="https://api.whatsapp.com/send?phone=5575999911685&text=Ol%C3%A1!%20gostaria%20de%20ajuda">
                        <span class="material-icons corIcone">phone_in_talk</span>
                        <span class="texto-top-bar">(75) 9 9991-1685</span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-3">
                    <a class="link-top-menu" href="mailto:atendimento@alternativaprovedor.com.br">
                        <span class="material-icons corIcone">email</span>
                        <span class="texto-top-bar">atendimento@alternativaprovedor.com.br</span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-3 text-right">
                    <a class="link-top-menu" href="https://ixcsoft.alternativaprovedor.com.br/central_assinante_web/login" target="_blank" rel="noreferrer noopener">
                        <span class="material-icons corIcone">people</span>
                        <span class="texto-top-bar">Central do Assinante</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="top-bar-mobile p-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-2 col-2">
                    <a class="link-top-menu" href="https://api.whatsapp.com/send?phone=5575999911685&text=Ol%C3%A1!%20gostaria%20de%20ajuda">
                        <span class="material-icons corIcone">phone_in_talk</span>
                        <span class="texto-top-bar">(75) 9 9991 - 1685</span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <a class="link-top-menu" href="mailto:atendimento@alternativaprovedor.com.br">
                        <span class="material-icons corIcone">email</span>
                        <span class="texto-top-bar">atendimento@alternativaprovedor.com.br</span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 col-2 text-right">
                    <a class="link-top-menu" href="https://ixcsoft.alternativaprovedor.com.br/central_assinante_web/login" target="_blank" rel="noreferrer noopener">
                        <span class="material-icons corIcone">people</span>
                        <span class="texto-top-bar">Central do Assinante</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-area p-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                <a href="<?php echo WP_SITEURL ?>" rel="noreferrer noopener">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/imagens/marca.png" class="marca padding-top-menu">
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-4 text-center padding-top-menu">
                    <nav class="navbar-collapse offcanvas-collapse">
                        <ul class="pai-item-menu">
                            <li class="item-menu"><a class="link-menu" href="#inicio">Início</a></li>
                            <li class="item-menu"><a class="link-menu" href="#planos">Planos</a></li>
                            <li class="item-menu"><a class="link-menu" href="#duvidas">Dúvidas</a></li>
                            <li class="item-menu"><a class="link-menu" href="#sobre">Sobre</a></li>
                        </ul>
                    </nav>

                </div>
                <div class="col-lg-4 col-md-2 col-sm-2 col-4 text-right local-apps">
                    <ion-icon name="apps" class="icones-menu mostrar-menu"></ion-icon>
                    <div class="apps animate__animated animate__fadeInDownBig">
                        <ul class="lista-apps">
                            <li class="item-lista-apps">
                                <a class="link-flutuante" href="https://speedtest.alternativaprovedor.com.br/" target="_blank" rel="noreferrer noopener">
                                    Teste sua velocidade
                                </a>
                            </li>
                            <li class="item-lista-apps">
                                <a class="link-flutuante" href="#central">
                                    App Alternativa
                                </a>
                            </li>
                            <li class="item-lista-apps">
                                <a class="link-flutuante" href="#qualifica">
                                    App Qualifica
                                </a>
                            </li>
                            <li class="item-lista-apps">
                                <a class="link-flutuante" href="https://ixcsoft.alternativaprovedor.com.br/central_assinante_web/login" target="_blank" rel="noreferrer noopener">
                                    Pague com o cartão
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-area-mobile" style="position: initial" data-menu="0">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-6">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/imagens/marca.png" class="marca">
                </div>
                <div class="col-lg-2 col-sm-6 col-6">
                    <div class="icones">
                        <a href="https://api.whatsapp.com/send?phone=5575999911685&text=Ol%C3%A1!%20gostaria%20de%20ajuda">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="menu-mobile animate__animated animate__fadeInDownBig">
        <div class="row text-center icones-mobile">
            <div class="col-3">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="col-3">
                <a href="https://ixcsoft.alternativaprovedor.com.br/central_assinante_web/login" target="_blank" rel="noreferrer noopener">
                    <i class="fas fa-user-friends"></i>
                </a>
            </div>
            <div class="col-3">
                <a href="mailto:atendimento@alternativaprovedor.com.br">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
            <div class="col-3">
                <a href="https://api.whatsapp.com/send?phone=5575999911685&text=Ol%C3%A1!%20gostaria%20de%20ajuda">
                    <i class="fas fa-phone-alt"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="caixa-menu">
                    <p class="titulo-menu-mobile">Menu</p>
                    <ul class="menu-mobile-lista">
                        <li class="item-menu-mobile"><a class="link-menu" href="#inicio">Início</a></li>
                        <li class="item-menu-mobile"><a class="link-menu" href="#planos">Planos</a></li>
                        <li class="item-menu-mobile"><a class="link-menu" href="#duvidas">Dúvidas</a></li>
                        <li class="item-menu-mobile"><a class="link-menu" href="#sobre">Sobre</a></li>
                    </ul>
                    <hr class="linha-menu-mobile">
                    <ul class="menu-mobile-lista">
                        <li class="item-menu-mobile">
                            <a class="item-link-mobile" href="https://speedtest.alternativaprovedor.com.br/" target="_blank" rel="noreferrer noopener">
                                Teste sua velocidade
                            </a>
                        </li>
                        <li class="item-menu-mobile">
                            <a class="item-link-mobile" href="#central">
                                App Alternativa
                            </a>
                        </li>
                        <li class="item-menu-mobile">
                            <a class="item-link-mobile" href="#qualifica">
                                App Qualifica
                            </a>
                        </li>
                        <li class="item-menu-mobile">
                            <a class="item-link-mobile" href="https://ixcsoft.alternativaprovedor.com.br/central_assinante_web/login" target="_blank" rel="noreferrer noopener">
                                Pague com o cartão
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>