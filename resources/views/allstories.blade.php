
<style>
@media(max-width: 767px){
    .reply{
        margin: 5px 15px;
}
}
@media(min-width: 768px){
    .reply{
    margin: 5px 0px;

}
.answers{
    margin-left: 5rem;
}
}
.reply{
    background-color: #f1f1f1e0;
    padding: 9px;
    margin-left: 4rem;
    border: 1px solid #e1e1e1;
    border-radius: 6px;
    width: fit-content;

}

</style>
@extends("layout.master")
@section("content")
<head>
    <title>Toring | Profil</title>
</head>
<div class=" container">

            {{-- @if (session("added"))
            <div style="background-color: #07bc5262" class="text-white added p-3 fs-4 fw-bold rounded-3 mb-3 d-flex align-items-center justify-content-between">
                {{ $added }}
                <i class="fa-solid fa-close fs-3 text-dark"></i>
            </div>
            @endif --}}
    @foreach ($stories as $st )
    <div class="comments mb-3">

        <div class=" d-flex align-items-center justify-content-between">
            <h6 class=" fw-bolder">{{ $st->title }}</h6>

            @if (Auth::user()->id == $st->id_story)
            <div class=" d-flex">
                <a href="/stories/{{ $st->id }}">
                <img class=" me-3" width="15" src="{{ asset("assets/images/edit.svg") }}" alt="">

                </a>
                <form action="{{ route("delete", ['id' => $st->id]) }}" method="POST">
                @csrf
                @method("DELETE")
                <button class="border-0 bg-transparent" type="submit">
                        <img class=" me-3" width="15" src="{{ asset("assets/images/delete.svg") }}" alt="">
                </button>
                </form>
            </div>
            @endif

        </div>
        <p>{{ $st->content }}</p>
        <i class="fa-solid fa-thumbs-up like fs-3"></i>
        <i class="fa-solid fa-thumbs-down ms-3 hate fs-3"></i>
        <a class="text-dark " href="/comment/{{ $st->id }}"><i  class="fa-regular fa-comment ms-3 fs-4 replyIcon"></i></a>
        @foreach ($comments as $comment )
            @if ($st->id == $comment->id_comment)
                    <div class="d-flex answers ">
                        <i style="transform: rotate(90deg)" class="fa-solid fa-turn-up fs-3"></i>
                        <div class="reply"> {{ $comment->name }}</div>
                    </div>
            @endif
        @endforeach

    </div>

    @endforeach
</div>
@endsection

