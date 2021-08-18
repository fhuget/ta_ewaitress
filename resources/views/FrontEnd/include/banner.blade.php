  <section id="menu" class="pt-5">
    <div class="card p-5 m-4">
      <h3 class="font-weight-bold text-center text-white pb-2">DAFTAR MENU</h3>
      <p class="text-white text-center pt-2 mb-5">BERIKUT ADALAH DAFTAR MENU REKOMENDASI KAMI</p>
      <div class="row">
        @foreach($categories as $category)
      <div class="col-sm-4 pt-2">
        <li><a href="{{ route('category_food',['category_id'=>$category->category_id] ) }}" class="text-center btn btn-outline-light btn-lg btn-block">{{$category->category_name}}</a></li>
     </div>
     @endforeach
   </div>
    </div>
  </section>
