<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            background-color: red;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-family: Arial, sans-serif;
        }
        .form-container {
            background-color: #333;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container form {
            display: flex;
            flex-direction: column;
        }
        .form-container label {
            margin-bottom: 5px;
        }
        .form-container input {
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
        }
        .form-container input[type="submit"] {
            background-color: white;
            color: black;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .form-container input[type="submit"]:hover {
            background-color: red;
            color: white;
        }
        .form-container .note {
            font-size: 0.9em;
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Register For P9 returns </h1>
        <form>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="kra-pin">KRA PIN</label>
            <input type="text" id="kra-pin" name="kra-pin" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="phone">Phone Number <span class="note">(we will contact you only when necessary)</span></label>
            <input type="tel" id="phone" name="phone" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
