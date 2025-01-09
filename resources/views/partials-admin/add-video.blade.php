<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('admin.upload') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="judulVideo">Judul : </label>
          <input type="text" class="form-control" id="judulVideo" name="judul" aria-describedby="judulEdit">
        </div>
        <div class="form-group">
          <label for="deskripsiVideo">Deskripsi : </label>
          <input type="text" class="form-control" id="deskripsiVideo"  name="deskripsi" aria-describedby="judulEdit">
        </div>
        <div class="form-group mb-3">
      <label for="kategoriVideo">Kategori :</label>
    <select class="custom-select" id="kategori" name="kategori">
    <!-- <option selected>Categories</option> -->
    <option value="0">User</option>
    <option value="1">Mitra</option>
  </select>
</div>
        <div class="form-group">
          <label for="inputGroupFile01">Upload Video : </label>
        <div class="input-group mb-3">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01"  name="video" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            <p>
            @if($errors->has('video'))
              {{$errors->first('video')}}
            @endif
          </p>
          </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
    </div>
  </div>
</div>

