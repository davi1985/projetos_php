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
    header("Location: login.php");
}
?>

<!-- restricted access content -->
<a href="exit.php"><i class="material-icons">exit</i>Sair</a>

<div class="container">
    <div class="row">
        <div class="col s12 m7"style="width: 320px">
            <h4>Welcome Here...</h4>
            <div class="card">
                <div class="card-image">
                    <img src="img/perfil.png">
                    <span class="card-title">Davi Silva</span>
                </div>

                <div class="card-content">
                    <p>I'm a Analysis Systems and Wed Developer student with emphasis in HTML 5, CSS 3, Javascript and PHP...</p>
                </div>

                <div class="card-action">
                    <a href="https://github.com/davi1985">My Github</a>
                </div>
            </div>
        </div>
    </div>
</div>    

<?php include 'footer.php'; ?>
