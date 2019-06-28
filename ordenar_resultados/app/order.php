<?php
require 'config.php';

if (isset($_GET['ordem']) && !empty($_GET['ordem'])) {
    $ordem = addslashes($_GET['ordem']);
    $sql = "SELECT * FROM users ORDER BY ".$ordem;
} else {
    $ordem = '';
    $sql = "SELECT * FROM users";
}
