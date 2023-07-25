@extends('BackEnd.master')
@section('title')
  Invoice || View

@endsection
@section('content')

<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;   
    }
    .w-85{
        width:85%;   
    }
    .w-15{
        width:15%;   
    }
    .logo img{
        width:45px;
        height:45px;
        padding-top:30px;
    }
    .logo span{
        margin-left:8px;
        top:19px;
        position: absolute;
        font-weight: bold;
        font-size:25px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
</style>
<body>
<div class="head-title">
    <h1 class="text-center m-0 p-0">Bukti Pemesanan</h1>
</div>

<div class="add-detail mt-10">
    <div class="w-50 float-left mt-10">
    <p class="m-0 pt-5 text-bold w-100">Invoice : <span class="gray-color">{{ $order->order_id }}</span></p>
        <p class="m-0 pt-5 text-bold w-100">Time : <span class="gray-color">{{ $order->created_at }}</span></p>
    </div>
    <div class="w-50 float-left mt-10">
       <span>TOIWO HOUSE</span><br/>
       <span>Jl. Candi Telaga Wangi No.49</span><br/>
        <span>Kel. Mojolangu, Kec. Lowokwaru 65142</span><br/>
        <span>Kota Malang</span>     
    </div>
    <div style="clear: both;"></div>
</div>

<div class="add-detail mt-10">

    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">Nama</th>
            <th class="w-50">No. Meja</th>
        </tr>

        <tr>
            <td>
                <div class="box-text">
                <h3 class="text-dark mb-1">{{ $customer->name }}</h3>
                </div>
            </td>
            <td>
                <div class="box-text">
                <h3 class="text-dark mb-1">{{ $delivery->nomeja }}</h3>
                </div>
            </td>
        </tr>
        </table>
    </div>
</div>

<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-20">#</th>
            <th class="w-50">Nama Pesanan</th>
            <th class="w-15">Harga</th>
            <th class="w-15">Jumlah</th>
            <th class="w-15">Total</th>
        </tr>
        @php($i = 1)
        @foreach($order_details as $orderD)
        <tr align ="left">
        <td>{{ $i++ }}</td>
        <td>{{ $orderD->foodmenu_name }}</td>
        <td>Rp. {{ $orderD->foodmenu_price }}</td>
        <td>{{ $orderD->foodmenu_qty }}</td>
        <td>Rp. {{ $orderD->foodmenu_price * $orderD->foodmenu_qty }}</td>
        </tr>

        <tr>
            <td colspan="7">
                <div class="total-part">
                    <div class="total-left w-85 float-left" align="right">
                        <p>Sub Total</p>
                        <p>Total</p>
                    </div>
                    <div class="total-right w-15 float-left text-bold" align="right">
                        <p>Rp. {{ $orderD->foodmenu_price * $orderD->foodmenu_qty }}</p>
                        <p>{{ $order['order_total']}}</p>
                    <a class="btn btn-dark" title="Kembali" href="{{ route('show_order')}}">Kembali
                    </a>
                    <a class="btn btn-primary" title="Cetak Invoice" href="{{ route('print_invoice',[$order->order_id])}}">Cetak
                    </a>
                    </div>
                    <div style="clear: both;"></div>
                </div> 
            </td>
        </tr>
        @endforeach
    </table>
</div>
</body>

@endsection
