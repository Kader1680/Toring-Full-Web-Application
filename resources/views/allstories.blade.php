
<style>
@media(max-width: 767px){
    .reply{
        width: 77%;
        margin: 15px;
}
}
@media(min-width: 768px){
    .reply{
    width: 50%;
    margin: 15px;

}
}
.reply{
    background-color: white;
    padding: 9px;
    margin-left: 4rem;
}
</style>
@extends("layout.master")
@section("content")
<head>
    <title>Toring | Profil</title>
</head>
<div class=" container">
    @foreach ($stories as $st )
    <div class="comments mb-3">

        <div class=" d-flex align-items-center justify-content-between">
            <h6 class=" fw-bolder">{{ $st->title }}</h6>
            @auth
            <div class=" d-flex">
                <a href="/stories/{{ $st->id }}">
                <img class=" me-3" width="15" src="{{ asset("assets/images/edit.svg") }}" alt="">

                </a>
                <form action="{{ route("delete", ['id' => $st->id]) }}" method="POST">
                @csrf
                @method("DELETE")
                <button class="border-0 bg-transparent" type="submit">                <img class=" me-3" width="15" src="{{ asset("assets/images/delete.svg") }}" alt="">
                    </button>
                </form>
            </div>
            @endauth

        </div>
        <p>{{ $st->content }}</p>
        <i class="fa-solid fa-thumbs-up like fs-4"></i>
        <i class="fa-regular fa-message ms-3 fs-4"></i>

    </div>
        {{-- <div>
            <form action="" method="post">

            </form>
        </div> --}}


    @endforeach
    {{-- @foreach ($comments as  $comment)

        <div class="reply">
                <p>{{ $comment->name }}</p>
        </div>
    @endforeach --}}
</div>
@endsection

