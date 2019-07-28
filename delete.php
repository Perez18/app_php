<?php

include("db.php");

   if (isset($_GET['id'])) {
       $id = $_GET['id'];
       $query ="DELETE  FROM clientes WHERE id = $id ";
        $borrado= mysqli_query($conn ,$query);

    if (!$borrado){

        die("fallido");
     }

     $_SESSION['message'] = 'Borrado Correctamente';
     $_SESSION['message_type'] = 'danger';
     header("location:index.php");

    }

 
  





?>