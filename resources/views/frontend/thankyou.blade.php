@extends('frontend.layouts.app')
@section('content')
    <style>
        section {
            
            margin: 0;
            padding: 0;
            background-color: #f4f8fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            
        }

        .thank-you-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
        }

        .thank-you-container img {
            width: 100px;
            margin-bottom: 20px;
        }

        .thank-you-container h1 {
            color: #2d6a4f;
            font-size: 32px;
            margin-bottom: 10px;
        }

        .thank-you-container p {
            font-size: 18px;
            color: #555;
        }

        .thank-you-container a {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 25px;
            background-color: #2d6a4f;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
        }

        .thank-you-container a:hover {
            background-color: #1b4332;
        }
    </style>
    <section>
    <div class="thank-you-container">
        <img src="https://img.icons8.com/emoji/96/000000/check-mark-emoji.png" alt="Thank You">
        <h1>Thank You!</h1>
        <p>We have received your inquiry. Our Team will get back to you soon</p>
        <a href="/">Go to Homepage</a>
    </div>
    </section>

 <script>
    setTimeout(() => {
        window.location.href = "/";
    }, 5000); // Redirects after 5 seconds
</script> 
@endsection