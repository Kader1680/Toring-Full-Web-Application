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
.post form .btn{
    background-color: #5656ff;
    width: 100%;
    color: white;
}
.post form  textarea{
    height: 30%;
}
</style>
<head>
    <title>Tor | Create Storing</title>
</head>
@extends("layout.master")
@section("content")

<div class="container post">
    <form method="POST" action="{{ route("create") }}">
            @csrf
        <div class="form-group">
            <label for="name">Title :</label>
            <input placeholder="Enter Story Title"  type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="dob">Content :</label>
            <textarea placeholder="Enter Story Content" type="text" class=" pt-4 form-control"  name="content"></textarea>
        </div>
        <button type="submit" class="btn">Add</button>
    </form>
</div>

@endsection
