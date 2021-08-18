@extends('FrontEnd.master')
@section('title')
Daftar Menu
@endsection

@section('content')
<div class="container">
    <div class="row">

      <!-- 1 Column -->
      @foreach($categoryFood as $food)
        <div class="col-md-5 col-xl-4 mb-5 mt-5">
                  <div class="card text-center hov">
                    <div class="card-body">
                      <p class="mt-4 pt-2">
                         <img src="{{ asset($food->foodmenu_image) }}" border="1" height="200" width="200">
                      </p>
                        <h3 class="font-weight-normal my-4 py-2 text-white">
                      {{ $food->foodmenu_name }}
                      </h4>
                      <p class="text-white">
                        {{ $food->foodmenu_detail }}
                      </p>
                       <h5 class="font-weight-normal my-4 py-2 text-white">
                        <span class="text-warning">Rp.{{ $food->full_price }}</span><br>
                      </h3>
                      <div>
                        <form action="{{ route('add_to_cart') }}" method="post">
                          @csrf
                          <input type="hidden" name="foodmenu_id" value="{{ $food->foodmenu_id }}">

                          <div class="quantity">
                              <input type="number"  name="qty" value="1">
                            </div>

                          <br/>
                          <br/>
                          <button class="text-center btn btn-outline-light btn-lg
                          btn-block">Pesan Disini</button>
                        </form>
                        </div>
                    </div>
                  </div>
                </div>
                @endforeach
      <!-- 1 Column -->



    </div>
  </div>
  @endsection
