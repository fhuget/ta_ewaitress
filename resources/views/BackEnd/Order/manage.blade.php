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
                        <th>Waktu Pesanan</th>
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
                  <td>{{ $order->order_status }} <br/>
                      <a class="btn btn-success mr-2" href="{{ route('approved_order',[$order->order_id] )}}">
                      <i class="fas fa-check" title="Sudah Diantar"></i>
                      <a class="btn btn-danger" href="{{ route('disapproved_order',[$order->order_id] )}}">
                      <i class="fas fa-times" title="Belum Diantar"></i>
                  </td>
                  <td>{{ $order->created_at }}</td>
                  <td>{{ $order->payment_type }}</td>
                  <td>{{ $order->payment_status }} <br/>
                  <!-- <a class="btn btn-success mr-2" href="{{ route('approved_payment',[$order->order_id] )}}">
                      <i class="fas fa-check" title="Sudah Diantar"></i>
                      <a class="btn btn-danger" href="{{ route('disapproved_payment',[$order->order_id] )}}">
                      <i class="fas fa-times" title="Belum Diantar"></i> -->

                      <!-- Button trigger modal -->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Proses Pembayaran
                              </button>
                  </td>
                  <td>
                    <a class="btn btn-outline-secondary" href=" {{ route('view_order',[$order->order_id])}}">
                      <i class="fas fa-search" title="Lihat Detail Pesanan"></i>
                    </a>
                    <a class="btn btn-outline-info" href="{{ route('view_order_invoice',[$order->order_id])}}">
                      <i class="fas fa-search-plus" title="Lihat Invoice"></i>
                    </a>
                    <a class="btn btn-outline-primary" href="{{ route('print_invoice',[$order->order_id])}}">
                      <i class="fas fa-print" title="Cetak Invoice"></i>
                    </a>
                    <a class="btn btn-outline-danger mt-1" href=" {{ route('order_remove',[$order->order_id])}}">
                      <i class="fas fa-trash" title="Hapus pesanan"></i>
                    </a>
                  </td>
                 </tr>

                 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ONE MOCHI
                                          <a class="btn btn-success mr-2" href="{{ route('approved_payment',[$order->order_id] )}}">
                                          <i class="fas fa-check" title="Sudah Diantar"></i>
                                          <a class="btn btn-danger" href="{{ route('disapproved_payment',[$order->order_id] )}}">
                                          <i class="fas fa-times" title="Belum Diantar"></i>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
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

             <!-- Modal -->

@endsection
