<?php
session_start();
require('header.php');
  $numberOne = rand(0, 10);
  $numberTwo = rand(0, 10);

  $_SESSION['secretNumber'] = $numberOne + $numberTwo;
?>



<body>
  <div class="card">
    <h1>Verificador Humano</h1>
    <small>Digite o valor da soma abaixo:</small>
    <form method="POST" action="verify.php">
      <span><?php echo $numberOne;?> + <?php echo $numberTwo ?> =</span>
      <input type="number" name="inputValue">
      <button class="btn">Verificar</button>
    </form>
  </div>


  <?php require('footer.php');
