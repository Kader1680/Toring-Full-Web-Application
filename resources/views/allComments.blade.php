@extends("layout.master")
@section("content")
<head>
    <title>Toring | Comments</title>
</head>
<div class=" container">
    @foreach ($comments as $comment )
    <div class="comments mb-3">
        {{ $comment->name }}
    </div>

    @endforeach

</div>
@endsection
