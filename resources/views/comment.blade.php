@extends("layout.master")
@section("content")
<head>
    <title>Toring | comment</title>
</head>

<div>
    <div class="container post">

        <form class="myform" method="POST" action="{{ route("comment", ['id' => $stories->id]) }}" enctype="multipart/form-data">
                @csrf


            <div class="form-group">
                <input placeholder="comment..."   type="text" class="form-control" name="name">
            </div>

            <button type="submit" class="btn p-2 text-white">add comment</button>
        </form>
    </div>

</div>
@endsection
