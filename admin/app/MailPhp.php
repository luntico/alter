<?php
namespace App;


class MailPhp {

	public function __construct( $vaga, $destinatario, $arquivo = [] ) {
		$boundary = "XYZ-" . md5(date("dmYis")) . "-ZYX";

		$path = $arquivo['tmp_name'];
		$fileType = $arquivo['type'];
		$fileName = $arquivo['name'];

		// Pegando o conteúdo do arquivo
		$fp = fopen($path, "rb"); // abre o arquivo enviado
		$anexo = fread($fp, filesize($path)); // calcula o tamanho
		$anexo = chunk_split(base64_encode($anexo)); // codifica o anexo em base 64
		fclose($fp);
		$headers = "MIME-Version: 1.0" . PHP_EOL;
		$headers .= 'From: <naoresponda@alternativaprovedor.com.br>' . PHP_EOL;
		$headers .= 'Reply-to: <naoresponda@alternativaprovedor.com.br>' . PHP_EOL;
		$headers .= "Content-Type: multipart/mixed; ";
		$headers .= "boundary=" . $boundary . PHP_EOL;
		$headers .= "$boundary" . PHP_EOL;
		$mensagem = "--$boundary" . PHP_EOL;
		$mensagem .= "Content-Transfer-Encoding: 8bits" . PHP_EOL;
		$mensagem .= "Content-Type: text/html; charset='utf-8'" . PHP_EOL;
		$mensagem .= "Em anexo está o currículo enviado a partir do site." . PHP_EOL;
		$mensagem .= "--$boundary" . PHP_EOL;
		$mensagem .= "Content-Type: " . $fileType . "; name=\"" . $fileName . "\"" . PHP_EOL;
		$mensagem .= "Content-Disposition: attachment; filename=\"" . $fileName . "\"" . PHP_EOL;
		$mensagem .= "Content-Transfer-Encoding: base64" . PHP_EOL;
		$mensagem .= "$anexo" . PHP_EOL;
		$mensagem .= "--$boundary" . PHP_EOL;
		$para = $destinatario;
		$assunto = "Currículo enviado para vaga de " . $vaga;
		return mail($para, $assunto, $mensagem, $headers);
	}

}