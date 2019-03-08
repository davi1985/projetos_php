<?php 
require 'config.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = addslashes($_GET['id']);

    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $pdo->query($sql);
    header("Location: ../public/index.php");
} else {
    header("Location: ../public/index.php");
}
