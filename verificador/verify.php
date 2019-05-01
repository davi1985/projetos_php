<?php
session_start();
function isHuman()
{
    if (isset($_POST['inputValue']) && !empty($_POST['inputValue'])) {
        $inputValue = intval($_POST['inputValue']);
        $result = 'You is HUMAN!';
        // $return = header('Location: index.php');
        if ($inputValue === $_SESSION['secretNumber']) {
            return $result;
        }
        return false;
    }
}
require('header.php');
?>

<div class="card">
    <h1>
        <?php
            echo (isHuman() === false) ? header('Location: index.php') : isHuman();
        ?>
    </h1>
    <img src="happy.png" alt="happy" width="32" />
    <img src="happy.png" alt="happy" width="32" />
    <img src="happy.png" alt="happy" width="32" />

</div>
<?php require('footer.php');
