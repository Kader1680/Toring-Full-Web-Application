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
        height: 40rem;
    }
    .box{
        color: #2a2241;
        position: relative;
        margin: 15px 0;
        padding: 5rem;
        box-shadow: 2px 2px 10px 4px #80808069;
    }
    .box h3{
        color: #FF7D42;
        font-weight:400;
        margin-bottom: 2rem;
        font-size:25px;

    }
    .box p{
        font-size: 14px;
    }
    .box img{
        border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -246%);
    height: 73px;
    width: 73px;
    border: 1px solid #2a2241;
    }

    @media(min-width:767px){
        .box{
        margin: 15px 1%;
        width: 31%;
    }
    }
</style>

<div class="container">
    <div class="bg position-relative">
        <h2  class="text-center fw-bolder position-absolute z-10  text-white">Welcome To Toring Site To Anwser Question you want <br></h2>

        <img class=" " src="https://t3.ftcdn.net/jpg/02/25/02/48/360_F_225024841_7b2gkqxIyskWsexHw19gIW9fro1iuOns.jpg" alt="">
    </div>
<div style="margin-top: 5rem" class="row text-center  ">
    <div class="col-md-4 col-sm-12 box bg-white ">
        <img width="100" src="https://media.licdn.com/dms/image/D4E03AQHjeMcDl7Dqfg/profile-displayphoto-shrink_200_200/0/1672154529520?e=2147483647&v=beta&t=C0CfRHRMU81bsM2NMs_sFLZ7d3ocv5uY_SNcDzRT9hc" alt="">
        <h3>Abdealkader</h3>
        <p>You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change and click save</p>
    </div>
    <div class="col-md-4 col-sm-12 box bg-white">
        <img width="100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMMCIdR2rD-JmCMlnnCmGSGimkWVYXiKpsz_HHRxJaGRZPLSC5wv7zTg5-EZdCkihp_J4&usqp=CAU" alt="">

        <h3>karim</h3>
        <p>Wow. I just updated my site and it was SO SIMPLE. I am blown away. You guys truly kick ass. Thanks for being so awesome. High fives!</p>
    </div>
    <div class="col-md-4 col-sm-12 box bg-white">
        <img width="100" src="https://live.staticflickr.com/7868/47425537761_53248c84b0_b.jpg" alt="">

        <h3>amel</h3>
        <p>I just wanted to share a quick note and let you know that you guys do a really good job. I’m glad I decided to work with you </p>
    </div>
</div>
</div>




{{-- </div> --}}
@endsection
