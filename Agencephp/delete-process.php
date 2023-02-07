<?php
    require 'connection.php';

    $id = $_GET['id'];

    if(isset($_POST['delete'])) {
    
        $delete = "DELETE FROM annonce WHERE id = '$id'";
        $delete_qry = mysqli_query($conn, $delete);
    
      if (isset($delete_qry)) {
          header("Location: index.php");
 
      }else{
          echo "<h1>erreur</h1>";
      }
       
    
    }
?>