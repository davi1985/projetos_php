<?php 
session_start();
require 'header.php';
require '../app/config.php';
?>

<center>
<div class="card login">
    <h3>LOGIN</h3>
        <form action="../app/loginVerify.php" method="POST">
            <div class="row">
                <div class="input-field">
                    <input type="email" name="email" id="email">
                    <label for="email">Seu Email</label>
                </div>
                <div class="input-field">
                    <input type="password" name="password" id="password">
                    <label for="password">Sua Senha</label>
                </div>

                <button class="btn" type="submit" name="btn-login">Entrar</button>
                <a href="newRegister.php">Cadastrar</a>
            </div>
        </form>
</div>
</center>

<?php include 'footer.php'?>
