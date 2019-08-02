<?php include("db.php") ?>



<?php include("includes/header.php"); ?>

<div class="jumbotron">

    <div class="row">

         <div class="col-md-7"></div>

                  <table class="table table-striped table-sm">
 
                         <thead>
                <tr class="btn-dark">

                    <td>Nombre</td>
                    <td>Fecha de compra</td>
                    <td>Valor</td>
                    <td>Vida Util(Años)</td>
                    <td>Coeficiente %</td>
                    <td>fecha de inicio</td>
                    <td>Comentario</td>
                    <td>Ubicacion</td>
                  

                    <td></td>

                </tr>

            </thead>
            <tbody>
                <?php
      
                $query = "SELECT id, buy_date,itemtype,value,sink_time,sink_coeff,use_date,comment from glpi_infocoms where itemtype='computer' or (itemtype='Monitor') ";
                $resut = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($resut)) { ?>

                    <tr>

                        <td><?php echo $row['itemtype']; ?></td>
                        <td><?php echo $row['buy_date']; ?></td>
                        <td><?php echo $row['value']; ?></td>
                        <td><?php echo $row['sink_time']; ?></td>
                        <td><?php echo $row['sink_coeff']; ?></td>
                        <td><?php echo $row['use_date']; ?></td>
                        <td><?php echo $row['comment']; ?></td>

                    </tr>

                <?php } ?>

              
             

            </tbody>
        </table>



    </div>

    <div class="col-md-5">

        <table class="table-sm table-striped table-bordered">
            <?php
            $query = "SELECT SUM(value) as total, itemtype  FROM glpi_infocoms WHERE itemtype='computer' GROUP BY(itemtype);";
            $suma_eq = mysqli_query($conn, $query);
            while ($sm = mysqli_fetch_assoc($suma_eq)) { ?>

                <tr>
                    <td><?php echo $sm['itemtype']; ?></td>
                    <td><?php echo $sm['total']; ?></td>

                </tr>

            <?php }  ?>
            <?php
            $query = "SELECT SUM(value) as total, itemtype  FROM glpi_infocoms WHERE itemtype='monitor' GROUP BY(itemtype);";
            $suma_m = mysqli_query($conn, $query);
            while ($sm = mysqli_fetch_assoc($suma_m)) { ?>
                <tr>
                    <td><?php echo $sm['itemtype']; ?></td>
                    <td><?php echo $sm['total']; ?></td>
                </tr>

            <?php }  ?>
        </table>


    </div>



</div>


<?php include("includes/footer.php"); ?>