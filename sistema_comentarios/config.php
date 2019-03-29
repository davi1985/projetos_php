<?php
try {
    $pdo = new PDO("mysql:dbname=projeto_comentarios;host=localhost","root", "");
    $pdo->exec("SET CHARACTER SET utf8");
    echo "Conectado";
} catch (PDOExection $e ) {
    echo 'Erro'.$e->getMessage();
    exit;
}
