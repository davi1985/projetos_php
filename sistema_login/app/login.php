<?php 
/**
 * Arquivo com formulário de login usando Materialize,
 * incluido os arquivos de conexão ao database e verficação de login
 */
session_start();
include '../public/header.php';
include 'config.php';
include 'verify.php';
?>

<!-- Form User Login -->
<center>
    <div class="container">
        <h3 class="indigo-text">Login</h3>

        <div class="z-depth-1 lighten-4 row" style="display: inline-block; padding: 48px 48px 0px 48px; border: 1px solid #EEE;">

            <form method="POST" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="email" name="email" id="email" />
                        <label for="email">Seu Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" name="password" id="password" />
                        <label for="password">Sua Senha</label>
                    </div>
                </div>

                <center>
                    <div class="row">
                        <button type="submit" name="btn_login" class="col s12 btn btn-large waves-effect indigo">Entrar</button>
                    </div>
                </center> 
            </form>

        </div> 
    </div>    
</center> <!-- End Form User Login -->

<?php include '../public/footer.php'; ?>
