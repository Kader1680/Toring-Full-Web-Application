@extends("layout.master")
@section("content")


<head>
    <title>Tor | Login</title>
</head>
<div class="container login">
    <form class="myform" method="POST" action="{{ route("login") }}">
        @csrf
       <h2 class="text-center fw-bolder mb-5">Welcome To Toring</h2>

       @if (session("errors"))
       <div class="error">{{ $errors }}</div>
       @endif

       <div class="google"><a class=" text-decoration-none text-white" href="/auth/google">Login With Google</a></div>
       <div class="facebook"><a class=" text-decoration-none text-white" href="/auth/facebook">Login With Facebook</a></div>
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
