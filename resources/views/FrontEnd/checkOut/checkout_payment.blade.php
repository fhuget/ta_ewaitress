@extends('FrontEnd.master')
@section('title')
Opsi Pembayaran
@endsection

@section('content')

<div class="card p-5 m-4">
    <div class="container">
        <div class="card">
          <div class="card-header text-muted">
            <h3 class="text-white">Halo, {{ Session::get('customer_name') }}.</h3><h4 class="title1 text-white" align="center">Bayar pake apa nih?</h4>
          </div>
              <br/>
              <hr>
              <div class="card mt-4">
                <h5 class="card-header mt-4 text-center text-muted text-white">Silahkan pilih cara pembayaran anda</h5>
                <div class="card-body">
                  <div class="check-out left">
                    <div class="address_form_agile mt-sm-5 mt-4">

      <form action="{{ route('new_order') }}" method="post">
        @csrf
        <table class="table">
          <tr>
            <th class="text-white">Pembayaran Cash (untuk saat ini)</th>
            <td><input type="radio" name="payment_type" value="Cash"></td>
          </tr>
          <tr>
            <th></th>
            <td><input type="submit" name="btn" class="btn btn-success" value="Confirm Order"></td>
          </tr>
        </table>
      </form>

    </div>
  </div>

</div>
</div>
</div>
</div>
</div>

@endsection
<style>


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
