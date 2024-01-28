
<style>
    html body{

      background: #70e1f5;
      background: -webkit-linear-gradient(to right, #ffd194, #70e1f5);
      background: linear-gradient(to right, #ffd194, #70e1f5);
      text-align: center;
    }
    .notFound{
        background-color: rgb(255 155 155 / 71%);
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 70%;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }
    .notFound .ctn{

    }
    .ctn h1{
        font-size: 4rem;
        font-weight: 900
}
</style>
<head>
    <title>Toring | Page Not Found</title>
</head>
@extends("layout.master")
@section("content")
    <div class="notFound container">
        <div class="ctn">
            <h1>404 Not Found</h1>
            <h3>Sorry, the page you are looking for could not be found.</h3>
        </div>
    </div>
@endsection

