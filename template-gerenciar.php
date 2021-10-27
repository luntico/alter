<?php

/*
Template Name: Página de Gerenciamento
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Sai, se acessado diretamente
}

if ( is_user_logged_in() ) {
	global $wpdb;

	$a = $wpdb->get_results( "SELECT cod, data, usuarioId FROM feedback_validation" );
	/** @var TYPE_NAME $banco */

	if ( isset( $a->error ) || count($a) === 0 ) {
		$a = "CREATE TABLE feedback_validation (
	id int(11) NOT NULL,
	cod varchar(50) CHARACTER SET utf8mb4 NOT NULL,
	data timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	usuarioId int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

		$wpdb->query( $a );

		$a = "ALTER TABLE `feedback_validation` ADD PRIMARY KEY (`id`);";
		$wpdb->query( $a );

		$a = "ALTER TABLE `feedback_validation` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";
		$wpdb->query( $a );


		if ( $a ) {
			header( "Refresh=0" );
		}
	}

	?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title><?php wp_title( "" ) ?></title>

        <link rel="stylesheet"
              href="<?php echo get_template_directory_uri() ?>/admin/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet"
              href="<?php echo get_template_directory_uri() ?>/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/admin/dist/css/adminlte.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <style>
            .input-group-text:hover{
                cursor: pointer;
            }
        </style>
    </head>

    <body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-light navbar-white">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/wp-admin/" class="nav-link">Voltar</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Gerenciar Website</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="pill" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="comentarios-tab" data-toggle="pill" href="#comentarios" role="tab" aria-controls="comentarios" aria-selected="false">Comentários</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="custom-content-above-tabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div style="width: 100%;height: 20px"></div>
                                   <div class="container">
                                       <form id="updateHome">
                                           <?php
                                           $dados = $wpdb->get_results("SELECT * FROM (SELECT dados_values as emailCadastroCurriculos FROM dados_site WHERE dados_name='emailCadastroCurriculos') as emailCadastro, (SELECT dados_values as metodoEnvioEmail FROM dados_site WHERE dados_name='metodoEnvioEmail') as metodoEnvioEmail, (SELECT dados_values as enderecoGmail FROM dados_site WHERE dados_name='enderecoGmail') as enderecoGmail, (SELECT dados_values as senhaGmail FROM dados_site WHERE dados_name='senhaGmail') as senhaGmail");
                                           ?>
                                           <div class="row">
                                               <div class="col-12 col-sm-6">
                                                   <div class="form-group">
                                                       <label for="metodoEnvio">Selecione método de envio</label>
                                                       <select class="selecionarMetodo form-control" name="metodoEnvioEmail" required>
                                                           <option value="" <?php echo empty($dados[0]->metodoEnvioEmail) ? "selected" : ""; ?> disabled>Selecione um método</option>
                                                           <option value="mail" <?php echo $dados[0]->metodoEnvioEmail == "mail" ? "selected" : ""; ?>>Mail (função nativa PHP)</option>
                                                           <option value="phpmailer" <?php echo $dados[0]->metodoEnvioEmail == "phpmailer" ? "selected" : ""; ?>>PhpMailer (biblioteca)</option>
                                                       </select>
                                                   </div>
                                               </div>
                                           </div>
                                           <div id="cadastroEmailSenhaGmail" class="row" style="display: <?php echo $dados[0]->metodoEnvioEmail == "phpmailer" ? "flex" : "none"; ?>">
                                               <div class="col-12 col-sm-6">
                                                   <div class="form-group">
                                                       <label for="enderecoGmail">Endereço de e-mail Gmail</label>
                                                       <input type="email" class="form-control" id="enderecoGmail" placeholder="Digite uma endereço de email gmail" name="enderecoGmail" value="<?php echo $dados[0]->enderecoGmail; ?>">
                                                   </div>
                                               </div>
                                               <div class="col-12 col-sm-6">
                                                   <div class="form-group">
                                                       <label for="senhaGmail">Senha do Gmail</label>
                                                       <div class="input-group mb-3">
                                                           <input id="senhaGmail" type="<?php echo !empty($dados[0]->senhaGmail) ? "password" : "text" ; ?>" class="form-control" name="senhaGmail"  value="<?php echo $dados[0]->senhaGmail; ?>">
                                                           <div class="input-group-append">
                                                               <span class="input-group-text"><i class="fas fa-eye"></i></span>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="row">
                                               <div class="col-12 col-sm-6">
                                                   <div class="form-group">
                                                       <label for="emailCadastroCurriculos">E-mail para receber currículos</label>
                                                       <input type="email" class="form-control" id="emailCadastroCurriculos" placeholder="Digite uma endereço email" name="emailCadastroCurriculos" value="<?php echo $dados[0]->emailCadastroCurriculos; ?>">
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="row">
                                               <div class="col-12 col-sm-3">
                                                   <button type="submit" class="btn btn-block btn-primary btn-flat">Atualizar</button>
                                               </div>
                                           </div>
                                       </form>
                                   </div>
                                </div>
                                <div class="tab-pane fade" id="comentarios" role="tabpanel" aria-labelledby="comentarios-tab">

                                    <?php
                                    $cod_verificador_ = md5( time() . "alternativaprovedor" );
                                    $i                = "INSERT INTO feedback_validation (cod, usuarioId) VALUES ('$cod_verificador_', '$current_user->ID')";
                                    $wpdb->query( $i );
                                    ?>
                                    <input type="hidden" name="cod_verificador" id="cod_verificador"
                                           value="<?php if ( ! empty( $cod_verificador_ ) ) {
                                               echo $cod_verificador_;
                                           } ?>">
                                    <table class="table table-striped projects">
                                        <thead>
                                        <tr>
                                            <th style="width: 1%">
                                                id
                                            </th>
                                            <th style="width: 20%">
                                                Nome
                                            </th>
                                            <th style="width: 5%">
                                                Idade
                                            </th>
                                            <th style="width: 10%">
                                                Cidade
                                            </th>
                                            <th style="width: 35%">
                                                Mensagem
                                            </th>
                                            <th class="text-center" style="width: 10%">
                                                Ação
                                            </th>
                                        </tr>
                                        </thead>
                                        <?php
                                        $a = "SELECT id, nome, idade, localizacao, mensagem FROM feedback";
                                        $a = $wpdb->get_results( $a );

                                        if ( count($a) > 0 ) {
                                            foreach ( $a as $b ) :
                                                ?>
                                                <tr>
                                                <td> <?php echo $b->id ?> </td>
                                                <td> <?php echo $b->nome ?> </td>
                                                <td> <?php echo $b->idade ?> </td>
                                                <td> <?php echo $b->localizacao ?> </td>
                                                <td> <?php echo $b->mensagem ?> </td>
                                                <td class="project-actions text-right">
                                                    <button type="button" class="btn btn-danger btn-sm apagar"
                                                            data-id="<?php echo $b->id ?>">
                                                        <i class="fas fa-trash"></i>
                                                        Apagar
                                                    </button>
                                                </td>
                                                </tr><?php
                                            endforeach;
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="6"> Não existe feedbacks. </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="main-footer">
                <strong>Copyright &copy; 2020 <a href="https://maicnogueira.com/?o=painel_alternativa">Maic Nogueira</a>.</strong>
                Todos os direitos reservados.
            </footer>
        </div>
    </div>

	<?php echo "<script> const base = '" . get_template_directory_uri() . "'; </script>" . PHP_EOL; ?>
    <script src="<?php echo get_template_directory_uri() ?>/admin/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/admin/dist/js/adminlte.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/confirmacoes.js"></script>
    </body>

    </html>

	<?php
} else {
	header( "location: / " );
}
