<?php
include ('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="s1.css">
    <title>Admin login</title>
    <!-- <style>
        .full{
    width:100%;
    height: auto;
}
#inner_full{
    width: 80%;
    margin: auto;
    height: auto;
}
#header{
    width: 100%;
    height: 50px;
    background-color: red;
    color: white;
}

    width: 100%;
    height: 70px;
    background-color: red;
    color: white;
}
    </style> -->
<style>
    #body{
    width: 100%;
    height: 550px;
    border-radius: 10px;
    background-image:url(bag.jpeg);
    /* bacbackground-color: red; */
    background-repeat: no-repeat;
    /* object-fit: contain; */
    /* transition: width 2s; */
    /* background-color: rgb(237, 200, 136);   */
    margin-top:20px
    
}
ul{
    margin-top:60px;
}
li{
     box-shadow: green;
}
#footer{
    border-radius: 10px;
}
#header{
    background-color:rgb(105,105,105);
    border-radius: 10px;
}
</style>
    

    
</head>
<body>
    <div class="full">
    <div id="inner_full">
        <div id="header"><h2  style=" margin-left:30%;"><a href="admin-home.php" style="text-decoration: none;color:white;">BLOOD BANK MANAGEMENT SYSTEM</a></h2></div>
        <div id="body" >
            <br>
            <?php
              $un=$_SESSION['un'];
             if(!$un){
                header("Location:index.php");
             }
            ?>
            <h1>WELCOME ADMIN</h1><br><br>
             <ul>
                <li><a href="donor-red.php">DONOR REGISTRATION</a></li>
                <li><a href="donor-list.php">DONOR LIST</a></li>
                <li><a href="stock-blood-list.php">BLOOD STOKE</a></li>
             </ul><br><br><br><br>
             <!-- <ul>
                <li><a href="out-stock-blood-list.php">OUT STOCK BLOOD LIST</a></li>
                <li><a href="exchange-blood-list.php">EXCHANGE BLOOD LIST</a></li>
                <li><a href="ngo-list.php">NGO LIXT</a></li>
             </ul> -->


        </div>
        <div id="footer"><h4 align="center">copyright@myproject</h4>
        <p  id="par"><a href="logout.php"> <font color="white">Logout</a></p>
    </div>

    </div>
    </div>
</body>
</html>