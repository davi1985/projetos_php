<?php
session_start();

unset($_SESSION['logged']);
header('Location: ../public/index.php');
exit;