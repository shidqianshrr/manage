@extends('layouts.main')

  <div class="wrapper ">
    
    @section('content')
    
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                      <i class="material-icons">assignment</i>
                    </div>
                    <h4 class="card-title ">{{@$page}} Table</h4><br>
                    <a href="{{ url('event/create')}}" class="btn btn-fill btn-rose">Create New </a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Lokasi</th>
                                <th>Gambar</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                          $no = 1;
                        @endphp
                        @foreach($event as $index=>$row)
                            <tr>
                                <td>{{ $index+ $event->firstItem() }}</td>    
                                <td>{{ @$row->nama}}</td>    
                                <td>{{ @$row->lokasi}}</td>
                                <td> <img src="{{ url('files/event/images/' . @$row->image) }}" alt="google.com" width="70px"> </td>
                                <td class="td-actions text-left">    
                                  <a href="{{ url('event/edit/'.$row->id)}}">
                                    <i class="material-icons">edit</i>        
                                  </a>
                                  <a href="{{ url('event/delete/'.$row->id)}}" onclick="return confirm('Are you sure?')">
                                    <i class="material-icons">close</i> 
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
        </div>
      </div>
    </div>

@endsection