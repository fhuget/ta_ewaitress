@extends('BackEnd.master')
@section('title')

Orders manage
@endsection
@section('content')

              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kelola Data Pesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                       <th>No.</th>
                        <th>Nama Pelanggan</th>
                        <th>Total Pesanan</th>
                        <th>Status Pesanan</th>
                        <th>Tanggal Pesanan</th>
                        <th>Jenis Pembayaran</th>
                        <th>Status Pembayaran</th>
                        <th>Opsi</th>
                      </tr>
                      </thead>
                  <tbody>
                 @php($i = 1)
                 @foreach($orders as $order)
                 <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $order->name }}</td>
                  <td>{{ $order->order_total }}</td>
                  <td>{{ $order->order_status }}</td>
                  <td>{{ $order->created_at }}</td>
                  <td>{{ $order->payment_type }}</td>
                  <td>{{ $order->payment_status }}</td>
                  <td>
                    <a class="btn btn-outline-success" href=" {{ route('view_order',[$order->order_id])}}">
                      <i class="fas fa-search" title="Lihat Detail Pesanan"></i>
                    </a>
                    <a class="btn btn-outline-info" href="{{ route('view_order_invoice',[$order->order_id])}}">
                      <i class="fas fa-search-plus" title="Lihat Invoice"></i>
                    </a>
                    <a class="btn btn-outline-primary" href="{{ route('print_invoice',[$order->order_id])}}">
                      <i class="fas fa-search-plus" title="Cetak Invoice"></i>
                    </a>
                    <a class="btn btn-outline-danger mt-1" href=" {{ route('order_remove',[$order->order_id])}}">
                      <i class="fas fa-trash" title="Hapus pesanan"></i>
                    </a>
                  </td>
                 </tr>



                 <!-- modal start here -->


                                       @endforeach
                    </tbody>
                  </table>
              </div>
              <!-- /.card-body -->
            </div>
             <!-- modal end here -->

@endsection
