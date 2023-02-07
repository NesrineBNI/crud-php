<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Annonce</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="add_process.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
              <label for="exampleInputEmail1" class="form-label">Titre</label>
							  <input type="text" class="form-control" name="titre" required>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
              <label for="formFile" class="form-label">Image</label>
							<input type="file" name="image" class="form-control" accept=".jpg,.jpeg,.png,.svg" required> 
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
              <label for="exampleInputPassword1" class="form-label">Description</label>
								<!-- <input type="text" class="form-control" name=""> -->
								<textarea class="form-control" aria-label="With textarea" name="description" required></textarea>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
              <label for="formFile" class="form-label">Superficie</label>
								<input class="form-control" type="number" name="superficie" min="0" required>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
              <label for="exampleInputPassword1" class="form-label">Addresse</label>
							  <!-- <input type="text" class="form-control" name=""> -->
							  <textarea class="form-control" aria-label="With textarea" name="adresse" required></textarea>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
              <label for="formFile" class="form-label">Montant</label>
								<input class="form-control" type="number" name="montant" min="0" required>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
              <label for="formFile" class="form-label">Date d'annonce</label>
								<input class="form-control" type="date" name="date" required>
              </div>
            </div>
            <div class="col-6">
            <label>Type annonce</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="type" value="location" id="flexRadioDefault1">
								<label class="form-check-label" for="flexRadioDefault1">
								  Location
								</label>
							  </div> 
							  <div class="form-check">
								<input class="form-check-input" type="radio" name="type" value="vente" id="flexRadioDefault2">
								<label class="form-check-label" for="flexRadioDefault2">
								  Vente
								</label>
							</div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" name="submit">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>