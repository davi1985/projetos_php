<?php 
require '../app/config.php'; 
require 'header.php';

$sql = 'SELECT caract FROM users';
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) :
    $list = $sql->fetchAll();

    $carac = array();

    foreach ($list as $key => $user) :
        $words = explode(",", $user['caract']);
        foreach ($words as $key => $word) :
            $word = trim($word); //trim() remove espaços em branco

            isset($carac[$word]) ? $carac[$word]++ : $carac[$word] = 1;
        endforeach;
    endforeach;
    ?>

    <div class="container center">
        <div class="card blue-grey lighten-4">
            <div class="card-content">
                <span class="card-title"><h3>Nuvem de Tags</h3></span>
                <div class="card-action">
                    <?php 
                        $words = array_keys($carac);
                        $counters = array_values($carac);

                        $bigger = max($counters);

                        $sizes = array(11, 15, 25, 40);

                        for ($i=0; $i < count($words) ; $i++) : 
                            $n = $counters[$i] / $bigger;
                            $h = ceil(($n * count($sizes))); ?>
                            <p style="font-size:<?php echo $sizes[$h-1]."px" ?>">
                                <?php echo $words[$i]."(".$counters[$i].")"; ?>
                            </p>
                        <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif;

require 'footer.php'?>
