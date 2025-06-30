@extends("layout.master")

@section("content")
<head>
    <title>Toring | Page Not Found</title>
    <style>
        

        .not-found-box {
            background: #fff;
            padding: 3rem;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            max-width: 600px;
            width: 100%;
            text-align: center;
            margin: auto;
            
        }

        .not-found-box h1 {
            font-size: 5rem;
            font-weight: 800;
            color: #dc3545;
            margin-bottom: 1rem;
        }

        .not-found-box h3 {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        .not-found-box a.btn {
            font-size: 1.1rem;
            padding: 0.75rem 2rem;
        }

        @media (max-width: 576px) {
            .not-found-box h1 {
                font-size: 3rem;
            }

            .not-found-box h3 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>

<div class="not-found-box">
    <h1>404</h1>
    <h3>Oops! The page you're looking for doesn't exist.</h3>
    <a href="/stories" class="btn btn-danger">← Back to All Stories</a>
</div>
@endsection
