<?php
/**
 * Aquivo verfifica se o id do usuário está salvo na sessão, se não, o mesmo
 * é redirecionado a tela de login_view.php
 */
session_start();
include 'header.php';

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    // echo "<p>Usuário Logado...</p>";
} else {
    header("Location: ../app/login.php");
}
?>

<!-- restricted access content -->
<a href="../app/exit.php" class="waves-effect waves-light btn blue lighten-1"><i class="material-icons right">exit_to_app</i>Sair</a>

<div class="container">
    <h4>Welcome Here...</h4>
</div>    

<?php include 'footer.php'; ?>
