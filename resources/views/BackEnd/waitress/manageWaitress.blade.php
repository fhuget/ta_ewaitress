@extends('BackEnd.master')
@section('title')
 Waitress manage
@endsection
@section('content')
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kelola Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Pegawai</th>
                    <th>No. Telepon</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                 @php($i = 1)
                 @foreach($waitresses as $wait)
                 <tr>
                  <td>{{ $i++ }}</td>
                  <td>
                    {{ $wait->waitress_name }}
                  </td>
                  <td>{{ $wait->waitress_code }}</td>
                  <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Opsi
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                          @if($wait->waitress_status == 1)
                            <a class="dropdown-item" href="{{ route('Inactive_wait', ['waitress_id'=>$wait->waitress_id]) }}">Aktif</a>
                          @else
                            <a class="dropdown-item" href=" {{ route('wait_active', ['waitress_id'=>$wait->waitress_id]) }}">Nonaktif</a>
                          @endif

                          <a class="dropdown-item" href="{{ route('wait_delete', ['waitress_id'=>$wait->waitress_id]) }}">Hapus</a>
                        </div>
                           <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{ $wait->waitress_id }}">
                        <i class="fa fa-edit" title="Click for Updated"></i>
                      </a>
                      </div>
                  </td>
                 </tr>

                 <!-- modal start here -->

                 <!-- Modal -->
                      <div class="modal fade" id="edit{{ $wait->waitress_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="{{ route('wait_update') }}" method="post">
                                @csrf
                                <div class="form-group">
                                  <label>waitress Name</label>
                                  <input type="text" class="form-control" name="waitress_name" value="{{ $wait->waitress_name }}">
                                   <input type="hidden" class="form-control" name="waitress_id" value="{{ $wait->waitress_id }}">

                                </div>

                                <label>waitress Name</label>
                                <div class="form-group">
                                  <input type="number" class="form-control" name="waitress_code" placeholder= "No. Telepon" value="{{ $wait->waitress_code }}">
                                </div>
                              </div>

                                <div class="form-group">
                                  <input type="submit" name="btn" class="btn btn-primary" value="Update">
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                                       @endforeach
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection
