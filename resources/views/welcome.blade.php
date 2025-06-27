<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CatLover Petshop - Landing Page</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <style>
        body {
            background: linear-gradient(120deg, #fff8e1 0%, #ffe0b2 100%);
            font-family: 'Nunito', sans-serif;
            margin: 0;
            min-height: 100vh;
        }
        .landing-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .landing-card {
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 8px 32px rgba(255,152,0,0.10);
            padding: 48px 32px 32px 32px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .landing-logo {
            font-size: 3.5rem;
            color: #ff9800;
            margin-bottom: 12px;
        }
        .landing-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #ff9800;
            margin-bottom: 8px;
        }
        .landing-subtitle {
            color: #757575;
            font-size: 1.1rem;
            margin-bottom: 28px;
        }
        .landing-btn {
            background: #ff9800;
            color: #fff;
            border: none;
            border-radius: 22px;
            padding: 12px 36px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
            box-shadow: 0 2px 8px rgba(255,152,0,0.10);
            text-decoration: none;
            display: inline-block;
        }
        .landing-btn:hover {
            background: #fb8c00;
            color: #fff;
        }
        .landing-footer {
            margin-top: 32px;
            color: #bdbdbd;
            font-size: 0.95em;
        }
        @media (max-width: 600px) {
            .landing-card { padding: 32px 12px 24px 12px; }
            .landing-title { font-size: 1.5rem; }
        }
    </style>
</head>
<body>
    <div class="landing-container">
        <div class="landing-card animate__animated animate__fadeInDown">
            <div class="landing-logo">
                <i class="fas fa-paw"></i>
            </div>
            <div class="landing-title">
                CatLover Petshop
            </div>
            <div class="landing-subtitle">
                Temukan kebutuhan hewan peliharaanmu di marketplace kami.<br>
                Login untuk mulai berbelanja!
            </div>
            <a href="{{ route('login') }}" class="landing-btn">
                <i class="fas fa-sign-in-alt"></i> Login untuk Marketplace
            </a>
        </div>
        <div class="landing-footer">
            &copy; {{ date('Y') }} CatLover Petshop. All rights reserved.
        </div>
    </div>
</body>
</html>
