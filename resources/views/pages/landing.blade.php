<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saint Lucis Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            flex-direction: column;
            position: relative;
        }
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset('images/image.png') }}') no-repeat center center/cover;
            z-index: -1;
            mask-image: none; /* Ensures no dark edges */
            -webkit-mask-image: none; /* Ensures no dark edges */
            background-color: rgba(0, 0, 0, 0); /* Add a transparent background to avoid white vignette */
        }
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        h1 {
            font-size: 64px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
        }
        .highlight {
            color: yellow;
            font-style: italic;
            font-size: 56px;
            font-weight: 400;
        }
        .btn {
            display: inline-block;
            background-color: #616879;
            color: white;
            padding: 16px 64px; /* Increased padding for width */
            text-decoration: none;
            margin-top: 20px;
            border-radius: 2px; /* Decreased border-radius for sharper edges */
            font-size: 18px;
            font-family: 'Fira Code', monospace;
            letter-spacing: 2px;
        }

        .footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            font-size: 14px;
            color: white;
            letter-spacing: 1px;
            font-family: 'Fira Code', monospace;
        }
        p {
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 20px;
            left: 20px;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <p>Portfolio</p>
    <div class="container">
        <br> <br> <br> <br> <br> <br> <br> <br> 
        <a href="{{ route('home') }}" class="btn">HOME</a>
    </div>
    <div class="footer">Esports • Automotive • Technology</div>
</body>
</html>
