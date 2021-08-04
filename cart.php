<?php 
    session_start();
    if(!isset($_SESSION['x']))
    {
        header('location: http://localhost/projects/Pizza%20Palace/index.php');
    } 
?>
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
        <main class="main_cart">
            <div class="div_cart">
                <h1><b>Your Cart</b></h1>
                <?php
                    include 'dbcon.php';
                    $conn->query("DELETE FROM orders WHERE quantity=0");
                    $cnt = mysqli_num_rows($conn->query("SELECT * FROM orders"));
                    if($cnt == 0)
                    {
                        echo "<h2 style='margin-top:60px;' class='empty_cart'><b>Your Cart is empty</b></h2>";
                    }
                    else
                    {
                        $result = $conn->query("SELECT * FROM orders");
                        echo "<table border='1' class='table' style='background-color:white'>
                        <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        </tr>";
                        $total = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td>" . $row['pname'] . "</td>";
                            echo "<td>" . $row['quantity'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "</tr>";
                            $total = $total + ($row['quantity']*$row['price']);
                        }
                        echo "<tr><th>Total Price</th><td></td><th>$total</th>";
                        echo "</table>";
                    }
                ?>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>