@extends('layouts.main')

  <div class="wrapper ">
    
    @section('content')
    
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">content_paste</i>
                    </div>
                    <h4 class="card-title">Create {{@$page}}</h4>
                  </div>
                  <div class="card-body ">
                    <form method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="bmd-label-floating">Nama Event</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                      </div>
                      <div class="form-group">
                        <label class="bmd-label-floating">Lokasi</label>
                        <input type="text" class="form-control" name="lokasi" id="lokasi">
                      </div>
                      <div>
                        <h4>Select Image</h4>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                          <div class="fileinput-new thumbnail">
                            <img src="{{url('style/adminty')}}/img/image_placeholder.jpg" alt="...">
                          </div>
                          <div class="fileinput-preview fileinput-exists thumbnail"></div>
                          <div>
                            <span class="btn btn-rose btn-round btn-file">
                              <span class="fileinput-new">Select image</span>
                              <span class="fileinput-exists">Change</span>
                              <input type="file" name="image" id="image"/>
                            </span>
                            <a class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-fill btn-rose">Simpan</button>
                    </form>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>

@endsection