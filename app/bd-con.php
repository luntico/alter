<?php

define( 'PRODUCAO', true );
define( 'BLOCK_LOAD', true );

if(PRODUCAO){
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php' );
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php' );
}else{
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/alternativa/wp-config.php' );
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/alternativa/wp-includes/wp-db.php' );
}

$wpdb = new wpdb( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);

$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASSWORD;
$dbname = DB_NAME;
$porta = 3306;

$banco = new mysqli($servername, $username, $password, $dbname, $porta);

if ($banco->connect_error) {
    die("Falha na conexão: " . $banco->connect_error);
}

mysqli_set_charset( $banco, "utf8" );

// usar $banco;