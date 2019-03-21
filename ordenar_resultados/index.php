<?php 
require 'config.php';
if (isset($_GET['ordem']) && !empty($_GET['ordem'])) {
    $ordem = addslashes($_GET['ordem']);
    $sql = "SELECT * FROM users ORDER BY ".$ordem;
} else {
    $ordem = '';
    $sql = "SELECT * FROM users";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Projeto Ordenar Resultados</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">      
</head>
<body>
<div class="container">
    <h2>Ordenando Resultados</h2>
<div class="row">
    <form method="GET"> 
        <div class="input-field col s3">
            <select name="ordem" onchange="this.form.submit()" style="width: 200">
            <!-- <select name="ordem" class="custom-select" style="width: 200px" onchange="this.form.submit()"> -->
            <option value="" >Ordenar por:</option>
            <option value="name" <?php echo($ordem=="name")? 'selected="selected"': ''; ?>>Pelo Nome</option>
            <option value="age" <?php echo($ordem=="age")? 'selected=selected':'' ?>>Pelo Idade</option>
        </select>
        </div>
        
    </form>
    <table class="table">
        <thead>
            <th>Nome</th>
            <th>Idade</th>
        </thead>
        <tbody>
            <?php
            $sql = $pdo->query($sql); 
            if ($sql->rowCount() > 0) {
                foreach($sql->fetchAll() as $user): ?>
                    <tr>
                        <td><?php echo $user['name'] ?></td>
                        <td><?php echo $user['age'] ?></td>
                    </tr>
                <?php endforeach;
            }
             ?>
        </tbody>
    </table>
</div>
</div>
    
    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        $(document).ready(function(){
            $('select').formSelect();
        });

    </script>
</body>
</html>
