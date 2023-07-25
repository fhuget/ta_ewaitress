@extends('BackEnd.master')
@section('title')

Food Menu Page
@endsection
@section('content')

<div class="container">
	<div class="row">
		<div class="offset-3 col-md-5 my-lg-5">

			@if(Session::get('sms'))
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <strong>{{ Session::get('sms') }}</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			@endif

			<div class="card">
				<div class="card-header text-center">
					Menu Pesanan
				</div>
				<div class="card-body">
					<form action="{{ route('food_save') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
	    					<label>Nama barang</label>
	    					<input type="text" class="form-control" name="foodmenu_name">
  						</div>
  						<div class="form-group">
  							<select name="category_id" class="form-control">
	    					<label>Kategori</label>
	    					<option>----Select Category----</option>
	    					@foreach($categories as $cate)
	    					<option value="{{ $cate-> category_id }}">{{ $cate->category_name }}</option>
	    					@endforeach
	    					</select>
  						</div>
  						<div class="form-group">
	    					<label>Deskripsi</label>
	    					<textarea type="text" class="form-control" name="foodmenu_detail" rows="5"></textarea>
  						</div>
  						<div class="form-group">
	    					<label>Gambar</label>
	    					<input type="file" class="form-control" name="foodmenu_image">
  						</div>

						  <div class="form-group">
									  <label>Harga Barang</label>
  										<input type="text" class="form-control" name="full_price" placeholder="Masukkan Harga" required>
  							</div>

  						<div class="form-group">
	    					<label>Status Barang</label>
	    					<div class="radio">
	    						<input type="radio" name="foodmenu_status" value="1">Aktif
	    						<input type="radio" name="foodmenu_status" value="0">Nonaktif
	    					</div>
  						</div>

  						
  						<button type="submit" name="btn" class="btn btn-outline-primary btn-block">Add Food Menu</button>

					</form>
				</div>
			</div>
	</div>
</div>

@endsection
