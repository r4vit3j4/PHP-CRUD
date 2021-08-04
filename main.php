<!DOCTYPE html>
<html lang="en">
    <?php 
    session_start();
    if(!isset($_SESSION['x'])){
         header('location: http://localhost/projects/Pizza%20Palace/index.php');
    } ?>
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
                <a href="logout.php">
                    <button class="logout">Logout</button>
                </a>
            </nav>
        </header>
        <?php 
            if(isset($_GET['msg']))
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Login Sucessfull!!! </strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
            include 'dbcon.php';               
            if($_SERVER['REQUEST_METHOD']=="POST")
            {
                $q1 = $_POST["quantity_1"];
                $q2 = $_POST["quantity_2"];
                $q3 = $_POST["quantity_3"];
                $q4 = $_POST["quantity_4"];
                $q5 = $_POST["quantity_5"];
                $q6 = $_POST["quantity_6"];
                
                $conn->query("UPDATE orders SET quantity=$q1 WHERE pname='Margharita'");
                $conn->query("UPDATE orders SET quantity=$q2 WHERE pname='Cheese n Corn'");
                $conn->query("UPDATE orders SET quantity=$q3 WHERE pname='Veggie Pardise'");
                $conn->query("UPDATE orders SET quantity=$q4 WHERE pname='Moroccan Spice'");
                $conn->query("UPDATE orders SET quantity=$q5 WHERE pname='Chicken Dominator'");
                $conn->query("UPDATE orders SET quantity=$q6 WHERE pname='Chicken Sausage'");
                
                $_SESSION['q1'] = $q1;
                $_SESSION['q2'] = $q2;
                $_SESSION['q3'] = $q3;
                $_SESSION['q4'] = $q4;
                $_SESSION['q5'] = $q5;
                $_SESSION['q6'] = $q6;

                echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Added to Cart!!!</strong>&nbsp;&nbsp;Proceed to Cart for checkout or you can update the cart below<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }     
        ?>
        <main class="pizza_main">
            <div>
                <form method="POST" action="main.php">
                <table>
                    <tr>
                        <td>
                            <div class="pizza_div">
                                <div class="pizza_div_1">
                                    <img src="images/pizzas/margherita.jpg" height="150" width="160">
                                </div>
                                <div style="padding:10px;" class="pizza_div_2">
                                    <h3>Margharita <br>₹199</h3><hr>
                                    <p style="padding: 10px 0px;">A classic delight with 100% Real mozzarella cheese</p>
                                    <div class="addtocart">
                                        <span><b>Quantity</b></span>
                                            <input name="quantity_1" style="width: 50px;height: 22px;" type="number" width="2" maxlength="2" value="<?php if(isset($_SESSION['q1'])){echo $_SESSION['q1'];}else{ echo 0;} ?>" min="0">
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="pizza_div">
                                <div class="pizza_div_1">
                                    <img src="images/pizzas/cheese_n_corn.jpg" height="150" width="160">
                                </div>
                                <div style="padding:10px;" class="pizza_div_2">
                                    <h3>Cheese n Corn <br>₹309</h3><hr>
                                    <p style="padding: 10px 0px;">Sweet & Juicy Golden corn and 100% real mozzarella cheese in a delectable combination !</p>
                                    <div class="addtocart">
                                            <span><b>Quantity</b></span>                                   
                                            <input name="quantity_2" style="width: 50px;height: 22px;" type="number" width="2" maxlength="2"  value="<?php if(isset($_SESSION['q2'])){echo $_SESSION['q2'];}else{ echo 0;} ?>" min="0">
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="pizza_div">
                                <div class="pizza_div_1">
                                    <img src="images/pizzas/veggie paradise.jpg" height="150" width="160">
                                </div>
                                <div style="padding:10px;" class="pizza_div_2">
                                    <h3>Veggie Pardise <br>₹399</h3><hr>
                                    <p style="padding: 10px 0px;">The awesome foursome! Golden corn, black olives, capsicum, red paprika.</p>
                                    <div class="addtocart">
                                        <span><b>Quantity</b></span>
                                        <input name="quantity_3" style="width: 50px;height: 22px;" type="number" width="2" maxlength="2" value="<?php if(isset($_SESSION['q3'])){echo $_SESSION['q3'];}else{ echo 0;} ?>" min="0">
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="pizza_div">
                                <div class="pizza_div_1">
                                    <img src="images/pizzas/moroccanspice.jpg" height="150" width="160">
                                </div>
                                <div style="padding:10px;" class="pizza_div_2">
                                    <h3>Moroccan Spice <br>₹309</h3><hr>
                                    <p style="padding: 10px 0px;">A pizza loaded with a spicy combination of Harissa sauce and delicious pasta.</p>
                                    <div class="addtocart">
                                        <span><b>Quantity</b></span>
                                        <input name="quantity_4" style="width: 50px;height: 22px;" type="number" width="2" maxlength="2" value="<?php if(isset($_SESSION['q4'])){echo $_SESSION['q4'];}else{ echo 0;} ?>" min="0">
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="pizza_div">
                                <div class="pizza_div_1">
                                    <img src="images/pizzas/chicken_dominator.jpg" height="150" width="160">
                                </div>
                                <div style="padding:10px;" class="pizza_div_2">
                                    <h3>Chicken Dominator <br>₹579</h3><hr>
                                    <p style="padding: 10px 0px;">Loaded with double pepper barbecue chicken, peri-peri chicken, chicken tikka & grilled chicken rashers</p>
                                    <div class="addtocart">
                                        <span><b>Quantity</b></span>
                                        <input name="quantity_5" style="width: 50px;height: 22px;" type="number" width="1" maxlength="1" value="<?php if(isset($_SESSION['q5'])){echo $_SESSION['q5'];}else{ echo 0;} ?>" min="0">
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="pizza_div">
                                <div class="pizza_div_1">
                                    <img src="images/pizzas/new_chicken_sausage.jpg" height="150" width="160">
                                </div>
                                <div style="padding:10px;" class="pizza_div_2">
                                    <h3>Chicken Sausage <br>₹339</h3><hr>
                                    <p style="padding: 10px 0px;">American classic! Spicy, herbed chicken sausage on pizza</p>
                                    <div class="addtocart">
                                        <span><b>Quantity</b></span>
                                        <input name="quantity_6" style="width: 50px;height: 22px;" type="number" width="2" maxlength="2" value="<?php if(isset($_SESSION['q6'])){echo $_SESSION['q6'];}else{ echo 0;} ?>" min="0">
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="atc">
                                <input type="submit" value="Add to Cart">   
                            </div>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>