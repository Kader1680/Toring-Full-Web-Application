
<style>
    html body{

      background: #70e1f5;
      background: -webkit-linear-gradient(to right, #ffd194, #70e1f5);
      background: linear-gradient(to right, #ffd194, #70e1f5);

    }
    .comments{
        background-color: #bdadad6e;
        padding: 10px;
        border-radius: 10px 20px 10px 20px;
    }
    .comments h6{
        font-size: 2rem;
        color: #1100ff;
    }
    .comments p{
        font-size:14px;
    }
    </style>
@extends("layout.master")
@section("content")
<div class=" container">
    <div class="row">
        <div class=" p-4 bg-white col-sm-12 col-md-2 border d-flex align-items-center justify-content-center">
            <img class="" width="100" height="100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png" alt="">
        </div>
        <div class="col-sm-12 col-md-10 border">
                @foreach ($userInfo as $user)
                <h3>Welcome {{ $user->name }} </h3>
                <ul>
                    <li><h4>First Name: {{ $user->FirstName }}</h4></li>
                    <li><h4>Last Name: {{ $user->LastName }}</h4></li>
                    <li><h4>Address {{ $user->Address }}</h4></li>
                    <li><h4>Phone: {{ $user->mobile }}</h4></li>
                </ul>
                @endforeach

        </div>
    </div>
    <h4 class="mt-5 mb-5 fw-bolder">All Your Stories </h4>
    @foreach ( $data as $dt)
    <div class="">
        <div class="comments mb-3">

            <div class=" d-flex justify-content-between align-content-center">
                {{-- @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif --}}
                <h6 class=" fw-bolder">{{ $dt->title }}</h6>
                <div class=" d-flex justify-content-center">
                    <button class="border-0 "><a href="/delete/{id}"><i class="fa-solid fa-pen-to-square"></i></a></button>
                    <button class="border-0"><a href="/edit/{id}"><i class="fa-solid fa-trash"></i></a></button>
                </div>
            </div>

            <p>{{ $dt->content }}</p>
        </div>
    </div>
    @endforeach

</div>

@endsection
