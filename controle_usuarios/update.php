<?php 
require 'config.php';

$id = 0;
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = addslashes($_GET['id']);
}

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);

    $sql = "UPDATE usuarios SET name = '$name', email = '$email' WHERE id = '$id'";
    $pdo->query($sql);

    header("Location: index.php");
}

$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0) {
    $dado = $sql->fetch();
} else {
    header("Location: index.php");
}
