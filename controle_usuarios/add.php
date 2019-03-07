<?php require 'header.php' ?>

<?php 
require 'config.php';

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $password = md5(addslashes($_POST['password']));

    $sql = "INSERT INTO usuarios SET name = '$name', email = '$email', password = '$password'";
    $pdo->query($sql);

    header("Location: index.php");
}
 ?>


<!-- New User Form -->
<div class="container">
    <h2>Novo Usuário</h2>
    <a href="index.php">Voltar para página anterior</a>
    <div class="row">
        <form class="col s12" method="POST">
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="name" class="validate">
                    <label for="name">Nome</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" name="email" class="validate">
                    <label for="email">E-mail</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" name="password" class="validate">
                    <label for="name">Senha</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar</button>
            
        </form>
    </div>
</div>

<?php require 'footer.php' ?>
