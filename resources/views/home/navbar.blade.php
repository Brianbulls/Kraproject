<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
        }
        .navbar .logo img {
            height: 50px; /* Adjust the height as needed */
        }
        .navbar .tagline {
            font-size: 1.2em;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="/path/to/your/logo.png" alt="Logo"> <!-- Replace with the actual path to your logo -->
        </div>
        <div class="tagline">
            A product of Bull Technologies
        </div>
    </nav>
    <div class="content">
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
