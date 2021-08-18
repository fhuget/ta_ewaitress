@extends('BackEnd.master')
@section('title')
 Category manage
@endsection
@section('content')
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kelola Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Kategori</th>
                    <th>Kode Perintah</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                 @php($i = 1)
                 @foreach($categories as $cate)
                 <tr>
                  <td>{{ $i++ }}</td>
                  <td>
                    {{ $cate->category_name }}
                  </td>
                  <td>{{ $cate->order_number }}</td>
                  <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Opsi
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                          @if($cate->category_status == 1)
                            <a class="dropdown-item" href="{{ route('Inactive_cate', ['category_id'=>$cate->category_id]) }}">Aktif</a>
                          @else
                            <a class="dropdown-item" href=" {{ route('cate_active', ['category_id'=>$cate->category_id]) }}">Nonaktif</a>
                          @endif

                          <a class="dropdown-item" href="{{ route('cate_delete', ['category_id'=>$cate->category_id]) }}">Hapus</a>
                        </div>
                           <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{ $cate->category_id }}">
                        <i class="fa fa-edit" title="Click for Updated"></i>
                      </a>
                      </div>
                  </td>
                 </tr>

                 <!-- modal start here -->

                 <!-- Modal -->
                      <div class="modal fade" id="edit{{ $cate->category_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="{{ route('cate_update') }}" method="post">
                                @csrf
                                <div class="form-group">
                                  <label>Category Name</label>
                                  <input type="text" class="form-control" name="category_name" value="{{ $cate->category_name }}">
                                   <input type="hidden" class="form-control" name="category_id" value="{{ $cate->category_id }}">

                                </div>

                                <div class="form-group">
                                  <input type="number" class="form-control" name="order_number" placeholder= "Order Number" value="{{ $cate->order_number }}">
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
