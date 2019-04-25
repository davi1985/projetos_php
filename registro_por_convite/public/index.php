<?php 
session_start();
require '../app/config.php';
if (empty($_SESSION['logged'])) {
    header('Location: login.php');
}
$email = '';
$code = '';
$sql = "SELECT email, code FROM usuarios WHERE id = '".addslashes($_SESSION['logged'])."'";

$sql = $pdo->query($sql);

if($sql->rowCount() > 0) {
    $info = $sql->fetch();
    $email = $info['email'];
    $code = $info['code'];
}

?>

<?php include 'header.php';?>
    <!-- content -->
    <h3>Área interna do Sistema</h3>

    <div class="card">
        <a href="../app/exit.php">
            <i class="material-icons">exit_to_app</i>
        </a><br>
        <b>Email logado: </b><i><?php echo $email?></i><br>

        <h5>Link para novo cadastro:</h5>
        <blockquote> http://localhost/php_bonieky/php_intermediario/projetos/registro_por_convite/public/newRegister.php?code=<?php echo $code?>
        </blockquote>
    </div>
    

<?php include 'footer.php'?>
    
