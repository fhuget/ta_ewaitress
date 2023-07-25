@extends('FrontEnd.master')
@section('title')
Pengantaran
@endsection

@section('content')

<section>
  <div class="container2 card mb-5 mt-5">
    <div class="form">
      <h2>Register Booking Meja</h2>
      <form action="{{ route('store_delivery') }}" method="post">
        @csrf
        <div class="inputBox">
          <input type="text" name="name" value="{{ $customer->name }}">
        </div>
        <div class="inputBox">
        <input type="email" name="email" value="{{ $customer->email }}">
        </div>
        <div class="inputBox">
        <input type="number" id="adr" name="phone_no" value="{{ $customer->phone_no }}">
        </div>
        <div class="inputBox">
        <input type="number" name="nomeja" placeholder="Masukkan No.Meja" required="">
        </div>
        <div class="inputBox">
          <input type="submit" value="Submit" >
        </div>
      </form>
    </div>
  </div>
</section>


@endsection
<style>
<style>
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container2 {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}



.form
{
	position: relative;
	width: 100%;
	height: 100%;
	padding: 40px;
}

.form h2
{
	position: relative;
	color: #fff;
	font-size: 24px;
	font-weight: 600;
	letter-spacing: 1px;
	margin-bottom: 40px;
}

.form h2::before
{
	content: '';
	position: absolute;
	left: 0;
	bottom: -10px;
	width: 80px;
	height: 4px;
	background: #fff;
}

.form .inputBox
{
	width: 100%;
	margin-top: 20px;
}

.form .inputBox input
{
	width: 100%;
	background: rgba(255, 255, 255, 0.2);
	border: none;
	outline: none;
	padding: 10px 20px;
	border-radius: 35px;
	border:  1px solid rgba(255, 255, 255, 0.5);
	border-right: 1px solid rgba(255, 255, 255, 0.2);
	border-bottom: 1px solid rgba(255, 255, 255, 0.2);
	font-size: 16px;
	letter-spacing: 1px;
	color: #fff;
	box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.form .inputBox input::placeholder
{
	color: #fff;
}

.form .inputBox input[type="submit"]
{
	background: #fff;
	color: #666;
	max-width: 100px;
	cursor: pointer;
	margin-bottom: 20px;
	font-weight: 600;
}

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
