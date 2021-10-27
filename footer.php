<?php

if (!defined('ABSPATH')) {
    exit; // Sai, se acessado diretamente
}

?><div class="feedback-area animate__animated animate__fadeInLeftBig">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="titulo-feedback">Deixe o seu feedback</p>
                <p class="material-icons icones-feedback">clear</p>
            </div>
            <div class="col-sm-8 col-12">
                <p class="subtitulo-feedback">Pode ser um elogio, uma crítica construtiva afim de desenvolvermos um
                    melhor atendimento e experiência para você!</p>
            </div>
            <form id="form_feedback" class="form" method="post" action="email.php" target="_blank" rel="noreferrer noopener">
                <div class="col-12 animate__animated animate__flipInX resultado_feedback">
                    <div class="resultado_p">
                        <span class="material-icons icons-feedback ">check_circle_outline</span> Seu feedback foi enviado com sucesso! Em breve será mostrado.
                    </div>
                    <div class="resultado_n">
                        <span class="material-icons icons-feedback ">clear</span> Houve um erro no envio do feedback, por favor, tente em outro momento.
                    </div>
                </div>
                <div class="col-sm-8 col-12">
                    <input type="hidden" name="feedback" value="feedback">
                    <input type="text" inputmode="text" name="nome" placeholder="Nome" class="form-feedback" maxlength="50" required>
                    <input type="text" inputmode="text" name="localizacao" placeholder="Cidade" class="form-feedback" maxlength="50" required>
                    <input type="number" inputmode="numeric" name="idade" placeholder="Idade" class="form-feedback" maxlength="2" required>
                    <textarea name="comentario" inputmode="text" placeholder="Deixe seu feedback aqui!" class="form-feedback" maxlength="250" required></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="button-feedback">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>

<div class="btns-flutuantes">
    <a class="icons-fl" href="https://www.facebook.com/alternativaprovedor/" target="_blank" rel="noreferrer noopener"><ion-icon  name="logo-facebook"></ion-icon></a>
    <a class="icons-fl" href="https://www.instagram.com/alternativaprovedor/" target="_blank" rel="noreferrer noopener"><ion-icon name="logo-instagram"></ion-icon></a>
    <a class="icons-fl" href="https://api.whatsapp.com/send?phone=5575999911685&text=Ol%C3%A1!%20gostaria%20de%20ajuda" target="_blank" rel="noreferrer noopener"><ion-icon name="logo-whatsapp"></ion-icon></a>

</div>

