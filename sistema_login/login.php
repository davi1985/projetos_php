<?php 
include 'config.php';

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $password = md5(addslashes($_POST['password']));

    $sql = $db->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");

    if ($sql->rowCount() > 0) {
        $data = $sql->fetch();
        $_SESSION['id'] = $data['id'];

        header("Location: index.php");
    }
}
