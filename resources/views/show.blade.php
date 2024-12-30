
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
    <div style="margin-bottom: 7rem" class=" container">
    
        <div class="catigories d-md-flex justify-content-md-between mb-5">
            <div class="cat"><a class=" text-decoration-none text-white" href="/categorie/web">Web Developement</a></div>
            <div class="cat"><a class="text-decoration-none text-white" href=" /categorie/databases">Databases</a></div>
            <div class="cat"><a class="text-decoration-none text-white" href=" /categorie/android">Andriod</a></div>
            <div class="cat"><a class="text-decoration-none text-white" href="/categorie/operting-system">Operating System</a></div>
            <div class="cat"><a class="text-decoration-none text-white" href="/categorie/others ">Others</a></div>
        </div>
    
    
       
        <div class="comments mb-3">
    
            <div class=" d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center justify-content-between" >
                    <h5 class=" fs-4 fw-bolder">{{ $postId->title }}</h5>
                </div>
    
                @if (Auth::user()->id == $postId->id_story)
                <div class=" d-flex">
                    <a href="/postId/{{ $postId->id }}">
                    <img class=" me-3" width="15" src="{{ asset("assets/images/edit.png") }}" alt="">
                    </a>
                    <form action="{{ route("delete", ['id' => $postId->id]) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="border-0 bg-transparent" type="submit">
                            <img class=" me-3" width="15" src="{{ asset("assets/images/delete.png") }}" alt="">
                    </button>
                    </form>
                </div>
                @endif
    
            </div>
            <p>{{ $postId->content }}</p>
            <div class="d-flex align-items-center ">
                
                
                <div class="opt">
                    <i class="fa-solid fa-thumbs-up like fs-3"></i>
                    <form >
                        
                        <button class="border-0 bg-transparent" type="submit">
                                LIKE
                        </button>
                        {{$likeCounts }}
                    </form>
                    
                
                </div>
                
            </div>
           
        </div>
    
    </div>
    @endsection
    
    