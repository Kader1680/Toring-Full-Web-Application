@extends("layout.master")
@section("content")
<head>
    <title>Toring | Comments</title>
</head>
<div class=" container">

        @foreach ($comments as $comment)
        @if (Auth::user()->id == $comment->id_comment)
        <div>{{ $comment->name }}</div>
        @endif

        @endforeach
</div>
@endsection
