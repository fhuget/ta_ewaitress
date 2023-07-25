@extends('BackEnd.master')
@section('title')

View || Invoice
@endsection
@section('content')
<div class="offset-2 col-md-8">
    <div class="card my-5">

              <div class="card-header">
                <h3 class="card-title">Detail Pesanan</h3><br>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h1 class="text-center text-muted">Info Pelanggan dalam pesanan</h1>
                <table id="example1" class="table table-bordered table-striped">
                      <tr>
                         <th>Nama</th>
                         <td>{{ $customer->name }}</td>
                      </tr>
                      <tr>
                         <th>Email</th>
                         <td>{{ $customer->email }}</td>
                      </tr>
                      <tr>
                         <th>No. Telp</th>
                         <td>{{ $customer->phone_no }}</td>
                      </tr>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
             <!-- modal end here -->
             <div class="card my-5">

                       <div class="card-header">
                         <h3 class="card-title">Detail Pesanan</h3><br>
                       </div>
                       <!-- /.card-header -->
                       <div class="card-body">
                         <h1 class="text-center text-muted">Info Pengantaran dalam pesanan</h1>
                         <table id="example1" class="table table-bordered table-striped">
                               <tr>
                                  <th>Nama</th>
                                  <td>{{ $delivery->name }}</td>
                               </tr>
                               <tr>
                                  <th>Email</th>
                                  <td>{{ $delivery->email }}</td>
                               </tr>
                               <tr>
                                  <th>No. Telp</th>
                                  <td>{{ $delivery->phone_no }}</td>
                               </tr>
                               <tr>
                                  <th>No. Meja</th>
                                  <td>{{ $delivery->nomeja }}</td>
                               </tr>

                         </table>
                       </div>
                       <!-- /.card-body -->
                     </div>
                     <div class="card my-5">

                               <div class="card-header">
                                 <h3 class="card-title">Detail Pesanan</h3><br>
                               </div>
                               <!-- /.card-header -->
                               <div class="card-body">
                                 <h1 class="text-center text-muted">Detail pesanan dalam pesanan</h1>
                                 <table id="example1" class="table table-bordered table-striped">
                                       <tr>
                                          <th>No.</th>
                                          <td>{{ $order->order_id }}</td>
                                       </tr>
                                       <tr>
                                          <th>Jumlah pesanan</th>
                                          <td>{{ $order->order_total }}</td>
                                       </tr>
                                       <tr>
                                          <th>Status Pesanan</th>
                                          <td>{{ $order->order_status }}</td>
                                       </tr>

                                 </table>
                               </div>
                               <!-- /.card-body -->
                             </div>

                             <div class="card my-5">

                                       <div class="card-header">
                                         <h3 class="card-title">Detail Pesanan</h3><br>
                                       </div>
                                       <!-- /.card-header -->
                                       <div class="card-body">
                                         <h1 class="text-center text-muted">Info Pengiriman dalam Pesanan</h1>
                                         <table id="example1" class="table table-bordered table-striped">
                                               <tr>
                                                  <th>Metode Pembayaran</th>
                                                  <td>{{ $payment->payment_type }}</td>
                                               </tr>
                                               <tr>
                                                  <th>Status Pembayaran</th>
                                                  <td>{{ $payment->payment_status }}</td>
                                               </tr>




                                         </table>
                                       </div>
                                       <!-- /.card-body -->
                                     </div>
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
                                              <th>ID</th>
                                               <th>Nama Barang</th>
                                               <th>Harga Barang</th>
                                               <th>Jumlah Barang</th>
                                               <th>Total Harga</th>
                                             </tr>
                                             </thead>

                                         <tbody>
                                           @php($i = 1)
                                           @foreach($order_details as $orderD)
                                                <tr>
                                                 <td>{{ $i++ }}</td>
                                                 <td>{{ $orderD->order_id }}</td>
                                                 <td>{{ $orderD->foodmenu_name }}</td>
                                                 <td>Rp. {{ $orderD->foodmenu_price }}</td>
                                                 <td>{{ $orderD->foodmenu_qty }}</td>
                                                 <td>Rp. {{ $orderD->foodmenu_price * $orderD->foodmenu_qty }}</td>
                                                </tr>
                                            @endforeach
                                         </tbody>

                                       </table>
                                     </div>
                                     <!-- /.card-body -->
                                   </div>
                                    <!-- modal end here -->
</div>

@endsection
