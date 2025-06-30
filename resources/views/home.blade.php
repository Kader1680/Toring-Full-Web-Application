@extends("layout.master")

@section("content")
<head>
    <title>Toring | Home</title>
    <style>
        .hero-image {
            position: relative;
            height: 400px;
            overflow: hidden;
            border-radius: 1rem;
        }
        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }
        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-weight: bold;
            text-align: center;
            z-index: 10;
            font-size: 2rem;
        }
        .testimonial {
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            background-color: #fff;
        }
        .testimonial:hover {
            transform: translateY(-5px);
        }
        .testimonial img {
            border-radius: 50%;
            margin-bottom: 1rem;
        }
    </style>
</head>

<div class="container my-5">
    <!-- Hero Section -->
    <div class="hero-image mb-5">
        <img src="https://t3.ftcdn.net/jpg/02/25/02/48/360_F_225024841_7b2gkqxIyskWsexHw19gIW9fro1iuOns.jpg" alt="Hero">
        <div class="hero-text">
            Welcome To Toring Site<br>To Answer Any Question You Want
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="row text-center g-4">
        <div class="col-md-4 col-sm-12">
            <div class="testimonial">
                <img width="100" src="https://media.licdn.com/dms/image/D4E03AQHjeMcDl7Dqfg/profile-displayphoto-shrink_200_200/0/1672154529520?e=2147483647&v=beta&t=C0CfRHRMU81bsM2NMs_sFLZ7d3ocv5uY_SNcDzRT9hc" alt="Abdelkader">
                <h4>Abdelkader</h4>
                <p class="text-muted">You made it so simple. My new site is much faster and easier to work with than my old site.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="testimonial">
                <img width="100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMMCIdR2rD-JmCMlnnCmGSGimkWVYXiKpsz_HHRxJaGRZPLSC5wv7zTg5-EZdCkihp_J4&usqp=CAU" alt="Mohamed">
                <h4>Mohamed</h4>
                <p class="text-muted">Wow. I just updated my site and it was SO SIMPLE. You guys truly kick ass!</p>
            </div>
        </div>
        
        <div class="col-md-4 col-sm-12">
            <div class="testimonial">
                <img width="100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbcz4j9rRkAF1YHQU9Rk6xl9LlPHxZRSCZXQ&s" alt="Amel">
                <h4>Amel</h4>
                <p class="text-muted">Quick note to say you do a great job. I'm glad I decided to work with you!</p>
            </div>
        </div>
    </div>
</div>
@endsection
