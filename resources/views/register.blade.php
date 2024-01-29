
@extends("layout.master")
@section("content")

<div class="container register">
    <form method="POST" action="{{ route("register") }}">
       <h2 class="text-center fw-bolder mb-5">Create Account</h2>

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
        <input  placeholder="Password" type="text" class="form-control" name="password">
      </div>
      <div>
        <button type="submit" class="btn p-3">Submit</button>

      </div>
      <div class="mt-3 fs-4"><a class="  reg" style="color: #ba54f5;" href="/">I Have Already</a></div>

       </form>
  </div>

@endsection
