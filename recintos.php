<?php include("includes/header.php"); ?>
<?php include("db.php") ?>

<div class="jumbotron">

  <table class="table table-striped table-sm">

    <thead>
      <tr class="btn-dark">

        <td>Nombre</td>
        <td>Valor</td>
        <td>Amortizacion(Años)</td>
        <td>Coeficiente</td>
        <td>Valor neto</td>
        <td>Comentario</td>


      </tr>

    </thead>


    <tbody>
      <?php

      $query = "SELECT id,itemtype,value,sink_time,sink_coeff,use_date,comment from glpi_infocoms where itemtype='enclosure' ";
      $resutado = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_assoc($resutado)) { ?> <tr>
          <td><?php echo $row['itemtype']; ?></td>
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






<?php include("includes/footer.php"); ?>