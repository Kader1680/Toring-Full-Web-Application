
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
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
        <svg class="mt-1 ms-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>

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
