@extends('BackEnd.master')
@section('title')

 Foodmenu manage
@endsection
@section('content')

              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kelola Menu Pesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                       <th>No.</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Deskirpsi</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Tanggal Data</th>
                        <th>Opsi</th>
                      </tr>
                      </thead>
                  <tbody>
                 @php($i = 1)
                 @foreach($foodmenus as $food)
                 <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $food->foodmenu_name }}</td>
                  <td>{{ $food->category_name }}</td>
                  <td>{{ $food->foodmenu_detail }}</td>
                  <td><img src="{{ asset($food->foodmenu_image) }}" height="60" width="60" class="img-fluid img-thumbnail"></td>
                  <td>Rp. {{ $food->full_price }}</td>
                  <td>{{ $food->created_at }}</td>
                  <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Opsi
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                          @if($food->foodmenu_status == 1)
                            <a class="dropdown-item" href="{{ route('Inactive_food', ['foodmenu_id'=>$food->foodmenu_id]) }}">Aktif</a>
                          @else
                            <a class="dropdown-item" href=" {{ route('foodmenu_active', ['foodmenu_id'=>$food->foodmenu_id]) }}">Nonaktif</a>
                          @endif

                          <a class="dropdown-item" href="{{ route('food_delete', ['foodmenu_id'=>$food->foodmenu_id]) }}">Hapus</a>
                        </div>
                           <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{ $food->foodmenu_id }}">
                        <i class="fa fa-edit" title="Click for Updated"></i>
                      </a>
                      </div>
                  </td>
                 </tr>

                 <!-- modal start here -->

                 <!-- Modal -->
                      <div class="modal fade" id="edit{{ $food->foodmenu_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Update Food Menu</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="{{ route('food_update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label>Name</label>
                                  <input type="text" class="form-control" name="foodmenu_name" value="{{ $food->foodmenu_name }}">
                                   <input type="hidden" class="form-control" name="foodmenu_id" value="{{ $food->foodmenu_id }}">
                                </div>

                                  <div class="form-group">
                                    <label>Previous Category</label>
                                    <input type="text" class="form-control" value="{{ $food->category_name }}">
                                    <label>Category</label>
                                    <select name="category_id" class="form-control">
                                    <option>----Select Category----</option>
                                    @foreach($categories as $cate)
                                    <option value="{{ $cate-> category_id }}">{{ $cate->category_name }}</option>
                                    @endforeach
                                    </select>
                                  </div>

                                <div class="form-group">
                                  <label>Detail</label>
                                  <textarea type="text" name="foodmenu_detail" class="form-control" rows="5">{{ $food->foodmenu_detail }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Previous Image</label>
                                  <img src="{{ asset($food->foodmenu_image) }}" style="height: 150px; width: 150px; border-radius: 50%">
                                  <input type="file" class="form-control" name="foodmenu_image" accept="image/*">
                                </div>

                                <div class="form-group">
                                  <label>Harga</label>
                                  <input type="text" class="form-control" name="full_price" value="{{ $food->full_price }}">
                                </div>
                                

                                <div class="form-group">
                                  <input type="submit" name="btn" class="btn btn-outline-primary btn-block" value="Update">
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
             <!-- modal end here -->

@endsection
