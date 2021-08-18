@extends('BackEnd.master')
@section('title')

Delivery manage
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
                       <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th>No. Meja</th>
                        <th>Tanggal Data</th>
                      </tr>
                      </thead>
                  <tbody>
                 @php($i = 1)
                 @foreach($deliveries as $del)
                 <tr>
                  <td>{{ $del->id }}</td>
                  <td>{{ $del->name }}</td>
                  <td>{{ $del->email }}</td>
                  <td>{{ $del->phone_no }}</td>
                  <td>{{ $del->nomeja }}</td>
                  <td>{{ $del->created_at }}</td>
                  <td>

                  </td>
                 </tr>

                                       @endforeach
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
             <!-- modal end here -->

@endsection
