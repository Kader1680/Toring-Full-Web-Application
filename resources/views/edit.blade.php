<style>


    .post form  textarea{
        height: 30%;
    }
    </style>
    <head>
        <title>Toring | Edit Storing</title>
    </head>
    @extends("layout.master")
    @section("content")

    <div class="container post">

        <form method="POST" action="{{ route("edit", ['id' => $stories->id]) }}" enctype="multipart/form-data">
                @csrf
            @method("put")

            <div class="form-group">
                <label for="name">Title :</label>
                <input placeholder="Enter Story Title" value="{{ $stories->title }}"  type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="dob">Content :</label>
                <input placeholder="Enter Story Content" value = "{{ $stories->content }}" type="text" class=" form-control"  name="content">
            </div>
            <button type="submit" class="btn p-3 text-white">Edit</button>
        </form>
    </div>

    @endsection
