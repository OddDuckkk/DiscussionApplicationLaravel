<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/landing.css') }}"> --}}
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Roboto', sans-serif;
    background: linear-gradient(135deg, #1e90ff, #87cefa);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    text-align: center;
    color: white;
    max-width: 600px;
    padding: 20px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
}

p {
    font-size: 1.2em;
    margin-bottom: 30px;
}

.buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.btn {
    background: white;
    color: #1e90ff;
    padding: 10px 20px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background 0.3s, color 0.3s;
}

.btn:hover {
    background: #1e90ff;
    color: white;
}

</style>
<body>
    <div class="container">
        <div class="content">
            <h1>Welcome to Discussion!</h1>
            <p>Discuss about anything with everyone!</p>
            <div class="buttons">
                <a href="/session" class="btn">Login</a>
                <a href="/session/register" class="btn">Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>
