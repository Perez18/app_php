<?php include("includes/header.php"); ?>
<?php include("db.php") ?>

<div class="jumbotron">

  <table class="table table-striped table-sm">

    <thead>
                  <tr class="btn-dark">

                  <td>Nombre</td>
                  <td>Fecha de compra</td>
                  <td>Valor</td>
                  <td>Vida util(Años)</td>
                  <td>Coeficiente</td>
                  <td>fecha de inicio</td>
                  <td>comentario</td>

                  </tr>
    
    </thead>
  
<tbody>
    <?php

    $query="SELECT id,buy_date,itemtype,value,sink_time,sink_coeff,use_date,comment from glpi_infocoms where itemtype='software' ";
    $resutado= mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($resutado)) { ?>
  
             <tr>
                <td><?php echo $row['itemtype'];?></td>
                <td><?php echo $row['buy_date'];?></td>
                 <td><?php echo $row['value'];?></td>
                 <td><?php echo $row['sink_time'];?></td>
                 <td><?php echo $row['sink_coeff'];?></td>
                 <td><?php echo $row['use_date'];?></td>
                 <td><?php echo $row['comment'];?></td>




                   

             </tr>

            <?php } ?>
          

     </tbody>



  </table>

  
 

</div>






<?php include("includes/footer.php"); ?>