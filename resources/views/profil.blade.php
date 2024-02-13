
<style>

    .empty{
        background-color: #e1e1e1;
    padding: 26px;

    font-size: 2.5rem;
    text-align: center;
    font-weight: 400;
    height: 50%;
    display: flex;
    justify-content: center;
    align-items:center;
    border-radius: 6px;

    }
    @media(max-width:767px){
        .allStories{
        width: 96%;
        margin: auto;
        margin-top: 1rem;
        padding-bottom: 2rem;
        border-radius: 6px;
        }

        .photo{
            height: 300px;
            width: 259px;
        }
    }

    @media(min-width:768px){
        .photo{
            height: 235px;
            width: 200px;
        }
    }

    @media(min-width:991px){
        .photo{
            height: 243px;
            width: 200px;
        }
    }
    @media(min-width:1200px){
        .photo{
            height: 235px;
            width: 200px;
        }
    }


    .custom__form input {
  opacity: 0;
  height: 0;
}
.custom__image-container {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
}

.photo{
    top: 14px;
    position: absolute;
    z-index: 5;
}
.submit{

}
    </style>
    <head>
        <title>Toring | Profil</title>
    </head>
@extends("layout.master")
@section("content")
<div class=" container"  style="margin-bottom: 8rem">

<div class="row">
    <div class="col-sm-12 col-md-3 bg-gray-100">
        <div style="border-radius: 6px" class=" p-4 bg-white  border d-flex align-items-center justify-content-center">


            <form action="" method="POST" class="custom__form" enctype="multipart/form-data">
               @csrf
                <div class="custom__image-container">
                  <label id="add-img-label" for="add-single-img"><p class="text-black bg-white p-2" >Add Image</p></label>
                  <input name="image" type="file" id="add-single-img" />
                </div>
                @foreach ($imageProfil as $images)
                {{-- <p>{{ "$images->images" }}</p> --}}

                <img class="photo" width="100" height="100" src="{{asset('assets/images/profils'). '/' .$images->image}}"/>


                @endforeach
                <div class="form__controls"><button class="submit" type="submit">Submit</button></div>
            </form>


















            {{-- <img class="" width="100" height="100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png" alt=""> --}}
        </div>
        <div style="border-radius: 6px" class="border mt-4 bg-white p-3 ">
            @foreach ($userInfo as $user)
            <h3>Welcome {{ $user->name }} </h3>
            <div>
                <h5>First Name: {{ $user->FirstName }}</h5>
                <h5>Last Name: {{ $user->LastName }}</h5>
                <h5>Address: {{ $user->Address }}</h5>
                <h5>Phone: {{ $user->mobile }}</h5>
            </div>
            @endforeach

        </div>
    </div>

    <div class="col-sm-12 col-md-9 bg-white allStories" >
        <div><h4 class="mt-5 mb-5 fw-bolder">All Have  ({{ $data->count() }}) Questions </h4>
        <span>


        </span>
        </div>
        @if ($data->count() > 0)
        @foreach ( $data as $dt)

        <div>
            <div style="background-color: #f1f2f5;" class="comments mb-3">

                <div class=" d-flex align-items-center justify-content-between">
                    <h6 style="color: #2a2241" class=" fw-bolder">{{ $dt->title }}</h6>
                    <div class=" d-flex">
                        <a href="/stories/{{ $dt->id }}">
                            <img class=" me-3" width="15" src="{{ asset("assets/images/edit.png") }}" alt="">
                        </a>
                        <form action="{{ route("delete", ['id' => $dt->id]) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="border-0 bg-transparent" type="submit">
                            <img class=" me-3" width="15" src="{{ asset("assets/images/delete.png") }}" alt="">
                        </button>
                        </form>
                    </div>

                </div>

                <p>{{ $dt->content }}</p>
            </div>
        </div>
        @endforeach
        @else
          <div class="empty">you don't have any Questions</div>
        @endif
    </div>
</div>



</div>

@endsection
