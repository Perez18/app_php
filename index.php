<?php include("db.php") ?>

<?php include("includes/header.php") ?>


<div class="container p-4 ">
    <div class="row">
        <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?=$_SESSION['message_type']; ?> salert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']  ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <?php session_unset();
            } ?>
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">

                        <input type="text" name="titulo" id="titulo" placeholder="Titulo" class="form-control" autofocus>

                    </div>
                    <div class="form-group">
                        <textarea type="text" rows="2" name="descripcion" id="descripcion" placeholder="Descripcion" class="form-control"></textarea>

                    </div>

                    <input type="submit" value="Enviar" name="save_task" class="btn btn-success btn-block">


                </form>
            </div>



        </div>

        <div class="col-md-8">

            <table class="table table-striped table-bordered table-sm">
                <thead class="btn-success">
                <tr>
                    <td>Titulo</td>
                    <td>Descripcion</td>
                    <td>Creacion</td>
                    <td>Opciones</td>
                </tr>

                </thead>
              
                <tbody>
                <?php    
                  $query = "SELECT * FROM clientes";
                  $informacion = mysqli_query($conn,$query);

                  while($row = mysqli_fetch_array($informacion)) { ?>
                           <tr>
                                 <td><?php echo $row['titulo'] ?></td>
                                 <td><?php echo $row['descripcion'] ?></td>
                                 <td><?php echo $row['creacion'] ?></td>
                               <td>
                                 <a  href="edit.php?id=<?php echo $row['id'] ?>"> 
                                  
                                 <i class="fas fa-marker btn btn-danger"></i>

                                </a>

                                 <a  href="delete.php?id=<?php echo $row['id'] ?>"> 
                                  
                                 <i class="far fa-trash-alt btn btn-dark"></i>

                                </a>
                               </td>
                           </tr>

                 
                  <?php }  ?>


                </tbody>

            </table>





        </div>




    </div>




</div>

<?php include("includes/footer.php") ?>