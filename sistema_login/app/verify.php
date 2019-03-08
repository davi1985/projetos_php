<?php 
/**
 * Arquivo tem a verificação se houve dados informados pelo usuário,
 * se sim, os dados são consultados no database para validação,
 * ao ser validados, o usuário é redirecionado a tela index.php
 */
// Incluindo conexão ao database;
include 'config.php';

// Verificando se o email foi setado e não estã vazio;
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $password = md5(addslashes($_POST['password']));

    // Consulta ao database
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $sql = $db->query($sql);
    // Se houver dados retornados da consulta é armazenado o id na sessão;
    if ($sql->rowCount() > 0) {
        $data = $sql->fetch();
        $_SESSION['id'] = $data['id'];
        // Redirecionando o usuário
        header("Location: ../public/index.php");
    }
}
