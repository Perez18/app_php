
<?php

include("db.php");

if (isset($_POST['save_task'])){


     $titulo = $_POST['titulo'];
     $descripcion = $_POST['descripcion'];

     $query = "INSERT INTO clientes(titulo,descripcion) VALUES('$titulo', '$descripcion')";
     $result = mysqli_query($conn, $query);
     if(!$result){

        die("Fallido");
     }

   $_SESSION['message']='Guardado Satisfactoriamente';
   $_SESSION['message_type']='success';
   header("location:index.php"); #reddcionar a la pagina principal
}





?>