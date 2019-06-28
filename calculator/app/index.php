<?php
require(__DIR__).'/header.php';
require(__DIR__).'/calculate.php';
?>

<center>
    <div class="container">
        <form method="GET">
            <div class="row">
                <div class="col s12">

                    <h3>My Calculator</h3>
                    <div class="input-field">
                        <input type="number" id="numberOne" name="numberOne">
                        <label for="numberOne">Primeiro Número</label>
                    </div>


                    <div class="inout-field">
                        <select name="operation" id="operation">
                            <option value="">Selecione a Operação</option>
                            <option>+</option>
                            <option>-</option>
                            <option>*</option>
                            <option>/</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <input type="number" id="numberTwo" name="numberTwo">
                        <label for="numberTwo">Segundo Número</label>
                    </div>

                </div>
                <input type="submit" value="Resultado" class="btn">
        </form>


        <div class="container">
            <div class="card">
                <h3>
                    <?php
                    echo calculate();
                    ?>
                </h3>
            </div>
        </div>
    </div>
</center>

<?php require(__DIR__).'/footer.php'; ?>
