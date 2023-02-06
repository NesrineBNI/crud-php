<!-- Modal -->
<div class="modal fade" id="edit<?php echo $rows['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Annonce</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="edit-process.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="">Titre</label>
                <input type="text" class="form-control" name="titre" value="<?php echo $rows['titre'] ?>" required>
              </div>
            </div>
            <div class="col-6">
            <label class="form-label">Image</label>
              <input type="file" class="form-control" name="image">
              <img src="<?=$rows['image']?>" class="rounded-circle" style="width: 70px">
              <input type="text" hidden="hidden" name="image"
                    value="<?=$rows['image']?>" >
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="">Description</label>
                <!-- <input type="text" class="form-control" name="titre" value="<?php echo $rows['titre'] ?>"> -->
                <textarea class="form-control" aria-label="With textarea" name="description" required><?php echo $rows['description'] ?></textarea>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="">Superficie</label>
                <input type="number" class="form-control" min="0" name="superficie" value="<?php echo $rows['superficie'] ?>" required>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="">Addresse</label>
                <textarea class="form-control" aria-label="With textarea" name="adresse" required><?php echo $rows['adresse'] ?></textarea>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="">Montant</label>
                <input type="text" class="form-control" name="montant" value="<?php echo $rows['montant'] ?>" required>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="">Date d'annonce</label>
                <input type="date" class="form-control" name="date" value="<?php echo $rows['date'] ?>" required>
              </div>
            </div>
            <div class="col-6">
                <label for="">Type Annonce</label>
                <div class="form-check">
                <input type="radio" class="form-check-input" name="type" value="location" <?php if($rows['type']=="location"){ echo "checked";}?> required>
                <label class="form-check-label" for="flexRadioDefault1">
								  Location
								</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" name="type" value="vente" <?php if($rows['type']=="vente"){ echo "checked";}?> required>
                <label class="form-check-label" for="flexRadioDefault1">
								  Vente
								</label>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" name="edit">Edit</button>
      </div>
      </form>
    </div>
  </div>
</div>