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
                <a href="about.php">
                    <button>About</button>
                </a>
                <a href="cart.php">
                    <button>Cart</button>
                </a>
            </nav>
        </header>
        <?php
            include 'dbcon.php';
            if($_SERVER['REQUEST_METHOD']=="POST")
            {
                $uname = $_POST["name"];
                $email = $_POST["email"];
                $mobile = $_POST["mobile"];
                $upass = $_POST["password"];

                $query = "INSERT INTO details (uname,email,mobile,upass) VALUES ('$uname','$email',$mobile,'$upass')";
                if($conn->query($query))
                {
                    header("location: http://localhost/projects/Pizza%20Palace/?stat=success");
                }
                else
                {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Error while Creating account</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                }
            }
        ?>
        <main class="main">
            <div class="main_div">
                <h1 style="text-align: center;"><b>Signup</b></h1>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <table class="login_table">
                        <tr>
                            <td>
                                <label for="Name">Name</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="name" required placeholder="Enter your Name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="email" name="email" required placeholder="Enter your E-mail ID">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="mobile">Mobile Number</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="tel" name="mobile" required placeholder="Enter your Mobile Number">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Password</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" name="password" required placeholder="Enter your password">
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">
                               <input class="sg" id="submit" type="submit" value="Signup">
                            </td>
                        </tr>
                    </table>                   
                </form>
            </div>
        </main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

