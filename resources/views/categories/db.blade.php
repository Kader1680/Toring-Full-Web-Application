@extends("layout.master")
@section("content")
<head>
    <title>Toring | Profil</title>
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
        padding: 4px 7px;
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
    </style>

<div class="container">
    <h1 class="text-center m-5">Welcome To Databases </h1>


    @foreach ($questions as $qst )
    <div class="comments mb-3">

        <div class=" d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-between" >

                <a style="color: #FF7D42"  class=" d-flex align-items-center text-decoration-none  " href="/questions/{{ $qst->id }}"><h5 class=" fs-3 fw-bolder me-3">{{ $qst->title }}</h5><img class=" me-3" width="15" src="{{ asset("assets/images/external-link.png") }}" alt=""></a>

            </div>

        </div>

    </div>

    @endforeach
</div>
@endsection
