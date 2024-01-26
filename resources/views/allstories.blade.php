
<style>
html body{

  background: #70e1f5;
  background: -webkit-linear-gradient(to right, #ffd194, #70e1f5);
  background: linear-gradient(to right, #ffd194, #70e1f5);

}
.comments{
    background-color: #bdadad6e;
    padding: 10px;
    border-radius: 10px 20px 10px 20px;
}
.comments h6{
    font-size: 2rem;
    color: #1100ff;
}
.comments p{
    font-size:14px;
}
</style>
@extends("layout.master")
@section("content")
<div class=" container">
    @foreach ($stories as $st )
    <div class="comments mb-3">
        <h6 class=" fw-bolder">{{ $st->title }}</h6>
        <p>{{ $st->content }}</p>
    </div>
    @endforeach
</div>
@endsection
