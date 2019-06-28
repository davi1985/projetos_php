<?php
try {
    $pdo = new PDO('mysql:dbname=projeto_tags;host=localhost;charset=utf8', 'root', '');

} catch (PDOExecption $e) {
    echo "Erro".$e->getMessage();
    exit;
}
