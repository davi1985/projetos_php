<?php 
require 'config.php';

$sql = "SELECT * FROM usuarios";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    foreach($sql->fetchALl() as $usuario) {
        echo "<tr>";
            echo '<td>'.$usuario['name'].'</td>';
            echo '<td>'.$usuario['email'].'</td>';
            echo '<td>
                <a href="edit.php?id='.$usuario['id'].'">
                    <i class="material-icons">edit</i>
                </a>
                <a href="delete.php?id='.$usuario['id'].'">
                    <i class="material-icons">delete</i>
                </a>
                </td>';

        echo "</tr>";
    }
}
