<?php
    require 'connection.php';

  if(isset($_POST['submit'])) {
         // declarier les names des inputs
         
         $montant = $_POST['montant'];
         $type = $_POST['type'];
        

    $insert = "SELECT * FROM annonce WHERE type='$type' AND montant > '$montant' AND montant < '$montant'";
     // lire requete sql pour php  
    $insert_qry = mysqli_query($conn, $insert);

     if (isset($insert_qry)) {
        
         header("Location: index.php");

     }else{
         echo "<h1>erreur</h1>";
     }

    // echo "<script>alert('SUCCESS');window.location.href='index.php'</script>";

  }
?>