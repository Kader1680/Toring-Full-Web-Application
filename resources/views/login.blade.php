@extends("layout.master")
@section("content")

<style>
    .google{
        font-size: 1.5rem;
        background-color: #d30505bf;
        padding: 1rem;
        text-align: center;
        font-weight: 700;
        color: white;
    }
    .facebook{
        font-size: 1.5rem;
        background-color: #051ad3bf;
        padding: 1rem;
        text-align: center;
        font-weight: 700;
        color: white;
        margin: 10px 0;
    }
</style>
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
       <div class="facebook"><a class=" text-decoration-none text-white" href="/auth/google">Login With Facebook</a></div>
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
