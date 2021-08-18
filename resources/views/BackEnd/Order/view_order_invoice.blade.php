@extends('BackEnd.master')
@section('title')
  Invoice || View

@endsection
@section('content')

<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
    <div class="card">
        <div class="card-header p-4">
            <a class="pt-2 d-inline-block" href="index.html" data-abc="true">Shelterville</a>
            <div class="float-right">
                <h3 class="mb-0">Invoice {{ $order->order_id }}</h3>
                Tgl: {{ $order->created_at }}
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h5 class="mb-3"></h5>
                    <h3 class="text-dark mb-1">Shelterville</h3>
                    <div>Jl. Bunga Kumis Kucing</div>
                    <div>Kel. Jatimulyo, Kec. Lowokwaru</div>
                    <div>Kota Malang</div>
                    <div></div>
                </div>
                <div class="col-sm-8">
                    <h5 class="mb-3"></h5>
                    <h3 class="text-dark mb-1">{{ $customer->name }}</h3>
                    <div></div>
                    <div>No. Meja {{ $delivery->nomeja }}</div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="center">#</th>
                            <th>Nama Pesanan</th>
                            <th class="right">Harga</th>
                            <th class="center">Jumlah</th>
                            <th class="right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                         @php($i = 1)
                        <tr>
                            <td class="center">{{ $i++ }}</td>
                            <td class="left strong">{{ $order_detail['foodmenu_name'] }}</td>
                            <td class="left">{{ $order_detail['foodmenu_price'] }}</td>
                            <td class="right">{{ $order_detail['foodmenu_qty']}}</td>
                            <td class="center">{{ $order_detail['foodmenu_price']* $order_detail['foodmenu_qty'] }}</td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5">
                </div>
                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Subtotal</strong>
                                </td>
                                <td class="right">{{ $order_detail['foodmenu_price']* $order_detail['foodmenu_qty'] }}</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Total</strong> </td>
                                <td class="right">
                                    <strong class="text-dark">{{ $order['order_total']}}</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer bg-white">
            <p class="mb-0">Shelterville Jalan Bunga Kumis Kucing</p>
        </div>
    </div>
</div>

@endsection
