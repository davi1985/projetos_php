<?php
require 'config.php';

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
    $message = $_POST['body_msg'];

    $sql = "INSERT INTO messages SET author = :name, body_msg = :message, date_msg = NOW()";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':name', $name);
    $sql->bindValue(':message', $message);
    $sql->execute();

    header('Location: ../public/index.php');
}
