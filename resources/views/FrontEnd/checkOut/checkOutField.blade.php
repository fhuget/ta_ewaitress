@extends('FrontEnd.master')
@section('title')
List Pesanan
@endsection

@section('content')


<div class="card p-5 m-4">
  <h3 class="card-header text-center mt-3" style="background-color: lightblue; height: auto; width: auto">Check out</h3>

  <div class="card-body text-white">
  <table class="table table-hover table-striped table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col" class="text-success">Nama Barang</th>
      <th scope="col">Gambar Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Jumlah Barang</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Total</th>
    </tr>
  </thead>

  <tbody>
  @php($i = 1)
  @php($sum=0)
  @foreach($CartFood as $food)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $food->name }}</td>
      <td><img src="{{ asset($food->options->image) }}" style="height: 50px; width: 50px; border-radius: 50%;" class="center"></td>
      <td>Rp. {{ $food->price }}</td>
      <td>{{$food->qty }}</td>
      <td>Rp. {{ $subtotal=$food->price*$food->qty }}</td>
      <input type="hidden" value="{{ $sum = $sum + $subtotal }}">
    </tr>

    @endforeach

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="text-center"> Rp. {{ $sum }}</td>
    </tr>


  </tbody>
</table>
</div>

<div class="row">
  <div class="col-75">
    <div class="container">
      <h3 class="title1" align="center">Form Checkout</h3>
      <br/>
      <hr>
      <form action="{{ route('store_customer') }}" method="post">
        @csrf
        <div class="row">
          <div class="col-50">
            <h3>Registrasi Pelanggan</h3>
            <label for="name"><i class="fa fa-user"></i>Nama</label>
            <input type="text" name="name" placeholder="Masukkan Nama" required="">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" name="email" placeholder="Masukkan Email" required="">
            <label for="Notelp"><i class="fa fa-address-card-o"></i>Nomor telepon</label>
            <input type="text" id="adr" name="phone_no" placeholder="Masukkan No telepon" required="">
            <label for="password"><i class="fa fa-institution"></i> Password </label>
            <input type="password" name="password" placeholder="Masukkan Password" required="">
          </div>
        <input type="submit" value="Submit" class="btn btn-success">
      </form>
    </div>
  </div>

</div>
</div>

</div>

@endsection

<style>
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
