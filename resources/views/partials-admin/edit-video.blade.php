<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="judulVideo">Judul : </label>
          <input type="text" class="form-control" id="judulVideo" aria-describedby="judulEdit">
        </div>
        <div class="form-group">
          <label for="deskripsiVideo">Deskripsi : </label>
          <input type="text" class="form-control" id="deskripsiVideo" aria-describedby="judulEdit">
        </div>
        <div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Categories</option>
    <option value="0">User</option>
    <option value="1">Mitra</option>
  </select>
</div>
        <div class="form-group">
          <label for="inputGroupFile01">Upload Video : </label>
        <div class="input-group mb-3">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Upload</button>
      </div>
    </div>
  </div>
</div>

