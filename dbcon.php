<?php
    $servername = "localhost";
    $username = "root";
    $serverpass = "";
    $conn = new mysqli($servername,$username,$serverpass);
    if($conn->connect_errno)
    {
        die('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Connection to server failed !!!</strong> ' . $conn->connect_error . ' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
    }
    if(mysqli_select_db($conn,'users')==false)
    {
        $conn->query("CREATE DATABASE users");
    }
    mysqli_select_db($conn,'users');
    $conn->query("CREATE TABLE details (uname VARCHAR(30),email VARCHAR(30),mobile INT(10),upass VARCHAR(30))");
    $conn->query("CREATE TABLE orders (pname VARCHAR(40),quantity INT(10),price INT(10))");
    $c = mysqli_num_rows($conn->query("SELECT pname FROM orders where pname='Margharita'"));
    if($c==0)
    {
        $conn->query("INSERT INTO orders (pname,quantity,price) VALUES ('Margharita',0,199)");
    }
    $c = mysqli_num_rows($conn->query("SELECT pname FROM orders where pname='Cheese n Corn'"));
    if($c==0)
    {
        $conn->query("INSERT INTO orders (pname,quantity,price) VALUES ('Cheese n Corn',0,309)");
    }
    $c = mysqli_num_rows($conn->query("SELECT pname FROM orders where pname='Veggie Pardise'"));
    if($c==0)
    {
        $conn->query("INSERT INTO orders (pname,quantity,price) VALUES ('Veggie Pardise',0,399)");
    }
    if($c==0)
    {
        $conn->query("INSERT INTO orders (pname,quantity,price) VALUES ('Moroccan Spice',0,309)");
    }
    $c = mysqli_num_rows($conn->query("SELECT pname FROM orders where pname='Chicken Dominator'"));
    if($c==0)
    {
        $conn->query("INSERT INTO orders (pname,quantity,price) VALUES ('Chicken Dominator',0,579)");
    }
    $c = mysqli_num_rows($conn->query("SELECT pname FROM orders where pname='Chicken Sausage'"));
    if($c==0)
    {
        $conn->query("INSERT INTO orders (pname,quantity,price) VALUES ('Chicken Sausage',0,339)");
    }
    function clean($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>