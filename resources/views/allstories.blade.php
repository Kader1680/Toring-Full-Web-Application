
<style>


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
