<?php

/*
Template Name: Perguntas Frequentes
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Sai, se acessado diretamente
}
get_header();

require_once ("slider.php");
?>
<div class="area-titulo-perguntas-frequentes">
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="titulo-perguntas-frequentes">Perguntas frequentes</h1>
        </div>
    </div>
</div>
</div>

<div class="perguntas-frequentes-pagina">
<div class="container">
    <div class="row center-mobile">
        <div class="col-sm-4 col-12 box-pergunta-frequente ">
            <div class="row">
                <div class="col-12">
                    <i class="material-icons icones-faq">flip_to_front</i>
                </div>
                <div class="col-12">
                    <p class="pergunta-faq-faq">Como emitir a 2ª via da minha fatura? </p>
                </div>
                <div class="col-12">
                    <p class="resposta-faq">A fatura pode ser obtida através da Central do Assinante, que é o portal de serviço ao assinante; pelo contato com o suporte Alternativa Provedor e solicitação do envio por e-mail; ou por nosso APP, acessando sua conta de usuário.
                        .</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-12 box-pergunta-frequente">
            <div class="row">
                <div class="col-12">
                    <i class="material-icons icones-faq">build</i>
                </div>
                <div class="col-12">
                    <p class="pergunta-faq-faq">Eu pago pelo suporte técnico? </p>
                </div>
                <div class="col-12">
                    <p class="resposta-faq">Não. Desde que a atividade a ser realizada seja para garantir a continuidade do serviço. Atividades como reconfiguração/troca de roteador que não apresenta problema, mudança de ponto na residência ou correção de problema causado pelo usuário, o que denominamos de visita improdutiva, será cobrada a taxa de visita técnica. Os valores destas visitas irão variar conforme a localidade e distância, além do grau de dificuldade do serviço a ser realizado.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-12 box-pergunta-frequente">
            <div class="row">
                <div class="col-12">
                    <i class="material-icons icones-faq">portable_wifi_off</i>
                </div>
                <div class="col-12">
                    <p class="pergunta-faq-faq">Minha internet está lenta, o que devo fazer?</p>
                </div>
                <div class="col-12">
                    <p class="resposta-faq">Verifique se há compartilhamento da internet com muitos usuários, pois pode tanto afetar a velocidade contratada, quanto a eficiência e a rapidez para execução de aplicativos como Facebook, Instagram ou Netflix. Portanto, é necessário que o contratante mantenha total sigilo da sua senha wi-fi.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row center-mobile">
        <div class="col-sm-4 col-12 box-pergunta-frequente">
            <div class="row">
                <div class="col-12">
                    <i class="material-icons icones-faq">get_app</i>
                </div>
                <div class="col-12">
                    <p class="pergunta-faq-faq">Como baixar e acessar o APP da Alternativa no celular?</p>
                </div>
                <div class="col-12">
                    <p class="resposta-faq">Para baixar o nosso aplicativo basta abrir a Play Store ou Apple Store, procurar por "Alternativa" e clicar no ícone *A da nossa marca. Aguarde baixar o app em seu dispositivo e acesse a central com seu CPF e senha. Caso não possua, entre em contato por telefone ou Whatsapp e solicite-a.
                        <br>
                        Com o nosso aplicativo você poderá gerar a 2ª via de boleto, solicitar suporte técnico, testar sua conexão de internet e até desbloquear sua conexão, caso tenho esquecido de pagar sua fatura, na opção suporte – solicitar desbloqueio e fazer o pagamento no dia seguinte.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-12 box-pergunta-frequente">
            <div class="row">
                <div class="col-12">
                    <i class="material-icons icones-faq">perm_data_setting</i>
                </div>
                <div class="col-12">
                    <p class="pergunta-faq-faq">O que preciso fazer para contratar os serviços da Alternativa Provedor?</p>
                </div>
                <div class="col-12">
                    <p class="resposta-faq">Entrar em contato com a Central de Atendimento, por telefones, WhatsApp, redes sociais ou deixe seu número na opção “nós ligamos para você”, no canto superior esquerdo do nosso site, que um dos nossos atendentes entrará em contato para efetuar o cadastro e agendar a ativação.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-12 box-pergunta-frequente">
            <div class="row">
                <div class="col-12">
                    <i class="material-icons icones-faq">wifi_tethering</i>
                </div>
                <div class="col-12">
                    <p class="pergunta-faq-faq">O que pode acontecer quando compartilho o meu sinal? </p>
                </div>
                <div class="col-12">
                    <p class="resposta-faq">O compartilhamento da internet pode tanto afetar a velocidade contratada quanto a eficiência e rapidez para execução de aplicativos como Facebook, Instagram ou Netflix. Portanto, é necessário que o contratante mantenha total sigilo da sua senha wi-fi.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row area-deixar-pergunta">
        <div class="col-12">
            <p class="titulo-perguntas-frequentes titulo-deixar">Deixe sua dúvida aqui</p>
        </div>
        <form role="form" class="form" id="form_duvidas">
            <div class="col-sm-8">
                <input type="text" name="nome" placeholder="Nome" class="form-duvida-faq">
            </div>
            <div class="col-sm-8">
                <textarea name="duvida"  class="form-duvida-faq" placeholder="Deixe sua dúvida aqui"></textarea>
            </div>
            <div class="col-sm-8">
                <button type="submit" class="botao-faq">Enviar</button>
            </div>
        </form>
    </div>
</div>
</div>
<?php

get_footer();

?>