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
        <button type="submit" class="btn p-3 text-white">Create New Story</button>
    </form>
</div>

@endsection
