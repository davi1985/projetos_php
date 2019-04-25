<?php
session_start();
require 'config.php';

// Verificação de código de convite
if(!empty($_GET['code'])) {
    $code = addslashes($_GET['code']);

    $sql = "SELECT * FROM usuarios WHERE code = '$code'";
    $sql = $pdo->query($sql);

    if($sql->rowCount() == 0) {
        header("Location: ../public/login.php");
        exit;
    }
}else {
    header("Location: ../public/login.php");
}

// Cadastrando novo usuário do sistema
if (!empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $password = md5($_POST['password']);
    
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $sql = $pdo->query($sql);

    if($sql->rowCount() <= 0) {

        $code = md5(rand(0,999).rand(0,9999));
        $sql = "INSERT INTO usuarios (email, password, code) VALUES ('$email','$password','$code')";
        $sql - $pdo->query($sql); 

        unset($_SESSION['logged']);
        header("Location: ../public/index.php");
        exit;
    }
}
