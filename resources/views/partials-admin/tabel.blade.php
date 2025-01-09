<div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between text-align-center">
                          <h6 class="m-0 font-weight-bold text-primary">List Video</h6>
                            <a href="/admin/addvideo" class="btn btn-primary">
                            <i class="">Add Video</i>
                          </a>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Video</th>
                                  <th>Judul</th>
                                  <th>Deskripsi</th>
                                  <th class="text-center">aksi</th>
                                </tr>
                              </thead>
                              <tfoot>
                                <tr>
                                  <th>No</th>
                                  <th>Video</th>
                                  <th>Judul</th>
                                  <th>Deskripsi</th>
                                  <th class="text-center">aksi</th>
                                </tr>
                              </tfoot>
                              <tbody>
                              @foreach($dataVideo as $row)
                                <tr>
                                  <td class="text-center">
                                    <!-- <a href="{{ asset('upload') }}/{{ $row['video'] }}" class="btn btn-success" data-toggle="modal" data-target="#detailModal">
                                    <i class="fas fa-video"></i> -->
                                    <video class="card-img-top" style="height: 11rem;" controls>
        <source src="{{ asset('upload') }}/{{ $row['video'] }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
                                  </a>
                                </td>
                                  <td>{{$row['judul']}}</td>
                                  <td>{{$row['deskripsi']}}</td>
                                  <td class="d-flex justify-content-around align-items-center">
                                  <a href="editvideo" class="btn btn-warning btn-circle">
                                    <i class="fas fa-pen"></i>
                                  </a>
                                  <a href="#" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                </div>