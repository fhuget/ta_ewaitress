@extends('BackEnd.master')
@section('title')

Waitress Page
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
					Tambah Pegawai
				</div>
				<div class="card-body">
					<form action="{{ route('wait_save') }}" method="post">
						@csrf
						<div class="form-group">
	    					<label>Nama Pegawai</label>
	    					<input type="text" class="form-control" name="waitress_name">
  						</div>
  						<div class="form-group">
	    					<label>Status Pegawai</label>
	    					<div class="radio">
	    						<input type="radio" name="waitress_status" value="1">Aktif
	    						<input type="radio" name="waitress_status" value="0">Nonaktif
	    					</div>
  						</div>
  						<button type="submit" name="btn" class="btn btn-outline-primary btn-block">Tambah Pegawai</button>

					</form>
				</div>
			</div>
	</div>
</div>

@endsection
