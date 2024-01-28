<style>
    form {
  min-width:300px;
  max-width:400px;
  padding:20px;
  margin:0 auto;
  background:#ffffff59;
  -webkit-box-shadow: 3px 3px 23px -9px rgba(0,0,0,0.86);
  -moz-box-shadow: 3px 3px 23px -9px rgba(0,0,0,0.86);
  box-shadow: 3px 3px 23px -9px rgba(0,0,0,0.86);
  height: 66%;

}

form input {
  border:1px solid #eee;
  border-radius:0 !important;
  padding:5px 8px;
  color:#444;
}

form button {
  color:#555;
  background:#ffffffad;
  border:1px solid #fff !important;
  margin-top:20px;
  border-radius:0px Important;
}

form button:hover {
  background:#fff !important;
}

.pull-right {
  float:right;
}
body {
  background: #70e1f5;
  background: -webkit-linear-gradient(to right, #ffd194, #70e1f5);
  background: linear-gradient(to right, #ffd194, #70e1f5);
}
</style>

@extends("layout.master")
@section("content")

<div class="container">
    <form method="POST" action="{{ route("register") }}">
       <h2 class="text-center fw-bolder mb-5">Register Page</h2>

        @csrf
       <div class="form-group">
        <label for="name">name :</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <label for="dob">phone :</label>
        <input type="number" class="form-control" name="mobile">
      </div>
      <div class="form-group">
        <label for="email">passowrd</label>
        <input type="text" class="form-control" name="password">
      </div>

        <button type="submit" class="btn bg-danger" style="float:right">Submit</button>
       </form>
  </div>

@endsection
