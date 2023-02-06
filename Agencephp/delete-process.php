<?php
    include 'connection.php';

    $id = $_GET['id'];

    if(isset($_POST['delete'])) {
    
        $delete = "DELETE FROM annonce WHERE id = '$id'";
        $delete_qry = mysqli_query($conn, $delete);
    
        // echo "<script>alert('DELETED');window.location.href='../index.php'</script>";
        header("Location: index.php");
    
      }
?>