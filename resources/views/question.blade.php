
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
        padding: 3px 8px;
        width: fit-content;
        background-color: F1F2F5;
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
    </style>
    @extends("layout.master")
    @section("content")
    <head>
        <title>Toring | Questions</title>
    </head>
    <div class=" container">


        <div class="comments mb-3">

            <div class=" d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center justify-content-between" >

                    <h5 class=" fs-4 fw-bolder">{{ $question->title }}</h5>


                </div>



            </div>
            <p>{{ $question->content }}</p>
            <div class="d-flex align-items-center ">
                <div class="opt"><i class="fa-solid fa-thumbs-up like fs-3"></i></div>
                <div class="opt"><i class="fa-solid fa-thumbs-down ms-3 hate fs-3"></i></div>
                {{-- <div class="opt"><a class="text-dark " href="/comment/{{ $st->id }}"><i  class="fa-regular fa-comment ms-3 fs-4 replyIcon"></i></a></div> --}}
            </div>
            @foreach ($comments as $comment )
                @if ($question->id == $comment->id_comment)
                        <div class="d-flex answers ">


                            <div class="reply"> {{ $comment->name }}</div>
                        </div>
                @endif
            @endforeach

        </div>

        {{-- @endforeach --}}
    </div>


@endsection

