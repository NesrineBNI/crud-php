<?php
    require 'connection.php';

    $id = $_GET['id'];

    if(isset($_POST['edit'])) {
          // declarier les names des inputs
          $titre = $_POST['titre'];
          // $image = $_POST['image'];
          $image = $_FILES['image'];
          $description = $_POST['description'];
          $superficie = $_POST['superficie'];
          $adresse = $_POST['adresse'];
          $montant = $_POST['montant'];
          $date = $_POST['date'];
          $type = $_POST['type'];
 
          $uploads_dir = 'uploads/';
          $name = $_FILES['image']['name'];
          if (is_uploaded_file($_FILES['image']['tmp_name']))
          {       
              //in case you want to move  the file in uploads directory
               move_uploaded_file($_FILES['image']['tmp_name'], $uploads_dir.$name);
                 // echo 'moved file to destination directory';
               
          }
          $img_des = $uploads_dir.$name;

        $update = "UPDATE annonce SET titre = '$titre' , image = '$img_des' , description = '$description' , superficie = '$superficie' , adresse = '$adresse' , montant = '$montant', date = '$date', type = '$type' WHERE id = '$id'";
        $update_qry = mysqli_query($conn, $update);

        if (isset($update_qry)) {
          header("Location: index.php");
 
      }else{
          echo "<h1>erreur</h1>";
      }
      
    
      }
?>