@extends("layout.master")

@section("content")
<head>
    <title>Toring | Questions</title>
</head>

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
        margin-left: 2rem;
    }
}
.reply{
    background-color: #f1f6ffc2;
    padding: 9px 15px;
    margin-left: 4rem;
    border-radius: 5px;
    width: fit-content;
}
.countAnwser{
    background-color: #ff7d42;
    color: white;
    padding: 9px;
    border-radius: 2px;
    width: 45px;
    height: 41px;
    text-align: center;
    font-weight: 700;
    font-size: 16px;
}
.catigories{}
.catigories .cat{
    width: -webkit-fill-available;
    background-color: #FF7D42;
    padding: 4px;
    border-radius: 4px;
    color: white;
    font-weight: 700;
    font-size: 13px;
    text-align: center;
    margin: 3px 5px;
}
.opt{
    padding: 3px 8px;
    width: fit-content;
    background-color: #F1F2F5;
    text-align: center;
    margin: 0px 2px;
    border-radius: 5px;
}
.form-select{
    background-color: #2a2241;
    color: white;
    font-size: 17px;
}
.form-select option{
    padding: 10px;
}

/* Custom save button style (if not using Bootstrap) */
.btn-save {
    background-color: #ff7d42;
    color: white;
    font-weight: 600;
    padding: 6px 12px;
    border: none;
    border-radius: 25px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
    transition: background-color 0.3s ease;
}
.btn-save:hover {
    background-color: #e36a35;
}
.btn-save .badge {
    background: white;
    color: #ff7d42;
    font-weight: bold;
    padding: 2px 6px;
    border-radius: 10px;
}
</style>

<div style="margin-bottom: 7rem" class="container">

    <div class="catigories d-md-flex justify-content-md-between mb-5">
        <div class="cat"><a class="text-decoration-none text-white" href="/categorie/web">Web Developement</a></div>
        <div class="cat"><a class="text-decoration-none text-white" href="/categorie/databases">Databases</a></div>
        <div class="cat"><a class="text-decoration-none text-white" href="/categorie/android">Android</a></div>
        <div class="cat"><a class="text-decoration-none text-white" href="/categorie/operting-system">Operating System</a></div>
        <div class="cat"><a class="text-decoration-none text-white" href="/categorie/others">Others</a></div>
    </div>

    @foreach ($stories as $st)
    <div class="comments mb-3">

        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="fs-4 fw-bolder"><a href="/storie/{{$st->id}}">{{ $st->title }}</a></h5>
            </div>

            @if (Auth::user()->id == $st->id_story)
            <div class="d-flex">
                <a href="/stories/{{ $st->id }}">
                    <img class="me-3" width="15" src="{{ asset("assets/images/edit.png") }}" alt="">
                </a>
                <form action="{{ route("delete", ['id' => $st->id]) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="border-0 bg-transparent" type="submit">
                        <img class="me-3" width="15" src="{{ asset("assets/images/delete.png") }}" alt="">
                    </button>
                </form>
            </div>
            @endif
        </div>

        <p>{{ $st->content }}</p>

        <div class="d-flex align-items-center">

            <!-- Stylish Saved Button -->
            <form method="POST" action="{{ route('stories') }}">
                @csrf
                <input type="hidden" name="story_id" value="{{ $st->id }}">
                <button type="submit" class="btn-save">
                    <i class="fa-solid fa-bookmark"></i>
                    Save <span class="badge">{{ $st->favorites->count() }}</span>
                </button>
            </form>

            <div class="opt">
                <form action="{{ route("liked", ['id' => $st->id]) }}" method="POST">
                    @csrf
                    @method("POST")
                    <button class="border-0 bg-transparent" type="submit">
                        <i class="fa-solid fa-thumbs-up like fs-3"></i>
                    </button>
                </form>
            </div>

            <div class="opt"><i class="fa-solid fa-thumbs-down ms-3 hate fs-3"></i></div>

            <div class="opt">
                <a class="text-dark" href="/comment/{{ $st->id }}">
                    <i class="fa-regular fa-comment ms-3 fs-4 replyIcon"></i>
                </a>
            </div>
        </div>

        @foreach ($comments as $comment)
            @if ($st->id == $comment->id_comment)
                <div class="d-flex answers">
                    <div class="reply">{{ $comment->name }}</div>
                </div>
            @endif
        @endforeach

    </div>
    @endforeach
</div>
@endsection
