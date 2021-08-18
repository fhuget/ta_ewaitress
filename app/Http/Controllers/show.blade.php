@extends('FrontEnd.master')
@section('title')
List Pesanan
@endsection

@section('content')


<div class="card p-5 m-4">
  <h3 class="card-header text-center mt-3" style="background-color: lightblue; height: 70px; width: auto">List Pesanan</h3>

  <div class="card-body text-white">
  <table class="table table-hover table-striped table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Hapus</th>
      <th scope="col" class="text-success">Nama Barang</th>
      <th scope="col">Gambar Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Jumlah Barang</th>
      <th scope="col">Total </th>
      <th scope="col">Total Semua</th>
    </tr>
  </thead>

  <tbody>
  @php($i = 1)
  @php($sum=0)
  @foreach($CartFood as $food)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <th scope="row">
        <a href="{{ route('remove_item', ['rowId' => $food->rowId]) }}" type="button" class="btn btn-danger">
          <span aria-hidden="true">Delete</span>
      </th>
      <td>{{ $food->name }}</td>
      <td><img src="{{ asset($food->options->image) }}" style="height: 50px; width: 50px; border-radius: 50%;" class="center"></td>
      <td>Rp. {{ $food->price }}</td>

      <td>
        <form action="{{ route('update_cart') }}" method="post">
        @csrf
        <input type="hidden" name="rowId" value="{{ $food->rowId }}">
        <input type="text" name="qty" value="{{ $food->qty }}" style="width: 50px; height: 25px">
         <input type="submit" name="btn" class="btn btn-success" value="Update">
       </form>
     </td>

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
      <td></td>
      <td class="text-center"> = Rp. {{ $sum }}</td>
    </tr>

    <?php
      Session::put('sum', $sum);
     ?>


  </tbody>
</table>
</div>

@if(Session::get('customer_id', 'delivery_id'))
<div class="col-md-9">
  <a href="{{ url('/checkout/payment') }}" class="btn btn-info" style="float: right">
    <i class="fa fa-shopping-bag"></i>
    Lanjutkan Pembayaran
  </a>
</div>
@elseif(Session::get('customer_id'))
<div class="col-md-9">
  <a href="{{ url('/delivery') }}" class="btn btn-info" style="float: right">
    <i class="fa fa-shopping-bag"></i>
    Lanjutkan Pembayaran
  </a>
</div>
@else
<div class="col-md-9">
  <a href="{{ route('check_out') }}" class="btn btn-info" style="float: right">
    <i class="fa fa-shopping-bag"></i>
    Lanjutkan Pembayaran
  </a>
</div>
@endif

    </div>



@endsection
