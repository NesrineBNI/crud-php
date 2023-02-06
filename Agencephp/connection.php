<?php
    
      // function connexion a la base de donner ("servername","username","password", "name database")
      $conn = mysqli_connect("localhost","root","","crud");

      // verifie la connexion
      if($conn->connect_error){
          die('not connect : ' .$con->connect_error);
      }
?>