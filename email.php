<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once("./app/bd-con.php");
require_once("./admin/vendor/autoload.php");

if (isset($_POST['vagas']) && !empty($_POST['vagas']) && $_POST['vagas'] == "vagas") {

	$email = $wpdb->get_results("SELECT * FROM (SELECT dados_values as emailCadastroCurriculos FROM dados_site WHERE dados_name='emailCadastroCurriculos') as emailCadastro, (SELECT dados_values as metodoEnvioEmail FROM dados_site WHERE dados_name='metodoEnvioEmail') as metodoEnvioEmail, (SELECT dados_values as enderecoGmail FROM dados_site WHERE dados_name='enderecoGmail') as enderecoGmail, (SELECT dados_values as senhaGmail FROM dados_site WHERE dados_name='senhaGmail') as senhaGmail",OBJECT);

	/*$email[0]->metodoEnvioEmail espera que seja mail ou phpmailer*/
	if($email[0]->metodoEnvioEmail == "mail") {
		$envio = new App\MailPhp( "{$_POST['vaga']}", "{$email[0]->emailCadastroCurriculos}", $_FILES['arquivo'] );
	}else{
		$mail = new PHPMailer(true);
		try {
			$mail->CharSet = 'UTF-8';
			$mail->SMTPDebug = SMTP::DEBUG_OFF;
			$mail->isSMTP();
			$mail->Host       = 'smtp.gmail.com';
			$mail->SMTPAuth   = true;
			$mail->Username   = $email[0]->enderecoGmail;
			$mail->Password   = $email[0]->senhaGmail;
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port       = 587;
			$mail->setFrom($email[0]->enderecoGmail, 'Site Alternativa');
			$mail->addAddress($email[0]->emailCadastroCurriculos, 'Atendimento Alternativa');
			$mail->addAttachment($_FILES['arquivo']['tmp_name'], $_FILES['arquivo']['name']);
			$mail->isHTML(true);
			$mail->Subject = "Currículo para a vaga de ". $_POST['vaga'];
			$mail->Body    = 'Em anexo segue o currículo enviado a partir do site.';
			$mail->send();
			$envio = true;
		} catch (Exception $e) {
			$envio = false;
		}
	}


	if ($envio) {
		echo json_encode([TRUE]);
	} else {
		echo json_encode([FALSE]);
	}
} elseif (isset($_POST['feedback']) && !empty($_POST['feedback']) && $_POST['feedback'] == "feedback") {

	$nome = htmlspecialchars($_POST['nome']);
	$idade = intval($_POST['idade']);
	$cidade = htmlspecialchars($_POST['cidade']);
	$comentario = htmlspecialchars($_POST['comentario']);

	if (isset($wpdb)) {
		$results = $wpdb->query("INSERT INTO feedback (nome, idade, localizacao, mensagem) VALUES ('$nome','$idade', '$cidade', '$comentario')");
	}


	if (isset($results)) {
		if ($results > 0) {
			echo json_encode([TRUE]);
		}else{
			echo json_encode([FALSE]);
		}
	}else{
		echo json_encode([FALSE]);
	}


} elseif (isset($_POST['comentario']) && !empty($_POST['comentario']) && $_POST['comentario'] == "comentario") {
	$cod_verificador = $_POST['cod_verificador'];

	$a = "SELECT id, cod FROM feedback_validation WHERE cod = '$cod_verificador'";
	$wpdb->get_results($a);
	$num = $wpdb->num_rows;

	if ($num > 0) {
		$id = $_POST['apagar'];
		$a = "DELETE FROM feedback WHERE id = '$id'";

		$wpdb->query($a);

		if ($wpdb->rows_affected > 0) {
			echo json_encode([TRUE]);
		} else {
			echo json_encode([FALSE]);
		}
	} else {
		echo json_encode([FALSE]);
	}
} elseif (isset($_POST['duvidas']) && !empty($_POST['duvidas']) && $_POST['duvidas'] == "pagina_duvidas") {

	$pegarEmail = "SELECT option_value FROM wp_options WHERE option_name='admin_email'";
	if (!empty($banco)) {
		$pegarEmail = $banco->query("$pegarEmail");
	}
	$email = $pegarEmail->fetch_assoc();
	$to = $email['option_value'];
	$subject = "Dúvida enviada pelo site por " . $_POST['nome'];
	$headers = "MIME-Version: 1.0" . PHP_EOL;
	$headers .= "Content-type:text/html;charset=UTF-8" . PHP_EOL;
	$message = "<html lang='pt-br'><title>Dúvida enviada pelo site</title><body><p>Olá meu nome é " . $_POST['nome'] . ", gostaria de tirar a seguinte dúvida:<br> " . $_POST['mensagem'] . "</p></body></html>";
	$headers .= 'From: <site@' . $_SERVER['SERVER_NAME'] . '>' . PHP_EOL;
	$a = mail($to, $subject, $message, $headers);
	if ($a === TRUE) {
		echo json_encode([TRUE]);
	} else {
		echo json_encode([FALSE]);
	}
}

