<?php
try {
    $pdo = new PDO('mysql:dbname=projeto_registro_por_convite;host=localhost','root','');
} catch (PDOExeption $e) {
    echo 'Erro: '.$e->getMessasse();
    exit();
}
