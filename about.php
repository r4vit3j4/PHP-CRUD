<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pizza Palace</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <header>
            <img class="logo" src="./images/logo.png" alt="logo" height="125" width="125" onclick="window.location.href = '/projects/Pizza Palace'">
            <nav class="links">
                <a href="main.php">
                    <button>Home</button>
                </a>
                <a href="about.php">
                    <button>About</button>
                </a>
                <a href="cart.php">
                    <button>Cart</button>
                </a>
                <a href="logout.php">
                    <button class="logout">Logout</button>
                </a>
            </nav>
        </header>
        <main class="about_main">
            <div class="about_main_div1">
            </div>
            <div class="about_main_div2">
                <h1><b>About US</b></h2>
                <p>Founded in 1994 by a group of friends, Pizza Palace strives <br> to deliver the best pizza's with unmatched quality.</p>
                <h1><b>Developer Info</b></h1>
                <p>Made by <span id="dev">R4VIT3J4</span></p>
                <p>Follow me on <a id="dev_a" href="https://github.com/r4vit3j4">Github</a></p>
            </div>
        </main>
    </body>
</html>