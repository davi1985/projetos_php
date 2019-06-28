<?php 
require 'header.php';
require '../app/config.php';
require '../app/register.php';

?>

<center>
<div class="card login">
    <h4>Novo Usuário</h4>
    <form action="../app/register.php" method="POST">
        <div class="row">
            <div class="input-field">
                <input type="email" name="email" id="email">
                <label for="email">Seu email</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field">
                <input type="password" name="password" id="password">
                <label for="password">Seu Senha</label>
            </div>
        </div>
        <button class="btn" type="submit" name="btn-login">Entrar</button>
    </form>
</div>
</center>

<?php require 'footer.php'?>
