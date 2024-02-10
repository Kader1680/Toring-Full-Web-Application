<style>

</style>
@extends("layout.master")

@section("content")

<div class="container register">
    <form class="myform" method="POST" action="{{ route("register") }}">


       <h2 class="text-center fw-bolder mb-5">Create Account</h2>
       <div class="google"><a class=" text-decoration-none text-white" href="/auth/google"><img width="25" class="me-3"  src="https://cdn.iconscout.com/icon/free/png-256/free-google-1772223-1507807.png" alt="">Login With Google</a></div>
       <div class="facebook"><a class=" text-decoration-none text-white" href="/auth/facebook"><img width="25" class="me-3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/2048px-2021_Facebook_icon.svg.png" alt="">Login With Facebook</a></div>
        @csrf
       <div class="row">
            <div class="form-group col-6">
                <input placeholder="First Name" type="text" class="form-control" name="FirstName">
            </div>
            <div class="form-group col-6">
                <input placeholder="Last Name" type="text" class="form-control" name="LastName">
            </div>
       </div>
      <div class="form-group">
        <input placeholder="Address Email" type="text" class="form-control" name="Address">
      </div>
      <div class="form-group">
        <input  placeholder="Username" type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <input  placeholder="Phone Number" type="number" class="form-control" name="mobile">
      </div>
      <div class="form-group">
        <input  placeholder="Create Password" type="password" class="form-control" name="confirm">
      </div>
      <div class="form-group">
        <input  placeholder="Confirm Password" type="password" class="form-control" name="password">
      </div>
      <div>
        <button type="submit" class="btn p-3">Register</button>

      </div>
      <div class="mt-3 fs-4"><a class="  reg" style="color: #ba54f5;" href="/">I Have Already Account</a></div>

       </form>
  </div>

@endsection
