@extends('layouts.main')

  <div class="wrapper ">
    
    @section('content')
    
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                  <i class="material-icons">perm_identity</i>
                </div>
                <h4 class="card-title">My
                  <small class="category"> Profile </small>
                </h4>
              </div>
              <div class="card-body">
                <div class="card-body">
                  <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                    <br>
                    <p class="text-muted">{{auth()->user()->name}}</p>
                </div>
                <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                    <br>
                    <p class="text-muted">johnathan@admin.com</p>
                </div>
                <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                    <br>
                    <p class="text-muted">London</p>
                </div>
                  {{-- <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr>
                          <th>Name</th>
                          <th>Name</th>
                          <th>Name</th>
                          <th>Name</th>
                          <th>Name</th>
                          <th>Name</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{auth()->user()->name}}</td>
                          <td>{{auth()->user()->name}}</td>
                          <td>{{auth()->user()->name}}</td>
                          <td>{{auth()->user()->name}}</td>
                          <td>{{auth()->user()->name}}</td>
                          <td>{{auth()->user()->name}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile">
              <div class="card-avatar">
                <a href="#pablo">
                  <img class="img" src="{{url('style/adminty')}}/img/faces/Shidqi.jpg" />
                </a>
              </div>
              <div class="card-body">
                <h6 class="card-category text-gray">{{auth()->user()->username}}</h6>
                <h4 class="card-title">{{auth()->user()->email}}</h4>
                <p class="card-description">
                  Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                </p>
                <a href="#pablo" class="btn btn-rose btn-round">Edit</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection