<style>


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
    <form class="myform" method="POST" action="{{ route("create") }}">
            @csrf
        <div class="form-group">
            <label for="name">Question :</label>
            <input placeholder="Enter Story Title"  type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="dob">Content :</label>
            <textarea placeholder="Enter Story Content" type="text" class=" pt-4 form-control"  name="content"></textarea>
        </div>
       <div class="mb-4">
        <select  name="option" class="form-select" aria-label="Default select example">
            {{-- <option >Choose Categories</option> --}}
            <option selected value="1">Web Developement</option>
            <option value="2">Android</option>
            <option value="3">Databases</option>
            <option value="4">Operating Systems</option>
            <option value="5">Other</option>
        </select>
       </div>
        <button type="submit" class="btn p-3 text-white">Create New Question</button>
    </form>
</div>

@endsection
