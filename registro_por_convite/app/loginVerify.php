<?php
session_start();
require 'config.php';

if(!empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $password = md5($_POST['password']);

    $sql = "SELECT id FROM usuarios WHERE email = '$email' AND password = '$password'";
    $sql = $pdo->query($sql);
    
    if ($sql->rowCount() > 0) {
        $info = $sql->fetch();

        $_SESSION['logged'] = $info['id'];
        header("Location: ../public/index.php");
    }else {
        header("Location: ../public/login.php");
    }

}
