<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Navigation</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
        }
        .container h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        .buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }
        .buttons button {
            padding: 10px 20px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: white;
            color: black;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .buttons button:hover {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fill your KRA with us</h1>
        <div class="buttons">

<a href="{{ route('nil') }}">
    <button type="button"> Nil Returns </button>
</a>

<a href="{{ route('p9') }}">
    <button type="button">P9 Returns </button>
</a>

            <!-- <button class="nil-button" onclick="nil.blade.php='nil.html'">Nil Returns</button> -->
            <!-- <button class="p9-button" onclick="window.location.href='p9.html'">P9 Returns</button> -->
        </div>
    </div>
</body>
</html>
