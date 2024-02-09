
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
.catigories{

}
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

    padding: 5px 15px;
    width: fit-content;
    background-color: F1F2F5;
    text-align: center;
    margin: 0px 10px;
    border-radius:5px;
}

.form-select{
    background-color: #2a2241;
    color: white;
    font-size: 17px;
}
.form-select option{
    padding: 10px;
}
</style>
@extends("layout.master")
@section("content")
<head>
    <title>Toring | Questions</title>
</head>
<div class=" container">

    <div class="catigories d-md-flex justify-content-md-between mb-5">
        <div class="cat"><a class=" text-decoration-none text-white" href="/categorie/web">Web Developement</a></div>
        <div class="cat"><a class="text-decoration-none text-white" href=" /categorie/databases">Databases</a></div>
        <div class="cat"><a class="text-decoration-none text-white" href=" /categorie/android">Andriod</a></div>
        <div class="cat"><a class="text-decoration-none text-white" href="/categorie/operting-system">Operating System</a></div>
        <div class="cat"><a class="text-decoration-none text-white" href="/categorie/others ">Others</a></div>
    </div>
{{--
    <select class="text-white w-100 mb-5" style="background-color: #2a2241; color:white; padding:10px; font-size:14px;" class="form-select mb-5 filter" aria-label="Default select example">
        <option style="padding: 20px"  selected value="1">Most Anwser</option>
        <option value="2">Low Answer</option>
        <option value="3">No Anwser </option>
    </select> --}}

    @foreach ($stories as $st )
    <div class="comments mb-3">

        <div class=" d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-between" >
                {{-- <div class="countAnwser me-2">3</div> --}}
                <h5 class=" fs-4 fw-bolder">{{ $st->title }}</h5>

                @foreach ($name as $n)
                {{ $n->name }}
                @endforeach
            </div>

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
        <div class="d-flex align-items-center ">
            <div class="opt"><i class="fa-solid fa-thumbs-up like fs-3"></i></div>
            <div class="opt"><i class="fa-solid fa-thumbs-down ms-3 hate fs-3"></i></div>
            <div class="opt"><a class="text-dark " href="/comment/{{ $st->id }}"><i  class="fa-regular fa-comment ms-3 fs-4 replyIcon"></i></a></div>
        </div>
        @foreach ($comments as $comment )
            @if ($st->id == $comment->id_comment)
                    <div class="d-flex answers ">


                        <div class="reply"> {{ $comment->name }}</div>
                    </div>
            @endif
        @endforeach

    </div>

    @endforeach
</div>
@endsection

