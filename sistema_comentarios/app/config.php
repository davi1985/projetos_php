<?php
try {
    $pdo = new PDO("mysql:dbname=projeto_comentarios;host=localhost","root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET utf8");
} catch (PDOExection $e ) {
    echo 'Erro'.$e->getMessage();
    exit;
}
