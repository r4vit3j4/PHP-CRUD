<?php
    session_start();
    if(isset($_SESSION['x']))
    {
         header('location: http://localhost/projects/Pizza%20Palace/main.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pizza Palace</title>
        <link rel="stylesheet" href="styles/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
               
            </nav>
        </header>
        <?php
            include 'dbcon.php';
            if(isset($_GET['stat']))
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Accout Created Successfully!!!</strong> Proceed to Login <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
            if(isset($_GET['logout']))
            {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Logged Out!!!</strong> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
            if($_SERVER['REQUEST_METHOD']=="POST")
            {
                $tempmail = clean($_POST["email"]);
                $temppass = clean($_POST["password"]);
                $res = $conn->query("SELECT email FROM details WHERE email='$tempmail' and upass='$temppass'");
                $count = mysqli_num_rows($res);
                if($count==1)
                {
                    $_SESSION['x']=md5($tempmail);
                    header('location: http://localhost/projects/Pizza%20Palace/main.php?msg=Login+Success');
                }
                else
                {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Error Logging in</strong>  Check your email or password <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                }
            }
        ?>
        <main class="main">
            <div class="main_div">
                <h1 style="text-align: center;"><b>Login</b></h1>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <table class="login_table">
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
                                <input class="sg" id="submit" type="submit" value="Login">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>New Here? <a href="signup.php" id="signupa">Signup</a></span>
                            </td>
                        </tr>
                    </table>                   
                </form>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>