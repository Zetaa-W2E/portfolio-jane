<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url(https://64.media.tumblr.com/506a7ef64c51dd480248da495a3a0856/2fe11e403b8173bf-35/s1280x1920/07052649f98d5c5373c0e8bcb6aaad89e963b351.gif);
    background-repeat: no-repeat;
    background-size: cover;
}

.menu-container {
    text-align: center;
}

.menu {
    display: inline-block;
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

.menu-item {
    display: block;
    color: #fff;
    text-decoration: none;
    font-size: 20px;
    padding: 10px 20px;
    margin: 10px;
    border-radius: 6px;
    transition: background-color 0.3s, transform 0.2s;
}

.menu-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
    transform: scale(1.05);
}

.menu-item:last-child {
    margin-bottom: 0;
}

    </style>
    <title>Game Selector</title>
</head>
<body>
    <div class="menu-container">
        <div class="menu">
            <a href="snake" class="menu-item">Snake Game</a>
            <a href="tic-tac-toe" class="menu-item">Tic Tac Toe Game</a>
            <a href="#" class="menu-item">Bird Game <br> (Coming Soon..)</a>
            <a href="../" class="menu-item">Go To Home</a>
        </div>
    </div>
</body>
</html>
