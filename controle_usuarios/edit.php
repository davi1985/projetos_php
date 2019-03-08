<?php 
require 'header.php';
require 'update.php'; 
?>


<!-- Edit User Form -->
<div class="container">
    <h2>Editar Usuário</h2>
    <a href="index.php">Voltar para página anterior</a>
    <div class="row">

        <form class="col s12" method="POST">
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="name" class="validate"
                        value="<?php echo $dado['name']; ?>">
                    <label for="name">Nome</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" name="email" class="validate"
                        value="<?php echo $dado['email']; ?>">
                    <label for="email">E-mail</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Atualizar</button>
        </form>

    </div>
</div>

<?php require 'footer.php' ?>
