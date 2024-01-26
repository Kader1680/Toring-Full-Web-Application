
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
                <h3>Abdelkader Ould Hennia</h3>
                <ul>
                    <li>Phone: 345678876</li>
                    <li>Email: gtare@gamil.com</li>
                    <li>Email: gtare@gamil.com</li>
                </ul>
        </div>
    </div>
    <h4 class="mt-2">All Your Stories </h4>
    @foreach ( $data as $d)
    <div class="">
        <div class="comments mb-3">

            <div class=" d-flex justify-content-between align-content-center">
                <h6 class=" fw-bolder">{{ $d->title }}</h6>
                <div class=" d-flex justify-content-center">
                    <button class="border-0 "><a href="/delete/{id}"><i class="fa-solid fa-pen-to-square"></i></a></button>
                    <button class="border-0"><a href="/edit/{id}"><i class="fa-solid fa-trash"></i></a></button>
                </div>
            </div>

            <p>{{ $d->content }}</p>
        </div>
    </div>
    @endforeach

</div>

@endsection
