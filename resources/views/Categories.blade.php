@extends("layout.master")
@section("content")
<style>
    .catg{
        height: 10rem;
        text-align: center;
        background-color: #FF7D42;
    }
</style>
<head>
    <title>Toring | Categories</title>
</head>
<div class=" container">

    <div class="row mb-5">
        <div class="catg col-md-6 fs-3 fw-bolder pt-5  "><a class=" text-decoration-none text-white" href="/categorie/web">Web Developement</a></div>
        <div class="catg col-md-6  fs-3 fw-bolder pt-5 "><a class="text-decoration-none text-white" href=" /categorie/databases">Databases</a></div>
        <div class="catg col-md-6 fs-3 fw-bolder pt-5 "><a class="text-decoration-none text-white" href=" /categorie/android">Andriod</a></div>
        <div class="catg col-md-6  fs-3 fw-bolder pt-5 "><a class="text-decoration-none text-white" href="/categorie/operting-system">Operating System</a></div>
        <div class="catg col-md-12 fs-3   fw-bolder pt-5 "><a class="text-decoration-none text-white" href=" ">Others</a></div>
    </div>

</div>


@endsection