<div class="rodape">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <img src="<?php echo get_template_directory_uri() ?>/assets/imagens/marca.png" style="width: 100%; max-width: 200px">
                <p class="texto-rodape">Acompanhe</p>
                <div class="imagens-redes-sociais">
                    <a href="https://www.facebook.com/alternativaprovedor/" target="_blank" rel="noreferrer noopener">
                        <ion-icon class="icons-rodape" name="logo-facebook"></ion-icon>
                    </a>
                    <a href="https://www.instagram.com/alternativaprovedor/" target="_blank" rel="noreferrer noopener">
                        <ion-icon class="icons-rodape" name="logo-instagram"></ion-icon>
                    </a>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="feedback-rodape">Deixe um feedback</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <p class="titulo-menu">Menu</p>
                <ul class="rodape-menu">
                    <li class="rodape-lista"><a class="link-menu-rodape" href="#inicio">Início</a></li>
                    <li class="rodape-lista"><a class="link-menu-rodape" href="#planos">Planos</a></li>
                    <li class="rodape-lista"><a class="link-menu-rodape" href="#duvidas">Dúvidas frequentes</a></li>
                    <li class="rodape-lista"><a class="link-menu-rodape" href="#sobre">Quem somos</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <p class="titulo-menu">Pra você</p>
                <ul class="rodape-menu">

                    <li class="rodape-lista">
                        <a class="link-rodape" href="https://ixcsoft.alternativaprovedor.com.br/central_assinante_web/login" target="_blank" rel="noreferrer noopener">Pague com o cartão</a>
                    </li>
                    <li class="rodape-lista">
                        <a class="link-rodape" href="https://ixcsoft.alternativaprovedor.com.br/central_assinante_web/login" target="_blank" rel="noreferrer noopener">Central do
                            assinante</a>
                    </li>
                    <li class="rodape-lista">
                        <a class="link-rodape" href=" https://speedtest.alternativaprovedor.com.br/" target="_blank" rel="noreferrer noopener">Teste sua velocidade</a>
                    </li>
                    <li class="rodape-lista">
                        <a class="link-rodape" href="#central">App Alternativa</a>
                    </li>
                    <li class="rodape-lista">
                        <a class="link-rodape" href="#qualifica">App Qualifica</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <p class="titulo-menu">Contatos</p>
                <ul class="telefones-rodape">
                    <li class="rodape-lista telefones">
                        <a class="numeros" href="tel:08000751415">
                            <span class="material-icons corIcone">phone_in_talk</span> 0800 075 1415
                        </a>
                    </li>
                    <li class="rodape-lista telefones">
                        <a class="numeros" href="tel:7532792179">
                            <span class="material-icons corIcone">phone_in_talk</span> (75) 3279-2179
                        </a>
                    </li>
                    <li class="rodape-lista telefones">
                        <a class="numeros" href="https://api.whatsapp.com/send?phone=5575999911685&text=Ol%C3%A1!%20gostaria%20de%20ajuda" target="_blank" rel="noreferrer noopener">
                            <ion-icon class="corIconeAzul" name="logo-whatsapp"></ion-icon>
                            (75) 9 9991-1685
                        </a>
                    </li>
                    <li class="rodape-lista telefones">
                        <a class="numeros" href="https://api.whatsapp.com/send?phone=5575998436344&text=Ol%C3%A1%20gostaria%20de%20saber%20mais%20sobre%20alguns%20planos" target="_blank" rel="noreferrer noopener">
                            <span class="material-icons corIconeAzul">add_shopping_cart</span>
                            (75) 9 9843-6344
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-12 margin-endereco">
                <p class="endereco"><strong>Paripiranga - BA</strong>, CEP: 48430-000 | AV. Salustiano Domingues de
                    Santana, 850</p>
            </div>
            <div class="col-sm-6 col-9 margin-endereco">
                <a href="https://itunes.apple.com/br/app/alternativa-telecomunica%C3%A7%C3%B5es/id1358311999?mt=8" target="_blank" rel="noreferrer noopener">
                    <img class="lojas" src="<?php echo get_template_directory_uri() ?>/assets/imagens/app-store-badge.png">
                </a>
                <a href="https://play.google.com/store/apps/details?id=br.com.alternativaprovedor.alternativaapp" target="_blank" rel="noreferrer noopener">
                    <img class="lojas" src="<?php echo get_template_directory_uri() ?>/assets/imagens/google-play-badge.png">
                </a>
            </div>
            <div class="col-sm-1 col-3 margin-endereco">
                <a class="toTop">
                    <img class="seta-subir" src="<?php echo get_template_directory_uri() ?>/assets/imagens/subir-arrow.png">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12 rodape-direitos">
                © Copyright 2020 - Alternativa - Todos os direitos reservados.
            </div>
            <div class="col-sm-6 col-12 rodape-direitos">
                Design por: <a class="rodape-links" href="https://instagram.com/daniel_criano/" target="_blank" rel="noreferrer noopener">Daniel Criano</a> e <a class="rodape-links" href="https://maicnogueira.com/?origem=alternativa_site_footer" target="_blank" rel="noreferrer noopener">Maic Nogueira</a>.
            </div>
        </div>
    </div>
</div>

<?php

echo "<script> const base = '" . get_template_directory_uri() . "/'; </script>" . PHP_EOL;
wp_footer();

?>
</body>

</html>