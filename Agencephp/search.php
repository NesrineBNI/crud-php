<?php
    require 'connection.php';

    if(isset($_POST['submit'])) {
      // declarier les names des inputs
      $type = $_POST['type'];
      $min = $_POST['min'];
      $max = $_POST['max'];

      $insert = "SELECT * FROM `annonce` WHERE `montant` >= $min AND `montant` <= $max AND `type` LIKE '$type'";
      $get_data_qry = mysqli_query($conn, $insert);
      $num = 1;
      while($row = mysqli_fetch_array($get_data_qry)) {
?>
  
  <div class="card">
      <img class="card-img-top" src="<?php echo $row['image'] ?>" alt="Card image cap" height="250">
      <div class="card-body">
      <h5 class="card-title"><?php echo $row['titre'] ?></h5>
      <p class="card-text"><?php echo $row['montant'] ?> DH</p>
      <p class="card-text"><small class="text-muted"><?php echo $row['superficie'] ?> m</small></p>
      <p class="card-text"><?php echo $row['type'] ?></p>
      <p class="card-text"><?php echo $row['description'] ?></p>
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $row['id'] ?>">
      Edit
      </button>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $row['id'] ?>">
      Delete
      </button>
      </div>
  </div>

<?php
      include 'delete-modal.php';
      include 'edit-modal.php';
      $num++; 
      }
  }else{
    echo "<h1>aucun </h1>";
  }
?>

