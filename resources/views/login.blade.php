@extends("layout.master")
@section("content")
<head>
    <title>Tor | Login</title>
</head>
<div class="container login">
    <form method="POST" action="{{ route("login") }}">
        @csrf
       <h2 class="text-center fw-bolder mb-5">Welcome To Toring</h2>
       <div class="form-group">
        <input placeholder="Enter Username" type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <input placeholder="Enter Password" type="text" class="form-control" name="password">
      </div>

      <div >
        <button type="submit" class=" mb-4 " >Submit</button>
      </div>

      <a class=" fs-5 reg" style="color: #ba54f5" href="/register">Create Account</a>

       </form>
  </div>

@endsection
