<?php 
try {
    $pdo = new PDO("mysql:dbname=projeto_ordenar;host=localhost", 'root','');
} catch (PDOException $e) {
    echo "Erro".$e->getMessage();
    exit;
}
