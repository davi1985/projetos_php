<?php require 'header.php'; ?>
<?php require 'config.php' ?>

<div class="container">
    <h2>Controle de Usuários</h2>
    <a class="waves-effect waves-light btn" href="add.php">Adicionar novo Usuário</a>
    <table>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>

        <?php require 'get.php';?>

    </table>
</div>

<?php require 'footer.php' ?>
