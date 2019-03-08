<?php 
/**
 * Arquivo de conexão ao database usando a biblioteca PDO
 */
$dsn = 'mysql:dbname=blog;host=localhost';
$dbuser = 'root';
$dbpass = '';

try {
    $db = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "Erro".$e->getMessage();
}
