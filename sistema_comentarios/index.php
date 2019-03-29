<?php 
try {
    $pdo = new PDO("mysql:dbname=projeto_comentarios;host=localhost","root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET utf8");
} catch (PDOExection $e ) {
    echo 'Erro'.$e->getMessage();
    exit;
}

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
    $message = $_POST['body_msg'];

    $sql = "INSERT INTO messages SET author = :name, body_msg = :message, date_msg = NOW()";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':name', $name);
    $sql->bindValue(':message', $message);
    $sql->execute();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Comentário</title>
    <style>
        .container {
            width: 500px; !important
        }
    </style>
    <!-- Materialize CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'/>
</head>
<body>
    <div class="container">
        <div class="row">
            <h4>Deixe sua mensagem...</h4>
            <form method="POST">
                <div class="input-field col s12">
                    <input type="text" id="name" name="name">
                    <label for="name">Nome</label>   
                </div>
                
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea" name="body_msg"></textarea>
                    <label for="textarea1">Textarea</label>
                </div>

                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light gray blue lighten-1" type="submit" name="action">
                        Enviar Mensagem
                    </button>
                </div>

            </form>
        </div> 
    </div>
    <div class="divider"></div>
    <!-- Show commemts -->
    <div class="container">
        <div class="row">
            <h5>Mensagens Recentes</h5>
            <div class="col s8">

            <?php
            $sql = "SELECT * FROM messages ORDER BY date_msg";
            $sql = $pdo->query($sql);
            if($sql->rowCount() > 0) :
                foreach($sql->fetchAll() as $message): ?>
                        Mensagem de: 
                        <strong>
                            <?php echo $message['author'];?>
                        </strong><br>
                        <small>
                            Comentário adicionado em: 
                            <?php echo date('d/m/Y H:i:s', strtotime($message['date_msg']));?>
                        </small>
                        <blockquote>
                            <?php echo $message['body_msg'];?>
                        </blockquote>
                        <hr>   
            <?php endforeach; endif; ?>  

            </div>
        </div>
    </div>



    <!-- jQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <!-- Scripts Materialize -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
</body>
</html>
