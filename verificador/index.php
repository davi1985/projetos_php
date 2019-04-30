<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Verificador de Humanos</title>
</head>
<body>
  <?php
  $numberOn = rand(0,10);
  $numberTwo = rand(0, 10);
  $result = $numberOn + $numberTwo;

  function isHuman($result){
    if(isset($_GET['inputValue']) && !empty($_GET['inputValue'])) {
      $inputValue = intval($_GET['inputValue']);

      return ($inputValue == $result) ? "You is Human :)" : "You is not Human :(";
      
    }
  }
  
  ?>
  
  <form action="">
    <? echo $numberOn;?> + <? echo $numberTwo?> = 
    <input type="number" name="inputValue">
    <button>Verificar</button>
  </form>

  <h3><?php echo isHuman($result); ?></h3>
  
  
  <?
  echo $numberOn;
  echo "<br/>";
  echo $numberTwo;
  echo "<br/>";
echo $result;  
  ?>
</body>
</html>