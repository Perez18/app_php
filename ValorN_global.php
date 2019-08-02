<?php include("db.php") ?>

<?php include("includes/header.php"); ?>


<div class="jumbotron">

    <h1>Calculo de Amortizacion</h1>

    <form action="" method="POST">

        <div class="form-group row">

            <span class="col-sm-2 lead lead">Monto</span>
            <div>
                <input type="number" name="monto" class="border roundeded">
            </div>
        </div>

        <div class="form-group row ">
            <span class="col-sm-2 lead ">Años(Despreciacion)</span>
            <div>

                <input type="number" name="Anos" class="border roundeded">
            </div>
        </div>
        <div class="form-group row ">
            <span class="col-sm-2 lead ">Coeficiente</span>
            <div>
                <input type="number" name="coeficiente" class="border roundeded">
            </div>
        </div>
        <div class="form-group row ">
            <span class="col-sm-2 lead ">Meses Trasncurrido</span>
            <div>
                <input type="number" name="meses" class="border roundeded">
            </div>
        </div>
        <div>
            <input type="submit" name="enviar" value="Calcular" class="ml-2 mb-4 btn btn-dark">

        </div>
        

        
    </form>


    <?php

    if (isset($_POST["enviar"])) {

        $monto = $_POST['monto'];
        $Años = $_POST['Anos'];
        $coef =  $_POST['coeficiente'];
        $meses = $_POST['meses'];

        /*--------- calculos   ---------*/

        $porc = (100 / $Años)  * 2;
        $porca = ($monto * $porc) / 100;
        $porcm = $porca / 12;
        $vnc = $monto - ($porcm * $meses);
    }

    ?>

    <html>


    <span class="pt-4 mt-4 lead"> Valor Neto Contable:</span>
    <input class="mt-4 form" type="text" value="<?php 
    
    echo $vnc; ?>">





    </html>




    <?php include("includes/footer.php"); ?>