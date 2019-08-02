<?php include("db.php") ?>

<?php include("includes/header.php"); ?>

<div class="jumbotron">

       <input type="button" value="Imprimir" name="imprimir" id="imprimir" onclick="window.print();" class="btn btn-danger">
  
    <div class="container m-auto">
       <h1 class="lead ">Valor Total En Activos</h1>
        <table class="table  table-striped">

            <thead>

                <tr>
                    <td>Equipos</td>
                    <?php

                    $query = "SELECT SUM(value) as total  FROM glpi_infocoms WHERE itemtype='computer' or (itemtype='monitor') ";
                    $suma_t = mysqli_query($conn, $query);
                    while ($sm = mysqli_fetch_assoc($suma_t)) { ?>

                        <td><?php echo $sm['total']; ?></td>

                    <?php }  ?>
                </tr>

                <tr>

                    <td> Software</td>
                    <?php

                    $query = "SELECT SUM(value) as total  FROM glpi_infocoms WHERE itemtype='software'";
                    $suma_s = mysqli_query($conn, $query);
                    while ($sm = mysqli_fetch_assoc($suma_s)) { ?>

                        <td><?php echo $sm['total']; ?></td>

                    <?php }  ?>


                </tr>


                <tr>
                    <td>Recintos</td>
                    <?php

                    $query = "SELECT SUM(value) as total  FROM glpi_infocoms WHERE itemtype='enclosure'";
                    $suma_r = mysqli_query($conn, $query);
                    while ($sm = mysqli_fetch_assoc($suma_r)) { ?>

                        <td><?php echo $sm['total']; ?></td>

                    <?php }  ?>
    
                </tr>

                <tr>
                    <td>SUMA TOTAL EN ACTIVOS</td>
                    <?php

                    $query = "SELECT SUM(value) as total  FROM glpi_infocoms";
                    $suma_a = mysqli_query($conn, $query);
                    while ($sm = mysqli_fetch_assoc($suma_a)) { ?>

                        <td><?php echo $sm['total']; ?></td>

                    <?php }  ?>
    
                </tr>


            </thead>



        </table>


    </div>




</div>



<?php include("includes/footer.php"); ?>