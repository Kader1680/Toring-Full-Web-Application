@extends("layout.master")
@section("content")
<head>
    <title>Toring | Home</title>
</head>
<style>

.bg h2{
        display: flex;
    align-items: center;
    justify-content: center;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 5rem;
    }
    .bg img{
        width: 100%;
        height: 40em;
    }
</style>
    <div class="bg position-relative">
        <h2  class="text-center fw-bolder position-absolute z-10  text-white">Welcome To Toring Site</h2>
        <img class=" " src="https://t3.ftcdn.net/jpg/02/25/02/48/360_F_225024841_7b2gkqxIyskWsexHw19gIW9fro1iuOns.jpg" alt="">
    </div>
{{-- </div> --}}
@endsection
