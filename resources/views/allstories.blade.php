
<style>
    html body{
        background-color: black;
        color:white;
    }
.comments{
    background-color: #9c9c9c;
    padding: 10px;
    border-radius:8px;
}
.comments h3{
    font-size: 3rem;
    color: #1100ff;
}
.comments p{
    font-size:14px;
}
</style>
@extends("layout.master")
@section("content")
<div class=" container">
    {{ $ID }}
    @foreach ($stories as $st )
    <div class="comments mb-3">
        <h3 class=" fw-bolder">{{ $st->title }}</h3>
        <p>{{ $st->content }}</p>
    </div>
    @endforeach
</div>
@endsection
